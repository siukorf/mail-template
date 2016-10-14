<table class="ee_element" width="100%" cellspacing="0" cellpadding="0" align="center" border="0" style="max-width: 720px;margin: 0 auto; width: 100% !important;">
    <tr>
        <td class="ee_dropzone" width="100%" style="width: 100% !important;">
            <div style="max-width: 720px;margin: 0 auto;width: 100%">
                <!--[if (gte mso 9)|(IE)]><table cellpadding="0" cellspacing="0" width="720" height="<?php echo htmlentities($_POST['main2-img-height-desktop']); ?>" align="center"><tr><td><![endif]-->
                <table class="full-width" border="0" cellpadding="0" cellspacing="0" width="100%" background="<?php echo htmlentities($_POST['main2-img-url-desktop']); ?>" style="table-layout: auto; background-size: 720px; background-position: center top; background-repeat: no-repeat;">
                    <tbody>
                        <tr>
                            <td width="100%" style="background: <?php echo htmlentities($_POST['main2-img-bgcolor']); ?> url('<?php echo htmlentities($_POST['main2-img-url-desktop']); ?>') no-repeat center top / 720px auto;">
                                <center>
                                    <table align="center" class="full-width" style="width: 720px; margin: 0px auto; table-layout: auto;" border="0" cellpadding="0" cellspacing="0" width="720">
                                        <style media="only screen and (max-width: 45em) and (-webkit-min-device-pixel-ratio: 0)" type="text/css">
                                            @media only screen and (max-width: 45em) and (-webkit-min-device-pixel-ratio: 0) {
                                                *[class].vml2 {
                                                    background: #ffffff !important;
                                                    min-width: 100% !important;
                                                    padding: 0 !important;
                                                    height: auto !important;
                                                }
                                                *[class].vml2-min-height {
                                                    min-height: 240px !important;
                                                }
                                                *[class].vml2-height {
                                                    height: <?php echo htmlentities($_POST['main2-img-height-mobile']); ?>vw !important;
                                                }
                                                *[class].vml2-mob {
                                                    width: 100% !important;
                                                    background: #ffffff url('<?php echo htmlentities($_POST['main2-img-url-mobile']); ?>') no-repeat center top !important;
                                                    background-size: cover !important;
                                                }
                                            }
                                        </style>
                                        <tbody>
                                            <tr>
                                                <td class="full-width" width="720" align="center">
                                                    <!--[if gte mso 9]>
                                                    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:720px;height:<?php echo htmlentities($_POST['main2-img-height-desktop']); ?>px;background-repeat: no-repeat; background-position: center top;">
                                                    <v:fill type="frame" color="<?php echo htmlentities($_POST['main2-img-bgcolor']); ?>" src="<?php echo htmlentities($_POST['main2-img-url-desktop']); ?>"></v:fill>
                                                    <![endif]-->
                                                    <table align="center" class="full-width" style="width: 720px; table-layout: auto;" border="0" cellpadding="0" cellspacing="0" width="720">
                                                        <tbody>
                                                            <tr>
                                                                <td width="720" height="<?php echo htmlentities($_POST['main2-img-height-desktop']); ?>" style="background: <?php echo htmlentities($_POST['main2-img-bgcolor']); ?> url('<?php echo htmlentities($_POST['main2-img-url-desktop']); ?>') no-repeat center top / 720px auto;" class="vml2" align="center">
                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="table-layout: auto;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width="50%" valign="top" class="column-single" align="left" style="width: 50%; padding: 0;">
                                                                                    <table class="ee_element full-width" cellpadding="0" cellspacing="0" style="width: 100%; table-layout: auto;">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td class="full-width" style="padding: 0;">
                                                                                                    <table class="vml2-min-height" width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                                                        <tr>
                                                                                                            <td class="vml2-mob vml2-height">
                                                                                                                <a href="<?php echo htmlentities($_POST['main2-cta-link']); ?>" class="vml2-height" style="display: block; text-decoration: none; width: 100%;"></a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                    <table cellpadding="0" cellspacing="0" width="100%" style="max-width: 360px; margin: 0 auto; table-layout: auto;" border="0">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="width: 100%; padding: 0;">
                                                                                                                    <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="width: 100%; table-layout: auto;">
                                                                                                                        <tbody>
                                                                                                                            <?php if (!empty($_POST['main2-title-row1'])) {
                                                                                                                                echo '
                                                                                                                                <tr>
                                                                                                                                    <td class="align-center color-black ee_editable" style="vertical-align: top;' . ($_POST['font-title1']) . ';color: ' . $_POST['main2-font-color'] . ';text-align: center; padding: 20px 20px 0 20px;"><span class="color-black" style="color: ' . $_POST['main2-font-color'] . ';">' . $_POST['main2-title-row1'] . '</span></td>
                                                                                                                                </tr>
                                                                                                                                ';
                                                                                                                            }
                                                                                                                            if (!empty($_POST['main2-title-row2'])) {
                                                                                                                                echo '
                                                                                                                                <tr>
                                                                                                                                    <td class="align-center color-black ee_editable" style="vertical-align: top;' . ($_POST['font-title2']) . ';color: ' . $_POST['main2-font-color'] . ';text-align: center; padding: 5px 20px 10px 20px;"><span class="color-black" style="color: ' . $_POST['main2-font-color'] . ';">' . $_POST['main2-title-row2'] . '</span></td>
                                                                                                                                </tr>
                                                                                                                                ';
                                                                                                                            }
                                                                                                                            ?>
                                                                                                                            <tr>
                                                                                                                                <td class="align-center ee_editable color-black" style="vertical-align: top;<?php echo htmlentities($_POST['font-body']) . ';' ?>;color: <?php echo htmlentities($_POST['main2-font-color']); ?>;text-align: center; padding: 0 20px 20px 20px;"><span class="color-black" style="color: <?php echo htmlentities($_POST['main2-font-color']); ?>;"><?php echo nl2br(htmlentities($_POST['main2-text'])); ?></span></td>
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
                                                                                                                                                                <table border="0" cellspacing="0" cellpadding="0" align="center" style="margin: 0 auto;" height="35" width="<?php echo strlen($_POST['main2-cta-text']) * 7 + 26; ?>">
                                                                                                                                                                    <tr>
                                                                                                                                                                        <td bgcolor="#000000" style="padding: 0; -webkit-border-radius:0px; border-radius:0px; min-width: 110px; color: #ffffff; line-height: 12px; letter-spacing: 0.6px; text-decoration: none;" align="center" height="35" width="<?php echo strlen($_POST['main2-cta-text']) * 7 + 26; ?>">
                                                                                                                                                                            <a href="<?php echo htmlentities($_POST['main2-cta-link']); ?>" target="_blank" style="font-size: 12px;<?php echo htmlentities($_POST['font-cta']) . ';' ?> font-weight: normal; color: #ffffff; letter-spacing: 0.6px; text-decoration: none; display: inline-block;">
                                                                                                                                                                                <?php echo htmlentities($_POST['main2-cta-text']); ?>
                                                                                                                                                                            </a>
                                                                                                                                                                        </td>
                                                                                                                                                                    </tr>
                                                                                                                                                                </table>
                                                                                                                                                            </td>
                                                                                                                                                        </tr>
                                                                                                                                                    </table>
                                                                                                                                                    <![endif]-->
                                                                                                                                                    <a href="<?php echo htmlentities($_POST['main2-cta-link']); ?>" style="font-size: 12px;<?php echo htmlentities($_POST['font-cta']) . ';' ?>; width:<?php echo strlen($_POST['main2-cta-text']) * 7 + 26; ?>px; min-width: 110px; text-decoration: none; letter-spacing: 0.6px;background-color:#000000;border:0px solid #000000;border-radius:0px;color:#ffffff;display:inline-block;line-height:35px;text-align:center;text-decoration:none;-webkit-text-size-adjust:none;mso-hide:all;">
                                                                                                                                                        <?php echo htmlentities($_POST['main2-cta-text']); ?>
                                                                                                                                                    </a>
                                                                                                                                                </div>
                                                                                                                                            </td>
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
                                                                                <td width="50%" valign="top" class="hidden" align="left" style="width: 50%; padding: 0;">
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