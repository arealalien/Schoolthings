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

window.onload=getExif;

function getExif() {
    var img1 = document.getElementById("img1");
    EXIF.getData(img1, function() {
        var make = EXIF.getTag(this, "Make");
        var model = EXIF.getTag(this, "Model");
        var xresolution = EXIF.getTag(this, "XResolution");
        var yresolution = EXIF.getTag(this, "YResolution");
        var software = EXIF.getTag(this, "Software");
        var dateTime = EXIF.getTag(this, "DateTime");
        var exposureTime = EXIF.getTag(this, "ExposureTime");
        var fNumber = EXIF.getTag(this, "FNumber");
        var isoSpeedR = EXIF.getTag(this, "ISOSpeedRatings");
        var undef = EXIF.getTag(this, "undefined");
        var shutterSpeedV = EXIF.getTag(this, "ShutterSpeedValue");
        var apertureVal = EXIF.getTag(this, "ApertureValue");
        var flash = EXIF.getTag(this, "Flash");
        var focalLength = EXIF.getTag(this, "FocalLength");
        var whiteBalance = EXIF.getTag(this, "WhiteBalance");
        var contrast = EXIF.getTag(this, "Contrast");
        var saturation = EXIF.getTag(this, "Saturation");
        var sharpness = EXIF.getTag(this, "Sharpness");
        var makeAndModel = document.getElementById("makeAndModel");
        var make2 = document.getElementById("make");
        var model2 = document.getElementById("model");
        var xres = document.getElementById("xres");
        var yres = document.getElementById("yres");
        var soft = document.getElementById("soft");
        var dt = document.getElementById("date-time");
        var et = document.getElementById("exposure-time");
        var fnumb = document.getElementById("f-number");
        var isoSpeed = document.getElementById("iso-speed-ratings");
        var undefined = document.getElementById("unde");
        var shutterSpeed = document.getElementById("shutter-speed-value");
        var apertureV = document.getElementById("aperture-value");
        var flsh = document.getElementById("flsh");
        var focalLeng = document.getElementById("focal-length");
        var whiteBal = document.getElementById("white-balance");
        var contr = document.getElementById("contrast");
        var satur = document.getElementById("saturation");
        var sharpn = document.getElementById("sharpness");
        makeAndModel.innerHTML = `${model}`;
        make2.innerHTML = `${make}`;
        model2.innerHTML = `${model}`;
        xres.innerHTML = `${xresolution}`;
        yres.innerHTML = `${yresolution}`;
        soft.innerHTML = `${software}`;
        dt.innerHTML = `${dateTime}`;
        et.innerHTML = `${exposureTime}`;
        fnumb.innerHTML = `${fNumber}`;
        isoSpeed.innerHTML = `${isoSpeedR}`;
        undefined.innerHTML = `${undef}`;
        shutterSpeed.innerHTML = `${shutterSpeedV}`;
        apertureV.innerHTML = `${apertureVal}`;
        flsh.innerHTML = `${flash}`;
        focalLeng.innerHTML = `${focalLength}`;
        whiteBal.innerHTML = `${whiteBalance}`;
        contr.innerHTML = `${contrast}`;
        satur.innerHTML = `${saturation}`;
        sharpn.innerHTML = `${sharpness}`;
    });

}