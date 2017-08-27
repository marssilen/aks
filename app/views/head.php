<!doctype html>
<html lang="fa">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= URL ?>public/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= URL ?>public/css/w3.css">

<!--<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->
<link rel="stylesheet" href="<?= URL ?>public/css/mycss.css">

<?php require_once('app/views/font.php'); ?>
<!-- jQuery library -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="<?= URL ?>public/myscript.js"></script>
<script src="<?= URL ?>public/js/header.js.php"></script>
<title>MIM PHOTOGRAPHY</title>
    <style>
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

    </style>
<!-- <script>
$(function(){
// $(".image").height($("#image").width()*9/16);
});
</script> -->
</head>
