<!DOCTYPE html>
<html>
<head>
<title>CI Example</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/mystyle.css'); ?> ">
</head>
<body>

<h1>This is the CodeIgniter Example.</h1>
<ul>
            <li><a href="<?php echo site_url('customer/main'); ?>">Main Page</a></li>
            <li><a href="<?php echo site_url('customer/show_customers'); ?>">Show Customers</a></li>
            <li><a href="<?php echo site_url('customer/add_customers'); ?>">Add Customers</a></li>
            <li><a href="<?php echo site_url('customer/delete_customers'); ?>">Delete Customers</a></li>
            <li><a href="<?php echo site_url('customer/update_customers'); ?>">Update Customers</a></li>
            <li><a href="">New .....</a></li>
    </ul>

</body>
</html>