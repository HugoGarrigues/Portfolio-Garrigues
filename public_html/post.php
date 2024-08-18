<?php 

include 'includes/db_connect.php';
include 'includes/post_function.php';

$next_id = $_GET['id'] + 1;
$post = getPostById($conn, $_GET['id']);

$conn->close();
?>


<title>Post</title>
<link rel="stylesheet" href="css/post.css">
<link rel="stylesheet" href="css/navbar-2.css">
<meta charset="UTF-8">

<section id="section-2">

    <div id="left-part">

        <div id="title">
            <h1><?php echo ($post['titre']); ?></h1>
        </div>
    
        <div id="wrapper">
        <div>
            <h2>Date de Publication</h2>
            <p><?php echo ($post['date_publication']); ?></p>
        </div>
        <div>
            <h2>Catégorie</h2>
            <p><?php echo ($post['categorie']) ?></p>
        </div>
        <div>
            <h2>Temps de Lecture</h2>
            <p><?php echo ($post['temps_lecture']) ?> min</p>
        </div>
        <div>
            <h2>Auteur</h2>
            <p><?php echo ($post['auteur']); ?></p>
        </div>
        </div>

        <div id="contents">
            <h2>Sommaire</h2>
            <ul>
                <li>Récit de Ma Première Journée de Stage</li>
                <li>Premier pas et premières impressions</li>
                <li>Premier Jour à la DGA EV</li>
                <li>Ma Première Journée de Stage à la DGA EV </li>
                <li>Ma Première semaine de Stage à la DGA EV </li>
                <li>Introduction 6</li>
                <li>Récit de Ma Première Journée de Stage</li>
                <li>Premier pas et premières impressions</li>
                <li>Récit de Ma Première Journée de Stage</li>  
            </ul>
        </div>

        <div id="task">
                <div id="like-display">
                    <img src="/assets/vector/heart.svg" alt="">
                    <?php echo ($post['likes']) ?>
                </div>
                <div id="view-display">
                    <img src="/assets/vector/view.svg" alt="">
                    <?php echo ($post['vue']) ?>
                </div>
                <a href="index.php?page=post&id=<?php  ?>"><div id="next-display">
                    NEXT
                </div></a>
                
        </div>

    </div>

    <div id="right-part">
        <div id="shadow-footer">
        </div>
        <div id="text">
        <?php echo ($post['texte']) ?>
        </div>
    </div>

</section>

<section id="section-3">
    Autres Posts...
</section>