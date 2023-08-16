<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>EDIT DATA KELUARGA</h2>
                </div>
            </div>
        </div>
        <div id="layoutSidenav_content">
            <main>
              <!-- Master/Keluarga/editdatakeluarga.php -->
<?php foreach ($keluarga as $ke) : ?>
<form action="<?php echo base_url('DataKaryawan/pribadi/edit_data_keluarga'); ?>" method="post" role="form">
    <div class="form-group">
        <input type="hidden" class="form-control col-md-4" name="id_keluarga" value="<?php echo $ke->id_keluarga; ?>">
    </div>
    <div class="form-group">
        <label for="istri_suami">Istri dari Suami</label>
        <input type="text" class="form-control col-md-6" name="istri_suami" value="<?php echo $ke->istri_suami; ?>">
    </div>
    <div class="form-group">
        <label for="anak1">Anak1</label>
        <input type="text" class="form-control col-md-6" name="anak1" value="<?php echo $ke->anak1; ?>">
    </div>
    <div class="form-group">
        <label for="anak2">Anak2</label>
        <input type="text" class="form-control col-md-6" name="anak2" value="<?php echo $ke->anak2; ?>">
    </div>
    <div class="form-group">
        <label for="anak3">Anak3</label>
        <input type="text" class="form-control col-md-6" name="anak3" value="<?php echo $ke->anak3; ?>">
    </div>
    <br>
    <td>
        <button type="submit" class="btn btn-primary">Next <i class="fa fa-arrow-circle-right"></i></button>
    </td>
</form>
<?php endforeach; ?>

                <a href="<?php echo base_url('DataKaryawan/Pribadi/tambah_data_pribadi')?>"><button
                        class="btn btn-danger btn-"><i class="fa fa-arrow-circle-left">
                        </i> Back</button></a>
            </main>
        </div>