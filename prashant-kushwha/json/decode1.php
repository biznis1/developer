<?php
$json='{
  "id": "Get-B2CS-Schema",
  "properties": {
    "b2cs": {
      "items": {
        "properties": {
          "chksum": {
            "maxLength": 64,
            "description": "Invoice checksum value",
            "type": "string",
            "pattern": "^[a-zA-Z0-9]+$",
            "minLength": 1
          },
          "etin": {
            "description": "Ecom Tin",
            "type": "string",
            "maxLength": 15,
            "minLength": 15,
            "pattern": "^[a-zA-Z0-9._\\s]+$"
          },
          "pos": {
            "description": "Actual Place of Supply",
            "maxLength": 2,
            "minLength": 2,
            "type": "string"
          },
          "sply_ty": {
            "description": "Supply Type of invoice",
            "type": "string",
            "enum": [
              "INTER",
              "INTRA"
            ]
          },
          "rt": {
            "description": "Rate as per invoice",
            "type": "number"
          },
          "iamt": {
            "description": "IGST Amount as per invoice",
            "type": "number"
          },
          "camt": {
            "description": "CGST Amount as per invoice",
            "type": "number"
          },
          "samt": {
            "description": "SGST Amount as per invoice",
            "type": "number"
          },
          "csamt": {
            "description": "Cess Amount as per invoice",
            "type": "number"
          },
          "txval": {
            "description": "Taxable value of Goods or Service as per invoice",
            "type": "number",
            "minLength": 1
          },
          "typ": {
            "description": "Type of Ecom/ non-Ecom",
            "type": "string",
            "enum": [
              "E",
              "OE"
            ]
          }
        },
        "required": [
          "rt",
          "sply_ty",
          "txval",
          "chksum",
          "typ"
        ],
        "type": "object"
      },
      "type": "array"
    }
  },
  "required": [
    "b2cs"
  ],
  "type": "object"
}';
//echo $json;
$arr=json_decode($json);
echo "<pre>";
var_dump($arr);
echo "</pre>";
