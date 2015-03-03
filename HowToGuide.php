<?php
header("Content-type: application/pdf");
header("Content-disposition: attachment; filename=HowToGuide.pdf");
readfile("HowToGuide.pdf");
?>
