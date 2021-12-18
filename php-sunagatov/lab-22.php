<title><?php echo "22 Сунагатов Ильгиз ПИ-321"; ?></title><?php
$per = 6;
$array = array();
$rez = array();
echo ("Массив из ".$per." элементов, заполненный случайными числами:<br /> ");
for ($i=0;$i<$per;$i++)
{
    $array[$i]=rand(10,99);
    echo $array[$i].'&nbsp;&nbsp;';
}
echo '<br><br>'."Массив в отсортированном виде:<br />";
sort($array);
print_r($array);
 
echo '<br><br>'."Элементы массива в обратном порядке:<br /> ";
$rez = array_reverse($array);
print_r($rez);
 
echo '<br><br>'."Массив после удаления последнего элемента:<br /> ";
array_pop($rez);
print_r($rez);
 
echo '<br><br>'."Сумма элементов массива:<br /> ";
$sum = array_sum($rez);
print_r($sum);
 
echo '<br><br>'."Количество элементов в массиве:<br />";
$count = count($rez);
print_r($count);
 
echo '<br><br>'."Среднее арифметическое для элементов массива:<br /> ";
$sred=$sum/$count;
print_r($sred);
//"Число 50:<br /> 
if (in_array(50, $rez)) {
    echo '<br><br>'."Есть число 50";
}
 
echo '<br><br>'."Массив из уникальных значений:<br /> ";
$unik=array_unique($rez);
print_r($unik);
 ?>