<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Gambar</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/tambah_gambar',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Judul Gambar</th>   <td><input type='text' class='form-control' name='b'></td></tr>
                    <tr><th scope='row'>Playlist Gambar</th>               <td><select name='a' class='form-control' required>
                                                                            <option value='' selected>- Pilih Playlist -</option>";
                                                                            foreach ($record as $row){
                                                                                echo "<option value='$row[id_playlistgambar]'>$row[jdl_playlistgambar]</option>";
                                                                            }
                    echo "</td></tr>
                    <tr><th scope='row'>Keterangan</th>                 <td><textarea id='editor1' class='form-control' name='c'></textarea></td></tr>
                    <tr><th scope='row'>Gambar</th>                     <td><input type='file' class='form-control' name='d'></td></tr>
                    <tr><th scope='row'>Tag</th>                    <td><div class='checkbox-scroll'>";
                                                                            foreach ($tag as $tag){
                                                                                echo "<span style='display:block;'><input type=checkbox value='$tag[taggambar_seo]' name=f[]> $tag[nama_taggambar] &nbsp; &nbsp; &nbsp; </span>";
                                                                            }
                    echo "</div></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();
