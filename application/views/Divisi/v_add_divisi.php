<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>TAMBAH DATA DIVISI</h2>
                </div>
            </div>
        </div>

            
        
        <div id="layoutSidenav_content">
            <main>
                <form action="<?php echo base_url('Divisi/addDivisi_proses'); ?>" method="post" role="form">
                
                <div class="form-group">
                    <label for="formGroupExampleInput2">Divisi</label>
                    <input type="text" class="form-control col-md-6" name="divisi" id="formGroupExampleInput2" placeholder="">
                </div>

				<div class="form-group">
                    <label for="formGroupExampleInput2">Perusahaan</label>
                    <select class="form-control col-md-6" name="id_perusahaan" require="true">
                        <option selected disabled>--Pilih Perusahaan--</option>
						<?php foreach($perusahaan as $p) : ?>
							<option value="<?= $p->id_perusahaan ?>"><?= $p->perusahaan ?></option>
						<?php endforeach ?>
                    </select>
                </div>

                <br>
                <button class="btn btn-primary" type="submit"><i class="fa fa-arrow-circle-right"></i> Simpan</button>
            </form>
            <a href="<?php echo base_url('Divisi')?>"><button class="btn btn-danger btn-"><i
                class="fa fa-arrow-circle-left">
            </i> Back</button></a>
            </main>
        </div>
        </div>
