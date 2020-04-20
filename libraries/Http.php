<?php

class Http {

    public static function redirect(string $url) :Void 
    {
        header("Location: $url");
        exit();
    }
}