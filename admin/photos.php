<?php include("db_connect.php");
// if (isset($_REQUEST["id"])) {
//     $id = intval($_REQUEST["id"]);
//     $sql = "SELECT * FROM photos";
//     $result = mysqli_query($db, $sql);
//     $myrow = mysqli_fetch_array($result);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $myrow['metadescription'];?>">
    <meta name="keywords" content="<?php echo $myrow['metakeywords'];?>">
    <title>Фотогалерея с фотографиями</title>
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
                        <table width="100%" class="big-table">
                            <tr>
                                <td>id</td>
                                <td>Название</td>
                                <td>Ихображение</td>
                                <td>Дата загрузки</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php
                                $sql = "SELECT * FROM photos ORDER BY date_created";
                                $result = mysqli_query($db, $sql);
                                while ($myrow = mysqli_fetch_array($result)) {
                                    $link_delete = "photo_handler.php?task=delete&id=".$myrow["id"];
                                    $task = "publish";
                                    $img_published = "uncheck.png";
                                    if ($myrow["published"]) {
                                        $task = "unpublish";
                                        $img_published = "check.png";
                                    }
                                    $link_publish = "photo_handler.php?task=".$task."&id=".$myrow["id"];
                                    $link_edit = "photo_handler.php?task=edit&id=".$myrow["id"];
                            ?>
                                <tr>
                                    <td><?php echo $myrow["id"]?></td>
                                    <td><?php echo $myrow["name"]?></td>
                                    <td><img src="../photos/<?php echo $myrow["filename"]?>" width="200px"></td>
                                    <td><?php echo $myrow["date_created"]?></td>
                                    <td><a href="<?php echo $link_delete?>">
                                            <img src="" alt="">
                                        </a></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                        <?php }?>
                        </table>
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