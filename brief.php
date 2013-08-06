<HTML>
<HEAD><TITLE>Nederlandse Algemene Brief</TITLE></HEAD>
<BODY BGCOLOR="#ffffff">
<H1>Nederlandse Algemene Brief</H1>
<P><BLINK>Oei, wat is deze functionaliteit beta zeg!</BLINK></P>
<P>Vul de velden in die van belang zijn, laat de rest gewoon open.
Onderaan de pagina volgen wat tips voor bijzondere opmaak.
<!--
Download dit systeem vanaf de
<A HREF="http://members.home.nl/hackers">moedersite</A>.
-->
</P>
<FORM ACTION="lib/generate.php" METHOD="POST" ENCTYPE="multipart/form-data">
<!-- Set to JA for lines at the side of the paper, NEE for no lines: -->
<INPUT TYPE=HIDDEN NAME=STREEPJES VALUE=JA>
<!-- Set to JA for the four heads UBV/UKM/OKM even without tekst: -->
<INPUT TYPE=HIDDEN NAME=LEEGHOOFDIG VALUE=JA>
<!-- Set to the desired pointsize, 10pt or 12pt -->
<INPUT TYPE=HIDDEN NAME=POINTSIZE VALUE="10pt">
<!-- Paper size is no option. NEN was designed for A4 only. -->
<INPUT TYPE="HIDDEN" NAME="template" VALUE="brief">

<TABLE>
<FIELDSET>
<TR><TH VALIGN=TOP>Adressering:</TH><TD VALIGN=TOP><TEXTAREA NAME=ADR COLS=40 ROWS=4></TEXTAREA><A HREF="http://www.antwoordnummer.nl">antwoordnummer?</A></TD></TR>
<TR><TH VALIGN=TOP>Antwoordadres:</TH><TD><TEXTAREA NAME=AFZ COLS=40 ROWS=4>Geulstraat 96
7523 TW Enschede</TEXTAREA></TD></TR>
<TR><TH ALIGN=RIGHT>Cc.1:</TH><TD><INPUT TYPE=TEXT NAME=CC1 SIZE=40></TD></TR>
<TR><TH ALIGN=RIGHT>Cc.2:</TH><TD><INPUT TYPE=TEXT NAME=CC2 SIZE=40></TD></TR>
</FIELDSET>
<FIELDSET>
<TR><TH ALIGN=RIGHT>Betreft:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=OW VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Uw brief van:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=UBV VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Uw kenmerk:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=UKM VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Ons kenmerk:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=OKM VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Datum:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=DAT VALUE=""></TD></TR>
</FIELDSET>
<FIELDSET>
<TR><TH ALIGN=RIGHT>Aanhef:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=ANH VALUE="Geachte lezer,"></TD></TR>
<!--
[ BODY TEKST VOLGT AAN HET EIND ]<BR>
-->
<!--
<INPUT TYPE=HIDDEN NAME="MAX_FILE_SIZE" VALUE="10000">
<TR><TH ALIGN=RIGHT>Body tekst file:</TH><TD><INPUT TYPE="file" NAME="bodyfile"></TD></TR>
-->
<TR><TH ALIGN=RIGHT>Afsluiting:</TH><TD><INPUT TYPE=TEXT SIZE=40 NAME=AFS VALUE="Met vriendelijke groet,"></TD></TR>
</FIELDSET>
<FIELDSET>
<TR><TH ALIGN=RIGHT>Ondertek.1:</TH><TD><INPUT TYPE=TEXT SIZE=32 NAME=OT1 VALUE="Rick van Rein">
	    rol: <INPUT TYPE=TEXT SIZE=20 NAME=OR1 VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Ondertek.2:</TH><TD><INPUT TYPE=TEXT SIZE=32 NAME=OT2 VALUE="">
	    rol: <INPUT TYPE=TEXT SIZE=20 NAME=OR2 VALUE=""></TD></TR>
</FIELDSET>
<FIELDSET>
<TR><TH ALIGN=RIGHT>Voetitem.1:</TH><TD><INPUT TYPE=TEXT SIZE=17 NAME=VI1 VALUE="telefoon">
            <INPUT TYPE=TEXT SIZE=40 NAME=VV1 VALUE="+31 53 4325306"></TD></TR>
<TR><TH ALIGN=RIGHT>Voetitem.2:</TH><TD><INPUT TYPE=TEXT SIZE=17 NAME=VI2 VALUE="fax">
            <INPUT TYPE=TEXT SIZE=40 NAME=VV2 VALUE="+31 20 8741068"></TD></TR>
<TR><TH ALIGN=RIGHT>Voetitem.3:</TH><TD><INPUT TYPE=TEXT SIZE=17 NAME=VI3 VALUE="email">
            <INPUT TYPE=TEXT SIZE=40 NAME=VV3 VALUE="rick@vanrein.org"></TD></TR>
<TR><TH ALIGN=RIGHT>Voetitem.4:</TH><TD><INPUT TYPE=TEXT SIZE=17 NAME=VI4 VALUE="www">
            <INPUT TYPE=TEXT SIZE=40 NAME=VV4 VALUE="http://rick.vanrein.org"></TD></TR>
<TR><TH ALIGN=RIGHT>Bijlage.1:</TH><TD><INPUT TYPE=TEXT SIZE=58 NAME=BL1 VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Bijlage.2:</TH><TD><INPUT TYPE=TEXT SIZE=58 NAME=BL2 VALUE=""></TD></TR>
<TR><TH ALIGN=RIGHT>Bijlage.3:</TH><TD><INPUT TYPE=TEXT SIZE=58 NAME=BL3 VALUE=""></TD></TR>
</FIELDSET>
<FIELDSET>
<TR><TD></TD><TD ALIGN=RIGHT><INPUT TYPE=SUBMIT VALUE="Maak de brief aan"></TD></TR>
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
<STRONG>Achtergrond:</STRONG>
Deze briefstijl is conform NEN 1026 voor briefpapier, NEN 3162 voor het indelen van documenten, NEN 1025 voor enveloppen en NEN 3516 voor het ontwerp van formulieren.
Bijgevolg passen de brieven rechtstreeks in vensterenveloppen.
Met dank aan de LaTeX stijl voor Nederlandse brieven door Victor Eijkhout.
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
