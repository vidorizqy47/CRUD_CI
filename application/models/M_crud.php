<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	
	public function input(){
    $data = array('nama' => $this->input->post('nama') , 'produsen'=> $this->input->post('produsen'), 'harga'=> $this->input->post('harga'));
    return $this->db->insert('produk',$data);
	}

	public function tampil(){
    $this->db->select('*');
	return $this->db->get('produk');
	}

	public function delete(){

        $this->db->where('id',$this->uri->segment(3));
        return $this->db->delete('produk');

	}

	public function m_edit(){

    $this->db->select('*');
    $this->db->where('id',$this->uri->segment(3));
	return $this->db->get('produk');
	
	}

	public function m_update(){

		$data = array('nama' => $this->input->post('nama') , 'produsen'=> $this->input->post('produsen'), 'harga'=> $this->input->post('harga'));

        $this->db->where('id',$this->uri->segment(3));
        return $this->db->update('produk',$data);

	}

}

/* End of file M_crud.php */
/* Location: ./application/models/M_crud.php */