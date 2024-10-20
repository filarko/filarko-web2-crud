<?php
include 'database.php';
$db = new Database();
$detail = $db->editData($_GET['id']); // Correctly accessing the 'id' from GET
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <h1>OOP PHP CRUD</h1>
        <h4>Edit Data</h4>
        <hr class="mt-0">
        <form action="proses.php?aksi=update" method="POST">
            <?php foreach ($detail as $dataUser) { ?>
                <input type="hidden" name="id" value="<?php echo $dataUser['id']; ?>">
                
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $dataUser['nama']; ?>">
                </div>
                
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control"><?php echo $dataUser['alamat']; ?></textarea> <!-- Corrected textarea value placement -->
                </div>
                
                <div class="mb-3">
                    <label for="nohp" class="form-label">No HP</label>
                    <input type="text" name="nohp" class="form-control" id="nohp" value="<?php echo $dataUser['nohp']; ?>"> <!-- Added 'name' attribute -->
                </div>
                
            <?php } ?>
            
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="index.php" class="btn btn-success">Kembali ke Halaman</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
