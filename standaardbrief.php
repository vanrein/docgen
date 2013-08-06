<HTML>
<HEAD><TITLE>Een voorbeeld standaardbrief</TITLE></HEAD>
<BODY BGCOLOR="#ffffff">
<H1>Een voorbeeld standaardbrief</H1>

<P>Dit is een denkbeeldige standaardbrief, die gestuurd zou kunnen worden als protest als de ontvanger had bestaan.
Het laat zien hoe eenvoudig een genereerbare brief met LaTeX kan worden gemaakt.</P>

<P>Door een HTML formulier worden variabele-waarden ingelezen die elders in een template document worden gebruikt om een LaTeX-document mee te genereren.
Dat document wordt vervolgens door een generieke wrapper gecompileerd naar <CODE>.pdf</CODE>, <CODE>.ps</CODE>, <CODE>.dvi</CODE> of <CODE>.tex</CODE> formaat.
Ook kunnen de <CODE>.log</CODE> files worden opgevraagd door de uitvoeroptie `debug' te kiezen.<P>

<FORM ACTION="lib/generate.php" METHOD="GET">
<INPUT TYPE="HIDDEN" NAME="template" VALUE="standaardbrief">
<TABLE>
<TR><TD ALIGN=RIGHT><B>Naam:</B></TD><TD><INPUT TYPE=TEXT NAME="naam" WIDTH=50 VALUE="Uw naam is nodig"></TD></TR>
<TR><TD ALIGN=RIGHT><B>Adres:</B></TD><TD><INPUT TYPE=TEXT NAME="adres" WIDTH=50 VALUE=""></TD></TR>
<TR><TD ALIGN=RIGHT><B>Postcode+woonplaats:</B></TD><TD><INPUT TYPE=TEXT NAME="pcwpl" WIDTH=50 VALUE=""></TD></TR>
<TR><TD ALIGN=RIGHT><B>Klantnummer:</B></TD><TD><INPUT TYPE=TEXT NAME="klantnr" WIDTH=50 VALUE=""></TD></TR>
<TR><TD ALIGN=RIGHT><B>Telefoon:</B></TD><TD><INPUT TYPE=TEXT NAME="tel" WIDTH=50 VALUE=""></TD></TR>
<TR><TD ALIGN=RIGHT><B>Fax:</B></TD><TD><INPUT TYPE=TEXT NAME="fax" WIDTH=50 VALUE=""></TD></TR>
<TR><TD ALIGN=RIGHT><B>Email:</B></TD><TD><INPUT TYPE=TEXT NAME="email" WIDTH=50 VALUE=""></TD></TR>
<TR><TD ALIGN=RIGHT><B>Homepage:</B></TD><TD><INPUT TYPE=TEXT NAME="www" WIDTH=50 VALUE=""></TD></TR>
<TR><TD></TD><TD>
	<INPUT TYPE="SUBMIT" VALUE="Maak de brief aan">
</TD></TR>
<TR><TD ALIGN=RIGHT><B>Documentformaat:</B></TD><TD>
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
