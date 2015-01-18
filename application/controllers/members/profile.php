<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends Front_Controller {

    public function index()
    {

        $this->load->model('users_model');
        $this->load->helper('form');
        $data['title'] = "DJ-Promo My Profile";
        $data['main_content'] = "pages/members/profile";

        $data['user_data'] = $this->users_model->get_user();


        $this->load->view('layout_members', $data);


    }

    public function edit_user()
    {
        $this->load->model('users_model');
        $this->load->helper('form');

        $this->users_model->edit_user_data();


        //var_dump( $this->input->post());
        //var_dump($this->session->all_userdata());
    }

}

/* End of file my_profile.php */
/* Location: ./application/controllers/members/profile.php */