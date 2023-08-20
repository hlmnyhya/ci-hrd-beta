 <!-- footer -->
<div class="inner_container">
     <div class="footer">
    <?php $currentYear = date('Y'); ?>
    <p>
        Copyright &copy; <?php echo $currentYear; ?> All rights reserved.<br><br>
        Developed By: <a href="https://mediacomputer.tech/">MediaComputer.Tech</a>
    </p>
    </div>
 </div>
 <!-- Datatables -->
 <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
 <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
 <!-- jQuery -->
 <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
 <!-- wow animation -->
 <script src="<?php echo base_url();?>jassets/s/animate.js"></script>
 <!-- select country -->
 <script src="<?php echo base_url();?>assets/js/bootstrap-select.js"></script>
 <!-- owl carousel -->
 <script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
 <!-- chart js -->
 <script src="<?php echo base_url();?>assets/js/Chart.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/Chart.bundle.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/utils.js"></script>
 <script src="<?php echo base_url();?>assets/js/analyser.js"></script>
 <!-- nice scrollbar -->
 <script src="<?php echo base_url();?>assets/js/perfect-scrollbar.min.js"></script>
 <script>
var ps = new PerfectScrollbar('#sidebar');
 </script>
 <!-- custom js -->
 <script src="<?php echo base_url();?>assets/js/chart_custom_style1.js"></script>
 <script src="<?php echo base_url();?>assets/js/custom.js"></script>

 <script>
    new DataTable('#jabatan');
 </script>

 <script>
    new DataTable('#riwayat');
 </script>

 <script>
    new DataTable('#karyawan');
 </script>

 <script>
    new DataTable('#golongan');
 </script>

 <script>
    new DataTable('#pribadi');
 </script>

 <script>
    new DataTable('#pelamar');
 </script>

 <script>
    new DataTable('#menu');
 </script>

 <script>
    new DataTable('#submenu');
 </script>

 <script>
    new DataTable('#role');
 </script>

 <script>
    new DataTable('#mpp');
 </script>

 <script>
    new DataTable('#thl');
 </script>

 <script>

$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});

$('.form-check-input').on('click', function() {
    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
        url: "<?= base_url('admin/changeaccess'); ?>",
        type: 'post',
        data: {
            menuId: menuId,
            roleId: roleId
        },
        success: function() {
            document.location.href = "<?= base_url('admin/roleaccess/') ?>" + roleId;
        }
    });
});
</script>
<script>
    $(function () {
        $("#datepicker").datepicker({
            dateFormat: "dd-mm-yy", // Format tanggal yang diinginkan
            changeMonth: true,
            changeYear: true
        });
    });
</script>

<!-- dashboard -->
<script>
    // Data usia dan jumlahnya
    var ageData = {
        labels: ["18-25 Tahun", "26-35 Tahun", "36-46 Tahun", "47-56 Tahun", "> 56 Tahun"],
        datasets: [{
            data: [<?= $jumlah_1825 ?>, <?= $jumlah_2635 ?>, <?= $jumlah_3646 ?>, <?= $jumlah_4756 ?>, <?= $jumlah_56 ?>],
            backgroundColor: [
                '#FF5733',
                '#FFC300',
                '#36A2EB',
                '#4CAF50',
                '#9B59B6'
            ]
        }]
    };

    // Inisialisasi grafik pie chart
    var ctx = document.getElementById('ageChart').getContext('2d');
    var ageChart = new Chart(ctx, {
        type: 'pie',
        data: ageData,
        options: {
            responsive: true,
            legend: {
                position: 'bottom'
            }
        }
    });
</script>
<script>
    // Data pendidikan dan jumlahnya
    var educationData = {
        labels: ["S2", "S1", "D1/D2/D3", "SMA/SMK/MA", "SMP/MTS", "SD", "TIDAK SEKOLAH"],
        datasets: [{
            data: [
                <?= $jumlah_pend['S2'] ?>,
                <?= $jumlah_pend['S1'] ?>,
                <?= $jumlah_pend['D1/D2/D3'] ?>,
                <?= $jumlah_pend['SMA/SMK/MA'] ?>,
                <?= $jumlah_pend['SMP/MTS'] ?>,
                <?= $jumlah_pend['SD'] ?>,
                <?= $jumlah_pend['TIDAK SEKOLAH'] ?>
            ],
            backgroundColor: [
                '#FF5733',
                '#FFC300',
                '#36A2EB',
                '#4CAF50',
                '#9B59B6',
                '#F39C12',
                '#E74C3C'
            ]
        }]
    };

    // Inisialisasi grafik pie chart untuk pendidikan
    var educationCtx = document.getElementById('educationChart').getContext('2d');
    var educationChart = new Chart(educationCtx, {
        type: 'pie',
        data: educationData,
        options: {
            responsive: true,
            legend: {
                position: 'bottom'
            }
        }
    });
</script>
<script>
    // Data jenis kelamin dan jumlahnya
    var genderData = {
        labels: ["Lak-Laki", "Perempuan"],
        datasets: [{
            data: [
                <?= $jumlah_jk['laki-laki'] ?>,
                <?= $jumlah_jk['perempuan'] ?>
            ],
            backgroundColor: [
                '#3498DB',
                '#E74C3C'
            ]
        }]
    };

    // Inisialisasi grafik pie chart untuk jenis kelamin
    var genderCtx = document.getElementById('genderChart').getContext('2d');
    var genderChart = new Chart(genderCtx, {
        type: 'pie',
        data: genderData,
        options: {
            responsive: true,
            legend: {
                position: 'bottom'
            }
        }
    });
</script>

 </body>

 </html>