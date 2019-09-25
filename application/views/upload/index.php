<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/') . 'bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dropify/css/') . 'dropify.css'; ?>">
    <title>Upload dengan Dropify</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <h4>Upload Image dengan Dropify</h4>
                <?= $this->session->flashdata('message'); ?>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="judul" class="form-control" placeholder="Judul">
                    <small class="text-danger"><?= form_error('judul'); ?></small>
                </div>
                <div class="form-group">
                    <input type="file" name="image" class="dropify">
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/bootstrap/jquery/') . 'jquery3.js'; ?>"></script>
    <script src="<?= base_url('assets/bootstrap/popper/') . 'popper.js'; ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/') . 'bootstrap.js'; ?>"></script>
    <script src="<?= base_url('assets/dropify/js/') . 'dropify.js'; ?>"></script>
    <script>
    $(document).ready(function(){
        $('.dropify').dropify({
            messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
        });
    });
    </script>
</body>
</html>