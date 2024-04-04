<?php

echo "Имя: ";
$name = ucfirst(trim(fgets(STDIN)));
echo "Фамилия: ";
$surname = ucfirst(trim(fgets(STDIN)));
echo "Отчество: ";
$patronymic = ucfirst(trim(fgets(STDIN))) ;

$fullName = $surname . ' ' . $name . ' ' . $patronymic;
fwrite(STDOUT, "Полное имя: " . $fullName) . PHP_EOL;
$fio = $surname[0] . $name[0] . $patronymic[0] . PHP_EOL;
fwrite(STDOUT, "Аббревиатура: " . $fio). PHP_EOL;
$surnameAndInitials = $surname . '.' . $name[0] . '.' . $patronymic[0] . PHP_EOL;
fwrite(STDOUT, "Фамилия и инициалы: " . $surnameAndInitials);