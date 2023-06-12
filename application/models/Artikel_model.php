<?php
class Artikel_model extends Ci_Model{

    public function getArtikel($limit,$offset){
        $this->db->limit($limit,$offset);
        return $this->db->get("blog");
    }
    public function getTotal(){
        $filter = $this->input->get('find');
        // $this->db->like('like', $filter);
        return $this->db->count_all_results("blog");
    }
    public function hapusData($id){
        $this->db->where('id', $id);
        $this->db->hapus('blog');
        return $this->db->affected_rows();

    }
}