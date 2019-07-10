  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Ekstrakurikuler<small> SMA Negeri 4 Padang</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Ekstrakurikuler
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
                    <div class="alert alert-success" role="alert">
                          [1]. Silahkan pilih Ekskul Maksimal 2<br/>
                          [2]. Ikuti Ekskul yang anda pilih dengan sungguh-sungguh
                    </div> 
                    <?php
                      echo "<h4 style='font-style:italic; color:red'>".$this->session->flashdata('pesanpemilihaneks')."</h4>";
                    ?>
                          
                        <a href="<?= base_url().'siswa/ekskul/tambahekskul'; ?>" style="text-decoration: none; color: black;"><button>Daftar Ekskul</button></a>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Ekskul</th>
                              <th scope="col">Pilihan</th>
                              <th scope="col">Pembina</th>
                              <th scope="col">Pelatih</th>
                              <th scope="col">Kehadiran</th>
                              <th scope="col">Aksi</th>
                            </tr>
                            <?php 
                            $no = 1;
                            foreach($data as $d => $row) {?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$row->nama_ekskul;?></td>
                                <td><?=$row->pilihan_ke;?></td>
                                <td><?=$row->nama_pembina;?></td>
                                <td><?=$row->nama_pelatih;?></td>
                                <td></td>
                                <td><a href="<?=base_url().'siswa/delekskul/'.$row->id_pemilihan_ekskul;?>" onclick="return confirm('Apakah Anda Yakin untuk Menghapus <?=$row->nama_ekskul;?>')"><button>hapus</button></a></td>
                            </tr>


                            <?php } ?>
                          </thead>
                          <tbody>
                         <!-- isi table -->
            
                          </tbody>
                        </table>
                             
                        
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>