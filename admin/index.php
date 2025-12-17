<?php
    require '../includes/functions.php';
    includeTemplate('header');
?>

    <main class="container section">
        <h1>Admin Panel</h1>

        <a href="/admin/properties/create.php" class="button-green">Create</a>
        <a href="/admin/properties/read.php" class="button-green">Read</a>
        <a href="/admin/properties/update.php" class="button-green">Update</a>
        <a href="/admin/properties/delete.php" class="button-green">Delete</a>

    </main>

<?php includeTemplate('footer'); ?>