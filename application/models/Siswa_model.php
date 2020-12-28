<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {
    public function select()
    {
        $result = $this->db->get('siswa')->result_array();
        return $result;
    }

    public function insert($data)
    {
        $result = $this->db->insert('siswa',$data);
        return $result;
    }
    public function selectById($id)
    {
        $result = $this->db->get_where('siswa',['id'=>$id])->row_array();
        return $result;
    }
    public function delete($id)
    {
        $result = $this->db->delete('siswa',['id'=>$id]);
        return $result;
    }
    public function update($data)
    {
        $item = [
            'siswa'=>$data['siswa'],
            'kajur'=>$data['kajur'],
            'keterangan'=>$data['keterangan'],
        ];
        $result = $this->db->update('siswa', $item, ['id'=>$id]);
        return $result;
    }
}

/* End of file siswa_model.php */
