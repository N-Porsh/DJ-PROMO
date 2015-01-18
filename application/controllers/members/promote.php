<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promote extends Front_Controller {

    public function index()
    {
        $data['title'] = "DJ-Promo Promote";
        $data['main_content'] = "pages/members/promote";
        $this->load->view('layout_members', $data);
    }

}

/* End of file promote.php */
/* Location: ./application/controllers/members/promote.php */