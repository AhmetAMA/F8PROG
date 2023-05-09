<?php

function is_array_or_string($input) {
    if (is_array($input)) {
      return "Input is an array";
    } else if (is_string($input)) {
      return "Input is a string";
    } else {
      return "Input is not a string or an array";
    }
}

function keer_om_input($input) {
    if (is_array($input)) {
        return keer_array_om($input);
    } else if (is_string($input)) {
        return keer_om_input($input);
    } else {
        return "Input is not a string or an array";
    }
}

function keer_array_om($array) {
    return array_reverse($array);
}

function reverse_case($string) {
    return strtr($string, 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
}

function keer_om($string) {
    return strrev($string);
}

?>