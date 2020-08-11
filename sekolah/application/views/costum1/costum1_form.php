<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Costum1 <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Text H5 <?php echo form_error('text_h5') ?></label>
            <input type="text" class="form-control" name="text_h5" id="text_h5" placeholder="Text H5" value="<?php echo $text_h5; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Text P <?php echo form_error('text_p') ?></label>
            <input type="text" class="form-control" name="text_p" id="text_p" placeholder="Text P" value="<?php echo $text_p; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('costum1') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>