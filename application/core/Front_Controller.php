<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front_Controller extends MY_Controller {

    public static $title = "DJ Promo";
    public function __construct()
    {
        parent::__construct();

        $this->load->library(array('ion_auth', 'form_validation'));
        //$this->load->helper(array('url', 'form', 'language'));
        $this->lang->load('auth');
/*        $this->load->model('users_model');
        $this->session->set_userdata($this->users_model->get_user());*/


        if($this->uri->segment(1) == "members" && !$this->ion_auth->logged_in())
        {
            //redirect them to the login page
            redirect('', 'refresh');
        }

    }

}

/* End of file Front_Controller.php */
/* Location: ./application/controllers/Front_Controller.php */