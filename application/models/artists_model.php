<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artists_model extends CI_Model {

    public function add_artist($data)
    {
        $this->db->insert('artists', $data);
        return $this->db->insert_id();
    }

    public function get_artists()
    {
        return $this->db->select()
          ->from('artists')
          ->get()
          ->result();
    }

}

/* End of file artists_model.php */
/* Location: ./application/models/artists_model.php */
