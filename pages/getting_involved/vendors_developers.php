﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Vendors / Developers';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>openEHR provides many advantages for health information system and application vendors. Because it is a standardised computing platform it enables many vendors to avoid re-inventing their own back-end for EHR, demographics, data integration and so on, and instead use one of the high-quality implementations becoming available. All of the API and service specifications are already or will soon be publicly available.</p>
			<p>A prime source of efficiency when using the openEHR platform is the ability to use archetypes agreed formally elsewhere, ensuring genuine semantic interoperability of health records. This might be considered a form of cooperative clinical configuration. While such configuration is a source of income to vendors in the current environment, it is a waste for the health system as a whole and a source of many of the integration problems we are currently experiencing.</p>
			<a href="/files/getting_involved/vendors_developers.png"><img src="/files/getting_involved/vendors_developers.png" alt="openEHR Ecosystem - Vendors / Developers" title="openEHR Ecosystem - Vendors / Developers" class = "imgMiddle width50"/></a>
			
			
			<h2>What can openEHR do for you</h2>
			
			<h3>Application Vendors</h3>
			<p>Vendors of applications such as clinical systems for general practice, hospital departments, decision support and many others can use the openEHR platform for all clinical and potentially demographic information, rather than having to provide their own implementation. The application interacts with the openEHR platform via the virtual EHR (vEHR) API, Archetype Query Language (AQL) and XML, regardless of which implementation is used. Larger implementations support secure high-performance, high-volume EHR repositories.</p>
			<p>openEHR Templates can be effectively used to build data capture, viewing and querying forms for an application. The forms can be generated from openEHR Templates using a template-building tool, in e.g. Xform, .Net or other formats. This ensures that the semantics of archetypes ar preserved through the application stack.</p>
			
			<h3>Integration Vendors</h3>
			<p>Integrating with other data sources is facilitated by the use of openEHR Templates, which can be used to drive an integration engine that converts all manner of source data and documents into openEHR form, where it is archetype-conformant and can treated as part of a patient-centric record. All audit trailing and feeder system meta-data (e.g. identifiers) is captured in openEHR structures, ensuring that links to source data are preserved.</p>
			<p>Data from sources that are federated in this way can then be output in a number of formats, including openEHR, CEN EN13606, HL7 CDA rel2, PDF, and various XML and HTML.</p>
			
			<h3>Hospital Information System Vendors</h3>
			<p>Using an implementation of the openEHR platform as the back-end of a large system provides many advantages. Rather than having to constantly maintain a proprietary database structure, using the openEHR back-end will make the system applications much easier to manage and evolve. Integration with other systems is likely to be easier via the standard formats supported by the platform, including CEN EN13606, HL7 CDA, HL7v2.x and others.</p>
			
			
			<h2>How To Get Involved?</h2>
			<h3>How Can I start Writing Code?</h3>
			<p>It depends on what you want to do, there are various places to start working. If you want to work on a <strong>platform implementation</strong>, i.e. EHR or other back-end component:</p>
				<ul>
					<li>You could work on one of the <strong>open source</strong> implementations. See <a href="/downloads/ehrcomponents">here</a> for the websites and contacts.</li>
					<li>You may be able to work with an existing <strong>commercial vendor</strong>. See <a href="/industry_partners">here</a> for a list of vendors - they are usually hiring.</li>
					<li>There may be a <strong>project</strong> in your region or city that uses any of the above implementations that you could get involved with. See <a href="/who_is_using_openehr/healthcare_providers_and_authorities">here</a> for current projects.</li>
				</ul>
			<p>If you are interested in working on <strong>tools</strong>here are some possibilities:</p>
				<ul>
					<li>The open source <strong>Archie</strong> modelling platform based on BMM, ADL2, AOM2 <a href="https://github.com/openEHR/archie">Github project</a>.</li>
				</ul>
			<p>If you are interested in working on <strong>Clinical Decision Support</strong>there are some specific projects happening:</p>
				<ul>
					<li>Cambio has a programme called <strong>cds-apps</strong> for building CDS applications and actual guidelines for use in their CDS platform, based on the <a href="/releases/CDS/latest/docs/GDL/GDL.html">openEHR GDL specification</a>.</li>
				</ul>

			<h3>How Can We Join openEHR?</h3>
			<p>You can become openEHR Partner through the Organisational membership as Industry Partner, or members of your team can become part of openEHR as the Individual members. Find out more about <a href="/about/membership#industrypartner">membership</a>.</p>
			
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
