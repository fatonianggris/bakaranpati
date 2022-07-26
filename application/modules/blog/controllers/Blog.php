<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MX_Controller {

    public function __construct() {
        parent::__construct();
        //Do your magic here

        $this->load->model('Blogmodel');
    }

    public function index() {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $data['blog'] = $this->Blogmodel->get_blog();
        $data['count'] = $this->Blogmodel->get_count();
        $this->template->load('template_admin/template_admin', 'daftar_blog', $data);
    }

    public function get_blog($id = '') {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $data = array();
        $data['blog'] = $this->Blogmodel->get_by_id_blog($id); //?
        $cek = $this->Blogmodel->get_by_id_blog($id);
        if ($cek == FALSE or empty($id)) {
            $this->load->view('error_404', $data);
        } else {
            //edit data with id
            $this->template->load('template_admin/template_admin', 'edit_blog', $data);
        }
    }

    public function tambah_blog() {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $data['title'] = "Sign Apps";
        $data['nav'] = "Beranda";
        $this->template->load('template_admin/template_admin', 'tambah_blog', $data);
    }

    public function konten($id = '') {
        $data['home'] = $this->Blogmodel->get_by_id_home(1);
        $data['merek'] = $this->Blogmodel->get_merek();
        $data['kat'] = $this->Blogmodel->get_kat();
        $data['blogid'] = $this->Blogmodel->get_by_id_blog($id);
        $data['blogrec'] = $this->Blogmodel->get_blog_limit($id);
        if (empty($id)) {
            $this->load->view('error_404', $data);
        } else {
            //edit data with id
            $this->template->load('template_landing_page/template_landing_page', 'konten', $data);
        }
    }

    public function kirim_blog() {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('tag', 'Tag', 'required');
        $this->form_validation->set_rules('highlight', 'Highlight', 'required');
        $this->form_validation->set_rules('isi_blog', 'Isi Blog', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
            redirect('blog/tambah_blog'); //folder, controller, method
        } else {
            $this->load->library('upload'); //load library upload file
            $this->load->library('image_lib'); //load library image
            if (!empty($_FILES['img'])) {

                $path = 'uploads/blog/';
                $path_thumb = 'uploads/blog/thumbs/';
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
                    $img['width'] = 870;
                    $img['weight'] = 460;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['pic_thumb'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('blog/tambah_blog');
                    }
                } else {
                    $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                    redirect('blog/tambah_blog');
                }
            }

            $input = $this->Blogmodel->insert_blog($data);
            if ($input == true) {
                $this->session->set_flashdata('flash_message', succ_msg('Berhasil, Data telah tersimpan..'));
                redirect('blog/tambah_blog');
            } else {
                $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                redirect('blog/tambah_blog');
            }
        }
    }

    public function edit_blog($id = '') {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $param = $this->input->post();

        $data = $this->security->xss_clean($param);
        $data['pic'] = $data['image'];
        $data['pic_thumb'] = $data['image_thumb'];

        $data_img = explode('/', $data['image']);
        $img_name = $data_img[2];

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('tag', 'Tag', 'required');
        $this->form_validation->set_rules('highlight', 'Highlight', 'required');
        $this->form_validation->set_rules('isi_blog', 'Isi Blog', 'required');

        if ($this->form_validation->run() == FALSE) {
            //
            $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
            redirect('blog/get_blog/' . $id);
        } else {
            $this->load->library('upload'); //load library upload file
            $this->load->library('image_lib'); //load library image
            if (!empty($_FILES['img']['tmp_name'])) {

                $this->delete_file($img_name); //delete existing file

                $path = 'uploads/blog/';
                $path_thumb = 'uploads/blog/thumbs/';
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
                        redirect('blog/get_blog/' . $id);
                    }
                } else {
                    $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                    redirect('blog/get_blog/' . $id);
                }
            }
            // print_r($data);exit;    
            $edit = $this->Blogmodel->update_blog($id, $data);
            if ($edit == true) {
                $this->session->set_flashdata('flash_message', succ_msg('Berhasil, Data Telah Tersimpan..'));
                redirect('blog/get_blog/' . $id);
            } else {
                $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                redirect('blog/get_blog/' . $id);
            }
        }
    }

    public function delete_blog() {
        if ($this->session->userdata('batikpati') == FALSE) {
            redirect('auth');
        }
        $id = $this->input->post('id');
        $data = $this->Blogmodel->get_img_by_id_blog($id);
        $data_img = explode('/', $data[0]->gambar);
        $name_img = $data_img[2];
        $delete = $this->Blogmodel->delete_blog($id);
        if ($delete == true) {
            $this->delete_file($name_img);
            echo '1|' . succ_msg('Berhasil, Data Telah Terhapus..');
        } else {
            echo '0|' . err_msg('Maaf, Terjadi kesalahan, Coba lagi....');
        }
    }

    public function delete_file($name = '') {
        $path = './uploads/blog/';
        $path_thumb = './uploads/blog/thumbs/';
        @unlink($path . $name);
        @unlink($path_thumb . $name);
    }

}
