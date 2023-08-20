               <!-- dashboard inner -->
               <div class="midde_cont">
                   <div class="container-fluid">
                       <div class="row column_title">
                           <div class="col-md-12">
                               <div class="page_title">
                                   <h2>DASHBOARD LUNIK ANUGERAH</h2>
                               </div>
                           </div>
                       </div>
                       <div class="row column1">
                           <div class="col-md-8 col-lg-4">
                               <div class="full counter_section margin_bottom_30">
                                   <div class="couter_icon">
                                       <div>
                                           <i class="fa fa-user yellow_color"></i>
                                       </div>
                                   </div>
                                   <div class="counter_no">
                                       <div>
                                           <p class="total_no"><?= $jumlah_karyawan ?></p>
                                           <p class="head_couter">Jumlah Karyawan</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-8 col-lg-4">
                               <div class="full counter_section margin_bottom_30">
                                   <div class="couter_icon">
                                       <div>
                                           <i class="fa fa-group blue1_color"></i>

                                       </div>
                                   </div>
                                   <div class="counter_no">
                                       <div>
                                           <p class="total_no"><?= $jumlah_mutasi?></p>
                                           <p class="head_couter">Riwayat Mutasi</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-8 col-lg-4">
                              <div class="full counter_section margin_bottom_30">
                                 <div class="couter_icon">
                                    <div>
                                           <i class="fa fa-sign-out   red_color"></i>
                                          </div>
                                   </div>
                                   <div class="counter_no">
                                      <div>
                                           <p class="total_no"><?= $jumlah_pelamar ?></p>
                                           <p class="head_couter">Jumlah Pelamar</p>
                                          </div>
                                   </div>
                                 </div>
                           </div>
                           </div>

                           <div class="row column2">
                              <div class="col-md-4">
                                 <div class="white_shd full margin_bottom_30">
                                    <div class="full graph_head">
                                       <div class="heading1 margin_0">
               <h2>Usia</h2>
            </div>
        </div>
        <div class="full progress_bar_inner">
            <canvas id="ageChart"></canvas>
         </div>
      </div>
   </div>

<div class="col-md-4">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Pendidikan</h2>
            </div>
        </div>
        <div class="full progress_bar_inner">
            <canvas id="educationChart"></canvas>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Jenis Kelamin</h2>
            </div>
        </div>
        <div class="full progress_bar_inner">
            <canvas id="genderChart"></canvas>
        </div>
    </div>
</div>
</div>

<div class="row column3">
<div class="col-md-4">
   <div class="white_shd full">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Usia</h2>
                                 </div>
                              </div>
                              <div class="full progress_bar_inner">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="msg_list_main">
                                          <ul class="msg_list">
                                             <li>
                                                <span>
                                                <span class="name_user">18-25 Tahun</span>
                                                <span class="time_ago"><?= $jumlah_1825 ?></span>
                                                </span>
                                             </li>
                                             <li>
                                                <span>
                                                <span class="name_user">26-35 Tahun</span>
                                                <span class="time_ago"><?= $jumlah_2635 ?></span>
                                                </span>
                                             </li>
                                             <li>
                                                <span>
                                                <span class="name_user">36-46 Tahun</span>
                                                <span class="time_ago"><?= $jumlah_3646 ?></span>
                                                </span>
                                             </li>
                                             <li>
                                                <span>
                                                <span class="name_user">47-56 Tahun</span>
                                                <span class="time_ago"><?= $jumlah_4756 ?></span>
                                                </span>
                                             </li>
                                             <li>
                                                <span>
                                                <span class="name_user">> 56 Tahun</span>
                                                <span class="time_ago"><?= $jumlah_56 ?></span>
                                                </span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Pendidikan</h2>
                                 </div>
                              </div>
                              <div class="full progress_bar_inner">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="msg_list_main">
                                          <ul class="msg_list">
                                             <li>
                                                <span>
                                                <span class="name_user">S2</span>
                                                <span class="time_ago"><?= $jumlah_pend['S2'] ?></span>
                                                </span>
                                             </li>
                                             <li>
                                                <span>
                                                <span class="name_user">S1</span>
                                                <span class="time_ago"><?= $jumlah_pend['S1'] ?></span>
                                                </span>
                                             </li>
                                             <li>
                                                <span>
                                                <span class="name_user">D1/D2/D3</span>
                                                <span class="time_ago"><?= $jumlah_pend['D1/D2/D3'] ?></span>
                                                </span>
                                             </li>
                                             <li>
                                                <span>
                                                <span class="name_user">SMA/SMK/MA</span>
                                                <span class="time_ago"><?= $jumlah_pend['SMA/SMK/MA'] ?></span>
                                                </span>
                                             </li>
                                             <li>
                                                <span>
                                                <span class="name_user">SMP/MTS</span>
                                                <span class="time_ago"><?= $jumlah_pend['SMP/MTS'] ?></span>
                                                </span>
                                             </li>
                                             <li>
                                                <span>
                                                <span class="name_user">SD</span>
                                                <span class="time_ago"><?= $jumlah_pend['SD'] ?></span>
                                                </span>
                                             </li>
                                             <li>
                                                <span>
                                                <span class="name_user">TIDAK SEKOLAH</span>
                                                <span class="time_ago"><?= $jumlah_pend['TIDAK SEKOLAH'] ?></span>
                                                </span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Jenis Kelamin</h2>
                                 </div>
                              </div>
                              <div class="full progress_bar_inner">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="msg_list_main">
                                          <ul class="msg_list">
                                             <li>
                                                <span>
                                                <span class="name_user">Lak-Laki</span>
                                                <span class="time_ago"><?= $jumlah_jk['laki-laki'] ?></span>
                                                </span>
                                             </li>
                                             <li>
                                                <span>
                                                <span class="name_user">Perempuan</span>
                                                <span class="time_ago"><?= $jumlah_jk['perempuan'] ?></span>
                                                </span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                           </div>
                           