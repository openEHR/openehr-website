<?php
header('Content-type: text/html; charset=utf-8');
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Management Board';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<h2 id="cochairs">Co-chairs</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/ian_mcnicoll.php');?>
				<p>Elected Feb 2015 as Membership representative.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/tomaz_gornik.php');?>
				<p>Elected Feb 2015 as Industry Partner representative.</p>
			
			<h2 id="members">Members</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/bjorn_naess.php');?>
				<p>Elected Jul 2018 as Industry Partner representative.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/xudong_lu.php');?>
				<p>Elected Jul 2018 as Membership representative.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/silje_ljosland_bakke.php');?>
				<p>Co-opted Aug 2016.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/thomas_beale.php');?>
				<p>Co-opted Mar 2015.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/sam_heard.php');?>
				<p>Board of Governors representative since Mar 2015.</p>

			<h2 id="previous_members">Past Members</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/rong_chen.php');?>
				<p>Industry Partner representative Feb 2015 - Jul 2018.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/koray_atalag.php');?>
				<p>Membership representative Feb 2015 - Jul 2018.</p>

			<h2 id="contact">Contact</h2>
			<p><a href="mailto:mgtboard@openehr.org">Contact Management Board</a></p>			

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
