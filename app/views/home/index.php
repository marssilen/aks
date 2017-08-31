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
            <div class="w3-container w3-center pad">
                <p>masoud profile</p>
            </div>
        </div>

 </div>
    <div class="w3-col m1 s12 pad w3-light-grey">
    </div>
<div class="w3-col m8 s12 pad w3-light-grey" style="padding: 14px">
    <p>
    Eum in mutat expetenda, sea ei dolor fabulas adversarium. Pri sumo honestatis ut, an mutat dicam pertinax duo, has nonumes vivendo ut. No hinc populo impetus vix. Id est primis scripta assueverit. Wisi accusamus forensibus ei nec, id ius hinc expetendis argumentum, ridens intellegebat an vim. Et equidem appellantur vim, et eam diceret electram, delicata volutpat patrioque et est. Ei has postea verterem reprehendunt, no cum causae labitur.
    </p>
</div>

</div>
<div class="w3-white w3-hide-small">
	<div class="w3-row container">
        <div class="w3-col m2">&#xFEFF;</div>
        <?php for($i=1;$i<=4;$i++){?>
        <div class="w3-col m2">
            <img class="image" src="<?= URL ?>public/award<?=$i?>.jpg" alt="award" style="width: 100%">
        </div>
        <?php } ?>
        <div class="w3-col m2">&#xFEFF;</div>
	</div>
</div>
<div class="w3-row container" style="margin-top: 10px">
    <?php for($i=1;$i<=4;$i++){?>
        <div class="w3-col m3 s6" style="padding: 5px">
            <div class="img_c w3-card-2 w3-hover-shadow w3-round">
                <img class="image w3-round" src="<?= URL ?>public/upload/image<?=$i?>.png" alt="MIM PHOTOGRAPHY" style="width: 100%">
                <div class="w3-container w3-center pad">

                </div>
            </div>
        </div>
    <?php } ?>
</div>

<div class="w3-row container" style="margin-top: 10px">
    <?php for($i=1;$i<=4;$i++){?>
        <div class="w3-col m3 s6" style="padding: 5px">
            <div class="img_c w3-card-2 w3-hover-shadow w3-round">
                <img class="image w3-round" src="<?= URL ?>public/upload/i<?=$i?>.png" alt="MIM PHOTOGRAPHY" style="width: 100%">
                <div class="w3-container w3-center pad">
                    <p></p>
                </div>
            </div>
        </div>
    <?php } ?>

</div>

<div class="w3-row container" style="margin-top: 10px">
    <?php for($i=1;$i<=4;$i++){?>
        <div class="w3-col m3 s6" style="padding: 5px">
            <div class="img_c w3-card-2 w3-hover-shadow w3-round">
                <img class=" w3-round" src="<?= URL ?>public/upload/image<?=$i?>.png" alt="MIM PHOTOGRAPHY" style="width: 100%">
                <div class="w3-container w3-center pad w3">
                    <p></p>
                </div>
            </div>
        </div>
    <?php } ?>

</div>
<div class="w3-white w3-padding-16">
<div class="container w3-center">
  <ul class="w3-pagination">
      <li><a href="#">Back</a></li>
      <li><a href="#">Next</a></li>
  </ul>
</div>
</div>

</body>
</html>
