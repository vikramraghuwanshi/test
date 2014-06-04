<?php
require 'pdfcrowd.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("vikram007", "1d9b10563ad51099d0812bc31316b718");

    // convert a web page and store the generated PDF into a $pdf variable
    $pdf = $client->convertURI('http://alpha.cisinlabs.com:81/sssnw/doc_to_html/MyAccess.html');

    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: max-age=0");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"google_com.pdf\"");

    // send the generated PDF 
    echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>