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
    <title>Kart</title>
    <link rel="icon" href="images/icon.png">
    <!-- ===== -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet">
    <!-- =========== -->
    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/solid.css">
    <!-- ======= -->
    <!-- Scripts -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
    <script src="https://unicons.iconscout.com/release/v3.0.0/script/monochrome/bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/hmongouachon/NodeCursor/src/nodecursor-jquery.js"></script>
</head>
<body>

<div class="map-wrapper">
    <div id="map"></div>
    <div id="code">
        <p class="code-line">
            <span class="bracket">&lt;</span><span class="element">head</span><span class="bracket">&gt;</span>
        </p>
        <p class="code-line indent">
            <span class="bracket">&lt;</span><span class="element">link</span> rel=<span class="link2">"stylesheet"</span> href=<span class="link2">"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"</span> integrity=<span class="link2">"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="</span> crossorigin=<span class="link2">""</span><span class="bracket">&gt;</span>
        </p>
        <p class="code-line indent">
            <span class="bracket">&lt;</span><span class="element">script</span> src=<span class="link2">"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"</span> integrity=<span class="link2">"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="</span> crossorigin=<span class="link2">""</span><span class="bracket">&gt;</span><span class="bracket">&lt;/</span><span class="element">script</span><span class="bracket">&gt;</span>
        </p>
        <p class="code-line">
            <span class="bracket">&lt;/</span><span class="element">head</span><span class="bracket">&gt;</span>
        </p>
        <p class="code-line">
            <span class="bracket">&lt;</span><span class="element">body</span><span class="bracket">&gt;</span>
        </p>
        <p class="code-line indent">
            <span class="bracket">&lt;</span><span class="element">div</span> <span class="class">class</span><span class="equals">=</span>"<span class="classname">map-wrapper</span>"<span class="bracket">&gt;</span>
        </p>
        <p class="code-line indent2">
            <span class="bracket">&lt;</span><span class="element">div</span> <span class="class">id</span><span class="equals">=</span>"<span class="classname">map</span>"<span class="bracket">&gt;</span><span class="bracket">&lt;/</span><span class="element">div</span><span class="bracket">&gt;</span>
        </p>
        <p class="code-line indent">
            <span class="bracket">&lt;/</span><span class="element">div</span><span class="bracket">&gt;</span>
        </p>
        <p class="code-line">
            <span class="bracket">&lt;/</span><span class="element">body</span><span class="bracket">&gt;</span>
        </p>
        <p class="code-line">
            <span class="bracket">&lt;</span><span class="element">script</span><span class="bracket">&gt;</span>
        </p>
        <p class="code-line indent">
            <span class="varbef">var</span> <span class="var">map</span> = L.<span class="var">map</span>(<span class="inner">'map'</span>).setView([<span class="numbers">59.118587</span><span class="comma">, </span><span class="numbers">11.402476</span>]<span class="comma">, </span><span class="numbers">13.3</span>);
        </p>
        <p class="code-line indent">
            L.titleLayer(<span class="inner2">'https://opencache.statkart.no/gatekeeper/gk/gk.open_gmaps?layers=topo4&zoom={z}&x={x}&y={y}'</span><span class="comma">, </span> {
        </p>
        <p class="code-line indent2">
            <span class="attr">attribution</span>: <span class="inner">'</span><span class="bracket">&lt;</span><span class="element">a </span>href=<span class="link">"http://www.kartverket.no/"</span><span class="bracket">&gt;</span><span class="text">Kartverket</span><span class="bracket">&lt;/</span><span class="element">a</span><span class="bracket">&gt;</span><span class="inner">'</span>
        </p>
        <p class="code-line indent">
            }).addTo(<span class="var">map</span>);
        </p>
        <p class="code-line indent">
            <span class="varbef">var</span> <span class="var">marker</span> = L.<span class="var">marker</span>([<span class="numbers">59.118587</span>]).addTo(<span class="var">map</span>);
        </p>
        <p class="code-line indent">
            <span class="var">marker</span>.bindPopup("<span class="bracket">&lt;</span><span class="element">a </span>href=<span class="link">"http://www.kartverket.no/"</span><span class="bracket">&gt;</span>").openPopup();
        </p>
        <p class="code-line">
            <span class="bracket">&lt;/</span><span class="element">script</span><span class="bracket">&gt;</span>
        </p>
    </div>
</div>

</body>
<script>
    var map = L.map('map').setView([59.118587, 11.402476], 13.3);
    L.tileLayer('https://opencache.statkart.no/gatekeeper/gk/gk.open_gmaps?layers=topo4&zoom={z}&x={x}&y={y}', {
        attribution: '<a href="http://www.kartverket.no/">Kartverket</a>'
    }).addTo(map);
    var marker = L.marker([59.118587, 11.402476]).addTo(map);
    marker.bindPopup("<b>Fredriksten festning</b><br>Halden").openPopup();
</script>
<script src="javascript/script.js"></script>
</html>
