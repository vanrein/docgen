<?php
# locale.inc --- Enable internationalised websites.
#
# NOTE: CURRENTLY INVOKED WITH ARRAYS -- PHP4 SIMLIFIES
#
# After including this file, invoke a command like
#	langavailable ('en-US', 'en-UK', 'nl');
# to state the possible languages for this document, with the first
# the default. By comparing the HTTP header Accept-Language it is
# possible to pick the optimal language.
#
# Then invoke the function
#	langstr ('Internationalization',
#		 'Internationalisation',
#		 'Internationalisatie')
# to obtain the string in the chosen language, or the test
#	islanguage ('en')
# to test if the current language is 'en', or take a look at
#	$language
# to read the chosen language, or its 0-starting index in
#	$langidx
#
# By Rick van Rein, May 2000.


$h=getallheaders ();
$posslanguages=split (' *, *', $h ['Accept-Language']);
if ($posslanguages [0] == '') {
	$posslanguages [0] = 'en';
}

# `langavailable' selects the best trade-off between the offered array of
# languages for the document at hand and the preferred languages as set in
# the browser.
#
# In order of dropping pleasingness:
#  * An exact match of language name
#  * A document language which is more concrete than the preference
#  * A preference which is more concrete than the document language
#  * The first of the document offered languages (at least one must be offered)

function langavailable ($langs) {
	global $language, $langidx, $posslanguages;
	$langidx=-1;
	$numlang=sizeof ($langs);
	$numposs=sizeof ($posslanguages);
	$moreprecise=0;
	for ($p=0; $p<$numposs; $p++) {
		for ($l=0; $l<$numlang; $l++) {
			$lang=$langs [$l];
			$poss=$posslanguages [$p];
			if ($lang == $poss) {
				$language = $lang;
				$langidx  = $l;
				return;
			} elseif (eregi ($poss.'-.*', $lang)) {
				if ($moreprecise++ == 0) {
					$langidx = $l;
				}
			} elseif (eregi ($lang.'-.*', $poss)) {
				if (!isset ($langidx)) {
					$langidx = $l;
				}
			}
		}
	}
	if ($langidx==-1) {
		$langidx = 0;
	}
	$language = $langs [$langidx];
}


# `langstr' selects the proper localisation string from the provided array.
# The number of arguments (and their languages) must match the last invocation
# of `langavailable'.

function langstr ($texts) {
	global $langidx;
	return $texts [$langidx];
}


# `islanguage' is a test whether the current language is the one given.

function islanguage ($lang) {
	global $language;
	return $lang == $language;
}

# `langrecover' reecovers a language from the index in global $langidx.
# This enables languages passing from client to server.
# Invoking langrecover on the server with the index of the client, together
# with the _same_ array of languages sets everything as in the client.

function langrecover ($langs) {
	global $language, $langidx;
	$language = $langs [$langidx];
}


?>
