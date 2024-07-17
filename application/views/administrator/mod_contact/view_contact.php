<div class='col-md-12'>
    <div class='box box-info'>
        <div class='box-header with-border'>
            <h3 class='box-title'>Contact Information</h3>
        </div>
        <div class='box-body'>
            <?php echo form_open('administrator/contact', array('class'=>'form-horizontal','role'=>'form')); ?>
            <div class='col-md-12'>
                <table class='table table-condensed table-bordered'>
                    <tbody>
                        <input type='hidden' name='id' value='<?php echo $record['id']; ?>'>
                        <tr>
                            <th width='120px' scope='row'>About</th>
                            <td><input type='text' class='form-control' name='a' value='<?php echo $record['about']; ?>'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Address</th>
                            <td><input type='text' class='form-control' name='b' value='<?php echo $record['address']; ?>'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Contact</th>
                            <td><input type='text' class='form-control' name='c' value='<?php echo $record['contact']; ?>'></td>
                        </tr>
                        <tr>
                            <th scope='row'>Google Maps</th>
                            <td><input type='text' class='form-control' name='d' value='<?php echo $record['gmaps']; ?>'></td>
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
