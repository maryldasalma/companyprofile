<div class='col-md-12'>
    <div class='box box-info'>
        <div class='box-header with-border'>
            <h3 class='box-title'>History Information</h3>
        </div>
        <div class='box-body'>
            <?php echo form_open('administrator/history', array('class'=>'form-horizontal','role'=>'form')); ?>
            <div class='col-md-12'>
                <table class='table table-condensed table-bordered'>
                    <tbody>
                        <input type='hidden' name='id' value='<?php echo $record['id']; ?>'>
                        <tr>
                            <th scope='row'>History</th>
                            <td><textarea id='editor1' class='form-control' name='a'><?php echo $record['history']; ?></textarea></td>
                        </tr>
                        <tr>
                            <th scope='row'>Logo</th>
                            <td><textarea id='editor2' class='form-control' name='b'><?php echo $record['logo']; ?></textarea></td>
                        </tr>
                        <tr>
                            <th width='120px' scope='row'>Pemilik</th>
                            <td><input type='text' class='form-control' name='c' value='<?php echo $record['pemilik']; ?>'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Jenis</th>
                            <td><input type='text' class='form-control' name='d' value='<?php echo $record['jenis']; ?>'></td>
                        </tr>  
                        <tr>
                            <th scope='row'>Tanggal Didirikan</th>
                            <td><input type='text' class='form-control' name='e' value='<?php echo $record['tanggal']; ?>'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Twitter</th>
                            <td><input type='text' class='form-control' name='f' value='<?php echo $record['twitter']; ?>'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Facebook</th>
                            <td><input type='text' class='form-control' name='g' value='<?php echo $record['facebook']; ?>'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Instagram</th>
                            <td><input type='text' class='form-control' name='h' value='<?php echo $record['instagram']; ?>'></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class='box-footer'>
                <button type='submit' name='submit' class='btn btn-info'>Update</button>
                <a href='index.php'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
