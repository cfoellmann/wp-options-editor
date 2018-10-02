// List.js
var options = {
    valueNames: [ 'option-name', 'option-value' ],
    page: 1000
};

var optionsList = new List( 'wp-options-manager', options );

function verify_option_deletion( option, loc )
{
    var agree = confirm( ajax_object.noticeStrOne + " " + option + " " + ajax_object.noticeStrTwo );
    if (agree)
        location.href=loc ;
}

jQuery( document ).on( 'click', '.add-option', function(){
    jQuery( '.add-option-form' ).show( 'slow' );
});

// Jeditable - jQuery in place edit plugin
jQuery(document).ready(function() {

});

jQuery('.edit').editable( ajax_object.ajax_url, {
    type      : 'textarea',
    cancel    : 'Cancel',
    submit    : 'OK'
});
