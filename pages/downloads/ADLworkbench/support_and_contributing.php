﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Support and Contributing';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- - - ----------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>I have a problem...</h2>
			<h3>...with the ADL Workbench</h3>
			<p>You can report an issue on the <a href="/issues/browse/AWBPR">Jira AWB PR tracker</a> at openEHR.org. Please select the appropriate component, e.g. User interface, Validator, etc.</p>
			
			<h3>...with an archetype</h3>
			<p>If it is a CKM archetype, and it really appears to be an error or deficiency, you can:</p>
			<ul>
				<li>Submit a comment to CKM, with the following steps: 
				<ul>
					<li>Go to the <a href="/knowledge/">CKM server</a> and login </li>
					<li>Navigate to the archetype in the left hand explorer and select (double-click) </li>
					<li>Now right-click-Discussion. </li>
				</ul>
				</li>
				<li>Discuss it on the openehr-clinical mailing list (<a href="http://lists.openehr.org/mailman/listinfo/openehr-clinical_lists.openehr.org">subscribe here</a>, <a href="https://www.mail-archive.com/openehr-clinical@lists.openehr.org/">list archive</a>) </li>
			</ul>
			<p>If it is an ADL 2 test archetype, create a problem report on the <a href="/issues/browse/AWBPR">Jira AWB PR tracker</a>, with component set to 'Test archetypes'.</p>
			
			<h3>...with this online documentation</h3>
			<p>If your problem is that you can't find an answer to what you are looking for, please report this on the <a href="/issues/browse/AWBPR">Jira AWB PR tracker</a>, with component set to 'Documentation'. If you really need an answer, don't be afraid to post on the openehr-technical mailing list (<a href="http://lists.openehr.org/mailman/listinfo/openehr-technical_lists.openehr.org">subscribe here</a>, <a href="https://www.mail-archive.com/openehr-technical@lists.openehr.org/">list archive</a>).</p>
			
			<h3>...with the openEHR specifications</h3>
			<p>There is a dedicated Jira tracker for this <a href="https://openehr.atlassian.net/projects/SPECPR">here</a>.</p>
			
			<h2>How can I contribute?</h2>
			<p>You are already a saint for asking! Most likely your interest is in one of the areas of: clinical archetypes, ADL/AOM tooling, or specifications. Useful things you can do include the following.</p>
			
			<h3>I can help with clinical / demographic archetypes</h3>
			<p>If your interest is in building and/or reviewing the CKM archetypes, or you want to offer new archetypes to CKM, please either login to CKM and join existing discussions, and/or contact the CKM editors and/or start a discussion on the openehr-clinical mailing list (<a href="http://lists.openehr.org/mailman/listinfo/openehr-clinical_lists.openehr.org">subscribe here</a>, <a href="https://www.mail-archive.com/openehr-clinical@lists.openehr.org/">list archive</a>).</p>
			
			<h3>I want to help improving ADL / AOM 2</h3>
			<p>The single most useful thing you can do is to help build up the test archetype repository. This is a subversion repository, located <a href="https://github.com/openEHR/adl-archetypes">here</a>. We need more archetypes to test more ADL 2 use cases. Most of the validity conditions have at least one or two archetypes,	but some conditions can be triggered by different kinds of archetypes. If you see you can post a message on the openehr-technical mailing list(<a href="http://lists.openehr.org/mailman/listinfo/openehr-technical_lists.openehr.org">subscribe here</a>, <a href="https://www.mail-archive.com/openehr-technical@lists.openehr.org/">list archive</a>).</p>
			
			<h3>I can help improving the tool</h3>
			<p>The tool is written in the Eiffel language. If you are interested in working on it, please join the openEHR implementation mailing list (<a href="http://lists.openehr.org/mailman/listinfo/openehr-implementers_lists.openehr.org">subscribe here</a>, <a href="https://www.mail-archive.com/openehr-implementers@lists.openehr.org/">list archive</a>). Even if you have no interest in Eiffel, you are welcome to help by critiquing the design, suggesting new features. You can do this by posting feature requests on the <a href="http://www.openehr.org/issues/browse/AWBPR">Jira AWB PR tracker</a>(set Issue Type = 'improvement' or 'new feature request'), or posting on the openehr-technical mailing list (<a href="http://lists.openehr.org/mailman/listinfo/openehr-technical_lists.openehr.org">subscribe here</a>, <a href="https://www.mail-archive.com/openehr-technical@lists.openehr.org/">list archive</a>).</p>
			
			<h3>I would like to port the tool to another language</h3>
			<p>As a starting point, it is suggested you post an initial enquiry on the openehr-technical mailing list (<a href="http://lists.openehr.org/mailman/listinfo/openehr-technical_lists.openehr.org">subscribe here</a>,
			<a href="http://www.openehr.org/mailarchives/openehr-technical/">list archive</a>), and/or subscribe to the openehr-implementers mailing list (<a href="http://lists.openehr.org/mailman/listinfo/openehr-implementers_lists.openehr.org">subscribe here</a>, <a href="https://www.mail-archive.com/openehr-implementers@lists.openehr.org/">list archive</a>).</p>

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
