<?php

$dom = new DOMDocument('1.0');

$table = $dom->createElement('table');
$domAttribute = $dom->createAttribute('id');
$domAttribute->value = 'my_table';

$tr = $dom->createElement('tr');
$table->appendChild($tr);

$td = $dom->createElement('td', 'Label');
$tr->appendChild($td);

$td = $dom->createElement('td', 'Value');
$tr->appendChild($td);

$table->appendChild($domAttribute);
$dom->appendChild($table);
echo $dom->saveHTML();

?>