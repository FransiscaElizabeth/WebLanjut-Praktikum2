<?php
    $link = new PDO('mysql host:localhost; dbname = pwl20222', 'root', '');
    $link -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $link -> setAttribute(PDO::ATTR_AUTOCOMMIT, false);
    $query = 'SELECT book.isbn, book.title, book.author, book.publisher, book.publish_year, genre.name FROM book JOIN genre ON book.genre_id=genre.id';
    $stmt = $link->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $link = null
?>
<table>
    <thead>
        <th>ISBN</th>
        <th>Title</th>
        <th>ISBN</th>
        <th>Title</th>
        <th>ISBN</th>
        <th>Title</th>
    </thead>
    <tbody>
    <?php
    foreach ($result as $book){
        echo '<tr>';
        echo '<td>' . $book['isbn'] . '<td>';
        echo '<td>' . $book['title'] . '<td>';
        echo '<td>' . $book['author'] . '<td>';
        echo '<td>' . $book['publisher'] . '<td>';
        echo '<td>' . $book['publish_year'] . '<td>';
    }
    foreach ($result as $genre){
        echo '<tr>';
        echo '<td>' . $genre['name'] . '<td>';
    }
    ?>
    </tbody>
</table>
