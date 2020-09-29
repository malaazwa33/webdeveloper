<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
        <div class="container">
               
                <table class="table table-hover">
                <h2>Tabel Mahasiswa Teknik Informatika</h2>
                <a href="index.php" class="btn btn-info">Keluar</a>

                <tr>
                <th>No</th>    
                <th>Nama Lengkap</th>    
                <th>Jurusan</th>        
                <th><a href="tambah.php" class="btn btn-primary">Tambah Data</a></th>
                </tr>

                <tr>
                <td>1</td>
                <td>Satriawan</td>
                <td>Teknik Informatika</td>
                <td>
                <a href="edit.php"class="btn btn-warning">Edit</a>
                <a href="hapus.php" class="btn btn-danger">Hapus</a>
                </td>
                 </tr>
                </table>
        </div>

    
</body>
</html>