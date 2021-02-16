<!doctype html>
<html>
	<head>
		<style>
			@import "https://www.super-resume.com/fonts.css";

			body {
				margin: 0;
			}
			p[sr-r-fld="title"] {
				page-break-after: avoid;
			}
			div[sr-r-resume] p,
			div[sr-r-resume] li, 
			[sr-r-block="text"] {
				page-break-inside: avoid;
			}
			div[sr-r-children] {
				page-break-before: avoid;
			}

			div[sr-r-resume] {
				margin: 0 auto 5em;
				color: #000;
				background-color: #fff;
			}
			div[sr-r-papersheet-inner] {
				margin: auto;
			}
			div[sr-r-block],
			div[sr-r-child]:not(:last-child) {
				padding: 2px;
			}
			div[sr-r-fld="html"], div[sr-r-fld="html"] * {
				line-height: 1.5em !important;
				margin-top: 0 !important;
				margin-bottom: 0 !important;
			}
			div[sr-r-resume] table {
				width: 100%;
				border-collapse: collapse;
			}
			div[sr-r-resume] td {
				vertical-align: top;
			}
			[sr-r-template="T2"] p {
				line-height: 1.4em;
				margin: 0 0 .6em;
			}
			[sr-r-template="T2"] p[sr-r-person] {
				font-size: 3em;
				margin-bottom: 0;
				padding: 0 .2em;
				line-height: 1em;
			}
			[sr-r-template="T2"] p[sr-r-fld="jobTitle"] {
				font-size: 1.2em;
				margin: .5em 0 0;
				border-top: 1px solid #a77;
				padding: .3em 10px 0 0;
			}
			[sr-r-template="T2"] div[sr-r-block="person"] p[sr-r-fld="location"] {
				font-size: 1em;
				color: #fff;
				padding-right: 10px;
			}
			[sr-r-template="T2"] p[sr-r-block][sr-r-fld="title"] {
				font-size: 1.3em;
				font-weight: bold;
				margin-bottom: .5em;
				color: rgb(79, 157, 213)
			}
			[sr-r-template="T2"] p[sr-r-child][sr-r-fld="title"] {
				font-size: 1.2em;
				font-weight: bold;
				margin: 0;
			}
			[sr-r-template="T2"] p[sr-r-where] {
				font-size: 1.1em;
				margin: 0;
			}
			[sr-r-template="T2"] p[sr-r-dates] {
				font-size: 1em;
				color: #555;
				margin: 0 0 .5em;
			}
			[sr-r-template="T2"] span[sr-r-fld="where"] {
				color: #555;
				font-weight: bold;
			}
			[sr-r-template="T2"] td[sr-r-tbl-top]:first-child {
				width: 50%;
				background: rgb(79, 157, 213);
				border-right: 4px solid #000;
				color: #fff;
				padding-bottom: 2em;
			}
			[sr-r-template="T2"] td[sr-r-tbl-top]:last-child {
				width: 50%;
				background: #eee;
				border-left: 4px solid #000;
				line-height:2em;
			}
			[sr-r-template="T2"] div[sr-r-block="person"] {
				text-align: right;
			}
			[sr-r-template="T2"] div[sr-r-block="contact"] {
				margin-left: 1em;
				font-size: 1.2em;
				color: #555;
			}
			div[sr-r-resume="3557542"] {
				max-width: 210mm;
				font-size: 3.5mm;
				font-family: Raleway;
			}
			div[sr-r-resume="3557542"] div[sr-r-papersheet-inner] {
				padding-top: 15mm;
				width: 86%;
			}
			div[sr-r-resume="3557542"] div[sr-r-block="person"],
			div[sr-r-resume="3557542"] p[sr-r-fld="title"] {
				font-family: Roboto Condensed;
			}
			div[sr-r-resume="3557542"] div[sr-r-block],
			div[sr-r-resume="3557542"] div[sr-r-child]:not(:last-child) {
				margin-bottom: 1em;
			}
			div[sr-r-resume="3557542"] td[sr-r-tbl-top]:first-child {
				padding-left: 7%;
				padding-top: 15mm;
			}
			div[sr-r-resume="3557542"] td[sr-r-tbl-top]:last-child {
				padding-top: 15mm;
			}
			div[sr-r-resume="3557542"] div[sr-r-papersheet-inner] {
				padding-top: 7.5mm;
      }
      .rows{
   padding:3px;
   margin:5px;
 }
		</style>
	</head>
	<body>
		<div sr-r-resume="3557542" sr-r-template="T2" style='border: 2px solid rgb(79, 157, 213)'>
			<table style='color:white;border-top: 2px solid rgb(79, 157, 213)'>
				<tr >
					<td sr-r-tbl-top style='background: rgb(79, 157, 213);color:white;'>
				<div sr-r-block="person">
					<p sr-r-person><span sr-r-fld="firstName">Your</span> <span sr-r-fld="lastName">Name</span></p>
					<p sr-r-fld="jobTitle">Profession</p>
					<p sr-r-fld="location">City, State</p>
				</div>
					</td>
					<td sr-r-tbl-top style='color:black;background:white;border: 1px solid rgb(79, 157, 213)'>
							<div sr-r-block="contact">
								<div sr-r-fld="html">
									<p>your.name@example.com</p><p>111-222-3333</p><p>www.your-website.com</p>
								</div>
							</div>
					</td>
				</tr>
				<tr style='border: 0px solid white;border-top: 1px solid rgb(79, 157, 213)'>
				<td sr-r-tbl-top style='color:black;background:white;border-right:0px;border-left:0px'>
							<div sr-r-block="contact">
								<div sr-r-fld="html">
								<p sr-r-block >date</p><p sr-r-block >company</p>
									<p>your.name@example.com</p><p>111-222-3333</p><p>www.your-website.com</p>
								</div>
							</div>
					</td>
					<td></td>
				</tr>
			</table>
			<div sr-r-papersheet-inner>
				<div sr-r-blocks>
					
					<div sr-r-block="experience" sr-r-id="2">
						<p sr-r-block sr-r-fld="title">Dear</p>
						<div sr-r-children>
							<div sr-r-child sr-r-id="2c1">
								<!-- <p sr-r-child sr-r-fld="title">Dear</p> -->
								<p sr-r-where><span sr-r-fld="where">Company Name</span>, <span sr-r-fld="location">Location</span></p>
								<p sr-r-dates><span sr-r-fld="fromMonth">Jan</span> <span sr-r-fld="fromYear">2013</span> &ndash; <span sr-r-fld="toMonth">Dec</span> <span sr-r-fld="toYear">2013</span></p>
								<div sr-r-fld="html">
									<p>Describe your job responsibilities, accomplishments and technologies you have used. It is highly recommended that you use bullet points to describe your experience.</p>
								</div>
							</div>
						</div>
					</div>

					<div sr-r-block="experience" sr-r-id="2">
						<div sr-r-children>
							<div sr-r-child sr-r-id="2c1">
								<p sr-r-block sr-r-fld="title">Sincerely</p>
								<p sr-r-block sr-r-fld="title">Your Name</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</body>
</html>
