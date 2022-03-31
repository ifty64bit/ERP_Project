<?php
    $rootPath = $_SERVER['DOCUMENT_ROOT'];
    $myfile = fopen($rootPath."/ERP/assets/data.json", "a+") or die("Unable to open file!");
    $data = fread($myfile,filesize($rootPath."/ERP/assets/data.json"));
    $data = json_decode($data,true);

    function getUserByUname($k)
    {
        global $data;
        foreach( $data as $d)
        {
            if($d['uname']==$k)
            {
                return $d;
            }
        }
        return false;
    }

    function addUser($uname,$pass,$fname,$lname,$phone,$email,$date,$month,$year,$role,$subRole,$salary,$photo)
    {
        global $data;
        global $myfile;
        global $rootPath;
        $newUser=array(
            'uname'=>$uname,
            'pass'=>$pass,
            'firstName'=>$fname,
            'lastName'=>$lname,
            'dateOfBirth'=>"$date"."/"."$month"."/"."$year",
            'role'=>$role,
            'subRole'=>$subRole,
            'phone'=>$phone,
            'email'=>$email,
            'salary'=>$salary,
            'account-status'=>'active',
            'photo'=>$photo
        );
        array_push($data,$newUser);
        echo "<br>";
        print_r(json_encode($data));
        file_put_contents($rootPath."/ERP/assets/data.json",json_encode($data));
        fclose($myfile);
    }

    function updateUser($uname,$pass,$fname,$lname,$phone,$email,$date,$month,$year,$role,$subRole,$salary, $accStatus, $photo)
    {
        global $data;
        global $myfile;
        global $rootPath;
        $newArr=array();
        foreach($data as $d)
        {
            if($d['uname']==$uname)
            {
                $newarr=array(
                'uname'=>$uname,
                'pass'=>$pass,
                'firstName'=>$fname,
                'lastName'=>$lname,
                'dateOfBirth'=>"$date"."/"."$month"."/"."$year",
                'role'=>$role,
                'subRole'=>$subRole,
                'phone'=>$phone,
                'email'=>$email,
                'salary'=>$salary,
                'account-status'=>$accStatus,
                'photo'=>$photo
                );
                array_push($newArr, $newarr);
            }
            else{
                array_push($newArr,$d);
            }
        }
        file_put_contents($rootPath."/ERP/assets/data.json",json_encode($newArr));
        fclose($myfile);
    }

    function deleteUser($user)
    {
        global $data;
        global $myfile;
        global $rootPath;
        for($i=0; $i < count($data); $i++)
        {
            if($data[$i]['uname']==$user)
            {
                unset($data[$i]);
            }
        }
        echo "<br>";
        file_put_contents($rootPath."/ERP/assets/data.json",json_encode($data));
        fclose($myfile);
        header("Location: ../view/ManageUser.php");
    }

    function login($_uname, $_pass, $_role)
    {
        global $data;
        foreach( $data as $d)
        {
            if($d['uname']==$_uname && $d['pass']==$_pass && $d['role']==$_role)
            {
                return $d;
            }
        }
        return false;
    }
?>