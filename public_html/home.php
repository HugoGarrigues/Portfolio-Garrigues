<?php 

include 'includes/db_connect.php';
include 'includes/post_function.php';

$projects = getAllProjects($conn);

$conn->close();
?>

<title>Home</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/navbar.css">

<section id="section-1">
    <div id="section-1-vertical-navbar">
        <ul>
            <li><a href="#section-1"></a></li>
            <li><a href="#section-2"></a></li>
            <li><a href="#section-3"></a></li>
        </ul>
    </div>

    <div id="section-1-div-1">
        <p id="name">Hugo</p>
        <p id="firstname">GARRIGUES</p>
    </div>

    <div id="section-1-div-2">
        <div id="section-1-div-2-left-part">
           <p>Développeur Fullstack</p>
        </div>
        <div id="section-1-div-2-right-part">
            <a href="https://github.com/HugoGarrigues"><img src="/assets/vector/github.svg" alt="logo-github"></a>
           <a href="https://www.linkedin.com/in/hugo-garrigues-65837024b/"><img src="/assets/vector/linkedin.svg" alt="logo-linkedin"></a>
        </div>
    </div>
</section>

<section id="section-2">
    <div id="section-2-div-1">
        <h1>A Propos</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mauris metus, molestie at egestas a, porta a sem. Etiam eget est ex. Integer ut tortor ipsum. Mauris dolor ex, venenatis nec faucibus ut, tincidunt sit amet lorem. Proin blandit efficitur consequat. Nunc et elit lacus. Sed purus nibh, lacinia nec elementum sit amet, luctus vitae ligul.  Sed purus nibh, lacinia nec elementum sit amet, luctus vitae ligul Sed purus nibh, lacinia nec elementum sit amet, luctus vitae ligul Sed purus nibh, lacinia nec elementum sit amet, luctus </p>
        <h1>Expérience avec</h1>
        
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="/assets/vector/javascript.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/html.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/css.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/nodejs-plain.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/php.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/phpstorm.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/docker-plain.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/python.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/mysql-plain.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/go-original-wordmark.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/github.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/git-plain.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/apache-plain-wordmark.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/figma-plain.svg" height="100" width="150" alt="" />
                </div>
                <div class="slide">
                    <img src="/assets/vector/express-plain-wordmark.svg" height="100" width="" alt="" />
                </div>
            </div>
        </div>


    </div>
    <div id="section-2-div-2">
        <div></div>
    </div>
</section>

<section id="section-3">

    <div id="title">MES PROJETS</div>
    <?php foreach ($projects as $project): ?>
    <div id="card-projects">
        <div id="card-left">
            <img src="/assets/projets/<?php echo ($project['id_projet']); ?>.png" alt="">
        </div>

        <div id="card-right">
            <div id="top-side">
                <h1><?php echo ($project['titre']); ?></h1>
                <p><?php echo ($project['description']); ?></p>
            </div>

            <div id="bottom-side">
                <div id="tools-1">
                    <div id="like-display">
                        <h1><?php echo ($project['techno1']); ?></h1>
                    </div>
                    <div id="view-display">
                        <h1><?php echo ($project['techno2']); ?></h1>
                    </div>
                </div>
                <div id="tools-3">
                    <a href="<?php echo ($project['lien_projet']); ?>" target="_blank">
                        <img src="/assets/vector/arrow.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


    
    
</section> 

<script>
document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll("section");
    const navLi = document.querySelectorAll("#section-1-vertical-navbar li");
    navLi[0].classList.add("active");

    window.addEventListener("scroll", () => {
        let current = "";

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - sectionHeight / 3) {
                current = section.getAttribute("id");
            }
        });

        navLi.forEach(li => {
            li.classList.remove("active");
            if (li.querySelector("a").getAttribute("href").substring(1) === current) {
                li.classList.add("active");
            }
        });
    });
});
</script>