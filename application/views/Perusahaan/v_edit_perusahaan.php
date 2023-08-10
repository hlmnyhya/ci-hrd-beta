<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>UBAH DATA PERUSAHAAN</h2>
                </div>
            </div>
        </div>

            
        
        <div id="layoutSidenav_content">
            <main>
                <form action="<?php echo base_url('Perusahaan/editPerusahaan_proses/'.$perusahaan['id_perusahaan']); ?>" method="post" role="form">

				<input type="hidden" name="id_perusahaan" value="<?= $perusahaan['id_perusahaan'] ?>">
                
                <div class="form-group">
                    <label for="formGroupExampleInput2">Perusahaan</label>
                    <input type="text" class="form-control col-md-6" name="perusahaan" id="formGroupExampleInput2" placeholder="" value=<?= $perusahaan['perusahaan'] ?>>
                </div>

                <br>
                <button class="btn btn-primary" type="submit"><i class="fa fa-arrow-circle-right"></i> Simpan</button>
            </form>
            <a href="<?php echo base_url('Perusahaan')?>"><button class="btn btn-danger btn-"><i
                class="fa fa-arrow-circle-left">
            </i> Back</button></a>
            </main>
        </div>
        </div>
