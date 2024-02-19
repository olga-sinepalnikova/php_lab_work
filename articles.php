<?php include("db_connect.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой крутой сайт номер 777</title>
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
            <table width="800" valign="top" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="180" valign="top" class="left-column">
                        <?php include("menu.php"); ?>
                    </td>
                    <td width="620" valign="top">
                        <?php 
                            $sql = "SELECT * FROM articles";
                            $result = mysqli_query($db, $sql);
                            while ($myrow = mysqli_fetch_array($result)) {?>

                            <table width="100%" class="article" align="center">
                                <tr>
                                    <td width="250">
                                        <p><a href="article.php?id=<?php echo $myrow['id'];?>"><?php echo $myrow['title'];?></a></p>
                                        <p>Дата создания: <br> <b><?php echo $myrow['date_created'];?></b></p>
                                        <p>Автор: <br> <b><?php echo $myrow['author'];?></b></p>
                                    </td>
                                    <td><?php echo $myrow['descrition'];?></td>
                                </tr>

                            </table>

                        <?php } ?>
                        
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