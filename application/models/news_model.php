<?php
class News_model extends CI_Model {

    public function get_news($title = FALSE)
    {
        if ($title === FALSE)
        {
            $this->db->order_by('date_created', 'desc');
            $this->db->limit(5);
            $query = $this->db->get('news');

            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('title' => $title));
        return $query->row_array();

    }

    public function get_news_block($id)
    {
        $this->db->limit(1);
        $query = $this->db->get_where('news', array('id' => $id));
        if($query->num_rows() > 0 )
            return $query->row_array();
        else{
            return FALSE;
        }
    }


}
