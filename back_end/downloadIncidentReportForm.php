<?php

// Store the file name into variable
$file = '../forms/Incident Report Form.doc.pdf';
$filename = '../forms/Incident Report Form.doc.pdf';

// Header content type
header('Content-type: application/pdf');

header('Content-Disposition: inline; filename="' . $filename . '"');

header('Content-Transfer-Encoding: binary');

header('Accept-Ranges: bytes');

// Read the file
@readfile($file);

?>
