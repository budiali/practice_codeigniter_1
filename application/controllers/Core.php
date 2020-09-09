<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller {

    public function index() {
        $data = [
            "title" => "Core Practice Codeigniter 1",
            "page"  => "core/homepage",
        ];
        $this->load->view('theme/template', $data);
    }

}

/* End of file Core.php */
/* Location: ./application/controllers/Core.php */