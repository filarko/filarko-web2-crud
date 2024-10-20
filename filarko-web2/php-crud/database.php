<?php
class Database {
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "db_php";
    public $connect;

    function __construct() {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password);
        if (mysqli_connect_errno()) {
            echo "Koneksi Gagal: " . mysqli_connect_error();
            exit();
        }
        
        mysqli_select_db($this->connect, $this->database);
        echo " ";
    }

    public function tampilData() {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_users");
        if (!$data) {
            echo "Error: " . mysqli_error($this->connect);
            return [];
        }
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }

    function tambahData($nama,$alamat,$nohp) {
        mysqli_query($this->connect,"INSERT INTO tb_users VALUES (NULL, '$nama', '$alamat', '$nohp')");
    }

    function editData($id) {
        $data = mysqli_query($this->connect,"SELECT * FROM tb_users WHERE id = '$id'");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }

    function updateData($id, $nama, $alamat, $nohp) {
        $query = "UPDATE tb_users SET nama = '$nama', alamat = '$alamat', nohp = '$nohp' WHERE id = '$id'";
        if (!mysqli_query($this->connect, $query)) {
            echo "Error: " . mysqli_error($this->connect);
        } else {
            echo "Data berhasil diupdate";
        }
    }

    function hapusData($id) {
        mysqli_query($this->connect,"DELETE FROM tb_users WHERE id = '$id'");
    }
}
?>
