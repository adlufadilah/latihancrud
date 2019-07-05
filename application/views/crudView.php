<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>latihan</title>
  </head>
  <body>
  	<nav class="navbar navbar-dark bg-dark">
  	<a class="navbar-brand" href="#">latihan crud</a>
	</nav>
    
    <div class="container">
    	<br>
    	<br>

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Tambah Data
		</button>

		<br>
		<br>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form method="post" action="<?php echo site_url('crudController/create')?>">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama Depan</label>
				    <input type="text" class="form-control" name="nama_depan" aria-describedby="emailHelp" placeholder="Nama Depan">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama Belakang</label>
				    <input type="text" class="form-control" name="nama_belakang" aria-describedby="emailHelp" placeholder="Nama Belakang">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Tanggal Lahir</label>
				    <input type="date" class="form-control" name="ultah" aria-describedby="emailHelp" placeholder="">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">No. HP</label>
				    <input type="text" class="form-control" name="nohp" aria-describedby="emailHelp" placeholder="No. HP">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Bio</label>
				    <input type="text" class="form-control" name="bio" aria-describedby="emailHelp" placeholder="Bio">
				  </div>
				  <button type="submit" class="btn btn-primary" value="save">Submit</button>
			  	</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>


    	<table class="table">
  			<thead class="thead-dark">
    			<tr>
      			<th scope="col">#</th>
      			<th scope="col">Nama Depan</th>
     			<th scope="col">Nama Belakang</th>
      			<th scope="col">Tanggal Lahir</th>
      			<th scope="col">No. HP</th>
      			<th scope="col">Bio</th>
      			<th scope="col">Aksi</th>
    			</tr>
 			</thead>
  			<tbody>
  				<?php foreach($result as $row) {?>
			    <tr>
			      <th scope="row"><?php echo $row->id; ?></th>
			      <td><?php echo $row->nama_depan; ?></td>
			      <td><?php echo $row->nama_belakang; ?></td>
			      <td><?php echo $row->ultah; ?></td>
			      <td><?php echo $row->nohp; ?></td>
			      <td><?php echo $row->bio; ?></td>
			      <td><a href="#" data-toggle="modal" data-target="#edit<?= $row->id ?>">Edit</a> | <a href="<?php echo site_url('crudController/delete');?>/<?php echo $row->id;?>">Delete</a></td>
			    </tr>
				<div class="modal fade" id="edit<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="post" action="<?php echo site_url('crudController/create')?>">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Depan</label>
								<input type="text" class="form-control" name="nama_depan" aria-describedby="emailHelp" placeholder="Nama Depan" value="<?= $row->nama_depan ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Belakang</label>
								<input type="text" class="form-control" name="nama_belakang" aria-describedby="emailHelp" placeholder="Nama Belakang" value="<?= $row->nama_belakang ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tanggal Lahir</label>
								<input type="date" class="form-control" name="ultah" aria-describedby="emailHelp" placeholder="" value="<?= $row->ultah ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">No. HP</label>
								<input type="text" class="form-control" name="nohp" aria-describedby="emailHelp" placeholder="No. HP" value="<?= $row->nohp ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Bio</label>
								<input type="text" class="form-control" name="bio" aria-describedby="emailHelp" placeholder="Bio" value="<?= $row->bio ?>">
							</div>
							<button type="submit" class="btn btn-primary" value="save">Submit</button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
						</div>
					</div>
					</div>
				<?php } ?>
  			</tbody>
		</table>
    </div>

  </body>
</html>