jQuery(window).ready(function(){

    jQuery('.getPlaylist').click(function(event){
        event.preventDefault();
        jQuery.get( "calls/getplaylist.php", function( data ) {
            jQuery( ".my-app" ).html( data );
        });
    })

    jQuery('body').on('click', '.delete', function(event){
        event.preventDefault();
        var idPlaylist = jQuery(this).attr('href');
        var el = jQuery(this);
        jQuery.get( "calls/delete.php?id=" + idPlaylist, function( data ) {
            el.parent().fadeOut();
        });
    })

    jQuery('body').on('click', '.edit-iframe', function(event){
        event.preventDefault();
        jQuery.get( "calls/editplaylist.php", function( data ) {
            jQuery( ".my-app" ).html( data );
        });
    })

    jQuery('body').on('submit', '.addPlaylist', function(event, data){
        event.preventDefault();
        var formVal = jQuery(this);
        var inputName = jQuery(".name").val();
        var inputURL = jQuery(".url").val();
        console.log("calls/addPlaylist.php?name="+inputName+"&url="+inputURL+"");
        jQuery.get( "calls/addPlaylist.php?name="+inputName+"&url="+inputURL+"", function( data ) {
            jQuery( ".my-app" ).html( data );
        });
    })
})
