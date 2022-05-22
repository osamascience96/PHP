<!--
    Book management frame.
    included in: books.php
-->

<?php
// Prevents direct access to this file
if (!defined('DirectAccess')) {
    header("location:books.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book = $_POST['inputBook'];
    $author = $_POST['inputAuthor'];
    $category = $_POST['inputCategory'];
    $ISBN = $_POST['inputISBN'];

    $query = $pdo->prepare('INSERT INTO books SET book = :inputBook, category_id = :inputCategory, author = :inputAuthor, ISBN = :inputISBN');
    $query->execute(array('inputBook' => $book, 'inputCategory' => $category, 'inputAuthor' => $author, 'inputISBN' => $ISBN));
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
            <legend>Books</legend>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book</th>
                    <th scope="col">Author</th>
                    <th scope="col">Category</th>
                    <th scope="col">ISBN</th>
                    <th scope="col"></th>
                </tr>
                </thead>

                <tbody>
                <?php
                $query = $pdo->prepare('SELECT books.book_id, books.book, 
                                                        books.author,books.category_id, 
                                                        books.ISBN, categories.category 
                                                        FROM books LEFT JOIN categories on 
                                                        books.category_id=categories.category_id');

                $query->execute();

                while ($result = $query->fetch()) {
                    ?>
                    <tr>
                        <th scope="row"><?php static $i = 1;
                            echo $i;
                            $i++; ?></th>
                        <td><?php echo $result['book'] ?></td>
                        <td><?php echo $result['author'] ?></td>
                        <td><?php echo $result['category'] ?></td>
                        <td><?php echo $result['ISBN'] ?></td>
                        <td class="text-center">
                            <?php if (isset($_SESSION['admin'])) { ?>
                                <a class="text-danger" href="delete_book.php?book_id=<?php echo $result['book_id']; ?>">Delete</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                <?php if (isset($_SESSION['admin'])) { ?>
                    <tr>
                        <th scope="row"></th>
                        <td><input name="inputBook" type="text" class="form-control" id="inputBook" required placeholder="Book" maxlength="100"></td>
                        <td><input name="inputAuthor" type="text" class="form-control" id="inputAuthor" required placeholder="Author" maxlength="50"></td>
                        <td>
                            <select name="inputCategory" class="form-control" id="inputCategory" required>
                                <?php
                                $query = $pdo->prepare('SELECT category, category_id FROM categories');
                                $query->execute();

                                while ($category = $query->fetch()) {
                                    ?>
                                    <option value="<?= $category['category_id']; ?>"><?= $category['category']; ?> </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td><input name="inputISBN" type="text" class="form-control" id="inputISBN" required placeholder="ISBN" maxlength="10" pattern="[0-9]*"></td>
                        <td><input type="submit" class="btn btn-primary btn-block" value="Add"/></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </fieldset>
    </form>
</div>
</body>