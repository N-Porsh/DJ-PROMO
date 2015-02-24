<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artists extends Front_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('artists_model');
    }


    public function index()
    {
        $data['title'] = "DJ-Promo Artists";
        $data['main_content'] = "pages/members/artists";
        $this->load->view('layout_members', $data);
    }


    public function all_artists()
    {
        $data = $this->artists_model->get_artists();
        echo json_encode(array('data' => $data));
    }


    public function add_artist()
    {
        //$this->load->model('artists_model');

        $added_by = $this->session->userdata('user_id');


        $this->form_validation->set_rules('art_alias', 'Alias name', 'trim|required');

        if($this->form_validation->run() == TRUE)
        {

            $data = array(
               'added_by'     => $added_by,
               'alias_name'   => $this->input->post('art_alias'),
               'website'      => $this->input->post('art_web'),
               'type'         => $this->input->post('art_type'),
               'myspace'      => $this->input->post('art_myspace'),
               'facebook'     => $this->input->post('art_fb'),
               'youtube'      => $this->input->post('art_youtube'),
               'soundcloud'   => $this->input->post('art_sc'),
               'twitter'      => $this->input->post('art_tw'),
               'blog_rss'     => $this->input->post('art_rss'),
               'biography'    => $this->input->post('art_bio')
            );


            $msg = "Artist added successfully";
            $status = "success";
            $file_element_name = "art_img";


            // trying to upload file if there's filename
            if(!empty($_FILES['art_img']['name']) ){


                $config['upload_path'] = 'files/artists';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 1024 * 2;
                $config['encrypt_name'] = TRUE;
                $config['remove_spaces'] = TRUE;

                $this->load->library('upload', $config);

                // if file upload failed - $msg contains error text
                if (!$this->upload->do_upload($file_element_name))
                {
                    $status = 'error';
                    $msg = $this->upload->display_errors('', '');
                }
                else
                {
                    $dataUpload = $this->upload->data();
                    if (!empty($dataUpload)) {
                        $data['artist_img'] = $dataUpload['file_name'];
                    }
                    else{
                        $status = "error";
                        $msg = "Something went wrong while uploading file, please try again.";
                    }

                }
                @unlink($_FILES[$file_element_name]);

            }

            if($status == "success")
            {
                $this->artists_model->add_artist($data);
            }

            echo json_encode(array('status' => $status, 'msg' => $msg));
        }
        else
        {
            $response = array('status' => 'fail', 'message' => validation_errors());
            echo json_encode($response);
        }

    }

}

/* End of file artists.php */
/* Location: ./application/controllers/members/artists.php */