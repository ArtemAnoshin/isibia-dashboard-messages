<?php

namespace IsibiaDashboardMessages\Core;

class Plugin
{
    const PLUGIN_VERSION = '1.0';
    /**
     * Plugin entry point, plugin launch
     */
    public function launch()
    {
        // CSS+JS
        add_action('admin_enqueue_scripts', function () {
            wp_enqueue_style(
                'isibia-dashmess-styles',
                plugins_url('css/style.css', __FILE__)
            );
            wp_enqueue_script(
                'isibia-dashmess-script',
                plugins_url('js/script.js', __FILE__),
                array('jquery'),
                self::PLUGIN_VERSION,
                true);
        });

        // Admin Bar Menu Hook
        add_action('admin_bar_menu', array('IsibiaDashboardMessages\AdminBarMenu\AdminBarMenuHook', 'hook'), 9999);
    
        // ShowMessageModalAction
        add_action('wp_ajax_show_message_modal', array('IsibiaDashboardMessages\Actions\ShowMessageModalAction\ShowMessageModalController', 'showModal'));
    }
}