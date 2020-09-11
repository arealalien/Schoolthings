//*-~*~-*-*-~*~-*-*-~*~*-*-~*~-*-*-~*~-*
//
//　　　　　　　　Made with ❤ by ~
//　　　　　　 Areal Alien ❥ 雷克斯
//
//　　　　　　　　　　▄▀▄　　　▄▀▄
//　　　　　　　　 ▄█░░▀▀▀▀▀░░█▄
//　　　　　▄▄ 　█░░░░░░░░░░░█　▄▄
//　　　　█▄▄█　█░░▀░░┬░░▀░░█　█▄▄█
//*-~*~-*-*-~*~-*-*-~*~*-*-~*~-*-*-~*~-*

// new project
let $nyprosj = $("#nyprosj");
let $nypWrapper = $("#nyprosj-wrapper");
let $nypBlock = $("#nyprosj-block");
let $nypOverlay = $("#nyprosj-overlay");

$nyprosj.click(function() {

    $nypWrapper.css("display", "flex");
    $nypBlock.css("display", "block");
    $nypOverlay.css("display", "block");

});

$nypOverlay.click(function() {

    $nypWrapper.css("display", "none");
    $nypBlock.css("display", "none");
    $nypOverlay.css("display", "none");

});



let $home = $("#home");
let $prosj = $("#prosj");
let $ting = $("#ting");
let $tingtang = $("#tingtang");
let $active = $(".navlist-item-active");

if ( document.URL.includes("index.php") ) {
    $home.mouseover(function() {
        $active.css("top", "0");
    });
    $home.mouseout(function() {
        $active.css("top", "0");
    });
    $prosj.mouseover(function() {
        $active.css("top", "115%");
    });
    $prosj.mouseout(function() {
        $active.css("top", "0");
    });
    $ting.mouseover(function() {
        $active.css("top", "230%");
    });
    $ting.mouseout(function() {
        $active.css("top", "0");
    });
    $tingtang.mouseover(function() {
        $active.css("top", "350%");
    });
    $tingtang.mouseout(function() {
        $active.css("top", "0");
    });
} else if ( document.URL.includes("prosjekter.php") ) {
    $home.mouseover(function() {
        $active.css("top", "-110%");
    });
    $home.mouseout(function() {
        $active.css("top", "0");
    });
    $prosj.mouseover(function() {
        $active.css("top", "0");
    });
    $prosj.mouseout(function() {
        $active.css("top", "0");
    });
    $ting.mouseover(function() {
        $active.css("top", "220%");
    });
    $ting.mouseout(function() {
        $active.css("top", "0");
    });
    $tingtang.mouseover(function() {
        $active.css("top", "330%");
    });
    $tingtang.mouseout(function() {
        $active.css("top", "0");
    });
}
