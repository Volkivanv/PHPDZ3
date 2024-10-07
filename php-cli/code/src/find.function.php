<?php
function findNearBirthDay(string $contents, string $month, string $days):string{
    $arrayPerson = explode("\r\n", $contents);
        foreach ($arrayPerson as $person) {
            $personage = explode(",", $person);

            $dateArray=explode("-", str_replace(" ","", $personage[1]));

            if (($dateArray[0] == $days)&&($dateArray[1] == $month)) {
                return 'Сегодня день рождения у '. $person;
            }
        }


        return 'не найден';
}