<?php include("db_connect.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевая книга: место для обсуждения</title>
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
            <table width="800" valign="top" cellpadding="0" cellspacing="0"  align="center">
                <tr>
                    <td width="180" valign="top" class="left-column">
                        <?php include("menu.php"); ?>
                    </td>
                    <td width="620" valign="top">
                                <h1>Гостевая книга: место для обсуждения</h1>
                        <?php 
                            $sql = "SELECT * FROM guest_book ORDER BY date_created DESC";
                            $result = mysqli_query($db, $sql);
                            while ($myrow = mysqli_fetch_array($result)) {?>

                            <table width="100%" class="article" align="center">
                                <tr>
                                    <td width="250">
                                        <p>Сообщение от: <br> <b><?php echo $myrow['name'];?></b></p>
                                        <p>Связаться:<a href="mailto:<?php echo $myrow['email'];?>"> <br> <b><?php echo $myrow['email'];?></b></a></p>
                                        <p><a href="article.php?id=<?php echo $myrow['id'];?>"><?php echo $myrow['title'];?></a></p>
                                        <p>Дата создания: <br> <b><?php echo $myrow['date_created'];?></b></p>
                                        
                                    </td>
                                    <td>
                                        <b> Сообщение: </b>
                                        <?php echo $myrow['message'];?>
                                        <a href="guest_book_handler.php?task=delete&id=<?php echo $myrow["id"]?>"><img src="images/close.png" alt="Удалить сообщение" width="30" align="right"></a>
                                    </td>
                                </tr>

                            </table>

                        <?php } ?>
                        <form action="guest_book_handler.php?task=send" method="post">
                            <p>Ваше имя<br/><input type="text" name="name" /></p>
                            <p>Ваш email<br/><input type="text" name="email" /></p>
                            <p>Ваше сообщение<br/><textarea name="message" rows="5" cols="30"></textarea></p>
                            <p><input type="submit" name="button" value="Отправить"></p>
                        </form>
                    </td>
                </tr>
            </table>
        </tr>
        <tr align="center">
            <td align="center"><img align="center" src="images/logo.png" alt=""></td>
        </tr>
    </table>
</body>
</html>