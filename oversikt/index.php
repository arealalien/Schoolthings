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
    <title>Home pod</title>
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

        <div class="page">
            <div class="page-inner flexbox">
                <div class="page-left flexbox-col-left">
                    <h3 class="nav-title">Hjem.</h3>
                    <ul class="navlist">
                        <li class="navlist-item">
                            <div class="navlist-item-active">
                                <span class="navlist-item-block"></span>
                            </div>
                            <a id="home" class="navlist-item-inner nodeHover"><i class="uil uil-home-alt"></i> Hjem</a>
                        </li>
                        <li class="navlist-item">
                            <a id="prosj" class="navlist-item-inner nodeHover" href="prosjekter.php"><i class="uil uil-folder-open"></i> Prosjekter</a>
                        </li>
                        <li class="navlist-item">
                            <a id="ting" class="navlist-item-inner nodeHover"><i class="uil uil-bolt"></i> Ting</a>
                        </li>
                        <li class="navlist-item">
                            <a id="tingtang" class="navlist-item-inner nodeHover"><i class="uil uil-favorite"></i> Ting Tang</a>
                        </li>
                    </ul>
                </div>
                <div class="page-right">

                </div>
                <div class="page-glow"></div>
            </div>
        </div>

        <!--
        <div class="btn-wrapper">
            <a href="" class="nodeHover"><button class="button btn-primary"><i class="uil uil-folder-open"></i> Prosjekter<div class="btn-secondary"></div></button></a>
        </div>
        -->

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
