<!--
   Loan management frame.
   included in: borrows.php 
-->

<?php
    if(!defined('DirectAccess')) {
        header("location:borrows.php");
    }

    include('encryption.php');

    $cryption = new EncryptDecrypt();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $memberID = $_POST['inputMemberID'];
        $bookID = $_POST['inputBookID'];
        $date = date("d.m.Y G:i");
        
        $insertBook = $pdo->prepare('INSERT INTO loaned_books SET book_id = :inputBookID, personnel_id = 1, member_id = :memberID, date_of_issue = :date');
        $insertBook->execute(array('inputBookID' => $bookID, 'memberID' => $memberID, 'date'=> $date));

        $updateBookStatus = $pdo->prepare('UPDATE books SET is_issued = 1 WHERE book_id = :inputBookID');
        $updateBookStatus->execute(array('inputBookID'=> $bookID));
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
                <legend>Borrows</legend>
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Member Name</th>
                        <th scope="col">Lent Book</th>
                        <th scope="col">Date of Issue</th>
                        <th scope="col"></th>
                    </thead>
                    <tbody>
                        <?php 
                            $query = $pdo->prepare('SELECT loaned_books.transaction_id, loaned_books.book_id, loaned_books.personnel_id, 
                                                        loaned_books.member_id, loaned_books.date_of_issue, loaned_books.date_of_return, 
                                                        books.book, members.member_name, personnel.personnel_login 
                                                        FROM loaned_books LEFT JOIN members on loaned_books.member_id = members.member_id 
                                                        LEFT JOIN books on loaned_books.book_id = books.book_id 
                                                        LEFT JOIN personnel on loaned_books.personnel_id = personnel.personnel_id 
                                                        WHERE books.is_issued = 1 AND loaned_books.date_of_return = ""');
                            
                            $query->execute();

                            while($result = $query->fetch()) {
                                ?>
                                <tr>
                                    <th scope="row"><?php static $i = 1; echo $i; $i++; ?></th>
                                    <td>
                                        <?php 
                                            echo $cryption->abbreviateName($result['member_name']);
                                        ?>
                                    </td>
                                    <td><?php echo $result['book']?></td>
                                    <td><?php echo $result['date_of_issue']?></td>
                                    <td class="text-center"><a class="text-primary" href="update_book_status.php?book_id=<?php echo $result['book_id']; ?>">Return</a></td>
                                </tr>
                                <?php
                            }
                        ?>
                        
                        <tr>
                            <th scope="row"></th>
                            <td><select name="inputMemberID" class="form-control" id="inputMemberID" required>
                                    <?php
                                        $query = $pdo->prepare('SELECT member_id, member_name, is_active FROM members WHERE is_active = 1');
                                        $query->execute();
                                        
                                        while($result = $query->fetch()){
                                            $name = $cryption->abbreviateName($result['member_name']);
                                            ?>
                                            <option value="<?=$result['member_id'];?>"><?=$name; ?> </option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <select name="inputBookID" class="form-control" id="inputBookID" required>
                                    <?php
                                        $query = $pdo->prepare('SELECT book_id, book, is_issued FROM books WHERE is_issued = 0');
                                        $query->execute();
                                        
                                        while($result = $query->fetch()){
                                            ?>
                                            <option value="<?=$result['book_id'];?>"><?=$result['book']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </td>
                            <td><input class="form-control" type="text" placeholder="<?=date("d.m.Y G:i"); ?>" readonly></td>
                            <td><input type="submit" class="btn btn-primary btn-block" value="Add" /><br /></td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>
    </div>
</body>