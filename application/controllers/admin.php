<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller

{

	public function approve_vehicle_registration()
	{
		$this->load->model('data_model');
		$data['result'] = $this->data_model->getRequests();
		$this->load->view('approve_vehicle_registration',$data);
	}

	public function mobgage_viewby_admin()
	{
		$this->load->view('mobgage_viewby_admin');
	}

	public function leasers_viewby_admin()
	{
		$this->load->view('leasers_viewby_admin');
	}

	public function paybill_viewby_admin()
	{
		$this->load->view('paybill_viewby_admin');
	}

	public function customers_viewby_admin()
	{

		$this->load->model('data_model');
		$data['e']= $this->data_model->view_bikedetails('register');
		$this->load->view('customers_viewby_admin',$data);
		
	}
	
	
	public function admin_changepassword()
	{
		$this->load->view('admin_changepassword');
	}
	
	public function admin_home()
	{
		
		$this->load->view('admin_home');
	}	
	public function rentapprove(){
		$id=$this->uri->segment(3);
		
		$this->load->model('data_model');
		$data['e']= $this->data_model->approved($id);
		// echo $id;
		header('location:'.base_url().'admin/approve_vehicle_registration');
	}

	public function add_mobile()
	{
		
		$this->load->view('add_mobile');
	}	

	public function reg_mobile()
	{
		$data['mob_model'] = $this->input->post('Model');
		$data['mob_ram'] = $this->input->post('Ram');
		$data['mob_camera'] = $this->input->post('Camera');
		$data['mob_battery'] = $this->input->post('Battery');
		$data['mob_price'] = $this->input->post('Price');


		$this->load->model('data_model');
		$this->data_model->insert_mobile($data);

		$this->load->view('mobgage_viewby_admin');
	}	


	public function update_mobile($mob_id)
	{
		$fmquery=$this->db->query("SELECT * FROM mobile_list WHERE mob_id =$mob_id");
			$_array = $fmquery->result_array();
			$fdata = array(
				'id'		=>		$mob_id,
				'model'		=>		$_array[0]["mob_model"],
				'ram'		=>		$_array[0]["mob_ram"],
				'camera'		=>		$_array[0]["mob_camera"],
				'battery'		=>		$_array[0]["mob_battery"],
				'price'		=>		$_array[0]["mob_price"],
			);
		$this->load->view('update_mobile',$fdata);

	}
	public function logout()
	{
		$this->load->library('session');
		session_destroy();
	}

	public function daily_report()
	{
		$this->load->view('daily_report');
	}

	public function report()
	{
		$dst['date']=$this->input->post('ddate');
		
		$this->load->view('report',$dst);
	}

	public function delete_mobile($mob_id)
	{
		$fmquery=$this->db->query("Delete FROM mobile_list WHERE mob_id =$mob_id");
			// $_array = $fmquery->result_array();
			// $fdata = array(
			// 	'id'		=>		$mob_id,
			// 	'model'		=>		$_array[0]["mob_model"],
			// 	'ram'		=>		$_array[0]["mob_ram"],
			// 	'camera'		=>		$_array[0]["mob_camera"],
			// 	'battery'		=>		$_array[0]["mob_battery"],
			// 	'price'		=>		$_array[0]["mob_price"],
			// );
		$this->load->view('mobgage_viewby_admin');

	}

	
}
