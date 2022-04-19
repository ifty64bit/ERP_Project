<?php
session_start();
$rootPath = $_SERVER['DOCUMENT_ROOT'];
//include($rootPath."/ERP/controller/common/fileIO.php");
include($rootPath."/ERP/model/db_config.php");

$uname="";
$uname_error="";
$pass="";
$pass_error="";
$type="";
$loginErr="";
$hasError=false;

if( isset($_POST["login"]))
{
    if( empty($_POST["uname"]) )
    {
        
			$hasError=true;
			$uname_error="Field Is Required";
    }
    elseif(strlen($_POST['uname'])<4)
	{
		$hasError=true;
		$uname_error="Username must be greater then 4";
	}
	else
	{
		$uname=$_POST['uname'];
	}

    if( empty($_POST["pass"]) )
    {
			$hasError=true;
			$pass_error="Field Is Required";
    }
	else
	{
		$pass=$_POST['pass'];
	}

    if ($_POST['login_as'] == "admin" || $_POST['login_as'] == "user")
    {
        $type = $_POST['login_as'];
    }

    if($hasError==false)
    {
        //$loginData=login($uname, $pass, $type);
        $query="Select * From users Where username='$uname' and password='$pass' and type='$type'";
        $loginData=get($query);
        if(count($loginData)==0)
        {
            $loginErr="Invalid Username or Password";
        }
        else
        {
            $_SESSION['user']=$loginData[0]['username'];
            $_SESSION['role']=$loginData[0]['type'];
            header("Location: ../view/index.php");
        }
    }
}

?>