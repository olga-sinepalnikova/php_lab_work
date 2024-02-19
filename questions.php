<?php include("db_connect.php");
if (isset($_REQUEST["id"])) {
    $id = intval($_REQUEST["id"]);
    $sql = "SELECT * FROM articles WHERE id = $id";
    $result = mysqli_query($db, $sql);
    $article = mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $article['metadescription'];?>">
    <meta name="keywords" content="<?php echo $article['metakeywords'];?>">
    <title>Вопросы для проверки знаний:<?php echo $article['title'];?></title>
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
                        <h1>Вопросы для проверки знаний</h1>
                        <h2>Тема:<?php echo $article['title'];?></h2>
                        <form action="check_answers.php" method="post">
                            <?php 
                                $sql = "SELECT * FROM questions WHERE article_id=$id";
                                $result = mysqli_query($db, $sql);
                                while($questions = mysqli_fetch_array($result)){
                                    $questions["answers"] = explode("|", $questions["answers"]);?>
                                    <p><b><?php echo $questions["quest"]?></b></p>
                                    <?php
                                    foreach ($questions["answers"] as $numbers => $answer){
                                        $number1 = $numbers;
                                    ?>
                                        <p><label>
                                            <input type="radio"
                                                name="answer_<?php echo $questions["id"];?>"
                                                value="<?php echo $number1?>">
                                            <?php echo $answer?>
                                        </label></p>    
                                    <?php } ?>
                                    <hr>
                                <?php } ?>
                            <p><input type="submit" name="button" value="Отправить"></p>
                            <input type="hidden" name="id" value="<?php echo $article["id"]?>">
                        </form>
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