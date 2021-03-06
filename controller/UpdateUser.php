<?php
    //include("../controller/common/fileIO.php");
    include("../model/db_config.php");
    $target_dir = "../assets/uploads/";
    $username=$_GET['username'];
    $query="Select * from users where username='$username'";
    $user=get($query)[0];
    $uname=$user['username'];
    $unameErr="";
    $pass=$user['password'];
    $passErr="";
    $fname=$user['firstName'];
    $fnameErr="";
    $lname=$user['lastName'];
    $lnameErr="";
    $phone=$user['phone'];
    $phoneErr="";
    $email=$user['email'];
    $emailErr="";
    $date=$user['birthDate'];
    $dateErr="";
    $month=$user['birthMonth'];
    $monthErr="";
    $year=$user['birthYear'];
    $yearErr="";
    $role=$user['type'];
    $roleErr="";
    $subRole="";
    $salary=$user['salary'];
    $status=$user['accountStatus'];
    $photo=$user['photoName'];
    $hasErr=false;

    function checkMail($email)
    {
        $len=strlen($email);
		for($i=0;$i<$len;$i++)
		{
			if($email[$i]=='@')
			{
				return true;
			}
		}
        return false;
    }

    if( isset($_POST['submit']) )
    {
        if( empty($_POST["uname"]) )
        {
            $hasErr=true;
            $unameErr="Field Is Required";
        }
        elseif(strlen($_POST['uname'])<4)
        {
            $hasErr=true;
            $unameErr="Username must be greater then 4";
        }
        else
        {   
            $uname=$_POST['uname'];
        }

        if( empty($_POST["pass"]) )
        {
            $passErr="Field Is Required";
        }
        elseif(strlen($_POST["pass"])<4)
        {
            $hasErr=true;
            $passErr="Password must be greeter then 4";
        }
        else
        {
            $pass=$_POST['pass'];
        }

        if( empty($_POST["fname"]) )
        {
            $fnameErr="Field Is Required";
        }
        elseif(strlen($_POST["fname"])<4)
        {
            $hasErr=true;
            $fnameErr="First Name must be greater then 4";
        }
        else
        {
            $fname=$_POST['fname'];
        }

        if( empty($_POST["lname"]) )
        {
            $lnameErr="Field Is Required";
        }
        elseif(strlen($_POST["lname"])<4)
        {
            $hasErr=true;
            $lnameErr="Last Name must be greater then 4";
        }
        else
        {
            $lname=$_POST['lname'];
        }

        if( empty($_POST["phone"]) )
        {
            $phoneErr="Field Is Required";
        }
        elseif(strlen($_POST["phone"])<10)
        {
            $hasErr=true;
            $phoneErr="Phone Number must be greater then 10";
        }
        else
        {
            $phone=$_POST['phone'];
        }

        if( empty($_POST["email"]) )
        {
            $emailErr="Field Is Required";
        }
        elseif(checkMail($_POST['email'])==false)
        {
            $hasErr=true;
            $emailErr="Invalid Email";
        }
        else
        {
            $email=$_POST['email'];
        }

        if( empty($_POST["date"]) )
        {
            $dateErr="Field Is Required";
        }
        else
        {
            $date=$_POST['date'];
        }

        if( empty($_POST["month"]) )
        {
            $monthErr="Field Is Required";
        }
        else
        {
            $month=$_POST['month'];
        }

        if( empty($_POST["year"]) )
        {
            $yearErr="Field Is Required";
        }
        else
        {
            $year=$_POST['year'];
        }

        if( empty($_POST["role"]) )
        {
            $roleErr="Field Is Required";
        }
        else
        {
            $role=$_POST['role'];
        }
        if(empty($_POST['salary']))
        {
            $hasErr=true;
            $salaryErr="Field Is Required";
        }
        else{
            $salary=$_POST['salary'];
        }

        if(empty($_POST['date']))
        {
            $hasErr=true;
            $dateErr="Please Select Date";
        }
        else{
            $date=$_POST['date'];
        }

        if(empty($_POST['month']))
        {
            $hasErr=true;
            $monthErr="Please Select month";
        }
        else{
            $month=$_POST['month'];
        }

        if(empty($_POST['year']))
        {
            $hasErr=true;
            $yearErr="Please Select year";
        }
        else{
            $year=$_POST['year'];
        }

        if(empty($_POST['role']))
        {
            $hasErr=true;
            $roleErr="Please User Role";
        }
        else{
            $role=$_POST['role'];
        }

        if($hasErr==false)
        {
            $filename = $_FILES["photo"]["tmp_name"];
            if(empty($_FILES["photo"]["tmp_name"]))
            {
                updateUser($uname, $pass, $fname, $lname, $phone, $email, $date, $month, $year, $role, $subRole, $salary, $accountStatus, $photo);
            }
            else{
                $uniquesavename=time().uniqid(rand());
                $destFile = $target_dir . $uniquesavename . '.jpg';
                list($width, $height) = getimagesize( $filename );
                move_uploaded_file($filename,  $destFile);
                updateUser($uname, $pass, $fname, $lname, $phone, $email, $date, $month, $year, $role, $subRole, $salary, $accountStatus, $uniquesavename . '.jpg');
            }
            header("Location: ./index.php");
        }
    }
?>