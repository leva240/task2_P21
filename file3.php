<?php

echo "Введите порядековый номер месяца=";
$m = readline();


switch ($m) {
    case 1:
        echo "Январь: 31 дней в месяце";
        break;
    case 2:
        echo "Февраль: 28 дней в месяце";
        break;
    case 3:
        echo "Март: 31 дней в месяце";
        break; 
    case 4:
        echo "Апрель: 30 дней в месяце";
        break;    
    case 5:
        echo "Май: 31 дней в месяце";
        break;      
    case 6:
        echo "Июнь: 30 дней в месяце";
        break; 
    case 7:
        echo "Июль: 31 дней в месяце";
        break;
    case 8:
        echo "Август: 31 дней в месяце";
        break;
    case 9:
        echo "Сентябрь: 30 дней в месяце";
        break;                    
    case 10:
        echo "Октябрь: 31 дней в месяце";
        break;                          
    case 11:
        echo "Ноябрь: 30 дней в месяце";
        break;                             
    case 12:
        echo "Декабрь: 31 дней в месяце";
        break; 
    default:
        echo "Такого месяца не существует :)";
        break;
    }
