<?php
# Letter-generator from templates, by Rick van Rein.
#
# Uses a named template and accepts parameters.
# The idea is to have a form like this one:
#
#	 <FORM ACTION="docgen.php" METHOD="POST">
#	 	<INPUT TYPE="HIDDEN" NAME="template" VALUE="001">
#			... {template parameters} ...
#		Generate
#		<INPUT TYPE="RADIO" NAME="output" VALUE="pdf" CHECKED>PDF
#		<INPUT TYPE="RADIO" NAME="output" VALUE="rtf">RTF
#		<INPUT TYPE="RADIO" NAME="output" VALUE="ps">PostScript
#		<INPUT TYPE="RADIO" NAME="output" VALUE="dvi">DVI
#		<INPUT TYPE="RADIO" NAME="output" VALUE="tex">LaTeX
#		<INPUT TYPE="RADIO" NAME="output" VALUE="set">[defaults]
#		<INPUT TYPE="RADIO" NAME="output" VALUE="log">[debug]
#		<INPUT TYPE="RADIO" NAME="output" VALUE="lpr">print
#		<INPUT TYPE="RADIO" NAME="output" VALUE="email">email
#		<INPUT TYPE="SUBMIT" VALUE="Generate">
#	 </FORM>
#
# This obtains the given template temp001 from the current web server.
# The template may be PHP3, using the parameters provided on the commandline.
# The output should be a LaTeX file, ready for further treatment.
#
# $Id:Not checked in yet$
# By Rick van Rein.

require('settings.inc');

$template = $_GET['template'];
$output = $_GET['output'];

# Close the given resource, if it is in use
function unlinkany ($fn) {
	if (is_file ($fn)) {
		unlink ($fn);
	}
}


# Close all resources in use
function closeall () {
	global $tempname;
	unlinkany ("$tempname.tex");
	unlinkany ("$tempname.pdf");
	unlinkany ("$tempname.rtf");
	unlinkany ("$tempname.aux");
	unlinkany ("$tempname.log");
	unlinkany ("$tempname.ps");
	unlinkany ("$tempname.pdf");
}


function outputfile ($mimetype,$file) {
	# $fp=fopen ($file, "r");
	# if ($fp) {
		# fpassthru ($fp);
		# # while (!feof ($fp)) {
			# # $buf=fread ($fp, 1);
			# # fwrite (1, $buf, 1);
		# # }
	# }
	# fclose ($fp);
	readfile ($file);
	closeall();
	exit();
}


function fatal ($msg) {
	global $errordoc;
	outputfile ('text/html', $errordoc.'?error='.rawurlencode($msg));
}


if (!isset ($template)) {
	fatal ('Please select a template with the $template parameter');
}

# Set up QUERY_STRING if necessary (for POST instead of GET, that is)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$infix='';
	while (list ($var,$val) = each ($_POST)) {
		$QUERY_STRING .= $infix . $var . '=';
		$QUERY_STRING .= rawurlencode ($val);
		$infix='&';
	}
} else {
	$QUERY_STRING = $_SERVER ["QUERY_STRING"];
}


#
# PART 1: OBTAIN LaTeX DOCUMENT FROM TEMPLATE
#

$tempname = tempnam ('/tmp', 'docgen_');
if (!($texf=fopen ("$tempname.tex", "w"))) {
	fatal ('Cannot open intermediate LaTeX file');
}
if (!($tempf=fopen ("$templateprefix$template$templatepostfix?$QUERY_STRING", "r"))) {
	fatal ('Cannot load template');
}
while (!feof ($tempf)) {
	$buf=fgets ($tempf, 4096);
	fputs ($texf, $buf);
}
fclose ($tempf);
fclose ($texf);



switch ($output) {
case 'set':
	header ("Location: http://$SERVER_NAME/form/$template.php?$QUERY_STRING");
		break;
case 'tex':
	header ("Content-Type: text/plain");
	header ("Content-Disposition: attachment; filename=\"$template.tex\"");
	passthru ("$mapperdir/2tex '$tempname'");
	break;
case 'log':
	header ("Content-Type: text/plain");
	header ("Content-Disposition: attachment; filename=\"$template.log\"");
	passthru ("$mapperdir/2log '$tempname'");
	break;
case 'dvi':
	header ("Content-Type: application/x-dvi");
	header ("Content-Disposition: attachment; filename=\"$template.dvi\"");
	# header ("Content-Transfer-Encoding: 8bit");
	passthru ("$mapperdir/2dvi '$tempname'");
	break;
case 'ps':
	header ("Content-Type: application/postscript");
	header ("Content-Disposition: attachment; filename=\"$template.ps\"");
	passthru ("$mapperdir/2ps '$tempname'");
	break;
case 'lpr':
	header ("Content-Type: text/plain");
	if ((substr ($_SERVER['REMOTE_ADDR'], 0, 14) == '::ffff:10.0.0.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 7) == '10.0.0.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 14) == '::ffff:10.0.1.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 14) == '::ffff:10.0.3.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 14) == '::ffff:10.0.6.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 7) == '10.0.1.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 7) == '10.0.3.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 7) == '10.0.6.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 15) == '2001:610:66f:0:')) {
		passthru ("$mapperdir/2lpr '$tempname'");
	} else {
		print 'You are not invited to print!';
	}
	break;
case 'email':
	header ("Content-type: text/plain");
	if ((substr ($_SERVER['REMOTE_ADDR'], 0, 14) == '::ffff:10.0.0.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 7) == '10.0.0.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 14) == '::ffff:10.0.1.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 14) == '::ffff:10.0.3.')  || (substr ($_SERVER['REMOTE_ADDR'], 0, 14) == '::ffff:10.0.6.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 7) == '10.0.1.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 7) == '10.0.3.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 7) == '10.0.1.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 7) == '10.0.6.') || (substr ($_SERVER['REMOTE_ADDR'], 0, 15) == '2001:610:66f:0:')) {
		passthru ("$mapperdir/2email '$tempname'");
	} else {
		print 'You are not invited to generate emails!';
	}
	break;
case 'rtf':
	header ("Content-Type: text/rtf");
	header ("Content-Disposition: attachment; filename=\"$template.rtf\"");
	passthru ("$mapperdir/2rtf '$tempname'");
	break;
case 'pdf':
default:
	header ("Content-Type: application/pdf");
	header ("Content-Disposition: attachment; filename=\"$template.pdf\"");
	# header ("Content-Transfer-Encoding: base64");
	# header ("Content-Encoding: gzip");
	passthru ("$mapperdir/2pdf '$tempname'");
	break;
}

exit ();


if ($output == 'tex') {
	outputfile ('application/x-latex', "$tempname.tex");
}


if ($output == 'dvi') {
	if (system ("/tmp/docgen_dvi '$tempname'")) {
		fatal ("Cannot run LaTeX on intermediate file");
	}
}


if ($output == 'dvi'  or  $output == 'ps') {
	$error=system ("cd $tempdir; echo q | latex '$tempname' >/dev/null");
	# $error=system ("/tmp/nop");
	if ($error) {
		fatal ("Cannot run LaTeX on intermediate file");
	}
}

if ($output == 'dvi') {
	outputfile ('application/x-dvi', "$tempname.dvi");
}

if ($output == 'ps') {
	if (system ("cd $tempdir;dvips $tempname.dvi >/dev/null 2>/dev/null")) {
		fatal ("Cannot translate DVI to PostScript");
	}
	outputfile ('application/postscript', "$tempname.ps");
}

if (system ("cd $tempdir;echo q | pdflatex $tempname >/dev/null 2>/dev/null")) {
	fatal ("Cannot run LaTeX on intermediate file to produce PDF");
}

outputfile ('application/pdf', "$tempname.pdf");



# $Log:$
?>
