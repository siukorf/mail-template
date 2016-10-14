<table class="ee_element" width="100%" cellspacing="0" cellpadding="0" align="center" border="0" style="max-width: 720px;margin: 0 auto; width: 100% !important;">
    <tr>
        <td class="ee_dropzone" width="100%" style="width: 100% !important;">
            <div style="max-width: 720px;margin: 0 auto;width: 100%">
                <!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" width="720" align="center"><tr><td><![endif]-->
                <table width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto">
                    <tr>
                        <td style="padding: 0 20px;" valign="top">
                            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
                                <?php if (!empty($_POST['text1-title-row1'])) {
                                    echo '
                                    <tr>
                                        <td class="align-center ee_editable" style="vertical-align: top;' . ($_POST['font-title1']) . ';color: ' . $_POST['text1-font-color'] . ';text-align: center; padding: 20px 20px 0 20px;"><span style="color: ' . $_POST['text1-font-color'] . ';">' . $_POST['text1-title-row1'] . '</span></td>
                                    </tr>
                                    ';
                                }
                                if (!empty($_POST['text1-title-row2'])) {
                                    echo '
                                    <tr>
                                        <td class="align-center ee_editable" style="vertical-align: top;' . ($_POST['font-title2']) . ';color: ' . $_POST['text1-font-color'] . ';text-align: center; padding: 5px 20px 10px 20px;"><span style="color: ' . $_POST['text1-font-color'] . ';">' . $_POST['text1-title-row2'] . '</span></td>
                                    </tr>
                                    ';
                                }
                                ?>
                                <tr>
                                    <td class="ee_editable" style="letter-spacing: 0.05em;vertical-align: top;<?php echo htmlentities($_POST['font-body']) . ';' ?>font-size: 13px;color: <?php echo htmlentities($_POST['text1-font-color']); ?>;font-weight: normal;line-height: 18px;margin: 0;text-align: center; padding: 0 20px 20px 20px;"><a href="<?php echo htmlentities($_POST['text1-cta-link']); ?>" style="text-decoration: none; color: <?php echo htmlentities($_POST['text1-font-color']); ?>;"><span style="color: <?php echo htmlentities($_POST['text1-font-color']); ?>"><?php echo nl2br(htmlentities($_POST['text1-text'])); ?></span></a></td>
                                </tr>
                                <tr>
                                    <td style="padding: 0 20px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="text-align: center;">
                                                    <center>
                                                        <div>
                                                            <!--[if mso]>
                                                            <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" style="height:35px;v-text-anchor:middle;width:<?php echo strlen($_POST['text1-cta-text']) * 7 + 26; ?>px;" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?php echo htmlentities($_POST['text1-cta-link']); ?>" arcsize="0%" strokecolor="#000000" fillcolor="#000000">
                                                            <w:anchorlock/>
                                                            <center style="font-size: 12px;<?php echo htmlentities($_POST['font-cta']) . ';' ?>; width:<?php echo strlen($_POST['text1-cta-text']) * 7 + 26; ?>px; text-decoration: none;color: #ffffff; letter-spacing: 0.6px; min-width: 110px;">
                                                                <?php echo htmlentities($_POST['text1-cta-text']); ?>
                                                            </center>
                                                            </v:roundrect>
                                                            <![endif]-->
                                                            <a href="<?php echo htmlentities($_POST['text1-cta-link']); ?>" style="font-size: 12px;<?php echo htmlentities($_POST['font-cta']) . ';' ?>; width:<?php echo strlen($_POST['text1-cta-text']) * 7 + 26; ?>px; min-width: 110px; text-decoration: none;letter-spacing: 0.6px;background-color:#000000;border:0px solid #000000;border-radius:0px;color:#ffffff;display:inline-block;line-height:35px;text-align:center;text-decoration:none;-webkit-text-size-adjust:none;mso-hide:all;">
                                                                <?php echo htmlentities($_POST['text1-cta-text']); ?>
                                                            </a>
                                                        </div>
                                                    </center>
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
                    <tr>
                        <td class="hidden" height="30"></td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
            </div>
        </td>
    </tr>
</table>