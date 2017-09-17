<?php
class Tag_m extends Model
{
	function __construct(){
		parent::__construct();
	}
	function get($id){
		return $this->db->select("SELECT * FROM items WHERE id= :id",array('id' => $id));
	}
	function getTagItems($tag){
        return $this->db->select("SELECT items.id,items.name,items.long_description,items.card_image FROM tag JOIN items ON tag.itemid=items.id WHERE tag.tag=:tag",array('tag' => $tag));
    }
    function getTagPages($tag){
        return $this->db->select("SELECT page.id,page.title,page.content FROM tag JOIN page ON tag.pageid=page.id WHERE tag.tag=:tag",array('tag' => $tag));
    }
	function add_item_to_factor($factor_id,$item_id,$num){
    $price=$this->db->select("SELECT price FROM items WHERE id= :item_id LIMIT 1",array('item_id'=>$item_id))[0]['price'];
    $data=$this->db->select("SELECT * FROM purchased WHERE factor_id= :factor_id AND item_id= :item_id LIMIT 1",array('factor_id' => $factor_id,'item_id'=>$item_id));
    if(count($data)>0){
    	$id=$data[0]['id'];
			$sql="UPDATE purchased SET num = num + 1 WHERE id = $id";
			$result=$this->db->query($sql);
    }else{
			$this->db->insert('purchased',array('item_id'=>$item_id,'factor_id'=>$factor_id,'num'=>$num,'price'=>$price));
		}
	}
function add_to_favorite($item_id,$user_id){
	$exist_in_favorites=$this->db->select("SELECT * FROM favorites WHERE user_id= :id AND item_id= :item_id",array('id' => $user_id,'item_id'=>$item_id));
	$exist_in_items=$this->db->select("SELECT id FROM items WHERE id= :id",array('id' => $item_id));
	if(empty($exist_in_favorites) && !empty($exist_in_items)){
	$this->db->insert('favorites',array('item_id'=>$item_id,'user_id'=>$user_id));
	echo 'done';
}

}
    function get_pview($tag,$page,$rows_per_page=10){
        $numrows=$this->count($tag);
        $pages= ceil($numrows/$rows_per_page);
        return create_pview($pages);
    }
    function count($tag){
        $result=$this->db->select("SELECT count(items.id) as count FROM tag JOIN items ON tag.itemid=items.id WHERE tag.tag=:tag",array('tag' => $tag));
        return $result[0]['count'];
    }
}
