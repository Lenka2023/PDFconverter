<?php
require("PDF2HTML.php");
$pdf2html = new BCL\easyConverter\HTML\PDF2HTML();
try
{
   $pdf2html->ConvertToHTML("D:\\git\\git.pdf", "D:\\git\\output.html");
}
catch(BCL\easyConverter\HTML\PDF2HTMLException $ex)
{
   echo $ex->getMessage(), "\n";
}
?>