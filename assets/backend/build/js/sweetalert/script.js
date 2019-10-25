const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal({
        title: 'Data Menu',
        text: 'Berhasil ' + flashData,
        type: 'success'
    });
}

$('.btn-delete').on('click', function (event) {
    event.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Serius nih ?',
        text: "Data menu ingin dihapus ?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
      }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
      })
});

