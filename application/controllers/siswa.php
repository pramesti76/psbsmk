<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
    }
    
    public function index()
    {
        $data['data'] = $this->Siswa_model->select();
        // $data = $this->input->post();
        $data['content'] = $this->load->view('siswa/index', $data, TRUE);
        $this->load->view('layout/index', $data);
    }

    public function addindex()
    {
        $data['content'] = $this->load->view('siswa/add', '', TRUE);
        $this->load->view('layout/index', $data);
    }

    public function add()
    {
        $data = $this->input->post();
        $this->Siswa_model->insert($data);
        redirect('jurusan');
        
    }

    public function editindex($id = null)
    {
        $itemdata= $this->Siswa_model->selectById($id);
        $data['content'] = $this->load->view('siswa/edit', $itemdata, TRUE);
        $this->load->view('layout/index', $data);
    }
    public function delete($id = null)
    {
        $itemdata= $this->Siswa_model->delete($id);
        redirect('jurusan');
        
    }
    public function update()
    {
        $data = $this->input->post();
        $itemdata= $this->Siswa_model->update($id);
        redirect('jurusan');
    }


}

/* End of file Jurusan.php */
