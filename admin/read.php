
<?php
$file = $_GET["file"];


ob_clean();
header("Cache-Control: no-store");
header("Expires: 0");
header("Content-Type: application/pdf");
header("Cache-Control: public");
header('Content-Disposition: inline; filename="' . $file . '"');
header("Content-Transfer-Encoding: binary");
header('Accept-Ranges: bytes');
readfile($file);

?>