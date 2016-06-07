<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>My blog</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
</head>

<body>
    <div class="container">
        <h1>My blog</h1>
        <hr>
        <div>
            <?php foreach ($newsList as $article): ?>
                <div class="article" style="margin-top: 30px; margin-bottom: 30px;">
                    <h3><a href="articles/<?=$article['id']?>"><?=$article['title']?></a></h1>
                <em>Published: <?=$article['date']?></em>
                <p>
                    
                    <?=$article['content']?>
                </p>
                
            </div>
             <?php endforeach ?>
             <a href="addForm">Add an article</a>
        </div>
        <hr>
        <footer style="text-align: center">
            My first blog
                <br>Copyright &copy;
        </footer>
    </div>
</body>
</html>
