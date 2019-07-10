  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sistem Informasi<small> SMA Negeri 4 Padang</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Tambah Berita
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
                <?= "<h2 style='color:red; font-style:italic;'>".$this->session->flashdata('insertberita')."</h2>"; ?>
                <div class="row">
        

                    <div class="col-lg-12">   
                    <div class="alert alert-success" role="alert" align="center">
                          <b>Daftar Berita</b>
                    </div> 
                          
                        <a href="<?= base_url().'index.php/userguru/tambahberita/tambah'; ?>" style="text-decoration: none; color: black;"><button>Tambah Berita</button></a>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Judul</th>
                              <th scope="col">Isi Berita</th>
                              <th scope="col">Kategori</th>
                              <th scope="col">Foto</th>
                              <th scope="col">Penulis</th>
                              <th scope="col">Aksi</th>

                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                          $no = 1;
                          foreach($data as $row){
                          ?>
                            <tr>
                              <th scope="row"><?= $no; ?></th>
                              <td><?= $row['judul']; ?></td>
                              <td><?= $row['isi']; ?></td>
                              <td><?= $row['id_kategori']; ?></td>
                              <td><img src="<?= base_url().'assets/images/fotoberita/'.$row['foto']; ?>" width="100px"></td>
                              <td><?= $row['tgl_posting']; ?></td>
                              <td></td>
                            </tr>
                            <?php
                            $no++;
                            }
                            ?>
            
                          </tbody>
                        </table>
                             
                        
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>