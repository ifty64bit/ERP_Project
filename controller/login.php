<?php

$uname="";
$uname_error="";
$pass="";
$pass_error="";
$type="";
$hasError=false;

if( isset($_POST["login"]))
{
    if( empty($_POST["uname"]) )
    {
        
			$hasError=true;
			$uname_error="Field Is Required";
    }
    elseif(strlen($_POST['uname'])<5)
	{
		$hasError=true;
		$uname_error="Username must be greater then 5";
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

    if ($_POST['login_as'] == "stuff" || $_POST['login_as'] == "admin")
    {
        $type = $_POST['login_as'];
    }

    if($hasError==false)
    {
        print_r($uname);
        print_r($pass);
        print_r($type);
        $string= file_get_contents("./assets/data.json");
        print_r(json_decode($string,true));
    }
}

?>