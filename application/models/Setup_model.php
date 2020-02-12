<?php
class setup_model extends CI_Model{
     public function edit_profil($data){
       $this->db->where('id',1);
       $this->db->update('profil',$data);
     }

     public function get_one($table,$field,$id){
       $data=array($field => $id);
       return $this->db->get_where($table,$data);
     }

     public function skill_new($data){
       $this->db->insert('skill',$data);
     }

     public function skill_edit($data,$id){
       $this->db->where('id_skill',$id);
       $this->db->update('skill',$data);
     }

     public function skill_delete($id){
       $this->db->where('id_skill',$id);
       $this->db->delete('skill');
     }

     public function edu_new($data){
       $this->db->insert('riwayat_sekolah',$data);
     }

     public function edu_edit($data,$id){
       $this->db->where('id_sekolah', $id);
       $this->db->update('riwayat_sekolah', $data);
     }

     public function edu_delete($id){
       $this->db->where('id_sekolah',$id);
       $this->db->delete('riwayat_sekolah');
     }

     public function work_new($data){
       $this->db->insert('riwayat_kerja',$data);
     }

     public function work_edit($data,$id){
       $this->db->where('id_kerjaan', $id);
       $this->db->update('riwayat_kerja', $data);
     }

     public function work_delete($id){
       $this->db->where('id_kerjaan',$id);
       $this->db->delete('riwayat_kerja');
     }

     public function org_new($data){
       $this->db->insert('organisasi',$data);
     }

     public function org_edit($data,$id){
       $this->db->where('id_organisasi', $id);
       $this->db->update('organisasi', $data);
     }

     public function org_delete($id){
       $this->db->where('id_organisasi',$id);
       $this->db->delete('organisasi');
     }

     public function hobby_new($data){
       $this->db->insert('hobi',$data);
     }

     public function hobby_edit($data,$id){
       $this->db->where('id_hobi', $id);
       $this->db->update('hobi', $data);
     }

     public function hobby_delete($id){
        $this->db->where('id_hobi',$id);
        $this->db->delete('hobi');
     }

     public function cert_new($data){
         $this->db->insert('sertifikat',$data);
     }

     public function cert_edit($data,$id){
         $this->db->where('id_sertifikat', $id);
         $this->db->update('sertifikat', $data);
     }

     public function cert_delete($id){
         $this->db->where('id_sertifikat',$id);
         $this->db->delete('sertifikat');
     }

     public function get_pwd($pwd){
         return $this->db->get_where('profil', ['password' => $pwd]);
     }

     public function change_pwd($pwd,$data){
         $this->db->where('password',$pwd);
         $this->db->update('profil',$data);
     }

}
