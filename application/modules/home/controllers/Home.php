<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

    public function __construct() {
        parent::__construct();
        //Do your magic here

        $this->load->model('Homemodel');
    }

    public function index() {
        $data['home'] = $this->Homemodel->get_by_id_home(1);
        $data['merek'] = $this->Homemodel->get_merek();
        $data['kat'] = $this->Homemodel->get_kat();
        $data['pumum'] = $this->Homemodel->get_produk_umum();
        $data['prekom'] = $this->Homemodel->get_produk_rekom();
        $this->template->load('template_landing_page/template_landing_page', 'home', $data);
    }

    public function cari() {
        $param = $this->input->get();
        $data['home'] = $this->Homemodel->get_by_id_home(1);
        $data['merek'] = $this->Homemodel->get_merek();
        $data['kat'] = $this->Homemodel->get_kat();
        $data['prekom'] = $this->Homemodel->get_produk_rekom();

        $nama = $param['nama'];
        $kat = $param['produk_kat'];
        $data['pumum'] = $this->Homemodel->cari_data($nama, $kat);
        $this->template->load('template_landing_page/template_landing_page', 'home', $data);
    }

}
