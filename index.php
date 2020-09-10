<?php

$curl = curl_init();

$url = "https://www.itcityonline.com/products?category=smartphone-tablet&subcategory=tablet";
    
//curl_setopt($curl, CURL_FILE, $fp);
//curl_setopt($curl, CURL_HEADER, 0)
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($curl, CURLOPT_COOKIE, true);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//https://m.media-amazon.com/images/I/81tNjNfqGXL._AC_UY218_.jpg

$result = curl_exec($curl);
echo $result;
    
curl_close($curl);


$product_area = $html->find('div.body-wrapper',0);
$product_l1 = $product_area->find('div.product-list-page',0);
$product_l2 = $product_l1->find('div.container',1);
$product_array = $product_l2->find('product-list',0);

foreach($product_array as $key => $item){
 
   foreach($item as $value=> $val){
  echo "<p>";
   //echo "SKU : ".$value['attr'];
  // // // echo $value;
  echo "<br>";
  echo "sub : ".$value;
  echo "<br>";
  echo "eee : ".$indy =$val;

