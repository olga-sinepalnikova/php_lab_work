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
                        <?php
                            $sql = "SELECT * FROM photos ORDER BY date_created";
                            $result = mysqli_query($db, $sql);
                            while ($myrow = mysqli_fetch_array($result)) {
                        ?>
                            <table>
                                <tr>
                                    <td>
                                        <img src="photos/<?php echo $myrow["filename"]?>" alt="<?php echo $myrow["name"]?>" width="100%">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><?php echo $myrow["name"]?></p>
                                    </td>
                                </tr>
                            </table>
                        <?php }?>
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