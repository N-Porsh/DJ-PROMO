<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Support_model extends CI_Model {

    public function add_query()
    {

        $this->form_validation->set_rules('support_descr', 'Description', 'trim|required|xss_clean');

        if($this->form_validation->run() == TRUE)
        {
            $topic = $this->input->post('support_topic');
            $descr = $this->input->post('support_descr');

            $data = array(
               'topic'       => $topic,
               'description' => $descr
            );

            $this->db->insert('support', $data);


            $response = array('status' => 'success', 'message' => 'Your question added in query. We will inform you via e-mail');
            return json_encode($response);
        }
        else
        {
            $response = array('status' => 'fail', 'message' => validation_errors());
            return json_encode($response);
        }
    }

}

/* End of file support_model.php */
/* Location: ./application/models/support_model.php */