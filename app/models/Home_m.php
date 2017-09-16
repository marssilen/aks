<?php
class Home_m extends Model
{
	public $name;

	function __construct(){
		parent::__construct();
		$sql='SELECT * FROM items';
		$result=$this->db->query($sql);

	}

    function get_settings(){
        $data=$this->db->select("SELECT * from settings");
        if(!isset($data[0])){
            $data=array('title'=>'','about'=>'','meta'=>'','keywords'=>'','description'=>'');
			return $data;
        }
        return $data[0];
    }
    function get_all(){
        $result=$this->db->select("SELECT * FROM home_page");
        return $result;
    }
}
