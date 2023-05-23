<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <table border="1">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
// nama : Muhamad Ardalepa
// nim : 3202016004 foreach ($data['data'] as $mhs){ ;?>
      <tr>
        <td><?= $mhs['nim'];?></td>
        <td><?= $mhs['nama_mahasiswa'];?></td>
        <td><?= $mhs['jenis_kelamin'];?></td>
        <td><?= $mhs['tanggal_lahir'];?></td>
        <td><?= $mhs['alamat'];?></td>
        <td><a href="<?= BASE_URL ."mahasiswa/delete/". $mhs['id'];?>">delete</a>|<a href="<?= BASE_URL ."mahasiswa/index/". $mhs['id'];?>">edit</a></td>
      </tr>
      <?php
// nama : Muhamad Ardalepa
// nim : 3202016004 };?>
    </tbody>
  </table>
  <h1><?= !isset($data['mhs'])?"Tambah Data":"Edit ".$data['mhs']['nama_mahasiswa'];?></h1>
  <form action="<?= !isset($data['mhs'])?BASE_URL . "mahasiswa/proses":BASE_URL . "mahasiswa/proses/".$data['mhs']['id'];?>" . method="POST">
    <?php
// nama : Muhamad Ardalepa
// nim : 3202016004 if (isset($data['mhs'])) {;?>
      <input type="hidden" name="id" id="id" value="<?= isset($data['mhs'])? $data['mhs']['id']:null;?>">
    <?php
// nama : Muhamad Ardalepa
// nim : 3202016004 };?>
    <input type="text" name="nim" id="nim" value="<?= isset($data['mhs'])? $data['mhs']['nim']:null;?>" placeholder="nim">
    <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" value="<?= isset($data['mhs'])? $data['mhs']['nama_mahasiswa']:null;?>" placeholder="nama_mahasiswa">
    <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?= isset($data['mhs'])? $data['mhs']['jenis_kelamin']:null;?>" placeholder="jenis_kelamin">
    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= isset($data['mhs'])? $data['mhs']['tanggal_lahir']:null;?>" placeholder="tanggal_lahir">
    <input type="text" name="alamat" id="alamat" value="<?= isset($data['mhs'])? $data['mhs']['alamat']:null;?>" placeholder="alamat">
    <input type="submit" name="<?= isset($data['mhs'])? "put":"post";?>" value="Simpan">
  </form>
</body>
</html>