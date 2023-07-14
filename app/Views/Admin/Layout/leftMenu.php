<?php
$request_uri = $_SERVER['REQUEST_URI'];
$last_directory = basename($request_uri);
?>

<div class="sideNavbar">
    <span>Main Menu</span>
    <a href="admin/" class="<?php echo $last_directory == 'admin' ? 'active' : '' ?>">Stores</a>
    <a href="admin/document" class="<?php echo $last_directory == 'document' ? 'active' : '' ?>">Documents</a>
    <a href="admin/employee" class="<?php echo $last_directory == 'employee' ? 'active' : '' ?>">Employees</a>
</div>

<div class="sideNavbar">
    <a href="admin/signout" class="<?php echo $last_directory == 'signout' ? 'active' : '' ?>">Log Out</a>
</div>
