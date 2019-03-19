<?php
$dom = new DOMDocument();

$dom->validateOnParse = true; //<!-- this first
$dom->loadHTMLFile("index.html", LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD );


$dom->preserveWhiteSpace = true;

$belement = $dom->getElementById("bid");

$h1 = $dom->createElement("h1"  ,"creating");
$h1->setAttribute('class','test');
$belement->nodeValue = "";
$belement->appendChild($h1);

$dom->saveHTMLFile('index.html');

echo $belement->nodeValue;