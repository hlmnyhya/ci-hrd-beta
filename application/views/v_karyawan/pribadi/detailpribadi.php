<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>DATA DETAIL PRIBADI</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-md-12">
                <?php if ($this->session->flashdata('message')): ?>
                <?= $this->session->flashdata('message') ?>
                <?php endif; ?>
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>DATA PRIBADI</h2>
                        </div>
                    </div>
                    <div class="full price_table padding_infor_info">
                        <div class="row">    
                            <!-- column contact -->
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                <main>
                                          <?php foreach ($karyawan_pribadi as $kp) : ?>
                                        <div class="contact_blog">
                                            <div class="contact_inner">
                                                <div class="left">
                                                    <h4><?php echo $kp->nama?></h4>
                                                    <ul class="list-unstyled">
                                                        <li>Alamat KTP: <?php echo $kp->alamat_ktp?></li>
                                                        <li>Alamat Domisili: <?php echo $kp->alamat_domisili?></li>
                                                        <li>Agama: <?php echo $kp->agama?></li>
                                                        <li>Pendidikan: <?php echo $kp->pendidikan?></li>
                                                        <li>Jurusan: <?php echo $kp->jurusan?></li>
                                                        <li>Tanggal Lahir: <?php echo $kp->tanggal_lahir?></li>
                                                        <li>Usia: <?php echo $kp->usia?></li>
                                                        <li>Jenis Kelamin : <?php echo $kp->jenis_kelamin?></li>
                                                        <li>Golongan Darah : <?php echo $kp->golongan_darah?></li>
                                                    </ul>
                                                    <ul>
                                                        <li>Istri / Suami: <?php echo $kp->istri_suami?></li>
                                                        <li>Anak Ke-1 : <?php echo $kp->anak1?></li>
                                                        <li>Anak Ke-2 : <?php echo $kp->anak2?></li>
                                                        <li>Anak Ke-3 : <?php echo $kp->anak3?></li>
                                                    </ul>
                                                </div>
                                                <div class="bottom_list">
                                                    <div class="right_button">
                                                        <td>
                                                            <!-- <a href="<?php echo base_url('DataKaryawan/Pribadi/detail/'.$p->id_karyawan_pribadi)?>" class="btn icon btn-primary">
                                                                <i class="fa fa-user"></i> Detail
                                                            </a> -->
                                                        </td>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </main>
                                </div>
                        </div>

