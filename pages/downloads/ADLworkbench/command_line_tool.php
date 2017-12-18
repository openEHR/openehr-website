﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'ADL Command-line Tools';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>adlc</h2>
			<h3>Overview</h3>
			<p>The adlc tool allows you to perform many of the operations available in the ADL Workbench from the command line, enabling the development of scripts and batch processes. The adlc executable is included in the ADL Workbench delivery, in the same location as the adl_workbench executable itself. Its usage is as follows:</p>
<pre>
    USAGE:
       adlc -s [-q]
       adlc -r [-q]
       adlc -R &lt;reference model name&gt; [-q]
       adlc -b &lt;library name&gt; -l [-q]
       adlc -b &lt;library name&gt; -d [-q]
       adlc &lt;id_pattern&gt; -b &lt;library name&gt; [-flat] [-cfg &lt;file path&gt;] [-q] [-f &lt;format&gt;] -a &lt;action&gt;

    OPTIONS:
       Options should be prefixed with: '-' or '/'

       -q --quiet                      : suppress verbose feedback, including configuration information on startup (Optional)
            --flat                        : use flat form of archetype[s] for actions, e.g. path extraction etc (Optional)
       -s --show_config          : show current configuration and defaults
	   -r --list_rms                 : generate list of reference models.
	   -R --display_rms		     : generate view of reference models user-friendly format
       -l  --list_archetypes      : generate list of archetypes in current library (use for further processing)
       -d --display_archetypes: generate list of archetypes in current library in user-friendly format
       -b --library                    : library to use
                                            &lt;library name&gt;: library name
       -f  --format                    : output format for generated files (Optional)
                                            &lt;format&gt;: file formats: json | adl | odin | yaml | xml (default = adl)
           --cfg                          : output default configuration file location (Optional)
                                            &lt;file path&gt;: .cfg file path
       -a --action                     : action to perform
                                             &lt;action&gt;: validate | serialise | serialize | list
       -? --help                        : Display usage information. (Optional)

    NON-SWITCHED ARGUMENTS:
       &lt;id_pattern&gt;               : archetype id regex
</pre>
			<h3>Environment</h3>
			<p>The adlc utility will run on any Windows or Linux/Unix/Macos platform. On Windows, it can be run from cygwin or from within a standard Windows command shell. In the examples below, the command prompt and comments are in the standard Unix/Linux form, i.e. using '$' and '#'. On Windows this will of course be something like "C:\&gt;" and "::" or "REM".</p>
			<h3>Initial configuration</h3>
			<p>The adlc utility relies on a configuration file being in place, either by previous execution of adl_workbench on the same machine, or else by manual construction of the .cfg text file. See <a href="tool_configuration">here</a> for how to do this.</p>
</pre>
			<h3>Typical tasks</h3>
			<p>In the following the command line is shown using both the standard 'verbose' form of switches and options (using '--') and the short form. The short form is typically used for manual entry at the command line, but the long form is recommended for use in scripts for better readability. Most invocations use the '-q' (quiet) switch to reduce verbose output.</p>
			<p>Show the help:</p>
<pre>
	$ adlc --help
	$ adlc -h
	$ adlc -?					# windows only
</pre>
			<p>Display the current configuration (shown with typical output):</p>
<pre>
	$ adlc -q --show_config
	$ adlc -q -s

User .cfg file location: C:\Users\Thomas\AppData\Local\openEHR\adl_workbench\adl_workbench.cfg
XML rules file location: C:\Users\Thomas\AppData\Local\openEHR\adl_workbench\xml_rules.cfg

Loaded RM schemas (BMM files):
        cdisc_core_0.5.0
        cen_en13606_0.95
        hl7_fhir_0.8.3
        openehr_adltest_1.0.2
        openehr_ehr_extract_1.1.0
        cimi_rm_3.0.5

Configured repositories:
        C:\dev\openEHR\CKM-mirror
                  openEHR-CKM
        C:\dev\openEHR\adl-archetypes
                  openEHR-ADLref
                  openEHR-BRIDG_POC
                  openEHR-FHIR
                  openEHR-13606_examples
                  openEHR-Demographics
                  openEHR-EHR_Extract
                  openEHR-CKM_2013
                  MOH Spain-MOH_Spain
                  Nehta-Nehta_2014-04-25
        C:\dev\CIMI\archetypes
                  CIMI-mini-CIMI

</pre>
			<p></p>
			<p>Most adlc commands relate to a particular library, i.e. logical collection of archetypes. In the output in the above example, the inner names 'openEHR-CKM', ... , 'CIMI-mini-CIMI' etc under the heading 'Configured repositories' are the library names. The library to use is specified using the -b | --library option.</p>
			<p>List all archetypes / templates available in a library:</p>
<pre>
	$ adlc -q -b openEHR-CKM -l
	$ adlc -q --library openEHR-CKM --list

	openehr-demographic-address.address.v1.0.0
	openehr-demographic-address.address-provider.v1.0.0
	openehr-demographic-address.electronic_communication.v1.0.0
	openehr-demographic-address.electronic_communication-provider.v1.0.0
	openehr-demographic-capability.individual_credentials.v1.0.0
	openehr-demographic-cluster.biometric_identifier_iso.v1.0.0
	openehr-demographic-cluster.birth_data_additional_detail_br.v1.0.0
	openehr-demographic-cluster.high_level_address_other_data_br.v1.0.0
	openehr-demographic-cluster.person_additional_data_br.v1.0.0
	openehr-demographic-cluster.person_additional_data_iso.v1.0.0
	...

</pre>
			<p>This command generates a flat list of archetype identifiers suitable for use in scripts and batch processing. The -d | --display switch is used for the same purpose, with a more human readable output:</p>
<pre>
	$ adlc -q -b openEHR-CKM -d
	$ adlc -q --library openEHR-CKM --display

	------------ Archetypes in library 'openEHR-CKM' --------------
		+-- ADDRESS
			+-- address.v1.0.0
				+-- provider.v1.0.0
			+-- electronic_communication.v1.0.0
				+-- provider.v1.0.0
		+-- CAPABILITY
			+-- individual_credentials.v1.0.0
		+-- ITEM
			+-- CLUSTER
				+-- biometric_identifier_iso.v1.0.0
				+-- birth_data_additional_detail_br.v1.0.0
				+-- high_level_address_other_data_br.v1.0.0
				+-- identifier_other_details.v1.0.0
				+-- individual_credentials_iso.v1.0.0
				+-- individual_provider_credentials_iso.v1.0.0
				+-- person_additional_data_br.v1.0.0
				+-- person_additional_data_iso.v1.0.0
				+-- person_birth_data_iso.v1.0.0
				+-- person_death_data_iso.v1.0.0
				+-- person_identifier.v1.0.0
					+-- provider.v1.0.0
				+-- person_other_birth_data_br.v1.0.0
				+-- person_other_death_data.v1.0.0
				+-- provider_identifier.v1.0.0
				+-- registration_other_data.v1.0.0

</pre>
			<p>The next set of invocations uses the -a | --action switch to indicate a specific action to perform, and a regex (PERL) pattern on the archetype id to indicate which archetypes to apply the action to (note: this is a true regular expression, not a command-line glob expression: use '.*' to match anything, not just '*').</p>
			<p>The following command lists (--action list) all archetypes whose identifiers match the regex pattern '.*problem.*':</p>
<pre>
	$ adlc -q -b openEHR-CKM -a list .*problem.*
	$ adlc -q --library openEHR-CKM --action list .*problem.*

	openEHR-EHR-COMPOSITION.problem_list.v1.0.0
	openEHR-EHR-EVALUATION.problem.v1.0.0
	openEHR-EHR-SECTION.problem_list.v1.0.0
	openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0

</pre>
			<p>The following command validates (--action validate) the archetype openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0. With the -q option, there is no output, because the archetype validates; in verbose mode, warnings will be shown:</p>
<pre>
	$ adlc -q -b openEHR-CKM -a validate openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0
	$ adlc -q --library openEHR-CKM --action validate openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0
	$ # no output
	$ adlc --library openEHR-CKM --action validate openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0

	------------- compiling ARCHETYPE ---- openEHR-EHR-EVALUATION.problem.v1.0.0 -------------
	WARNING (WCACA) attribute items in object node at /data[at0001|structure|]/items[at0014|Aetiology|]/items cardinality 1..* same as in reference model
	WARNING (WCACA) attribute items in object node at /data[at0001|structure|]/items[at0018|Occurrences or exacerbations|]/items cardinality 1..* same as in referen
	ce model
	WARNING (WCACA) attribute items in object node at /data[at0001|structure|]/items[at0018|Occurrences or exacerbations|]/items[at0021|Occurrence/exacerbation|]/it
	ems cardinality 1..* same as in reference model
	WARNING (WCACA) attribute items in object node at /data[at0001|structure|]/items[at0026|Related problems|]/items cardinality 1..* same as in reference model
	WARNING (WCACA) attribute items in object node at /data[at0001|structure|]/items[at0026|Related problems|]/items[at0027|Related problem|]/items cardinality 1..*
	 same as in reference model
	WARNING (WCACA) attribute items in object node at /protocol[at0032|Tree|]/items cardinality 0..* same as in reference model
	WARNING (WCACA) attribute items in object node at /protocol[at0032|Tree|]/items[at0033|References|]/items cardinality 1..* same as in reference model
	------------- compiling ARCHETYPE ---- openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0 -------------
	WARNING (WOUC) code at0.37 in ontology not used in archetype definition
	WARNING (WOUC) code at0.38 in ontology not used in archetype definition
	WARNING (WOUC) code at0.39 in ontology not used in archetype definition
	...

</pre>
			<p>The following command serialises (--action serialise) the differential form of the (specialised) archetype openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0 to JSON syntax. The default output format is adl; yaml, xml and dadl are also supported.</p>
<pre>
	$ adlc -q -b openEHR-CKM -a serialise -f json openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0
	$ adlc -q --library openEHR-CKM --action serialise --format json openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0

	{
			"original_language": "ISO_639-1::en",
			"translations": [{
					"de": {
							"language": "ISO_639-1::de",
							"author": [{
									"name": "Jasmin Buck, Sebastian Garde",
									"organisation": "University of Heidelberg, Central Queensland University"
							}]
					},
					"pt-br": {
							"language": "ISO_639-1::pt-br",
							"author": [{
									"name": "Marco Borges",
									"organisation": "P2D",
									"email": "marco.borges@p2d.com.br"
							}],
							"accreditation": "P2D Health Advisor Council"
					}
			}],
			"description": {
					"original_author": [{
							"name": "Sam Heard",
							"organisation": "Ocean Informatics",
							"email": "sam.heard@oceaninformatics.com",
							"date": "23/04/2006"
	...
	   "parent_archetype_id": "openEHR-EHR-EVALUATION.problem.v1.0.0",
	   "definition": {
			   "rm_type_name": "EVALUATION",
			   "node_id": "at0000.1",
			   "attributes": [
					   {
							   "rm_attribute_name": "value",
							   "differential_path": "/data[at0001]/items[at0002.1]",
							   "children": [
									   {
											   "rm_type_name": "DV_CODED_TEXT",
											   "attributes": [
													   {
															   "rm_attribute_name": "defining_code",
															   "children": [
																	   {
																			   "rm_type_name": "CODE_PHRASE",
																			   "target": "ac0.1"
																	   }
															   ],
															   "is_multiple": false
													   }
											   ]
									   }
							   ],
							   "is_multiple": false

	...

</pre>
			<p>The following command serialises (--action serialise) the flat form (--flat) of the archetype openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0 to ADL syntax.</p>
<pre>
	$ adlc -q -b openEHR-CKM -a serialise --flat openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0
	$ adlc -q --library openEHR-CKM --action serialise --flat openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0

	archetype (adl_version=1.5; generated)
		openEHR-EHR-EVALUATION.problem-diagnosis.v1.0.0

	specialize
		openEHR-EHR-EVALUATION.problem.v1.0.0

	language
		original_language = <[ISO_639-1::en]>
		translations = <
			["de"] = <
				language = <[ISO_639-1::de]>
				author = <
					["name"] = <"Jasmin Buck, Sebastian Garde">
					["organisation"] = <"University of Heidelberg, Central Queensland University">
				>
			>
	...
	definition
		EVALUATION[at0000.1] matches {  -- Diagnosis
			data matches {
				ITEM_TREE[at0001] matches {     -- structure
					items cardinality matches {1..*; ordered} matches {
						ELEMENT[at0002.1] matches {     -- Diagnosis
							value matches {
								DV_CODED_TEXT matches {
									defining_code matches {[ac0.1]}     -- Any term that 'is_a' diagnosis
								}
							}
						}
						ELEMENT[at0009] occurrences matches {0..1} matches {    -- Clinical description
							value matches {
								DV_TEXT matches {*}
							}
						}
						ELEMENT[at0.32] occurrences matches {0..1} matches {    -- Status
							value matches {
								DV_CODED_TEXT matches {
									defining_code matches {
										[local::
										at0.33,         -- provisional
										at0.34] -- working
									}
								}
							}

</pre>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
