<?php
class Cp extends ControllerPanel
{
	function view($page,$data=array(),$secure=false){
        $this->page=$page;
        parent::view('cp/panel_master',$data,$secure);
	}
function logout(){
Session::destroy();
header('location: '.URL);
exit;
}
public function files($page=1){
    $row=20;
    $index=($page-1)*$row;
    $max=($page)*$row;
//    echo '<pre>';
    $directory = 'public/upload/';
    $scanned_directory = array_diff(scandir($directory,1), array('..', '.'));
    if(count($scanned_directory)<$index+$row){
        $max=count($scanned_directory);
    }
    for($i=$index;$i<$max;$i++){
//        echo $scanned_directory[$i]."\n";
        $data[]=$scanned_directory[$i]."\n";
    }
    if(count($scanned_directory)%$row==0){
        $pages = count($scanned_directory) / $row ;
    }else {
        $pages = count($scanned_directory) / $row + 1;
    }
    $pview=create_pview($pages);
    $this->view('cp/files',['data'=>$data,'pview'=>$pview],true);
//    print_r($scanned_directory);
}
public function index(){
$this->items();
}
public function items($pageno=1)
{
	if(isAdmin()){
		$rows_per_page=8;
		$data=$this->formModel->get_all($pageno,$rows_per_page);
		$pview=$this->formModel->get_pview('items',$pageno,$rows_per_page);
		$this->view('cp/index',['data'=>$data,'pview'=>$pview],true);
	}
}
public function search_item($pageno=0)
{
	if(isAdmin()){
		if(isset($_POST['search'])){
		$search=$_POST['search'];

		$pview='';
		$data=$this->formModel->search_item($search);
		$this->view('cp/index',['data'=>$data,'pview'=>$pview],true);
		}
	}
}

function add_item(){
	if(isAdmin()){
		$id=$this->formModel->add_new();
		header("Location: ".URL."edit_item/$id");
	}
}
function delete_item($id=''){
	if(isAdmin()){
		$data=$this->formModel->delete_item($id);
		header("Location: ".URL."cp/items/");
	}
}
function delete_cat($id=''){
	if(isAdmin()){
		$data=$this->formModel->delete_cat($id);
		header("Location: ".URL."cp/show_cat");
	}
}
function add_cat(){
	if(isAdmin()){
		$id=$this->formModel->add_cat();
		header("Location: ".URL."cp/show_cat");
	}
}
function edit_cat($id){
	if(isAdmin()){
		$req= array('cat_change','id','cat','pa');
		if(form::check($_POST,$req)){
		$this->formModel->edit_cat($_POST['id'],$_POST['cat'],$_POST['pa']);
		header('Location: '.URL.'cp/show_cat');
		}
		$data=$this->formModel->show_cat($id);
		$this->view('cp/edit_cat',$data,true);
	}
}




function show_cat($id=0){
	if(isAdmin()){
		if(isset($_POST['add_row'])){
		$this->formModel->add_cat2($_POST['pa'],$_POST['cat']);
		}
		if(isset($_POST['add_list'])){
		$this->formModel->add_cat2($_POST['pa_cat'],$_POST['cat']);
		}
		$data=$this->formModel->ss($id);
		$this->view('cp/cat',$data,true);
}
}

function add_address(){
$req=array('name','c-phone','s-phone','province','city','address','postal-code','submit');
if(form::check($_POST, $req,TRUE)){
// if(form::check_type('siiiisis',$_POST)){
$user_id= Session::get('id');
$this->formModel->add_address($user_id,$_POST);
// }
}else {
echo "no";
}
$data=array();
$this->view('cp/address_add',$data);
}
function address(){
$data=$this->formModel->get_address();
print_r($data);
$this->view('cp/my_address',$data);
}
function address_detail($id){
// validate id
$data=$this->formModel->get_address_detail($id);
print_r($data);
$this->view('cp/address_detail',$data);
}
    function settings(){
        $insert=array('submit','title','about','logo','description','keywords');
        if(form::check($_POST, $insert,TRUE)){
//            print_r($_POST);
            $this->formModel->change_settings($_POST['title'],$_POST['about'],$_POST['logo'],$_POST['keywords'],$_POST['description']);
        }
        $data=$this->formModel->get_settings();
        $this->view('cp/settings',$data,true);
    }
function menu(){
$req=array('id','menu','parent','href','submit');
if(form::check($_POST, $req,TRUE)){
if(form::check_type('isiss',$_POST)){
$this->formModel->change_menu($_POST);
}
}
$insert=array('id','submit');
if(form::check($_POST, $insert,TRUE)){
if(form::check_type('is',$_POST)){
$this->formModel->remove_menu($_POST['id']);
}
}
$insert=array('submit');
if(form::check($_POST, $insert,TRUE)){
if(form::check_type('s',$_POST)){
$this->formModel->add_menu();
}
}
$data=$this->formModel->get_menu();
$this->view('cp/menu',$data,true);
}
function get_users($page=1){
$page=(int)$page;
$pagelimit=20;
$data=$this->formModel->get_users($page,$pagelimit);
$pview=$this->formModel->get_pview('userlist',$page,$pagelimit);
$this->view('cp/users_list',['data'=>$data,'pview'=>$pview],true);
}
function edit_user($id){

if(isset($id)){

if(isset($_POST['sub'])){
//print_r($_POST);
$this->formModel->edit_user($id,array('email'=>htmlentities($_POST['email']),
'phone'=>htmlentities($_POST['tel']),'role'=>htmlentities($_POST['role']),
'block'=>htmlentities($_POST['block'])));
}
if(isset($_POST['reset_pass'])){
    $this->formModel->edit_user($id,array('password'=>sha1(htmlentities("password"))));
}
$data=$this->formModel->get_user($id);
//print_r($data);
if(isset($data[0])){
$data=$data[0];
$this->view('cp/edit_user',$data,true);
}

}
}
function edit_order($factor_id){
	if(isset($factor_id)){
		$req=array('status','submit');
		if(form::check($_POST,$req,true)){
			$this->formModel->set_status($_POST,$factor_id);
		}
		$data=array('items'=>$this->formModel->show_factor($factor_id),'factor'=>$this->formModel->show_factor_main($factor_id));
		$this->view('cp/edit_order',$data);
	}
}


function profile(){
$user_id= Session::get('id');
$data=$this->formModel->get_profile($user_id);
$this->view('cp/profile',$data);
}


function address_remove($id){
	$this->formModel->remove_address($id);
	 header('location: '.URL.'cp/address');
}


}
