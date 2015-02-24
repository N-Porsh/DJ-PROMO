<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Support extends Front_Controller {

    public function index()
    {
        $data['title'] = "DJ-Promo Support";
        $data['main_content'] = "pages/members/support";
        $this->load->view('layout_members', $data);
    }

    public function new_query()
    {
        $this->load->model('support_model');

        //validate
        $this->form_validation->set_rules('support_descr', 'Description', 'trim|required|xss_clean');

        if($this->form_validation->run() == TRUE)
        {
            $this->support_model->add_query();

            $response = array('status' => 'success', 'message' => 'Your message added in query. We will inform you via e-mail');
            echo json_encode($response);
        }
        else
        {
            $response = array('status' => 'fail', 'message' => validation_errors());
            echo json_encode($response);
        }
    }

}

/* End of file support.php */
/* Location: ./application/controllers/members/support.php */