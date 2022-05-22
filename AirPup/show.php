<?php
require 'lib/functions.php';
$id = $_GET['id'];
$pet = get_pet($id);

?>
<?php require 'layout/header.php'; ?>

<h1>Meet <?php echo $pet['name']; ?></h1>

<div class="container">
    <div class="row">
        <div class="col-xs-3 pet-list-item">
            <img src="/images/<?php echo $pet['image'] ?>" class="pull-left img-rounded" />
        </div>
        <div class="col-xs-6">
            <p>
                <?php echo $pet['bio']; ?>
            </p>

            <table class="table">
                <tbody>
                <tr>
                    <th>Breed</th>
                    <td><?php echo $pet['breed']; ?></td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td><?php echo $pet['age']; ?></td>
                </tr>
                <tr>
                    <th>Weight</th>
                    <td><?php echo $pet['weight']; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require 'layout/footer.php'; ?>
