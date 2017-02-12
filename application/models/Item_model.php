<?php
Class item_model extends CI_model {
	public function getItems(){
		$this->db->select('*');
		$this->db->from('items');
		return $this->db->get()->result_array();
	}
	public function addItem($insert_data){
		$this->db->insert('Items', $insert_data);
			if ($this->db->affected_rows() > 0)
				return true;
			else return false;
	}
	public function deleteItems($chosen_id) {
		$this->db->where('item_id', $chosen_id);
		$this->db->delete('Items');
	}
}
