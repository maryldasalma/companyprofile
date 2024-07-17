<?php 
echo "<div class='col-md-12'>
          <div class='box box-info'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Edit Daftar Gambar</h3>
            </div>
          <div class='box-body'>";
          $attributes = array('class'=>'form-horizontal','role'=>'form');
          echo form_open_multipart('administrator/edit_daftargambar', $attributes); 
      echo "<div class='col-md-12'>
              <table class='table table-condensed table-bordered'>
              <tbody>
                <input type='hidden' name='id' value='$rows[id_daftargambar]'>
                <tr><th width='120px' scope='row'>Judul Daftar Gambar</th>   <td><input type='text' class='form-control' name='a' value='$rows[jdl_daftargambar]'></td></tr>
                <tr><th width='120px' scope='row'>Kategori</th>             <td><input type='text' class='form-control' name='kategori' value='$rows[kategori]'></td></tr>
                <tr><th scope='row'>Ganti Cover</th>                        <td><input type='file' class='form-control' name='b'><hr style='margin:5px'>";
                                                                       if ($rows['gbr_daftargambar'] != '') { 
                                                                          echo "Gambar Saat ini : <a target='_BLANK' href='".base_url()."asset/img_daftargambar/$rows[gbr_daftargambar]'>$rows[gbr_daftargambar]</a>"; 
                                                                       } 
                                                                       echo "</td></tr>
              </tbody>
              </table>
            </div>
          
          <div class='box-footer'>
                <button type='submit' name='submit' class='btn btn-info'>Update</button>
                <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                
              </div>
        </div></div></div>";
echo form_close();
?>
