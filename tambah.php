<?php
include 'db.php';

$berhasil = false;

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_tugas'];
    $matkul = $_POST['mata_kuliah'];
    $deadline = $_POST['deadline'];
    $status = $_POST['status'];
    $deskripsi = $_POST['deskripsi'];

    $query = "INSERT INTO crud_031 (nama_tugas, mata_kuliah, deadline, status, deskripsi)
              VALUES ('$nama', '$matkul', '$deadline', '$status', '$deskripsi')";

    if (mysqli_query($conn, $query)) {
        $berhasil = true;
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Tugas</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3275/3275540.png" type="image/png">
</head>
<body>
<div class="container">
    <h2>Tambah Tugas Kuliah</h2>
    <form action="" method="POST">
        <label>Nama Tugas</label>
        <input type="text" name="nama_tugas" required>

        <label>Mata Kuliah</label>
        <input type="text" name="mata_kuliah" required>

        <label>Deadline</label>
        <input type="date" name="deadline" required>

        <label>Status</label>
        <select name="status" required>
            <option value="Belum Dikerjakan">Belum Dikerjakan</option>
            <option value="Sedang Dikerjakan">Sedang Dikerjakan</option>
            <option value="Selesai">Selesai</option>
        </select>

        <label>Deskripsi</label>
        <textarea name="deskripsi" rows="4"></textarea>

        <button type="submit" name="submit" class="btn">Simpan</button>
        <a href="index.php" class="btn" style="background:#6c757d;">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if ($berhasil): ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Tugas berhasil ditambahkan!',
        confirmButtonColor: '#6a5acd'
    }).then(() => {
        window.location.href = 'index.php';
    });
</script>
<?php endif; ?>

</body>
</html>
