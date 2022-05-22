<!--
    Member management frame.
    included in: members.php
-->

<?php
    if(!defined('DirectAccess')) {
        header("location:members.php");
    }

    include('encryption.php');
    $cryption = new EncryptDecrypt();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $cryption->encrypt($_POST['memberName']);

        $queryCheckMember = $pdo->prepare('SELECT member_id FROM members WHERE member_name = :memberName');
        $queryCheckMember->bindParam('memberName', $name);
        $queryCheckMember->execute();

        $count = $queryCheckMember->rowCount();
        
        if($count < 1){
            $insert_kullanici = $pdo->prepare('INSERT INTO members SET member_name = :memberName');
            $insert_kullanici->bindParam('memberName', $name);
            $insert_kullanici->execute();
        }
    }
?>

<head>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery.js"></script>   
    <script src="assets/js/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <fieldset>
                <legend>Members</legend>
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Member Name</th>
                        <th scope="col"></th>
                    </thead>
                    <tbody>
                        <?php 
                            $query = $pdo->prepare('SELECT * FROM members');
                            $query->execute();

                            while($result = $query->fetch()) {
                                ?>
                                <tr>
                                    <th scope="row"><?php static $i = 1; echo $i; $i++; ?></th>
                                    <td>
                                        <?php 
                                            $name = $cryption->abbreviateName($result['member_name']);
                                            echo $name;
                                        ?>
                                    </td>
                                    <?php 
                                    
                                    if ($result['is_active'] == 0){
                                        ?>
                                            <td class="text-center"><a class="text-primary" href="update_membership.php?method=activate&member_id=<?php echo $result['member_id']; ?>">Activate</a></td>
                                        <?php
                                    } else {
                                        ?>
                                            <td class="text-center"><a class="text-danger" href="update_membership.php?method=deactivate&member_id=<?php echo $result['member_id']; ?>">Deactivate</a></td>
                                        <?php 
                                    } 
                                    ?>
                                </tr>
                                <?php
                            }
                        ?>
                        
                        <tr>
                            <th scope="row"></th>
                            <td><input name="memberName" type="text" class="form-control" id="memberName" required placeholder="Member Name" maxlength="50"></td>
                            <td><input type="submit" class="btn btn-primary btn-block" value="Add" /><br /></td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>
    </div>
</body>