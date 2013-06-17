<?php

class Validator
{
    public static function checkRequestExistence($user_id, $device_id)
    {        
        return Request::model()->exists(
            'user_id=:user_id AND device_id=:device_id AND status=:status',
            array(
                ':user_id' => $user_id,
                ':device_id' => $device_id,
                ':status' => Constant::$REQUEST_BEING_CONSIDERED
            ));        
    }
}
?>
