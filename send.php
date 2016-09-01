<?php 


 date_default_timezone_set('Etc/UTC');
 require_once('PHPMailer/_lib/PHPMailerAutoload.php');


define('GUSER', 'lifebankreply@gmail.com'); // GMail username
define('GPWD', 'Ar0F4iXuyyIGNRLxLk9Er7UKhpGp41SKMjvQ2BjvVCYP'); // GMail password



$plusw = '<!DOCTYPE html "-//w3c//dtd xhtml 1.0 transitional //en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]--><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width"><meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
	<title>Welcome to LifeBank Plus</title>
	<!--[if !mso]><!- - -->
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css" /><!--<![endif]-->
</head>
<body style="width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #FFFFFF">
<style id="media-query" type="text/css">/* Client-specific Styles & Reset */
    #outlook a {
        padding: 0;
    }

    /* .ExternalClass applies to Outlook.com (the artist formerly known as Hotmail) */
    .ExternalClass {
        width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
        line-height: 100%;
    }

    #backgroundTable {
        margin: 0;
        padding: 0;
        width: 100% !important;
        line-height: 100% !important;
    }

    /* Buttons */
    .button a {
        display: inline-block;
        text-decoration: none;
        -webkit-text-size-adjust: none;
        text-align: center;
    }

    .button a div {
        text-align: center !important;
    }

    /* Outlook First */
    body.outlook p {
        display: inline !important;
    }

    /*  Media Queries */
@media only screen and (max-width: 500px) {
  table[class="body"] img {
    height: auto !important;
    width: 100% !important; }
  table[class="body"] img.fullwidth {
    max-width: 100% !important; }
  table[class="body"] center {
    min-width: 0 !important; }
  table[class="body"] .container {
    width: 95% !important; }
  table[class="body"] .row {
    width: 100% !important;
    display: block !important; }
  table[class="body"] .wrapper {
    display: block !important;
    padding-right: 0 !important; }
  table[class="body"] .columns, table[class="body"] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important; }
  table[class="body"] .wrapper.first .columns, table[class="body"] .wrapper.first .column {
    display: table !important; }
  table[class="body"] table.columns td, table[class="body"] table.column td, .col {
    width: 100% !important; }
  table[class="body"] table.columns td.expander {
    width: 1px !important; }
  table[class="body"] .right-text-pad, table[class="body"] .text-pad-right {
    padding-left: 10px !important; }
  table[class="body"] .left-text-pad, table[class="body"] .text-pad-left {
    padding-right: 10px !important; }
  table[class="body"] .hide-for-small, table[class="body"] .show-for-desktop {
    display: none !important; }
  table[class="body"] .show-for-small, table[class="body"] .hide-for-desktop {
    display: inherit !important; }
  .mixed-two-up .col {
    width: 100% !important; } }
 @media screen and (max-width: 500px) {
      div[class="col"] {
          width: 100% !important;
      }
    }

    @media screen and (min-width: 501px) {
      table[class="container"] {
          width: 500px !important;
      }
    }
</style>
<table border="0" cellpadding="0" cellspacing="0" class="body" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;table-layout: fixed" width="100%">
	<tbody>
		<tr style="vertical-align: top">
			<td align="center" class="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #FFFFFF" valign="top">
			<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent" width="100%">
				<tbody>
					<tr style="vertical-align: top">
						<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]--><!--[if (IE)]>
                    <table width="500" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
						<table align="center" border="0" cellpadding="0" cellspacing="0" class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" width="100%">
							<tbody>
								<tr style="vertical-align: top">
									<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
									<table bgcolor="transparent" cellpadding="0" cellspacing="0" class="block-grid mixed-two-up" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent" width="100%">
										<tbody>
											<tr style="vertical-align: top">
												<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="167"><![endif]-->
												<div class="col num4" style="display: inline-block;vertical-align: top;text-align: center;width: 167px">
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
													<tbody>
														<tr style="vertical-align: top">
															<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 10px;padding-bottom: 0px;padding-left: 10px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
															<table border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
																<tbody>
																	<tr style="vertical-align: top">
																		<td align="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%">
																		<div align="center" style="font-size:12px"><img align="center" alt="Image" class="center fullwidth" src="http://lifebank.ng/email/uploads/1468424618.png" style="outline: none; text-decoration: none; clear: both; display: block; border: 0px; line-height: 100%; margin: 0px auto; max-width: 146.667px; width: 100%;" title="Image" /></div>
																		</td>
																	</tr>
																</tbody>
															</table>
															</td>
														</tr>
													</tbody>
												</table>
												</div>
												<!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="333"><![endif]-->

												<div class="col num8" style="display: inline-block;vertical-align: top;text-align: center;width: 333px">
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
													<tbody>
														<tr style="vertical-align: top">
															<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 15px;padding-right: 0px;padding-bottom: 15px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"> </td>
														</tr>
													</tbody>
												</table>
												</div>
												<!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						<!--[if mso]>
                    </td></tr></table>
                    <![endif]--><!--[if (IE)]>
                    </td></tr></table>
                    <![endif]--></td>
					</tr>
				</tbody>
			</table>

			<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent" width="100%">
				<tbody>
					<tr style="vertical-align: top">
						<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]--><!--[if (IE)]>
                    <table width="500" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
						<table align="center" border="0" cellpadding="0" cellspacing="0" class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" width="100%">
							<tbody>
								<tr style="vertical-align: top">
									<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
									<table bgcolor="transparent" cellpadding="0" cellspacing="0" class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent" width="100%">
										<tbody>
											<tr style="vertical-align: top">
												<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="500"><![endif]-->
												<div class="col num12" style="display: inline-block;vertical-align: top;width: 100%">
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
													<tbody>
														<tr style="vertical-align: top">
															<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
															<table border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
																<tbody>
																	<tr style="vertical-align: top">
																		<td align="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;width: 100%">
																		<div align="center" style="font-size:12px"><img align="center" alt="Image" class="center fullwidth" src="http://lifebank.ng/email/uploads/1468465275.jpg" style="outline: none; text-decoration: none; clear: both; display: block; border: 0px; line-height: 100%; margin: 0px auto; max-width: 500px; width: 100%;" title="Image" /></div>
																		</td>
																	</tr>
																</tbody>
															</table>

															<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
																<tbody>
																	<tr style="vertical-align: top">
																		<td align="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
																		<div style="height: 1px;">
																		<table align="center" border="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 1px solid #BBBBBB;width: 100%">
																			<tbody>
																				<tr style="vertical-align: top">
																					<td align="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"> </td>
																				</tr>
																			</tbody>
																		</table>
																		</div>
																		</td>
																	</tr>
																</tbody>
															</table>

															<table cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
																<tbody>
																	<tr style="vertical-align: top">
																		<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
																		<div style="color:#555555;line-height:120%;font-family: \'Droid Serif\', Georgia, Times, \'Times New Roman\', serif;">
																		<div droid="" serif="" style="font-size:12px;line-height:14px;font-family:">
																		<p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><span style="font-size: 20px; line-height: 24px;">Thank you for registering with <strong><a href="plus.lifebank.ng" style="color:#b70303;text-decoration: none; color: #b70303; font-size: 18px; line-height: 21px;" target="_blank">LifeBank Plus. </a></strong></span></p>
																		</div>
																		</div>
																		</td>
																	</tr>
																</tbody>
															</table>
															</td>
														</tr>
													</tbody>
												</table>
												</div>
												<!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						<!--[if mso]>
                    </td></tr></table>
                    <![endif]--><!--[if (IE)]>
                    </td></tr></table>
                    <![endif]--></td>
					</tr>
				</tbody>
			</table>

			<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent" width="100%">
				<tbody>
					<tr style="vertical-align: top">
						<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]--><!--[if (IE)]>
                    <table width="500" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
						<table align="center" border="0" cellpadding="0" cellspacing="0" class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" width="100%">
							<tbody>
								<tr style="vertical-align: top">
									<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
									<table bgcolor="transparent" cellpadding="0" cellspacing="0" class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent" width="100%">
										<tbody>
											<tr style="vertical-align: top">
												<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="500"><![endif]-->
												<div class="col num12" style="display: inline-block;vertical-align: top;width: 100%">
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
													<tbody>
														<tr style="vertical-align: top">
															<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
															<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
																<tbody>
																	<tr style="vertical-align: top">
																		<td align="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
																		<div style="height: 1px;">
																		<table align="center" border="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 1px solid #BBBBBB;width: 100%">
																			<tbody>
																				<tr style="vertical-align: top">
																					<td align="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"> </td>
																				</tr>
																			</tbody>
																		</table>
																		</div>
																		</td>
																	</tr>
																</tbody>
															</table>
															</td>
														</tr>
													</tbody>
												</table>
												</div>
												<!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						<!--[if mso]>
                    </td></tr></table>
                    <![endif]--><!--[if (IE)]>
                    </td></tr></table>
                    <![endif]--></td>
					</tr>
				</tbody>
			</table>

			<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent" width="100%">
				<tbody>
					<tr style="vertical-align: top">
						<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]--><!--[if (IE)]>
                    <table width="500" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
						<table align="center" border="0" cellpadding="0" cellspacing="0" class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" width="100%">
							<tbody>
								<tr style="vertical-align: top">
									<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
									<table bgcolor="transparent" cellpadding="0" cellspacing="0" class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent" width="100%">
										<tbody>
											<tr style="vertical-align: top">
												<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="500"><![endif]-->
												<div class="col num12" style="display: inline-block;vertical-align: top;width: 100%">
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
													<tbody>
														<tr style="vertical-align: top">
															<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
															<table cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
																<tbody>
																	<tr style="vertical-align: top">
																		<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
																		<div style="color:#555555;line-height:120%;font-family:\'Droid Serif\', Georgia, Times, \'Times New Roman\', serif;">
																		<div droid="" serif="" style="font-size:12px;line-height:14px;font-family:">
																		<p style="margin: 0;font-size: 14px;line-height: 17px;text-align: justify"><strong><a href="plus.lifebank.ng" style="color:#0000FF;text-decoration: none; color: #b70303; font-size: 14px; line-height: 16px;" target="_blank">LifeBank Plus</a> </strong>helps you find the blood you need faster, safer, and cheaper.<br />
																		<br />
																		<span style="font-size: 16px; line-height: 19px;"><strong><span style="color: rgb(183, 3, 3); line-height: 19px; font-size: 16px;">Discovery: </span></strong></span>With over 30 blood banks and counting, we have the largest blood collection in Lagos. With just 1 phone call, you can gain access to these blood banks and save money.<br />
																		<br />
																		<span style="font-size: 16px; line-height: 19px;"><strong><span style="color: rgb(183, 3, 3); line-height: 19px; font-size: 16px;">Delivery: </span></strong></span>We deliver the blood you need in a state of the art cold chain system with a temperature strip, blood box, and the best security system.<br />
																		<br />
																		<strong><span style="color: rgb(183, 3, 3); font-size: 16px; line-height: 19px;">Speed: </span></strong>We deliver within the Lagos metropolis in 55 minutes.</p>
																		</div>
																		</div>
																		</td>
																	</tr>
																</tbody>
															</table>
															</td>
														</tr>
													</tbody>
												</table>
												</div>
												<!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						<!--[if mso]>
                    </td></tr></table>
                    <![endif]--><!--[if (IE)]>
                    </td></tr></table>
                    <![endif]--></td>
					</tr>
				</tbody>
			</table>

			<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent" width="100%">
				<tbody>
					<tr style="vertical-align: top">
						<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]--><!--[if (IE)]>
                    <table width="500" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
						<table align="center" border="0" cellpadding="0" cellspacing="0" class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" width="100%">
							<tbody>
								<tr style="vertical-align: top">
									<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
									<table bgcolor="transparent" cellpadding="0" cellspacing="0" class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent" width="100%">
										<tbody>
											<tr style="vertical-align: top">
												<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="500"><![endif]-->
												<div class="col num12" style="display: inline-block;vertical-align: top;width: 100%">
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
													<tbody>
														<tr style="vertical-align: top">
															<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
															<table cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
																<tbody>
																	<tr style="vertical-align: top">
																		<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
																		<div style="color:#555555;line-height:120%;font-family:\'Droid Serif\', Georgia, Times, \'Times New Roman\', serif;">
																		<div droid="" serif="" style="font-family:">
																		<p style="margin: 0;font-size: 14px;line-height: 17px">As of today, see below the price range on our platform.</p>

																		<p style="margin: 0;font-size: 14px;line-height: 16px"> </p>

																		<table border="0" cellpadding="1" cellspacing="1" style="width:100%;">
																			<thead>
																				<tr>
																					<th scope="row">Blood Group</th>
																					<th scope="col">Minimum Price</th>
																					<th scope="col">Maximum Price</th>
																				</tr>
																			</thead>
																			<tbody>
																				<tr>
																					<th scope="row">A+</th>
																					<td> </td>
																					<td> </td>
																				</tr>
																				<tr>
																					<th scope="row">A-</th>
																					<td> </td>
																					<td> </td>
																				</tr>
																				<tr>
																					<th scope="row">B+</th>
																					<td> </td>
																					<td> </td>
																				</tr>
																				<tr>
																					<th scope="row">B-</th>
																					<td> </td>
																					<td> </td>
																				</tr>
																				<tr>
																					<th scope="row">AB+</th>
																					<td> </td>
																					<td> </td>
																				</tr>
																				<tr>
																					<th scope="row">AB-</th>
																					<td> </td>
																					<td> </td>
																				</tr>
																				<tr>
																					<th scope="row">O+</th>
																					<td> </td>
																					<td> </td>
																				</tr>
																				<tr>
																					<th scope="row">O-</th>
																					<td> </td>
																					<td> </td>
																				</tr>
																			</tbody>
																		</table>

																		<p> </p>
																		</div>
																		</div>
																		</td>
																	</tr>
																</tbody>
															</table>
															</td>
														</tr>
													</tbody>
												</table>
												</div>
												<!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						<!--[if mso]>
                    </td></tr></table>
                    <![endif]--><!--[if (IE)]>
                    </td></tr></table>
                    <![endif]--></td>
					</tr>
				</tbody>
			</table>

			<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: transparent" width="100%">
				<tbody>
					<tr style="vertical-align: top">
						<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]--><!--[if (IE)]>
                    <table width="500" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
						<table align="center" border="0" cellpadding="0" cellspacing="0" class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" width="100%">
							<tbody>
								<tr style="vertical-align: top">
									<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
									<table bgcolor="transparent" cellpadding="0" cellspacing="0" class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent" width="100%">
										<tbody>
											<tr style="vertical-align: top">
												<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="500"><![endif]-->
												<div class="col num12" style="display: inline-block;vertical-align: top;width: 100%">
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
													<tbody>
														<tr style="vertical-align: top">
															<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
															<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
																<tbody>
																	<tr style="vertical-align: top">
																		<td align="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
																		<div style="height: 1px;">
																		<table align="center" border="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 1px solid #BBBBBB;width: 100%">
																			<tbody>
																				<tr style="vertical-align: top">
																					<td align="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"> </td>
																				</tr>
																			</tbody>
																		</table>
																		</div>
																		</td>
																	</tr>
																</tbody>
															</table>

															<table border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
																<tbody>
																	<tr style="vertical-align: top">
																		<td align="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" valign="top">
																		<table border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top">
																			<tbody>
																				<tr style="vertical-align: top">
																					<td align="center" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;padding-top: 5px;padding-right: 10px;padding-bottom: 0px;padding-left: 10px;max-width: 193px" valign="top"><!--[if (gte mso 9)|(IE)]>
            <table width="203" align="left" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left">
            <![endif]-->
																					<table align="left" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
																						<tbody>
																							<tr style="vertical-align: top">
																								<td align="left" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" valign="middle">
																								<table align="left" border="0" cellpadding="0" cellspacing="0" height="37" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0">
																									<tbody>
																										<tr style="vertical-align: top">
																											<td align="left" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" valign="middle" width="37"><a href="https://www.facebook.com/lifebanknigeria" target="_blank" title="Facebook"><img alt="Facebook" src="http://lifebank.ng/email/uploads/1468424707.png" style="outline: none; text-decoration: none; clear: both; display: block; border: none; line-height: 100%; max-width: 32px !important; width: 32px;" title="Facebook" /> </a></td>
																										</tr>
																									</tbody>
																								</table>

																								<table align="left" border="0" cellpadding="0" cellspacing="0" height="37" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0">
																									<tbody>
																										<tr style="vertical-align: top">
																											<td align="left" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" valign="middle" width="37"><a href="http://twitter.com/lifebanknigeria" target="_blank" title="Twitter"><img alt="Twitter" src="http://lifebank.ng/email/uploads/1468424719.png" style="outline: none; text-decoration: none; clear: both; display: block; border: none; line-height: 100%; max-width: 32px !important; width: 32px;" title="Twitter" /> </a></td>
																										</tr>
																									</tbody>
																								</table>

																								<table align="left" border="0" cellpadding="0" cellspacing="0" height="37" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0">
																									<tbody>
																										<tr style="vertical-align: top">
																											<td align="left" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" valign="middle" width="37"><a href="http://instagram.com/lifebanknigeria" target="_blank" title="Instagram"><img alt="Instagram" src="http://lifebank.ng/email/uploads/1468424732.png" style="outline: none; text-decoration: none; clear: both; display: block; border: none; line-height: 100%; max-width: 32px !important; width: 32px;" title="Instagram" /> </a></td>
																										</tr>
																									</tbody>
																								</table>

																								<table align="left" border="0" cellpadding="0" cellspacing="0" height="37" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0">
																									<tbody>
																										<tr style="vertical-align: top">
																											<td align="left" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" valign="middle" width="37"><a href="http://www.linkedin.com/lifebanknigeria" target="_blank" title="LinkedIn"><img alt="LinkedIn" src="http://lifebank.ng/email/uploads/1468424748.png" style="outline: none; text-decoration: none; clear: both; display: block; border: none; line-height: 100%; max-width: 32px !important; width: 32px;" title="LinkedIn" /> </a></td>
																										</tr>
																									</tbody>
																								</table>
																								</td>
																							</tr>
																						</tbody>
																					</table>
																					<!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
            </table>
            <![endif]--></td>
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
												<!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						<!--[if mso]>
                    </td></tr></table>
                    <![endif]--><!--[if (IE)]>
                    </td></tr></table>
                    <![endif]--></td>
					</tr>
				</tbody>
			</table>

			<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #b70303" width="100%">
				<tbody>
					<tr style="vertical-align: top">
						<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]--><!--[if (IE)]>
                    <table width="500" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
						<table align="center" border="0" cellpadding="0" cellspacing="0" class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" width="100%">
							<tbody>
								<tr style="vertical-align: top">
									<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%">
									<table bgcolor="transparent" cellpadding="0" cellspacing="0" class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent" width="100%">
										<tbody>
											<tr style="vertical-align: top">
												<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" bgcolor="transparent" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td valign="top" width="500"><![endif]-->
												<div class="col num12" style="display: inline-block;vertical-align: top;width: 100%">
												<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
													<tbody>
														<tr style="vertical-align: top">
															<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
															<table cellpadding="0" cellspacing="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%">
																<tbody>
																	<tr style="vertical-align: top">
																		<td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
																		<div style="color:#bbbbbb;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;">
																		<div style="font-size:12px;line-height:14px;color:#bbbbbb;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align:left;">
																		<p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 11px; line-height: 13px; color: rgb(255, 255, 255);">© 2016 LifeBank - All rights reserved.</span></p>
																		</div>
																		</div>
																		</td>
																	</tr>
																</tbody>
															</table>
															</td>
														</tr>
													</tbody>
												</table>
												</div>
												<!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						<!--[if mso]>
                    </td></tr></table>
                    <![endif]--><!--[if (IE)]>
                    </td></tr></table>
                    <![endif]--></td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>
</body>
</html>
';

function smtpmailer($to, $from, $from_name, $subject, $body) { 
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465; 
	$mail->Username = GUSER;  
	$mail->Password = GPWD;           
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->IsHTML(true); 
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	if($_POST['lb'] =='plus'){
		echo "plus";
	}if($_POST['lb'] =='app'){
		echo "app";
	}else{
		header('location: http://www.lifebank.ng/');
		exit;
	}
}else{
	header('location: http://www.lifebank.ng/');
	exit;
}
/*

smtpmailer('ayoolu03@yahoo.co.uk','hello@lifebank.ng','Lifebank', 'Subject', $plusw); 

if (!empty($error)) echo $error;
*/

echo "here";
?>
