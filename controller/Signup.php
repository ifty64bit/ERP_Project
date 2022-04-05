<?php
    include("../model/db_config.php");
    $target_dir = "../assets/uploads/";
    $username="";
    $usernameErr="";
    $password="";
    $passwordErr="";
    $firstname="";
    $firstnameErr="";
    $lastname="";
    $lastnameErr="";
    $phone="";
    $phoneErr="";
    $email="";
    $emailErr="";
    $photo="";
    $photoErr="";
    $accountStatus="";
    $accountStatusErr="";
    $birthDate="";
    $birthDateErr="";
    $birthMonth="";
    $birthMonthErr="";
    $birthYear="";
    $birthYearErr="";
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
        if( empty($_POST["username"]) )
        {
            $hasErr=true;
            $usernameErr="Field Is Required";
        }
        elseif(strlen($_POST['username'])<4)
        {
            $hasErr=true;
            $usernameErr="Username must be greater then 4";
        }
        else
        {   
            $username=$_POST['username'];
        }

        if( empty($_POST["pass"]) )
        {
            $passwordErr="Field Is Required";
        }
        elseif(strlen($_POST["pass"])<4)
        {
            $hasErr=true;
            $passwordErr="Password must be greeter then 4";
        }
        else
        {
            $password=$_POST['pass'];
        }

        if( empty($_POST["fname"]) )
        {
            $firstnameErr="Field Is Required";
        }
        elseif(strlen($_POST["fname"])<4)
        {
            $hasErr=true;
            $firstnameErr="First Name must be greater then 4";
        }
        else
        {
            $firstname=$_POST['fname'];
        }

        if(empty($_POST["lname"]) )
        {
            $lastnameErr="Field Is Required";
        }
        elseif(strlen($_POST["lname"])<4)
        {
            $hasErr=true;
            $lastnameErr="Last Name must be greater then 4";
        }
        else
        {
            $lastname=$_POST['lname'];
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
            $birthDateErr="Field Is Required";
        }
        else
        {
            $birthDate=$_POST['date'];
        }

        if( empty($_POST["month"]) )
        {
            $birthMonthErr="Field Is Required";
        }
        else
        {
            $birthMonth=$_POST['month'];
        }

        if( empty($_POST["year"]) )
        {
            $birthYearErr="Field Is Required";
        }
        else
        {
            $birthYear=$_POST['year'];
        }

        if($hasErr==false)
        {
            $uniquesavename=time().uniqid(rand());
            $destFile = $target_dir . $uniquesavename . '.jpg';
            $filename = $_FILES["photo"]["tmp_name"];
            if(empty($filename))
            {
                $photoErr="Photo Is Required";
                return;
            }
            list($width, $height) = getimagesize( $filename );
            move_uploaded_file($filename,  $destFile);

            $query="Insert Into users (username, password, firstName, lastName, phone, email, birthDate, birthMonth, birthYear, type, salary, photoName, accountStatus) Values('$username','$password','$firstname','$lastname','$phone','$email','$birthDate','$birthMonth','$birthYear','user','0','".$uniquesavename . '.jpg'."' , 'active');";
            $result=execute($query);
            if($result==true)
            {
                header("Location: ./login.php");
            }
            else{
                print_r($result);
            }
        }
    }
?>