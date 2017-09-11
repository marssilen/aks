<?php require_once('app/views/head.php'); ?>
<body>
<?php require_once('app/views/menu.php'); ?>
<?php 
//require_once('app/views/header.php'); 
?>

<!--  -->
<div class="w3-white w3-padding-16" dir="rtl">
<div class="container w3-row">
  <div class="w3-col m6">
  </div>
  <div class="w3-col m6">
  </div>
</div>
</div>
<!--  -->
<div class="container w3-row" style="padding: 50px">
<div class="w3-col m3 s12 pad">

        <div class="w3-card-2 w3-round">
            <img src="<?= URL ?>public/profile.png" alt="profile" style="width: 100%">
        </div>

 </div>
    <div class="w3-col m1 s12 pad w3-light-grey">
    </div>
<div class="w3-col m8 s12 pad w3-light-grey" style="padding: 14px">
    <p>
    <?=$settings['about']?>
    </p>
</div>

</div>


<div class="w3-row container" style="margin-top: 10px">
        <div class="w3-col m6 s6" style="padding: 5px" >
            <div class="img_c w3-card-2 w3-hover-shadow w3-round w3-row">
                <div class="w3-col s6">
                <a href="<?=URL?>item/12">
                <img class="image w3-round" src="<?= URL ?>public/award2.jpg" alt="MIM PHOTOGRAPHY" style="width: 100%">
                </a>
                </div>
                <div class="w3-col s6 w3-yellow">
                <p class="w3-center" style="padding: 5px">
                    &U#32;
                </p>
                </div>
            </div>
        </div>

    <div class="w3-col m6 s6" style="padding: 5px">
        <div class="img_c w3-card-2 w3-hover-shadow w3-round w3-row">
            <div class="w3-col s6">
                <a href="<?=URL?>item/12">
                    <img class="image w3-round" src="<?= URL ?>public/award2.jpg" alt="MIM PHOTOGRAPHY" style="width: 100%">
                </a>
            </div>
            <div class="w3-col s6">
                <p class="w3-center" style="padding: 5px">
                    &U#32;
                </p>
            </div>
        </div>
    </div>
</div><div class="w3-row container" style="margin-top: 10px">
        <div class="w3-col m6 s6" style="padding: 5px" >
            <div class="img_c w3-card-2 w3-hover-shadow w3-round w3-row">
                <div class="w3-col s6">
                <a href="<?=URL?>item/12">
                <img class="image w3-round" src="<?= URL ?>public/award2.jpg" alt="MIM PHOTOGRAPHY" style="width: 100%">
                </a>
                </div>
                <div class="w3-col s6 w3-yellow">
                <p class="w3-center" style="padding: 5px">
                    &U#32;
                </p>
                </div>
            </div>
        </div>

    <div class="w3-col m6 s6" style="padding: 5px">
        <div class="img_c w3-card-2 w3-hover-shadow w3-round w3-row">
            <div class="w3-col s6">
                <a href="<?=URL?>item/12">
                    <img class="image w3-round" src="<?= URL ?>public/award2.jpg" alt="MIM PHOTOGRAPHY" style="width: 100%">
                </a>
            </div>
            <div class="w3-col s6">
                <p class="w3-center" style="padding: 5px">
                    &U#32;
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container w3-center">
  <?=$data['pview']?>
</div>
</div>
<?php
require_once ('app/views/footer.php');
?>
</body>
</html>
