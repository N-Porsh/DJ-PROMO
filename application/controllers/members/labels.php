<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Labels extends Front_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('labels_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = "DJ-Promo Labels";

        $data['main_content'] = "pages/members/labels";
        $this->load->view('layout_members', $data);
    }

    public function upload_file()
    {
        $status = "";
        $msg = "";
        $file_element_name = 'labelPicture';

        $title = $this->input->post('title'); // because of php <5.5 limitations

        if (empty($title))
        {
            $status = "error";
            $msg = "Please enter Label name";
        }

        if ($status != "error")
        {
            $config['upload_path'] = 'files/labels';
            $config['allowed_types'] = 'gif|jpg|png|doc|txt';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else
            {
                $data = $this->upload->data();
                $file_id = $this->labels_model->insert_file($data['file_name'], $title);
                if($file_id)
                {
                    $status = "success";
                    $msg = "File successfully uploaded";
                }
                else
                {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo json_encode(array('status' => $status, 'msg' => $msg));
    }

    public function files()
    {
        $files = $this->labels_model->get_labels();
        echo json_encode(array('files' => $files));
        //$this->load->view('files', array('files' => $files));
    }

    public function delete_file($file_id)
    {
        if ($this->labels_model->delete_file($file_id))
        {
            $status = 'success';
            $msg = 'File successfully deleted';
        }
        else
        {
            $status = 'error';
            $msg = 'Something went wrong when deleteing the file, please try again';
        }
        echo json_encode(array('status' => $status, 'msg' => $msg));
    }
}

/* End of file labels.php */
/* Location: ./application/controllers/members/labels.php */