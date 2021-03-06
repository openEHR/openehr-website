﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'EHR System Components';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
	
		
			<h1><?php echo "$PageName";?></h1>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Project</th>
				<th>Description</th>
				<th>Technology</th>
				<th>Access</th>
				<th>License</th>
				<th>Support</th>
			</tr>	

			<tr>
				<th style="text-align:center" colspan="6">REST API platform</th>
			</tr>

			<tr>
				<td><a href="https://www.ehrscape.com/documentation.html"><img src="/files/who_is_using_openehr/ehrscape_logo.png" alt="EhrScape logo" title="EhrScape logo"></a><br>
					<strong>EhrScape</strong>
				</td>
				<td>openEHR health data platform from <a href="http://www.openehr.org/industry_partners/marand">Marand</a>, providing a service framework that allows you to build innovative health apps in a web friendly environment. <a href="https://www.ehrscape.com/documentation.html">(more)</a>.</td>
				<td> Java</td>
				<td><a href="https://www.ehrscape.com/" target="_blank">EhrScape.com</a></td>
				<td></td>
				<td><a href="https://www.ehrscape.com/contact.html">Support</a></td>
			</tr>

			<tr>
				<td><a href="https://developers.medrecord.io/"><img src="/files/who_is_using_openehr/medrecord_logo.png" alt="MEDrecord logo" title="MEDrecord logo"></a><br>
					<strong>MEDrecord</strong>
				</td>
				<td>openEHR health API platform from <a href="http://www.openehr.org/industry_partners/medrecord">MEDrecord</a>, providing a service framework that allows you to build innovative health apps in a web friendly environment. <a href="https://developers.medrecord.io">(more)</a>.</td>
				<td> Java</td>
				<td><a href="https://developers.medrecord.io/" target="_blank">MEDrecord.io</a></td>
				<td></td>
				<td><a href="https://medrecord.io/contact/">Support</a></td>
			</tr>

			<tr>
				<th style="text-align:center" colspan="6">EHR back-end persistence and services</th>
			</tr>

			<tr>
				<td><a href="http://docs.ethercis.org/"><img src="/files/who_is_using_openehr/ethercis_logo.png" alt="EtherCIS logo" title="EtherCIS logo"></a><br>
					<strong>EtherCIS</strong><br/><a href="https://github.com/ethercis/ethercis#ethercis">Project page</a>
				</td>
				<td>EtherCIS (Ethereal Clinical Information System) is an Open Source platform compatible with the openEHR standard. It is designed to allow simple interactions with clients using RESTful API and persist clinical data in a separate DB engine. <a href="http://docs.ethercis.org/">(more)</a>.</td>
				<td> Java, Postgres</td>
				<td>VM image on request</a></td>
				<td>Apache 2.0</td>
				<td><a href="https://app.assembla.com/spaces/ethercis-support/support/tickets">Support</a></td>
			</tr>

			<tr>
				<td><a href="https://github.com/ppazos/cabolabs-ehrserver#cabolabs-ehrserver"><img src="/files/who_is_using_openehr/ehrserver_logo.png" alt="EHRServer logo" title="EHRServer logo"></a><br>
					<strong>EHRServer</strong><br/><a href="https://github.com/ppazos/cabolabs-ehrserver#cabolabs-ehrserver">Project page</a>
				</td>
				<td><p>EHRServer is an open source, service‐oriented, openEHR clinical data repository. It provides a secure REST API to store and query clinical data in many ways, supporting standard formats like JSON and XML, that are easy to integrate with any front‐end application. Data queries can be created via the Administrative User Interface, with the powerful and easy to use EHRServer Query Builder. EHRServer complies with the openEHR specifications , leveraging the openEHR Information Model and the Dual Modeling methodology, using standard Archetypes and Templates.</p>
					<table class="TableInvisible">
					<tbody>
						<tr>
							<td valign="top">
								<p>Sample EMRs</p>
									<ul>
										<li><a href="https://github.com/ppazos/EHRCommitter">EHRCommitter</a></li>
										<li><a href="https://github.com/ppazos/cabolabs-emrapp">cabolabs-emrapp</a></li>
									</ul>
							</td>
							<td valign="top">
								<p>OPT Toolkit</p>
									<ul>
										<li><a href="https://github.com/ppazos/openEHR-OPT">openEHR-OPT</a></li>
									</ul>
							</td>
							<td valign="top">
								<p>EHRServer clients</p>
									<ul>
										<li><a href="https://github.com/ppazos/EHRClientPHP">EHRClientPHP</a></li>
										<li><a href="https://github.com/ppazos/cabolabs-ehrserver-js">cabolabs-ehrserver-js</a></li>
										<li><a href="https://github.com/ppazos/cabolabs-ehrserver-groovy">cabolabs-ehrserver-groovy</a></li>
									</ul>
							</td>
						</tr>
					</tbody>
					</table>
				</td>

				<td> Grails, Groovy, Java, PHP, JavaScript</td>
				<td><a href="https://cabolabs-ehrserver.rhcloud.com/ehr" target="_blank">Cloud</a></td>
				<td>Apache 2.0</td>
				<td><a href="http://cabolabs.com/forum/categories/ehrserver">Forum</a></td>
			</tr>

			<tr>
				<th style="text-align:center" colspan="6">Libraries</th>
			</tr>
			<tr>
				<td><strong>adl2-core</strong><br/><a href="https://github.com/openEHR/adl2-core/" target="_blank">GitHub</a></td>
				<td>An implementation of the openEHR <a href="/releases/AM/latest/ADL2.html">ADL2</a> and <a href="/releases/AM/latest/AOM2.html">AOM 2</a> specifications.</td>
				<td> Java, Antlr3</td>
				<td></td>
				<td>Affero GPL 3</td>
				<td><a href="https://github.com/openEHR/adl2-core/issues">Issues</a></td>
			</tr>
			<tr>
				<td><strong>Archie</strong><br/><a href="https://github.com/nedap/archie/#archie-openehr-library" target="_blank">GitHub</a></td>
				<td>An implementation of the openEHR <a href="/releases/AM/latest/ADL2.html">ADL2</a> and <a href="/releases/AM/latest/AOM2.html">AOM 2</a> specifications and the <a href="/releases/RM/latest/docs/index">Reference Model</a>. <a href="https://github.com/nedap/archie">(more)</a>.</td>
				<td> Java, Antlr4</td>
				<td></td>
				<td>Apache 2</td>
				<td><a href="https://github.com/nedap/archie/issues">Issues</a></td>
			</tr>
			<tr>
				<td><strong>java-libs</strong><br/><a href="https://github.com/openEHR/java-libs/" target="_blank">GitHub</a></td>
				<td>A reference implementation of openEHR <a href="/releases/RM/latest/docs/index">Reference Model</a>, <a href="/releases/AM/latest/ADL1.4.html">ADL 1.4</a>, <a href="/releases/AM/latest/AOM1.4.html">AOM 1.4</a> specifications and other core semantics. This library is the core of most other Java implementations of openEHR.</td>
				<td>Java, Javacc</td>
				<td><a href="http://www.openehr.org/wiki/display/projects/Java+Project+Download" target="_blank">Downloads</a></td>
				<td>MPL 2.0/GPL 2.0/LGPL 2.1</td>
				<td><a href="https://github.com/openEHR/java-libs/issues">Issues</a></td>
			</tr>
			<tr>
				<td><strong>open EHR-Gen</strong><br/><a href="https://code.google.com/archive/p/open-ehr-gen-framework/">Google Code</a></td>
				<td>A framework for generating medical record systems based on openEHR</td>
				<td> Grails, Groovy, Java</td>
				<td><a href="https://code.google.com/archive/p/open-ehr-gen-framework/downloads" target="_blank">Downloads</a></td>
				<td>Apache 2.0</td>
				<td><a href="https://code.google.com/archive/p/open-ehr-gen-framework/issues">Issues</a></td>
			</tr>
			</tbody>
			</table>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
