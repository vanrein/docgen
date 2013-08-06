\documentclass[10pt,streepjes]{brief}
\makeatletter

\usepackage[dutch]{babel}

\usepackage{url}
% \urlstyle{sf}

<?php require ('../lib/websecurity.inc'); ?>

\begin{document}

\begin{brief}{Bad Letters, Inc. \\ Slechtestraat 13a \\ 1313 MS Weerselo}

\betreft{Minachtende briefverzending}

\uwbriefvan{}
<?php	if ($klantnr != '') {
		echo "\\uwkenmerk{klant $klantnr}\n";
	} else {
		echo "\\uwkenmerk{}\n";
	}
?>
\onskenmerk{}
\datum{\today}


\opening {Geachte lezer,}

Onlangs schreef ik mij als klant in bij Bad Letters, Inc.\ en ontving ik een welkomstpakket met daarin een vulpen en een notitieboekje.
Ik dank u hartelijk voor deze aardige attentie, maar zie mij toch ook genoodzaakt enige kritiek geven.

Bij het welkomstpakket zat namelijk een brief, en \emph{die was niet opgemaakt met \LaTeX}.
Dit is onvergeeflijk, omdat eenieder weet dat \LaTeX\ brieven van onge\"evenaarde kwaliteit zijn, zeker in combinatie met de Nederlandse brievenstijl van Victor Eijkhout.
Alles onder die norm duidt in mijn ogen op minachting van de geadresseerde.

Het is weliswaar bekend dat sommige mensen hun software selecteren op het initi\"ele gebruiksgemak in plaats van de kwaliteit van de opgeleverde resultaten, maar als dat bij u het geval is dan wil ik u wijzen op de toegankelijke web-interface die Rick van Rein voor bovengenoemde briefstijl heeft gemaakt, en die te vinden is op \url{http://www.ctan.org/}.
Deze web-interface kan zelfs, door de invoerformulieren aan te passen, worden toegesneden op persoonlijke wensen.

Het is met deze interface zelfs mogelijk om standaardbrieven voor te bereiden, waarin men alleen nog variabele gegevens dient in te voeren.
Deze faciliteit gebruiken we dan ook om u zo veel mogelijk van deze brieven te sturen om u op uw onacceptabele brievenbeleid te wijzen.
Immers, kracht schuilt in getallen, zoals de leverancier van uw huidige tekstverwerkertje u mogelijk kan uitleggen.

Ik hoop op een spoedige correctie, opdat ik mijn verdere klandizie met een verlicht gemoed kan doormaken,


\afsluiting {Met vriendelijke groet,}

\ondertekening {<?php echo "$naam \\\\ $adres \\\\ $pcwpl" ?>}

<?php	if ($tel != '') {
		echo "\\voetitem{telefoon}\{$tel}\n";
	}
	if ($fax != '') {
		echo "\\voetitem{fax}\{$fax}\n";
	}
	if ($email != '') {
		echo "\\voetitem{email}{\\url\{$email}}\n";
	}
	if ($www != '') {
		echo "\\voetitem{www}{\\url\{$www}}\n";
	}
?>

\end{brief}

\end{document}
