<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>DATA PELAMAR</h2>
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
                            <h2>DATA PELAMAR</h2>
                            <a href="<?php echo base_url('DataPelamar/DataPelamar/tambah_data_pelamar')?>" class="btn icon btn-primary">
                                <i class="fa fa-plus"></i> Tambah Data
                            </a>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table id="pelamar" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No Telepon</th>
                                            <th>Email</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pelamar as $p) : ?>
                                            <?php if ($this->session->userdata('role_id') === '1' || $p->id_perusahaan == $this->session->userdata('id_perusahaan')) : ?>
                                                <tr>
                                                    <td><?php echo $p->nama?></td>
                                                    <td><?php echo $p->alamat?></td>
                                                    <td><?php echo $p->jenis_kelamin?></td>
                                                    <td><?php echo $p->no_telp?></td>
                                                    <td><?php echo $p->email?></td>
                                                    <td><a href="<?= base_url('assets/uploads/pelamar/' . $p->file)?>" class="btn btn-primary"><i class="fa fa-file"></i> Lihat File</a></td>
                                                    <td>
                                                        <a href="<?php echo base_url('DataPelamar/DataPelamar/edit/'.$p->id_pelamar)?>" class="btn icon btn-warning"><i class="fa fa-edit"></i> Edit Data Pelamar</a>
                                                        <a href="<?php echo base_url('DataPelamar/DataPelamar/delete/'.$p->id_pelamar)?>" class="btn icon btn-danger"><i class="fa fa-trash"></i> Hapus</a>
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
</div>
