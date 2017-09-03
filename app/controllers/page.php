<?php
class Page extends Controller
{
	function index($pageid=0){
		$data=$this->formModel->get($pageid)[0];
		if(empty($data)){
		    echo '404';
        }else{
		    echo "<head><title>".$data["title"]."</title></head><body>";
		    echo '<pre>';
		    print_r($data);
		    echo '</pre></body>';
        }
	}
}
