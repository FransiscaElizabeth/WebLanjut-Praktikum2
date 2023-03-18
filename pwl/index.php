
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP programming</title>
</head>
<body>
    <nav>
        <ul>
            <li> <a href="?menu=home">Home</a></li>
            <li><a href="?menu=genre">Genre</a></li>
            <li><a href="?menu=book">Book</a></li>
        </ul>
    </nav>
    <main>
        <?php
        $navigation=filter_input(type:INPUT_GET, var_name:'menu');
        switch ($navigation){
            case 'home':
                include_once 'home.php';
                break;
            case 'genre':
                include_once 'genre.php';
                break;
            case 'book':
                include_once 'book.php';
                break;
            default:
                include_once 'home.php';
                break;
            }
        ?>
    </main>

   
</body>
</html>