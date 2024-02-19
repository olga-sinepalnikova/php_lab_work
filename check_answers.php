<?php include("db_connect.php");
if (isset($_REQUEST["id"])) {
    $id = intval($_REQUEST["id"]);
    $sql = "SELECT * FROM articles WHERE id = $id";
    $result = mysqli_query($db, $sql);
    $article = mysqli_fetch_array($result);

    $sql = "SELECT * FROM questions WHERE article_id='" . $article["id"] ."'";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);
    $correct = 0;
    while ($questions = mysqli_fetch_array($result)) {
        if ($questions["correct"] == $_POST["answer_".$questions["id"]]) {
            $correct++;
        }
    }
    $testResult = round(($correct * 100) / $count, 0);
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
    <title>Результаты знаний. Тема:<?php echo $article['title'];?></title>
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
                        <h1><?php if(isset($login)) echo $login.", "?>Ваши результаты </h1>
                        <h2>Тема: "<?php echo $article["title"]?>"</h2>
                        <p>Количество вопросов <b><?php echo $count?></b></p>
                        <p>Количество верных ответов <b><?php echo $correct?></b></p>
                        <p>Результат <b><?php echo $testResult?></b></p>
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