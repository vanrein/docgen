<HTML>
<HEAD>
<TITLE>Document Generation Centre</TITLE>
</HEAD>
<BODY BGCOLOR="#ffffff">
<H1>Document Generation Centre</H1>

<P><B>What it is:</B>
This service lets you generate documents from preset templates.
For example, a protest letter that you can sign by adding your personal information.
The generated document will be layed out with that information embedded.</P>


<P><B>Quality:</B>
The resulting output is of the highest possible quality, since layout is done with LaTeX.
Letters in LaTeX are <EM>very</EM> impressive, and they usually fit nicely into a window envelope.
The interface however, is through normal web forms, so it's a bit simpler than plain LaTeX <CODE>;-)</CODE><BR>
One warning though: The <CODE>.ps</CODE> and <CODE>.pdf</CODE> files contain fonts that are rendered specifically for 600dpi; if that is unsuitable for you, the <CODE>.dvi</CODE> file (which requires locally installed LaTeX capabilities) is a better solution, because the local LaTeX support (actually, the MetaFONT engine part) will then render the fonts at the resolutions configured for your screen, printer and (perhaps) fax.</P>


<P><B>What you will find here:</B>
The documents serviced are determined by my personal interests.
They are divided in categories below.
If you think you may have something that I'd like to have added, let me know.</P>


<P><B>How it works:</B>
The documents are stored in the web server's domain as <EM>templates</EM>, which are LaTeX documents intersected with PHP3 code.
The PHP3 code can refer to variables, which are provided through web form entries.
<BR>
To support the generation of more than just LaTeX documents (which you would have to compile yourself), there is an intermediate PHP3 script between the web form that you fill in and the template.
This intermediate loads the LaTeX after PHP3 processing, and compiles it to the desired format.
<BR>
The download comes with this document, and two general examples for Dutch letter generation included.</P>


<P><B>Privacy:</B>
I have no use for your personal information.
It is used only to generate your letter.
All traces of your identity are deleted by the time you read your document.</P>


<H2>Nederlandse Brieven (Dutch Letters)</H2>

<P>Typesetting gebeurt op A4, in het Nederlands, en geschikt voor Nederlandse vensterenveloppen.
<UL>
<LI> <A HREF="brief.php">Nederlandse Algemene Brief</A> ---
Een algemeen invulformulier voor een brief volgens de NEN normen.
Download dit formulier en pas het aan met je eigen default waarden.
<B>Werkt nog niet helemaal goed.</B>
<LI> <A HREF="standaardbrief.php">Een voorbeeld standaardbrief</A> ---
Een invulformulier met variabelen die verwerkt moeten worden in een verder standaard opgestelde brief.
<!--
<LI> <A HREF="ipay.php">Bredere ondersteuning voor I-Pay</A> --- I-Pay moet ook voor Linux en MacOS beschikbaar komen.
-->
<LI> <A HREF="opzegging.php">Opzegging van een lopend lidmaatschap</A> --- Je hebt een abonnement, en wilt verdere stilzwijgende verlenging voorkomen.
<!--
<LI> <A HREF="linuxmag.php">Stuur LinuxMagazijn een offerte</A> --- Passop: storting op mijn rekening dus misschien niet geschikt voor jou  <CODE>;-)</CODE>
-->
<!--
<LI> <A HREF="sneek.php">Sneek wil een virusschrijver in dienst nemen?!?</A> --- De burgemeester heeft duidelijk een toelichting nodig...
<LI> <A HREF="zondvloed.php">Na mij de zondvloed</A> --- Amerikaanse president vindt vermindering CO2-uitstoot onnodig. Een sarcastische protestbrief.
<LI> <A HREF="amquaida.php">De Am-Quaida slaat toe: en weg is je privacy</A> -- Wie vanaf 5 maart vliegt, ongeacht waarheen, levert zijn persoonsgegevens uit aan Big Brother, Amerika.  Je privacy doorgespoeld ten goede van een strijd tegen terroristische schimmen.  Een protestbrief aan de betreffende instanties.
-->
</UL>


<H2>Formulieren (Forms)</H2>

<UL>
<LI> <A HREF="resume.php">My Curriculum Vitæ</A>, in the language and format of your preference.
<LI> <A HREF="tijdschrijf.php">Time writing forms</A> ---
	To answer the question
	<EM>How much time did you spend on project X last month?</EM>
</UL>


<HR>
<CENTER>
[
	<A HREF="http://docgen.vanrein.org/docgen.tar.gz">download</A>
|
	<A HREF="http://vanrein.org">home</A>
|
	<A HREF="http://vanrein.org/mailto/rick.php">mail</A>
]
</CENTER>


</BODY>
</HTML>
