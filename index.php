<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.css">
    </head>
    <body>
        <?php
        include 'koneksi.php';
        $sql = "SELECT * FROM mahasiswa";
        $result = mysqli_query($conn, $sql);
        ?>
        <div class="container">
            <div class="card">
                <div class="card-header"> Data Mahasiswa 
                    <a class="btn btn-primary float-right" href="input.php" role="button">Tambah</a>
                </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered ">
                    <tr class="text-center">
                        <th>NRP</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Tindakan</th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($result) > 0) :
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?=$row['NRP']?></td>
                        <td><?= $row['Nama']?></td>
                        <td><?=$row['Jurusan']?></td>
                        <td><?=$row['Jenis_kelamin']?></td>
                        <td><?=$row['Agama']?></td>
                        <td><?=$row['Umur']?></td>
                        <td><?=$row['Alamat']?></td>
                        <td class="text-center"><a href="input.php?nrp=<?=$row['NRP']?>" class="btn btn-success btn-sm" >Ubah</a> <a href="deleting.php?nrp=<?=$row['NRP']?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</a></td>
                    </tr>
                    <?php
                    };
                    else : ?>
                    <tr>
                        <td colspan="7">Data Kosong</td>
                    </tr>
                    <?php
                    endif;
                    ?>
                    </table>
                </div>
      <div class="card-footer">
        <a href="logout.php"  class="btn btn-primary" >Log Out</a>
    </div>
  </div>
</div>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>