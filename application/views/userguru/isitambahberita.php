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
                 <br/> 
                <div class="row">
        

                    <div class="col-lg-12">   
                    <div class="alert alert-success" role="alert" align="center">
                          <b>Tambah Berita Website SMAN 4 Padang</b>
                    </div> 
                    
                    <form action="" method="POST" name="daftar_berita" enctype="multipart/form-data">
                    <table border="0">
                    <tr><td><label for="kategoriBerita">Kategori Berita</label></td><td>: </td><td><select name="ketegori_berita" id="kategoriBerita">
                    <option value=1>Berita</option>
                    <option value=2>Info Sekolah</option>
                    <option value=3>Pengumuman</option>
                    </select>
                    </td></tr>
                    <tr><td><label for="judulBerita">judul Berita</label></td><td>:</td><td><input type="text" name="judul" id="judulBerita" size="100"></td></tr>

                    <tr><td><label for="isi"><b>Isi</b></label></td><td>:</td><td><textarea name="isi" cols="80" rows="30" id="isi" id ="isiberita"></textarea></td></tr>
                    <tr>
                      <td>
                        <label for="fotoBerita">Foto Berita</label>
                      </td>
                      <td>: 
                      </td>
                      <td>
                          <input type="file" name="foto" id="fotoBerita">
                      </td>
                    </tr>
                    <tr><td></td><td></td><td></td></tr>

                    <tr><td></td><td></td><td><button type="submit" name="insertBerita" value="berita">Upload Berita</button> <button type="reset">Reset</button></td></tr>


                    </table>
                    </form>
        
                             
                        
                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>