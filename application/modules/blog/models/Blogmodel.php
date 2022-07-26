<?php

class Blogmodel extends CI_Model {

    private $table_blog = 'blog';
    private $table_home = 'home';

    public function get_by_id_home($id = '') {
        $this->db->where('id', $id);
        $sql = $this->db->get($this->table_home);
        return $sql->result();
    }

    public function get_kat() {
        $sql = $this->db->query('SELECT * FROM kategori');
        return $sql->result();
    }

    public function get_merek() {
        $sql = $this->db->query('SELECT gambar_merek FROM toko');
        return $sql->result();
    }

    public function get_count() {
        $sql = $this->db->query('select (select count(id) from blog) as blog, (select count(id) from user) as user');
        return $sql->result();
    }

    public function get_blog_limit() {
        $sql = $this->db->query('SELECT * FROM `blog` ORDER BY date LIMIT 3');
        return $sql->result();
    }

    public function get_blog() {
        $sql = $this->db->query('SELECT * FROM blog');
        return $sql->result();
    }

    public function get_by_id_blog($id = '') {
        $this->db->where('id', $id);
        $sql = $this->db->get($this->table_blog);
        return $sql->result();
    }

    public function insert_blog($value = '') {

        $data = array(
            'judul' => $value['judul'],
            'tag' => $value['tag'],
            'highlight' => $value['highlight'],
            'isi_blog' => $value['isi_blog'],
            'gambar' => $value['pic'],
            'gambar_thumb' => $value['pic_thumb'],
        );
        $this->db->insert($this->table_blog, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_blog($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'judul' => $value['judul'],
            'tag' => $value['tag'],
            'highlight' => $value['highlight'],
            'isi_blog' => $value['isi_blog'],
            'gambar' => $value['pic'],
            'gambar_thumb' => $value['pic_thumb'],
        );

        $this->db->where('id', $id);
        $this->db->update($this->table_blog, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function get_img_by_id_blog($id = '') {
        $this->db->select('gambar');
        $this->db->where('id', $id);
        $sql = $this->db->get($this->table_blog);
        return $sql->result();
    }

    public function delete_blog($value) {
        $this->db->trans_begin();

        $this->db->where('id', $value);
        $this->db->delete($this->table_blog);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

}

?>