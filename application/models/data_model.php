<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_model extends CI_Model
{
    public function checklogin($table,$data)
    {
        $this->load->library('session');
        $temp=$this->db->where ('mail_id',$data['mail_id'])->get($table);
        // $row=$temp->row()->result();
        foreach($temp->result() as $row)
        {
            if($data['password'] == $row->password && $row->type=='admin'){
                $this->session->set_userdata('user_id',$row->user_id);
                $this->session->set_userdata('type',$row->type);
                return 1;
            }  
            else if($data['password'] == $row->password && $row->type=='customer'){  
                $this->session->set_userdata('user_id',$row->user_id);
                $this->session->set_userdata('type',$row->type);
                return 2;
            }
            else return "Invalid username";
        }
    }
    public function insert_user($data)
    {
        $this->db->insert('register',$data);
        // $d['username']=$data['mail'];
        // $d['usertype']=$data['user_type'];
        // $d['password']=$data['password'];
        // $this->db->insert('register',$data);
    }

    public function insert_mobile($data)
    {
        $this->db->insert('mobile_list',$data);
    }

   
    public function view_bikedetails($table)
    {
        $res=$this->db->query("select * from $table where status ='TRUE'");
        return $res->result_array();
    }

    public function view_customer($table)
    {
        $res=$this->db->get($table);
        return $res->result_array();
    }
    public function rent($data)
    {
        $this->db->insert("booking_details",$data);
    }
    public function getRequests()
    {
        $result = $this->db->query("select * from booking_details,register,register_vehicle where booking_details.vid = register_vehicle.vid and register.mail = booking_details.mail and booking_details.rent_status='pending'");
        if($result->result() > 0)
        // var_dump('t');
        // var_dump($result->row()->rentid);
        return $result->result();
    }
    public function approved($data){
        $vid=$this->db->query("select vid from booking_details where rentid='$data'");
        $vid= $vid->row()->vid;
        // echo $vid;
        $this->db->query("update booking_details set rent_status='approved' where rentid='$data'");
        $ddd=$this->db->query("update register_vehicle set rent_status='rented' where vid='$vid'");
        // var_export($ddd);
    }

    public function del_mob($data)
    {
        $this->db->where('mob_id',$data);
        $this->db->delete('mobile_list');
    }

    // public function view_guard_details()
    // {
    //     $query = $this->db->query("Select * from user where user_type = 'guard'");

    //     return $query;
    // }
    
        public function rent_insert($data)
        {
            $this->db->insert('order_details',$data);
        }
}
