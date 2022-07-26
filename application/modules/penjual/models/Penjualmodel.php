<?php

class Penjualmodel extends CI_Model {

    private $table_pemilik = 'pemilik';
    private $table_toko = 'toko';

    public function get_count() {
        $sql = $this->db->query('select (select count(id) from toko) as toko, (select count(id) from user) as user, (select count(id) from produk) as produk, (select count(id) from pemilik) as pemilik');
        return $sql->result();
    }

    public function get_pemilik() {
        $sql = $this->db->query('SELECT * FROM pemilik');
        return $sql->result();
    }

    public function get_toko() {
        $sql = $this->db->query('SELECT * FROM toko');
        return $sql->result();
    }

    public function get_by_id_penjual($id = '') {
        $this->db->where('id', $id);
        $sql = $this->db->get($this->table_pemilik);
        return $sql->result();
    }

    public function get_pemilik_all() {
        $sql = $this->db->query('SELECT id, nama_lengkap FROM pemilik');
        return $sql->result();
    }

    public function get_by_id_toko($id = '') {
        $this->db->where('id', $id);
        $sql = $this->db->get($this->table_toko);
        return $sql->result();
    }

    public function insert_penjual($value = '') {
        $this->db->trans_begin();

        $data = array(
            'nama_lengkap' => $value['nama_pemilik'],
            'email' => $value['email'],
            'no_ktp' => $value['nomor_ktp'],
            'alamat' => $value['alamat'],
            'foto_pemilik' => $value['pic'],
            'foto_pemilik_thumb' => $value['pic_thumb'],
            'scan_ktp' => $value['pic_ktp'],
            'scan_ktp_thumb' => $value['pic_ktp_thumb'],
        );
        $this->db->insert($this->table_pemilik, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_penjual($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'nama_lengkap' => $value['nama_pemilik'],
            'email' => $value['email'],
            'no_ktp' => $value['nomor_ktp'],
            'alamat' => $value['alamat'],
            'foto_pemilik' => $value['pic'],
            'foto_pemilik_thumb' => $value['pic_thumb'],
            'scan_ktp' => $value['pic_ktp'],
            'scan_ktp_thumb' => $value['pic_ktp_thumb']
        );

        $this->db->where('id', $id);
        $this->db->update($this->table_pemilik, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function insert_toko($value = '') {
        $this->db->trans_begin();

        $data = array(
            'nama_toko' => $value['nama_toko'],
            'nomor_telepon' => $value['no_telp'],
            'nomor_toko' => $value['nomor_toko'],
            'kat_toko' => $value['kat_usaha'],
            'id_pemilik_toko' => $value['pemilik2'],
            'nama_merek' => $value['label'],
            'alamat_toko' => $value['alamat'],
            'desc_toko' => $value['desc_toko'],
            'gambar_merek' => $value['pic2'],
            'gambar_merek_thumb' => $value['pic_thumb2'],
            'foto_toko' => $value['pic'],
            'foto_toko_thumb' => $value['pic_thumb']
        );
        $this->db->insert($this->table_toko, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_toko($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'nama_toko' => $value['nama_toko'],
            'nomor_telepon' => $value['no_telp'],
            'nomor_toko' => $value['nomor_toko'],
            'kat_toko' => $value['kat_usaha'],
            'id_pemilik_toko' => $value['pemilik2'],
            'nama_merek' => $value['label'],
            'alamat_toko' => $value['alamat'],
            'desc_toko' => $value['desc_toko'],
            'gambar_merek' => $value['pic2'],
            'gambar_merek_thumb' => $value['pic_thumb2'],
            'foto_toko' => $value['pic'],
            'foto_toko_thumb' => $value['pic_thumb']
        );

        $this->db->where('id', $id);
        $this->db->update($this->table_toko, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function get_img_by_id_pemilik($id = '') {
        $this->db->select('foto_pemilik, scan_ktp');
        $this->db->where('id', $id);
        $sql = $this->db->get($this->table_pemilik);
        return $sql->result();
    }

    public function delete_pemilik($value) {
        $this->db->trans_begin();

        $this->db->where('id', $value);
        $this->db->delete($this->table_pemilik);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function get_img_by_id_toko($id = '') {
        $this->db->select('gambar_merek, foto_toko');
        $this->db->where('id', $id);
        $sql = $this->db->get($this->table_toko);
        return $sql->result();
    }

    public function delete_toko($value) {
        $this->db->trans_begin();

        $this->db->where('id', $value);
        $this->db->delete($this->table_toko);

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