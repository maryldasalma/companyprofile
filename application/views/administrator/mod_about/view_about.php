<div class='col-md-12'>
    <div class='box box-info'>
        <div class='box-header with-border'>
            <h3 class='box-title'>About Information</h3>
        </div>
        <div class='box-body'>
            <?php echo form_open('administrator/about', array('class'=>'form-horizontal','role'=>'form')); ?>
            <div class='col-md-12'>
                <table class='table table-condensed table-bordered'>
                    <tbody>
                        <input type='hidden' name='id' value='<?php echo $record['id']; ?>'>
                        <tr>
                            <th width='120px' scope='row'>Tagline</th>
                            <td><input type='text' class='form-control' name='a' value='<?php echo $record['tagline']; ?>'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Title</th>
                            <td><input type='text' class='form-control' name='b' value='<?php echo $record['title']; ?>'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Text</th>
                            <td><textarea id='editor1' class='form-control' name='c'><?php echo $record['text']; ?></textarea></td>
                        </tr>
                        <tr>
                            <th scope='row'>Motto</th>
                            <td><input type='text' class='form-control' name='d' value='<?php echo $record['motto']; ?>'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Visi</th>
                            <td><textarea id='editor2' class='form-control' name='e'><?php echo $record['vision']; ?></textarea></td>
                        </tr>
                        <tr>
                            <th scope='row'>Misi</th>
                            <td><textarea id='editor3' class='form-control' name='f'><?php echo $record['mission']; ?></textarea></td>
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
