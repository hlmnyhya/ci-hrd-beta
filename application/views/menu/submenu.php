<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>


<!-- Begin Page Content -->
<div class="midde_cont">
 <div class="container-fluid">
     <div class="row column_title">
         <div class="col-md-12">
             <div class="page_title">
                 <h2><?= $title?></h2>
             </div>
         </div>
     </div>
<div class="container-fluid">
    <!-- table row -->
    <div class="row">
        <div class="col-lg-12">
            <!-- error add new sub menu -->
            <?php if (validation_errors()) : ?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
              </div>
            <?php endif; ?>
            <!-- alert success add new sub menu -->
            <?= $this->session->flashdata('message_success_addsubmenu'); ?>
            <!-- alert error edit data -->
            <?= $this->session->flashdata('message_error_editsubmenu'); ?>
            <!-- alert success edit data -->
            <?= $this->session->flashdata('message_success_editsubmenu'); ?>
            <!-- alert delete submenu -->
            <?= $this->session->flashdata('message_delete_submenu'); ?>
            <!-- btn add new submenu -->
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal"><i class="fa fa-plus"></i> Tambah Sub Menu</a>
            <!-- table -->
            <table id="submenu" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sub Menu</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $i = 1; ?>
                    <?php foreach($subMenu as $sm) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $sm['submenu']; ?></td>
                        <td><?= $sm['menu']; ?></td>
                        <td><?= $sm['url']; ?></td>
                        <td><?= $sm['icon']; ?></td>
                        <td><?= $sm['is_active']; ?></td>
                        <td>
                            <a class="btn btn-warning" href="<?= site_url('Menu/Menu/editSubmenu/'.$sm['id']); ?>"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger" href="#!" onclick="deleteConfirm('<?php echo site_url('Menu/Menu/deleteSubmenu/'.$sm['id']) ?>')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal add new menu-->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">Add New Sub Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- form -->
      <form action="<?= base_url('Menu/Menu/submenu'); ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="submenu" name="submenu" placeholder="Submenu title">
            </div>
            <div class="form-group">
              <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Select Menu</option>
                <?php foreach ($menu as $m) : ?>
                  <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                <label class="form-check-label" for="is_active">
                  Active?
                </label>
              </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Deleted data will not be restored.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>