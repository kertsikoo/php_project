<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Item extends CI_Controller {
	public function show_items(){
		$this->load->model('Item_model');
		$data['items']=$this->Item_model->getItems();
		$data['page']='item/show_items';
		$this->load->view('menu/content', $data);
	}
	public function add_items() {
		$this->load->model('Item_model');
		$btn=$this->input->post('btnAdd');
		if (isset($btn)) {
			$insert_data=array(
			"item_name"=>$this->input->post('i_n'));
		$data['tryout']=$this->Item_model->addItem($insert_data);
		}
		$data['page']='item/add_items';
		$this->load->view('menu/content', $data);
	}
	public function delete_items() {
		$this->load->model('Item_model');
		$data['items']=$this->Item_model->getItems();
		$data['page']='item/delete_items';
		$this->load->view('menu/content', $data);
	}
	public function remove_items($chosen_id){
	$this->load->model('Item_model');
	$this->Item_model->deleteItems($chosen_id);
		$this->show_items();
	}
}