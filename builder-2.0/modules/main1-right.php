<table class="ee_element" width="100%" cellspacing="0" cellpadding="0" align="center" border="0" style="max-width: 720px;margin: 0 auto; width: 100% !important;">
    <tr>
        <td class="ee_dropzone" width="100%" style="width: 100% !important;">
            <div style="max-width: 720px;margin: 0 auto;width: 100%">
                <!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" width="720" height="<?php echo htmlentities($_POST['main1-img-height']); ?>" align="center"><tr><td><![endif]-->
                <table width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto;overflow: hidden;">
                    <tr>
                        <td bgcolor="<?php echo htmlentities($_POST['main1-img-bgcolor']); ?>">
                            <table class="max-div-width" width="100%" cellspacing="0" cellpadding="0" align="center" style="max-width: 720px;margin: 0 auto;overflow: hidden;">
                                <tr>
                                    <td style="text-align: left;font-size: 0">
                                        <table dir="ltr" cellpadding="0" cellspacing="0" border="0" width="100%" align="center" class="max-div-width2" style="margin: 0 auto;">
                                            <tr>
                                                <td style="text-align: center;">
                                                    <!--[if (gte mso 9)|(IE)]><table width="100%" cellspacing="0" cellpadding="0" align="center"><tr><td width="<?php echo $_POST['main1-img-width']; ?>" valign="top"><![endif]-->
                                                    <div class="remove-max-width" dir="ltr" style="width: 100%;max-width: <?php echo htmlentities($_POST['main1-img-width']); ?>px;display: inline-block;vertical-align: top; float: left;">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td>
                                                                    <center><a href="<?php echo htmlentities($_POST['main1-cta-link']); ?>" style="text-decoration: none;"><img class="max-image-width full-width" src="<?php echo htmlentities($_POST['main1-img-url']); ?>" width="<?php echo $_POST['main1-img-width']; ?>" height="auto" style="border: 0;" alt="" style="width: <?php echo $_POST['main1-img-width']; ?>px !important;" /></a></center>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <!--[if (gte mso 9)|(IE)]></td><td width="<?php echo (720 - htmlentities($_POST['main1-img-width'])); ?>"><![endif]-->
                                                    <div class="remove-max-width" dir="ltr" style="width: 100%;max-width: <?php echo (720 - htmlentities($_POST['main1-img-width'])); ?>px; display: inline-block;vertical-align: middle">
                                                        <table class="auto-height" width="100%" cellspacing="0" cellpadding="0" height="<?php echo htmlentities($_POST['main1-img-height']); ?>">
                                                            <tr>
                                                                <td valign="middle" style="margin: auto 0;">
                                                                    <table tabindex="1" width="100%" cellspacing="0" cellpadding="0">
                                                                        <?php if (!empty($_POST['main1-title-row1'])) {
                                                                            echo '
                                                                            <tr>
                                                                                <td class="align-center ee_editable" style="vertical-align: top;' . ($_POST['font-title1']) . ';color: ' . $_POST['main1-font-color'] . ';text-align: left; padding: 20px 20px 0 20px;"><span style="color: ' . $_POST['main1-font-color'] . ';">' . $_POST['main1-title-row1'] . '</span></td>
                                                                            </tr>
                                                                            ';
                                                                        }
                                                                        if (!empty($_POST['main1-title-row2'])) {
                                                                            echo '
                                                                            <tr>
                                                                                <td class="align-center ee_editable" style="vertical-align: top;' . ($_POST['font-title2']) . ';color: ' . $_POST['main1-font-color'] . ';text-align: left; padding: 5px 20px 10px 20px;"><span style="color: ' . $_POST['main1-font-color'] . ';">' . $_POST['main1-title-row2'] . '</span></td>
                                                                            </tr>
                                                                            ';
                                                                        }
                                                                        ?>
                                                                        <tr>
                                                                            <td class="align-center ee_editable" style="vertical-align: top;<?php echo htmlentities($_POST['font-body']) ?>;color: <?php echo htmlentities($_POST['main1-font-color']); ?>;text-align: left; padding: 0 20px 20px 20px;"><span style="color: <?php echo htmlentities($_POST['main1-font-color']); ?>;"><?php echo nl2br(htmlentities($_POST['main1-text'])); ?></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="padding: 0 20px 0 20px;">
                                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                    <tr>
                                                                                        <td style="text-align: left;" class="align-center">
                                                                                            <div>
                                                                                                <!--[if mso]>
                                                                                                <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" style="height:35px;v-text-anchor:middle;width:<?php echo strlen($_POST['main1-cta-text']) * 7 + 26; ?>px;" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?php echo htmlentities($_POST['main1-cta-link']); ?>" arcsize="0%" strokecolor="#000000" fillcolor="#000000">
                                                                                                <w:anchorlock/>
                                                                                                <center style="font-size: 12px;<?php echo htmlentities($_POST['font-cta']) . ';' ?>; width:<?php echo strlen($_POST['main1-cta-text']) * 7 + 26; ?>px; text-decoration: none;color: #ffffff; letter-spacing: 0.6px; min-width: 110px;">
                                                                                                    <?php echo htmlentities($_POST['main1-cta-text']); ?>
                                                                                                </center>
                                                                                                </v:roundrect>
                                                                                                <![endif]-->
                                                                                                <a href="<?php echo htmlentities($_POST['main1-cta-link']); ?>" style="font-size: 12px;<?php echo htmlentities($_POST['font-cta']) . ';' ?>; width:<?php echo strlen($_POST['main1-cta-text']) * 7 + 26; ?>px; min-width: 110px; text-decoration: none; letter-spacing: 0.6px;background-color:#000000;border:0px solid #000000;border-radius:0px;color:#ffffff;display:inline-block;line-height:35px;text-align:center;text-decoration:none;-webkit-text-size-adjust:none;mso-hide:all;">
                                                                                                    <?php echo htmlentities($_POST['main1-cta-text']); ?>
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
                                                                </td>
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