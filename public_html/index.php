<?php
$host = 'mysql';
$user = 'toto';
$pass = 'password';
$dbname = 'portfolio';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $test = "Connected to MySQL successfully!";
}

$sql = "SELECT * FROM Post";

$result = $conn->query($sql);

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>


<?php include('components/navbar.php'); ?>


<div id="content">
    <?php
    switch ($page) {
        case 'blog':
            include('blog.php');
            break;
        case 'post':
            include('post.php');
            break;
        default:
            include('home.php');
            break;
    }
    ?>
</div>

<?php include('components/footer.php'); ?>

</body>
</html>
