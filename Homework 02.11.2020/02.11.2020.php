<?php

//Задание 1: В строке текста записаны слова, разделенные пробелами в произвольном количестве.
//Сжать текст, чтобы между словами остался только один пробел. После последнего слова пробелы удалить. Перед первым оставить.
echo "Задание 1: ";
//Записать текст с пробелами в произвольном количестве.
$text = '  В      строке       текста   записаны   слова, разделенные пробелами в произвольном количестве.    ';
//Убрать пробелы между словами.
$text2 = preg_replace('/[^\S\r\n]+/', ' ', $text);
//Убрать пробел после последнего слова
$text3 = rtrim($text2);
var_dump($text);
var_dump($text2);
var_dump($text3);

<<<<<<< HEAD
<<<<<<< HEAD
//Задание 2:
=======
=======
>>>>>>> 5f61be5dcd751dcdcd70afe09539219b9f6f6a66


//Задание 2:
// В произвольном тексте найти и вывести на экран все слова длина которых не менее трёх символов и не более пяти.
echo "Задание 2: ";
$string3 = 'Длина слов не менее трёх символов и не более пяти.';
$array = explode(" ", $string3);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    if (mb_strlen($array[$i]) >= 3 && mb_strlen($array[$i]) <= 5) {
        echo $array[$i]." ";
    }
}
echo "<br>";
<<<<<<< HEAD
>>>>>>> 5f61be5dcd751dcdcd70afe09539219b9f6f6a66
=======
>>>>>>> 5f61be5dcd751dcdcd70afe09539219b9f6f6a66



//Задание 3:  Вводится строка. Удалить из нее все пробелы.
//После этого определить, является ли она палиндромом (перевертышем), т.е. одинаково пишется как с начала, так и с конца.
echo "Задание 3: ";
$string = '  live  not  on  evil  ';
$string2 = str_replace(" ", "", $string);  //Убрать из текста все пробелы
$palindrom = strrev($string2);   //Перевернуть текст и записать его в другую переменную

  if ($string2 == $palindrom){
     echo "Строка является палиндром"."<br>";
  }
  else{
     echo "Строка не является палиндром"."<br>";
  }



//Задание 4: Найти самое длинное слово и вывести его на экран.
echo "Задание 4: ";

$text4 = 'Найти в произвольном тексте самое длинное слово и вывести его на экран';
$arr = explode(" ", $text4);
$max = $arr[0];
for ($i = 0; $i < count($arr); $i++) {
    if (mb_strlen($arr[$i]) > mb_strlen($max)) {
        $max = $arr[$i];
    }
}
echo "Самое длинное слово: $max"."<br>";

<<<<<<< HEAD
<<<<<<< HEAD
=======


>>>>>>> 5f61be5dcd751dcdcd70afe09539219b9f6f6a66
=======


>>>>>>> 5f61be5dcd751dcdcd70afe09539219b9f6f6a66
//Задание 5: Посчитать количество строчных и прописных букв в строке.
//Первый способ:

echo "Здаание 5. Первый способ: "."<br>";

$str = 'LivE nOT on EViL';
$lowerCase = mb_strtolower($str);
$upperCase = mb_strtoupper($str);
$lowerDiff = similar_text($str, $lowerCase);
$upperDiff = similar_text($str, $upperCase);
echo "Количество строчных букв: " . (mb_strlen($str) - $lowerDiff);
echo "<br>";
echo "Количество прописных букв: " . (mb_strlen($str) - $upperDiff);
echo "<br>";


//Второй способ:

echo "Задание 5. Второй способ: "."<br>";

$str1 = 'LivE nOT On EViL.';
$cnt = 0;
$cnt1 = 0;
$strlen = mb_strlen($str1);
for($i = 0; $i < $strlen; $i++){
    if($str1[$i] >= 'A' && $str1[$i] <= 'Z'){
    $cnt++;
    }
}
echo "Количество строчных букв: $cnt"."<br>";
for ($f = 0; $f < $strlen; $f++){
    if ($str1[$f] >= 'a' && $str1[$f] <= 'z'){
        $cnt1++;
    }
}
echo "Количество прописных букв: $cnt1"."<br>";
