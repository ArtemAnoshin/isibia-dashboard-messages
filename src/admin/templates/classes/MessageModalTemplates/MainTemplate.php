<?php

namespace IsibiaDashboardMessages\Templates\MessageModalTemplates;

class MainTemplate
{
    
    public function render()
    {
        ?>
        <div id="isibia-message-modal" class="isibia-modal">
            <?php 
                echo Header::getTemplate();
                echo Settings::getTemplate();
                echo Editor::getTemplate();
                echo Footer::getTemplate();
            ?>
        </div>
        <?php
    }
}