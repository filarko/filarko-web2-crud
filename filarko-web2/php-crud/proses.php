<?php
include 'database.php';
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == 'tambah') {
    $db->tambahData($_POST['nama'], $_POST['alamat'], $_POST['nohp']);
    header("location:index.php");
}else if ($aksi == "update") {
    $db->updateData($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['nohp']);
    header("location:index.php");
}else if ($aksi == "hapus") {
    $db->hapusData($_GET['id']);
    header('location:index.php');
}
?>