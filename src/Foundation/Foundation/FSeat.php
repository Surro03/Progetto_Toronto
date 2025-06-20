<?php
class FSeat {
    private static $table = "seats";

    private static $value = "( :status, :seatId)";

    private static $key = "seatId";

    

    public function __construct() {
        // Constructor can be used for initialization if needed
    }
    
    public static function getTable() {
        return self::$table;
    }
    public static function getValue() {
        return self::$value;
    }
    public static function getKey() {
        return self::$key;
    }
    public static function getClass(){
        return self::class;
    }

}