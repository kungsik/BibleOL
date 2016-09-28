<?php
class Ctrl_lang extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if (isset($_GET['lang'])) {
            $newlang = $_GET['lang'];
            switch ($newlang) {
              case 'en':
              case 'es':
              case 'pt':
              case 'da':
                    $this->session->set_userdata('language', $newlang);
                    break;

              default:
                    $this->error_view('Unknown language', 'Set language');
                    return;
            }
        }

        redirect($_SERVER['HTTP_REFERER']);
    }
  }