<?php
include 'db.php';

$berhasil = false;

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM crud_031 WHERE id = $id");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_tugas'];
    $matkul = $_POST['mata_kuliah'];
    $deadline = $_POST['deadline'];
    $status = $_POST['status'];
    $deskripsi = $_POST['deskripsi'];

    $update = mysqli_query($conn, "UPDATE crud_031 SET 
        nama_tugas = '$nama',
        mata_kuliah = '$matkul',
        deadline = '$deadline',
        status = '$status',
        deskripsi = '$deskripsi'
        WHERE id = $id");

    if ($update) {
        $berhasil = true;
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Tugas</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3275/3275540.png" type="image/png">
</head>
<body>
<div class="container">
    <h2>✏️ Edit Tugas Kuliah</h2>
    <form action="" method="POST">
        <label>Nama Tugas</label>
        <input type="text" name="nama_tugas" value="<?= $data['nama_tugas']; ?>" required>

        <label>Mata Kuliah</label>
        <input type="text" name="mata_kuliah" value="<?= $data['mata_kuliah']; ?>" required>

        <label>Deadline</label>
        <input type="date" name="deadline" value="<?= $data['deadline']; ?>" required>

        <label>Status</label>
        <select name="status" required>
            <option <?= $data['status'] == 'Belum Dikerjakan' ? 'selected' : '' ?>>Belum Dikerjakan</option>
            <option <?= $data['status'] == 'Sedang Dikerjakan' ? 'selected' : '' ?>>Sedang Dikerjakan</option>
            <option <?= $data['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
        </select>

        <label>Deskripsi</label>
        <textarea name="deskripsi" rows="4"><?= $data['deskripsi']; ?></textarea>

        <button type="submit" name="submit" class="btn">Simpan Perubahan</button>
        <a href="index.php" class="btn" style="background:#6c757d;">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if ($berhasil): ?>
<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Tugas berhasil diupdate!',
        confirmButtonColor: '#6a5acd'
    }).then(() => {
        window.location.href = 'index.php';
    });
</script>
<?php endif; ?>

</body>
</html>
