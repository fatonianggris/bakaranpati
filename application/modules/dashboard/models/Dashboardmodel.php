<?php

class Dashboardmodel extends CI_Model {

    private $table_home = 'home';

    public function get_count() {
        $sql = $this->db->query('select (select count(id) from toko) as toko, (select count(id) from user) as user, (select count(id) from produk) as produk, (select count(id) from pemilik) as pemilik');
        return $sql->result();
    }

    public function get_by_id_home($id = '') {
        $this->db->where('id', $id);
        $sql = $this->db->get($this->table_home);
        return $sql->result();
    }

    public function update_home($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'ucapan' => $value['ucapan'],
            'no_cs' => $value['no_cs'],
            'email' => $value['email'],
            'pusat_lokasi' => $value['pusat_lokasi'],
            'nama_promo' => $value['nama_promo'],
            'label_src' => $value['label_src'],
            'isi_label_promo' => $value['isi_label_promo'],
            'alamat_web' => $value['alamat_web'],
            'facebook' => $value['facebook'],
            'twitter' => $value['twitter'],
            'instagram' => $value['instagram'],
            'youtube' => $value['youtube'],
            'logo_web' => $value['pic'],
            'logo_web_thumb' => $value['pic_thumb']
        );

        $this->db->where('id', $id);
        $this->db->update($this->table_home, $data);

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