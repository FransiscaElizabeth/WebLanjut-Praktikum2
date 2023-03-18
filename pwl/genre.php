<?php
$submitPressed= filter_input(type: INPUT_POST,var_name:'btnSave');
if (isset($submitPressed)) {
    $name = filter_input(type:INPUT_POST, var_name:'txtName');
    if (trim($name) =' ' ) {
        echo '<div>Please provide with a valid name</div>';
    }   else {
        $link = new PDO(dsn:'mysql:host=localhost;dbname=pwl20222', username:'root', password:'');
        $link->setAttribute(attribute: PDO :: ATTR_ERRMODE, value:PDO :: ERRMODE_EXCEPTION);
        $link->setAttribute(attribute: PDO :: ATTR_AUTOCOMMIT,value:false);
        $query = 'INSERT INTO genre(name) VALUES(?)';
        $stmt = $link->prepare($query);
        $stmt->bindParam(param:1, $name);
       
        if ($stmt->execute()) {
            $link->commit();
        }   else{
            $link->rollBack();
        }
        $link=null;
    }
}

$link = new PDO(dsn:'mysql:host=localhost;dbname=pwl20222', username:'root', password:'');
$link->setAttribute(attribute: PDO :: ATTR_ERRMODE, value:PDO :: ERRMODE_EXCEPTION);
$link->setAttribute(attribute: PDO :: ATTR_AUTOCOMMIT,value:false);
$query = 'SELECT id, name FROM genre';
$stmt = $link->prepare($query);
$stmt-> execute();
$result = $stmt ->fetchAll();
$link= null;
?>
<form method="post" >
    <label for="txtName">Genre Name</label>
    <input type="text" maxlength="45" placeholder="Genre Name" required autofocus name="txtName" id="txtName">
    <input type="submit" value="Save Data" name="btnSave">
</form>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($result as $genre){
        echo '<tr>';
        echo '<td>'. $genre ['id']. '</td>';
        echo '<td>'. $genre ['name']. '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>

</table>
