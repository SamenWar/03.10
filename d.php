<?php
//Задача 2: Дата и время последнего посещения Используя cookie реализовать вывод на страницу
//сообщения с датой и временем последнего визита.
setcookie();
if(empty($_COOKIE)){
    $_COOKIE[time]=date(DATE_ATOM);
}else {
    echo $_COOKIE[time];
    $_COOKIE[time]=date(DATE_ATOM);
}