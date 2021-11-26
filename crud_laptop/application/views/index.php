<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Laptop</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/css/bootstrap-datepicker.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css');?>">
    <style type="text/css">
	#jrs{ font-size: 19px; }
    </style>
    <script src="<?= base_url(); ?>assets/js/assets\js\sweetalert2.all.min.js "></script>
    <script src="<?= base_url(); ?>assets/js/myscript.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/js/bootstrap-datepicker.min.js"></script>
    </script>
  </head>
  <body>

  <div class="panel panel-default">
	    <div class="panel-heading"><div class="text-center">Daftar Laptop</div></div>
	    <div class="panel-body">

    	<div class="row">
		    <div class="col-lg-9">
			<form class="form-horizontal" action="<?php echo site_url('C_barang/simpan_data'); ?>"
        method="post" enctype="multipart/form-data">

        <div class="">
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
        </div>

      	<div class="form-group">
					<label class="control-label col-sm-2" for="email">Nama Laptop</label>
					<div class="col-sm-10">
            <input type="text" class="form-control" id="nama_lapto" name="nama_laptop" placeholder="Nama Laptop" required>
					</div>
				</div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Asal</label>
          <div id="jrs" class="col-sm-10">
            <input type="radio" name="asal" value="impor" checked>Impor  _  <input type="radio" name="asal" value="Lokal">Lokal
          </div>

      	<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Harga</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="harga" name="harga" placeholder="harga" required>
					</div>
				</div>

        <div class="">
          <div class="form-group">
  					<label class="control-label col-sm-2" for="pwd">Tanggal</label>
  					<div class="col-sm-10">
  					  <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" required>
  					</div>
        </div>

      	<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Merek</label>
					<div id="jrs" class="col-sm-10">
					    <select class="form-control" id="merek" name="merek">
							<option value="ASUS">ASUS</option>
						    <option value="HP">HP</option>
                <option value="PREDATOR">PREDATOR</option>
					    </select>
					</div>
				</div>

        <div class="row">
          <label class="control-label col-sm-2 for="pwd"">Processor</label>
          <div class="col-sm-10">
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="processor" name="processor" value="intel"
            <?php if (set_value('processor') == "intel") : echo "checked";endif; ?>>
            <label class="form-check-label" for="processor">
                intel
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="processor2" name="ststus" value="AMD"
             <?php if (set_value('processor') == "AMD") : echo "checked";endif; ?>>
            <label class="form-check-label" for="processor2">
                AMD
            </label>
        </div>
        <small class="text-danger">
            <?php echo form_error('processor') ?>
        </small>
    </div>
</div>


        <div class="">
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">deskripsi</label>
            <div class="col-sm-10">
              <textarea name="deskripsi" id="deskripsi" placeholder="deskripsi" rows="8" cols="80"></textarea>
            </div>
        </div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Photo</label>
					<div class="col-sm-10">
					  <input type="file" id="photo" name="photo">
					</div>
				</div>


        <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-success">Tambah Laptop</button>
					</div>
				</div>
			</form>
			</div>

<hr>
<hr>
<hr>
    	<div class="col-lg-10  col-sm-30">
				<table class="table table-bordered table-striped">
					<thead>
					  <tr>
						<th class="text-center">No.</th>
						<th class="text-center">Photo</th>
						<th class="text-center">Harga</th>
						<th class="text-center">nama Laptop</th>
            <th class="text-center">Barang</th>
						<th class="text-center">Merek</th>
            <th class="text-center">Processor</th>
            <th class="text-center">Deskripsi</th>
            <th class="text-center">Tanggal</th>
            <th class="text-center">Email</th>
						<th class="text-center" colspan="6">Aksi</th>
					  </tr>
					</thead>
					<tbody>
					  <?php
						if($c_barang>0){
							$no = 0;
							foreach($v_edit_barang as $list){
					  ?>
					  <tr>
						<td class="text-center"><?php echo ++$no;?></td>
						<td class="text-center">
							<img src="<?php echo base_url('uploads/'.$list->photo) ?>" style="width:50px; height:50px">
						</td>
						<td class="text-center"><?php echo $list->harga;?></td>
						<td class="text-center"><?php echo $list->nama_laptop;?></td>
            <td class="text-center"><?php echo $list->asal;?></td>
						<td class="text-center"><?php echo $list->merek;?></td>
            <td class="text-center"><?php echo $list->processor;?></td>
            <td class="text-center"><?php echo $list->deskripsi;?></td>
            <td class="text-center"><?php echo $list->tanggal;?></td>
            <td class="text-center"><?php echo $list->email;?></td>
						<td class="text-center">
							<a class="btn btn-primary btn-xs" href="<?php echo site_url('C_barang/edit_data/'.$list->id_barang)?>"
                title="Edit">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
							</a>
						</td>
						<td class="text-center">
							<a class="btn btn-danger btn-xs" href="<?php echo site_url('C_barang/hapus_data/'.$list->id_barang)?>"
                 title="Edit">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Hapus
							</a>
						</td>
					  </tr>
					  <?php
							}
						}else{
					  ?>
					  <tr>
						<td colspan="5"><center>Data Laptop Kosong</center></td>
					  </tr>
					  <?php
						}
					  ?>
					</tbody>
				</table>
			</div>
			</div>
	    </div>
      <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
      <script>
          CKEDITOR.replace('deskripsi')
      </script>
	</div>

	<script src="<?php echo base_url('style/js/jquery-3.1.1.js');?>"></script>
	<script src="<?php echo base_url('style/js/bootstrap.min.js');?>"></script>
  </body>
</html>
