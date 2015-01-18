<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artists extends Front_Controller {

    public function index()
    {
        $data['title'] = "DJ-Promo Artists";
        $data['main_content'] = "pages/members/artists";
        $this->load->view('layout_members', $data);
    }

}

/* End of file artists.php */
/* Location: ./application/controllers/members/artists.php */