<?php
#
# settings.php --- Settings for the docgen system.
#
# Note that no code is generated from here, to avoid client applications.
#
# $Id:$
#

#
# The $tempdir variable denotes where temporary files are stored
#
$tempdir='/tmp';

#
# The $templateprefix and $templatepostfix will be placed around the template's
# code name. This is used to disable path stuff in the templates, and can thus
# be used to avoid formatting templates with unknown LaTeX code.
# Simply said, this approach closes a possible security hazard.
# FIXME: Does it? LaTeX cmds can still be inserted, right???
#
$templateprefix="http://docgen.opera/template/";
$templatepostfix=".php";

#
# The $tempname variable holds the extension-less temporary file names.
# Probably this'll do quite nicely.
#
$tempname=tempnam ($tempdir, 'docgen_');

#
# The $errordoc variable points at a document to report errors.
# FIXME: Currently, error handling is unused.
#
$errordoc='http://' . $_SERVER['SERVER_NAME'] . '/error.php';

#
# The $mapperdir variable points at the 2xxx files that generate format xxx.
#
$mapperdir='/var/www/docgen/bin';


# $Log:$

?>
