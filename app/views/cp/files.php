<br>
<div class="w3-white container center" >
<div class="w3-row">
<div class="" align="center"><!--left images-->
    <button onclick="document.getElementById('add_card_image_modal').style.display='block'" class="btn btn-info w3-margin-16">افزودن عکس</button>
<div ng-app="myApp" ng-controller="myCtrl">
<div class="row w3-margin-16">
<div id='{{x}}' class="col-sm-3 col-xs-6 w3-padding-16" ng-repeat="x in names">

    <a href="<?=URL?>item/{{x}}"><div class="w3-round  w3-card-2 w3-center mycard w3-white" style="padding:8px" >
<div align="center" class="">{{x}}</div>
<div class="w3-white" style="padding-bottom:0px;padding-left:10px;padding-right:10px">
<img src="<?= URL ?>public/upload/{{x}}" style="width: 150px;height: 150px">
<p align="right" class="font" style="padding:0px">

</p>
<a class="btn btn-info" href="<?= URL ?>cp/delete_file/{{x}}">حذف</a>
<a class="btn btn-success" href="<?= URL ?>cp/edit_file/{{x}}">edit</a>
</div>
</div>
    </a>
</div>
</div>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.names = <?php echo json_encode($data['data']); ?>;
});
</script>
<div align="center">
<?= $data['pview'] ?>
</div>
</div>
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
                <button type="submit" name="add_card_image" class="w3-btn w3-red"  style="display:block;width:100%" >add</button>
            </form>

        </div>

    </div>
</div>