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


<div class="container" style="margin-top: 10px">
    <?php
    $count=0;
    foreach($data['items'] as $card){$count++;?>
        <?php if($count%2==0)echo' <div class="w3-row">'; ?>
    <a href="<?=URL?>tag/<?=$card['url_cat']?>">
        <div class="w3-col m6 s12 w3-row" style="padding: 5px;">
            <div class="img_c w3-card-2 w3-hover-shadow w3-round">
                <div class="w3-col l6">
                    <img class="" src="<?= URL ?>public/upload/<?=$card['image']?>" alt="MIM PHOTOGRAPHY" style="width: 100%">
                </div>
                <div class="w3-col l6">
                <h5 class="w3-center w3-grey" style="margin: 0px;padding: 10px"><?=$card['title']?></h5>
                <div style="padding: 10px">
                    <p class="" >
                        &ensp;<?=$card['description']?>
                    </p>
                </div>
                </div>
            </div>
        </div>
    </a>
    <?php if($count%2==0)echo'</div>'; ?>
    <?php
    }
    ?>
</div>

<div class="container w3-center">
<!--  --><?//=$data['pview']?>
</div>
</div>
<?php
require_once ('app/views/footer.php');
?>
</body>
</html>
