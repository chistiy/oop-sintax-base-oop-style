
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
    <input name="myActionName" type="submit" value="повысить" />

</form>
<button> понизить</button>
<div>Переменная из php:
    <span><?php var_dump($rank); ?></span>
</div>
</body>
</html>
