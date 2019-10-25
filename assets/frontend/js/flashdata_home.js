const flashDataLogout = $('.flash-flashdatalogout').data('flashdatalogout');

if (flashDataLogout) {
    Swal({
        title: 'Terimakasih',
        text: 'Anda telah ' + flashDataLogout,
        type: 'success'
    });
}

