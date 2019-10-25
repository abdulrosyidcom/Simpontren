
// Menu managemen

$(function () {
    
    $('.buttonCreateMenu').on('click', function() {
        $('#modalLabel').html('Form Tambah Data Menu');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.showModalMenu').on('click', function() {
        $('#modalLabel').html('Form Ubah Data Menu');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-content form').attr('action', 'http://localhost/simpontren/dashboard/updatemenu');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/simpontren/dashboard/editmenu',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#menu').val(data.menu);
                $('#id').val(data.id);
            }
        });
    });


    // SUBMENU MANAGEMENT

    $('.buttonInsertSubenu').on('click', function () {
        $('#subMenuModalLabel').html('Form Tambah Data Submenu');
        $('.btnSubmenu').html('Simpan Data');
    });

    $('.showModalSubmenu').on('click', function () {
        $('#subMenuModalLabel').html('Form Ubah Data Submenu');
        $('.btnSubmenu').html('Ubah Data');
        $('.modal-content form').attr('action', 'http://localhost/simpontren/dashboard/updatesubmenu');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/simpontren/dashboard/editsubmenu',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#menu_id').val(data.menu_id);
                $('#title').val(data.title);
                $('#url').val(data.url);
                $('#icon').val(data.icon);
                $('#id').val(data.id);
            }
        });
    });




    // ARTICLE CATEGORY

    $('.buttonInsertCategoryArticle').on('click', function() {
        $('.labelModalCategoryArticle').html('Form Tambah Data Kategori');
        $('.modal-footer button[type=submit]').html('Simpan');
    });

    $('.buttonUpdateCategoryArticle').on('click', function() {
        $('.labelModalCategoryArticle').html('Form Ubah Data Kategori');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-content form').attr('action', 'http://localhost/simpontren/dashboard/updatearticlecategory');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/simpontren/dashboard/editcategoryarticle',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#name').val(data.name);
                $('#is_active').val(data.is_active);
                $('#id').val(data.id);
            }
        });
    });

});

