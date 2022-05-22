<?php
require 'lib/functions.php';
?>
<?php require 'layout/header.php'; ?>

<h1>
    Helping you find your new best friend from over <?php echo count(get_pets()); ?> pets.
</h1>

<?php require 'layout/footer.php'; ?>
