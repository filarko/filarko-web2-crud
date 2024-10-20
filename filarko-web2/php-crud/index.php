<?php
include "database.php";
$db = new Database();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
        <h1>OOP PHP CRUD</h1>
        <hr>
        <a href="input.php" class="btn btn-success">Tambah Data</a>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">NO HP</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $nomor = 1;
            foreach ($db->tampilData() as $dataUser) {
            ?>
                <tr>
                    <th><?php echo $dataUser['id']; ?></th>
                    <td><?php echo $dataUser['nama'];?></td>
                    <td><?php echo $dataUser['alamat'];?></td>
                    <td><?php echo $dataUser['nohp'];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $dataUser['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="proses.php?id=<?php echo $dataUser['id']?>&aksi=hapus" class="btn btn-warning btn-sm">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">Tentang Kami</h5>
                    <p>Kami adalah tim yang berdedikasi untuk mengembangkan aplikasi CRUD berbasis OOP dengan PHP. Kami selalu berusaha memberikan layanan terbaik kepada para pengunjung.</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Home</a></li>
                        <li><a href="#" class="text-light">Layanan</a></li>
                        <li><a href="#" class="text-light">Kontak</a></li>
                        <li><a href="#" class="text-light">Tentang Kami</a></li>
                    </ul>
                </div>

                <!-- Social Media Section -->
                <div class="col-md-4 mb-4 text-md-end">
                    <h5 class="text-uppercase">Ikuti Kami</h5>
                    <a href="#" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
                    <a target="blank" href="www.instagram.com/faahmiyusuff" class="text-light me-2">instagram<i class="fab fa-instagram"></i></a>
                    
                </div>
            </div>
            <hr class="border-secondary">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 OOP PHP CRUD. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-light me-3">Privacy Policy</a>
                    <a href="#" class="text-light me-3">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>