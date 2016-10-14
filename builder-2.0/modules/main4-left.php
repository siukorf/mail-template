<table class="ee_element" width="100%" cellspacing="0" cellpadding="0" align="center" border="0" style="max-width: 720px;margin: 0 auto; width: 100% !important;">
    <tr>
        <td class="ee_dropzone" width="100%" style="width: 100% !important;">
            <div style="max-width: 720px;margin: 0 auto;width: 100%">
                <!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" width="720" height="<?php echo htmlentities($_POST['main4-img-height-desktop']); ?>" align="center"><tr><td><![endif]-->
                <table width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto;overflow: hidden;">
                    <tr>
                        <td background="<?php echo htmlentities($_POST['main4-bgimg-url']); ?>" style="background: <?php echo htmlentities($_POST['main4-bg-color']); ?> url('<?php echo htmlentities($_POST['main4-bgimg-url']); ?>'); background-size: cover;">
                            <table class="max-div-width" width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto;overflow: hidden;">
                                <tr>
                                    <td style="text-align: left;font-size: 0">
                                        <style media="only screen and (max-width: 45em) and (-webkit-min-device-pixel-ratio: 0)" type="text/css">
                                            @media only screen and (max-width: 45em) and (-webkit-min-device-pixel-ratio: 0) {
                                                *[class].vml4 {
                                                    background: #ffffff !important;
                                                    min-width: 100% !important;
                                                    padding: 0 !important;
                                                    height: auto !important;
                                                }
                                                *[class].vml4-min-height {
                                                    min-height: 240px !important;
                                                }
                                                *[class].vml4-height {
                                                    height: <?php echo htmlentities($_POST['main4-img-height-mobile']); ?>vw !important;
                                                }
                                                *[class].vml4-mob {
                                                    width: 100% !important;
                                                    background: #ffffff url('<?php echo htmlentities($_POST['main4-img-url-mobile']); ?>') no-repeat center top !important;
                                                    background-size: cover !important;
                                                }
                                            }
                                        </style>           
                                        <table dir="ltr" cellpadding="0" cellspacing="0" border="0" width="100%" align="center" class="max-div-width2" style="margin: 0 auto;">
                                            <tr>
                                                <td style="text-align: center;">
                                                    <!--[if (gte mso 9)|(IE)]><table width="100%" cellspacing="0" cellpadding="0" align="center"><tr><td width="<?php echo $_POST['main4-img-width-desktop']; ?>" valign="top"><![endif]-->
                                                    <div class="remove-max-width" dir="ltr" style="width: 100%;max-width: <?php echo htmlentities($_POST['main4-img-width-desktop']); ?>px;display: inline-block;vertical-align: top; float: right;">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td class="hidden">
                                                                    <center><img class="max-image-width full-width" src="<?php echo htmlentities($_POST['main4-img-url-desktop']); ?>" width="<?php echo $_POST['main4-img-width-desktop']; ?>" height="auto" style="border: 0;" alt="" style="width: <?php echo $_POST['main4-img-width-desktop']; ?>px !important;" /></center>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class="vml2-min-height" width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                                <td class="vml4-mob vml4-height"></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <!--[if (gte mso 9)|(IE)]></td><td width="<?php echo (720 - htmlentities($_POST['main4-img-width-desktop'])); ?>"><![endif]-->
                                                    <div class="remove-max-width" dir="ltr" style="width: 100%;max-width: <?php echo (720 - htmlentities($_POST['main4-img-width-desktop'])); ?>px; display: inline-block;vertical-align: middle">
                                                         <!--[if gte mso 9]>
                                                        <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:<?php echo (720 - htmlentities($_POST['main4-img-width-desktop'])); ?>px;height:<?php echo htmlentities($_POST['main4-img-height-desktop']); ?>px;background-repeat: no-repeat; background-position: center top;">
                                                        <v:fill type="frame" color="<?php echo htmlentities($_POST['main4-img-bgcolor']); ?>" src="<?php echo htmlentities($_POST['main4-bgimg-url']); ?>"></v:fill>
                                                        <![endif]-->
                                                        <table class="auto-height" width="100%" cellspacing="0" cellpadding="0" height="<?php echo htmlentities($_POST['main4-img-height-desktop']); ?>">
                                                            <tr>
                                                                <td valign="middle" style="margin: auto 0;">
                                                                    <table tabindex="1" width="100%" cellspacing="0" cellpadding="0">
                                                                        <?php 
                                                                        if (!empty($_POST['main4-title-row1'])) {
                                                                            echo '
                                                                            <tr>
                                                                                <td class="align-center ee_editable" style="vertical-align: top;' . ($_POST['font-title1']) . ';color: ' . $_POST['main4-font-color'] . ';text-align: center; padding: 20px 20px 0 20px;"><span style="color: ' . $_POST['main4-font-color'] . ';">' . $_POST['main4-title-row1'] . '</span></td>
                                                                            </tr>
                                                                            ';
                                                                        }
                                                                        if (!empty($_POST['main4-title-row2'])) {
                                                                            echo '
                                                                            <tr>
                                                                                <td class="align-center ee_editable" style="vertical-align: top;' . ($_POST['font-title2']) . ';color: ' . $_POST['main4-font-color'] . ';text-align: center; padding: 5px 20px 10px 20px;"><span style="color: ' . $_POST['main4-font-color'] . ';">' . $_POST['main4-title-row2'] . '</span></td>
                                                                            </tr>
                                                                            ';
                                                                        }
                                                                        if (!empty($_POST['main4-title-html'])) {
                                                                            echo '
                                                                            <tr>
                                                                                <td class="align-center ee_editable" style="vertical-align: top; text-align: center; padding: 30px 0 10px 0;">' . $_POST['main4-title-html'] . '</td>
                                                                            </tr>
                                                                            ';
                                                                        }
                                                                        ?>
                                                                        <tr>
                                                                            <td class="align-center ee_editable" style="vertical-align: top;<?php echo htmlentities($_POST['font-body']) . ';' ?>color: <?php echo htmlentities($_POST['main4-font-color']); ?>;text-align: center; padding: 0 20px 20px 20px;"><span style="color: <?php echo htmlentities($_POST['main4-font-color']); ?>;"><?php echo nl2br(htmlentities($_POST['main4-text'])); ?></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding: 0 20px 0 20px;">
                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                    <tr>
                                                                                        <td class="remove-padding" style="padding-top: <?php echo htmlentities($_POST['main4-cta-offset']) ?>px;">
                                                                                            <table class="max-div-width2" align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto;">
                                                                                                <tr>
                                                                                                    <?php

                                                                                                        $fullstring2 = $_POST['cta-script'];

                                                                                                        $btnclass2 = 'column50';

                                                                                                        function get_string_between2($string, $start, $end) {
                                                                                                            $start = preg_quote($start);
                                                                                                            $end = preg_quote($end);
                                                                                                            $pattern = "~$start\s*(.*?)$end\s*~";
                                                                                                            $match = preg_match_all($pattern, $string, $matches);
                                                                                                            if ($match) {
                                                                                                                return $matches[1];
                                                                                                            }
                                                                                                        }

                                                                                                        $parsed3 = preg_replace('/\s+/', '', get_string_between2($fullstring2, '[link]', '[/link]'));
                                                                                                        $parsed4 = get_string_between2($fullstring2, '[text]', '[/text]');

                                                                                                        if (count($parsed3) >= 2) {
                                                                                                            $max2 = 25;
                                                                                                        } else if (count($parsed3) === 1) {
                                                                                                            $btnclass2 = 'full-width';
                                                                                                            $max2 = (100 / count($parsed3));
                                                                                                        } else {
                                                                                                            $max2 = (100 / count($parsed3));
                                                                                                        }

                                                                                                        if (strpos($fullstring2, '[cta]') !== false and strpos($fullstring2, '[/cta]') !== false) {

                                                                                                            for ($i2=0; $i2 < count($parsed3); $i2++) {
                                                                                                                if ($i2 === 2 or $i2 === 4 or $i2 === 6 or $i2 === 8) {
                                                                                                                    echo '</tr><tr>';
                                                                                                                }
                                                                                                                echo '
                                                                                                                    <td class="' . $btnclass2 . '" width="' . $max2 . '%">
                                                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                            <tr>
                                                                                                                                <td style="text-align: center; padding: 0 5px 10px 5px;" class="align-center">
                                                                                                                                    <div style="position:relative;">
                                                                                                                                        <!--[if mso]>
                                                                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                            <tr>
                                                                                                                                                <td>
                                                                                                                                                    <table border="0" cellspacing="0" cellpadding="0" align="center" style="margin: 0 auto; min-width: 110px;" height="35" width="' . (strlen($parsed4[$i2]) * 7 + 26) . '">
                                                                                                                                                        <tr>
                                                                                                                                                            <td bgcolor="#000000" style="padding: 0; -webkit-border-radius:0px; border-radius:0px; min-width: 110px; color: #ffffff; line-height: 12px; letter-spacing: 0.6px; text-decoration: none;" align="center" height="35" width="' . (strlen($parsed4[$i2]) * 7 + 26) . '">
                                                                                                                                                                <a href="' . $parsed3[$i2] . '" target="_blank" style="font-size: 12px;' . htmlentities($_POST['font-cta']) . ';font-weight: normal; color: #ffffff; letter-spacing: 0.6px; text-decoration: none; display: inline-block;">
                                                                                                                                                                    ' . $parsed4[$i2] . '
                                                                                                                                                                </a>
                                                                                                                                                            </td>
                                                                                                                                                        </tr>
                                                                                                                                                    </table>
                                                                                                                                                </td>
                                                                                                                                            </tr>
                                                                                                                                        </table>
                                                                                                                                        <![endif]-->
                                                                                                                                        <a href="' . $parsed3[$i2] . '" style="font-size: 12px;' . htmlentities($_POST['font-cta']) . '; width:' . (strlen($parsed4[$i2]) * 7 + 26) . 'px; min-width: 110px; text-decoration: none; letter-spacing: 0.6px;background-color:#000000;border:0px solid #000000;border-radius:0px;color:#ffffff;display:inline-block;line-height:35px;text-align:center;text-decoration:none;-webkit-text-size-adjust:none;mso-hide:all;">
                                                                                                                                            ' . $parsed4[$i2] . '
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </table>
                                                                                                                    </td>
                                                                                                                ';
                                                                                                            }

                                                                                                        } else {
                                                                                                            echo '<div style="font-size: 14px !important; color: #ff0000 !important; font-weight: bold !important; font-family: monospace !important; text-align: left !important; background: #ffb2b2; border-radius: 4px; padding: 10px; border: 1px solid #000; display: block !important;">ERROR: no node found. Check your script.</div>';
                                                                                                        }

                                                                                                    ?>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="mobile-spacer-height" height="30"></td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <!--[if gte mso 9]>
                                                        </v:rect>
                                                        <![endif]-->
                                                    </div>
                                                    <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td height="30"></td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
            </div>
        </td>
    </tr>
</table>