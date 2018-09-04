<?php
include('include/connection.php');

$query = 'SELECT * FROM items ORDER BY item_order ASC';
$result = $con->query($query);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drag and Drop using jQuery and Ajax</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="images/BeWebDeveloper.png" alt="BeWebDeveloper" />
        </div><!-- header -->
        <h1 class="main_title">Drag and Drop using jQuery and Ajax</h1>
        <div class="content">

        <ul id="sortable">
            <?php
            foreach ($row as $row) {
            ?>
            <li id="<?php echo $row['id']; ?>">
                <span></span>
                <img src="<?php echo $row['photo']; ?>">
                <div><h2><?php echo $row['title']; ?></h2><?php echo $row['description']; ?></div>
            </li>
            <?php
            }
            ?>
        </ul>
        </div><!-- content -->    
        <div class="footer">
            Powered by <a href="http://www.bewebdeveloper.com/">bewebdeveloper.com</a>
        </div><!-- footer -->
    </div><!-- container -->
</body>
</html>
