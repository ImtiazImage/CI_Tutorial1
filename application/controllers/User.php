<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{


//Load Model
		$this->load->model('User_model');
//Get users From getUser method  
		$users = $this->User_model->getUsers();

		$data["users"] = $users;
		$data["title"] = "Users Table";
		$data["header"]= "Users Info.";

		$this->load->view('home', $data);
	}


	public function register(){
		//form validation using library funciton.
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fanme','First Name','required');
		$this->form_validation->set_rules('age','Age','required|numeric');

		if($this->form_validation->run() == TRUE){
			echo "Form is validated";
		}


		$this->load->view('registration');
	}



















// within index functino

	/*		//echo "User Controller - Index Method";
		$name = "S.M.Imtiaz Hussain Image";
		$age = 23;
		$location = "Bangladesh";	

		$data['name'] = $name;
		$data['age']  = $age;
		$data['location'] = $location;*/
		// ending of index function





/*	public function profile($name, $age){
		echo "My name is: ".$name."<br>";
		echo "My age is: ".$age;
	}
	*/
/*	public function home($id){
		$this->load->model('User_model');
		$users = $this->User_model->getProfile($id);

		var_dump($users);
	}*/
}
