<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verivication</title>
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/plugins.min.css'); ?>">
    <style>
        body {
            background-image: url(<?= base_url('assets/img/verify/banner.png'); ?>);
            background-size: cover;
        }

        .img-left {
            margin-top: 100px;
        }

        .content {
            margin-top: 200px;
        }

        .content h1, h3 {
            color: white;
        }

        .btn {
            background-color: lightblue;
            border-radius: 20px;
            width: 150px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-left" width="500" src="<?= base_url('assets/img/verify/edu_ilastration.png'); ?>" alt="">
            </div>
            <div class="col-sm-6 content">
                <h1>Tahun Depan Mau </h1>
                <h1>Wisuda ?</h1>
                <h3>Klik dulu tombol dibawah ini</h3>

                <a class="btn" href="' . base_url() . 'authentication/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>
            </div>
        </div>
    </div>
    
</body>
</html>