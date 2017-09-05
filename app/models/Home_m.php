<?php
class Home_m extends Model
{
	public $name;

	function __construct(){
		parent::__construct();
		$sql='SELECT * FROM items';
		$result=$this->db->query($sql);

	}
	function get_cat_menu($pa_cat=0){
		$sql='SELECT * FROM category where pa_cat='.$pa_cat;
		$result=$this->db->query($sql);
		return $result->fetchAll(PDO::FETCH_ASSOC);;
	}
    function get_settings(){
        $data=$this->db->select("SELECT * from settings");
        if(!isset($data[0])){
            $data=array('title'=>'','about'=>'','meta'=>'','keywords'=>'','description'=>'');
			return $data;
        }
        return $data[0];
    }
    function get_all($page,$rows_per_page){
        $result=$this->db->pagination("SELECT id, name,card_image FROM items ORDER BY id DESC",array(),$page,$rows_per_page);
        return $result;
    }
    function get_pview($table,$page,$rows_per_page){
        $numrows=$this->count($table);
        $pages= ceil($numrows/$rows_per_page);
        return create_pview($pages);
    }
    function count($table){
        $result=$this->db->select("SELECT count(*) as count FROM $table");
        return $result[0]['count'];
    }
}
