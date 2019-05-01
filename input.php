<?php
include 'koneksi.php';
 
$data = [
                    'NRP' => '',
                    'Nama' => '',
                    'Jurusan' => '',
                    'Jenis_kelamin' => '',
                    'Agama' => '',
                    'Umur' => '',
                    'Alamat' => ''
];
$attrNrp = '';

//Cek apakah nrp di get
if (isset($_GET['nrp'])) {
    $nrp = $_GET['nrp'];

    //Cek apakah nrp yang diinputkan ada
    $sql = "SELECT * FROM mahasiswa WHERE nrp=$nrp";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $action = "updating.php";
        $title = "Update $nrp";
        $attrNrp = 'readonly';
    $data = mysqli_fetch_assoc($result);
  } else {
    die("NRP tidak ditemukan");
  }
} else {
    $action = "inserting.php";
    $title = "Insert";
}
 
 
?>
 
<!DOCTYPE html>
<html>    
    <head>        
        <title>Form</title>        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="./bootstrap-4.3.1-dist/css/bootstrap.min.css">    
    </head>    
    <body>
        <div class="container">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?=$title?></li>
              </ol>
            </nav>
            <form action="<?=$action?>" method="post">
            <div class="card">
                <div class="card-header">
                    Form Input Data Mahasiswa
                </div>
                <div class="card-body">
                    <div class="row" >
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="nrp">NRP</label>
                                <input type="number" name="nrp" class="form-control" id="nrp" placeholder="Masukkan NRP" value="<?=$data['NRP']?>" <?=$attrNrp?>>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" value="<?=$data['Nama']?>">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" id="nrp" placeholder="Masukkan Jurusan" value="<?=$data['Jurusan']?>">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin" value="<?=$data['Jenis_kelamin']?>">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <input type="text" name="agama" class="form-control" id="agama" placeholder="Masukkan Agama" value="<?=$data['Agama']?>">
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="text" name="umur" class="form-control" id="umur" placeholder="Masukkan Umur" value="<?=$data['Umur']?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" value="<?=$data['Alamat']?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            </form>  
        </div>
    </body>
</html>