  <div class="col-md-4">

        <h1 class="my-4">Edit
          <small>Data sample</small>
        </h1>
  <font color="green"><?php echo $this->session->flashdata('pesan'); ?></font>
  <?php echo form_open('crud/update/'.$tmp->id,''); ?>
  <div class="form-group">
    <label for="exampleName">Nama</label>
    <input type="text" name="nama"class="form-control" id="exampleNama" aria-describedby="emailHelp">
    <?php echo form_error('nama', '<div class="text-danger"><small>', '</small></div>');?>
  </div>
  <div class="form-group">
    <label for="exampleProdusen">Produsen</label>
    <input type="text" name="produsen" class="form-control" id="exampleProdusen">
    <?php echo form_error('produsen', '<div class="text-danger"><small>', '</small></div>');?>
  </div>
  <div class="form-group">
    <label for="exampleHarga">Harga</label>
    <input type="integer" name="harga" class="form-control" id="exampleHarga">
    <?php echo form_error('harga', '<div class="text-danger"><small>', '</small></div>');?>
  </div>
  <button type="submit" class="btn btn-primary">Perbarui</button>
<?php echo form_close(); ?>

</div>