<?php
header("Content-type: application/pdf");
header("Content-disposition: attachment; filename=HelloWorld.pdf");
readfile("HelloWorld.pdf");
?>
