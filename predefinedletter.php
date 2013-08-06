<HTML>
<HEAD><TITLE>Predefined Letter</TITLE></HEAD>
<BODY BGCOLOR="#ffffff">
<H1>Predefined Letter</H1>

<P>This is an imaginary predefined letter, that could have been sent as a protest, had the recipient existed.
It demonstrates how easy it is to generate a LaTeX letter.

<P>Enter values in an HTML form, to be used elsewhere in a template document to generate a LaTeX-document.
That document will then be compiled with a generic wrapper, to result in a <CODE>.pdf</CODE>, <CODE>.ps</CODE>, <CODE>.dvi</CODE> or <CODE>.tex</CODE> format.
It is also possible to generate <CODE>.log</CODE> files by selecting the `debug' output option.<P>

<FORM ACTION="lib/generate.php" METHOD="GET">
<INPUT TYPE="HIDDEN" NAME="template" VALUE="predefinedletter">
<TABLE>
<TR><TD ALIGN=RIGHT><B>Name:</B></TD><TD><INPUT TYPE=TEXT NAME="naam" WIDTH=50 VALUE="Your name is needed"></TD></TR>
<TR><TD ALIGN=RIGHT><B>Address.1:</B></TD><TD><INPUT TYPE=TEXT NAME="adres" WIDTH=50 VALUE=""></TD></TR>
<TR><TD ALIGN=RIGHT><B>Address.2:</B></TD><TD><INPUT TYPE=TEXT NAME="pcwpl" WIDTH=50 VALUE=""></TD></TR>
<TR><TD ALIGN=RIGHT><B>Customer number:</B></TD><TD><INPUT TYPE=TEXT NAME="klantnr" WIDTH=50 VALUE=""></TD></TR>
<TR><TD ALIGN=RIGHT><B>Phone number:</B></TD><TD><INPUT TYPE=TEXT NAME="tel" WIDTH=50 VALUE=""></TD></TR>
<TR><TD ALIGN=RIGHT><B>Fax number:</B></TD><TD><INPUT TYPE=TEXT NAME="fax" WIDTH=50 VALUE=""></TD></TR>
<TR><TD ALIGN=RIGHT><B>Email:</B></TD><TD><INPUT TYPE=TEXT NAME="email" WIDTH=50 VALUE=""></TD></TR>
<TR><TD ALIGN=RIGHT><B>Homepage:</B></TD><TD><INPUT TYPE=TEXT NAME="www" WIDTH=50 VALUE=""></TD></TR>
<TR><TD></TD><TD>
	<INPUT TYPE="SUBMIT" VALUE="Make the letter">
</TD></TR>
<TR><TD ALIGN=RIGHT><B>Documentformat:</B></TD><TD>
	<?php require ('lib/outputformats.inc') ?>
</TD></TR>
</TABLE>
</FORM>

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
