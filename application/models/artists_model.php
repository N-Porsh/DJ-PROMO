<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artists_model extends CI_Model {

    public function add_artist()
    {

        $added_by = $this->session->userdata('user_id');

        $this->form_validation->set_rules('art_alias', 'Alias name', 'trim|required');

        if($this->form_validation->run() == TRUE)
        {
            $alias   = $this->input->post('art_alias');
            $web     = $this->input->post('art_web');
            $type    = $this->input->post('art_type');
            $myspace = $this->input->post('art_myspace');
            $fb      = $this->input->post('art_fb');
            $youtube = $this->input->post('art_youtube');
            $sc      = $this->input->post('art_sc');
            $tw      = $this->input->post('art_tw');
            $rss     = $this->input->post('art_rss');
            $bio     = $this->input->post('art_bio');


            $data = array(
               'added_by'     => $added_by,
               'alias_name'   => $alias,
               'website'      => $web,
               'type'         => $type,
               'myspace'      => $myspace,
               'facebook'     => $fb,
               'youtube'      => $youtube,
               'soundcloud'   => $sc,
               'twitter'      => $tw,
               'blog_rss'     => $rss,
               'biography'    => $bio
               //'artist_img' => $fav_mus
            );

            $this->db->insert('artists', $data);


            $response = array('status' => 'success', 'message' => 'Artist Successfully Added');
            return json_encode($response);
        }
        else
        {
            $response = array('status' => 'fail', 'message' => validation_errors());
            return json_encode($response);
        }
    }



}

/* End of file artists_model.php */
/* Location: ./application/models/artists_model.php */
