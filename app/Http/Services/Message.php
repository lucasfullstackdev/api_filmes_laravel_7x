<?php

namespace App\Http\Services;

class Message
{
    static public $instance;
    static public $message;
    static public $code;
    static private $bodyMessage;
    
    public static function getInstance(){
        if(empty(self::$instance))
            self::$instance = new self();
        
        return self::$instance;
    }
    
    public static function create($message, $code)
    {
        self::$message = $message;
        self::$code = $code;

        self::$bodyMessage = [
            "message" => self::$message,
            "code" => self::$code,
        ];

        return self::getInstance();
    }

    public static function show()
    {
        return response()->json(self::$bodyMessage);
    }

    public static function bind($data)
    {
        self::$bodyMessage["data"] = $data;

        return self::$instance;
    }

    public static function errorMessage($throw)
    {
        $code = empty($throw->getCode()) ? 404: $throw->getCode();
        return self::create($throw->getMessage(), $code)->show();
    }

}
