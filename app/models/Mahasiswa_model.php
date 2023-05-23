<?php
// nama : Muhamad Ardalepa
// nim : 3202016004
class Mahasiswa_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getAll(){
        $this->db->query("SELECT * FROM mahasiswa");
        return $this->db->resultSet();
    }
    public function get($id){
        $this->db->query("SELECT * FROM mahasiswa WHERE id=:id");
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    public function post($data){
        $query = "INSERT INTO mahasiswa VALUES
                (null,:nim,:nama_mahasiswa,:jenis_kelamin,:tanggal_lahir,:alamat)";
        $this->db->query($query);
        $this->db->bind('nim',$data['nim']);
        $this->db->bind('nama_mahasiswa',$data['nama_mahasiswa']);
        $this->db->bind('jenis_kelamin',$data['jenis_kelamin']);
        $this->db->bind('tanggal_lahir',$data['tanggal_lahir']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function put($data){
        $query = "UPDATE mahasiswa SET
                    nim=:nim,
                    nama_mahasiswa=:nama_mahasiswa,
                    jenis_kelamin=:jenis_kelamin,
                    tanggal_lahir=:tanggal_lahir,
                    alamat=:alamat
                    WHERE id=:id
        ";
        $this->db->query($query);
        $this->db->bind('id',$data['id']);
        $this->db->bind('nim',$data['nim']);
        $this->db->bind('nama_mahasiswa',$data['nama_mahasiswa']);
        $this->db->bind('jenis_kelamin',$data['jenis_kelamin']);
        $this->db->bind('tanggal_lahir',$data['tanggal_lahir']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function delete($id){
        $query = "DELETE FROM mahasiswa WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}