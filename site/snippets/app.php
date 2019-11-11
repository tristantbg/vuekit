<?php

function setInnerHTML($element, $html)
{
    $fragment = $element->ownerDocument->createDocumentFragment();
    $fragment->appendXML($html);
    $clone = $element->cloneNode(); // Get element copy without children
    $clone->appendChild($fragment);
    $element->parentNode->replaceChild($clone, $element);
}

$doc = new DOMDocument;
$doc->loadHTMLFile('./dist/index.html');
$appElement = $doc->getElementById('app');
setInnerHTML($appElement, $html);
$amendedHtml = $doc->saveHTML();
echo $amendedHtml;

?>
