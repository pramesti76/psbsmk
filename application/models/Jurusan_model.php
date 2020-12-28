<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model {
    public function select()
    {
        $result = $this->db->get('jurusan')->result_array();
        return $result;
    }

    public function insert($data)
    {
        $result = $this->db->insert('jurusan',$data);
        return $result;
    }
    public function selectById($id)
    {
        $result = $this->db->get_where('jurusan',['id'=>$id])->row_array();
        return $result;
    }
    public function delete($id)
    {
        $result = $this->db->delete('jurusan',['id'=>$id]);
        return $result;
    }
    public function update($data)
    {
        $item = [
            'jurusan'=>$data['jurusan'],
            'kajur'=>$data['kajur'],
            'keterangan'=>$data['keterangan'],
        ];
        $result = $this->db->update('jurusan', $item, ['id'=>$id]);
        return $result;
    }
}

/* End of file Jurusan_model.php */
