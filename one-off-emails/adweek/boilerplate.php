<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width"/>

		<style type="text/css">
			
			/* Ink styles go here in production */
			/**********************************************
* Ink v1.0.5 - Copyright 2013 ZURB Inc        *
**********************************************/

/* Client-specific Styles & Reset */

#outlook a { 
  padding:0; 
} 

body{ 
  width:100% !important; 
  min-width: 100%;
  -webkit-text-size-adjust:100%; 
  -ms-text-size-adjust:100%; 
  margin:0; 
  padding:0;
}

.ExternalClass { 
  width:100%;
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
  margin:0; 
  padding:0; 
  width:100% !important; 
  line-height: 100% !important; 
}

img { 
  outline:none; 
  text-decoration:none; 
  -ms-interpolation-mode: bicubic;
  width: auto;
  max-width: 100%; 
  float: left; 
  clear: both; 
  display: block;
}

center {
  width: 100%;
  min-width: 580px;
}

a img { 
  border: none;
}

p {
  margin: 0 0 0 10px;
}

table {
  border-spacing: 0;
  border-collapse: collapse;
}

td { 
  word-break: break-word;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
  border-collapse: collapse !important; 
}

table, tr, td {
  padding: 0;
  vertical-align: top;
  text-align: left;
}

hr {
  color: #d9d9d9; 
  background-color: #d9d9d9; 
  height: 1px; 
  border: none;
}

/* Responsive Grid */

table.body {
  height: 100%;
  width: 100%;
}

table.container {
  width: 580px;
  margin: 0 auto;
  text-align: inherit;
}

table.row { 
  padding: 0px; 
  width: 100%;
  position: relative;
}

table.container table.row {
  display: block;
}

td.wrapper {
  padding: 10px 20px 0px 0px;
  position: relative;
}

table.columns,
table.column {
  margin: 0 auto;
}

table.columns td,
table.column td {
  padding: 0px 0px 10px; 
}

table.columns td.sub-columns,
table.column td.sub-columns,
table.columns td.sub-column,
table.column td.sub-column {
  padding-right: 10px;
}

td.sub-column, td.sub-columns {
  min-width: 0px;
}

table.row td.last,
table.container td.last {
  padding-right: 0px;
}

table.one { width: 30px; }
table.two { width: 80px; }
table.three { width: 130px; }
table.four { width: 180px; }
table.five { width: 230px; }
table.six { width: 280px; }
table.seven { width: 330px; }
table.eight { width: 380px; }
table.nine { width: 430px; }
table.ten { width: 480px; }
table.eleven { width: 530px; }
table.twelve { width: 580px; }

table.one center { min-width: 30px; }
table.two center { min-width: 80px; }
table.three center { min-width: 130px; }
table.four center { min-width: 180px; }
table.five center { min-width: 230px; }
table.six center { min-width: 280px; }
table.seven center { min-width: 330px; }
table.eight center { min-width: 380px; }
table.nine center { min-width: 430px; }
table.ten center { min-width: 480px; }
table.eleven center { min-width: 530px; }
table.twelve center { min-width: 580px; }

table.one .panel center { min-width: 10px; }
table.two .panel center { min-width: 60px; }
table.three .panel center { min-width: 110px; }
table.four .panel center { min-width: 160px; }
table.five .panel center { min-width: 210px; }
table.six .panel center { min-width: 260px; }
table.seven .panel center { min-width: 310px; }
table.eight .panel center { min-width: 360px; }
table.nine .panel center { min-width: 410px; }
table.ten .panel center { min-width: 460px; }
table.eleven .panel center { min-width: 510px; }
table.twelve .panel center { min-width: 560px; }

.body .columns td.one,
.body .column td.one { width: 8.333333%; }
.body .columns td.two,
.body .column td.two { width: 16.666666%; }
.body .columns td.three,
.body .column td.three { width: 25%; }
.body .columns td.four,
.body .column td.four { width: 33.333333%; }
.body .columns td.five,
.body .column td.five { width: 41.666666%; }
.body .columns td.six,
.body .column td.six { width: 50%; }
.body .columns td.seven,
.body .column td.seven { width: 58.333333%; }
.body .columns td.eight,
.body .column td.eight { width: 66.666666%; }
.body .columns td.nine,
.body .column td.nine { width: 75%; }
.body .columns td.ten,
.body .column td.ten { width: 83.333333%; }
.body .columns td.eleven,
.body .column td.eleven { width: 91.666666%; }
.body .columns td.twelve,
.body .column td.twelve { width: 100%; }

td.offset-by-one { padding-left: 50px; }
td.offset-by-two { padding-left: 100px; }
td.offset-by-three { padding-left: 150px; }
td.offset-by-four { padding-left: 200px; }
td.offset-by-five { padding-left: 250px; }
td.offset-by-six { padding-left: 300px; }
td.offset-by-seven { padding-left: 350px; }
td.offset-by-eight { padding-left: 400px; }
td.offset-by-nine { padding-left: 450px; }
td.offset-by-ten { padding-left: 500px; }
td.offset-by-eleven { padding-left: 550px; }

td.expander {
  visibility: hidden;
  width: 0px;
  padding: 0 !important;
}

table.columns .text-pad,
table.column .text-pad {
  padding-left: 10px;
  padding-right: 10px;
}

table.columns .left-text-pad,
table.columns .text-pad-left,
table.column .left-text-pad,
table.column .text-pad-left {
  padding-left: 10px;
}

table.columns .right-text-pad,
table.columns .text-pad-right,
table.column .right-text-pad,
table.column .text-pad-right {
  padding-right: 10px;
}

/* Block Grid */

.block-grid {
  width: 100%;
  max-width: 580px;
}

.block-grid td {
  display: inline-block;
  padding:10px;
}

.two-up td {
  width:270px;
}

.three-up td {
  width:173px;
}

.four-up td {
  width:125px;
}

.five-up td {
  width:96px;
}

.six-up td {
  width:76px;
}

.seven-up td {
  width:62px;
}

.eight-up td {
  width:52px;
}

/* Alignment & Visibility Classes */

table.center, td.center {
  text-align: center;
}

h1.center,
h2.center,
h3.center,
h4.center,
h5.center,
h6.center {
  text-align: center;
}

span.center {
  display: block;
  width: 100%;
  text-align: center;
}

img.center {
  margin: 0 auto;
  float: none;
}

.show-for-small,
.hide-for-desktop {
  display: none;
}

/* Typography */

body, table.body, h1, h2, h3, h4, h5, h6, p, td { 
  color: #222222;
  font-family: "Helvetica", "Arial", sans-serif; 
  font-weight: normal; 
  padding:0; 
  margin: 0;
  text-align: left; 
  line-height: 1.3;
}

h1, h2, h3, h4, h5, h6 {
  word-break: normal;
}

h1 {font-size: 40px;}
h2 {font-size: 36px;}
h3 {font-size: 32px;}
h4 {font-size: 28px;}
h5 {font-size: 24px;}
h6 {font-size: 20px;}
body, table.body, p, td {font-size: 14px;line-height:19px;}

p.lead, p.lede, p.leed {
  font-size: 18px;
  line-height:21px;
}

p { 
  margin-bottom: 10px;
}

small {
  font-size: 10px;
}

a {
  color: #2ba6cb; 
  text-decoration: none;
}

a:hover { 
  color: #2795b6 !important;
}

a:active { 
  color: #2795b6 !important;
}

a:visited { 
  color: #2ba6cb !important;
}

h1 a, 
h2 a, 
h3 a, 
h4 a, 
h5 a, 
h6 a {
  color: #2ba6cb;
}

h1 a:active, 
h2 a:active,  
h3 a:active, 
h4 a:active, 
h5 a:active, 
h6 a:active { 
  color: #2ba6cb !important; 
} 

h1 a:visited, 
h2 a:visited,  
h3 a:visited, 
h4 a:visited, 
h5 a:visited, 
h6 a:visited { 
  color: #2ba6cb !important; 
} 

/* Panels */

.panel {
  background: #f2f2f2;
  border: 1px solid #d9d9d9;
  padding: 10px !important;
}

.sub-grid table {
  width: 100%;
}

.sub-grid td.sub-columns {
  padding-bottom: 0;
}

/* Buttons */

table.button,
table.tiny-button,
table.small-button,
table.medium-button,
table.large-button {
  width: 100%;
  overflow: hidden;
}

table.button td,
table.tiny-button td,
table.small-button td,
table.medium-button td,
table.large-button td {
  display: block;
  width: auto !important;
  text-align: center;
  background: #2ba6cb;
  border: 1px solid #2284a1;
  color: #ffffff;
  padding: 8px 0;
}

table.tiny-button td {
  padding: 5px 0 4px;
}

table.small-button td {
  padding: 8px 0 7px;
}

table.medium-button td {
  padding: 12px 0 10px;
}

table.large-button td {
  padding: 21px 0 18px;
}

table.button td a,
table.tiny-button td a,
table.small-button td a,
table.medium-button td a,
table.large-button td a {
  font-weight: bold;
  text-decoration: none;
  font-family: Helvetica, Arial, sans-serif;
  color: #ffffff;
  font-size: 16px;
}

table.tiny-button td a {
  font-size: 12px;
  font-weight: normal;
}

table.small-button td a {
  font-size: 16px;
}

table.medium-button td a {
  font-size: 20px;
}

table.large-button td a {
  font-size: 24px;
}

table.button:hover td,
table.button:visited td,
table.button:active td {
  background: #2795b6 !important;
}

table.button:hover td a,
table.button:visited td a,
table.button:active td a {
  color: #fff !important;
}

table.button:hover td,
table.tiny-button:hover td,
table.small-button:hover td,
table.medium-button:hover td,
table.large-button:hover td {
  background: #2795b6 !important;
}

table.button:hover td a,
table.button:active td a,
table.button td a:visited,
table.tiny-button:hover td a,
table.tiny-button:active td a,
table.tiny-button td a:visited,
table.small-button:hover td a,
table.small-button:active td a,
table.small-button td a:visited,
table.medium-button:hover td a,
table.medium-button:active td a,
table.medium-button td a:visited,
table.large-button:hover td a,
table.large-button:active td a,
table.large-button td a:visited {
  color: #ffffff !important; 
}

table.secondary td {
  background: #e9e9e9;
  border-color: #d0d0d0;
  color: #555;
}

table.secondary td a {
  color: #555;
}

table.secondary:hover td {
  background: #d0d0d0 !important;
  color: #555;
}

table.secondary:hover td a,
table.secondary td a:visited,
table.secondary:active td a {
  color: #555 !important;
}

table.success td {
  background: #5da423;
  border-color: #457a1a;
}

table.success:hover td {
  background: #457a1a !important;
}

table.alert td {
  background: #c60f13;
  border-color: #970b0e;
}

table.alert:hover td {
  background: #970b0e !important;
}

table.radius td {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

table.round td {
  -webkit-border-radius: 500px;
  -moz-border-radius: 500px;
  border-radius: 500px;
}

/* Outlook First */

body.outlook p {
  display: inline !important;
}

/*  Media Queries */

@media only screen and (max-width: 600px) {

  table[class="body"] img {
    width: auto !important;
    height: auto !important;
  }

  table[class="body"] center {
    min-width: 0 !important;
  }

  table[class="body"] .container {
    width: 95% !important;
  }

  table[class="body"] .row {
    width: 100% !important;
    display: block !important;
  }

  table[class="body"] .wrapper {
    display: block !important;
    padding-right: 0 !important;
  }

  table[class="body"] .columns,
  table[class="body"] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important;
  }

  table[class="body"] .wrapper.first .columns,
  table[class="body"] .wrapper.first .column {
    display: table !important;
  }

  table[class="body"] table.columns td,
  table[class="body"] table.column td {
    width: 100% !important;
  }

  table[class="body"] .columns td.one,
  table[class="body"] .column td.one { width: 8.333333% !important; }
  table[class="body"] .columns td.two,
  table[class="body"] .column td.two { width: 16.666666% !important; }
  table[class="body"] .columns td.three,
  table[class="body"] .column td.three { width: 25% !important; }
  table[class="body"] .columns td.four,
  table[class="body"] .column td.four { width: 33.333333% !important; }
  table[class="body"] .columns td.five,
  table[class="body"] .column td.five { width: 41.666666% !important; }
  table[class="body"] .columns td.six,
  table[class="body"] .column td.six { width: 50% !important; }
  table[class="body"] .columns td.seven,
  table[class="body"] .column td.seven { width: 58.333333% !important; }
  table[class="body"] .columns td.eight,
  table[class="body"] .column td.eight { width: 66.666666% !important; }
  table[class="body"] .columns td.nine,
  table[class="body"] .column td.nine { width: 75% !important; }
  table[class="body"] .columns td.ten,
  table[class="body"] .column td.ten { width: 83.333333% !important; }
  table[class="body"] .columns td.eleven,
  table[class="body"] .column td.eleven { width: 91.666666% !important; }
  table[class="body"] .columns td.twelve,
  table[class="body"] .column td.twelve { width: 100% !important; }

  table[class="body"] td.offset-by-one,
  table[class="body"] td.offset-by-two,
  table[class="body"] td.offset-by-three,
  table[class="body"] td.offset-by-four,
  table[class="body"] td.offset-by-five,
  table[class="body"] td.offset-by-six,
  table[class="body"] td.offset-by-seven,
  table[class="body"] td.offset-by-eight,
  table[class="body"] td.offset-by-nine,
  table[class="body"] td.offset-by-ten,
  table[class="body"] td.offset-by-eleven {
    padding-left: 0 !important;
  }

  table[class="body"] table.columns td.expander {
    width: 1px !important;
  }

  table[class="body"] .right-text-pad,
  table[class="body"] .text-pad-right {
    padding-left: 10px !important;
  }

  table[class="body"] .left-text-pad,
  table[class="body"] .text-pad-left {
    padding-right: 10px !important;
  }

  table[class="body"] .hide-for-small,
  table[class="body"] .show-for-desktop {
    display: none !important;
  }

  table[class="body"] .show-for-small,
  table[class="body"] .hide-for-desktop {
    display: inherit !important;
  }
}

			
		</style>
		<style type="text/css">

			/* Your custom styles go here */
			*,
			h1,
			h2,
			h3,
			h4,
			h5,
			h6,
			p {				
				font-family: "Gotham", Arial, sans-serif;
			}
			p {
				font-size: 15px;
				line-height: 1.65;
			}
			body {
				background-color: #f5f7f7;
			}

			.container {
				background-color: #ffffff;
			}

			/* HEADER STYLES */
			.header {
				background-color: #061c48;
			}

			.header .row {
				padding-top: 20px;
			}

			.header h1 {
				color: #ffffff;
			}
			.header h2 {
				color: #77bd1f;
				line-height: 1.65;
			}

			/* BUTTON STYLES */
			table.button td {
				background-color: #061c48;
				text-transform: uppercase;
				border-radius: 4px;
				border-color: transparent;
			}

			table.button:hover td,
			table.button:visited td,
			table.button:active td {
			  background: #007aff !important;
			}

			table.button td a {
				font-weight: normal;
				font-family: "Gotham", Arial, sans-serif;
			}

			/* CTA */
			.first-cta .wrapper {
				padding-top: 40px;
				padding-bottom: 20px;
			}
			.second-cta {
				background-color: #d8e0e1;
			}

			table.second-cta .eight {
				padding-top: 30px;
				padding-bottom: 35px;
			}

			.second-cta h2 {
				color: #3d5264;
				font-size: 16px;
				font-weight: bold;
				text-transform: uppercase;
			}

			.second-cta h1 {
				color: #061c48;
				font-size: 22px;
				margin-bottom: 15px;
			}


			/* EMAIL BODY STYLES */
			.email-body .wrapper {
				padding-bottom: 20px;
			}

			/* FOOTER STYLES */
			table.email-footer {
				background-color: #007aff;
				color: #ffffff;
			}

      .email-footer .row {
        padding: 15px 0;
      }

      .email-footer td {
        color: #ffffff;
      }

      .email-footer span {
        text-transform: uppercase;
        margin: 0px 5px;
        font-size: 10px;
      }

      .email-footer a:hover {
        color: #ffffff !important;
      }
		</style>
	</head>
	<body>
		<table class="body">
			<tr>
				<td class="center" align="center" valign="top">
					<center>

					<!-- HEADER // -->
					<table class="container header">
						<tr>
							<td>

								<table class="row">
									<tr>
										<td class="wrapper offset-by-one">

											<table class="three columns">
												<tr>
													<td style="padding-bottom: 0;">

														<img src="adweek-header-image.png" class="center">

													</td>
													<td class="expander"></td>
												</tr>
											</table>

										</td>
										<td class="wrapper last">

											<table class="seven columns">
												<tr>
													<td>

														<h1 style="font-size: 20px; font-weight: 300; margin-top: 5px;">Three Basic Reports Every Mobile Marketer Needs to Master</h1>
														<h2 style="font-size: 13px; font-weight: 300;">Learn how to visualize and analyze app marketing data to optimize user acquisition.</h2>
														<img src="tune-logo.png" style="margin-top: 10px; margin-left: 270px;">

													</td>
													<td class="expander"></td>
												</tr>
											</table>

										</td>
									</tr>
								</table>

							</td>
						</tr>
					</table>
					<!-- // HEADER -->

					<!-- FIRST CTA // -->
					<table class="container first-cta">
						<tr>
							<td>

								<table class="row">
									<tr>
										<td class="wrapper last offset-by-three">

											<table class="six columns">
												<tr>
													<td>

														<table class="button">
														  <tr>
														    <td>
														      <a href="http://www.google.com/url?q=http%3A%2F%2Fin.tune.com%2Fl%2F23402%2F2015-04-07%2F27gn5r%3Futm_campaign%3DTMC%2520-%252015Q2%2520-%2520Three%2520Reports%2520to%2520master%2520-%2520AdWeek%26utm_source%3D3rd%2520Party%26utm_medium%3DEmail%2520-%2520Third%2520Party&sa=D&sntz=1&usg=AFQjCNFqt6mApMBVdu7qevOa8zIXqpOiMg">Check it out today!</a>
														    </td>
														  </tr>
														</table>

													</td>
													<td class="expander"></td>
												</tr>
											</table>

										</td>
									</tr>
								</table>

							</td>
						</tr>
					</table>
					<!-- // FIRST CTA -->

					<!-- COPY BLOCK // -->
					<table class="container email-body">
						<tr>
							<td>

								<table class="row">
									<tr>
										<td class="wrapper last offset-by-one">

											<table class="ten columns">
												<tr>
													<td>

														<p>Knowing how to evaluate and utilize data is key to optimizing user acquisition and succeeding as a mobile marketer. But understanding which metrics you should measure and what actions you should take is something many mobile marketers find challenging.</p>
														<p>Download <i>Three Basic Reports Every Mobile Marketer Needs to Master</i> to learn everything you need to know about the most important mobile marketing reports:</p>

														<img src="adweek-report-types.jpg" class="center" style="margin-top: 20px; margin-bottom: 30px;">

														<p>We’ll guide you through these three reports and demonstrate how each one can be utilized to access critical data in order to analyze and optimize your campaigns. </p>

													</td>
													<td class="expander"></td>
												</tr>
											</table>

										</td>
									</tr>
								</table>

							</td>
						</tr>
					</table>
					<!-- // COPY BLOCK -->

					<!-- CTA BLOCK // -->
					<table class="container">
						<tr>
							<td>

								<table class="row">
									<tr>
										<td class="wrapper last offset-by-one">

											<table class="ten columns second-cta">
												<tr>

								          <td class="two sub-columns">&nbsp;</td>

								          <td class="eight sub-columns last">
								          	<h2 class="center">Whitepaper</h2>
														<h1 class="center">Three Basic Reports Every Mobile Marketer Needs to Master</h1>

														<table class="button">
														  <tr>
														    <td>
														      <a href="http://in.tune.com/l/23402/2015-04-07/27gn5r?utm_campaign=TMC%20-%2015Q2%20-%20Three%20Reports%20to%20master%20-%20AdWeek&utm_source=3rd%20Party&utm_medium=Email%20-%20Third%20Party">Download it Here!</a>
														    </td>
														  </tr>
														</table>
								          </td>

								          <td class="two sub-columns">&nbsp;</td>

													<td class="expander"></td>
												</tr>
											</table>

										</td>
									</tr>
								</table>

							</td>
						</tr>
					</table>
					<!-- // CTA BLOCK -->

					<!-- COPY BLOCK // -->
					<table class="container">
						<tr>
							<td>

								<table class="row">
									<tr>
										<td class="wrapper last offset-by-one">

											<table class="ten columns">
												<tr>
													<td>&nbsp;</td>
													<td class="expander"></td>
												</tr>
											</table>

										</td>
									</tr>
								</table>

							</td>
						</tr>
					</table>
					<!-- // COPY BLOCK -->

					<!-- EMAIL FOOTER // -->
          <table class="container email-footer">
            <tr>
              <td>

                <table class="row">
                  <tr>

                    <!-- FOOTER LOGO // -->
                    <td class="wrapper offset-by-one footer-logo">

                      <table class="two columns">
                        <tr>
                          <td>

                            <a href="http://www.tune.com"><img class="center footer-logo" src="http://storage.pardot.com/23402/59956/2015_email_tune_logo_knockout.png" width="80" height="20"style="max-width: 100px !important;"></a>

                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                    <!-- // FOOTER LOGO -->

                    <!-- FOOTER LINKS // -->
                    <td class="wrapper footer-colophon">

                      <table class="six columns">
                        <tr>
                          <td class="text-xsmall center">

                            <span>2220 Western Ave, Seattle</span>

                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                    <!-- // FOOTER LINKS -->

                    <!-- FOOTER SOCIAL // -->
                    <td class="wrapper footer-social last">

                      <table class="two columns">
                        <tr>
                          <td class="three subcolumns text-align-right">
                            <a href="http://www.twitter.com/tune"><img class="center social-icon" width="20" height="12" src="http://storage.pardot.com/23402/56808/2015_email_icon_twitter.png"></a>
                          </td>
                          <td class="three subcolumns text-align-right">
                            <a href="http://www.facebook.com/tune"><img class="center social-icon" width="20" height="12" src="http://in.tune.com/l/23402/2015-01-08/ptn6r/23402/56606/facebook.png"></a>
                          </td>
                          <td class="three subcolumns text-align-right">
                            <a href="https://plus.google.com/110653481875028879836/videos"><img class="center social-icon" width="20" height="12" src="http://storage.pardot.com/23402/56814/2015_emial_icon_googleplus.png"></a>
                          </td>
                          <td class="three subcolumns text-align-right">
                            <a href="https://www.linkedin.com/company/635323"><img class="center social-icon" width="20" height="12" src="http://storage.pardot.com/23402/56804/2015_email_icon_linkedin.png"></a>
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                    <!-- // FOOTER SOCIAL -->

                  </tr>
                </table>

              </td>
            </tr>
          </table>
          <!-- // EMAIL FOOTER -->

					</center>
				</td>
			</tr>
		</table>
	</body>
</html>