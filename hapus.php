<?php
include 'db.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM crud_031 WHERE id = $id");

if ($query) {
    echo "<script>
        window.location.href = 'index.php';
    </script>";
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>
