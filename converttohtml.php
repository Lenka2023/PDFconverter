<?php
// if you are using composer, just use this
include 'vendor/autoload.php';
use Gufy\PdfToHtml\Config;
// change pdftohtml bin location

\Gufy\PdfToHtml\Config::set('pdftohtml.bin', 'D:/диск с/OSPanel/domains/myminilaravel2.loc/poppler-0.68.0/bin/pdftohtml.exe');



// change pdfinfo bin location
\Gufy\PdfToHtml\Config::set('pdfinfo.bin', 'D:/диск с/OSPanel/domains/myminilaravel2.loc/poppler-0.68.0/bin/pdfinfo.exe');
$file = dirname(__FILE__) . '/resources/document.pdf';
//$file = dirname(__FILE__) . 'document.pdf';
//$file = 'doc/document.pdf';
//$file = '/resources/document.pdf';
//$file = "document.pdf";
//$file = dirname(__FILE__) . '/resources/git.pdf';
//$file = dirname(__FILE__) . 'git.pdf';
//$file = 'doc/git.pdf';
//$file = '/resources/git.pdf';
$file = "git.pdf";
// initiate

$pdf = new Gufy\PdfToHtml\Pdf($file);

// convert to html and return it as [Dom Object](https://github.com/paquettg/php-html-parser)
$html = $pdf->html();

// check if your pdf has more than one pages
//$total_pages = $pdf->getPages();
//var_dump($total_pages);
// Your pdf happen to have more than one pages and you want to go another page? Got it. use this command to change the current page to page 3
//$html->goToPage(1);

// and then you can do as you please with that dom, you can find any element you want
//$paragraphs = $html->find('body > p');

?>