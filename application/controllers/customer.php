<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller 
{
    public function bikestore_viewby_customer()
	{
		
		$this->load->model('data_model');
		$data['e']= $this->data_model->view_bikedetails('mobile_list');
		$this->load->view('bikestore_viewby_customer',$data);
		
	}

    public function customer_changepassword()
	{
		
		$this->load->view('customer_changepassword');
	}
	public function register_customer()
	{
		$data['name'] = $this->input->post('fname');
		$data['password'] = $this->input->post('upass');
		$data['mail_id'] = $this->input->post('email');
		$data['aadhar_no'] = $this->input->post('idnumber');
		$data['type'] = 'customer';
		// $data['idcard_type'] = $this->input->post('card');
		// $data['lastname'] = $this->input->post('lname');
		// $data['retype_pass'] = $this->input->post('rpass');
		// $data['gender'] = $this->input->post('gender');
		// $data['user_type'] = $this->input->post('utype');
		// $data['dob'] = $this->input->post('dob');
		// $data['mob'] = $this->input->post('mobile');
		// $data['add_address'] = $this->input->post('address');
		// $data['add_city'] = $this->input->post('city');
		// $data['dist'] = $this->input->post('district');

		$this->load->model('data_model');
  		$this->data_model->insert_user($data);
		$this->load->view('login');

	}
    public function customer_editprofile()
	{
		$this->load->view('customer_editprofile');
	}

    public function customerhome()
	{
		$this->load->view('customerhome');
	}

    public function paybill_viewby_customer()
	{
		$this->load->view('paybill_viewby_customer');
	}

    public function request_vehicle_rent_customer()
	{
		$this->load->view('request_vehicle_rent_customer');
	}
	

	public function view_customer()
	{

		$this->load->model('data_model');
		$data['e']= $this->data_model->view_bikedetails('register_vehicle');
		$this->load->view('bikestore_viewby_customer',$data);

	}
	public function rentbike()
	{
		$data['vid'] = $this->uri->segment(3);
		$data['mail'] = 'priya@gmail.com';
		$data['rent_status']="pending";
		$this->load->model('data_model');
		$this->data_model->rent($data);
	}

	public function view_product()
	{
		$data['result'] = $this->db->query('select * from mobile_list where mob_id = '.$this->uri->segment(3).' ');
		$this->load->view('product_page',$data);

	}
    

	public function success($mob_id)
	{
		 $mob_id = $this->uri->segment(3);
		 $fmquery=$this->db->query('SELECT * FROM mobile_list where mob_id = '.$mob_id.'');
		 $_array = $fmquery->result_array();
		$mnth=$this->input->post('duration');

		$ref_amt=$_array[0]["mob_price"] / 4;
		$rent = $ref_amt / $mnth;
			$fdata = array(
				'user_id'		=>		$this->session->userdata('user_id'),
				'mob_id'		=>		$_array[0]['mob_id'],
				'rent'			=>		$rent,
				'ref_amt'		=>		$ref_amt,
				'return_date'	=>		$mnth,
				'purchase_date' =>		date('Y-m-d'),
			);
			$this->load->model('data_model');
			$this->data_model->rent_insert($fdata);
			$this->db->query('UPDATE register,mobile_list set register.status = "TRUE" , mobile_list.status = "FALSE" where register.user_id = '.$this->session->userdata('user_id').' and mobile_list.mob_id = '.$fdata['mob_id'].' ');
		$this->load->view('checkout',$fdata);
    
	}

}
