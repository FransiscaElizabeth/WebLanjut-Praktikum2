<?php
    $link = new PDO('mysql host:localhost; dbname = pwl20222', 'root', '');
    $link -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $link -> setAttribute(PDO::ATTR_AUTOCOMMIT, false);
    $query = 'SELECT id, name FROM genre';
    $stmt = $link->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $link = null
?>
<table>
    <thead>
    <th>ID</th>
    <th>GENRE</th>
    </thead>
    <tbody>
    <?php
    foreach ($result as $genre){
        echo '<tr>';
        echo '<td>' . $genre['id'] . '<td>';
        echo '<td>' . $genre['name'] . '<td>';
    }
    ?>
    </tbody>
</table>