<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
</head>

<body style="margin: 0">

<style>
    body {
        background: #ffffff !important;
        margin: 0;
    }
    #contentOutput {
        background: #414547;
        color: #d7d7d7;
        outline: 0;
        border: 0;
        font-family: monospace;
        font-size: 10px;
        white-space: pre;
        margin: 0;
        position: absolute;
        top: 30px;
        left: 0;
        height: calc(100% - 34px);
        width: 99.75%;
        z-index: 10;
        display: none;
    }
    #PreviewPos {
        position: absolute;
        top: 30px;
        left: 0;
        width: 100%;
    }
    .showR1970 {
        display: block !important;
    }
    .boldR1970 {
        font-weight: bold !important;
    }
    .buttonsCC {
        font-family: Arial, "sans-serif";
        font-weight: normal;
        font-size: 12px;
        margin: 8px 20px;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    #preview, #html {
        text-decoration: none;
        color: #000;
        cursor: pointer;
    }
</style>

<?php 
ob_start();
?>