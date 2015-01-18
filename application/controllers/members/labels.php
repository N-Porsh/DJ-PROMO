<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Labels extends Front_Controller {

    public function index()
    {
        $data['title'] = "DJ-Promo Labels";
        $data['main_content'] = "pages/members/labels";
        $this->load->view('layout_members', $data);
    }

}

/* End of file labels.php */
/* Location: ./application/controllers/members/labels.php */