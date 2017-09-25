<?php
class Tag extends Controller
{
	function index($tag='',$page=1){
//	    sql for tag
//		SELECT page.id,page.title,substring(page.content,0,120) FROM tag JOIN page ON tag.pageid=page.id WHERE tag="hello"
//	echo '<pre>';
        if($tag!='') {
            $items = $this->formModel->getTagItems($tag);
//        print_r($items);
//        print_r($this->formModel->getTagPages($tag));
            $this->view('tag/index', ['items' => $items, 'pview' => $this->formModel->get_pview('first', $page), 'tag' => $tag]);
        }
	}

}
