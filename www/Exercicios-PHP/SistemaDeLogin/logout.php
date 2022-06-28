<head>
    <link rel="stylesheet" href="style/logado.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap">
    <meta charset="UTF-8">
    <title>Você está logado</title>
</head>
    <body>
        <form method="post">
            <input type="submit" name="logout" value="Logout">
        </form>
    </body>
<?php

if (isset($_POST['logout'])) {
    unset($_SESSION['salvaLogin']);
}