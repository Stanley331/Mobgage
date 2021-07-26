<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
		$this->load->view('home_screen');
      
	}
	public function view_login()
	{
		$res['result'] = "";
		$this->load->view('login',$res);
	}
	public function login()
	{
		$temp['username']=$this->input->post('uname');
		$temp['password']=$this->input->post('upass');

		$this->load->model('data_model');
		$res['result'] = $this->data_model->checklogin('user_details',$temp);
		if ($res)
		{
			echo "success";
			$this->load->view('admin_home');
		}
		else{
			//fail
			echo "fail";
			$this->load->view('login',$res);
		}
		// $this->load->view('login',$temp);
	}

	public function register_new_user()
	{
		$this->load->model('data_model');
		
	}

	public function checklogin()
	{
		$this->load->model('data_model');
		$temp['result']="";
		$data['mail_id']=$this->input->post('uname');
		$data['password']=$this->input->post('upass');
		if($data['mail_id']==""||$data['password']=="")
			$test=FALSE;
		else		
			$test=$this->data_model->checklogin('register',$data);

			// echo $test;
			// var_dump($data);
		if($test==1)	{

			$this->load->view('admin_home');
		}
		else if($test==2)	{
		
			$this->load->view('customerhome');
		}
		else{
			$temp['result']="email does not exist";
			$this->load->view('login',$temp);
		}
	}

		public function bikes()
		{
			$this->load->view('bikes');
		}

		public function signup()
		{
			$this->load->view('signup');
		}

		public function adminhome()
		{
			$this->load->view('admin_home');
		}


		public function customerhome()
		{
			$this->load->view('customerhome');
		}
	

}