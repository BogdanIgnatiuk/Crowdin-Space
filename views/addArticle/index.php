<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Adding a new article</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Please, fill the filds to create an article</h1>
        <div class="addForm">
            <form action="./add" method="post">
                <div class="form-group">
                <label>
                    Name
                    <input type="text" name="title" value="" class="form-item form-control" autofocus required>
                </label>
                </div>
                <div class="form-group">
                <label>
                    Date
                    <input type="date" name="date" value="" class="form-item form-control" required>
                </label>
                </div>
                <div class="form-group">
                <label>
                    Content
                    <textarea class="form-item form-control" name="content" required cols="60" rows="10">

                    </textarea>
                </label>
                </div>
                <div class="form-group">
                
                </div>
                <input type="submit" value="Save" class="btn btn-default">
            </form>
        </div>
        <footer>
            <p>My first blog
                <br>Copiright &copy;</p>
        </footer>
    </div>
</body>

</html>