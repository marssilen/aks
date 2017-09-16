<?php
class Home extends Controller
{
	public function index($pageno=1)
	{
		$this->is_login= $this->is_login();
        $settings=$this->formModel->get_settings();
        $items=$this->formModel->get_all();
        $this->view('home/index',['settings'=>$settings,'items'=>$items]);
//        echo '<pre>';
//        print_r($items);
//        echo '</pre>';
//        echo $pview;
//		$this->view('home/index',$data);
	}
}
