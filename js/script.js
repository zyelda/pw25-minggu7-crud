$(document).ready(function () {
    $('#tugasTable').DataTable();
});

function confirmDelete(id) {
    Swal.fire({
        title: 'Hapus Data?',
        text: "Data akan dihapus permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = 'hapus.php?id=' + id;
        }
    });
}
