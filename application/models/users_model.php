<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

    /**
     * get all user data
     *
     * @param  int $id if $id not set, current user id will be used(using session)
     * @return array of userdata
     */
    public function get_user($id = FALSE)
    {
        $id || $id = $this->session->userdata('user_id');


        $this->db->select('u.email, d.name, d.surname, d.pseudonym, d.country, d.phone, d.fav_music_genre');
        $this->db->from('users u');
        $this->db->join('users_data d', 'd.user_id = u.id', 'left');
        $this->db->where('u.id', $id);
        $this->db->limit(1);
        $query = $this->db->get();

        //var_dump($this->db->last_query());

        if ($query->num_rows() > 0 )
        {
            return $query->row_array();
        }
/*        else
        {
            return array(
                'name'            => '',
                'surname'         => '',
                'email'           => '',
                'pseudonym'       => '',
                'country'         => '',
                'phone'           => '',
                'fav_music_genre' => ''
            );
        }*/
    }


    public function edit_user_data($id = FALSE)
    {
        $id || $id = $this->session->userdata('user_id');

        $q = $this->db->select('id')->get_where('users_data', array('user_id' => $id ), 1);

        // check if user exists
        if($q->num_rows() > 0)
        {
            echo $this->update_user_data($id);
        }
        else
        {
            echo $this->create_user_data($id);
        }
    }


    public function update_user_data($id = FALSE)
    {

        $tables = $this->config->item('tables','ion_auth');
        $id || $id = $this->session->userdata('user_id');


        if($this->verify_users_data())
        {
            $name    = $this->input->post('usr_name');
            $surname = $this->input->post('usr_surname');
            $email   = strtolower($this->input->post('usr_email'));
            $pseudo  = $this->input->post('usr_pseudo');
            $country = $this->input->post('usr_country');
            $phone   = $this->input->post('usr_phone');
            $fav_mus = $this->input->post('usr_fav_mus_genre');


            $data = array(
               'user_id'         => $id,
               'name'            => $name,
               'surname'         => $surname,
               'pseudonym'       => $pseudo,
               'country'         => $country,
               'phone'           => $phone,
               'fav_music_genre' => $fav_mus
            );


            $this->db->where('user_id', $id);
            $this->db->update('users_data', $data);
            //var_dump($this->db->last_query());
            // update email value in users table
            $this->ion_auth->update($id, array('email' => $email));


            $response = array('status' => 'updated', 'message' => $this->ion_auth->messages());
            return json_encode($response);
        }
        else
        {
            $response = array('status' => 'fail', 'message' => validation_errors());
            return json_encode($response);
        }

    }


    public function create_user_data($id = FALSE)
    {
        $tables = $this->config->item('tables','ion_auth');
        $id || $id = $this->session->userdata('user_id');


        if($this->verify_users_data())
        {
            $name    = $this->input->post('usr_name');
            $surname = $this->input->post('usr_surname');
            $email   = strtolower($this->input->post('usr_email'));
            $pseudo  = $this->input->post('usr_pseudo');
            $country = $this->input->post('usr_country');
            $phone   = $this->input->post('usr_phone');
            $fav_mus = $this->input->post('usr_fav_mus_genre');


            $data = array(
               'user_id'         => $id,
               'name'            => $name,
               'surname'         => $surname,
               'pseudonym'       => $pseudo,
               'country'         => $country,
               'phone'           => $phone,
               'fav_music_genre' => $fav_mus
            );

            $this->db->insert('users_data', $data);
            // update email value in users table
            $this->ion_auth->update($id, array('email' => $email));


            $response = array('status' => 'updated', 'message' => $this->ion_auth->messages());
            return json_encode($response);
        }
        else
        {
            $response = array('status' => 'fail', 'message' => validation_errors());
            return json_encode($response);
        }
    }

    public function verify_users_data()
    {
        $tables = $this->config->item('tables','ion_auth');

        $user = $this->ion_auth->user()->row();


        $this->form_validation->set_rules('usr_name',           $this->lang->line('edit_user_validation_fname_label'), 'trim');
        $this->form_validation->set_rules('usr_surname',        $this->lang->line('edit_user_validation_lname_label'), 'trim');

        // if current email != users input email then check if the new one in unique
        if($this->input->post('usr_email') != $user->email)
        {
            $this->form_validation->set_rules('usr_email', $this->lang->line('edit_user_validation_email_label'), 'trim|required|valid_email|is_unique['.$tables['users'].'.email]');
        }

        $this->form_validation->set_rules('usr_pseudo',         $this->lang->line('edit_user_validation_pseudo_label'),'trim');
        $this->form_validation->set_rules('usr_country',        $this->lang->line('edit_user_validation_lname_label'), 'trim');
        $this->form_validation->set_rules('usr_phone',          $this->lang->line('edit_user_phone_label'),            'trim');
        $this->form_validation->set_rules('usr_fav_mus_genre',  $this->lang->line('edit_user_validation_music_genre_label'), 'trim');

        //return true if valid/false if not
        return $this->form_validation->run() ? true : false;

    }

}

/* End of file users_model.php */
/* Location: ./application/models/users_model.php */