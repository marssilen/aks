<div class="w3-container w3- w3-card-2" style="min-height: 400px;margin: 15px;padding: 50px;">
<form method="POST" action="">
    <div>
        <label for="title">عنوان سایت</label>
        <input class="w3-input" type="text" value="<?=$data['title']?>" placeholder="title" id="title" name="title"/>
        <br>
        <label for="about">درباره ی من</label>
        <textarea class="w3-input name="about" id="about"><?=$data['about']?></textarea>
        <br>
        <label for="meta">متا تگ ها</label>
        <input class="w3-input type="text" value="<?=$data['meta']?>" placeholder="meta" id="meta" name="meta"/>
        <br>
        <label for="description">توضیحات وبسایت</label>
        <input class="w3-input type="text" value="<?=$data['description']?>" placeholder="description" id="description" name="description"/>
        <br>
        <label for="keywords">کلمات کلیدی</label>
        <input class="w3-input type="text" value="<?=$data['keywords']?>" placeholder="keywords" id="keywords" name="keywords"/>
        <br>
    </div>
    <input style="margin: 5px;padding: 1px 15px 1px 15px" class="add_list_a w3-blue w3-btn w3-round" type="submit" name="submit" value="تغییر"/>
</form>

</div>