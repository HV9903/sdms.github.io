<?php

class User extends CI_Controller{


	function index(){
		$this->load->model('User_model');
		$res=$this->User_model->show();

		$data=array();
		$data['res']=$res;
		$this->load->view('list',$data);
	}

	function create(){

		$this->load->model('User_model');

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('semester','Semester','required');
		$this->form_validation->set_rules('branch','Branch','required');
		$this->form_validation->set_rules('phone','Phone_Number',array('required','min_length[10]'));
		if($this->form_validation->run()==false){
			$this->load->view('create');
		}
		else{
			$formArray=array();
			$formArray['name']=$this->input->post('name');
			$formArray['semester']=$this->input->post('semester');
			$formArray['branch']=$this->input->post('branch');
			$formArray['phone']=$this->input->post('phone');

			$this->User_model->create($formArray);
			$this->session->set_flashdata('success','record added Successfully');

			redirect(base_url().'index.php/user/index');
		}
		
	}

	function edit($id){
		$this->load->model('User_model');
		$user=$this->User_model->getUser($id);
		$data=array();
		$data['id']=$user;

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('semester','Semester','required');
		$this->form_validation->set_rules('branch','Branch','required');
		$this->form_validation->set_rules('phone','Phone_Number',array('required','min_length[10]'));

		if($this->form_validation->run()==false){
			$this->load->view('edit',$data);
		}
		else {

			$formArray=array();
			$formArray['name']=$this->input->post('name');
			$formArray['semester']=$this->input->post('semester');
			$formArray['branch']=$this->input->post('branch');
			$formArray['phone']=$this->input->post('phone');

			$this->User_model->update($id,$formArray);

			$this->session->set_flashdata('success','Record updated Successfully');

			redirect(base_url().'index.php/user/index');
		}
	}
	

	function del($id){
		$this->load->model('User_model');
		$user=$this->User_model->getUser($id);
		if(empty($user)){
			$this->session->set_flashdata('failure','Record not found in database');
			redirect(base_url().'index.php/user/index');
		}
		$this->User_model->deleteUser($id);
		$this->session->set_flashdata('success','Record deleted Successfully');
			redirect(base_url().'index.php/user/index');
	}	


	}

?>