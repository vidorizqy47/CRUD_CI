<div class="col-md-8">
<h1 class="my-4">Views
          <small>Data sample</small>
        </h1>

<?php echo anchor('crud/form_add', '+ Add data', 'class="btn btn-primary btn-sm"'); ?>
<br><br>
<font color="green"><?php echo $this->session->flashdata('pesan'); ?></font>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Produsen</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tmp as $key) { ?>
    <tr>
      <th scope="row"><?php echo $key->id; ?></th>
      <td><?php echo $key->nama; ?></td>
      <td><?php echo $key->produsen; ?></td>
      <td><?php echo $key->harga; ?></td>
      <td>
        <?php echo anchor('crud/edit/'.$key->id, 'Edit', 'class="badge badge-info"');  ?>
        /
        <?php echo anchor('crud/del/'.$key->id, 'Delete',array('class'=>'badge badge-danger', 'onclick'=>"return confirmDialog();"));  ?>
     </td>
    </tr>
   <?php }?>
  </tbody>
</table>
</div>

<script type="text/javascript">
function confirmDialog() {
  var x=confirm("Yakin akan di hapus?")
  if (x) {
    return true;
  } else {
    return false;
  } }
</script>