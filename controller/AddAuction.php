<?php
    include("../controller/common/redir.php");
    include("../model/db_config.php");

    $target_dir = "../assets/uploads/";
    $title="";
    $titleErr="";
    $description="";
    $descriptionErr="";
    $startPrice="";
    $startPriceErr="";
    $photoErr="";
    $hasErr=false;

    if(isset($_POST['submit']))
    {
        if(empty($_POST['title']))
        {
            $hasErr=true;
            $titleErr="Field Is Required";
        }
        elseif(strlen($_POST['title'])<4)
        {
            $hasErr=true;
            $titleErr="Title must be greater then 4";
        }
        else
        {
            $title=$_POST['title'];
        }

        if(empty($_POST['description']))
        {
            $hasErr=true;
            $descriptionErr="Field Is Required";
        }
        elseif(strlen($_POST['description'])<4)
        {
            $hasErr=true;
            $descriptionErr="Description must be greater then 4";
        }
        else
        {
            $description=$_POST['description'];
        }

        if(empty($_POST['startPrice']))
        {
            $hasErr=true;
            $startPriceErr="Field Is Required";
        }
        else{
            $startPrice=$_POST['startPrice'];
        }
        if($hasErr==false)
        {
            $title=$_POST['title'];
            $description=$_POST['description'];
            $startPrice=$_POST['startPrice'];

            $uniquesavename=time().uniqid(rand());
            $destFile = $target_dir . $uniquesavename . '.jpg';
            $filename = $_FILES["photo"]["tmp_name"];
            if(empty($filename))
            {
                $photoErr="Please Upload Photo";
                return;
            }
            list($width, $height) = getimagesize( $filename );
            move_uploaded_file($filename,  $destFile);
            $query="Select * from users where username='$_SESSION[user]'";
            $sellerID=get($query)[0]['id'];
            $query="Insert Into auctions(title,description, photo, init_price, seller_id, status) Values('$title','$description', '".$uniquesavename . '.jpg'."', '$startPrice', '$sellerID', 'active')";
            $result=execute($query);
            if($result==true)
            {
                header("Location: ../view/index.php");
            }
            else
            {
                echo "Error";
            }
        }
    }
?>