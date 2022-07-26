<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends MX_Controller {

    public function __construct() {
        parent::__construct();
        //Do your magic here 
        $this->load->model('Penjualmodel');
    }

    public function index() {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $data['pemilik'] = $this->Penjualmodel->get_pemilik();
        $data['toko'] = $this->Penjualmodel->get_toko();
        $data['count'] = $this->Penjualmodel->get_count();
        $this->template->load('template_admin/template_admin', 'toko_pemilik', $data);
    }

    public function tambah_pemilik() {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $data['title'] = "Batik Apps";
        $this->template->load('template_admin/template_admin', 'tambah_pemilik', $data);
    }

    public function get_penjual($id = '') {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $data = array();
        $data['penjual'] = $this->Penjualmodel->get_by_id_penjual($id); //?
        $cek = $this->Penjualmodel->get_by_id_penjual($id);
        if ($cek == FALSE or empty($id)) {
            $this->load->view('error_404', $data);
        } else {
            //edit data with id
            $this->template->load('template_admin/template_admin', 'edit_pemilik', $data);
        }
    }

    public function tambah_toko() {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $data['pemilik'] = $this->Penjualmodel->get_pemilik_all(); //?
        $this->template->load('template_admin/template_admin', 'tambah_toko', $data);
    }

    public function detail_toko() {
        $this->template->load('template_landing_page/template_landing_page', 'detail_toko', $data);
    }

    public function get_toko($id = '') {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $data = array();
        $data['pemilik'] = $this->Penjualmodel->get_pemilik();
        $data['toko'] = $this->Penjualmodel->get_by_id_toko($id); //?
        $cek = $this->Penjualmodel->get_by_id_toko($id);
        if ($cek == FALSE or empty($id)) {
            $this->load->view('error_404', $data);
        } else {
            //edit data with id
            $this->template->load('template_admin/template_admin', 'edit_toko', $data);
        }
    }

    public function kirim_penjual() {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('nama_pemilik', 'Nama Lengkap Penjuak', 'required');
        $this->form_validation->set_rules('nomor_ktp', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
            redirect('penjual/tambah_pemilik'); //folder, controller, method
        } else {
            $this->load->library('upload'); //load library upload file
            $this->load->library('image_lib'); //load library image

            if (!empty($_FILES['img'])) {

                $path = 'uploads/penjual/';
                $path_thumb = 'uploads/penjual/thumbs/';
                //config upload file
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 2048; //set limit
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
                    $img['width'] = 100;
                    $img['weight'] = 100;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['pic_thumb'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('penjual/tambah_pemilik');
                    }
                } else {
                    $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                    redirect('penjual/tambah_pemilik');
                }
            }

            if (!empty($_FILES['img_ktp'])) {

                $path = 'uploads/penjual/';
                $path_thumb = 'uploads/penjual/thumbs/';
                //config upload file
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 2048; //set limit
                $config['overwrite'] = FALSE; //if have same name, add number
                $config['remove_spaces'] = TRUE; //change space into _
                $config['encrypt_name'] = TRUE;
                //initialize config upload
                $this->upload->initialize($config);

                if ($this->upload->do_upload('img_ktp')) {//if success upload data
                    $result['upload'] = $this->upload->data();
                    $name = $result['upload']['file_name'];
                    $data['pic_ktp'] = $path . $name;

                    $img['image_library'] = 'gd2';
                    $img['source_image'] = $path . $name;
                    $img['new_image'] = $path_thumb . $name;
                    $img['maintain_ratio'] = true;
                    $img['width'] = 500;
                    $img['weight'] = 100;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['pic_ktp_thumb'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('penjual/tambah_pemilik');
                    }
                } else {
                    $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                    redirect('penjual/tambah_pemilik');
                }
            }

            $input = $this->Penjualmodel->insert_penjual($data);
            if ($input == true) {
                $this->session->set_flashdata('flash_message', succ_msg('Berhasil, Data telah tersimpan..'));
                redirect('penjual/tambah_pemilik');
            } else {
                $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                redirect('penjual/tambah_pemilik');
            }
        }
    }

    public function kirim_toko() {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('nomor_toko', 'Nomor Toko/Badan Usaha', 'required');
        $this->form_validation->set_rules('kat_usaha', 'Kategori Usaha', 'required');
        $this->form_validation->set_rules('label', 'Nama Merek', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Toko', 'required');
        $this->form_validation->set_rules('desc_toko', 'Deskripsi Toko', 'required');

        $milik = $data['pemilik'];
        $data['pemilik2'] = implode(",", $milik);

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
            redirect('penjual/tambah_toko'); //folder, controller, method
        } else {
            $this->load->library('upload'); //load library upload file
            $this->load->library('image_lib'); //load library image
            if (!empty($_FILES['img'])) {

                $path = 'uploads/toko/';
                $path_thumb = 'uploads/toko/thumbs/';
                //config upload file
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 2048; //set limit
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
                    $img['width'] = 600;
                    $img['weight'] = 600;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['pic_thumb'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('penjual/tambah_toko');
                    }
                } else {
                    $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                    redirect('penjual/tambah_toko');
                }
            }
            if (!empty($_FILES['img_label'])) {

                $path = 'uploads/toko/';
                $path_thumb = 'uploads/toko/thumbs/';
                //config upload file
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 2048; //set limit
                $config['overwrite'] = FALSE; //if have same name, add number
                $config['remove_spaces'] = TRUE; //change space into _
                $config['encrypt_name'] = TRUE;
                //initialize config upload
                $this->upload->initialize($config);

                if ($this->upload->do_upload('img_label')) {//if success upload data
                    $result['upload'] = $this->upload->data();
                    $name = $result['upload']['file_name'];
                    $data['pic2'] = $path . $name;

                    $img['image_library'] = 'gd2';
                    $img['source_image'] = $path . $name;
                    $img['new_image'] = $path_thumb . $name;
                    $img['maintain_ratio'] = true;
                    $img['width'] = 600;
                    $img['weight'] = 600;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['pic_thumb2'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('penjual/tambah_toko');
                    }
                } else {
                    $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                    redirect('penjual/tambah_toko');
                }
            }

            $input = $this->Penjualmodel->insert_toko($data);
            if ($input == true) {
                $this->session->set_flashdata('flash_message', succ_msg('Berhasil, Data telah tersimpan..'));
                redirect('penjual/tambah_toko');
            } else {
                $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                redirect('penjual/tambah_toko');
            }
        }
    }

    public function edit_penjual($id = '') {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $param = $this->input->post();

        $data = $this->security->xss_clean($param);
        $data['pic'] = $data['image'];
        $data['pic_thumb'] = $data['image_thumb'];

        $data['pic_ktp'] = $data['image_ktp'];
        $data['pic_ktp_thumb'] = $data['image_ktp_thumb'];

        $data_img_1 = explode('/', $data['image']);
        $img_name_1 = $data_img_1[2];

        $data_img_2 = explode('/', $data['image_ktp']);
        $img_name_2 = $data_img_2[2];

        $this->form_validation->set_rules('nama_pemilik', 'Nama Lengkap Penjuak', 'required');
        $this->form_validation->set_rules('nomor_ktp', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            //
            $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
            redirect('penjual/get_penjual/' . $id);
        } else {
            $this->load->library('upload'); //load library upload file
            $this->load->library('image_lib'); //load library image

            if (!empty($_FILES['img']['tmp_name'])) {

                $this->delete_file($img_name_1); //delete existing file

                $path = 'uploads/penjual/';
                $path_thumb = 'uploads/penjual/thumbs/';
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
                    $img['width'] = 100;
                    $img['weight'] = 100;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['pic_thumb'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('penjual/get_penjual/' . $id);
                    }
                } else {
                    $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                    redirect('penjual/get_penjual/' . $id);
                }
            }

            if (!empty($_FILES['img_ktp']['tmp_name'])) {

                $this->delete_file($img_name_2); //delete existing file

                $path = 'uploads/penjual/';
                $path_thumb = 'uploads/penjual/thumbs/';
                //config upload file
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $config['max_size'] = 2048; //set without limit
                $config['overwrite'] = FALSE; //if have same name, add number
                $config['remove_spaces'] = TRUE; //change space into _
                $config['encrypt_name'] = TRUE;
                //initialize config upload
                $this->upload->initialize($config);

                if ($this->upload->do_upload('img_ktp')) {//if success upload data
                    $result['upload'] = $this->upload->data();
                    $name = $result['upload']['file_name'];
                    $data['pic_ktp'] = $path . $name;

                    $img['image_library'] = 'gd2';
                    $img['source_image'] = $path . $name;
                    $img['new_image'] = $path_thumb . $name;
                    $img['maintain_ratio'] = true;
                    $img['width'] = 100;
                    $img['weight'] = 100;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['pic_ktp_thumb'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('penjual/get_penjual/' . $id);
                    }
                } else {
                    $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                    redirect('penjual/get_penjual/' . $id);
                }
            }
            // print_r($data);exit;    
            $edit = $this->Penjualmodel->update_penjual($id, $data);
            if ($edit == true) {
                $this->session->set_flashdata('flash_message', succ_msg('Berhasil, Data Telah Tersimpan..'));
                redirect('penjual/get_penjual/' . $id);
            } else {
                $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                redirect('penjual/get_penjual/' . $id);
            }
        }
    }

    public function edit_toko($id = '') {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $param = $this->input->post();

        $data = $this->security->xss_clean($param);
        $data['pic'] = $data['image'];
        $data['pic_thumb'] = $data['image_thumb'];

        $data['pic2'] = $data['image_logo'];
        $data['pic_thumb2'] = $data['image_logo_thumb'];

        $data_img_1 = explode('/', $data['image']);
        $img_name_1 = $data_img_1[2];

        $data_img_2 = explode('/', $data['image_logo']);
        $img_name_2 = $data_img_2[2];

        $milik = $data['pemilik'];
        $data['pemilik2'] = implode(",", $milik);

        $this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('nomor_toko', 'Nomor Toko/Badan Usaha', 'required');
        $this->form_validation->set_rules('kat_usaha', 'Kategori Usaha', 'required');
        $this->form_validation->set_rules('label', 'Nama Merek', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Toko', 'required');
        $this->form_validation->set_rules('desc_toko', 'Deskripsi Toko', 'required');

        if ($this->form_validation->run() == FALSE) {
            //
            $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
            redirect('penjual/get_toko/' . $id);
        } else {
            $this->load->library('upload'); //load library upload file
            $this->load->library('image_lib'); //load library image

            if (!empty($_FILES['img']['tmp_name'])) {

                $this->delete_file_toko($img_name_1); //delete existing file

                $path = 'uploads/toko/';
                $path_thumb = 'uploads/toko/thumbs/';
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
                    $img['width'] = 100;
                    $img['weight'] = 100;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['pic_thumb'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('penjual/get_toko/' . $id);
                    }
                } else {
                    $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                    redirect('penjual/get_toko/' . $id);
                }
            }

            if (!empty($_FILES['img_label']['tmp_name'])) {

                $this->delete_file_toko($img_name_2); //delete existing file

                $path = 'uploads/toko/';
                $path_thumb = 'uploads/toko/thumbs/';
                //config upload file
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $config['max_size'] = 2048; //set without limit
                $config['overwrite'] = FALSE; //if have same name, add number
                $config['remove_spaces'] = TRUE; //change space into _
                $config['encrypt_name'] = TRUE;
                //initialize config upload
                $this->upload->initialize($config);

                if ($this->upload->do_upload('img_label')) {//if success upload data
                    $result['upload'] = $this->upload->data();
                    $name = $result['upload']['file_name'];
                    $data['pic2'] = $path . $name;

                    $img['image_library'] = 'gd2';
                    $img['source_image'] = $path . $name;
                    $img['new_image'] = $path_thumb . $name;
                    $img['maintain_ratio'] = true;
                    $img['width'] = 100;
                    $img['weight'] = 100;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['pic_thumb2'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('penjual/get_toko/' . $id);
                    }
                } else {
                    $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                    redirect('penjual/get_toko/' . $id);
                }
            }
            // print_r($data);exit;    
            $edit = $this->Penjualmodel->update_toko($id, $data);
            if ($edit == true) {
                $this->session->set_flashdata('flash_message', succ_msg('Berhasil, Data Telah Tersimpan..'));
                redirect('penjual/get_toko/' . $id);
            } else {
                $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                redirect('penjual/get_toko/' . $id);
            }
        }
    }

    public function delete_pemilik() {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $id = $this->input->post('id');
        $data = $this->Penjualmodel->get_img_by_id_pemilik($id);
        $data_img1 = explode('/', $data[0]->foto_pemilik);
        $name_img1 = $data_img1[2];
        $data_img2 = explode('/', $data[0]->scan_ktp);
        $name_img2 = $data_img2[2];
        $delete = $this->Penjualmodel->delete_pemilik($id);
        if ($delete == true) {
            $this->delete_file($name_img1);
            $this->delete_file($name_img2);
            echo '1|' . succ_msg('Berhasil, Data Telah Terhapus..');
        } else {
            echo '0|' . err_msg('Maaf, Terjadi kesalahan, Coba lagi....');
        }
    }

    public function delete_toko() {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $id = $this->input->post('id');
        $data = $this->Penjualmodel->get_img_by_id_toko($id);
        $data_img1 = explode('/', $data[0]->gambar_merek);
        $name_img1 = $data_img1[2];
        $data_img2 = explode('/', $data[0]->foto_toko);
        $name_img2 = $data_img2[2];
        $delete = $this->Penjualmodel->delete_toko($id);
        if ($delete == true) {
            $this->delete_file_toko($name_img1);
            $this->delete_file_toko($name_img2);
            echo '1|' . succ_msg('Berhasil, Data Telah Terhapus..');
        } else {
            echo '0|' . err_msg('Maaf, Terjadi kesalahan, Coba lagi....');
        }
    }

    public function delete_file($name = '') {
        $path = './uploads/penjual/';
        $path_thumb = './uploads/penjual/thumbs/';
        @unlink($path . $name);
        @unlink($path_thumb . $name);
    }

    public function delete_file_toko($name = '') {
        $path = './uploads/toko/';
        $path_thumb = './uploads/toko/thumbs/';
        @unlink($path . $name);
        @unlink($path_thumb . $name);
    }

}
