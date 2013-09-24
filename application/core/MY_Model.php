<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Base model
 *
 * @author An Cao <ping@ancaois.me>
 */
class MY_Model extends CI_Model
{
    protected $table = '';

    public function __construct()
    {
        parent::__construct();
        // Load the database
        $this->load->database();
    }

    /**
     * Insert new record to database
     *
     * @return array
     */ 
    public function insert($data)
    {
        // Simple, huh?
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }


    public function get_id()
    {
        $session=$this->session->userdata('logged_in');
        $user_id=$session['id'];
        return $user_id;
    }

    /**
     * Get a user by his/her ID
     *
     * @param  int $id 
     *
     * @return array
     */
    public function get($id)
    {
        $this->db->where('id', (int) $id);
        return $this->db->get($this->table)->row_array();
    }

    /**
     * Get all users in the database
     *
     * @return array
     */
    public function gets()
    {
        return $this->db->get($this->table)->result_array();
    }

    /**
     * Update a user information
     *
     * @param  array $data 
     *
     * @return void
     */
    public function update($data)
    {
        $this->db->where('id', (int) $data['id']);
        return $this->db->update($this->table, $data);
    }

    /**
     * Delete a user
     *
     * @param  int $id 
     *
     * @return void
     */
    public function delete($id)
    {
        $this->db->where('id', (int) $id);
        return $this->db->delete($this->table);

    }
}