<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Tugas Kuliah</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3275/3275540.png" type="image/png">
</head>
<body>
    <div class="container">
        <h1>📚 Manajemen Tugas Kuliah</h1>
        <a href="tambah.php" class="btn">Tambah Tugas</a>
        <table id="tugasTable" class="display">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tugas</th>
                    <th>Mata Kuliah</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM crud_031 ORDER BY deadline ASC");
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td data-label='No'>{$no}</td>
                        <td data-label='Nama Tugas'>{$row['nama_tugas']}</td>
                        <td data-label='Mata Kuliah'>{$row['mata_kuliah']}</td>
                        <td data-label='Deadline'>{$row['deadline']}</td>
                        <td data-label='Status'>{$row['status']}</td>
                        <td data-label='Deskripsi'>{$row['deskripsi']}</td>
                        <td data-label='Aksi'>
                            <a href='edit.php?id={$row['id']}'><i class='fas fa-edit'></i></a>
                            <a href='#' onclick='confirmDelete({$row['id']})'><i class='fas fa-trash'></i></a>
                        </td>
                    </tr>";
                    $no++;
                }                
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/script.js"></script>
</body>
</html>
