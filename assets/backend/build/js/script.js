
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


    // DISCUSSION

    // $('.updateDataNote').on('click', function() {
    //     $.ajax({
    //         url: 'http://localhost/simpontren/dashboard/editnote',
    //         data: {id : id},
    //         method: 'post',
    //         dataType: 'json',
    //         success: function (data) {
    //             console.log(data);
    //         }
    //     });
    // });

    $('.updateDataDiscussion').on('click', function () {

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/simpontren/dashboard/editdiscussion',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#question').val(data.quession);
                $('#is_active').val(data.is_active);
                $('textarea').val(data.description);
                $('#id').val(data.id);
            }
        });
    });


    $('.buttonCreateCategorieDiscussion').on('click', function () {
        $('.modal-title').html('Tambah Categorie');
        $('.modal-footer button[type=submit]').html('Simpan');
    });

    $('.buttonUpdateCategorieDiscussion').on('click', function() {
        $('.modal-title').html('Update Categorie');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-content form').attr('action', 'http://localhost/simpontren/dashboard/updateDiscussionCategorie');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/simpontren/dashboard/editdiscussioncategory',
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


    // feedback
    $('.buttonUpdateFeedback').on('click', function () {

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/simpontren/dashboard/editfeedback',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#is_active').val(data.is_active);
                $('textarea').val(data.note);
                $('#id').val(data.id);
            }
        });
    });

});

