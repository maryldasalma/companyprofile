<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Gambar</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_gambar',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_gambar]'>
                    <tr><th width='120px' scope='row'>Judul Gambar</th>  <td><input type='text' class='form-control' name='b' value='$rows[jdl_gambar]'></td></tr>
                    <tr><th scope='row'>Playlist</th>                   <td><select name='a' class='form-control' required>
                                                                            <option value='' selected>- Pilih Playlist -</option>";
                                                                            foreach ($record as $row){
                                                                              if ($rows['id_playlistgambar']==$row['id_playlistgambar']){
                                                                                echo "<option value='$row[id_playlistgambar]' selected>$row[jdl_playlistgambar]</option>";
                                                                              }else{
                                                                                echo "<option value='$row[id_playlistgambar]'>$row[jdl_playlistgambar]</option>";
                                                                              }
                                                                            }
                    echo "</td></tr>
                    <tr><th scope='row'>Keterangan</th>                 <td><textarea id='editor1' class='form-control' name='c'>$rows[keterangan]</textarea></td></tr>
                    <tr><th scope='row'>Gambar</th>                     <td><input type='file' class='form-control' name='d'>";
                                                                            if ($rows['gbr_gambar']!=''){ echo " Gambar Saat ini : <a target='_BLANK' href='".base_url()."asset/img_video/$rows[gbr_gambar]'>$rows[gbr_gambar]</a>"; } echo "</td></tr>
                    <tr><th scope='row'>Tag</th>                        <td><div class='checkbox-scroll'>";
                                                                            $_arrNilai = explode(',', $rows['taggambar']);
                                                                            foreach ($tag as $tag){
                                                                                $_ck = (array_search($tag['taggambar_seo'], $_arrNilai) === false)? '' : 'checked';
                                                                                echo "<span style='display:block;'><input type=checkbox value='$tag[taggambar_seo]' name=f[] $_ck> $tag[nama_taggambar] &nbsp; &nbsp; &nbsp; </span>";
                                                                            }
                    echo "</div></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();