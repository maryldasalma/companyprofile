<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Playlist Gambar</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_playlistgambar',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_sampulgambar]'>
                    <tr><th width='120px' scope='row'>Judul playlist Gambar</th>   <td><input type='text' class='form-control' name='a' value='$rows[jdl_sampulgambar]'></td></tr>
                    <tr><th scope='row'>Ganti Cover</th>          <td><input type='file' class='form-control' name='b'><hr style='margin:5px'>";
                                                                   if ($rows['gbr_sampulgambar']!=''){ echo " Gambar Saat ini : <a target='_BLANK' href='".base_url()."asset/img_playlist/$rows[gbr_sampulgambar]'>$rows[gbr_sampulgambar]</a>"; } echo "</td></tr>
                    <tr><th width='120px' scope='row'>Halaman</th>   <td><input type='text' class='form-control' name='c' value='$rows[page]'></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();