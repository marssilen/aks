<?php
class Item extends Controller
{
	public function index($name='')
	{
		$data=$this->formModel->get($name);
		if(isset($data[0])){
			$data[0]['image']=$this->formModel->get_images($name);
			$this->view('item/index',$data[0]);
		}else {
			header('location:'.URL);
		}
	}
}
