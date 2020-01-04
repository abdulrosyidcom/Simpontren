$(function () {
    $('.modalInsertNotes').on('click', function () {
        $('#rating_modal').html('Form Tambah Catatan');
        $('.modal-body button[type=submit]').html('Simpan Data');
    });

    $('.modalUpdateNotes').on('click', function () {
        $('#rating_modal').html('Form Ubah Catatan');
        $('.modal-body button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/simpontren/user/updatenotes');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/simpontren/user/editnotes',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('textarea#note').val(data.note);
                $('#id').val(data.id);
            }
        });
    });
});