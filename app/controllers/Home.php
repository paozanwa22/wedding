<?php 

class Home extends Controller{
    public function index(){
        // $data['judul'] = 'home';
        // $data['nama'] = $this->model('User_model')->getUser();


        // $this->view('templates/header', $data);     
        $this->view('home/index');
        // $this->view('templates/footer');
    }

    public function detail(){
        // $data['judul'] = 'Detail Mahasiswa';
        // $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);

        // $this->view('templates/header');
        $this->view('home/detail');
        // $this->view('templates/footer');
    }
}