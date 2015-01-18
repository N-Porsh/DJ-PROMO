<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends Front_Controller {

    public function index()
    {
        $data['title'] = "DJ-Promo Messages";
        $data['main_content'] = "pages/members/messages";
        $this->load->view('layout_members', $data);
    }

}

/* End of file messages.php */
/* Location: ./application/controllers/members/messages.php */