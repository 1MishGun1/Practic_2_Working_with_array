<pre>

<? //Дан массив $arr. С помощью функции count выведите последний элемент данного массива.
echo '<br>Задача 1<br>';

$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
echo $arr [count($arr) -1 ];
?>


<? //Дан массив с числами. Проверьте, что в нем есть элемент со значением 3
echo '<br>Задача 2<br>';

$arr = [4, 3, 6, 2, 9, 0];
if (in_array (3, $arr)) {
    echo '3 есть';
} else {
    echo '3 нет';
}
?>


<? //Дан массив [1, 2, 3, 4, 5]. Найдите сумму элементов данного массива.
echo '<br>Задача 3<br>';

$arr = [1, 2, 3, 4, 5];
echo 'Cумма массива = ' . array_sum($arr);
?>


<? //Дан массив $arr. С помощью функций array_sum и count найдите среднее арифметическое элементов (сумма элементов делить на их количество) данного массива.
echo '<br>Задача 4<br>';

$arr = [1, 2, 3, 4, 5];
echo 'Среднее арифметическое эллементов = ' . array_sum($arr) / count($arr);
?>


<? //Создайте массив, заполненный числами от 1 до 100
echo '<br>Задача 5<br>';

foreach($arr = [range(1, 100)] as $var) {
    print_r ($var);
}
?>


<? //Создайте массив, заполненный буквами от 'a' до 'z'.
echo '<br>Задача 6<br>';

foreach($arr = [range('a', 'z')] as $var) {
    print_r ($var);
}
?>


<? //Найдите сумму чисел от 1 до 100 не используя цикл.
echo '<br>Задача 7<br>';

echo array_sum (range(1, 100));
?>


<? //Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.
echo '<br>Задача 8<br>';

$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];

$result = array_merge($arr1, $arr2);
print_r($result);
?>


<? //Дан массив с элементами 1, 2, 3, 4, 5 С помощью функции array_slice создайте из него массив $result с элементами 2, 3, 4.
echo '<br>Задача 9<br>';

$arr = [1, 2, 3, 4, 5];
$result = array_slice($arr, 1, 2, 3);
print_r($arr);
?>


<?
