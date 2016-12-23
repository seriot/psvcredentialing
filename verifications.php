<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>PSV Credentialing</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<link rel="Shortcut Icon" type="image/ico" href="images/PSV_icon.png">
	<script src="Javascripts/jquery.js"></script>
	<script src="Javascripts/jquery.validate.js"></script>
	<script src="Javascripts/msg.js"></script>
    <style type="text/css">
	input#physicians_f {
   	 border-radius:5px;
   	 width: 290px;
	height: 25px;
	}
	input#physicians {
   	 border-radius:5px;
   	 width: 290px;
	height: 25px;
	}
	input#dob {
   	 border-radius:5px;
   	 width: 152px;
	height: 25px;
	}
	input#city {
   	 border-radius:5px;
   	 width: 290px;
	height: 25px;
	}
	input#zip {
   	 border-radius:5px;
   	 width: 105px;
	height: 25px;
	}
	input#license {
   	 border-radius:5px;
   	 width: 290px;
	height: 25px;
	}
	input#dea {
   	 border-radius:5px;
   	 width: 290px;
	height: 25px;
	}
	input#ss 
   	 border-radius:5px;
   	 width: 290px;
	height: 25px;
	}
	input#npinum {
   	 border-radius:5px;
   	 width: 290px;
	height: 25px;
	}
	select {
	height: 25px;
	font-size:14px;
	}
	input#board {
   	 border-radius:5px;
   	 width: 290px;
	height: 25px;
	}
	input#submit {
   	 border-radius:5px;
   	 width: 100px;
	height: 40px;
	}
	input#submitcvs {
   	 border-radius:5px;
   	 width: 100px;
	height: 40px;
	}
	input#reset {
   	 border-radius:5px;
   	 width: 100px;
	height: 40px;
	}
	#csv {
   	 border-radius:5px;
   	 width: 200px;
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
                 <option value="OD">OD</option>
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
							<option value="60" >Medical</option>
							<option value="61" >3yr Limited</option>
							<option value="3" >Permit</option>
							<option value="29">NP</option>
							<option value="22">RN</option>
                  <option value="56">OD</option>
						</select>
						</div>
						<p>
						License #:<br>
						<input type="text" name="license" size="30" value="" id="license"><p>
						Board Certificate #:<br>
						<input type="text" name="board" value="" id="board"><p>
						NPI #:<br>
						<input type="text" name="npinum" value="" id="npinum"><p>
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
						<input class="checkbox" type="checkbox" disabled name="abpn" value="APBN" id="abpn"> American Board of Psychiatry & Neurology<p>
						<input class="checkbox" type="checkbox" name="abop" value="ABOP" id="abop"> American Board of Ophthalmology<p>
						<input class="checkbox" type="checkbox" name="abo" value="ABO" id="ABO"> American Board of Otolaryngology<p>
						<input class="checkbox" type="checkbox" name="abai" value="abai" id="abai"> American Board of Allergy and Immunology<p>
						<input class="checkbox" type="checkbox" name="abim" value="ABIM" id="abim"> American Board of Internal Medicine<p>
						<input class="checkbox" type="checkbox" name="abr" value="APBR" id="abr"> American Board of Radiology<p>
						<input class="checkbox" type="checkbox" name="abam" value="ABAM" id="ABAM"> American Board of Addiction Medicine<p>
						<input class="checkbox" type="checkbox" name="aba" value="ABA" id="ABA"> American Board of Anesthesiology<p>
						<input class="checkbox" type="checkbox" name="oig" value="OIG" id="oig"> Office of Inspector General<p>
						<input class="checkbox" type="checkbox" name="omig" value="OMIG" id="omig"> Office of the Medicaid Inspector General<p>
						<input class="checkbox" type="checkbox" name="opmc" value="OPMC" id="opmc"> Office of Professional Medical Conduct<p>
						<input class="checkbox" type="checkbox" name="NJDebarment" value="NJDebarment" id="NJDebarment"> NJ Debarment<p>
						<input class="checkbox" type="checkbox" name="NYDebarment" value="NYDebarment" id="NYDebarment"> NY Debarment<p>
						<input class="checkbox" type="checkbox" name="npi" value="npi" id="npi"> NPPES NPI Registry<p>
						<input class="checkbox" type="checkbox" name="nysed" value="NYSED" id="nysed"> NYSED License<p>
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
					city: {
                				required: {
                    				depends: function () {
                        				return $('#NYDebarment').is(':checked')
                   				}
                				}
            				},
 					npinum: {
                				required: {
                    				depends: function () {
                        				return $('#npi').is(':checked')
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
						$state = $_GET["st"];
						$npi = $_GET["npinum"];
						date_default_timezone_set('UTC');
						$date =  date("m/d/y - h:m a");				
						if (isset($_GET['nysed'])) { 
							if ($type == "3") {
								$pdf = new WkHtmlToPdf;
								$pdf->addPage("\"http://www.nysed.gov/coms/el001/elscr2?profcd=60&permit=$license&pname=$lnam%20$fnam\"");
								$pdf->saveAs("$uid-nys.pdf");
								$file = "$uid-nys.pdf";
								echo "<div id='pdf'>NYSED"."<br><a href=\"".$uid."-nys.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
								if(isUserLoggedIn()) { 
									$con=mysqli_connect('localhost','seriot','loop900','psv');
									// Check connection
									if (mysqli_connect_errno()) {
				  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  					}
									mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'NYSED')");
									mysqli_close($con);
								}
							}
							elseif ($type == "22") {
								$pdf = new WkHtmlToPdf;
								$pdf->addPage("http://www.nysed.gov/coms/el001/elscr2?profcd\=22\&plicno\=$license\&pname\=$lnam\%20$fnam");
								$pdf->saveAs("$uid-nys.pdf");
								$file = "$uid-nys.pdf";
								echo "<div id='pdf'>NYSED"."<br><a href=\"".$uid."-nys.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
								if(isUserLoggedIn()) { 
									$con=mysqli_connect('localhost','seriot','loop900','psv');
									// Check connection
									if (mysqli_connect_errno()) {
				  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  					}
									mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'NYSED')");
									mysqli_close($con);
								}
							}
							elseif ($type == "29") {
								$pdf = new WkHtmlToPdf;
								$pdf->addPage("http://www.nysed.gov/coms/el001/elscr2?profcd\=29\&plicno\=$license\&pname\=$lnam\%20$fnam");
								$pdf->saveAs("$uid-nys.pdf");
								$file = "$uid-nys.pdf";	
								echo "<div id='pdf'>NYSED"."<br><a href=\"".$uid."-nys.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
								if(isUserLoggedIn()) { 
									$con=mysqli_connect('localhost','seriot','loop900','psv');
									// Check connection
									if (mysqli_connect_errno()) {
				  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  					}
									mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'NYSED')");
									mysqli_close($con);
								}
							}
							elseif ($type == "56") {
								$pdf = new WkHtmlToPdf;
								$pdf->addPage("http://www.nysed.gov/coms/op001/opsc2a\?profcd\=56\&plicno\=$license");
								$pdf->saveAs("$uid-nys.pdf");
								$file = "$uid-nys.pdf";
								echo "<div id='pdf'>NYSED"."<br><a href=\"".$uid."-nys.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
								if(isUserLoggedIn()) { 
									$con=mysqli_connect('localhost','seriot','loop900','psv');
									// Check connection
									if (mysqli_connect_errno()) {
				  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  					}
									mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'NYSED')");
									mysqli_close($con);
								}
							}
							else {
								$pdf = new WkHtmlToPdf;
								$pdf->addPage("http://www.nysed.gov/coms/op001/opsc2a\?profcd\=60\&plicno\=$license");
								$pdf->saveAs("$uid-nys.pdf");
								$file = "$uid-nys.pdf";
								echo "<div id='pdf'>NYSED"."<br><a href=\"".$uid."-nys.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
								if(isUserLoggedIn()) { 
									$con=mysqli_connect('localhost','seriot','loop900','psv');
									// Check connection
									if (mysqli_connect_errno()) {
				  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  					}
									mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'NYSED')");
									mysqli_close($con);
								}
							}
						}
						if (isset($_GET['abam'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://www.abam.net/find-a-doctor?page_id=321&first_name=$fnam&last_name=$lnam&city=$city&state=NY&zip=$zip&min=1&start_link=1&min_link_name=1&certificate_number=Certification+%23\"");
							$pdf->saveAs("$uid-abam.pdf");
							$file = "$uid-abam.pdf";
							echo "<div id='pdf'>ABAM"."<br><a href=\"".$uid."-abam.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							if(isUserLoggedIn()) { 
								$con=mysqli_connect('localhost','seriot','loop900','psv');
								// Check connection
								if (mysqli_connect_errno()) {
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  				}
								mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'ABAM')");
								mysqli_close($con);
							}						
						}
						if (isset($_GET['NJDebarment'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"https://www.state.nj.us/cgi-bin/treas/revenue/debarsearch.pl?srchname=kevin+johnson&srchcategory=MEDICAL\"");
							$pdf->saveAs("$uid-njd.pdf");									
							echo "<div id='pdf'>NJD"."<br><a href=\"".$uid."-njd.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";								
							if(isUserLoggedIn()) { 
								$con=mysqli_connect('localhost','seriot','loop900','psv');
								// Check connection
								if (mysqli_connect_errno()) {
				  					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  				}
								mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'NJD')");
								mysqli_close($con);
							}						
						}
						if (isset($_GET['aba'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://directory.theaba.org/SearchResults.aspx?AdvancedSearch=&LastName=$lnam&FirstName=$fnam&Search=Search&City=&StateAbbreviation=&ABAID=&CertType=0\"");
							$pdf->saveAs("$uid-aba.pdf");
							$file = "$uid-aba.pdf";
							echo "<div id='pdf'>ABA"."<br><a href=\"".$uid."-aba.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							if(isUserLoggedIn()) { 
								$con=mysqli_connect('localhost','seriot','loop900','psv');
								// Check connection
								if (mysqli_connect_errno()) {
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  				}
								mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'ABA')");
								mysqli_close($con);
							}						
						}
						if (isset($_GET['abai'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"https://www.abai.org/doctors?utf8=%E2%9C%93&search%5Blast_name%5D=$lnam&search%5Bfirst_name%5D=$fnam&button=\"");
							$pdf->saveAs("$uid-abai.pdf");
							$file = "$uid-abai.pdf";
							echo "<div id='pdf'>ABAI"."<br><a href=\"".$uid."-abai.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							if(isUserLoggedIn()) { 
								$con=mysqli_connect('localhost','seriot','loop900','psv');
								// Check connection
								if (mysqli_connect_errno()) {
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  				}
								mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'ABAI')");
								mysqli_close($con);
							}						
						}
						if (isset($_GET['NYDebarment'])) { 
							$out = array();
							shell_exec("xvfb-run /usr/bin/wkhtmltopdf --post dolSearchChkBox dolSearch --post employerDBAName $fnam --post city $city --post article both https://dbr.labor.state.ny.us/EDList/searchResults.do? /var/www/html/psvcredentialing/public/$uid-nyd.pdf");
							$file = "$uid-nyd.pdf";
							echo "<div id='pdf'>NYDebarment"."<br><a href=\"".$uid."-nyd.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							if(isUserLoggedIn()) { 
								$con=mysqli_connect('localhost','seriot','loop900','psv');
								// Check connection
								if (mysqli_connect_errno()) {
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  				}
								mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'NYD')");
								mysqli_close($con);
							}						
						}
						if (isset($_GET['omig'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"https://www.omig.ny.gov/search-exclusions-results?specarea=Select+All&phone1=Select+All&state1=Select+All&category=Select+All&fname=$fnam+$lnam&fname2=&fname3=&fname4=&fname5=&Search=Search\"");
							$pdf->saveAs("$uid-omig.pdf");
							$file = "$uid-omig.pdf";
							echo "<div id='pdf'>NYSOMIG"."<br><a href=\"".$uid."-omig.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							if(isUserLoggedIn()) { 
								$con=mysqli_connect('localhost','seriot','loop900','psv');
								// Check connection
								if (mysqli_connect_errno()) {
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  				}
								mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'OMIG')");
								mysqli_close($con);
							}						
						}
						if (isset($_GET['abop'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"https://abop.org/verify-a-physician/?fn=$fnam&ln=$lnam\#physican-list-search-results\"");
							$pdf->saveAs("$uid-abop.pdf");
							$file = "$uid-abop.pdf";
							echo "<div id='pdf'>ABOP"."<br><a href=\"".$uid."-abop.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							if(isUserLoggedIn()) { 
								$con=mysqli_connect('localhost','seriot','loop900','psv');
								// Check connection
								if (mysqli_connect_errno()) {
			  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  					}
								mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'ABOP')");
								mysqli_close($con);
							}
						}
						if (isset($_GET['abo'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://www.aboto.org/ABOInternet/VerifyPhysicianCertification?_EVT_NAME=ONVERIFY&_LIST_INDEX=-1&FIRST_NAME=$fnam&LAST_NAME=$lnam&CITY=&COUNTRY=1&STATE=&POSTAL_CODE=#\"");
							$pdf->saveAs("$uid-abo.pdf");
							$file = "$uid-abo.pdf";
							echo "<div id='pdf'>ABO"."<br><a href=\"".$uid."-abo.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							if(isUserLoggedIn()) { 
								$con=mysqli_connect('localhost','seriot','loop900','psv');
								// Check connection
								if (mysqli_connect_errno()) {
			  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  					}
								mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'ABO')");
								mysqli_close($con);
							}
						}
						if (isset($_GET['abr'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://www.theabr.org/find-a-radiologist?name=$fnam%20$lnam&location=$zip\"");
							$pdf->saveAs("$uid-abr.pdf");
							$file = "$uid-abr.pdf";
							echo "<div id='pdf'>ABR"."<br><a href=\"".$uid."-abr.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							if(isUserLoggedIn()) { 
								$con=mysqli_connect('localhost','seriot','loop900','psv');
								// Check connection
								if (mysqli_connect_errno()) {
			  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  					}
								mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'ABR')");
								mysqli_close($con);
							}
						}
						if (isset($_GET['oig'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://exclusions.oig.hhs.gov/Default.aspx?__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE=%2FwEPDwUKLTk1OTc2MjUxNw9kFgJmD2QWAgIDD2QWAgIDD2QWAgIBD2QWCgIDDxYCHgdWaXNpYmxlaGQCBQ8WAh8AaGQCBw8WAh8AaGQCCQ8PZBYEHgtvbm1vdXNlb3ZlcgUsdGhpcy5zcmM9ICdJbWFnZXMvYnRuX2xlaWVzZWFyY2hfaG92ZXIuZ2lmJzseCm9ubW91c2VvdXQFJnRoaXMuc3JjPSAnSW1hZ2VzL2J0bl9sZWllc2VhcmNoLmdpZic7ZAILDw9kFgQfAQUndGhpcy5zcmM9ICdJbWFnZXMvYnRuX2NsZWFyX2hvdmVyLmdpZic7HwIFIXRoaXMuc3JjPSAnSW1hZ2VzL2J0bl9jbGVhci5naWYnO2QYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgUFF2N0bDAwJGNwRXhjbHVzaW9ucyRpYk1QBR9jdGwwMCRjcEV4Y2x1c2lvbnMkSW1hZ2VCdXR0b24xBRhjdGwwMCRjcEV4Y2x1c2lvbnMkaWJNQjIFHWN0bDAwJGNwRXhjbHVzaW9ucyRpYlNlYXJjaFNQBRxjdGwwMCRjcEV4Y2x1c2lvbnMkaWJDbGVhclNQDhTbnnASM55zz4xa8YCjLTzvXFA%3D&__SCROLLPOSITIONX=0&__SCROLLPOSITIONY=0&__EVENTVALIDATION=%2FwEWCwKQkfmhAgKNnO7ECAL4m5nrCAK00LivAQLTmIi%2BAgKH3aeFCgKKnNHpCALAy6b5BQKri7zmBgL4m9XpCwLKz6F6%2Bo6ffEybd6k8eoMafA459jL97c0%3D&ctl00%24cpExclusions%24txtSPLastName=$lnam&ctl00%24cpExclusions%24txtSPFirstName=$fnam&ctl00%24cpExclusions%24ibSearchSP.x=24&ctl00%24cpExclusions%24ibSearchSP.y=5\"");
							$pdf->saveAs("$uid-oig.pdf");
							$file = "$uid-OIG.pdf";
							echo "<div id='pdf'>OIG"."<br><a href=\"".$uid."-oig.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							if(isUserLoggedIn()) { 
								$con=mysqli_connect('localhost','seriot','loop900','psv');
								// Check connection
								if (mysqli_connect_errno()) {
			  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  					}
								mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'OIG')");
								mysqli_close($con);
							}							
						}
						if (isset($_GET['npi'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"https://npiregistry.cms.hhs.gov/registry/search-results-table?city=$city&first_name=$fnam&last_name=$lnam&number=$npi\"");
							$pdf->saveAs("$uid-npi.pdf");
							$file = "$uid-npi.pdf";
							echo "<div id='pdf'>NPI"."<br><a href=\"".$uid."-npi.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							if(isUserLoggedIn()) { 
								$con=mysqli_connect('localhost','seriot','loop900','psv');
								// Check connection
								if (mysqli_connect_errno()) {
				  					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  				}
								mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'NPI')");
								mysqli_close($con);
							}
						}
						if (isset($_GET['abim'])) { 
							if ($dob == "") {
								$out = array();
								exec("/usr/bin/wkhtmltopdf/bin/wkhtmltopdf --post fname $fnam --post lname $lnam --post MATCH EXACT \"http://www.abim.org/services/physver.aspx\" /var/www/html/psvcredentialing.com/public/$uid-abim.pdf", $out);
								$file = "$uid-abim.pdf";
								echo "<div id='pdf'>ABIM"."<br><a href=\"".$uid."-abim.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
								if(isUserLoggedIn()) { 
									$con=mysqli_connect('localhost','seriot','loop900','psv');
									// Check connection
									if (mysqli_connect_errno()) {
				  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  					}
									mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'ABIM')");
									mysqli_close($con);
								}
							 }
							 else {
								$out = array();
								exec("/usr/bin/wkhtmltopdf/bin/wkhtmltopdf --post fname $fnam --post lname $lnam --post dob $dob --post MATCH EXACT \"http://www.abim.org/services/physver.aspx\" /var/www/html/psvcredentialing.com/public/$uid-abim.pdf", $out);
								$file = "$uid-abim.pdf";
								echo "<div id='pdf'>ABIM"."<br><a href=\"".$uid."-abim.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
								if(isUserLoggedIn()) { 
									$con=mysqli_connect('localhost','seriot','loop900','psv');
									// Check connection
									if (mysqli_connect_errno()) {
				  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  					}
									mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'ABIM')");
									mysqli_close($con);
								}
							}
						}
						if (isset($_GET['abpn'])) { 
							$out = array();
								shell_exec("xvfb-run /usr/bin/wkhtmltopdf --post intMaxRep 20 --post rdoInputType E --post rdolimit Y --post txtFname $fnam --post txtLname $lnam \"https://application.abpn.com/verifycert/verifyCert.asp?a=1&u=1\" /var/www/html/psvcredentialing/public/$uid-abpn.pdf", $out);
								$file = "$uid-abpn.pdf";
								echo "<div id='pdf'>ABPN"."<br><a href=\"".$uid."-abpn.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
								if(isUserLoggedIn()) { 
									$con=mysqli_connect('localhost','seriot','loop900','psv');
									// Check connection
									if (mysqli_connect_errno()) {
				  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  					}
									mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'ABIM')");
									mysqli_close($con);
								}
						}						
						if (isset($_GET['opmc'])) { 
							$pdf = new WkHtmlToPdf;
							$pdf->addPage("\"http://w3.health.state.ny.us/opmc/factions.nsf/ByPhysician?SearchView&Query=%28FIELD%2BPhysicianName=%22$lnam%2C%2B$fnam%22%2BAND%2BFIELD%2BPhysicianName=%22$lnam%22%2BAND%2BFIELD%2BWebLicense=$license%2BAND%2BFIELD+LicenseType=$degree%29&SearchOrder=1&SearchMax=0&SearchWV=TRUE&SearchThesaurus=FALSE\"");
							$pdf->saveAs("$uid-opmc.pdf");
							$file = "$uid-opmc.pdf";
							echo "<div id='pdf'>OPMC"."<br><a href=\"".$uid."-opmc.pdf\" target=\"_blank\"><img src=\"images/pdf.png\"></a></div>";
							if(isUserLoggedIn()) { 
								$con=mysqli_connect('localhost','seriot','loop900','psv');
								// Check connection
								if (mysqli_connect_errno()) {
				  					echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}
								mysqli_query($con,"INSERT INTO verifications (firstname, lastname, user, filepath, date, type) VALUES ('$fnam', '$lnam', '$loggedInUser->displayname', '$file', '$date', 'OPMC')");
								mysqli_close($con);
							}
						}
					}
				?>
			</div>
			</div>
		    <div id="footer">
				<div style="display: inline-block;">Copyright &#xA9; 2017 PSV Credentialing LLC. All rights reserved.</div>
				<div style="padding: 0 20px; display: inline-block;"><a href="tos.php">Terms of Service</a> | <a href="privacy.php">Privacy</a></div>
			</div>		
	</div>
</body>
</html>
