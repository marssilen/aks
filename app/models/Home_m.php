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
        }
        return $data[0];
    }

}
