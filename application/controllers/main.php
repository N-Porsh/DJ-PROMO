<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends Front_Controller {

    public function index($page = "home")
    {
        $page = "pages/".$page;

        if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }


        $data['main_content'] = $page;

        $data = array('title' => Front_Controller::$title,'main_content' => $page );
        //$data = array('head' => Front_Controller::$title,'main_content' => $page );

        $this->load->view('layout', $data);
    }

    /**
     * News page gathers news from db
     * @return array of news
     */
    public function news()
    {
        $data['title'] = "DJ-Promo News";
        $data['news_title'] = "recent posts";

        $this->load->model('news_model');
        $this->load->helper('text');
        $data['news'] = $this->news_model->get_news();

        $data['main_content'] = "pages/news";

        $this->load->view('layout', $data);
    }

    public function article($id)
    {
        $data['title'] = "DJ-Promo Post";
        $data['news_title'] = "Post";

        $this->load->model('news_model');

        $data['news'] = $this->news_model->get_news_block($id);

        $data['main_content'] = "pages/article";

        $this->load->view('layout', $data);
    }

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */