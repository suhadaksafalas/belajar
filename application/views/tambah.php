<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>CRUD CI3 - SISWA</title>
  </head>
  <body>
    
   <header class="bg-primary p-4">

   </header> 
   <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="card mt-3">
        <div class="card-header">
          Tambah Data
        </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama">
                <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label>NISN</label>
                <input type="text" class="form-control" name="nisn" id="nisn">
                <?= form_error('nisn', '<small class="pl-3 text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label>Kelas</label>
                <input type="text" class="form-control" name="kelas" id="kelas">
                <?= form_error('kelas', '<small class="pl-3 text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat">
                <?= form_error('alamat', '<small class="pl-3 text-danger">', '</small>'); ?>
              </div>
              <button trye="submit" class="btn btn-primary float-right">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>

        
   </div>  





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>