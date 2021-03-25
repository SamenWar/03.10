<?php
// Задача 3: Счетчик посещений Используя cookie реализовать
// вывод на страницу сообщения с количеством посещений страницы
setcookie();
if(empty($_COOKIE)){
    $_COOKIE['int']=1;
}else {
    $_COOKIE['int']++;
    echo $_COOKIE['int'];
}
