  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            SPP <small> SMA Negeri 4 Padang</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> SPP
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
                          [1]. <br/>
                          [2]. Ikuti Ekskul yang anda pilih dengan sungguh-sungguh
                    </div> 
                    <?php
                      echo "<h4 style='font-style:italic; color:red'>".$this->session->flashdata('pesanpemilihaneks')."</h4>";
                    ?>
                      <form>
                        <div class="form-group col-md-4">
                          <label for="inputState">Tahun Pelajaran</label>
                          <select id="inputState" class="form-control">
                            <option selected>2017/2018</option>
                            <option>2016/2017</option>
                          </select>
                      </form>
                      </div>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Bulan Pembayaran</th>
                              <th scope="col">Tanggal Pembayaran</th>
                              <th scope="col">Nama Bendahara</th>
                              <th scope="col">Bukti Pembayaran</th>
                            </tr>
                           
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