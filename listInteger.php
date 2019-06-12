<?php
include_once ("ArrayList.php");

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(4);
$listInteger->add(3);
$listInteger->add(3);
$listInteger->add(3);


echo $listInteger->get(1);
echo $listInteger->get(2);
echo $listInteger->get(3);
echo $listInteger->get(4);

var_dump($listInteger->arrayList);
//echo $listInteger->get(9);
//echo $listInteger->get(-2)
$listInteger->remove(1);
//echo $listInteger->get(4);

echo $listInteger->size();

echo $listInteger->toArray();
$listInteger->sort();
var_dump($listInteger->arrayList);