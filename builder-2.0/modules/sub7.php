<table class="ee_element" width="100%" cellspacing="0" cellpadding="0" align="center" border="0" style="max-width: 720px;margin: 0 auto; width: 100% !important;">
    <tr>
        <td class="ee_dropzone" width="100%" style="width: 100% !important;">
            <div style="max-width: 720px;margin: 0 auto;width: 100%">
                <!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" width="720" height="<?php echo htmlentities($_POST['sub7-img-height']); ?>" align="center"><tr><td><![endif]-->
                <table width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto;overflow: hidden;">
                    <tr>
                        <td bgcolor="<?php echo htmlentities($_POST['sub7-img-bgcolor']); ?>">
                            <table class="max-div-width" width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto;overflow: hidden;">
                                <tr>
                                    <td style="text-align: left;font-size: 0">
                                        <table dir="rtl" cellpadding="0" cellspacing="0" border="0" width="100%" align="center" class="max-div-width2" style="margin: 0 auto;">
                                            <tr>
                                                <td style="text-align: center;">
                                                    <!--[if (gte mso 9)|(IE)]><table width="100%" cellspacing="0" cellpadding="0" align="center"><tr><td width="400" valign="top"><![endif]-->
                                                    <div class="remove-max-width" dir="ltr" style="width: 100%;max-width: 400px;display: inline-block;vertical-align: top; float: right;">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td>
                                                                    <center><img class="max-image-width full-width" src="<?php echo htmlentities($_POST['sub7-img-url']); ?>" width="400" height="auto" style="border: 0;" alt="" style="width: 400px; max-width: 400px;" /></center>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <!--[if (gte mso 9)|(IE)]></td><td width="320"><![endif]-->
                                                    <div class="remove-max-width" dir="ltr" style="width: 100%;max-width: 320px; display: inline-block;vertical-align: middle">
                                                        <table tabindex="1" width="100%" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td class="hidden" height="<?php echo htmlentities($_POST['sub7-text-vertical-offset']) - 20; ?>">
                                                                    &nbsp;
                                                                </td>
                                                            </tr>
                                                            <?php if (!empty($_POST['sub7-title-row1'])) {
                                                                echo '
                                                                <tr>
                                                                    <td class="align-center ee_editable" style="vertical-align: top;' . ($_POST['font-title1']) . ';color: ' . $_POST['sub7-font-color'] . ';text-align: center; padding: 20px 20px 0 20px;"><span style="color: ' . $_POST['sub7-font-color'] . ';">' . $_POST['sub7-title-row1'] . '</span></td>
                                                                </tr>
                                                                ';
                                                            }
                                                            if (!empty($_POST['sub7-title-row2'])) {
                                                                echo '
                                                                <tr>
                                                                    <td class="align-center ee_editable" style="vertical-align: top;' . ($_POST['font-title2']) . ';color: ' . $_POST['sub7-font-color'] . ';text-align: center; padding: 5px 20px 10px 20px;"><span style="color: ' . $_POST['sub7-font-color'] . ';">' . $_POST['sub7-title-row2'] . '</span></td>
                                                                </tr>
                                                                ';
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td class="align-center ee_editable" style="vertical-align: top;<?php echo htmlentities($_POST['font-body']) . ';' ?>;color: <?php echo htmlentities($_POST['sub7-font-color']); ?>;text-align: center; padding: 0 20px 20px 20px;"><span style="color: <?php echo htmlentities($_POST['sub7-font-color']); ?>;"><?php echo nl2br(htmlentities($_POST['sub7-text'])); ?></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 20px 0 20px; text-align: center;">
                                                                    <table cellspacing="0" cellpadding="0" align="center" style="margin: 0 auto; max-width: 212px;">
                                                                        <tr>
                                                                            <td style="text-align: center;">
                                                                                <table cellspacing="0" cellpadding="0" align="center" style="margin: 0 auto;">
                                                                                    <tr>
                                                                                        <?php


                                                                                            $fullstring = $_POST['sizes-script'];

                                                                                            function get_string_between($string, $start, $end) {
                                                                                                $start = preg_quote($start);
                                                                                                $end = preg_quote($end);
                                                                                                $pattern = "~$start\s*(.*?)$end\s*~";
                                                                                                $match = preg_match_all($pattern, $string, $matches);
                                                                                                if ($match) {
                                                                                                    return $matches[1];
                                                                                                }
                                                                                            }

                                                                                            $parsed1 = preg_replace('/\s+/', '', get_string_between($fullstring, '[link]', '[/link]'));
                                                                                            $parsed2 = get_string_between($fullstring, '[text]', '[/text]');

                                                                                            if (strpos($fullstring, '[size]') !== false and strpos($fullstring, '[/size]') !== false) {

                                                                                                for ($i=0; $i < count($parsed1); $i++) {
                                                                                                    if ($i === 4 or $i === 8) {
                                                                                                        echo '</tr><tr>';
                                                                                                    }
                                                                                                    echo '
                                                                                                        <td>
                                                                                                            <table width="51" height="51" border="0" cellspacing="0" cellpadding="0" style="display: inline-block;" align="center" style="margin: 0 auto;">
                                                                                                                <tr>
                                                                                                                    <td style="padding: 0 4px 4px 4px;">
                                                                                                                        <table width="35" height="35" border="0" cellspacing="0" cellpadding="0">
                                                                                                                            <tr>
                                                                                                                                <td style="text-align: center;">
                                                                                                                                    <div>
                                                                                                                                        <!--[if mso]>
                                                                                                                                        <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" style="height:35px;v-text-anchor:middle;width:35px;" xmlns:w="urn:schemas-microsoft-com:office:word" href="' . $parsed1[$i] . '" arcsize="0%" strokecolor="#000000" strokeweight="1px" fillcolor="#ffffff">
                                                                                                                                        <w:anchorlock/>
                                                                                                                                        <center style="font-size: 12px;' . htmlentities($_POST['font-cta']) . '; width:35px; text-decoration: none;color: #000001;">
                                                                                                                                            ' . $parsed2[$i] . '
                                                                                                                                        </center>
                                                                                                                                        </v:roundrect>
                                                                                                                                        <![endif]-->
                                                                                                                                        <a href="' . $parsed1[$i] . '" style="font-size: 12px;' . htmlentities($_POST['font-cta']) . '; width:35px; text-decoration: none;color: #000001; background-color:#ffffff;border:1px solid #000000;border-radius:0px;display:inline-block;line-height:35px;text-align:center;text-decoration:none;-webkit-text-size-adjust:none;mso-hide:all;">
                                                                                                                                            ' . $parsed2[$i] . '
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </table>
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
                        <td class="hidden" height="30"></td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
            </div>
        </td>
    </tr>
</table>