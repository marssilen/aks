<div class="w3-container w3- w3-card-2" style="min-height: 400px;margin: 15px;padding: 50px;">
<form method="POST" action="">
    <input style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" type="submit" name="insert" value="افزودن"/>
</form>
    <div class="container" style="margin-top: 10px">
        <?php
        $count=0;
        foreach($data['data'] as $card){$count++;?>
            <?php if($count%2==0)echo' <div class="w3-row">'; ?>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?=$card['id']?>">
                <div class="w3-col m6 s12 w3-row" style="padding: 5px;">
                    <div class="img_c w3-card-2 w3-hover-shadow w3-round">
                        <div class="w3-col l6">
                            <img class="" src="<?= URL ?>public/upload/<?=$card['image']?>" alt="MIM PHOTOGRAPHY" style="width: 100%">
                        </div>
                        <div class="w3-col l6">
                            <h5 class="w3-center w3-grey" style="margin: 0px;padding: 10px"><input name="title" value="<?=$card['title']?>"></h5>
                            <div style="padding: 10px">
                                <p class="" >
                                    <textarea name="description" style="display: block;width: 100%;min-height: 150px"><?=$card['description']?></textarea>
                                </p>
                            </div>
                            <button class="btn" type="submit" name="change">تغییر</button>
                            <select name="cat">
                                <?php foreach ($data['cats'] as $cat){ ?>
                                <option <?php if($card['url_cat']==$cat['id']) echo 'selected'; ?> value="<?=$cat['id']?>"><?= $cat['cat'] ?></option>
                                <?php } ?>
                            </select>
                            <button class="btn w3-red" type="submit" name="delete">حذف</button>
                            <a onclick="document.getElementById('add_card_image_modal').style.display='block';document.getElementById('id').value='<?=$card['id']?>'" class="btn w3-yellow">عکس</a>
                        </div>
                    </div>
                </div>
            </form>
            <?php if($count%2==0)echo'</div>'; ?>
            <?php
        }
        ?>
    </div>
</div>

<div id="add_card_image_modal" class="w3-modal">
    <div class="w3-modal-content">
        <header class="w3-container w3-white">
      <span onclick="document.getElementById('add_card_image_modal').style.display='none'"
            class="w3-closebtn">&times;</span>
            <h2>Add image</h2>
        </header>
        <div class="w3-container">
            <form method="post" enctype="multipart/form-data" action="">
                <input name="image" type="file" id="image_upload" >
                <input name="id" type="hidden" id="id" value="">
                <button type="submit" name="pic" class="w3-btn w3-red"  style="display:block;width:100%" >add</button>
            </form>

        </div>

    </div>
</div>