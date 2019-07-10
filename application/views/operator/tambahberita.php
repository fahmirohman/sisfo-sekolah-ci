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
                       <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">NISN</th>
                            <th scope="col">KELAS</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                             
                        
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>