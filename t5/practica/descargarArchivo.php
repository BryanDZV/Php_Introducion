<?php
header("Content-type: application/pdf");
header("Content-Disposition: attachment; filename='nombre.pdf'");
readfile("./pdfs/Bryan_Zavala_CvBUl-1.pdf");
echo "hola";
var_dump(file_exists("./pdfs/Bryan_Zavala_CvBUl-1.pdf"));
?>
