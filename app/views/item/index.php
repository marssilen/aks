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

        <div class=" w3-card-2 w3-round">
            <img style="width:100%" src="<?= URL.'public/upload/'.$data['card_image']?>"/>
        </div>

    </div>
    <div class="w3-col m1 s12 pad w3-light-grey">
    </div>
    <div class="w3-col m8 s12 pad w3-light-grey" style="padding: 14px">
        <h3><?php if (!empty($data['name'])){?><?= $data['name']?><?php } ?></h3>
        <p>
            <?= $data['long_description'] ?>
        </p>
    </div>

</div>

<div class="w3-row container" style="margin-top: 10px">
    <?php
    $images=$data['image'];
    foreach ($images as $image) {?>
        <div class="w3-col m3 s6" style="padding: 5px">
            <div class=" w3-card-2 w3-hover-shadow w3-round">
                <img class="w3-round" alt="MIM PHOTOGRAPHY" style="width: 100%" onclick="show_modal('<?= URL.'public/upload/'.$image['image']?>')"
                     src="<?= URL.'public/upload/'.$image['image_thumb']?>"/>
            </div>
        </div>
    <?php } ?>
</div>




<script>
function show_modal(src){
  document.getElementById('modalimg').style.display='block';
  document.getElementById('img-mod').src=src;
}
</script>






<div id="modalimg" class="w3-modal w3-animate-zoom w3-center" onclick="this.style.display='none'">
  <img id="img-mod" class="w3-modal-content" src="<?= URL.'public/upload/a_22.png'?>">
</div>


<!--<div class="w3-blue-grey" style="margin-top:20px">-->
<!--  فوتر-->
<!--</div>-->
</body>
</html>
