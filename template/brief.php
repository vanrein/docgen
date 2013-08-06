<?php

	# The function `strip' takes whitespace off of the boundaries of a
	# string, to avoid that it influences tests of emptiness.
	function strip ($str) {
		$str = ereg_replace ("^[ \t\n]*" , '', $str);
		$str = ereg_replace ( "[ \t\n]*$", '', $str);
		return $str;
	}

	# The function `hitwagon' replaces line feeds '\n' in the input
	# string with the actual commands that ask LaTeX to skip the line.
	function hitwagon ($str) {
		$str = strip ($str);
		$str = ereg_replace ("\n", ' \\\\ ', $str);
		return $str;
	}


	# The function `isempty' tests whether a string is whitespace-ony.
	function isempty ($str) {
		return ereg ("^[ \t\n]*$", $str);
	}

	# The function `macrocall' prints out a LaTeX macro call, unless
	# $midstr is only spaces ànd $ifempty is set to 'NEE'
	function macrocall ($macro, $midstr, $ifempty) {
		if (!isempty ($midstr) or $ifempty != 'NEE') {
			echo "$macro{" . strip ($midstr) . "}\n";
		}
	}

?>

<?php
	if (!isset ($pointsize)) {
		$pointsize = "10pt";
	}
	echo "\\documentclass[$pointsize";
	if ($streepjes == 'JA') {
		echo ",streepjes";
	}
	echo "]{brief}\n";
?>

\usepackage[dutch]{babel}
\usepackage{url}
\urlstyle{sf}

<?php

	require ('../lib/websecurity.inc');
?>
\makeatletter
\begin{document}
<?php
	macrocall ('\\begin{brief}',	hitwagon ($ADR), '');
	macrocall ('\\antwoordadres',	hitwagon ($AFZ), 'NEE');
	macrocall ('\\cc',		$CC1,            'NEE');
	macrocall ('\\cc',		$CC2,            'NEE');
	macrocall ('\\betreft',		$OW,             'NEE');
	macrocall ('\\uwbriefvan',	$UBV,            $LEEGHOOFDIG);
	macrocall ('\\uwkenmerk',	$UKM,            $LEEGHOOFDIG);
	macrocall ('\\onskenmerk',	$OKM,            $LEEGHOOFDIG);
	if (isempty ($DAT)) {
		$DAT = '\\today';
	}
	macrocall ('\\datum',           $DAT,            $LEEGHOOFDIG);
	$ANH=ereg_replace (' *,$', '', strip ($ANH));
	macrocall ('\\opening',		"$ANH,",         '');
	# passthru ("cat $bodyfile");
	echo "\n\n$TXT\n\n";
	$AFS=ereg_replace (' *,$', '', strip ($AFS));
	macrocall ('\\afsluiting',	"$AFS,",         '');
	echo "%\n% Room to sign\n%\n";
	if (!isempty ($OR1)) {
		$OT1="$OT1 \\\\ $OR1";
	}
	$ondertek=$OT1;
	if (!isempty ($OR2)) {
		$OT2="$OT2 \\\\ $OR2";
	}
	if (!isempty ($OT2)) {
		$ondertek="$ondertek \\en $OT2";
	}
	macrocall ('\\ondertekening',	$ondertek, '');
	$bijlarr=array ($BL1, $BL2, $BL3);
	$bijlage='';
	$bijlctr=0;
	$bijlcmd = '\\bijlage';
	for ($i=0; $i<sizeof ($bijlarr); $i++) {
		if (!isempty ($bijlarr [$i])) {
			if ($bijlctr++ > 0) {
				$bijlage .= ' \\\\ ';
				$bijlcmd = '\bijlagen';
			}
			$bijlage .= $bijlarr [$i];
		}
	}
	macrocall ($bijlcmd, $bijlage, 'NEE');
	$voetarr=array ($VI1, $VV1, $VI2, $VV2, $VI3, $VV3, $VI4, $VV4);
	for ($i=0; $i<sizeof ($voetarr); $i+=2) {
		if (!isempty ($VI1) and
		   (!isempty ($VI2) or $LEEGHOOFDIG != 'NEE')) {
			# Oh how gruwesome...
			# But the '}{' trick works quite well ;-)
			macrocall ('\\voetitem',
				   $voetarr [$i] . '}{' . $voetarr [$i+1],
				   '');
		}
	}

?>
\end{brief}
\end{document}
