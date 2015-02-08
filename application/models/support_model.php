<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Support_model extends CI_Model {

    public function add_query()
    {
        $data = array(
           'topic'       => $this->input->post('support_topic'),
           'description' => $this->input->post('support_descr')
        );

        return $this->db->insert('support', $data);

    }

}

/* End of file support_model.php */
/* Location: ./application/models/support_model.php */