<?php 
function validName(string $name): bool {

    if((mb_strlen($name,'UTF-8') < 2) || (mb_strlen($name,'UTF-8') > 100)) {
        return false;
    }
    // if(!preg_match("/^[а-яА-ЯёЁa-zA-Z\-_]+$/",$name)){
    //     return false;
    // }
    return true;
}