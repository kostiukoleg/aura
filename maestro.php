<?php
$str = "";
for($i=250;$i<274;$i++){
	$str.= ",('$i', '106')";
}
print_r("INSERT INTO `u765579565_eco`.`oc_product_to_category` (`product_id`, `category_id`) VALUES ('249', '106')$str");
?>