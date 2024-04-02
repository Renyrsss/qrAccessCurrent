<?php
$files = scandir('upload');
$pdfFiles = array();

foreach ($files as $file) {
  if (pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
    $pdfFiles[] = $file;
  }
}
?>
