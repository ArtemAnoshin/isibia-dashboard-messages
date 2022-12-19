jQuery(document).ready(function ($)
{
    $('#wp-admin-bar-isibia_admin_bar > a').click(function (event)
    {
        event.preventDefault();

        $.get({
            url: ajaxurl,
            data: {
                action: 'show_message_modal'
            },
            success: function (response) {
                console.log(response);
            },
            dataType: 'html'
        });
    });
});
