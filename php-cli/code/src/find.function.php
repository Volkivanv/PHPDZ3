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


function deleteFromName(string $contents, string $name):string{
    $arrayPerson = explode("\r\n", $contents);
    $foundKey = -1;
        for($i = 0; $i < count($arrayPerson); $i++) {
            $personage = explode(",", $arrayPerson[$i]);
            if ($personage[0] == $name) {
                $foundKey = $i;
            }
        }
        if ($foundKey!=-1){
            unset($arrayPerson[$foundKey]);
            return implode("\r\n", $arrayPerson);
        } else {
            return $contents;
        }
}