<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public function __construct() {
        parent::__construct();
        //Do your magic here

        $this->load->model('Dashboardmodel');
    }

    public function index() {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $data['home'] = $this->Dashboardmodel->get_by_id_home($id = 1);
        $data['count'] = $this->Dashboardmodel->get_count();
        $this->template->load('template_admin/template_admin', 'dashboard', $data);
    }

    public function edit_home($id = '') {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $param = $this->input->post();

        $data = $this->security->xss_clean($param);
        $data['pic'] = $data['image'];
        $data['pic_thumb'] = $data['image_thumb'];

        $data_img_1 = explode('/', $data['image']);
        $img_name_1 = $data_img_1[2];

        $this->form_validation->set_rules('ucapan', 'Nama Ucapan Penjuak', 'required');
        $this->form_validation->set_rules('no_cs', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('pusat_lokasi', 'Pusat Lokasi', 'required');
        $this->form_validation->set_rules('label_src', 'Label Search', 'required');
        $this->form_validation->set_rules('nama_promo', 'Nama Promo', 'required');
        $this->form_validation->set_rules('isi_label_promo', 'Isi Promo', 'required');
        $this->form_validation->set_rules('alamat_web', 'Alamat Web', 'required');
        $this->form_validation->set_rules('email', 'Email CS', 'required');
        $this->form_validation->set_rules('facebook', 'Link Facebook', 'required');
        $this->form_validation->set_rules('twitter', 'Link Twitter', 'required');
        $this->form_validation->set_rules('instagram', 'Link Instagram', 'required');
        $this->form_validation->set_rules('youtube', 'Link Youtube', 'required');

        if ($this->form_validation->run() == FALSE) {
            //
            $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
            redirect('dashboard');
        } else {
            $this->load->library('upload'); //load library upload file
            $this->load->library('image_lib'); //load library image

            if (!empty($_FILES['img']['tmp_name'])) {

                $this->delete_file($img_name_1); //delete existing file

                $path = 'uploads/icon/';
                $path_thumb = 'uploads/icon/thumbs/';
                //config upload file
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $config['max_size'] = 2048; //set without limit
                $config['overwrite'] = FALSE; //if have same name, add number
                $config['remove_spaces'] = TRUE; //change space into _
                $config['encrypt_name'] = TRUE;
                //initialize config upload
                $this->upload->initialize($config);

                if ($this->upload->do_upload('img')) {//if success upload data
                    $result['upload'] = $this->upload->data();
                    $name = $result['upload']['file_name'];
                    $data['pic'] = $path . $name;

                    $img['image_library'] = 'gd2';
                    $img['source_image'] = $path . $name;
                    $img['new_image'] = $path_thumb . $name;
                    $img['maintain_ratio'] = true;
                    $img['width'] = 300;
                    $img['weight'] = 70;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['pic_thumb'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('dashboard');
                    }
                } else {
                    $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                    redirect('dashboard');
                }
            }
            // print_r($data);exit;    
            $edit = $this->Dashboardmodel->update_home($id, $data);
            if ($edit == true) {
                $this->session->set_flashdata('flash_message', succ_msg('Berhasil, Data Telah Tersimpan..'));
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                redirect('dashboard');
            }
        }
    }

    public function delete_file($name = '') {
        $path = './uploads/icon/';
        $path_thumb = './uploads/icon/thumbs/';
        @unlink($path . $name);
        @unlink($path_thumb . $name);
    }

}
