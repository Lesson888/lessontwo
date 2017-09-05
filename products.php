<?php
//[Название, Цена, Описание]
$products = [
    ['Шапка мужская', 100,'Крутая шапка'],
    ['Штаны женские', 100, 'Стильные штаны'],
    ['Мяч волейбольный', 100, 'Круглый мяч'],
    ['Джинсы', 100, 'Джинсы импортные'],
    ['Футболка', 100, 'Футболка с рисунком единорога'],
];


/**
 * Возвращает название товара
 *
 * @param $product
 * @return mixed
 */
function getName($product)
{
    return $product[0];
}
/**
 * Возвращает цену товара
 *
 * @param $product
 * @return mixed
 */
function getPrice($product)
{
    return $product[1];
}
/**
 * Возвращает описание товара
 *
 * @param $product
 * @return mixed
 */
function getDescription($product)
{
    return $product[2];
}


