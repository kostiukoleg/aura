<?php
$description = "&lt;p&gt;Конструкция: Джента (Djenta)*&lt;/p&gt;&lt;p&gt;Тип: профильная.&lt;/p&gt;&lt;p&gt;Толщина металла рамы: &amp;nbsp; 1.5 мм.&lt;/p&gt;&lt;p&gt;Толщина листа: 1,5 мм.&lt;/p&gt;&lt;p&gt;Толщина МДФ (внутренняя/внешняя): 10-16/10-16.&lt;/p&gt;&lt;p&gt;Покрытие металла: порошковая эмаль.&lt;/p&gt;&lt;p&gt;Петли: две; 27 мм; подшипник.&lt;/p&gt;&lt;p&gt;Тепло- и звукоизоляция: минеральная вата (60 мм).&lt;/p&gt;&lt;p&gt;Наличник: тип (90 градусов). толщина (16 мм).&lt;/p&gt;&lt;p&gt;Декоративные панели: наружный и внутренний мдф с рисунком (10 мм), покрытие (пвх, винорит), гидроизоляция металл-мдф (2мм).&lt;/p&gt;&lt;p&gt;Уплотнение: двухконтурное D-тип; 20 мм.&lt;/p&gt;&lt;p&gt;Возможные размеры: &amp;nbsp; 860х2040 мм, 960х2040 мм.&lt;/p&gt;&lt;p&gt;Система замков: нижний цилиндровый (Kale 252R), сердечник в нижний замок (вертушок Кale), верхний сувальдный (257L).&lt;/p&gt;&lt;p&gt;Противосемные штыри: два; 18 мм.&lt;/p&gt;&lt;p&gt;Фурнитура: глазок (Armadillo), ручка ( Armadillo на розетке), броненакладка (утопленная в панель).&lt;/p&gt;&lt;p&gt;Защита сердечников: броненакладка Kale (12 мм).&lt;/p&gt;&lt;p&gt;Покрытие: ПВХ пленка (квартирное), PPR краска (квартирное/уличное), термопленка (уличное).&lt;/p&gt;";
$meta_title = "810";
$end = 's';
//$product_id = "253";//+1
$now = date("Y-m-d H:i:s");

//$opt_id = "333";//+2
//$opt_val_id = "347";//+7

$file = file_get_contents('db.txt', true);
$file = explode("|", $file);
$product_id = $file[0] + 1;
$opt_id = $file[1] + 2;
$opt_val_id = $file[2] + 7;
$arr = [$product_id,$opt_id,$opt_val_id];
$arr = implode("|", $arr);
file_put_contents("db.txt", $arr);
print_r("INSERT INTO `u765579565_eco`.`oc_product` (`product_id`, `model`, `sku`, `upc`, `ean`, `jan`, `isbn`, `mpn`, `location`, `quantity`, `stock_status_id`, `image`, `manufacturer_id`, `shipping`, `price`, `points`, `tax_class_id`, `date_available`, `weight`, `weight_class_id`, `length`, `width`, `height`, `length_class_id`, `subtract`, `minimum`, `sort_order`, `status`, `viewed`, `date_added`, `date_modified`) VALUES ('$product_id', '$meta_title', '', '', '', '', '', '', 'На складе', '100', '7', 'catalog/vhodnie/milano/maestro/".$meta_title.$end."o.jpg', '16', '1', '0.0000', '0', '0', '2015-12-03', '0.00000000', '1', '0.00000000', '0.00000000', '0.00000000', '2', '1', '1', '1', '1', '0', '$now', '$now');
<br><br>INSERT INTO `u765579565_eco`.`oc_product_description` (`product_id`, `language_id`, `name`, `description`, `tag`, `meta_title`, `meta_description`, `meta_keyword`) VALUES ('$product_id', '2', 'Рисунок $meta_title', '$description', '', 'Рисунок $meta_title', '', '');
<br><br>INSERT INTO `u765579565_eco`.`oc_product_to_store` (`product_id`, `store_id`) VALUES ('$product_id', '0');
<br><br>INSERT INTO `u765579565_eco`.`oc_product_to_category` (`product_id`, `category_id`) VALUES ('$product_id', '103'), ('$product_id', '104');
<br><br>INSERT INTO `u765579565_eco`.`oc_product_option` (`product_option_id`, `product_id`, `option_id`, `value`, `required`) VALUES ('$opt_id', '$product_id', '18', '', '1'), ('".($opt_id+1)."', '$product_id', '13', '', '1');
<br><br>INSERT INTO `u765579565_eco`.`oc_product_option_value` (`product_option_value_id`, `product_option_id`, `product_id`, `option_id`, `option_value_id`, `quantity`, `subtract`, `price`, `price_prefix`, `points`, `points_prefix`, `weight`, `weight_prefix`) VALUES ('$opt_val_id', '$opt_id', '$product_id', '18', '86', '100', '1', '3900', '+', '0', '+', '0', '+'), ('".($opt_val_id+1)."', '".($opt_id+1)."', '$product_id', '13', '96', '100', '1', '3500', '+', '0', '+', '0', '+'), ('".($opt_val_id+2)."', '".($opt_id+1)."', '$product_id', '13', '89', '100', '1', '0', '+', '0', '+', '0', '+'), ('".($opt_val_id+3)."', '".($opt_id+1)."', '$product_id', '13', '90', '100', '1', '200', '+', '0', '+', '0', '+'), ('".($opt_val_id+4)."', '".($opt_id+1)."', '$product_id', '13', '91', '100', '1', '3300', '+', '0', '+', '0', '+'), ('".($opt_val_id+5)."', '$opt_id', '$product_id', '18', '87', '100', '1', '5200', '+', '0', '+', '0', '+'), ('".($opt_val_id+6)."', '$opt_id', '$product_id', '18', '88', '100', '1', '6800', '+', '0', '+', '0', '+');");
?>