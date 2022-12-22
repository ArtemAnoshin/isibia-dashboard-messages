<?php

namespace IsibiaDashboardMessages\Actions;

class SaveMessageAjaxAction
{
    public static function save()
    {
        check_ajax_referer( 'isibia-dashmess-nonce', 'nonce_code' );
        
        
        wp_die();
    }
}