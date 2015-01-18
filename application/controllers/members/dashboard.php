<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Front_Controller {

    public function index()
    {
        $data['title'] = "DJ-Promo Dashboard";
        $data['main_content'] = "pages/members/dashboard";
        $this->load->view('layout_members',$data);


/*        $data['main_content'] = $page;

        $data = array('title' => Front_Controller::$title,'main_content' => $page );
        //$data = array('head' => Front_Controller::$title,'main_content' => $page );

        $this->load->view('layout', $data);*/

    }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/members/dashboard.php */