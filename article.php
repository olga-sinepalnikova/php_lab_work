<?php include("db_connect.php");
if (isset($_REQUEST["id"])) {
    $id = intval($_REQUEST["id"]);
    $sql = "SELECT * FROM articles WHERE id = $id";
    $result = mysqli_query($db, $sql);
    $myrow = mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $myrow['metadescription'];?>">
    <meta name="keywords" content="<?php echo $myrow['metakeywords'];?>">
    <title><?php echo $myrow['title'];?></title>
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
                        <h1><?php echo $myrow['title'];?></h1>
                        <p>Дата создания: <br> <b><?php echo $myrow['date_created'];?></b></p>
                        <p>Автор: <br> <b><?php echo $myrow['author'];?></b></p>
                        <?php echo $myrow['text'];?>
                        <p><a href="questions.php?id=<?php echo $myrow["id"]?>">Перейти к опросам</a></p>
                    </td>
                </tr>
            </table>
        </tr>
        <tr>
            <td><img src="images/logo.png" alt=""></td>
        </tr>
    </table>
</body>
</html>