<?php
/*Дан файл export.csv, написать класс парсер для данного файла, и написать класс продукт для хранения содержимого файла export.csv.
 для подгрузки классов нужно использовать автозагрузку.
Необходимо вывести на экран все продукты у которых:
quantity > 0;
price > 100 < 700
названия в которых есть Foam
рекомендуется оформить в виде таблицы, для каждого задания
так же вывести картинку, проверить если картинки нет (ф-я file_get_contents())
то вместо картинки вывести placeholder
https://via.placeholder.com/200x200.png?text=Image+not+found
после таблицы посчитать у скольких продуктов type = configurable, type = simple*/
    require __DIR__ . "/vendor/autoload.php";

    $One = new Repository("export");
    switch ($_GET['switch']){
        case 1:
            $One->get_positiv_quantity(0);
            break;
        case 2:
            $One->get_range_price(100,700);
            break;
        case 3:
            $One->get_find_work($_GET['text']);
            break;
    }

    //$One->setArrayEntity();
   // echo $One->array_entity[1]->Price;
