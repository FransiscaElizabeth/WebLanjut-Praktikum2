<?php
$link = new PDO(dsn:'mysql:host=localhost;dbname=pwl20222', username:'root', password:'');
$link->setAttribute(attribute: PDO :: ATTR_ERRMODE, value:PDO :: ERRMODE_EXCEPTION);
$link->setAttribute(attribute: PDO :: ATTR_AUTOCOMMIT,value:false);
$query = 'SELECT isbn, title,author,publisher,publisher_year,short_description, cover FROM book';
$stmt = $link->prepare($query);
$stmt-> execute();
$result = $stmt ->fetchAll();
$link= null;
?>
<table>
    <thead>
    <tr>
        <th>ISBN</th>
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>PUBLISHER</th>
        <th>PUBLISHER YEAR</th>
        <th>SHORT DESCRIPTION</th>
        <th>COVER</th>

    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($result as $book){
        echo '<tr>';
        echo '<td>'. $book ['isbn']. '</td>';
        echo '<td>'. $book ['title']. '</td>';
        echo '<td>'. $book ['author']. '</td>';
        echo '<td>'. $book ['publisher']. '</td>';
        echo '<td>'. $book ['publisher_year']. '</td>';
        echo '<td>'. $book ['short_description']. '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>

</table>
