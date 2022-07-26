<?php

class Homemodel extends CI_Model {

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

    public function get_produk_umum() {
        $sql = $this->db->query('SELECT p.id, p.id_toko, p.rekomendasi, k.nama_kat,t.gambar_merek, t.nama_toko, t.nama_merek, p.kondisi_barang, p.nama_produk, p.minimal_pembelian, p.harga_barang, p.stok, p.berat, p.desc_barang, p.gambar, p.gambar_thumb, p.gambar_2, p.gambar_2_thumb, p.gambar_3, p.gambar_3_thumb, p.date FROM produk p JOIN kategori k, toko t WHERE p.kat_barang = k.id AND p.id_toko = t.id ORDER BY p.date DESC');
        return $sql->result();
    }

    public function get_produk_rekom() {
        $sql = $this->db->query('SELECT p.id, p.id_toko, p.rekomendasi, k.nama_kat,t.gambar_merek, t.nama_toko, t.nama_merek, p.kondisi_barang, p.nama_produk, p.minimal_pembelian, p.harga_barang, p.stok, p.berat, p.desc_barang, p.gambar, p.gambar_thumb, p.gambar_2, p.gambar_2_thumb, p.gambar_3, p.gambar_3_thumb, p.date FROM produk p JOIN kategori k, toko t WHERE p.kat_barang = k.id AND p.id_toko = t.id AND p.rekomendasi=1 ORDER BY p.date DESC');
        return $sql->result();
    }
    
    public function cari_data($nama,$kat) {
        $sql = $this->db->query('SELECT p.id, p.id_toko, p.rekomendasi, k.nama_kat,t.gambar_merek, t.nama_toko, t.nama_merek, p.kondisi_barang, p.nama_produk, p.minimal_pembelian, p.harga_barang, p.stok, p.berat, p.desc_barang, p.gambar, p.gambar_thumb, p.gambar_2, p.gambar_2_thumb, p.gambar_3, p.gambar_3_thumb, p.date FROM produk p JOIN kategori k, toko t WHERE p.kat_barang = k.id AND p.id_toko = t.id AND (k.id='.$kat.' OR p.nama_produk LIKE "%$nama%") ORDER BY p.date DESC');
        return $sql->result();
    }
}
?>