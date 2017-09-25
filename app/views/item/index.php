<?php
$title=$data['data']['name'];
$desc='description';
require_once('app/views/head.php');
?>
<body>
<?php require_once('app/views/menu.php'); ?>

<div class="container w3-row" style="padding: 50px">
    <div id="match1" class="w3-col m4 s12 pad w3-light-grey">
        <img id="imgmatch" style="width:100%" src="<?= URL.'public/upload/'.$data['data']['card_image']?>"/>
    </div>
    <div id="match2" class="w3-col m8 s12 pad w3-light-grey" style="padding: 14px">
        <h3><?php if (!empty($data['data']['name'])){?><?= $data['data']['name']?><?php } ?></h3>
        <p>
            <?= $data['data']['long_description'] ?>
        </p>
        <div>
            <?php foreach ($data['tags'] as $tag){?>
                <a href="<?=URL.'tag/'.$tag['tag']?>"><span class="tag"><?= $tag['tag']?></span></a>
            <?php } ?>
        </div>
    </div>
</div>
<!-- The Modal -->
<div id="myModal" class="mymodal">

    <!-- Modal content -->
    <div class="mymodal-content">
        <span class="myclose">&times;</span>
        <div style="clear: both"></div>
        <div style="max-width:1200px;margin: auto;" class="">
<!--        --><?php
//        $images=$data['data']['image'];
//        foreach ($images as $image) {?>
            <center>
                <img id="img-slide" alt="MIM PHOTOGRAPHY" style="width: <?=$data['data']['width']?>;max-height: <?=$data['data']['height']?>" src="<?= URL.'public/upload/'.$data['data']['image'][0]['image']?>"/>
            </center>
<!--        --><?php //} ?>
        <p style="margin-top: 10px"></p>

        </div>
        <div class="scrollmenu">
            <?php
            $images=$data['data']['image'];
            foreach ($images as $image) {?>
                <img alt="<?=($image['alt']!='')?$image['alt']:'MIM-PHOTOGRAPHY'?>" style="width: 100px" onclick="show_slide('<?= URL.'public/upload/'.$image['image']?>')"
                     src="<?= URL.'public/upload/'.$image['image_thumb']?>"/>
            <?php } ?>
        </div>
    </div>
</div>
<!---->
<div class="w3-row container" style="margin-top: 10px">
    <?php
    $images=$data['data']['image'];
    foreach ($images as $image) {?>
        <div class="w3-col m3 s6" style="padding: 5px">
            <div class="xxx w3-card-2 w3-hover-shadow w3-round">
                <img class="w3-round" alt="<?=($image['alt']!='')?$image['alt']:'MIM-PHOTOGRAPHY'?>" style="width: 100%" onclick="show_modal('<?= URL.'public/upload/'.$image['image']?>')"
                     src="<?= URL.'public/upload/'.$image['image_thumb']?>"/>
            </div>
        </div>
    <?php } ?>
</div>

<script>
function show_modal(src){
    document.getElementById('myModal').style.display='block';
    document.getElementById('img-slide').src=src;
}
function show_slide(src){
    document.getElementById('img-slide').src=src;
}
</script>
<?php
require_once ('app/views/footer.php');
?>
<script>
    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("myclose")[0];
    span.onclick = function() {
        modal.style.display = "none";
    };
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    var imgheight=$("#imgmatch").height();
    var m1height=$("#match2").innerHeight();
    if(imgheight>m1height) {
        $("#match2").innerHeight(imgheight);
    }else{
        $("#match1").innerHeight(m1height);
    }

</script>
</body>
</html>
