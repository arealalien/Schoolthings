<?php ?>
<!DOCTYPE html>
<html lang="no">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ======= -->
    <!-- General -->
    <title>Home pod - Prosjekter</title>
    <link rel="icon" href="images/icon.png">
    <!-- ===== -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet">
    <!-- ======= -->
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v3.0.0/script/monochrome/bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hmongouachon/NodeCursor/src/nodecursor-jquery.js"></script>
    <!-- =========== -->
    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/cursor.css">
    <link type="text/css" rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/pace-theme-minimal.tmpl.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/solid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

    <!-- Loading - Pace -->
    <div class="pace">
        <div class="pace-progress"></div>
    </div>

    <!-- Noise -->
    <div class="noise z-noise">
        <div class="gif-noise"></div>
    </div>

    <!-- Main Page -->
    <main id="main" class="flexbox">

        <div id="nyprosj-wrapper" class="flexbox">
            <div id="nyprosj-block" class="flexbox-col">
                <input type="text" id="nyprosj-input" class="nodeHover" placeholder="Mappe Navn" aria-label="">
                <div class="btn-wrapper">
                    <a href="" class="nodeHover"><button class="button btn-primary"><i class="uil uil-plus"></i> Legg til<div class="btn-secondary"></div></button></a>
                </div>
            </div>
            <div id="nyprosj-overlay"></div>
        </div>

        <div class="page">
            <div class="page-inner flexbox">
                <div class="page-left flexbox-col-left">
                    <h3 class="nav-title">Prosjekter.</h3>
                    <ul class="navlist">
                        <li class="navlist-item">
                            <a id="home" class="navlist-item-inner nodeHover" href="index.php"><i class="uil uil-home-alt"></i> Hjem</a>
                        </li>
                        <li class="navlist-item">
                            <div class="navlist-item-active">
                                <span class="navlist-item-block"></span>
                            </div>
                            <a id="prosj" class="navlist-item-inner nodeHover"><i class="uil uil-folder-open"></i> Prosjekter</a>
                        </li>
                        <li class="navlist-underitem">
                            <a id="nyprosj" class="navlist-underitem-inner nodeHover"><i class="uil uil-plus"></i> Nytt Prosjekt</a>
                        </li>
                        <li class="navlist-item">
                            <a id="ting" class="navlist-item-inner nodeHover"><i class="uil uil-bolt"></i> Ting</a>
                        </li>
                        <li class="navlist-item">
                            <a id="tingtang" class="navlist-item-inner nodeHover"><i class="uil uil-favorite"></i> Ting Tang</a>
                        </li>
                    </ul>
                </div>
                <div class="page-right flexbox-start">
                    <div class="projects">
                        <a href="../webeditor/index.php" class="nodeHover" target="_blank">
                            <div class="project-wrapper flexbox-col">
                                <div class="project pbg flexbox">
                                    <h3 class="project-letter">I</h3>
                                    <img class="project-img" src="https://images.unsplash.com/photo-1468436139062-f60a71c5c892?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="">
                                </div>
                                <h2 class="project-title">IDE.</h2>
                            </div>
                        </a>
                        <a href="../cabin/index.php" class="nodeHover" target="_blank">
                            <div class="project-wrapper flexbox-col">
                                <div class="project pbg flexbox">
                                    <h3 class="project-letter">C</h3>
                                    <img class="project-img" src="https://images.unsplash.com/photo-1499706162832-b7f644e7121a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1955&q=80" alt="">
                                </div>
                                <h2 class="project-title">Cabin</h2>
                            </div>
                        </a>
                        <a href="../xCraftWeb/index.php" class="nodeHover" target="_blank">
                            <div class="project-wrapper flexbox-col">
                                <div class="project pbg flexbox">
                                    <h3 class="project-letter">X</h3>
                                    <img class="project-img" src="../xCraftWeb/images/header.jpg" alt="">
                                </div>
                                <h2 class="project-title">xCraft</h2>
                            </div>
                        </a>
                        <a href="../prototype/index.php" class="nodeHover" target="_blank">
                            <div class="project-wrapper flexbox-col">
                                <div class="project pbg flexbox">
                                    <h3 class="project-letter">P</h3>
                                    <img class="project-img" src="https://images.unsplash.com/photo-1581006179229-6d9bea75d8ee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="">
                                </div>
                                <h2 class="project-title">Prototype</h2>
                            </div>
                        </a>
                        <a href="#" class="nodeHover" target="_blank">
                            <div class="project-wrapper flexbox-col">
                                <div class="project pbg flexbox">
                                    <h3 class="project-letter">P</h3>
                                </div>
                                <h2 class="project-title">Project</h2>
                            </div>
                        </a>
                        <a href="#" class="nodeHover" target="_blank">
                            <div class="project-wrapper flexbox-col">
                                <div class="project pbg flexbox">
                                    <h3 class="project-letter">P</h3>
                                </div>
                                <h2 class="project-title">Project #2</h2>
                            </div>
                        </a>
                        <a href="#" class="nodeHover" target="_blank">
                            <div class="project-wrapper flexbox-col">
                                <div class="project pbg flexbox">
                                    <h3 class="project-letter">P</h3>
                                </div>
                                <h2 class="project-title">Project #3</h2>
                            </div>
                        </a>
                        <a href="#" class="nodeHover" target="_blank">
                            <div class="project-wrapper flexbox-col">
                                <div class="project pbg flexbox">
                                    <h3 class="project-letter">P</h3>
                                </div>
                                <h2 class="project-title">Project #4</h2>
                            </div>
                        </a>
                        <a href="#" class="nodeHover" target="_blank">
                            <div class="project-wrapper flexbox-col">
                                <div class="project pbg flexbox">
                                    <h3 class="project-letter">P</h3>
                                </div>
                                <h2 class="project-title">Project #5</h2>
                            </div>
                        </a>
                        <a href="#" class="nodeHover" target="_blank">
                            <div class="project-wrapper flexbox-col">
                                <div class="project pbg flexbox">
                                    <h3 class="project-letter">P</h3>
                                </div>
                                <h2 class="project-title">Project #6</h2>
                            </div>
                        </a>
                        <a href="#" class="nodeHover" target="_blank">
                            <div class="project-wrapper flexbox-col">
                                <div class="project pbg flexbox">
                                    <h3 class="project-letter">P</h3>
                                </div>
                                <h2 class="project-title">Project #7</h2>
                            </div>
                        </a>
                        <a href="#" class="nodeHover" target="_blank">
                            <div class="project-wrapper flexbox-col">
                                <div class="project pbg flexbox">
                                    <h3 class="project-letter">P</h3>
                                </div>
                                <h2 class="project-title">Project #8</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="page-glow"></div>
            </div>
        </div>

    </main>

    <div class="node" id="node"></div>
    <div class="cursor" id="cursor"></div>

</body>
<script>
    paceOptions = {
        elements: true
    };
</script>
<script src="javascript/pace.js"></script>
<script src="javascript/script.js"></script>
<script src="javascript/cursor.js"></script>
</html>
