<?php 

include 'includes/db_connect.php';
include 'includes/post_function.php';

$last_post_id = getLastPostId($conn);
$post = getPostById($conn, $last_post_id);


$conn->close();
?>


<title>Blog</title>
<link rel="stylesheet" href="css/blog.css">
<link rel="stylesheet" href="css/navbar-2.css">

<section id="section-1">
    <div id="last-article-picture">
        <a href="index.php?page=post&id=<?php echo $last_post_id ?>">
            <img src="/assets/articles/1.png" alt="">
        </a>
    </div>

    <div id="last-article-infos">
            <div id="resume">
                <h1><?php echo ($post['titre']); ?></h1>
                <p><?php echo ($post['sommaire']); ?></p>
            </div>
            <div id="tools">
                <div id="tools-1">
                    <div id="like-display">
                        <img src="/assets/vector/heart.svg" alt="">
                        <?php echo ($post['likes']); ?>
                    </div>
                    <div id="view-display">
                        <img src="/assets/vector/view.svg" alt="">
                        <?php echo ($post['vue']); ?>
                    </div>
                </div>
                <div id="tools-2">
                    <div id="date">
                        <h1>Date De Publication</h1>
                        <?php echo ($post['date_publication']); ?>
                    </div>
                    <div id="author">
                        <h1>Auteur</h1>
                        <p><?php echo ($post['auteur']); ?></p>
                    </div>
                </div>
                <div id="tools-3">
                    <a href="index.php?page=post&id=<?php echo $last_post_id ?>">Lire la suite</a>
                </div>
            </div>
        </div>
    </section>

<section id="section-2">

<?php foreach ($post as $posts): ?>
    <div id="card-template">
        <div id="card-img">
            <img src="/assets/articles/<?php echo ($post['id']); ?>.png" alt="">
        </div>
        <div id="card-info">
            <h1><?php echo ($post['titre']); ?></h1>
            <p><?php echo ($post['sommaire']); ?></p>
        </div>
            <div id="card-tools">
                <div id="card-left-part">
                    <div id="like-display">
                        <img src="/assets/vector/heart.svg" alt="">
                        <?php echo ($post['likes']); ?>
                    </div>
                    <div id="view-display">
                        <img src="/assets/vector/view.svg" alt="">
                        <?php echo ($post['vue']); ?>
                    </div>
                </div>
                <div id="card-right-part">
                    <a href="index.php?page=post&id=<?php echo ($post['id']); ?>">Lire la suite</a>
                </div>
            </div>
        </div>
<?php endforeach; ?>
    
        
</section>

<section id="section-3">




</section>