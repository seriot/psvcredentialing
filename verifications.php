<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>PSV Credentialing</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<link rel="Shortcut Icon" type="image/ico" href="images/PSV_icon.png">
	<script src="http://www.psvcredentialing.com/Javascripts/jquery.js"></script>
	<script src="http://www.psvcredentialing.com/Javascripts/jquery.validate.js"></script>
    <style type="text/css">
	input#physicians_f {
   	 border-radius:5px;
   	 width: 300px;
	height: 25px;
	}
	input#physicians {
   	 border-radius:5px;
   	 width: 300px;
	height: 25px;
	}
	input#dob {
   	 border-radius:5px;
   	 width: 150px;
	height: 25px;
	}
	input#city {
   	 border-radius:5px;
   	 width: 300px;
	height: 25px;
	}
	input#zip {
   	 border-radius:5px;
   	 width: 130px;
	height: 25px;
	}
	input#license {
   	 border-radius:5px;
   	 width: 300px;
	height: 25px;
	}
	input#dea {
   	 border-radius:5px;
   	 width: 300px;
	height: 25px;
	}
	input#ss {
   	 border-radius:5px;
   	 width: 300px;
	height: 25px;
	}
	select {
	height: 25px;
	font-size:14px;
	}
	input#board {
   	 border-radius:5px;
   	 width: 300px;
	height: 25px;
	}
	input#submit {
   	 border-radius:5px;
   	 width: 100px;
	height: 40px;
	}
	input#reset {
   	 border-radius:5px;
   	 width: 100px;
	height: 40px;
	}
	#col {
	vertical-align:top;
	}
</style>
</head>
<body>
	<div id="container">
		    <div id="header">
				<a href="index.php"><img src="images/PSV_Logo.png" border="0"></a> 
				<div id="account">
					<div id="login">
						<?php include('login.php'); ?>
					</div>
					<div id="user">
						<?php include('account.php'); ?>
					</div>
				</div>
			</div>
			<ul id="menu-bar">
				<li><a href="index.php">Home</a></li> 
				<li><a href="about.php">About</a></li>
				<li><a href="resources.php">Resources</a></li>				
                            <li class="active"><a href="verifications.php">Verifications</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			</div>
			<div id="content-v">
				<?php if (isset($errors)) { echo resultBlock($errors,$successes); } ?>
			<div id="block3">
				<form id="f1" name="f1" action="" method="get" target="_blank">
					<div id="col">
						Provider's information</p> 
						First Name:<br>
						<input name="fname" size="30" id="physicians_f" required /><p>
						Last Name:<br>
						<input name="lname" size="30" id="physicians" required /><p>
						<div id="col">
						DOB (mm/dd/yy):<br>
						<input type="text" name="dob" size="10" id="dob"/>
						</div>
						<div id="col">
						Zip:<br>
						<input type="text" name="zip" size="10" id="zip"/>
						</div><p>
						City:<br>
						<input type="text" name="city" id="city"/><p>
						<div id="col">
						Degree<br>
						<select name = "Degree" id="Degree">
							<option value="MD" >MD</option>
							<option value="DO" >DO</option>
							<option value="NP" >NP</option>
						</select>
						</div>
						<div id="col">
						State<br>
						<select name = "st" id="st">
							<option value="NY" >NY</option>
							<option value="NJ" >NJ</option>
							<option value="PA" >PA</option>
						</select>
						</div>
						<div id="col">
		        			License Type<br>
						<select name = "profcd">
							<option value="60" >MD/DO</option>
							<option value="61" >MD/DO 3 yr Limited</option>
							<option value="3" >MD/DO Permit</option>
							<option value="29">NP All Specialties</option>
							<option value="22">RN</option>
						</select>
						</div>
						<p>
						License #:<br>
						<input type="text" name="license" size="30" value="" id="license"><p>
						Social Security #:<br>
						<input type="text" name="ss" size="30" id="ss"/><p>
						DEA Certificate #:<br>
						<input type="text" name="dea" size="30" value="" id="dea"><p>
						Board Certificate #:<br>
						<input type="text" name="board" value="" id="board"><p>
					</div>
					<div id="col">
<script>
$(document).ready(function() {
    $('#all').click(function(event) {  //on click
        if(this.checked) { // check select status
            $('.checkbox').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"              
            });
        }else{
            $('.checkbox').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
            });        
        }
    });
   
});
</script>
					Check the database(s) you wish to query.<br><p>
						<input id="all" type="checkbox" name="all" value="all"> Check all<p><br>
						<input class="checkbox" type="checkbox" name="abpn" value="APBN" id="abpn"> American Board of Psychiatry & Neurology<p>
						<input class="checkbox" type="checkbox" name="abpo" value="ABPO" id="abpo"> American Board of Ophthalmology<p>
						<input class="checkbox" type="checkbox" name="abo" value="ABO"> American Board of Otolaryngology<p>
						<input class="checkbox" type="checkbox" name="abim" value="ABIM" id="abim"> American Board of Internal Medicine<p>
						<input class="checkbox" type="checkbox" name="abr" value="APBR" id="abr"> American Board of Radiology<p>
						<input class="checkbox" type="checkbox" name="abam" value="ABAM" id="ABAM"> American Board of Addiction Medicine<p>
						<input class="checkbox" type="checkbox" name="aba" value="ABA" id="ABA"> American Board of Anesthesiology<p>
						<input class="checkbox" type="checkbox" name="oig" value="OIG" id="oig"> Office of Inspector General<p>
						<input class="checkbox" type="checkbox" name="omig" value="OMIG" id="omig"> Office of the Medicaid Inspector General<p>
						<input class="checkbox" type="checkbox" name="opmc" value="OPMC" id="opmc"> Office of Professional Medical Conduct<p>
						<input class="checkbox" type="checkbox" name="NJDebarkment" value="NJDebarkment"> NJ Debarment<p>
						<input class="checkbox" type="checkbox" name="NYDebarkment" value="NYDebarkment"> NY Debarment<p>
						<input class="checkbox" type="checkbox" name="nysed" value="NYSED" id="nysed"> NYSED License<p>
						<input class="checkbox" type="checkbox" disabled name="dea1" value="dea" id="dea1"> DEA Certificate<p>
						<input class="checkbox" type="checkbox" disabled name="sam" value="sam" id="sam"> System for Award Management<p>
					</div>
			<div id="block3">
				<input type="submit" name="submit" id="submit" value="Submit"/>
				<input type="reset" name="reset" id="reset" value="Reset"/> 
			</div>
				<script>
				(function ($) {
				$(document).ready(function() {
				$( "#f1" ).validate({
					rules: {
					dob: {
						required: {
						depends: function(element) {
						if ($('#abim').is(':checked')){
							return true;
						}
						else{
							return false;
						}
						}
						}
					},
					license: {
						required: {
						depends: function(element) {
						if ($('#nysed').is(':checked') || ($('#opmc').is(':checked'))){
							return true;
						}
						else{
							return false;
						}
						}
						}
					},
					Degree: {
						required: {
						depends: function(element) {
						if ($('#opmc').is(':checked')){
							return true;
						}
						else{
							return false;
						}
						}
						}
					}
					}
				})
				})		
				})(jQuery);
				</script>
				</form>

				<?php
					require_once('WkHtmlToPdf.php');
					require_once("models/config.php");
					if(isset($_GET['submit'])){
						$uid = uniqid();
						error_reporting(E_ALL);
						ini_set('display_errors', '1');
						//set variables
						$fnam = $_GET["fname"];
						$lnam = $_GET["lname"];
						$license = $_GET["license"];
						$type = $_GET["profcd"];
						$degree = $_GET["Degree"];
						$zip = $_GET["zip"];
						$dob = $_GET["dob"];
						$city = $_GET["city"];
						$ss = $_GET["ss"];
						$dea = $_GET["dea"];
						date_default_timezone_set('UTC');
						$date =  date("m/d/y - h:m a");				
						if (isset($_GET['nysed'])) { 
							if ($type == "3") {
								$pdf = new WkHtmlToPdf;
								$pdf->addPage("\"http://www.nysed.gov/coms/el001/elscr2?profcd=60&permit=$license&pname=$lnam%20$fnam\"");
								$pdf->saveAs("$uid-nys.pdf");
								$file = "$uid-nys.pdf";
								echo "<div id='pdf'>NYSED"."<br><a href=\"".$uid."-nys.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							}
							elseif ($type == "22") {
								$pdf = new WkHtmlToPdf;
								$pdf->addPage("http://www.nysed.gov/coms/el001/elscr2?profcd\=22\&plicno\=$license\&pname\=$lnam\%20$fnam");
								$pdf->saveAs("$uid-nys.pdf");
								$file = "$uid-nys.pdf";
								echo "<div id='pdf'>NYSED"."<br><a href=\"".$uid."-nys.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";

							}
							elseif ($type == "29") {
								$pdf = new WkHtmlToPdf;
								$pdf->addPage("http://www.nysed.gov/coms/el001/elscr2?profcd\=29\&plicno\=$license\&pname\=$lnam\%20$fnam");
								$pdf->saveAs("$uid-nys.pdf");
								$file = "$uid-nys.pdf";	
								echo "<div id='pdf'>NYSED"."<br><a href=\"".$uid."-nys.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							}
							else {
								$pdf = new WkHtmlToPdf;
								$pdf->addPage("http://www.nysed.gov/coms/op001/opsc2a\?profcd\=60\&plicno\=$license");
								$pdf->saveAs("$uid-nys.pdf");
								$file = "$uid-nys.pdf";
								echo "<div id='pdf'>NYSED"."<br><a href=\"".$uid."-nys.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							}
						}
						if (isset($_GET['abam'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://www.abam.net/find-a-doctor?page_id=321&first_name=$fnam&last_name=$lnam&city=$city&state=NY&zip=$zip&min=1&start_link=1&min_link_name=1&certificate_number=Certification+%23\"");
							$pdf->saveAs("$uid-abam.pdf");
							$file = "$uid-abam.pdf";
							echo "<div id='pdf'>ABAM"."<br><a href=\"".$uid."-abam.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
						}
						if (isset($_GET['aba'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://directory.theaba.org/SearchResults.aspx?AdvancedSearch=&LastName=$lnam&FirstName=$fnam&Search=Search&City=&StateAbbreviation=&ABAID=&CertType=0\"");
							$pdf->saveAs("$uid-aba.pdf");
							$file = "$uid-aba.pdf";
							echo "<div id='pdf'>ABA"."<br><a href=\"".$uid."-aba.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
						}
						if (isset($_GET['NJDebarkment'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://www.state.nj.us/cgi-bin/treasury/debar/debarsearch.pl?srchname=$lnam,%20$fnam&srchcategory=MEDICAL&srchreason=&Start+Search=Start+Search\"");
							$pdf->saveAs("$uid-njd.pdf");
							$file = "$uid-njd.pdf";
							echo "<div id='pdf'>NJDebarkment"."<br><a href=\"".$uid."-njd.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
						}
						if (isset($_GET['dea1'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"https://www.deadiversion.usdoj.gov/webforms/validateLogin.do?deaNum=$dea&lname=$lnam&ssn=$ss&taxid=&buttons.next.x=73&buttons.next.y=14\"");
							$pdf->saveAs("$uid-dea.pdf");
							$file = "$uid-dea.pdf";
							echo "<div id='pdf'>DEA"."<br><a href=\"".$uid."-dea.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
						}
						if (isset($_GET['NYDebarkment'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"https://dbr.labor.state.ny.us/EDList/searchResults.do?dolDisplay=none&wcbDisplay=none&dolSearchChkBox=dolSearch&wcbSearchChkBox=wcbSearch&tin=&employerName=$fnam%20$lnam&employerDBAName=&city=&state=&article=both&agencyKey=\"");
							$pdf->saveAs("$uid-nyd.pdf");
							$file = "$uid-nyd.pdf";
							echo "<div id='pdf'>NYDebarkment"."<br><a href=\"".$uid."-nyd.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
						}
						if (isset($_GET['omig'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://www.omig.ny.gov/search-exclusions-results?specarea=Select+All&phone1=Select+All&state1=Select+All&category=Select+All&fname=$fnam+$lnam&fname2=&fname3=&fname4=&fname5=&Search=Search\"");
							$pdf->saveAs("$uid-omig.pdf");
							$file = "$uid-omig.pdf";
							echo "<div id='pdf'>NYSOMIG"."<br><a href=\"".$uid."-omig.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
						}
						if (isset($_GET['abpo'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://abop.org/verify-a-physician/?fv=NameLocation&fn=$fnam&ln=$lnam&zip=$zip&st=NY#physician-list-search-results\"");
							$pdf->saveAs("$uid-abpo.pdf");
							$file = "$uid-abpo.pdf";
							echo "<div id='pdf'>ABPO"."<br><a href=\"".$uid."-abpo.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
						}
						if (isset($_GET['abo'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://www.aboto.org/ABOInternet/VerifyPhysicianCertification?_EVT_NAME=ONVERIFY&_LIST_INDEX=-1&FIRST_NAME=$fnam&LAST_NAME=$lnam&CITY=&COUNTRY=1&STATE=&POSTAL_CODE=#\"");
							$pdf->saveAs("$uid-abo.pdf");
							$file = "$uid-abo.pdf";
							echo "<div id='pdf'>ABO"."<br><a href=\"".$uid."-abo.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
						}
						if (isset($_GET['abr'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://www.theabr.org/find-a-radiologist?name=$fnam%20$lnam&location=$zip\"");
							echo ("\"http://www.theabr.org/find-a-radiologist?name=$fnam%20$lnam&location=$zip\"");
							$pdf->saveAs("$uid-abr.pdf");
							$file = "$uid-abr.pdf";
							echo "<div id='pdf'>ABR"."<br><a href=\"".$uid."-abr.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
						}
						if (isset($_GET['oig'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://exclusions.oig.hhs.gov/Default.aspx?__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE=%2FwEPDwUKLTk1OTc2MjUxNw9kFgJmD2QWAgIDD2QWAgIDD2QWAgIBD2QWCgIDDxYCHgdWaXNpYmxlaGQCBQ8WAh8AaGQCBw8WAh8AaGQCCQ8PZBYEHgtvbm1vdXNlb3ZlcgUsdGhpcy5zcmM9ICdJbWFnZXMvYnRuX2xlaWVzZWFyY2hfaG92ZXIuZ2lmJzseCm9ubW91c2VvdXQFJnRoaXMuc3JjPSAnSW1hZ2VzL2J0bl9sZWllc2VhcmNoLmdpZic7ZAILDw9kFgQfAQUndGhpcy5zcmM9ICdJbWFnZXMvYnRuX2NsZWFyX2hvdmVyLmdpZic7HwIFIXRoaXMuc3JjPSAnSW1hZ2VzL2J0bl9jbGVhci5naWYnO2QYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgUFF2N0bDAwJGNwRXhjbHVzaW9ucyRpYk1QBR9jdGwwMCRjcEV4Y2x1c2lvbnMkSW1hZ2VCdXR0b24xBRhjdGwwMCRjcEV4Y2x1c2lvbnMkaWJNQjIFHWN0bDAwJGNwRXhjbHVzaW9ucyRpYlNlYXJjaFNQBRxjdGwwMCRjcEV4Y2x1c2lvbnMkaWJDbGVhclNQDhTbnnASM55zz4xa8YCjLTzvXFA%3D&__SCROLLPOSITIONX=0&__SCROLLPOSITIONY=0&__EVENTVALIDATION=%2FwEWCwKQkfmhAgKNnO7ECAL4m5nrCAK00LivAQLTmIi%2BAgKH3aeFCgKKnNHpCALAy6b5BQKri7zmBgL4m9XpCwLKz6F6%2Bo6ffEybd6k8eoMafA459jL97c0%3D&ctl00%24cpExclusions%24txtSPLastName=$lnam&ctl00%24cpExclusions%24txtSPFirstName=$fnam&ctl00%24cpExclusions%24ibSearchSP.x=24&ctl00%24cpExclusions%24ibSearchSP.y=5\"");
							$pdf->saveAs("$uid-oig.pdf");
							$file = "$uid-OIG.pdf";
							echo "<div id='pdf'>OIG"."<br><a href=\"".$uid."-oig.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
						}
						if (isset($_GET['sam'])) { 
							$out = array();
							exec("/usr/bin/wkhtmltopdf --encoding application/x-www-form-urlencoded --post pbGfb67166e_2d75d6_2d44cc_2db77f_2d151a6ad4fa34:_viewRoot:dbsightSearchForm pbGfb67166e_2d75d6_2d44cc_2db77f_2d151a6ad4fa34:_viewRoot:dbsightSearchForm --post isDBSight true --post indexName sam-search --post templateName SAMwSuggest --post searchingStage SearchResults --post q kevin https://www.sam.gov/portal/public/SAM/?portal:componentId=fb67166e-75d6-44cc-b77f-151a6ad4fa34&amp;portal:type=action&amp;navigationalstate=JBPNS_rO0ABXdcACJqYXZheC5mYWNlcy5wb3J0bGV0YnJpZGdlLlNUQVRFX0lEAAAAAQApdmlldzo2ZTU1M2ZkYi0wNzhhLTRkNmItYjQ0NC1mMjQ5MDNiZjYwZWMAB19fRU9GX18*&amp;interactionstate=JBPNS_rO0ABXc3ABBfanNmQnJpZGdlVmlld0lkAAAAAQAWL2pzZi9kYnNpZ2h0U2VhcmNoLmpzcAAHX19FT0ZfXw** /var/www/public/psvcredentialing.com/public/$uid-sam.pdf", $out);
							$file = "$uid-sam.pdf";
							echo "<div id='pdf'>SAM"."<br><a href=\"".$uid."-sam.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
						}
						if (isset($_GET['abim'])) { 
							if ($dob == "") {
								$out = array();
								exec("/usr/bin/wkhtmltopdf --post fname $fnam --post lname $lnam --post MATCH EXACT \"http://www.abim.org/services/physver.aspx\" /var/www/public/psvcredentialing.com/public/$uid-abim.pdf", $out);
								$file = "$uid-abim.pdf";
								echo "<div id='pdf'>ABIM"."<br><a href=\"".$uid."-abim.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							 }
							 else {
								$out = array();
								exec("/usr/bin/wkhtmltopdf --post fname $fnam --post lname $lnam --post dob $dob --post MATCH EXACT \"http://www.abim.org/services/physver.aspx\" /var/www/public/psvcredentialing.com/public/$uid-abim.pdf", $out);
								$file = "$uid-abim.pdf";
								echo "<div id='pdf'>ABIM"."<br><a href=\"".$uid."-abim.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";

							}
						}
						if (isset($_GET['abpn'])) { 
							$out = array();
								exec("/usr/bin/wkhtmltopdf --post intMaxRep 20 --post rdoInputType E --post rdolimit Y --post txtFname $fnam --post txtLname $lnam \"https://application.abpn.com/verifycert/verifyCert.asp?a=1&u=1\" /var/www/public/psvcredentialing.com/public/$uid-abpn.pdf", $out);
								$file = "$uid-abpn.pdf";
								echo "<div id='pdf'>ABPN"."<br><a href=\"".$uid."-abpn.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";

						}						
						if (isset($_GET['opmc'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://w3.health.state.ny.us/opmc/factions.nsf/ByPhysician?SearchView&Query=(FIELD+PhysicianName=\"$lnam,+$fnam\"+AND+FIELD+PhysicianName=\"$lnam\"+AND+FIELD+WebLicense=$license+AND+FIELD+LicenseType=$degree)&SearchOrder=1&SearchMax=0&SearchWV=TRUE&SearchThesaurus=FALSE\"");
							$pdf->saveAs("$uid-opmc.pdf");
							$file = "$uid-opmc.pdf";
							echo "<div id='pdf'>OPMC"."<br><a href=\"".$uid."-opmc.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";

						}
					}
				?>
			</div>
			</div>
		    <div id="footer">
				<div style="display: inline-block;">Copyright © 2013 PSV Credentialing LLC. All rights reserved.</div>
				<div style="padding: 0 20px; display: inline-block;"><a href="tos.php">Terms of Service</a> | <a href="privacy.php">Privacy</a></div>
			</div>		
	</div>
</body>
</html>
