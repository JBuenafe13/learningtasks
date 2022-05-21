<?php
$show = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>My page</title>
        <link rel="stylesheet" type="text/css"
              href="Stylesheet.css"/>
    </head>
    <body>
        <div id="wrapper">
        <div id="LM">
            <div id ="logo">
                <a href="roan.php">
                <img src="kiran.png"
                     title="logo" alt="logo"/></a>
            </div>
            <div id="NAV">
                <ul>
                    <li><a href="roan.php?subpage=2">Learning Task 2</a></li>
                    <li><a href="roan.php?subpage=3">Learning task 3</a></li>
                    <li><a href="roan.php?subpage=CLE">CLE Midterm</a></li>
                    <li><a href="roan.php?subpage=4">Learning Task 4</a></li>
                    <li><a href="roan.php?subpage=5">Learning Task 5</a></li>
                </ul>
            </div>
        </div>
            <div id="contents">
                <?php
                switch($show ){
                    case '2':
                    include_once 'Homepage.html';
                        break;
                    case '3':
                    include_once '10 Favorites.html';
                        break;
                    case 'CLE':
                    include_once 'Home.html';
                        break;
                    case '4':
                    include_once 'Index.html';
                        break;
                    case '5':
                    include_once 'Java.html';
                        break;
                    default:
                    include_once 'main.php';
                }
                ?>
            </div>
        </div>
    </body>
</html>
