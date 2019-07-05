<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>latihan</title>
  </head>
  <body>
    <div class="container">
      <form method="post" action="<?php echo site_url('crudController/update')?>/<?php echo $row->id; ?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Depan</label>
            <input type="text" class="form-control" name="nama_depan" value="<?php echo $row->nama_depan?>" aria-describedby="emailHelp" placeholder="Nama Depan">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Belakang</label>
            <input type="text" class="form-control" name="nama_belakang" value="<?php echo $row->nama_belakang?>" aria-describedby="emailHelp" placeholder="Nama Belakang">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input type="date" class="form-control" name="ultah" value="<?php echo $row->ultah?>" aria-describedby="emailHelp" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No. HP</label>
            <input type="text" class="form-control" name="nohp" value="<?php echo $row->nohp?>" aria-describedby="emailHelp" placeholder="No. HP">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Bio</label>
            <input type="text" class="form-control" name="bio" value="<?php echo $row->bio?>" aria-describedby="emailHelp" placeholder="Bio">
          </div>
          <button type="submit" class="btn btn-primary" value="save">Submit</button>
      </form>
    </div> 
  </body>
</html>