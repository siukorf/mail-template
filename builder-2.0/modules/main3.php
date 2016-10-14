<table class="ee_element" width="100%" cellspacing="0" cellpadding="0" align="center" border="0" style="max-width: 720px;margin: 0 auto; width: 100% !important;">
    <tr>
        <td class="ee_dropzone" width="100%" style="width: 100% !important;">
            <div style="max-width: 720px;margin: 0 auto;width: 100%">
                <!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" width="720" height="<?php echo htmlentities($_POST['main3-img-height']); ?>" align="center"><tr><td><![endif]-->
                <table class="full-width" border="0" cellpadding="0" cellspacing="0" width="100%" background="<?php echo htmlentities($_POST['main3-img-url-desktop']); ?>" style="table-layout: auto; background-size: 720px; background-position: center top; background-repeat: no-repeat;">
                    <tbody>
                        <tr>
                            <td width="100%" style="background: <?php echo htmlentities($_POST['main3-img-bgcolor']); ?> url('<?php echo htmlentities($_POST['main3-img-url-desktop']); ?>') no-repeat center top / 720px auto;">
                                <center>
                                    <table align="center" class="full-width" style="width: 720px; margin: 0px auto; table-layout: auto;" border="0" cellpadding="0" cellspacing="0" width="720">
                                        <style media="only screen and (max-width: 45em) and (-webkit-min-device-pixel-ratio: 0)" type="text/css">
                                            @media only screen and (max-width: 45em) and (-webkit-min-device-pixel-ratio: 0) {
                                                *[class].vml3 {
                                                    background-image: url('<?php echo htmlentities($_POST['main3-img-url-mobile']); ?>') !important;
                                                    background-size: cover !important;
                                                    background-repeat: no-repeat !important;
                                                    padding: 30px 0 !important;
                                                }
                                            }
                                        </style>
                                        <tbody>
                                            <tr>
                                                <td class="full-width" width="720" align="center">
                                                    <!--[if gte mso 9]>
                                                    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:720px;height:<?php echo htmlentities($_POST['main3-img-height']); ?>px;background-repeat: no-repeat; background-position: center top;">
                                                    <v:fill type="frame" color="<?php echo htmlentities($_POST['main3-img-bgcolor']); ?>" src="<?php echo htmlentities($_POST['main3-img-url-desktop']); ?>"></v:fill>
                                                    <![endif]-->
                                                    <table align="center" class="full-width" style="width: 720px; table-layout: auto;" border="0" cellpadding="0" cellspacing="0" width="720">
                                                        <tbody>
                                                            <tr>
                                                                <td width="720" height="<?php echo htmlentities($_POST['main3-img-height']); ?>" style="background: <?php echo htmlentities($_POST['main3-img-bgcolor']); ?> url('<?php echo htmlentities($_POST['main3-img-url-desktop']); ?>') no-repeat center top / 720px auto;" class="vml3 auto-height" align="center">
                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="table-layout: auto;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width="15%" valign="top" class="hidden" align="left" style="width: 15%; padding: 0;">
                                                                                    &nbsp;
                                                                                </td>
                                                                                <td width="70%" valign="top" class="column-single" align="left" style="width: 70%; padding: 0;">
                                                                                    <table class="ee_element full-width" cellpadding="0" cellspacing="0" style="width: 100%; table-layout: auto;">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td class="full-width" style="padding: 0;">
                                                                                                    <table cellpadding="0" cellspacing="0" width="100%" style="max-width: 480px; margin: 0 auto; table-layout: auto;" border="0">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="width: 100%; padding: 0;">
                                                                                                                    <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="width: 100%px; table-layout: auto;">
                                                                                                                        <tbody>
                                                                                                                            <?php if (!empty($_POST['main3-title-row1'])) {
                                                                                                                                echo '
                                                                                                                                <tr>
                                                                                                                                    <td class="align-center ee_editable" style="vertical-align: top;' . ($_POST['font-title1']) . ';color: ' . $_POST['main3-font-color'] . ';text-align: center; padding: 20px 20px 0 20px;"><span style="color: ' . $_POST['main3-font-color'] . ';">' . $_POST['main3-title-row1'] . '</span></td>
                                                                                                                                </tr>
                                                                                                                                ';
                                                                                                                            }
                                                                                                                            if (!empty($_POST['main3-title-row2'])) {
                                                                                                                                echo '
                                                                                                                                <tr>
                                                                                                                                    <td class="align-center ee_editable" style="vertical-align: top;' . ($_POST['font-title2']) . ';color: ' . $_POST['main3-font-color'] . ';text-align: center; padding: 5px 20px 10px 20px;"><span style="color: ' . $_POST['main3-font-color'] . ';">' . $_POST['main3-title-row2'] . '</span></td>
                                                                                                                                </tr>
                                                                                                                                ';
                                                                                                                            }
                                                                                                                            if (!empty($_POST['main3-title-html'])) {
                                                                                                                                echo '
                                                                                                                                <tr>
                                                                                                                                    <td class="align-center ee_editable" style="vertical-align: top; text-align: center; padding: 30px 0 10px 0;">' . $_POST['main3-title-html'] . '</td>
                                                                                                                                </tr>
                                                                                                                                ';
                                                                                                                            }
                                                                                                                            ?>
                                                                                                                            <tr>
                                                                                                                                <td class="align-center ee_editable" style="vertical-align: top;<?php echo htmlentities($_POST['font-body']) . ';' ?>;color: <?php echo htmlentities($_POST['main3-font-color']); ?>;text-align: center; padding: 0 20px 20px 20px;"><span style="color: <?php echo htmlentities($_POST['main3-font-color']); ?>;"><?php echo nl2br(htmlentities($_POST['main3-text'])); ?></span></td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <td style="padding: 0 20px 0 20px;">
                                                                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                        <tr>
                                                                                                                                            <?php

                                                                                                                                                $fullstring3 = $_POST['cta2-script'];

                                                                                                                                                $btnclass3 = 'column50';

                                                                                                                                                function get_string_between3($string, $start, $end) {
                                                                                                                                                    $start = preg_quote($start);
                                                                                                                                                    $end = preg_quote($end);
                                                                                                                                                    $pattern = "~$start\s*(.*?)$end\s*~";
                                                                                                                                                    $match = preg_match_all($pattern, $string, $matches);
                                                                                                                                                    if ($match) {
                                                                                                                                                        return $matches[1];
                                                                                                                                                    }
                                                                                                                                                }

                                                                                                                                                $parsed5 = preg_replace('/\s+/', '', get_string_between3($fullstring3, '[link]', '[/link]'));
                                                                                                                                                $parsed6 = get_string_between3($fullstring3, '[text]', '[/text]');

                                                                                                                                                if (count($parsed5) >= 2) {
                                                                                                                                                    $max3 = 25;
                                                                                                                                                } else if (count($parsed5) === 1) {
                                                                                                                                                    $btnclass3 = 'full-width';
                                                                                                                                                    $max3 = (100 / count($parsed5));
                                                                                                                                                } else {
                                                                                                                                                    $max3 = (100 / count($parsed5));
                                                                                                                                                }

                                                                                                                                                if (strpos($fullstring3, '[cta]') !== false and strpos($fullstring3, '[/cta]') !== false) {

                                                                                                                                                    for ($i3=0; $i3 < count($parsed5); $i3++) {
                                                                                                                                                        if ($i3 === 4 or $i3 === 8) {
                                                                                                                                                            echo '</tr><tr>';
                                                                                                                                                        }
                                                                                                                                                        echo '
                                                                                                                                                            <td class="' . $btnclass3 . '" width="' . $max3 . '%">
                                                                                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                                                    <tr>
                                                                                                                                                                        <td style="text-align: center; padding: 0 5px 10px 5px;" class="align-center">
                                                                                                                                                                            <div style="position:relative;">
                                                                                                                                                                                <!--[if mso]>
                                                                                                                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                                                                    <tr>
                                                                                                                                                                                        <td>
                                                                                                                                                                                            <table border="0" cellspacing="0" cellpadding="0" align="center" style="margin: 0 auto; min-width: 110px;" height="35" width="' . (strlen($parsed6[$i3]) * 7 + 26) . '">
                                                                                                                                                                                                <tr>
                                                                                                                                                                                                    <td bgcolor="#000000" style="padding: 0; -webkit-border-radius:0px; border-radius:0px; min-width: 110px; color: #ffffff; line-height: 12px; letter-spacing: 0.6px; text-decoration: none;" align="center" height="35" width="' . (strlen($parsed6[$i3]) * 7 + 26) . '">
                                                                                                                                                                                                        <a href="' . $parsed5[$i3] . '" target="_blank" style="font-size: 12px;' . htmlentities($_POST['font-cta']) . ';font-weight: normal; color: #ffffff; letter-spacing: 0.6px; text-decoration: none; display: inline-block;">
                                                                                                                                                                                                            ' . $parsed6[$i3] . '
                                                                                                                                                                                                        </a>
                                                                                                                                                                                                    </td>
                                                                                                                                                                                                </tr>
                                                                                                                                                                                            </table>
                                                                                                                                                                                        </td>
                                                                                                                                                                                    </tr>
                                                                                                                                                                                </table>
                                                                                                                                                                                <![endif]-->
                                                                                                                                                                                <a href="' . $parsed5[$i3] . '" style="font-size: 12px;' . htmlentities($_POST['font-cta']) . '; width:' . (strlen($parsed6[$i3]) * 7 + 26) . 'px; min-width: 110px; text-decoration: none; letter-spacing: 0.6px;background-color:#000000;border:0px solid #000000;border-radius:0px;color:#ffffff;display:inline-block;line-height:35px;text-align:center;text-decoration:none;-webkit-text-size-adjust:none;mso-hide:all;">
                                                                                                                                                                                    ' . $parsed6[$i3] . '
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
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                                <td width="15%" valign="top" class="hidden" align="left" style="width: 15%; padding: 0;">
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--[if gte mso 9]>
                                                    </v:rect>
                                                    <![endif]-->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
            </div>
        </td>
    </tr>
</table>