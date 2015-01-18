<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Support extends Front_Controller {

    public function index()
    {
        $data['title'] = "DJ-Promo Support";
        $data['main_content'] = "pages/members/support";
        $this->load->view('layout_members', $data);
    }

}

/* End of file support.php */
/* Location: ./application/controllers/members/support.php */