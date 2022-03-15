<?php
    //echo $_SERVER['PHP_SELF'];
    $myfile = fopen("../assets/data.json", "a+") or die("Unable to open file!");
    $data = fread($myfile,filesize("../assets/data.json"));
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
            return false;
        }
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
            return false;
        }
    }

    fclose($myfile);
?>