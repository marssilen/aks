<?php
$settings=$this->settings;
?>
<!doctype html>
<html lang="fa">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="<?php if(isset($settings['logo']))echo $settings['logo'];else{?>#<?php } ?>"/>
    <meta name="keywords" content="<?php if(isset($settings['keywords']))echo $settings['keywords'];else{?>MIM PHOTOGRAPHY<?php } ?>"/>
    <meta name="description" content="<?php
    if(isset($desc)){
        echo $desc;
    }elseif(isset($settings['description'])){
        echo $settings['description'];
    }else{echo 'MIM PHOTOGRAPHY';
    }?>"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= URL ?>public/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= URL ?>public/css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->
<link rel="stylesheet" href="<?= URL ?>public/css/mycss.css">

<?php require_once('app/views/font.php'); ?>
<!-- jQuery library -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="<?= URL ?>public/js/myscript.js"></script>
<script src="<?= URL ?>public/js/header.js.php"></script>
<title><?php if(isset($title) and isset($settings['title']))echo $title.'-'.$settings['title'];
elseif(isset($settings['title']))echo $settings['title'];else{?>MIM PHOTOGRAPHY<?php } ?></title>
    <style>
        .xxx{
            cursor: pointer;
        }
        .slides{
            display: none;
        }
        div.scrollmenu{
            background-color: #333;
            overflow: auto;
            white-space: nowrap;
            padding: 8px;
        }
        div.scrollmenu img{
            transition: all .2s ease-in-out;
        }
        div.scrollmenu img:hover,img:focus{
            cursor: pointer;
            transform: scale(0.8);
        }
        body,h3{
            font-family: 'Yekan' ;
            /*font-size: 15px;*/
            text-align: right;
            direction: rtl;
        }
        #footer{
            margin: 0px;
            padding: 0px;
            height: 150px;
            border: none;
        }
        body{
            padding-bottom: 0px;
        }
        a:link, a:visited{
            text-decoration:none;
        }
        ul li{
            list-style-type: none;
        }
        li ul li{
            margin-left:-1em;
        }

        .bg-dark {
            background-color: #494949;
            color:#BFB8B8;
        }
        .top-align{
            padding:10px 50px 10px 50px;
        }
        .img_c{
            overflow: hidden;
        }
        .image{
            width: 100%;
            overflow: hidden;
            transition: all .2s ease-in-out;
        }
        .image:hover{
            -ms-transform: scale(1.1); /* IE 9 */
            -webkit-transform: scale(1.1); /* Safari */
            transform: scale(1.1);
        }


        .fa {
            padding: 10px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 6px 2px;
            border-radius: 50%;
        }

        .fa:hover {
            /*opacity: 0.7;*/
            color: black;
            /*box-shadow: yellow 10px;*/
        }
        .fa-telegram {
            background: #fff;
            color: #00aff0;
        }
        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }
        .fa-instagram {
            background: #125688;
            color: white;
        }
    </style>
</head>
