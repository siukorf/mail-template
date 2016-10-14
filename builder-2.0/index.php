<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
<title>E-mail builder 2.0</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
<link rel="stylesheet" href="css/builder.css">
<link rel="stylesheet" href="css/tooltipster.bundle.css">
<style media="screen" type="text/css">
* {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;
}
body {
    margin: 0;
    background: #e6e6e6;
}
.inputFile {
    padding: 10px;
    outline: 0;
    width: 400px;
    display: block;
    border: 1px solid #e3e3e3;
    font-size: 13px;
}
textarea {
    height: 100px;
}
#inputForm {
    padding: 0 20px;
}
#formHolder {
    margin-top: 75px;
}
.module {
    background: #f8f8f8;
    border: 1px solid #d7d7d7;
    margin-bottom: 4px;
    padding: 0 10px;
    -webkit-box-shadow: 0px 2px 9px 0px rgba(0,0,0,0.09);
    -moz-box-shadow: 0px 2px 9px 0px rgba(0,0,0,0.09);
    box-shadow: 0px 2px 9px 0px rgba(0,0,0,0.09);
}
.module label:hover {
    color: #9a9a9a;
}
.code {
    background: #414547;
    color: #d7d7d7;
    outline: 0;
    border: 0;
    font-family: monospace;
    font-size: 12px;
    white-space: pre;
}
label {
    display: inline-block;
    width: calc(100% - 50px);
}
.module label, .module .expand {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 30px;
    /*text-transform: uppercase;*/
    font-weight: 700;
    letter-spacing: 0.6px;
    padding: 10px 0;
    cursor: pointer;
}
.module .expand {
    display: none;
}
.module label::before {
    content: '\2192  ';
}
.module label {
    padding-left: 4px;
}
.floater {
    display: block;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    float: left;
    background: #fff;
    z-index: 99;
}

.t1 {
    float: left;
    display: block;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 12px;
    line-height: 20px;
    padding: 15px 0 0 0;
    color: #9a9a9a;
    border: 0;
}
.button { background: #00ccff; padding: 10px 20px; color: white; text-decoration: none; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; }
.ui-dialog-titlebar-close, .ui-dialog-titlebar {
    visibility: hidden;
}

.title {
    font-weight: bold;
}

.iff {
    display: block;
}

#header:not(:checked) ~ ul,
#footer:not(:checked) ~ ul,
#html:not(:checked) ~ ul,
#screen-css:not(:checked) ~ ul,
#fonts:not(:checked) ~ ul,
#preheader-text:not(:checked) ~ ul,
#nav-items:not(:checked) ~ ul, 
#main1:not(:checked) ~ ul, 
#main2:not(:checked) ~ ul, 
#main3:not(:checked) ~ ul, 
#main4:not(:checked) ~ ul, 
#form1:not(:checked) ~ ul, 
#text1:not(:checked) ~ ul, 
#text2:not(:checked) ~ ul, 
#sub1:not(:checked) ~ ul, 
#sub2:not(:checked) ~ ul,
#sub3:not(:checked) ~ ul,
#sub4:not(:checked) ~ ul,
#sub5:not(:checked) ~ ul,
#sub7:not(:checked) ~ ul,
#top-list:not(:checked) ~ ul {
    display: none !important;
}

/*#screen-css:checked ~ label img,
#top-list:checked ~ label img {
    display: none !important;
}*/

.tooltippopup, .tooltippopup2 {
    display: none;
    position: absolute;
}
#imgpreview {
    width: 256px;
    height: auto;
    padding: 10px;
    background: #fff;
    -webkit-box-shadow: 0px 3px 19px 0px rgba(0,0,0,0.39);
    -moz-box-shadow: 0px 3px 19px 0px rgba(0,0,0,0.39);
    box-shadow: 0px 3px 19px 0px rgba(0,0,0,0.39);
}

#wrap { width: 1024px; height: 640px; padding: 0; overflow: hidden; }
#linkpreview { width: 1024px; height: 640px; border: 1px solid black; }
#linkpreview {
    border: 0;
    padding: 10px;
    background: #fff;
    -webkit-box-shadow: 0px 3px 19px 0px rgba(0,0,0,0.39);
    -moz-box-shadow: 0px 3px 19px 0px rgba(0,0,0,0.39);
    box-shadow: 0px 3px 19px 0px rgba(0,0,0,0.39);
    -ms-zoom: 0.55;
    -moz-transform: scale(0.55);
    -moz-transform-origin: 0 0;
    -o-transform: scale(0.55);
    -o-transform-origin: 0 0;
    -webkit-transform: scale(0.55);
    -webkit-transform-origin: 0 0;
}
.inner-container {
    display: block;
    padding: 20px;
    background: #fff;
    -webkit-box-shadow: 0px 2px 9px 0px rgba(0,0,0,0.09);
    -moz-box-shadow: 0px 2px 9px 0px rgba(0,0,0,0.09);
    box-shadow: 0px 2px 9px 0px rgba(0,0,0,0.09);
    margin-top: 20px;
    margin-bottom: 20px;
}
</style>
<style media="only screen and (max-width: 480px) and (-webkit-min-device-pixel-ratio: 0)" type="text/css">
    .hide {
        display: none !important;
    }
</style>

<script src="script/jquery-1.11.1.min.js"></script>
<!-- <script src="script/jquery.js"></script -->
<script src="script/jquery-ui.min.js"></script>
<script>
    $(document).ready(function(){


        var myEvent = window.attachEvent || window.addEventListener;
        var chkevent = window.attachEvent ? 'onbeforeunload' : 'beforeunload'; /// make IE7, IE8 compatable

        myEvent(chkevent, function(e) { // For >=IE7, Chrome, Firefox
            var confirmationMessage = ' ';  // a space
            (e || window.event).returnValue = confirmationMessage;
            return confirmationMessage;
        });
        

        $(document).on('mousemove', function(e){
            $('.tooltippopup').css({
               left:  e.pageX + 2,
               top:   e.pageY + 2
            });
            // $('.tooltippopup2').css({
            //    left:  e.pageX + 2,
            //    top:   e.pageY + 2
            // });
        });

        $('.tooltip').hover(
            function(e){
                $('.tooltippopup').show();
            },
            function(e){
                $('.tooltippopup').hide();
            }
        );
        // $('.tooltip2').hover(
        //     function(e){
        //         $('.tooltippopup2').show();
        //     },
        //     function(e){
        //         $('.tooltippopup2').hide();
        //     }
        // );

        // onmouseover="$('#linkpreview').attr('src',this.value)"     ADD TO LINK


        $(document).delegate('.code', 'keydown', function(e) {
          var keyCode = e.keyCode || e.which;

          if (keyCode == 9) {
            e.preventDefault();
            var start = $(this).get(0).selectionStart;
            var end = $(this).get(0).selectionEnd;

            // set textarea value to: text before caret + tab + text after caret
            $(this).val($(this).val().substring(0, start)
                        + "\t"
                        + $(this).val().substring(end));

            // put caret at right position again
            $(this).get(0).selectionStart =
            $(this).get(0).selectionEnd = start + 1;
          }
        });


        jQuery(function() {
            function tog(v) {
                return v ? 'addClass' : 'removeClass';
            }
            $('input.fi').addClass('x');
            $(document).on('input', '.fi').on('mousemove', '.x', function(e) {
                $(this)[tog(this.offsetWidth - 20 < e.clientX - this.getBoundingClientRect().left)]('onX');
            }).on('click', '.onX', function() {
                $(this).val('').change();
            });
        });

        var buildingMsg = "<center>Building...</center>";

        $('#build').click(function() {
            $("#buildDialog").html(buildingMsg);
            $('#buildDialog').dialog({
                open: function(eve, ui) {
                    window.setTimeout(function(item) {
                        $('#buildDialog').dialog('close');
                        }, 
                    550);
                },
                title: '',
                modal: true,
                resizable: false,
                width: 300,
                maxHeight: 80,
                closeText: 'Close dialog',
                draggable: true,
                hide: 'fade'
            });
            $("#outputFrame").attr("src","script/merger1.php");
            $("#inputForm").attr("action","script/merger1.php");
            $("#inputForm").submit();
        });

        function callback(value) {
            if (value) {
                $('div').closest('form').find("input[type=text], textarea").val("");
            } else {
                //no action
            }
        }

        $('iframe.codeVisualOutput').iframeAutoHeight({
            heightOffset: 0,
            minHeight: 0,
            maxHeight: 0,
            callback: function (newHeight) {},
            animate: false,
            debug: false,
            resetToMinHeight: true,
            triggerFunctions: [],
            heightCalculationOverrides: []
        });

    });

    (function( jQuery ) {
        var matched,
            userAgent = navigator.userAgent || "";
        jQuery.uaMatch = function( ua ) {
            ua = ua.toLowerCase();

            var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
                /(webkit)[ \/]([\w.]+)/.exec( ua ) ||
                /(opera)(?:.*version)?[ \/]([\w.]+)/.exec( ua ) ||
                /(msie) ([\w.]+)/.exec( ua ) ||
                ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+))?/.exec( ua ) ||
                [];

            return {
                browser: match[ 1 ] || "",
                version: match[ 2 ] || "0"
            };
        };

        matched = jQuery.uaMatch( userAgent );

        jQuery.browser = {};

        if ( matched.browser ) {
            jQuery.browser[ matched.browser ] = true;
            jQuery.browser.version = matched.version;
        }

        if ( jQuery.browser.webkit ) {
            jQuery.browser.safari = true;
        }

    }( jQuery ));

</script>

</head>

<body>

<div class="tooltippopup">
    <img id="imgpreview" border="0" />
</div>
<div class="tooltippopup2">
    <div id="wrap">
        <iframe id="linkpreview" width="256" height="256" frameborder="0"></iframe>
    </div>
</div>

<div id="buildDialog" style="display: none; font-size: 14px;"></div>

<div id="dialogConfirm" style="display: none; font-size: 14px;"></div>

<div class="floater" style="padding: 10px 0; background: #989898;">
    <input id="build" class="build-button" type="button" value="Build">
    <span class="title" style="color: #fff; font-weight: 100 !important;">E-mail builder 2.0&nbsp;&nbsp;::&nbsp;&nbsp;<span class="hide" style="font-size: 12px;">uses static output framework</span></span>
</div>

<div style="width: calc(100% - 40px); display: block; position: absolute; padding: 20px; float: left; background: #ccc; font-family: arial, sans-serif; font-size: 11px;">
    You can use HTML code in the text fields, only thing you need to do is instead of using double quotes, use single quotes instead
</div>

<div id="formHolder">
    <form name="inputForm" id="inputForm" method="post" target="outputFrame" style="padding-top: 75px;">



        <div class="module">
            <input class="expand" type="checkbox" id="screen-css" /><label for="screen-css">Head CSS</label>
            <ul class="iff">

                <div class="inner-container">

                    <li>
                        <span class="t1">Screen</span>
                        <textarea type="text" class="inputFile code" name="screen-css" placeholder="CSS" autocomplete="off" style="height: 400px"><?php include './script/screen.css' ?></textarea>
                    </li>

                    <li>
                         <span class="t1">Only screen and (max-width: 45em)</span>
                        <textarea type="text" class="inputFile code" name="query1-css" placeholder="CSS" autocomplete="off" style="height: 400px"><?php include './script/query1.css' ?></textarea>
                    </li>

                    <li>
                         <span class="t1">Only screen and (max-width: 30em)</span>
                        <textarea type="text" class="inputFile code" name="query2-css" placeholder="CSS" autocomplete="off" style="height: 400px"><?php include './script/query2.css' ?></textarea>
                    </li>

                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="header" /><label for="header">Header settings</label>
            <ul class="iff">
                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Static</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="header-type" placeholder="" autocomplete="off" value="header-static" />
                            </td>
                            <td>
                                <span class="t1">Dynamic content (Dotmailer)</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="header-type" placeholder="" autocomplete="off" value="header-dynamic" checked />
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">Dynamic content ID</span>
                        <input type="text" class="inputFile" name="header-logo-id" placeholder="ID" autocomplete="off" value="dcitem109585" /><!-- dcitem109585 -->
                    </li>

                    <li>
                        <span class="t1">Dynamic content ID</span>
                        <input type="text" class="inputFile" name="header-points-id" placeholder="ID" autocomplete="off" value="dcitem109601" /><!-- dcitem109601 -->
                    </li>

                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="footer" /><label for="footer">Footer settings</label>
            <ul class="iff">
                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Static</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="footer-type" placeholder="" autocomplete="off" value="footer-static" />
                            </td>
                            <td>
                                <span class="t1">Dynamic content (Dotmailer)</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="footer-type" placeholder="" autocomplete="off" value="footer-dynamic" checked />
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">Dynamic content ID</span>
                        <input type="text" class="inputFile" name="footer-logo-id" placeholder="ID" autocomplete="off" value="dcitem109622" /><!-- dcitem109622 -->
                    </li>

                    <li>
                        <span class="t1">Dynamic content ID</span>
                        <input type="text" class="inputFile" name="footer-points-id" placeholder="ID" autocomplete="off" value="dcitem109623" /><!-- dcitem109623 -->
                    </li>

                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="fonts" /><label for="fonts">Font settings</label>
            <ul class="iff">

                <div class="inner-container">

                    <li>
                        <span class="t1">Title 1</span>
                        <input type="text" class="inputFile code" name="font-title1" placeholder="Input CSS, example: font-family: Arial, Helvetica, sans-serif" autocomplete="off" value="font-family: Arial, Helvetica, sans-serif; -webkit-font-smoothing: antialiased; font-kerning: auto; letter-spacing: 6px; font-weight: normal; line-height: 20px; font-size: 16px; text-transform: uppercase" />
                    </li>

                    <li>
                        <span class="t1">Title 2</span>
                        <input type="text" class="inputFile code" name="font-title2" placeholder="Input CSS, example: font-family: Arial, Helvetica, sans-serif" autocomplete="off" value="font-family: Times, Georgia, serif; -webkit-font-smoothing: antialiased; font-kerning: auto; letter-spacing: 2.5px; font-weight: normal; line-height: 28px; font-size: 28px; text-transform: uppercase; font-weight: bold !important" />
                    </li>

                    <li>
                        <span class="t1">Body / General</span>
                        <input type="text" class="inputFile code" name="font-body" placeholder="Input CSS, example: font-family: Arial, Helvetica, sans-serif" autocomplete="off" value="font-family: Arial, Helvetica, sans-serif; -webkit-font-smoothing: antialiased; font-kerning: auto; font-weight: normal; line-height: 18px; font-size: 13px; letter-spacing: 0.05em" />
                    </li>

                    <li>
                        <span class="t1">Navigation</span>
                        <input type="text" class="inputFile code" name="font-nav" placeholder="Input CSS, example: font-family: Arial, Helvetica, sans-serif" autocomplete="off" value="font-family: Arial, Helvetica, sans-serif; -webkit-font-smoothing: antialiased; font-kerning: auto; font-weight: normal; line-height: 40px; font-size: 12px; letter-spacing: 0.1em" />
                    </li>

                    <li>
                        <span class="t1">Call to action (some styles are already applied)</span>
                        <input type="text" class="inputFile code" name="font-cta" placeholder="Input CSS, example: font-family: Arial, Helvetica, sans-serif" autocomplete="off" value="font-family: Arial, Helvetica, sans-serif; -webkit-font-smoothing: antialiased; font-kerning: auto; font-weight: bold !important" />
                    </li>

                    <li>
                        <span class="t1">Top template number (font-size and line-height are already applied)</span>
                        <input type="text" class="inputFile code" name="font-top-tpl-number" placeholder="Input CSS, example: font-family: Arial, Helvetica, sans-serif" autocomplete="off" value="font-family: Times, Georgia, serif; -webkit-font-smoothing: antialiased; font-kerning: auto; letter-spacing: 2.5px; font-weight: normal; text-transform: uppercase" />
                    </li>

                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="nav-items" />
            <label for="nav-items">Navigation items</label>
            <ul class="iff">

                <div class="inner-container">

                    <li>
                        <table width="400" cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="padding: 0 0 20px 0;">
                                    <input type="text" class="inputFile" name="nav-item1-text" placeholder="text" autocomplete="off" value="net binnen" />
                                    <input type="text" class="inputFile" name="nav-item1-link" placeholder="link" autocomplete="off" value="https://www.debijenkorf.nl/action/ViewParametricSearch-Browse?fh_location=//catalog01/nl_NL/nieuw_nonfashion%3E%7Bnet20binnen%7D&campaignkw=header_navigation_netbinnen" />
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 20px 0;">
                                    <input type="text" class="inputFile" name="nav-item2-text" placeholder="text" autocomplete="off" value="dames" />
                                    <input type="text" class="inputFile" name="nav-item2-link" placeholder="link" autocomplete="off" value="https://www.debijenkorf.nl/damesmode?campaignkw=header_navigation_dames" />
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 20px 0;">
                                    <input type="text" class="inputFile" name="nav-item3-text" placeholder="text" autocomplete="off" value="heren" />
                                    <input type="text" class="inputFile" name="nav-item3-link" placeholder="link" autocomplete="off" value="https://www.debijenkorf.nl/herenmode?campaignkw=header_navigation_heren" />
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 20px 0;">
                                    <input type="text" class="inputFile" name="nav-item4-text" placeholder="text" autocomplete="off" value="kinderen" />
                                    <input type="text" class="inputFile" name="nav-item4-link" placeholder="link" autocomplete="off" value="https://www.debijenkorf.nl/kindermode?campaignkw=header_navigation_kinderen" />
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 20px 0;">
                                    <input type="text" class="inputFile" name="nav-item5-text" placeholder="text" autocomplete="off" value="wonen" />
                                    <input type="text" class="inputFile" name="nav-item5-link" placeholder="link" autocomplete="off" value="https://www.debijenkorf.nl/wonen?campaignkw=header_navigation_wonen" />
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 0 20px 0;">
                                    <input type="text" class="inputFile" name="nav-item6-text" placeholder="text" autocomplete="off" value="cosmetica" />
                                    <input type="text" class="inputFile" name="nav-item6-link" placeholder="link" autocomplete="off" value="https://www.debijenkorf.nl/cosmetica?campaignkw=header_navigation_cosmetica" />
                                </td>
                            </tr>
                        </table>
                    </li>

                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="preheader-text" />
            <label for="preheader-text">Pre header text / inbox preview text</label>
            <ul class="iff">

                <div class="inner-container">
            
                    <li>
                        <table width="400" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <input type="text" class="inputFile" name="pre-header" placeholder="Input text or leave empty" autocomplete="off" value="" />
                                </td>
                            </tr>
                        </table>
                
                    </li>
                
                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="text2" /><label for="text2">Text banner</label>
            <ul class="iff">

                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="text2-type" placeholder="" autocomplete="off" value="" checked  />
                            </td>
                            <td>
                                <span class="t1">Enable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="text2-type" placeholder="" autocomplete="off" value="text2"/>
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="text2-text" placeholder="" autocomplete="off">Let op: tijdens OFFERS TO BE PROUD OF zijn onze filialen langer geopend ›</textarea>
                    </li>
                    <li>
                        <span class="t1">Text link</span>
                        <input type="text" class="inputFile tooltip2" name="text2-text-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="text2-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>

                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="text1" /><label for="text1">Uitgangsbanner</label>
            <ul class="iff">

                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="text1-type" placeholder="" autocomplete="off" value="" checked  />
                            </td>
                            <td>
                                <span class="t1">Enable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="text1-type" placeholder="" autocomplete="off" value="text1"/>
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="text1-title-row1" placeholder="" autocomplete="off" value="Text" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="text1-title-row2" placeholder="" autocomplete="off" value="BANNER" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="text1-text" placeholder="" autocomplete="off">Ontdek het Franse designermerk Céline in de Bijenkorf Amsterdam en laat je inspireren door een prachtige collectie vol wijde silhouetten met vrouwelijke details</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="text1-cta-text" placeholder="" autocomplete="off" value="bekijk het aanbod" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="text1-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="text1-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>

                </div>

            </ul>
        </div>



        <!--<div class="module">
            <input class="expand" type="checkbox" id="form1" /><label for="form1">Form 1</label>
            <ul class="iff">

                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="form1-type" placeholder="" autocomplete="off" value="" checked  />
                            </td>
                            <td>
                                <span class="t1">Enable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="form1-type" placeholder="" autocomplete="off" value="form1"/>
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="form1-title-row1" placeholder="" autocomplete="off" value="Text" />
                    </li>

                </div>

            </ul>
        </div>-->



        <div class="module">
            <input class="expand" type="checkbox" id="main1" /><label for="main1">Main - image - text</label>
            <ul class="iff">

                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main1-type" placeholder="" autocomplete="off" value="" checked />
                            </td>
                            <td>
                                <span class="t1">Text left</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main1-type" placeholder="" autocomplete="off" value="main1-left"/>
                            </td>
                            <td>
                                <span class="t1">Text right</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main1-type" placeholder="" autocomplete="off" value="main1-right" />
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="main1-title-row1" placeholder="" autocomplete="off" value="Nieuw merk" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="main1-title-row2" placeholder="" autocomplete="off" value="CÉLINE" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="main1-text" placeholder="" autocomplete="off">Ontdek het Franse designermerk Céline in de Bijenkorf Amsterdam en laat je inspireren door een prachtige collectie vol wijde silhouetten met vrouwelijke details</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="main1-cta-text" placeholder="" autocomplete="off" value="bekijk het aanbod" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="main1-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl" />
                    </li>
                    <li>
                        <span class="t1">Image url</span>
                        <input type="text" class="inputFile tooltip" id="main1-img-url" name="main1-img-url" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/703405_vierkantjetest.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Image width (default = 490)</span>
                        <input type="text" class="inputFile" id="main1-img-width" name="main1-img-width" placeholder="" autocomplete="off" value="490" />
                    </li>
                    <li>
                        <span class="t1">Image height</span>
                        <input type="text" class="inputFile" id="main1-img-height" name="main1-img-height" placeholder="" autocomplete="off" value="490" />
                    </li>
                    <li>
                        <span class="t1">Background color</span>
                        <input type="text" class="inputFile" name="main1-img-bgcolor" placeholder="" autocomplete="off" value="#ffffff" maxlength="20" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="main1-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>

                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="main2" /><label for="main2">Main - image - text v2</label>
            <ul class="iff">

                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main2-type" placeholder="" autocomplete="off" value="" checked />
                            </td>
                            <td>
                                <span class="t1">Text left</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main2-type" placeholder="" autocomplete="off" value="main2-left"/>
                            </td>
                            <td>
                                <span class="t1">Text center</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main2-type" placeholder="" autocomplete="off" value="main2-center"/>
                            </td>
                            <td>
                                <span class="t1">Text right</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main2-type" placeholder="" autocomplete="off" value="main2-right"/>
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="main2-title-row1" placeholder="" autocomplete="off" value="Nieuw merk" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="main2-title-row2" placeholder="" autocomplete="off" value="CÉLINE" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="main2-text" placeholder="" autocomplete="off">Ontdek het Franse designermerk Céline in de Bijenkorf Amsterdam en laat je inspireren door een prachtige collectie vol wijde silhouetten met vrouwelijke details</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="main2-cta-text" placeholder="" autocomplete="off" value="bekijk het aanbod" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="main2-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl" />
                    </li>
                    <li>
                        <span class="t1">Image url (desktop)</span>
                        <input type="text" class="inputFile tooltip" id="main2-img-url-desktop" name="main2-img-url-desktop" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/448057_maindesktop.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Image height (desktop)</span>
                        <input type="text" class="inputFile" id="main2-img-height-desktop" name="main2-img-height-desktop" placeholder="" autocomplete="off" value="400" />
                    </li>
                    <li>
                        <span class="t1">Image url (mobile)</span>
                        <input type="text" class="inputFile tooltip" id="main2-img-url-mobile" name="main2-img-url-mobile" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/448059_mainmobile.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Image height percentage (mobile)</span>
                        <input type="text" class="inputFile" id="main2-img-height-mobile" maxlength="3" name="main2-img-height-mobile" placeholder="" autocomplete="off" value="82" />
                    </li>
                    <li>
                        <span class="t1">Background color</span>
                        <input type="text" class="inputFile" name="main2-img-bgcolor" placeholder="" autocomplete="off" value="#282627" maxlength="20" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="main2-font-color" placeholder="" autocomplete="off" value="#ffffff" maxlength="20" />
                    </li>

                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="main3" /><label for="main3">Main - background - text</label>
            <ul class="iff">

                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main3-type" placeholder="" autocomplete="off" value="" checked />
                            </td>
                            <td>
                                <span class="t1">Enable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main3-type" placeholder="" autocomplete="off" value="main3"/>
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="main3-title-row1" placeholder="" autocomplete="off" value="Nieuw merk" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="main3-title-row2" placeholder="" autocomplete="off" value="CÉLINE" />
                    </li>
                    <li>
                        <span class="t1">Title HTML</span>
                        <textarea type="text" class="inputFile code" name="main3-title-html" placeholder="" autocomplete="off" style="height: 200px"></textarea>
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="main3-text" placeholder="" autocomplete="off">Ontdek het Franse designermerk Céline in de Bijenkorf Amsterdam en laat je inspireren door een prachtige collectie</textarea>
                    </li>
                    <li>
                        <span class="t1">Image url (desktop)</span>
                        <input type="text" class="inputFile tooltip" id="main3-img-url-desktop" name="main3-img-url-desktop" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/594022_marmerheaderbg720.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Image url (mobile)</span>
                        <input type="text" class="inputFile tooltip" id="main3-img-url-mobile" name="main3-img-url-mobile" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/594022_marmerheaderbg720.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Image height</span>
                        <input type="text" class="inputFile" id="main3-img-height" name="main3-img-height" placeholder="" autocomplete="off" value="220" />
                    </li>
                    <li>
                        <span class="t1">Background color</span>
                        <input type="text" class="inputFile" name="main3-img-bgcolor" placeholder="" autocomplete="off" value="#ffffff" maxlength="20" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="main3-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>
                    <li>
                        <span class="t1">Siu script</span>
                        <textarea type="text" class="inputFile code" name="cta2-script" placeholder="[cta]
    [link]https://www.yoursite.com[/link]
    [text]M[/text]
[/cta]" autocomplete="off" style="height: 400px">[cta]
    [link]https://www.debijenkorf.nl[/link]
    [text]bekijk het aanbod[/text]
[/cta]</textarea>
<a style="text-decoration: underline; font-family: arial, sans-serif; font-size: 12px;" href="javascript:window.open('doc-siu-script.html','Documentation','width=645,height=645')">Documentation</a>
                    </li>

                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="main4" /><label for="main4">Main - complex</label>
            <ul class="iff">

                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main4-type" placeholder="" autocomplete="off" value="" checked />
                            </td>
                            <td>
                                <span class="t1">Text left</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main4-type" placeholder="" autocomplete="off" value="main4-left"/>
                            </td>
                            <td>
                                <span class="t1">Text center</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main4-type" placeholder="" autocomplete="off" value="main4-center"/>
                            </td>
                            <td>
                                <span class="t1">Text right</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="main4-type" placeholder="" autocomplete="off" value="main4-right"/>
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="main4-title-row1" placeholder="" autocomplete="off" value="" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="main4-title-row2" placeholder="" autocomplete="off" value="" />
                    </li>
                    <li>
                        <span class="t1">Title HTML</span>
                        <textarea type="text" class="inputFile code" name="main4-title-html" placeholder="" autocomplete="off" style="height: 200px"><center><img src='https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/778486_logooffers.png' width='205' height='118' border='0' style='display: block;' /></center></textarea>
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="main4-text" placeholder="" autocomplete="off">Bekijk alvast onze duizenden artikelen <br class='hidden'>van topmerken en shop ze vanaf woensdag <br class='hidden'>met kortingen tot 30%</textarea>
                    </li>
                    <li>
                        <span class="t1">Image url (desktop)</span>
                        <input type="text" class="inputFile tooltip" id="main4-img-url-desktop" name="main4-img-url-desktop" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/778440_otbpodamesmobile.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Image height (desktop)</span>
                        <input type="text" class="inputFile" id="main4-img-height-desktop" name="main4-img-height-desktop" placeholder="" autocomplete="off" value="400" />
                    </li>
                    <li>
                        <span class="t1">Image width (desktop) (default = 223)</span>
                        <input type="text" class="inputFile" id="main4-img-width-desktop" name="main4-img-width-desktop" placeholder="" autocomplete="off" value="223" />
                    </li>
                    <li>
                        <span class="t1">Image url (mobile)</span>
                        <input type="text" class="inputFile tooltip" id="main4-img-url-mobile" name="main4-img-url-mobile" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/778439_otbpodamesdesktop.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Image height percentage (mobile)</span>
                        <input type="text" class="inputFile" id="main4-img-height-mobile" maxlength="3" name="main4-img-height-mobile" placeholder="" autocomplete="off" value="82" />
                    </li>
                    <li>
                        <span class="t1">Background image</span>
                        <input type="text" class="inputFile tooltip" name="main4-bgimg-url" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/778441_otbpogradient.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Background color</span>
                        <input type="text" class="inputFile" name="main4-img-bgcolor" placeholder="" autocomplete="off" value="#7b3584" maxlength="20" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="main4-font-color" placeholder="" autocomplete="off" value="#ffffff" maxlength="20" />
                    </li>
                    <li>
                        <span class="t1">CTA top offset</span>
                        <input type="text" class="inputFile tooltip2" name="main4-cta-offset" placeholder="" autocomplete="off" value="0" />
                    </li>
                    <li>
                        <span class="t1">Siu script</span>
                        <textarea type="text" class="inputFile code" name="cta-script" placeholder="[cta]
    [link]https://www.yoursite.com[/link]
    [text]M[/text]
[/cta]" autocomplete="off" style="height: 400px">[cta]
    [link]https://www.debijenkorf.nl?campaignkw=hoofdfocus_dames[/link]
    [text]dames[/text]
[/cta]

[cta]
    [link]https://www.debijenkorf.nl?campaignkw=hoofdfocus_heren[/link]
    [text]heren[/text]
[/cta]

[cta]
    [link]https://www.debijenkorf.nl?campaignkw=hoofdfocus_kinderen[/link]
    [text]kinderen[/text]
[/cta]

[cta]
    [link]https://www.debijenkorf.nl?campaignkw=hoofdfocus_wonen[/link]
    [text]wonen[/text]
[/cta]</textarea>
<a style="text-decoration: underline; font-family: arial, sans-serif; font-size: 12px;" href="javascript:window.open('doc-siu-script.html','Documentation','width=645,height=645')">Documentation</a>
                    </li>

                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="sub1" /><label for="sub1">Sub - 2 images</label>
            <ul class="iff">
                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub1-type" placeholder="" autocomplete="off" value="" checked  />
                            </td>
                            <td>
                                <span class="t1">Enable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub1-type" placeholder="" autocomplete="off" value="sub1"/>
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <p class="title" style="padding: 0;">Block A</p>
                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="sub1-a-title-row1" placeholder="" autocomplete="off" value="Title 1" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="sub1-a-title-row2" placeholder="" autocomplete="off" value="Title 2" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="sub1-a-text" placeholder="" autocomplete="off">Profiteer van wel 20% korting op mooie merken als Ted&nbsp;Baker, Claudia&nbsp;Sträter en Phase&nbsp;Eight</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="sub1-a-cta-text" placeholder="" autocomplete="off" value="bekijk het aanbod" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="sub1-a-cta-link" placeholder="" autocomplete="off" value=" https://www.debijenkorf.nl"  />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="sub1-a-img-url" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/746317_balenciaga.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="sub1-a-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>

                </div>

                <div class="inner-container">

                    <p class="title" style="padding: 0;">Block B</p>
                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="sub1-b-title-row1" placeholder="" autocomplete="off" value="Title 1" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="sub1-b-title-row2" placeholder="" autocomplete="off" value="Title 2" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="sub1-b-text" placeholder="" autocomplete="off">Mis het niet en shop schoenen van onder meer Dune, Michael&nbsp;Kors en UGG met 20% korting</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="sub1-b-cta-text" placeholder="" autocomplete="off" value="bekijk het aanbod" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="sub1-b-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl" />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="sub1-b-img-url" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/703405_vierkantjetest.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="sub1-b-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>

                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="sub2" /><label for="sub2">Sub - 3 images</label>
            <ul class="iff">
                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub2-type" placeholder="" autocomplete="off" value="" checked  />
                            </td>
                            <td>
                                <span class="t1">Enable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub2-type" placeholder="" autocomplete="off" value="sub2"/>
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <p class="title" style="padding: 0;">Block A</p>
                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="sub2-a-title-row1" placeholder="" autocomplete="off" value="20% korting" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="sub2-a-title-row2" placeholder="" autocomplete="off" value="damesmode<p style='margin: 0; padding: 0;' class='hidden'>&nbsp;</p>" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="sub2-a-text" placeholder="" autocomplete="off">Profiteer van wel 20% korting op mooie merken als Ted&nbsp;Baker, Claudia&nbsp;Sträter en Phase&nbsp;Eight</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="sub2-a-cta-text" placeholder="" autocomplete="off" value="bekijk het aanbod" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="sub2-a-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl/outlet/damesmode" />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="sub2-a-img-url" placeholder="" autocomplete="off" value="https://m.debijenkorf.nl/content/dam/images_debijenkorf/webshop/inspirationpages/lookbook/gigi-hadid/FW16%20GiGi%20Look%2001.jpg.transform/mobile/image.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="sub2-a-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>

                </div>

                <div class="inner-container">

                    <p class="title" style="padding: 0;">Block B</p>
                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="sub2-b-title-row1" placeholder="" autocomplete="off" value="20% korting" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="sub2-b-title-row2" placeholder="" autocomplete="off" value="dames<span class='hidden'>-<br></span>schoenen" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="sub2-b-text" placeholder="" autocomplete="off">Mis het niet en shop schoenen van onder meer Dune, Michael&nbsp;Kors en UGG met 20% korting</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="sub2-b-cta-text" placeholder="" autocomplete="off" value="bekijk het aabod" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="sub2-b-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl/outlet/damesmode/damesschoenen" />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="sub2-b-img-url" placeholder="" autocomplete="off" value="https://m.debijenkorf.nl/content/dam/images_debijenkorf/webshop/inspirationpages/lookbook/gigi-hadid/FW16%20GiGi%20Look%2002b.jpg.transform/mobile/image.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="sub2-b-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>

                </div>

                <div class="inner-container">

                    <p class="title" style="padding: 0;">Block C</p>
                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="sub2-c-title-row1" placeholder="" autocomplete="off" value="20% korting" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="sub2-c-title-row2" placeholder="" autocomplete="off" value="Tassen<p style='margin: 0; padding: 0;' class='hidden'>&nbsp;</p>" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="sub2-c-text" placeholder="" autocomplete="off">Vanaf woensdag: 20% korting op luxe lederwaren van Michael&nbsp;Kors, DKNY en Ralph&nbsp;Lauren</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="sub2-c-cta-text" placeholder="" autocomplete="off" value="bekijk het aanbod" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="sub2-c-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl/outlet/damesmode/tassen" />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="sub2-c-img-url" placeholder="" autocomplete="off" value="https://m.debijenkorf.nl/content/dam/images_debijenkorf/webshop/inspirationpages/lookbook/gigi-hadid/FW16%20GiGi%20Look%2014.jpg.transform/mobile/image.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="sub2-c-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>

                </div>
            </ul>
        </div>


        <div class="module">
            <input class="expand" type="checkbox" id="sub3" /><label for="sub3">Sub - image - text</label>
            <ul class="iff">
                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub3-type" placeholder="" autocomplete="off" value="" checked />
                            </td>
                            <td>
                                <span class="t1">Enable - Text left</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub3-type" placeholder="" autocomplete="off" value="sub3"/>
                            </td>
                            <td>
                                <span class="t1">Enable - Text right</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub3-type" placeholder="" autocomplete="off" value="sub3-flipped" />
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="sub3-title-row1" placeholder="" autocomplete="off" value="net binnen" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="sub3-title-row2" placeholder="" autocomplete="off" value="DAMES" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="sub3-text" placeholder="" autocomplete="off">Zet dit seizoen een trend met de nieuwste items van de mooiste merken</textarea>
                    </li>
                    <li>
                        <span class="t1">Text vertical offset (default = 140)</span>
                        <input type="text" class="inputFile" name="sub3-text-vertical-offset" placeholder="" autocomplete="off" value="140" />
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="sub3-cta-text" placeholder="" autocomplete="off" value="button" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="sub3-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl"  />
                    </li>
                    <li>
                        <span class="t1">Image (default size = 400x400)</span>
                        <input type="text" class="inputFile tooltip" name="sub3-img-url" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/756763_sub3.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Image height</span>
                        <input type="text" class="inputFile tooltip" name="sub3-img-height" placeholder="" autocomplete="off" value="400" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="sub3-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>

                </div>

            </ul>
        </div>


        <div class="module">
            <input class="expand" type="checkbox" id="sub4" /><label for="sub4">Sub - feed</label>
            <ul class="iff">
                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub4-type" placeholder="" autocomplete="off" value="" checked />
                            </td>
                            <td>
                                <span class="t1">Enable - Text left</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub4-type" placeholder="" autocomplete="off" value="sub4"/>
                            </td>
                            <td>
                                <span class="t1">Enable - Text right</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub4-type" placeholder="" autocomplete="off" value="sub4-flipped" />
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="sub4-title-row1" placeholder="" autocomplete="off" value="net binnen" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="sub4-title-row2" placeholder="" autocomplete="off" value="DAMES" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="sub4-text" placeholder="" autocomplete="off">Zet dit seizoen een trend met de nieuwste items van de mooiste merken</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="sub4-cta-text" placeholder="" autocomplete="off" value="button" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="sub4-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl"  />
                    </li>
                    <li>
                        <span class="t1">Image (default size = 400x400)</span>
                        <input type="text" class="inputFile tooltip" name="sub4-img-url" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/756763_sub3.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="sub4-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>
                    <li>
                        <span class="t1">Feed code HTML</span>
                        <textarea type="text" class="inputFile code" name="sub4-feed" placeholder="<table ..." autocomplete="off"></textarea>
                    </li>

                </div>
            </ul>
        </div>


        <div class="module">
            <input class="expand" type="checkbox" id="sub5" /><label for="sub5">Sub - 2 column - notm</label>
            <ul class="iff">
                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub5-type" placeholder="" autocomplete="off" value="" checked  />
                            </td>
                            <td>
                                <span class="t1">Enable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub5-type" placeholder="" autocomplete="off" value="sub5"/>
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <p class="title" style="padding: 0;">Title</p>
                    <li>
                        <input type="text" class="inputFile" name="sub5-title" placeholder="" autocomplete="off" value="In de filialen" />
                    </li>

                </div>

                <div class="inner-container">

                    <p class="title" style="padding: 0;">Block A</p>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="sub5-a-text" placeholder="" autocomplete="off">Zet dit seizoen een trend met de nieuwste items van de mooiste merken</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="sub5-a-cta-text" placeholder="" autocomplete="off" value="button" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="sub5-a-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl"  />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="sub5-a-img-url" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/703405_vierkantjetest.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="sub5-a-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>

                </div>

                <div class="inner-container">

                    <p class="title" style="padding: 0;">Block B</p>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="sub5-b-text" placeholder="" autocomplete="off">Maak dit seizoen een stijlvol statement met de nieuwste items van de mooiste merken</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="sub5-b-cta-text" placeholder="" autocomplete="off" value="button" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="sub5-b-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl" />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="sub5-b-img-url" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/703405_vierkantjetest.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="sub5-b-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>

                </div>

            </ul>
        </div>


        <div class="module">
            <input class="expand" type="checkbox" id="sub7" /><label for="sub7">Sub - maten</label>
            <ul class="iff">
                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub7-type" placeholder="" autocomplete="off" value="" checked />
                            </td>
                            <td>
                                <span class="t1">Enable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="sub7-type" placeholder="" autocomplete="off" value="sub7"/>
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">Title row 1</span>
                        <input type="text" class="inputFile" name="sub7-title-row1" placeholder="" autocomplete="off" value="net binnen" />
                    </li>
                    <li>
                        <span class="t1">Title row 2</span>
                        <input type="text" class="inputFile" name="sub7-title-row2" placeholder="" autocomplete="off" value="DAMES" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="sub7-text" placeholder="" autocomplete="off">Zet dit seizoen een trend met de nieuwste items van de mooiste merken</textarea>
                    </li>
                    <li>
                        <span class="t1">Text vertical offset (default = 100)</span>
                        <input type="text" class="inputFile" name="sub7-text-vertical-offset" placeholder="" autocomplete="off" value="100" />
                    </li>
                    <li>
                        <span class="t1">Image (default size = 400x400)</span>
                        <input type="text" class="inputFile tooltip" name="sub7-img-url" placeholder="" autocomplete="off" value="https://i.emlfiles.com/cmpimg/2/8/7/6/0/1/files/756763_sub3.jpg" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>
                    <li>
                        <span class="t1">Image height</span>
                        <input type="text" class="inputFile tooltip" name="sub7-img-height" placeholder="" autocomplete="off" value="400" />
                    </li>
                    <li>
                        <span class="t1">Font color</span>
                        <input type="text" class="inputFile" name="sub7-font-color" placeholder="" autocomplete="off" value="#000001" maxlength="20" />
                    </li>

                    <li>
                        <span class="t1">Siu script</span>
                        <textarea type="text" class="inputFile code" name="sizes-script" placeholder="[size]
    [link]https://www.yoursite.com/?size=M[/link]
    [text]M[/text]
[/size]" autocomplete="off" style="height: 400px">[size]
    [link]https://www.debijenkorf.nl/?size=44[/link]
    [text]44[/text]
[/size]

[size]
    [link]https://www.debijenkorf.nl/?size=45[/link]
    [text]45[/text]
[/size]

[size]
    [link]https://www.debijenkorf.nl/?size=46[/link]
    [text]46[/text]
[/size]

[size]
    [link]https://www.debijenkorf.nl/?size=47[/link]
    [text]47[/text]
[/size]</textarea>
<a style="text-decoration: underline; font-family: arial, sans-serif; font-size: 12px;" href="javascript:window.open('doc-siu-script.html','Documentation','width=645,height=645')">Documentation</a>
                    </li>

                </div>
            </ul>
        </div>


        <div class="module">
            <input class="expand" type="checkbox" id="top-list" /><label for="top-list">Top # template</label>
            <ul class="iff">

                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="top-list-type" placeholder="" autocomplete="off" value="" checked  />
                            </td>
                            <td>
                                <span class="t1">Enable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="top-list-type" placeholder="" autocomplete="off" value="top-list"/>
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <input type="checkbox" name="top-list-1-toggle" id="top-list-1-toggle" value="Y" checked disabled /><label for="top-list-1-toggle">Minimum of 1 module</label>
                    <li>
                        <span class="t1">Typograph one character</span>
                        <input maxlength="1" type="text" class="inputFile" name="top-list-1-number" placeholder="" autocomplete="off" value="1" />
                    </li>
                    <li>
                        <span class="t1">Title</span>
                        <input type="text" class="inputFile" name="top-list-1-title" placeholder="" autocomplete="off" value="Mooie Designerjassen" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="top-list-1-text" placeholder="" autocomplete="off">Steel de show door te kiezen voor een designerstuk. Merken als See By Chloé, Acne Studios en Victoria Victoria Beckham bieden prachtige exemplaren voor het najaar.</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="top-list-1-cta-text" placeholder="" autocomplete="off" value="bekijk de trend" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="top-list-1-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl/?campaignkw="  />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="top-list-1-img-url" placeholder="" autocomplete="off" value="http://placehold.it/400x600" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>

                </div>

                <div class="inner-container">

                    <input type="checkbox" name="top-list-2-toggle" id="top-list-2-toggle" value="Y" checked /><label for="top-list-2-toggle">Check to enable</label>
                    <li>
                        <span class="t1">Typograph one character</span>
                        <input maxlength="1" type="text" class="inputFile" name="top-list-2-number" placeholder="" autocomplete="off" value="2" />
                    </li>
                    <li>
                        <span class="t1">Title</span>
                        <input type="text" class="inputFile" name="top-list-2-title" placeholder="" autocomplete="off" value="Mooie Designerjassen" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="top-list-2-text" placeholder="" autocomplete="off">Steel de show door te kiezen voor een designerstuk. Merken als See By Chloé, Acne Studios en Victoria Victoria Beckham bieden prachtige exemplaren voor het najaar.</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="top-list-2-cta-text" placeholder="" autocomplete="off" value="bekijk de trend" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="top-list-2-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl/?campaignkw="  />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="top-list-2-img-url" placeholder="" autocomplete="off" value="http://placehold.it/400x600" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>

                </div>

                <div class="inner-container">

                    <input type="checkbox" name="top-list-3-toggle" id="top-list-3-toggle" value="Y" checked /><label for="top-list-3-toggle">Check to enable</label>
                    <li>
                        <span class="t1">Typograph one character</span>
                        <input maxlength="1" type="text" class="inputFile" name="top-list-3-number" placeholder="" autocomplete="off" value="3" />
                    </li>
                    <li>
                        <span class="t1">Title</span>
                        <input type="text" class="inputFile" name="top-list-3-title" placeholder="" autocomplete="off" value="Mooie Designerjassen" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="top-list-3-text" placeholder="" autocomplete="off">Steel de show door te kiezen voor een designerstuk. Merken als See By Chloé, Acne Studios en Victoria Victoria Beckham bieden prachtige exemplaren voor het najaar.</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="top-list-3-cta-text" placeholder="" autocomplete="off" value="bekijk de trend" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="top-list-3-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl/?campaignkw="  />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="top-list-3-img-url" placeholder="" autocomplete="off" value="http://placehold.it/400x600" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>

                </div>

                <div class="inner-container">

                    <input type="checkbox" name="top-list-4-toggle" id="top-list-4-toggle" value="Y" checked /><label for="top-list-4-toggle">Check to enable</label>
                    <li>
                        <span class="t1">Typograph one character</span>
                        <input maxlength="1" type="text" class="inputFile" name="top-list-4-number" placeholder="" autocomplete="off" value="4" />
                    </li>
                    <li>
                        <span class="t1">Title</span>
                        <input type="text" class="inputFile" name="top-list-4-title" placeholder="" autocomplete="off" value="Mooie Designerjassen" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="top-list-4-text" placeholder="" autocomplete="off">Steel de show door te kiezen voor een designerstuk. Merken als See By Chloé, Acne Studios en Victoria Victoria Beckham bieden prachtige exemplaren voor het najaar.</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="top-list-4-cta-text" placeholder="" autocomplete="off" value="bekijk de trend" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="top-list-4-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl/?campaignkw="  />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="top-list-4-img-url" placeholder="" autocomplete="off" value="http://placehold.it/400x600" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>

                </div>

                <div class="inner-container">

                    <input type="checkbox" name="top-list-5-toggle" id="top-list-5-toggle" value="Y" checked /><label for="top-list-5-toggle">Check to enable</label>
                    <li>
                        <span class="t1">Typograph one character</span>
                        <input maxlength="1" type="text" class="inputFile" name="top-list-5-number" placeholder="" autocomplete="off" value="5" />
                    </li>
                    <li>
                        <span class="t1">Title</span>
                        <input type="text" class="inputFile" name="top-list-5-title" placeholder="" autocomplete="off" value="Mooie Designerjassen" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="top-list-5-text" placeholder="" autocomplete="off">Steel de show door te kiezen voor een designerstuk. Merken als See By Chloé, Acne Studios en Victoria Victoria Beckham bieden prachtige exemplaren voor het najaar.</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="top-list-5-cta-text" placeholder="" autocomplete="off" value="bekijk de trend" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="top-list-5-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl/?campaignkw="  />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="top-list-5-img-url" placeholder="" autocomplete="off" value="http://placehold.it/400x600" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>

                </div>

                <div class="inner-container">

                    <input type="checkbox" name="top-list-6-toggle" id="top-list-6-toggle" value="Y" /><label for="top-list-6-toggle">Check to enable</label>
                    <li>
                        <span class="t1">Typograph one character</span>
                        <input maxlength="1" type="text" class="inputFile" name="top-list-6-number" placeholder="" autocomplete="off" value="6" />
                    </li>
                    <li>
                        <span class="t1">Title</span>
                        <input type="text" class="inputFile" name="top-list-6-title" placeholder="" autocomplete="off" value="Mooie Designerjassen" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="top-list-6-text" placeholder="" autocomplete="off">Steel de show door te kiezen voor een designerstuk. Merken als See By Chloé, Acne Studios en Victoria Victoria Beckham bieden prachtige exemplaren voor het najaar.</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="top-list-6-cta-text" placeholder="" autocomplete="off" value="bekijk de trend" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="top-list-6-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl/?campaignkw="  />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="top-list-6-img-url" placeholder="" autocomplete="off" value="http://placehold.it/400x600" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>

                </div>

                <div class="inner-container">

                    <input type="checkbox" name="top-list-7-toggle" id="top-list-7-toggle" value="Y" /><label for="top-list-7-toggle">Check to enable</label>
                    <li>
                        <span class="t1">Typograph one character</span>
                        <input maxlength="1" type="text" class="inputFile" name="top-list-7-number" placeholder="" autocomplete="off" value="7" />
                    </li>
                    <li>
                        <span class="t1">Title</span>
                        <input type="text" class="inputFile" name="top-list-7-title" placeholder="" autocomplete="off" value="Mooie Designerjassen" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="top-list-7-text" placeholder="" autocomplete="off">Steel de show door te kiezen voor een designerstuk. Merken als See By Chloé, Acne Studios en Victoria Victoria Beckham bieden prachtige exemplaren voor het najaar.</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="top-list-7-cta-text" placeholder="" autocomplete="off" value="bekijk de trend" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="top-list-7-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl/?campaignkw="  />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="top-list-7-img-url" placeholder="" autocomplete="off" value="http://placehold.it/400x600" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>

                </div>

                <div class="inner-container">

                    <input type="checkbox" name="top-list-8-toggle" id="top-list-8-toggle" value="Y" /><label for="top-list-8-toggle">Check to enable</label>
                    <li>
                        <span class="t1">Typograph one character</span>
                        <input maxlength="1" type="text" class="inputFile" name="top-list-8-number" placeholder="" autocomplete="off" value="8" />
                    </li>
                    <li>
                        <span class="t1">Title</span>
                        <input type="text" class="inputFile" name="top-list-8-title" placeholder="" autocomplete="off" value="Mooie Designerjassen" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="top-list-8-text" placeholder="" autocomplete="off">Steel de show door te kiezen voor een designerstuk. Merken als See By Chloé, Acne Studios en Victoria Victoria Beckham bieden prachtige exemplaren voor het najaar.</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="top-list-8-cta-text" placeholder="" autocomplete="off" value="bekijk de trend" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="top-list-8-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl/?campaignkw="  />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="top-list-8-img-url" placeholder="" autocomplete="off" value="http://placehold.it/400x600" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>

                </div>

                <div class="inner-container">

                    <input type="checkbox" name="top-list-9-toggle" id="top-list-9-toggle" value="Y" /><label for="top-list-9-toggle">Check to enable</label>
                    <li>
                        <span class="t1">Typograph one character</span>
                        <input maxlength="1" type="text" class="inputFile" name="top-list-9-number" placeholder="" autocomplete="off" value="9" />
                    </li>
                    <li>
                        <span class="t1">Title</span>
                        <input type="text" class="inputFile" name="top-list-9-title" placeholder="" autocomplete="off" value="Mooie Designerjassen" />
                    </li>
                    <li>
                        <span class="t1">Text</span>
                        <textarea type="text" class="inputFile" name="top-list-9-text" placeholder="" autocomplete="off">Steel de show door te kiezen voor een designerstuk. Merken als See By Chloé, Acne Studios en Victoria Victoria Beckham bieden prachtige exemplaren voor het najaar.</textarea>
                    </li>
                    <li>
                        <span class="t1">CTA text</span>
                        <input type="text" class="inputFile" name="top-list-9-cta-text" placeholder="" autocomplete="off" value="bekijk de trend" />
                    </li>
                    <li>
                        <span class="t1">CTA link</span>
                        <input type="text" class="inputFile tooltip2" name="top-list-9-cta-link" placeholder="" autocomplete="off" value="https://www.debijenkorf.nl/?campaignkw="  />
                    </li>
                    <li>
                        <span class="t1">Image</span>
                        <input type="text" class="inputFile tooltip" name="top-list-9-img-url" placeholder="" autocomplete="off" value="http://placehold.it/400x600" onmouseover="$('#imgpreview').attr('src',this.value)" />
                    </li>

                </div>

            </ul>
        </div>



        <div class="module">
            <input class="expand" type="checkbox" id="html" /><label for="html">HTML</label>
            <ul class="iff">
                <li>
                    <table width="400" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <span class="t1">Disable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="html-type" placeholder="" autocomplete="off" value="" checked />
                            </td>
                            <td>
                                <span class="t1">Enable</span><br>
                                <input style="width: 100px !important;" type="radio" class="inputFile" name="html-type" placeholder="" autocomplete="off" value="html" />
                            </td>
                        </tr>
                    </table>
                </li>

                <div class="inner-container">

                    <li>
                        <span class="t1">HTML</span>
                        <textarea type="text" class="inputFile code" name="html-code" placeholder="" style="height: 400px"></textarea>
                    </li>

                </div>
            </ul>
        </div>



    </form>
</div>

<p style="font-size: 14px; padding: 15px 30px; margin: 0; font-family: Helvetica, Arial, sans-serif; color: black;">Visual output & compiled source code:</p>

<div class="iframeHolder" id="codeVisualOutputFrame">
    <iframe class="codeVisualOutput" scrolling="yes" name="outputFrame" id="outputFrame" src="http://" border="0" frameborder="0" style="min-height: 540px; background: white;"></iframe>
</div>

<script src="script/jquery.iframe-auto-height.plugin.js"></script>

</body>

</html>