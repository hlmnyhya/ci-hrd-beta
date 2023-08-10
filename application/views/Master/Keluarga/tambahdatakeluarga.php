<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>TAMBAH DATA KELUARGA</h2>
                </div>
            </div>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <form action="<?php echo base_url('DataKaryawan/pribadi/create_keluarga'); ?>" method="post" role="form">
                <div class="form-group">
                    <input type="hidden" class=" form-control col-md-4" name="id_keluarga" id="formGroupExampleInput2"
                        placeholder="">
                </div>
                    <label for="formGroupExampleInput2">Data Pribadi</label>
                    <div class="form-control" style="max-width: 835px;">
                        <select class="col-md-6 select2" aria-label="Default select example" name="id_karyawan_pribadi" readonly>
                            <?php foreach($pribadi as $p) { ?>
                            <option value="<?= $p->id_karyawan_pribadi ?>"><?= $p->nama?></option>
                            <?php } ?>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Istri dari Suami</label>
                    <input type="text" class="form-control col-md-6" name="istri_suami" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInp ut2">Anak1</label>
                    <input type="text" class="form-control col-md-6" name="anak1" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Anak2</label>
                    <input type="text" class="form-control col-md-6" name="anak2" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Anak3</label>
                    <input type="text" class="form-control col-md-6" name="anak3" id="formGroupExampleInput2" placeholder="">
                    </select>
                </div>
                <br>
                <td>
                    <button type="submit" class="btn btn-primary btn-">Next <i class="fa fa-arrow-circle-right"></i></button>
</form>
                    </td>
                </form>
                <a href="<?php echo base_url('DataKaryawan/Pribadi/tambah_data_pribadi')?>"><button
                        class="btn btn-danger btn-"><i class="fa fa-arrow-circle-left">
                        </i> Back</button></a>
            </main>
        </div>