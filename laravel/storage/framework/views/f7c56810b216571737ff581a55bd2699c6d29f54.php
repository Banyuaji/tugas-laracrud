<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <title>Create</title>
</head>
<body>
    <div class="container">
        <a href="<?php echo e(route('siswa')); ?>" class="btn btn-primary my-3">&larr; Kembali</a>
        <div class="card">
            <h3 class="card-header">Add data</h3>
            <div class="card-body">
                <form action="<?php echo e(route('create')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="title">Nipd</label>
                        <input type="text" name="nipd" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Nama</label>
                        <input type="text" name="nama_siswa" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="content">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="content">Kelas</label>
                        <input type="text" name="kelas" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Jurusan</label>
                        <input type="text" name="jurusan" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel-pertama\resources\views/create.blade.php ENDPATH**/ ?>