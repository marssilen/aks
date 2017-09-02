<?php require_once('app/views/head.php'); ?>
<body>
<?php require_once('app/views/menu.php'); ?>
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
<!---->

<button id="mybtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="mymodal">

    <!-- Modal content -->
    <div class="mymodal-content">
        <span class="myclose">&times;</span>
        <div style="clear: both"></div>
        <div style="max-width:1200px;margin: auto;">
<!--        --><?php
//        $images=$data['image'];
//        foreach ($images as $image) {?>
<!--            <div class="slides">-->
                <img id="img-slide" class="" alt="MIM PHOTOGRAPHY" style="width: 100%;max-height: 600px" src="<?= URL.'public/upload/a.png'?>"/>
<!--            </div>-->
<!--        --><?php //} ?>
        <p style="margin-top: 10px">Some text in the Modal..</p>

        </div>
        <div class="scrollmenu">
            <?php
            $images=$data['image'];
            foreach ($images as $image) {?>
                <img class="" alt="MIM PHOTOGRAPHY" style="width: 100px" onclick="show_slide('<?= URL.'public/upload/'.$image['image']?>')"
                     src="<?= URL.'public/upload/'.$image['image_thumb']?>"/>
            <?php } ?>
        </div>
    </div>
</div>
<!---->
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
function show_slide(src){
    document.getElementById('img-slide').src=src;
}
</script>






<div id="modalimg" class="w3-modal w3-animate-zoom w3-center" onclick="this.style.display='none'">
  <img id="img-mod" class="w3-modal-content" src="<?= URL.'public/upload/a_22.png'?>">
</div>


<div id="footer" class="" style="margin-top:20px;margin-bottom: 0px;background-color: silver;text-align: center;padding-top:25px">
  ما را در دنبال کنید:
    <br>
    <a href="#" class="fa fa-instagram"></a>
<!--    Instagram-->
    <a href="#" class="fa fa-facebook"></a>
<!--    Facebook-->
    <a href="#" class="fa fa-twitter"></a>
<!--    Twitter-->
    <a href="#" class="fa fa-telegram"></a>
<!--    Telegram-->
</div>
<script>
    var modal = document.getElementById('myModal');
    var btn = document.getElementById("mybtn");
    var span = document.getElementsByClassName("myclose")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>
