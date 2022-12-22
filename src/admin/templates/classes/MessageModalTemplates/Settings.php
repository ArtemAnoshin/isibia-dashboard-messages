<?php

namespace IsibiaDashboardMessages\Templates\MessageModalTemplates;

class Settings
{
    public static function getTemplate(): string
    {
        $title_start_date = __('Start date', 'isibia-dashboard-messages');
        $title_end_date = __('End date', 'isibia-dashboard-messages');
        $title_closed = __('Can close', 'isibia-dashboard-messages');
        
        return '
            <div class="isibia-modal-settings">
                <div class="column">
                    <label>
                        ' . $title_start_date . '
                        <input class="datepicker" name="start_date" type="text">
                    </label>
                    <label>
                        ' . $title_end_date . '
                        <input class="datepicker" name="end_date" type="text">
                    </label>
                </div>
                <div class="column">
                    <label>
                        ' . $title_closed . '
                        <input name="closed" type="checkbox" checked>
                    </label>
                </div>
            </div>
            <script>
                jQuery("input[name*=\'date\'], .datepicker").datepicker({ dateFormat: "dd/mm/yy" });
            </script>
        ';
    }
}