<?php include("db_connect.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель сайта</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table class="table-border" width="800" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <img src="images/logo.png" alt="">
            </td>
        </tr>
        <tr>
            <table width="800" valign="top" cellpadding="0" cellspacing="0" align="center">
                <tr>
                    <td width="180" valign="top" class="left-column">
                        <?php include("menu.php"); ?>
                    </td>
                    <td width="620" valign="top">
                        <h1>Это админ-панель сайта</h1>
                        <p>Здесб вы можете внести изменеия в содержание некоторых разделов вашего сайта</p>
                    </td>
                </tr>
            </table>
        </tr>
        <tr>
            <td ><img src="images/logo.png" alt=""></td>
        </tr>
    </table>
</body>
</html>