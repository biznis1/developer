<?php

$json = '{
  "b2b": [
    {
      "ctin": "01AABCE2207R1Z5",
      "cfs": "Y",
      "inv": [
        {
          "chksum": "BBUIBUIUIJKKBJKGUYFTFGUY",
          "updby": "S",
          "inum": "S008400",
          "idt": "24-11-2016",
          "val": 729248.16,
          "pos": "06",
          "rchrg": "N",
          "etin": "01AABCE5507R1Z4",
          "inv_typ": "R",
          "cflag": "N",
          "itms": [
            {
              "num": 1,
              "itm_det": {
                "rt": 5,
                "txval": 10000,
                "iamt": 0,
                "camt": 500,
                "samt": 900,
                "csamt": 500
              }
            }
          ]
        }
      ]
    }
  ]
}';
$arr = json_decode($json,true);

foreach($arr['b2b'][0]['inv'][0]['itms'][0]['itm_det'] as $index=>$items){
	
	$arr1['itm_det'][$index]=$items;
}
echo "<pre>";
print_r($arr1);
echo "</pre>";

echo "<pre>";
print_r($arr);
echo "</pre>";
