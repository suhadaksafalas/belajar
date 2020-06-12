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


        <div class="card mt-4 shadow">
      <div class="card-header">
        <h5 class="mb-0">DATA GURU</h5>
      </div>
        <div class="card-body">
        <a href="<? base_url('guru/tambah'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-bordered">
         <thead>
         <?php $no = 1; ?>
          <th scope="col">#</th>
          <th scope="col">Nama </th>
          <th scope="col">NIP</th>
          <th scope="col">Mapel</th>
          <th scope="col">Alamat</th>
          <th scope="col">Telepon</th>
         </thead>
         <tbody>
         <?php foreach ($guru as $g): ?>
          <tr>
           <td><?= $no++;?></td>
           <td><?= $g['nama']; ?></td>
           <td><?= $g['nip']; ?></td>
           <td><?= $g['mapel']; ?></td>
           <td><?= $g['alamat']; ?></td>
           <td><?= $g['telpon']; ?></td>
          </tr>
         <?php endforeach; ?>
         </tbody>
         </table>
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