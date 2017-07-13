<?php
  // JSON string
  $someFORM = '[{"name":"","action":"","target":"","autocomplete":"","enctype":"","method":"","acceptcharset":"","novalidate":""}]';

  // Convert JSON string to Array
  $someArray = json_decode($someFORM, true);
  print_r($someArray);        // Dump all data of the Array
  echo $someArray[0]['name']; // Access Array data
foreach($someArray[0] as $k=>$v){
echo "<pre>";
echo "name is "."<b>$k</b>"." and value is "."<b>$v</b>";
echo "</pre>";
}

?>

