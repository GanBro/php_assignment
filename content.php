<?php
include "php/common.php";
$con = new mysqli('localhost', 'root', 'root', 'myitem');
if ($con->connect_error) {
    die('连接失败');
}

$id = $_GET['id'];

$sql = "SELECT * FROM u_article WHERE u_id=$id";
$result = $con->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <?php include "include/head.php"; ?>
    <title>内容页</title>
</head>

<body>
<?php include "include/navbar.php"; ?>
<div class="container">
    <?php include "include/carousel.html"; ?>

    <ol class="breadcrumb">
        <li><a href="index.php">首页</a></li>
        <li><a href="list.php?column=<?php echo $row['u_column'] ?>"><?php echo $row['u_column'] ?></a></li>
        <li class="active"><?php echo $row['u_title'] ?></li>
    </ol>

    <div class="text-center page-header">
        <h3><?php echo $row['u_title'] ?></h3>
        <p>
            作者: <span class="author bg-info text-primary"><?php echo $row['u_author'] ?></span>&nbsp;&nbsp; 发布时间: <span
                    class="time bg-info text-primary"><?php echo date('Y-m-d H:i:s', $row['u_add_date']); ?></span>
        </p>
    </div>

    <?php echo $row['u_contents'] ?>

    <div class="panel panel-info">
        <div class="panel-heading">相关文章</div>
        <ul class="list-group">
            <?php
            $relatedArticlesSql = "SELECT * FROM u_article WHERE u_column='" . $row['u_column'] . "' AND u_id!=" . $id . " LIMIT 5";
            $relatedArticlesResult = $con->query($relatedArticlesSql);

            if ($relatedArticlesResult->num_rows > 0) {
                while ($relatedArticlesRow = $relatedArticlesResult->fetch_assoc()) {
                    echo '<li class="list-group-item"><a href="content.php?id=' . $relatedArticlesRow['u_id'] . '" class="text-inherit">';
                    echo '<span class="glyphicon glyphicon-star-empty"></span> ' . $relatedArticlesRow['u_title'];
                    echo '</a></li>';
                }
            } else {
                echo '<li class="list-group-item">暂无相关文章</li>';
            }
            ?>
        </ul>
    </div>

    <?php include "include/footer.html"; ?>
</div>

<?php include "include/foot_script.html"; ?>

</body>
</html>
