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
                                <i class="fa fa-dashboard"></i> Tambah Ekskul
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
                 <br/> 
                <div class="row">
        

                    <div class="col-lg-12">   
                    <div class="alert alert-success" role="alert" align="center">
                          <b>Daftar Ekstrakurikuler SMAN 4 Padang</b>
                    </div> 
                    
                   <form method ="POST" action="" class="form-inline">
                      <label class="mr-sm-2" for="inputnamaeks">Nama Ekstrakuler</label>
                      <select name="id_ekskul" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inputnamaeks">
                        <?php foreach($dkatekskul as $d => $row)
                        {?>
                        <option value=<?=$row->id_ekskul ?>><?=$row->nama_ekskul ?></option>
                        <?php } ?>

                          </select>
                           <label class="mr-sm-2" for="inputpilihan">Pilihan Ke</label>
                          <select name="pilihan_ke"class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inputpilihan">
                            <option value=1 selected>1</option>
                            <option value=2>2</option>
                          </select>
                          <input type="hidden" name="nama_lengkap" value="<?=$_SESSION['nama_siswa']; ?>">
                          <input type="hidden" name="nisn" value="<?=$_SESSION['nisn_siswa']; ?>">
                          <input type="hidden" name="tahun_pelajaran" value="<?=date('Y'); ?>">




                          <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
                        </form>


                        <br/><br/><br/>
        
                             
                        
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>