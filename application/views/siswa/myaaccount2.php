  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Biodata Siswa <small> SMA Negeri 4 Padang</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> MY ACCOUNT
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                      
                    </div>
                </div>
                <!-- /.row -->
                <?= "<h2 style='color:red; font-style:italic;'>".$this->session->flashdata('infekskul')."</h2>"; ?>
                <div class="row">
        

                    <div class="col-lg-12">   
                   <!-- <div class="alert alert-success" role="alert">
                          [1]. Silahkan pilih Ekskul Maksimal 2<br/>
                          [2]. Ikuti Ekskul yang anda pilih dengan sungguh-sungguh
                    </div>
                    --> 
                    <?php
                      echo "<h4 style='font-style:italic; color:red'>".$this->session->flashdata('pesanpemilihaneks')."</h4>";
                    ?>
                          
                       <!-- 
                       <a href="<? //= base_url().'siswa/ekskul/tambahekskul'; ?>" style="text-decoration: none; color: black;"><button>Daftar Ekskul</button></a>
                       -->

                        <table class="table table-hover">
                         
                          <tbody>
                            <tr>
                              
                              <td>Nama Lengkap</td>
                              <td>:</td>
                              <td><?=$data->nama_lengkap;?></td>
                            </tr>
                            <tr> 
                              <td>Jenis Kelamin</td>
                              <td>:</td>
                              <td><?=$data->jenis_kelamin;?></td>
                            </tr>
                            <tr> 
                              <td>NISN</td>
                              <td>:</td>
                              <td><?=$data->nisn;?></td>
                            </tr>

                            <tr> 
                              <td>NIK</td>
                              <td>:</td>
                              <td><?=$data->nik;?></td>
                            </tr>

                             <tr> 
                              <td>Tempat / Tanggal Lahir</td>
                              <td>:</td>
                              <td><?=$data->tempat_lahir.' / '.$data->tanggal_lahir;?></td>
                            </tr>

                             <tr> 
                              <td>Registrasi Akta</td>
                              <td>:</td>
                              <td><?=$data->no_registrasi_akta;?></td>
                            </tr>

                             <tr> 
                              <td>Agama</td>
                              <td>:</td>
                              <td><?=$data->agama;?></td>
                            </tr>

                             <tr> 
                              <td>Kewarganegaran</td>
                              <td>:</td>
                              <td><?=$data->kewarganegaraan;?></td>
                            </tr>

                             <tr> 
                              <td>Berkebutuhan Khusus</td>
                              <td>:</td>
                              <td><?=$data->berkebutuhan_khusus;?></td>
                            </tr>

                             <tr> 
                              <td>Alamat</td>
                              <td>:</td>
                              <td><?=$data->alamat;?></td>
                            </tr>

                             <tr> 
                              <td>RT/RW</td>
                              <td>:</td>
                              <td><?=$data->rt.' / '.$data->rw;?></td>
                            </tr>

                             <tr> 
                              <td>Nama Dusun</td>
                              <td>:</td>
                              <td><?=$data->nama_dusun;?></td>
                            </tr>

                             <tr> 
                              <td>Nama Kelurahan</td>
                              <td>:</td>
                              <td><?=$data->nama_kelurahan;?></td>
                            </tr>
                            <tr> 
                              <td>Nama Kecamatan</td>
                              <td>:</td>
                              <td><?=$data->kecamatan;?></td>
                            </tr>
                            <tr> 
                              <td>Kode Pos</td>
                              <td>:</td>
                              <td><?=$data->kode_pos;?></td>
                            </tr>
        
                             <tr> 
                              <td>Tempat Tinggal</td>
                              <td>:</td>
                              <td><?=$data->tempat_tinggal;?></td>
                            </tr>

                            <tr> 
                              <td>Modal Transportasi</td>
                              <td>:</td>
                              <td><?=$data->modal_transpostasi;?></td>
                            </tr>

                            <tr> 
                              <td>No KKS</td>
                              <td>:</td>
                              <td><?=$data->nomor_kks;?></td>
                            </tr>

                            <tr> 
                              <td>Anak Keberapa</td>
                              <td>:</td>
                              <td><?=$data->anak_keberapa;?></td>
                            </tr>

                            <tr> 
                              <td>Penerima KPS/KPH</td>
                              <td>:</td>
                              <td><?=$data->penerima_kps_kph.' ('.$data->no_kps_kph.')';?></td>
                            </tr>

                            <tr> 
                              <td>Penerima KIP</td>
                              <td>:</td>
                              <td><?=$data->penerima_kip.' ('.$data->nomor_kip.') '.$data->nama_tertera_di_kip;?></td>
                            </tr>

                            <tr> 
                              <td>Terima Fisik Kartu KIP</td>
                              <td>:</td>
                              <td><?=$data->terima_fisik_kartu;?></td>
                            </tr>

                            <tr> 
                              <td colspan="3"><b> ~ AYAH ~ </b></td>

                            </tr>

                            <tr> 
                              <td>NAMA AYAH</td>
                              <td>:</td>
                              <td><?=$data->nama_ayah;?></td>
                            </tr>

                            <tr> 
                              <td>NIK</td>
                              <td>:</td>
                              <td><?=$data->nik_ayah;?></td>
                            </tr>

                     
                            <tr> 
                              <td>Tahun Lahir</td>
                              <td>:</td>
                              <td><?=$data->tahun_lahir_ayah;?></td>
                            </tr>

                            <tr> 
                              <td>Pendidikan</td>
                              <td>:</td>
                              <td><?=$data->pedidikan_ayah;?></td>
                            </tr>

                            <tr> 
                              <td>Pekerjaan</td>
                              <td>:</td>
                              <td><?=$data->pekerjaan_ayah;?></td>
                            </tr>

                            <tr> 
                              <td>Penghasil Bulanan</td>
                              <td>:</td>
                              <td><?=$data->penghasilan_bulan_ayah;?></td>
                            </tr>

                            <tr> 
                              <td>Berkebutuhan Khusus</td>
                              <td>:</td>
                              <td><?=$data->berkebutuhan_khusus_ayah;?></td>
                            </tr>

                            <tr> 
                              <td colspan="3"><b> ~ IBU ~ </b></td>

                            </tr>

                            <tr> 
                              <td>NAMA IBU</td>
                              <td>:</td>
                              <td><?=$data->nama_ibu_kandung;?></td>
                            </tr>

                            <tr> 
                              <td>NIK</td>
                              <td>:</td>
                              <td><?=$data->nik_ibu;?></td>
                            </tr>

                            <tr> 
                              <td>Tahun Lahir</td>
                              <td>:</td>
                              <td><?=$data->tahun_lahir_ibu;?></td>
                            </tr>

                            <tr> 
                              <td>Pendidikan</td>
                              <td>:</td>
                              <td><?=$data->pendidikan_ibu;?></td>
                            </tr>

                            <tr> 
                              <td>Pekerjaan</td>
                              <td>:</td>
                              <td><?=$data->pekerjaan_ibu;?></td>
                            </tr>

                            <tr> 
                              <td>Penghasil Bulanan</td>
                              <td>:</td>
                              <td><?=$data->penghasilan_bulanan_ibu;?></td>
                            </tr>

                            <tr> 
                              <td>Berkebutuhan Khusus</td>
                              <td>:</td>
                              <td><?=$data->berkebutuhan_khusus_ibu;?></td>
                            </tr>

                            <tr> 
                              <td colspan="3"><b> ~ WALI ~ </b></td>

                            </tr>

                            <tr> 
                              <td>NAMA WALI</td>
                              <td>:</td>
                              <td><?=$data->nama_wali;?></td>
                            </tr>

                            <tr> 
                              <td>NIK</td>
                              <td>:</td>
                              <td><?=$data->nik_wali;?></td>
                            </tr>


                            <tr> 
                              <td>Tahun Lahir</td>
                              <td>:</td>
                              <td><?=$data->tahun_lahir_wali;?></td>
                            </tr>

                            <tr> 
                              <td>Pendidikan</td>
                              <td>:</td>
                              <td><?=$data->pendidikan_wali;?></td>
                            </tr>

                            <tr> 
                              <td>Pekerjaan</td>
                              <td>:</td>
                              <td><?=$data->pekerjaan_wali;?></td>
                            </tr>

                            <tr> 
                              <td>Penghasil Bulanan</td>
                              <td>:</td>
                              <td><?=$data->penghasilan_bulanan_wali;?></td>
                            </tr>

                             <tr> 
                              <td colspan="3"><b> ~ KONTAK ~ </b></td>

                            </tr>

                            <tr> 
                              <td>No Telepon</td>
                              <td>:</td>
                              <td><?=$data->nomor_telepon;?></td>
                            </tr>

                            <tr> 
                              <td>No HP</td>
                              <td>:</td>
                              <td><?=$data->nomor_hp;?></td>
                            </tr>

                            <tr> 
                              <td>Email</td>
                              <td>:</td>
                              <td><?=$data->email;?></td>
                            </tr>

                            <tr> 
                              <td>Pendidikan</td>
                              <td>:</td>
                              <td><?=$data->nama_lengkap;?></td>
                            </tr>

                            <tr> 
                              <td>Tinggi Badan</td>
                              <td>:</td>
                              <td><?=$data->tinggi_badan;?></td>
                            </tr>

                            <tr> 
                              <td>Berat Badan</td>
                              <td>:</td>
                              <td><?=$data->berat_badan_kg;?></td>
                            </tr>

                            <tr> 
                              <td>Jarak / Waktu Tempuh</td>
                              <td>:</td>
                              <td><?=$data->jarak_tempuh_km.' / '.$data->waktu_tempuh_ke_sekolah_jam.':'.$data->waktu_tempuh_ke_sekolah_menit;?></td>
                            </tr>

                            <tr> 
                              <td>Jumlah Saudara Kandung</td>
                              <td>:</td>
                              <td><?=$data->jumlah_saudara_kandung;?></td>
                            </tr>
                            <tr> 
                              <td>No PPDB</td>
                              <td>:</td>
                              <td><?=$data->noppdb;?></td>
                            </tr>


                           



                          </tbody>
                        </table>
                             
                        
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>