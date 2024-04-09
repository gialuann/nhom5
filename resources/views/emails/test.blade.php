<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title></title>
    <link rel="stylesheet" href="{{asset('email/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
   
</head>
<body >
    <div style="width: 500ox;
                margin: auto;
                padding: 15px;
                text-align: center;" dir="ltr" class="es-wrapper-color">
      
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" background="https://gcs.tripi.vn/public-tripi/tripi-feed/img/474063Asj/anh-nui-rung-tu-nhien-dep_093057409.jpg" style="background-position: center top;">
            <tbody>
                <tr>
                    <td class="esd-email-paddings es-m-margin" valign="top">
                        <table class="es-content esd-header-popover" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" align="center" style="background-color: transparent;">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p40b es-p20r es-p20l" align="left" style="background-color: #fbf3ea;" bgcolor="#fbf3ea">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-m-txt-c">
                                                                                        <h1 style="line-height: 100%; ">Wellcome</h1>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-m-txt-c" bgcolor="#eed6d5">
                                                                                        <h2 style="line-height: 110%;">Mountain climbing trip</h2>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-image es-p10t es-p10b" style="font-size: 0px;"><a target="_blank"><img src="https://fibjeko.stripocdn.email/content/guids/CABINET_d9e64e61bd5ab14658ef0c95d79249160dd08cb38b25b963906cfe6c64bad7ae/images/star.png" alt style="display: block;" width="54"></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-m-txt-c">
                                                                                        <h3>{{Auth::user()->fullname}} Thank for signed in This Tour</h3>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-m-txt-c">
                                                                                        <h3>Tour Information</h3>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p20t h-auto" valign="middle" height="52">
                                                                                        <p>Mountain : {{$join->mountain->name}}</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p20t h-auto" valign="top" height="52">
                                                                                        <p>height : {{$join->mountain->height}} m</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p20t h-auto" valign="top" height="52">
                                                                                        <p>Creator : {{$join->user->fullname}}</p>
                                                                                    </td>
                                                                                </tr>

                                                                                
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p20t h-auto" valign="top" height="52">
                                                                                        <p>Information : {{$join->infomation}}</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p20t h-auto" valign="top" height="52">
                                                                                        <p>Date-Time : {{$join->date}}</p>
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
                                </tr>
                            </tbody>
                        </table>
                        <table class="es-footer esd-footer-popover" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p30t es-p30b es-p20r es-p20l" align="left" bgcolor="#d83b37" style="background-color: #d83b37;">
                                                        <table cellspacing="0" cellpadding="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="560" align="left">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-social es-p15t es-p15b" style="font-size:0">
                                                                                        <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="center" valign="top" class="es-p10r"><a target="_blank" href="https://www.facebook.com/stripoeditor/"><img src="https://fibjeko.stripocdn.email/content/assets/img/social-icons/logo-white/facebook-logo-white.png" alt="Fb" title="Facebook" width="32"></a></td>
                                                                                                    <td align="center" valign="top" class="es-p10r"><a target="_blank" href="https://twitter.com/Stripo_email"><img src="https://fibjeko.stripocdn.email/content/assets/img/social-icons/logo-white/x-logo-white.png" alt="X" title="X.com" width="32"></a></td>
                                                                                                    <td align="center" valign="top" class="es-p10r"><a target="_blank" href="https://www.instagram.com/stripo.email/"><img src="https://fibjeko.stripocdn.email/content/assets/img/social-icons/logo-white/instagram-logo-white.png" alt="Ig" title="Instagram" width="32"></a></td>
                                                                                                    <td align="center" valign="top" class="es-p10r"><a target="_blank" href="https://www.youtube.com/channel/UCnPMarkPEGzk-3fTM9Jxgcw"><img src="https://fibjeko.stripocdn.email/content/assets/img/social-icons/logo-white/youtube-logo-white.png" alt="Yt" title="Youtube" width="32"></a></td>
                                                                                                    <td align="center" valign="top"><a target="_blank" href="https://www.pinterest.com/StripoEmail/"><img src="https://fibjeko.stripocdn.email/content/assets/img/social-icons/logo-white/pinterest-logo-white.png" alt="P" title="Pinterest" width="32"></a></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p10t">
                                                                                        <p>If you think this message was sent to you in error, you can <a target="_blank">unsubscribe</a>.</p>
                                                                                        <p>Please refer to our <a target="_blank">privacy policy</a> for more information.</p>
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
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>