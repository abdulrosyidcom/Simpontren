const dataUserUpdate = $('.flash-datauserupdate').data('datauserupdate');

if (dataUserUpdate) {
    Swal({
        title: 'Data User',
        text: 'Berhasil ' + dataUserUpdate,
        type: 'success'
    });
}