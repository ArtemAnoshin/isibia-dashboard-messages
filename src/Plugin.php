<?php

namespace IsibiaDashboardMessages\Core;

class Plugin
{
    /**
     * Plugin entry point, plugin launch
     */
    public function launch()
    {
        // Admin Bar Menu Hook
        add_action('admin_bar_menu', array('IsibiaDashboardMessages\AdminBarMenu\AdminBarMenuHook', 'hook'), 9999);
    }
}