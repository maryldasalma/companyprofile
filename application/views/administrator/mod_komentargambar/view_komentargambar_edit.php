<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Komentar Gambar</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/edit_komentargambar',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_komentargambar]'>
                    <tr><th width='120px' scope='row'>Nama Komentar Gambar</th>    <td><input type='text' class='form-control' name='a' value='$rows[nama_komentargambar]'></td></tr>
                    <tr><th scope='row'>Email</th>    <td><input type='text' class='form-control' name='b' value='$rows[url]'></td></tr>
                    <tr><th scope='row'>Isi Komentar Gambar</th>             <td><textarea class='form-control' name='c' style='height:200px'>$rows[isi_komentargambar]</textarea></td></tr>
                    <tr><th scope='row'>Aktif</th>    <td>"; if ($rows['aktif']=='Y'){ echo "<input type='radio' name='d' value='Y' checked> Ya <input type='radio' name='d' value='N'> Tidak"; }else{ echo "<input type='radio' name='d' value='Y'> Ya <input type='radio' name='d' value='N' checked> Tidak"; } echo "</td></tr>

                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();