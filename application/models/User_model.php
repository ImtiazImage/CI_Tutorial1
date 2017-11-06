<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

	public function getUsers(){

/*		$users = array(
			[
				'first_name'=>"Imtiaz",
				'last_name'=>"Hussain",
				'age'=>23,
				'location'=>"Bangladesh"
			], [
				'first_name'=>"Inzamam",
				'last_name'=>"Hussain",
				'age'=>17,
				'location'=>"Bangladesh"
			], [
				'first_name'=>"Image",
				'last_name'=>"Hussain",
				'age'=>23,
				'location'=>"Bangladesh"
			]
		);*/


		$query = "SELECT * FROM users";
		$resultset=$this->db->query($query);
		$users = $resultset->result();

		return $users;
	}

	public function getProfile($id){
		// $this->load->database();

		$query = "SELECT * FROM users WHERE user_id=".$id;
		$resultset = $this->db->query($query);

		return $resultset->row();
	}
}