<table class="ee_element" width="100%" cellspacing="0" cellpadding="0" align="center" border="0" style="max-width: 720px;margin: 0 auto; width: 100% !important;">
    <tr>
        <td class="ee_dropzone" width="100%" style="width: 100% !important;">
            <div style="max-width: 720px;margin: 0 auto;width: 100%">
                <!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" width="720" height="<?php echo htmlentities($_POST['sub3-img-height']); ?>" align="center"><tr><td><![endif]-->
                <table width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto;overflow: hidden;">
                    <tr>
                        <td bgcolor="<?php echo htmlentities($_POST['sub3-img-bgcolor']); ?>">
                            <table class="max-div-width" width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto;overflow: hidden;">
                                <tr>
                                    <td style="text-align: left;font-size: 0">
                                        <!--[if gte mso 9]><v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:720px; height:<?php echo htmlentities($_POST['sub3-img-height']); ?>px;"><v:fill type="frame" color="<?php echo htmlentities($_POST['sub3-img-bgcolor']); ?>"></v:fill><![endif]-->
                                        <table dir="ltr" cellpadding="0" cellspacing="0" border="0" width="100%" align="center" class="max-div-width2" style="margin: 0 auto;">
                                            <tr>
                                                <td style="text-align: center;">
                                                    <!--[if (gte mso 9)|(IE)]><table width="100%" cellspacing="0" cellpadding="0" align="center"><tr><td width="400" valign="top"><![endif]-->
                                                    <div class="remove-max-width" dir="ltr" style="width: 100%;max-width: 400px;display: inline-block;vertical-align: top; float: left;">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td>
                                                                    <center><a href="<?php echo htmlentities($_POST['sub3-cta-link']); ?>" style="text-decoration: none;"><img class="max-image-width full-width" src="<?php echo htmlentities($_POST['sub3-img-url']); ?>" width="100%" height="auto" style="border: 0;" alt="" style="width: 100% !important; max-width: 400px;" /></a></center>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <!--[if (gte mso 9)|(IE)]></td><td width="320"><![endif]-->
                                                    <div class="remove-max-width" dir="ltr" style="width: 100%;max-width: 320px; display: inline-block;vertical-align: middle">
                                                        <table tabindex="1" width="100%" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td class="hidden" height="<?php echo htmlentities($_POST['sub3-text-vertical-offset']) - 20; ?>">
                                                                    &nbsp;
                                                                </td>
                                                            </tr>
                                                            <?php if (!empty($_POST['sub3-title-row1'])) {
                                                                echo '
                                                                <tr>
                                                                    <td class="align-center ee_editable" style="vertical-align: top;' . ($_POST['font-title1']) . ';color: ' . $_POST['sub3-font-color'] . ';text-align: center; padding: 20px 20px 0 20px;"><span style="color: ' . $_POST['sub3-font-color'] . ';">' . $_POST['sub3-title-row1'] . '</span></td>
                                                                </tr>
                                                                ';
                                                            }
                                                            if (!empty($_POST['sub3-title-row2'])) {
                                                                echo '
                                                                <tr>
                                                                    <td class="align-center ee_editable" style="vertical-align: top;' . ($_POST['font-title2']) . ';color: ' . $_POST['sub3-font-color'] . ';text-align: center; padding: 5px 20px 10px 20px;"><span style="color: ' . $_POST['sub3-font-color'] . ';">' . $_POST['sub3-title-row2'] . '</span></td>
                                                                </tr>
                                                                ';
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td class="align-center ee_editable" style="vertical-align: top;<?php echo htmlentities($_POST['font-body']) . ';' ?>;color: <?php echo htmlentities($_POST['sub3-font-color']); ?>;text-align: center; padding: 0 20px 20px 20px;"><span style="color: <?php echo htmlentities($_POST['sub3-font-color']); ?>;"><?php echo nl2br(htmlentities($_POST['sub3-text'])); ?></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 20px 0 20px;">
                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                        <tr>
                                                                            <td style="text-align: center;" class="align-center">
                                                                                <div style="position:relative;">
                                                                                    <!--[if mso]>
                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                        <tr>
                                                                                            <td>
                                                                                                <table border="0" cellspacing="0" cellpadding="0" align="center" style="margin: 0 auto;" height="35" width="<?php echo strlen($_POST['sub3-cta-text']) * 7 + 26; ?>">
                                                                                                    <tr>
                                                                                                        <td bgcolor="#000000" style="padding: 0; -webkit-border-radius:0px; border-radius:0px; min-width: 110px; color: #ffffff; line-height: 12px; letter-spacing: 0.6px; text-decoration: none;" align="center" height="35" width="<?php echo strlen($_POST['sub3-cta-text']) * 7 + 26; ?>">
                                                                                                            <a href="<?php echo htmlentities($_POST['sub3-cta-link']); ?>" target="_blank" style="font-size: 12px;<?php echo htmlentities($_POST['font-cta']) . ';' ?> font-weight: normal; color: #ffffff; letter-spacing: 0.6px; text-decoration: none; display: inline-block;">
                                                                                                                <?php echo htmlentities($_POST['sub3-cta-text']); ?>
                                                                                                            </a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                    <![endif]-->
                                                                                    <a href="<?php echo htmlentities($_POST['sub3-cta-link']); ?>" style="font-size: 12px;<?php echo htmlentities($_POST['font-cta']) . ';' ?>; width:<?php echo strlen($_POST['sub3-cta-text']) * 7 + 26; ?>px; min-width: 110px; text-decoration: none; letter-spacing: 0.6px;background-color:#000000;border:0px solid #000000;border-radius:0px;color:#ffffff;display:inline-block;line-height:35px;text-align:center;text-decoration:none;-webkit-text-size-adjust:none;mso-hide:all;">
                                                                                        <?php echo htmlentities($_POST['sub3-cta-text']); ?>
                                                                                    </a>
                                                                                </div>
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
                                        <!--[if gte mso 9]></v:rect><![endif]-->
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