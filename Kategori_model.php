<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    protected $_table = 'kategori'; // Tabel yang digunakan
    protected $primary = 'id'; // Primary key dari tabel

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
public function save(){
    $data = array('name' => htmlspecialchars($this->post('name'), true));
    return $this->db->insert($this->_table,$data);
}
public function getById($id)
{
    return $this->db->get_where($this->_table, ["id" => $id])->row();
}
public function edit()
{
    $this->Kategori_model->editData();
    if($this->db->affected_rows()>0){
        $this->session->set_flashdata("succes","Data Kategori Berhasil Diupdate");
    }
    redirect('kategori');
}
public function editData()
{
    $id = $this->input->post('id')
    $data = array('name' => htmlspecialchars($this->post('name'), true));
    return $this->db->insert($this->primary,$id)->update($this->_table);
}
public function delete($id)
{
    $this->db->where('id,$id')->delete($this->_table);
    if($this->db->affected_rows()>0){
        $this->session->set_flashdata("succes","Data Kategori Berhasil Didelete");
    }
}