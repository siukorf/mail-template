<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG /><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
<head>
    <title>de Bijenkorf</title>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="x-apple-disable-message-reformatting" />
    <!--[if (gte mso 9)|(IE)]><style type="text/css">table {border-collapse: collapse;}</style><![endif]-->
    <!--[if gte mso 15]><style type='text/css'>table { font-size:1px; line-height:0; mso-margin-top-alt:1px;mso-line-height-rule: exactly; } * { mso-line-height-rule: exactly; }</style><![endif]-->
    <style media="screen" type="text/css">
        <?php echo htmlentities($_POST['screen-css']) ?>
    </style>
    <style media="only screen and (max-width: 45em) and (-webkit-min-device-pixel-ratio: 0)" type="text/css">
        <?php echo htmlentities($_POST['query1-css']) ?>
    </style>
    <style media="only screen and (max-width: 30em) and (-webkit-min-device-pixel-ratio: 0)" type="text/css">
        <?php echo htmlentities($_POST['query2-css']) ?>
    </style>
</head>

<body bgcolor="#ffffff" style="margin: 0 !important; padding: 0; background-color: #ffffff !important; width: 100%;">
    <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"><?php echo htmlentities($_POST['pre-header']); ?>. </div>
    <center style="width: 100%;table-layout: fixed;margin: 0 !important;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td bgcolor="#f6a800" height="5" style="height: 5px; line-height: 5px; font-size: 5px; max-height: 5px; background-color: #f6a800;">&nbsp;</td>
            </tr>
        </table>
        <table width="100%" align="center" class="ee_element" cellspacing="0" cellpadding="0" border="0" style="max-width: 720px;margin: 0 auto">
            <tr>
                <td class="ee_dropzone">
                    <?php include '../modules/' . $_POST['header-type'] . '.php' ?>
                </td>
            </tr>
        </table>
        <!--[if mso]><p style="display: none;"><![endif]-->
        <input type="checkbox" id="mobile-checkbox" class="bypass-hide" style="display: none !important; visibility: hidden;" />
        <!--[if mso]></p><![endif]-->
        <table class="bypass-hide" width="100%" cellspacing="0" cellpadding="0" border="0" style="display: table !important; visibility: visible !important;">
            <tr>
                <td bgcolor="#f6f6f6" style="background-color: #f6f6f6;">
                    <div style="margin: 0 auto;width: 100%">
                        <!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" width="720" align="center"><tr><td><![endif]-->
                        <table class="nav-mobile-position" width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto">
                            <tr>
                                <td>
                                    <label for="mobile-checkbox" class="hamburger-trigger"><span class="nav-hamburger-line"></span><span class="nav-hamburger-line"></span><span class="nav-hamburger-line"></span></label>
                                    <table class="max-div-width" width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto">
                                        <tr>
                                            <td style="text-align: left;font-size: 0">
                                                <div id="menu-wrapper" style="width: 100%; max-width: 720px; padding: 0; margin: 0;">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td valign="top" class="mobile-padding-10" style="text-align: center;">
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                <table width="720" cellspacing="0" cellpadding="0" align="center" border="0">
                                                                <tr>
                                                                <td width="240" valign="top">
                                                                <![endif]-->
                                                                <div dir="ltr" class="remove-max-width" style="width: 100%;max-width: 240px;margin: 0 auto;display: inline-block;vertical-align: top">
                                                                    <table class="full-width" align="left" width="240" cellspacing="0" cellpadding="0">
                                                                        <tr>
                                                                            <td class="nav-mobile-style ee_editable" width="50%" style="width: 50%; text-align: center;<?php echo htmlentities($_POST['font-nav']) . ';' ?>vertical-align: middle;color: #000001;text-decoration: none; white-space: nowrap"><a href="<?php echo htmlentities($_POST['nav-item1-link']); ?>" class="menu-item" style="text-align: center;letter-spacing: 0.1em;<?php echo htmlentities($_POST['font-nav']) . ';' ?>vertical-align: middle;color: #000001;text-decoration: none; white-space: nowrap; display: block;"><?php echo strtoupper(htmlentities($_POST['nav-item1-text'])); ?></a></td>
                                                                            <td class="nav-mobile-style ee_editable" width="50%" style="width: 50%; text-align: center;<?php echo htmlentities($_POST['font-nav']) . ';' ?>vertical-align: middle;color: #000001;text-decoration: none; white-space: nowrap"><a href="<?php echo htmlentities($_POST['nav-item2-link']); ?>" class="menu-item" style="text-align: center;letter-spacing: 0.1em;<?php echo htmlentities($_POST['font-nav']) . ';' ?>vertical-align: middle;color: #000001;text-decoration: none; white-space: nowrap; display: block;"><?php echo strtoupper(htmlentities($_POST['nav-item2-text'])); ?></a></td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                </td>
                                                                <td width="240" valign="top">
                                                                <![endif]-->
                                                                <div dir="ltr" class="remove-max-width" style="width: 100%;max-width: 240px;margin: 0 auto;display: inline-block;vertical-align: top">
                                                                    <table class="full-width" align="left" width="240" cellspacing="0" cellpadding="0">
                                                                        <tr>
                                                                            <td class="nav-mobile-style ee_editable" width="50%" style="width: 50%; text-align: center;<?php echo htmlentities($_POST['font-nav']) . ';' ?>vertical-align: middle;color: #000001;text-decoration: none; white-space: nowrap"><a href="<?php echo htmlentities($_POST['nav-item3-link']); ?>" class="menu-item" style="text-align: center;letter-spacing: 0.1em;<?php echo htmlentities($_POST['font-nav']) . ';' ?>vertical-align: middle;color: #000001;text-decoration: none; white-space: nowrap; display: block;"><?php echo strtoupper(htmlentities($_POST['nav-item3-text'])); ?></a></td>
                                                                            <td class="nav-mobile-style ee_editable" width="50%" style="width: 50%; text-align: center;<?php echo htmlentities($_POST['font-nav']) . ';' ?>vertical-align: middle;color: #000001;text-decoration: none; white-space: nowrap"><a href="<?php echo htmlentities($_POST['nav-item4-link']); ?>" class="menu-item" style="text-align: center;letter-spacing: 0.1em;<?php echo htmlentities($_POST['font-nav']) . ';' ?>vertical-align: middle;color: #000001;text-decoration: none; white-space: nowrap; display: block;"><?php echo strtoupper(htmlentities($_POST['nav-item4-text'])); ?></a></td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                </td>
                                                                <td width="240" valign="top">
                                                                <![endif]-->
                                                                <div dir="ltr" class="remove-max-width" style="width: 100%;max-width: 240px;margin: 0 auto;display: inline-block;vertical-align: top">
                                                                    <table class="full-width" align="left" width="240" cellspacing="0" cellpadding="0">
                                                                        <tr>
                                                                            <td class="nav-mobile-style ee_editable" width="50%" style="width: 50%; text-align: center;<?php echo htmlentities($_POST['font-nav']) . ';' ?>vertical-align: middle;color: #000001;text-decoration: none; white-space: nowrap"><a href="<?php echo htmlentities($_POST['nav-item5-link']); ?>" class="menu-item" style="text-align: center;letter-spacing: 0.1em;<?php echo htmlentities($_POST['font-nav']) . ';' ?>vertical-align: middle;color: #000001;text-decoration: none; white-space: nowrap; display: block;"><?php echo strtoupper(htmlentities($_POST['nav-item5-text'])); ?></a></td>
                                                                            <td class="nav-mobile-style ee_editable" width="50%" style="width: 50%; text-align: center;<?php echo htmlentities($_POST['font-nav']) . ';' ?>vertical-align: middle;color: #000001;text-decoration: none; white-space: nowrap"><a href="<?php echo htmlentities($_POST['nav-item6-link']); ?>" class="menu-item" style="text-align: center;letter-spacing: 0.1em;<?php echo htmlentities($_POST['font-nav']) . ';' ?>vertical-align: middle;color: #000001;text-decoration: none; white-space: nowrap; display: block;"><?php echo strtoupper(htmlentities($_POST['nav-item6-text'])); ?></a></td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                </td>
                                                                </tr>
                                                                </table>
                                                                <![endif]-->
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                    </div>
                </td>
            </tr>
        </table>
        <div>
            <table width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="10" style="height: 10px; font-size: 10px; line-height: 10px;"></td>
                </tr>
            </table>
        </div>
        <table width="100%" align="center" class="ee_element" cellspacing="0" cellpadding="0" border="0" style="max-width: 720px;margin: 0 auto">
            <tr>
                <td class="ee_dropzone">
                    <?php include '../modules/' . $_POST['html-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['text1-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['text2-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['form1-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['main1-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['main2-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['main3-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['main4-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['sub1-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['sub2-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['sub3-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['sub4-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['sub5-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['sub6-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['sub7-type'] . '.php' ?>
                    <?php include '../modules/' . $_POST['top-list-type'] . '.php' ?>
                </td>
            </tr>
        </table>
        <div>
            <table width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="10" style="height: 10px; font-size: 10px; line-height: 10px;"></td>
                </tr>
            </table>
        </div>
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td style="border-bottom: 2px solid #e3e3e3;"></td>
            </tr>
        </table>
        <table width="100%" align="center" class="ee_element" cellspacing="0" cellpadding="0" border="0" style="max-width: 720px;margin: 0 auto">
            <tr>
                <td class="ee_dropzone">
                    <?php include '../modules/' . $_POST['footer-type'] . '.php' ?>
                </td>
            </tr>
        </table>
        <div style="max-width: 720px;margin: 0 auto;width: 100%">
            <!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" width="720" align="center"><tr><td><![endif]-->
            <table width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto">
                <tr>
                    <td>
                        <table class="max-div-width" width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto">
                            <tr>
                                <td style="text-align: left;font-size: 0">
                                    <table width="100%" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td valign="top">
                                                <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td class="ee_editable" style="<?php echo htmlentities($_POST['font-body']) . ';' ?>; text-align: left; padding: 10px 20px 40px 20px;"><span><a href="https://www.debijenkorf.nl/filialen?campaignkw=Filialen" style="color: #000001; text-decoration: none;">Filialen</a></span><span style="color: #000001; font-weight: 100;">&nbsp;| </span><span><a href="https://www.thuiswinkel.org/leden/de-bijenkorf/cert?campaignkw=Thuiswinkel-waarborg" style="color: #000001; text-decoration: none;">Thuiswinkel&nbsp;waarborg</a></span><span style="color: #000001; font-weight: 100;">&nbsp;| </span><span><a href="https://$UNSUB$" style="color: #000001; text-decoration: none;">Uitschrijven&nbsp;nieuwsbrief</a></span></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
        </div>
    </center>
</body>

</html>