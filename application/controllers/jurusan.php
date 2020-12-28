<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jurusan_model');
    }
    
    public function index()
    {
        $data['data'] = $this->Jurusan_model->select();
        // $data = $this->input->post();
        $data['content'] = $this->load->view('jurusan/index', $data, TRUE);
        $this->load->view('layout/index', $data);
    }

    public function addindex()
    {
        $data['content'] = $this->load->view('jurusan/add', '', TRUE);
        $this->load->view('layout/index', $data);
    }

    public function add()
    {
        $data = $this->input->post();
        $this->Jurusan_model->insert($data);
        redirect('jurusan');
        
    }

    public function editindex($id = null)
    {
        $itemdata= $this->Jurusan_model->selectById($id);
        $data['content'] = $this->load->view('jurusan/edit', $itemdata, TRUE);
        $this->load->view('layout/index', $data);
    }
    public function delete($id = null)
    {
        $itemdata= $this->Jurusan_model->delete($id);
        redirect('jurusan');
        
    }
    public function update()
    {
        $data = $this->input->post();
        $itemdata= $this->Jurusan_model->update($id);
        redirect('jurusan');
    }


}

/* End of file Jurusan.php */
