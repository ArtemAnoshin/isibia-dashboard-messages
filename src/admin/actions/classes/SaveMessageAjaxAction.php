<?php

namespace IsibiaDashboardMessages\Actions;

use Exception;
use IsibiaDashboardMessages\Models\DashboardMessagePost;
use IsibiaDashboardMessages\Models\DashboardMessagePostValidator;

class SaveMessageAjaxAction
{
    public static function save()
    {
        check_ajax_referer( 'isibia-dashmess-nonce', 'nonce_code' );
        
        // Validate data
        $validated_data = array();

        try {
            $validator = new DashboardMessagePostValidator($_POST);
            $validated_data = $validator->validate();
        } catch (Exception $e) {
            wp_die($e->getMessage());
        }
        var_dump($validated_data);
        
 //       $message = new DashboardMessagePost($validated_data);
//        $message_id = $message->save();
        
        die();
    }
}