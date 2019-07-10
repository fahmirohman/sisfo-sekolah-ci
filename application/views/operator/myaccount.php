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
                                <i class="fa fa-dashboard"></i> My Account
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

                <div class="row">
                <div class="col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            <br/>
                            </div>
                           
                                <div class="panel-footer">
                                <img src="<?php echo base_url().'assets/images/fotoguru/'.$data['foto'] ?>"" width="200px">
                                </div>
                        </div>
                </div>

                    <div class="col-lg-9">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            <br/>
                            </div>
                           
                                <div class="panel-footer">
                                    <table class="table">
                                      <tbody>
                                        <tr>
                                        
                                          <td>Nama</td>
                                          <td>:</td>
                                          <td><?= $data['nama_lengkap']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>NIP</td>
                                          <td>:</td>
                                          <td><?= $data['nip']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Guru Mapel</td>
                                          <td>:</td>
                                          <td><?= $data['nama_pelajaran']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Status Kepegawaian</td>
                                          <td>:</td>
                                          <td><?= $data['status_kepegawaian']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Tempat / Tanggal Lahir</td>
                                          <td>:</td>
                                          <td><?= $data['nama_pelajaran'].' / '.$data['tgl_lahir']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Jenis Kelamin</td>
                                          <td>:</td>
                                          <td><?= $data['jenis_kelamin']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Alamat</td>
                                          <td>:</td>
                                          <td><?= $data['alamat']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>No HP</td>
                                          <td>:</td>
                                          <td><?= $data['no_hp']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Email</td>
                                          <td>:</td>
                                          <td><?= $data['email']; ?></td>
                                        </tr>




                                      </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>