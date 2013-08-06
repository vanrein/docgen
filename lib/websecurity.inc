<?php

# websecure.inc --- This module is responsible for secure LaTeX document
# generation on the world wide web.
#
# It's intention is to avoid reading and writing important files on the
# system, such as password files and firewall configurations.
#
# These problems turn up when LaTeX texts may be entered in web forms.
# Therefore, include this file (at the end of the preamble, say) before any
# user supplied data is generated as part of a LaTeX document.
#
# To avoid giving out our security measures, this file will not include the
# commands for LaTeX source code requests.
#
# STATUS: Currently, all known LaTeX security issues have been resolved.
# How about TeX though?
#
# 26 Nov 2001 - TeX adds \openin and \openout file commands. Handled.
#
# $Id:$
# Rick van Rein, May 2000.


	if ($output != 'tex') {
?>
\global\def\input{}
\global\def\include{}
\global\def\listfiles{}
\global\def\typein{}
\global\def\special{}
%QUICKFIX% \global\def\openin#1=#2{}
%QUICKFIX% \global\def\openout#1=#2{}
\nofiles
<?php
	}
	while (list ($var,$val) = each ($_GET)) {
		$$var = $val;
	}
?>
