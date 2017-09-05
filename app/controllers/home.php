<?php
class Home extends Controller
{
	public function index($pageno=1)
	{
		$this->is_login= $this->is_login();
        $settings=$this->formModel->get_settings();
        $rows_per_page=16;
        $items=$this->formModel->get_all($pageno,$rows_per_page);
        $pview=$this->formModel->get_pview('items',$pageno,$rows_per_page);
        $this->view('home/index',['settings'=>$settings,'items'=>$items,'pview'=>$pview],true);
//        echo '<pre>';
//        print_r($items);
//        echo '</pre>';
//        echo $pview;
//		$this->view('home/index',$data);
	}
}
