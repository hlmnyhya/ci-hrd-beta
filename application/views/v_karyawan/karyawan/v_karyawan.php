<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-lg-12">
                <div class="page_title">
                    <h2>LIST DATA KARYAWAN</h2>
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
                            <h2>DATA KARYAWAN</h2>
                            <td><a href="<?php echo base_url('DataKaryawan/Karyawan/addKaryawan')?>" class="btn icon btn-primary">
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
                                        <th>Tanggal Masuk</th>
                                        <th>Masa Kerja</th>
                                        <th>Divisi</th>
                                        <th>Jabatan</th>
                                        <th>Golongan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($karyawan as $k) : ?>
                                    <?php if ($k->id_perusahaan == $this->session->userdata('id_perusahaan')) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $k->nama?></td>
                                        <td><?php echo $k->tgl_masuk?></td>
                                        <td><?php echo $k->masa_kerja?></td>
                                        <td><?php echo $k->divisi?></td>
                                        <td><?php echo $k->jabatan?></td>
                                        <td><?php echo $k->golongan?></td>
                                        <td>
                                            <a href="<?php echo base_url('Karyawan/editKaryawan/'.$k-> id_karyawan)?>"
                                                class="btn icon btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url('Karyawan/delete/'.$k-> id_karyawan)?>"
                                                class="btn icon btn-danger"><i class="fa fa-trash"></i></a>
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
<!-- end topbar -->
<!-- dashboard inner -->