<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>TAMBAH DATA JABATAN</h2>
                </div>
            </div>
        </div>

            
        
        <div id="layoutSidenav_content">
            <main>
                <form action="<?php echo base_url('jabatan/addJabatan_proses'); ?>" method="post" role="form">
                
                <div class="form-group">
                    <label for="formGroupExampleInput2">Jabatan</label>
                    <input type="text" class="form-control col-md-6" name="jabatan" id="formGroupExampleInput2" placeholder="">
                </div>

				<div class="form-group">
                    <label for="formGroupExampleInput2">Divisi</label>
                    <select class="form-control col-md-6" name="id_divisi" require="true">
                        <option selected disabled>--Pilih Divisi--</option>
						<?php foreach($divisi as $d) : ?>
							<option value="<?= $d->id_divisi ?>"><?= $d->divisi ?></option>
						<?php endforeach ?>
                    </select>
                </div>

                <br>
                <button class="btn btn-primary" type="submit"><i class="fa fa-arrow-circle-right"></i> Simpan</button>
            </form>
            <a href="<?php echo base_url('jabatan')?>"><button class="btn btn-danger btn-"><i
                class="fa fa-arrow-circle-left">
            </i> Back</button></a>
            </main>
        </div>
        </div>
