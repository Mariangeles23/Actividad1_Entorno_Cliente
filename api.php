<?php
// API local: su única función es devolver los productos como JSON.
header('Content-Type: application/json; charset=utf-8');
?>
{
  "currency": "€",
  "products": [
    {
      "SKU": "0K3QOSOV4V",
      "title": "ifhone 13 Pro",
      "price": "938.99"
    },
    {
      "SKU": "TGD5XORY1L",
      "title": "Cargador",
      "price": "49.99"
    },
    {
      "SKU": "IOKW9BQ9F3",
      "title": "Funda de piel",
      "price": "79.99"
    }
  ]
}
