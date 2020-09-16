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
    <title>Exif</title>
    <link rel="icon" href="images/icon.png">
    <!-- ===== -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet">
    <!-- ======= -->
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/exif-js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://unicons.iconscout.com/release/v3.0.0/script/monochrome/bundle.js"></script>
    <!-- =========== -->
    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
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

    <!-- Main Page -->
    <main id="main">

        <div class="page flexbox-col">

            <pre class="title"><span id="makeAndModel"></span></pre>
            <div class="wrapper">
                <div class="flexbox">
                    <img src="images/HEA_4927.jpg" id="img1" />
                </div>
                <table class="table flexbox">
                    <tr>
                        <td class="t-title">Make</td>
                        <td id="make" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Model</td>
                        <td id="model" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">X-Resolution</td>
                        <td id="xres" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Y-Resolution</td>
                        <td id="yres" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Software</td>
                        <td id="soft" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Date And Time</td>
                        <td id="date-time" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Exposure Time</td>
                        <td id="exposure-time" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">F Number</td>
                        <td id="f-number" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">ISO Speed Ratings</td>
                        <td id="iso-speed-ratings" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Camera Lense</td>
                        <td id="unde" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Shutter Speed Value</td>
                        <td id="shutter-speed-value" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Aperture Value</td>
                        <td id="aperture-value" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Flash</td>
                        <td id="flsh" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Focal Length</td>
                        <td id="focal-length" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">White Balance</td>
                        <td id="white-balance" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Contrast</td>
                        <td id="contrast" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Saturation</td>
                        <td id="saturation" class="t-title"></td>
                    </tr>
                    <tr>
                        <td class="t-title">Sharpness</td>
                        <td id="sharpness" class="t-title"></td>
                    </tr>
                </table>
            </div>

        </div>

    </main>

</body>
<script>
    paceOptions = {
        elements: true
    };
</script>
<script src="javascript/pace.js"></script>
<script src="javascript/script.js"></script>
</html>
