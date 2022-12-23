jQuery(document).ready(function ($)
{
    // Show message modal
    $('#wp-admin-bar-isibia_admin_bar > a').click(function (event)
    {
        event.preventDefault();

        $.get({
            url: ajaxurl,
            data: {
                action: 'show_message_modal'
            },
            success: function (response) {
                $('body').append(response);
            },
            dataType: 'html'
        });
    });
    
    // Close message modal
    $(document).on('click', '.isibia-modal-header .dashicons-no-alt, #isibia-button-modal-close', function () {
        $('#isibia-message-modal').remove();
        wp.editor.remove('message-modal-editor');
    })

    // Show message modal
    $(document).on('click', '#isibia-button-modal-save', function (event)
    {
        event.preventDefault();
        
        let form = $('#isibia-message-modal');
        
        // Copy content from editor to textarea
        form.find('[name="content"]').val(
            $('#message-modal-editor_ifr').contents().find('[data-id="message-modal-editor"]').html()
        );

        $.post({
            url: ajaxurl,
            data: {
                action: 'dashboard_message_save',
                nonce_code : isibiaLocalize.nonce,
                form: form.serializeArray()
            },
            success: function (response) {
                alert(response);
            }
        });
    })
});
