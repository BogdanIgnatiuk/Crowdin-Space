<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>My blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> </head>

<body>
    <div class="container">
        <h2>Blog</h2>
        <div>
             <div class="article">
                <h3><?=$newsItem['title']?></h3>
                <em>Published; <?=$newsItem['date']?></em>
                <p class="lead">
                    <?=$newsItem['content']?>
                </p>
            </div>
        </div>
        <footer>
            <p>My first blog
                <br>Copiright &copy;</p>
        </footer>
    </div>
</body>

</html>
