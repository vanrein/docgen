<HTML>
<HEAD><TITLE>Dutch Standard Letter</TITLE></HEAD>
<BODY BGCOLOR="#ffffff">
<H1>Dutch Standard Letter</H1>
<P>Fill in the forms that you deem useful, leave the rest open.
The bottom of this page conveys some lay-out tips.
</P>
<FORM ACTION="lib/generate.php" METHOD="POST" ENCTYPE="multipart/form-data">
<!-- Set to JA for lines at the side of the paper, NEE for no lines: -->
<INPUT TYPE=HIDDEN NAME=STREEPJES VALUE=JA>
<!-- Set to JA for the four heads UBV/UKM/OKM even without tekst: -->
<INPUT TYPE=HIDDEN NAME=LEEGHOOFDIG VALUE=JA>
<!-- Set to the desired pointsize, 10pt or 12pt -->
<INPUT TYPE=HIDDEN NAME=POINTSIZE VALUE="10pt">
<!-- Paper size is no option. NEN was designed for A4 only. -->
<INPUT TYPE="HIDDEN" NAME="template" VALUE="letter">

<TABLE>
<FIELDSET>
<TR><TH VALIGN=TOP>Send to:</TH><TD VALIGN=TOP><TEXTAREA NAME=ADR COLS=40 ROWS=4></TEXTAREA><A HREF="http://www.antwoordnummer.nl">antwoordnummer?</A></TD></TR>
<TR><TH VALIGN=TOP>Sent from:</TH><TD><TEXTAREA NAME=AFZ COLS=40 ROWS=4>Your address
1234 Townsville</TEXTAREA></TD></TR>
<TR><TH ALIGN=RIGHT>Cc.1:</TH><TD><INPUT TYPE=TEXT NAME=CC1 SIZE=40></TD></TR>
<TR><TH ALIGN=RIGHT>Cc.2:</TH><TD><INPUT TYPE=TEXT NAME=CC2 SIZE=40></TD></TR>
</FIELDSET>
<FIELDSET>
<TR><TH ALIGN=RIGHT>Subject:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=OW VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Your letter dated:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=UBV VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Your reference:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=UKM VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Our reference:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=OKM VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Date:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=DAT VALUE=""></TD></TR>
</FIELDSET>
<FIELDSET>
<TR><TH ALIGN=RIGHT>Opening:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=ANH VALUE="Dear reader,"></TD></TR>
<!--
[ BODY TEKST VOLGT AAN HET EIND ]<BR>
-->
<INPUT TYPE=HIDDEN NAME="MAX_FILE_SIZE" VALUE="10000">
<TR><TH ALIGN=RIGHT>Body text file:</TH><TD><INPUT TYPE="file" NAME="bodyfile"></TD></TR>
<TR><TH ALIGN=RIGHT>Closing:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=AFS VALUE="Kindest regards,"></TD></TR>
</FIELDSET>
<FIELDSET>
<TR><TH ALIGN=RIGHT>Signee.1:</TH><TD><INPUT TYPE=TEXT SIZE=32 NAME=OT1 VALUE="Rick van Rein">
	    role: <INPUT TYPE=TEXT SIZE=20 NAME=OR1 VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Signee.2:</TH><TD><INPUT TYPE=TEXT SIZE=32 NAME=OT2 VALUE="">
	    role: <INPUT TYPE=TEXT SIZE=20 NAME=OR2 VALUE=""></TD></TR>
</FIELDSET>
<FIELDSET>
<TR><TH ALIGN=RIGHT>Footer.1:</TH><TD><INPUT TYPE=TEXT SIZE=17 NAME=VI1 VALUE="telefoon">
            <INPUT TYPE=TEXT SIZE=40 NAME=VV1 VALUE="+31 53 432530"></TD></TR>
<TR><TH ALIGN=RIGHT>Footer.2:</TH><TD><INPUT TYPE=TEXT SIZE=17 NAME=VI2 VALUE="fax">
            <INPUT TYPE=TEXT SIZE=40 NAME=VV2 VALUE="+31 20 874106"></TD></TR>
<TR><TH ALIGN=RIGHT>Footer.3:</TH><TD><INPUT TYPE=TEXT SIZE=17 NAME=VI3 VALUE="email">
            <INPUT TYPE=TEXT SIZE=40 NAME=VV3 VALUE="rick@vanrein.org"></TD></TR>
<TR><TH ALIGN=RIGHT>Footer.4:</TH><TD><INPUT TYPE=TEXT SIZE=17 NAME=VI4 VALUE="www">
            <INPUT TYPE=TEXT SIZE=40 NAME=VV4 VALUE="http://rick.vanrein.org"></TD></TR>
<TR><TH ALIGN=RIGHT>Appendix.1:</TH><TD><INPUT TYPE=TEXT SIZE=58 NAME=BL1 VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Appendix.2:</TH><TD><INPUT TYPE=TEXT SIZE=58 NAME=BL2 VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Appendix.3:</TH><TD><INPUT TYPE=TEXT SIZE=58 NAME=BL3 VALUE=""></TD></TR>
</FIELDSET>
<FIELDSET>
<TR><TD></TD><TD ALIGN=RIGHT><INPUT TYPE=SUBMIT VALUE="Make the letter"></TD></TR>
<TR><TD></TD><TD ALIGN=RIGHT>
	<?php require ('lib/outputformats.inc') ?>
</TD></TR>
</FIELDSET>
</TABLE>
<!--
[ MAAR EERST NOG DE BODY TEKST INVULLEN ]<BR>
<BR>
<TEXTAREA NAME=TXT COLS=75 ROWS=75></TEXTAREA>
-->
</FORM>


<?php
	require ('lib/opmaaktips.inc');
?>


<P>
<SMALL>
<STRONG>Background:</STRONG>
This letter style conforms to the standard NEN 1026 for letter paper, NEN 3162 for laying out documents, NEN 1025 for envelopes and NEN 3516 for the design of forms.
As a result, the letters fit into window envelopes.
With gratitude for the Dutch Letter Style for LaTeX by Victor Eijkhout.
</SMALL>
</P>


<HR>
<CENTER>
[
	<A HREF="http://docgen.vanrein.org">docgen</A>
|
	<A HREF="http://vanrein.org">home</A>
|
	<A HREF="http://vanrein.org/mailto/rick.php">mail</A>
]
</CENTER>


</BODY>
</HTML>
