  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Manajemen Siswa <small> SMA Negeri 4 Padang</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Manajemen Siswa
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
                          
                        <form class="form-inline">
                          <div class="form-group">
                            <label for="inputsearch">Password</label>
                            <input type="text" id="inputsearch" class="form-control" placeholder="Search">
                            <small id="passwordHelpInline" class="text-muted">
                             masukan Nama, NISN atau NO PPDB
                            </small>
                          </div>
                        </form>
                      <div id="containertable">
                       <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">NISN</th>
                            <th scope="col">NO PPDB</th>
                            <th scope="col">AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                          foreach($siswa as $d => $row):
                        ?>
                          <tr>
                            <th scope="row"><?=$no++;?></th>
                            <td><?=$row->nama_lengkap;?></td>
                            <td><?=$row->nisn;?></td>
                            <td><?=$row->noppdb;?></td>
                            <td><a href="<?=base_url().'index.php/operator/detailsiswa';?>" class="btn btn-primary" role="button" aria-pressed="true">Detail</a> <a href="<?=base_url().'index.php/operator/delsiswa';?>" class="btn btn-danger" role="button" aria-pressed="true">Delete</a></td>
                          </tr>
                         <?php
                          endforeach;
                         ?>
                        </tbody>
                        </table>
                      </div>
                        
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>