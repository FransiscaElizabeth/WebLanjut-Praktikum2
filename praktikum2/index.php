<!doctype html>
<html>
<head>
    <title>Praktikum 2</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        nav{
            background-color: black;
            padding-top: 10px;
            padding-left: 30px;
            padding-bottom: 10px;
        }
        nav a{
            background-color: black;
            border-radius: 5px;
            color: white;
            font-size: 20px;
            margin-right: 10px;
            text-decoration: none;
            padding: 5px 5px 5px;
        }
        nav a:active{
            background-color: white;
            color: black;
        }
        nav a:hover{
            background-color: white;
            color: gray;
        }
    </style>
</head>
<body>
    <nav>
        <a href="?menu=home">Home</a>
        <a href="?menu=genre">Genre</a>
        <a href="?menu=book">Book</a>
    </nav>
    <main>
        <?php
        $navigation = filter_input(INPUT_GET, 'menu');
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