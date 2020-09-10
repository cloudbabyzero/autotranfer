<?php

//Example code by EThaiZone

$page = file_get_contents("http://www.itcityonline.com/products?category=smartphone-tablet&subcategory=tablet");

preg_match_all("#<tr[^>]+><td>(.*)</td><td>(.*)</td><td>(.*)</td></tr>#", $page, $matches);

echo "<h2>Notebook Price @ Pantip</h2><table><tr style='font-weight: bold; color: #000066;'><td>Brand</td><td>Detail</td><td>Price</td></tr>";
foreach($matches[0] as $key => $value) {
	echo "<tr ".($key%2 ? "style='background-color: #eee;'" : "style='background-color: #bbb;'").">";
	echo "<td>".$matches[1][$key]."</td>";
	echo "<td>".$matches[2][$key]."</td>";
	echo "<td>".$matches[3][$key]."</td>";
	echo "</tr>";
}
echo "</table>";

?>