<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-lg-12">
                <div class="page_title">
                    <h2>LIST DATA PRIBADI</h2>
                </div>
            </div>
        </div>
        <div class="row column1">
            <div class="col-md-12">
                  <?php if ($this->session->flashdata('message')): ?>
                <?= $this->session->flashdata('message') ?>
                <?php endif; ?>
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>DATA PRIBADI</h2>
                             <td>
                                <a href="<?php echo base_url('DataKaryawan/Pribadi/tambah_data_pribadi')?>" class="btn icon btn-primary">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </a>
                            </td>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table id="karyawan" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat KTP</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Golongan Darah</th>
                                        <th>Pendidikan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($pribadi as $p) : ?>
                                        <?php if ($p->id_perusahaan == $this->session->userdata('id_perusahaan')) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $p->nama ?></td>
                                                <td><?php echo $p->alamat_ktp ?></td>
                                                <td><?php echo $p->jenis_kelamin ?></td>
                                                <td><?php echo $p->golongan_darah ?></td>
                                                <td><?php echo $p->pendidikan ?></td>
                                                <!-- <td><?php echo $this->session->userdata('id_perusahaan')?></td> -->
                                                <td>
                                                   <a href="<?= base_url('DataKaryawan/Pribadi/detail/' . $p->id_karyawan_pribadi) ?>" class="btn icon btn-primary" title="View Employee Details">
    <i class="fa fa-user"></i>&nbsp;Detail
</a>

                </a>
                <br>
                <a href="<?php echo base_url('DataKaryawan/Pribadi/edit_pribadi/' . $p->id_karyawan_pribadi) ?>" class="btn icon btn-warning">
                    <i class="fa fa-edit"></i> Edit
                </a>
                <br>
                <!-- <a href="<?php echo base_url('DataKaryawan/Pribadi/edit_keluarga/' . $p->id_karyawan_pribadi) ?>" class="btn icon btn-warning">
                    <i class="fa fa-edit"></i> Edit Data Keluarga
                </a>
                <br> -->
                <a href="<?php echo base_url('DataKaryawan/Pribadi/delete_data/' . $p->id_karyawan_pribadi) ?>" class="btn icon btn-danger">
                    <i class="fa fa-trash"></i> Hapus
                </a>
            </td>
        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CA -->