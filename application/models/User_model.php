<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User Model
 *
 * @author Lawrence Agbani <l.agbani@hotmail.co.uk>
 * 
 */

class User_model extends CI_Model {

	public function insert($value)
	{
		$postArray = ['fullname' => $value['fname'],
					  'email' => $value['email']
					 ];

		return $this->db->insert('userdetails', $postArray);
	}

	public function getAllValues()
	{
		return $this->db->get('userdetails')->result();
	}

	public function getByEmail($email)
	{
		return $this->db->get_where('userdetails', ['email' => $email])->row();
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */