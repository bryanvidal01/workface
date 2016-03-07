jQuery(window).ready(function(){
    jQuery('.cta-green').click(function(){
        jQuery('.container-form').fadeIn();
    })
    jQuery('.close').click(function(){
        jQuery('.container-form').fadeOut();
    })

    jQuery('.filter.all').click(function(event){
        event.preventDefault();
        jQuery('.no-validate').slideDown();
        jQuery('.validate-tache').slideUp();
    });
    jQuery('.filter.validate').click(function(event){
        event.preventDefault();
        jQuery('.validate-tache').slideDown();
        jQuery('.no-validate').slideUp();
    });

    jQuery('.filter').click(function(){
        jQuery('.filter').removeClass('active');
        jQuery(this).addClass('active');
    })
});
