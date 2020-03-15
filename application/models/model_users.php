<?php

class Model_users extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function validate_username($username = null)
    {
        if ($username) {
            $sql = "SELECT * FROM users WHERE username = ?";
            $query = $this->db->query($sql, array($username));
            $result = $query->row_array();
            return ($query->num_rows() === 1) ? true : false;
        } else {
            return false;
        }
    }

    public function login($username = null, $password = null)
    {
        if ($username && $password) {
            $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
            $query = $this->db->query($sql, array($username, $password));
            $result = $query->row_array();

            return ($query->num_rows() == 1) ? $result['user_id'] : false;
        } else {

            return false;
        }
    }

    public function fetchUserData($userId = null)
    {
        if ($userId) {
            $sql = "SELECT * FROM users WHERE user_id = ?";
            $query = $this->db->query($sql, array($userId));
            return $query->row_array();
        }
    }

    public function updateProfile($userId = null)
    {
        if ($userId) {
            $update_data = array(
                'username' => $this->input->post('username'),
                'faname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
            );

            $this->db->where('user_id', $userId);
            $status = $this->db->update('users', $update_data);
            return ($status == true) ? true : false;
        } else {
            return false;
        }
    }
}
