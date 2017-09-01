<html>
<head>
<title>Insert Data Into Database Using CodeIgniter Form</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body>

<div id="container">
<?php echo form_open('insert_ctrl'); ?>
<h1>Insert Data Into Database Using CodeIgniter</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php echo form_label('Department_Name :'); ?> <?php echo form_error('Department_Name'); ?><br />
<?php echo form_input(array('id' => 'Department_Name', 'name' => 'Department_Name')); ?><br />

<?php echo form_label('Head_of_Department :'); ?> <?php echo form_error('Head_of_Department'); ?><br />
<?php echo form_input(array('id' => 'Head_of_Department', 'name' => 'Head_of_Department')); ?><br />



<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
</body>
</html>