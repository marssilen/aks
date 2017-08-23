<?php
$menu_list=$this->model('Menu_m')->get_menu();
?>
<div class="w3-dark-grey">
    <ul class="w3-navbar" style="margin-right: 32px">
    <?php foreach($menu_list as $menu){ ?>
        <?php if($menu['parent']=='0'){ ?>
        <li class="w3-right"><a class="w3-hover-none w3-text-white w3-hover-text-white" href="<?=$menu['href']?> "><?= $menu['menu'] ?></a></li>
        <?php } ?>
    <?php } ?>
        <?php if(!$this->is_login){ ?>
            <li class="w3-right"><a href="<?= URL ?>login">وارد شوید</a></li>
        <?php }else{
            $m=$this->model('Item_m');
            $fid=$m->get_factor(Session::get('id'));
            ?>
            <li class="w3-right"><a href="<?= URL ?>cp" >مدیریت کاربری</a></li>
            <li class="w3-right"><a href="<?= URL ?>cp/logout">خروج</a></li>
        <?php } ?>
       <!-- <li><a class="w3-hover-none w3-text-black" href="#">Home</a></li> -->
</ul>
</div>
