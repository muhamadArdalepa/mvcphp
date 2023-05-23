<?php
// nama : Muhamad Ardalepa
// nim : 3202016004 
class Mahasiswa extends Controller{
    public function index($id = null){
        $data['data'] = $this->model('Mahasiswa_model')->getAll();
        
        $data['mhs'] = $id==null?null: $this->model('Mahasiswa_model')->get($id);
        $this->view('mahasiswa/index',$data);
    }
    public function proses($id = null){
       $data['nim'] = $_POST['nim'];
       $data['nama_mahasiswa'] = $_POST['nama_mahasiswa'];
       $data['jenis_kelamin'] = $_POST['jenis_kelamin'];
       $data['tanggal_lahir'] = $_POST['tanggal_lahir'];
       $data['alamat'] = $_POST['alamat'];
       if (isset($id)) {
           $data['id'] = $_POST['id'];
            $this->model('Mahasiswa_model')->put($data);
            header('Location: '.BASE_URL.'mahasiswa');
        }else{
            $this->model('Mahasiswa_model')->post($data);
            header('Location: '.BASE_URL.'mahasiswa');
        }
    }
    public function delete($id){
        $this->model('Mahasiswa_model')->delete($id);
        header('Location: '.BASE_URL.'mahasiswa');
    }
}