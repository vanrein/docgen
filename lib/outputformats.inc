<INPUT TYPE="RADIO" NAME="output" VALUE="pdf" CHECKED>PDF
<INPUT TYPE="RADIO" NAME="output" VALUE="ps">PostScript
<INPUT TYPE="RADIO" NAME="output" VALUE="tex">LaTeX (source)
<INPUT TYPE="RADIO" NAME="output" VALUE="dvi">DVI
<INPUT TYPE="RADIO" NAME="output" VALUE="log">[debug]
<?php
if ((substr ($_SERVER ['REMOTE_ADDR'], 0,  7) == '10.0.0.') ||
    (substr ($_SERVER ['REMOTE_ADDR'], 0,  7) == '10.0.1.') ||
    (substr ($_SERVER ['REMOTE_ADDR'], 0,  7) == '10.0.3.') ||
    (substr ($_SERVER ['REMOTE_ADDR'], 0,  7) == '10.0.6.') ||
    (substr ($_SERVER ['REMOTE_ADDR'], 0, 14) == '::ffff:10.0.0.') ||
    (substr ($_SERVER ['REMOTE_ADDR'], 0, 14) == '::ffff:10.0.1.') ||
    (substr ($_SERVER ['REMOTE_ADDR'], 0, 14) == '::ffff:10.0.3.') ||
    (substr ($_SERVER ['REMOTE_ADDR'], 0, 14) == '::ffff:10.0.6.') ||
    (substr ($_SERVER ['REMOTE_ADDR'], 0, 15) == '2001:610:66f:0:')) {
	print '<INPUT TYPE="RADIO" NAME="output" VALUE="lpr">print';
	print '<INPUT TYPE="RADIO" NAME="output" VALUE="email">email';
	print "\n";
}
?>
<INPUT TYPE="RADIO" NAME="output" VALUE="rtf">RTF (testfase)
