<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Labels_model extends CI_Model {

    public function insert_file($filename, $title)
    {
        $data = array(
            'user_id'  => $this->session->userdata('user_id'),
            'filename' => $filename,
            'title'    => $title
        );
        $this->db->insert('labels', $data);
        return $this->db->insert_id();
    }

    public function get_labels()
    {
         return $this->db->select()
            ->from('labels')
            ->get()
            ->result();
        //var_dump($this->db->last_query());
    }

    public function delete_file($file_id)
    {
        $file = $this->get_file($file_id);
        if (!$this->db->where('id', $file_id)->delete('labels'))
        {
            return FALSE;
        }
        unlink('./files/labels/' . $file->filename);
        return TRUE;
    }

    public function get_file($file_id)
    {
        return $this->db->select()
                ->from('labels')
                ->where('id', $file_id)
                ->get()
                ->row(); // row array ?
    }
}

/* End of file files.php */
/* Location: ./application/models/files.php */