<?php

namespace IsibiaDashboardMessages\Models;

class DashboardMessagePost
{
    private $title;
    private $start_date;
    private $end_date;
    private int $closed;
    private $content;

    public function __construct($data)
    {
        $this->title = $data->title;
        $this->start_date = $data->start_date ?? '';
        $this->end_date = $data->end_date ?? '';
        $this->closed = isset($data->closed) ? 1 : 0;
        $this->content = $data->content;
    }

    public function save()
    {
        $post_data = [
            'post_title'    => $this->title,
            'post_content'  => $this->content,
            //'post_name'     => 'post_slug',
            'post_status'   => 'publish',
            'post_type'     => RegisterPostType::MESSAGES_POST_TYPE,
            'post_author'   => get_current_user_id(),
            'ping_status'   => 'closed',
            'meta_input'    => [
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'closed' => $this->closed,
            ],
        ];

        return wp_insert_post($post_data);
    }

    public static function update($post_id)
    {
        if (!wp_verify_nonce($_POST['isibia-dashmess-nonce'], 'isibia-dashmess-nonce')) {
            return;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        if(!current_user_can('edit_post', $post_id)) {
            return;
        }

        $start_date = sanitize_text_field($_POST['start_date']);
        $end_date = sanitize_text_field($_POST['end_date']);
        $closed = isset($_POST['closed']) ? 1 : 0;

        update_post_meta($post_id, 'start_date', $start_date);
        update_post_meta($post_id, 'end_date', $end_date);
        update_post_meta($post_id, 'closed', $closed);
    }
}