jQuery(document).ready(function(){

    var show_no = 0;
    var position = jQuery('#animate-no').position();

    jQuery(window).scroll(function(){
        if(jQuery( "body" ).hasClass( "home" )) {
            if( jQuery(window).scrollTop() > (position.top-150) && show_no == 0) {
            jQuery('.stats-text h1').css({
                "visibility":"visible"
            });
            jQuery('#implants-no').animateNumber({ number: 2062 },2000);
            jQuery('#dentists-no').animateNumber({ number: 12 },1000);
            jQuery('#braces-no').animateNumber({ number: 4392 },2000);
            jQuery('#operations-no').animateNumber({ number: 28 },2000);
            show_no = 1;
            }
        }
    });

    /*------- Search Validation -----*/

    jQuery('#searchform').submit(function(){

        var search_value = jQuery("input[name='s']").attr('value');
        // alert(search_value);
        var stringlen = jQuery.trim(search_value).length;
        
        if(search_value == "" || search_value == null || stringlen == 0)
        {
            alert("Search Form must be filled");
            return false;       
        }
    }); 

});

jQuery(".testimonials").owlCarousel({
    items : 3,
    loop:true,
    autoPlay:true
});

jQuery(".clinics").owlCarousel({
    items : 3,
    loop:true,
    autoPlay:true
});

jQuery(".schubbs-news").owlCarousel({
    items : 3,
    loop:true,
    autoPlay:true
});

jQuery(".location-gallery").owlCarousel({
    items : 1,
    loop:true,
    autoPlay:true
});

jQuery("#testimonial-form").validate();

jQuery("#appoint-form").validate();

jQuery(document).ready(function(){

    jQuery("#menu-bar img").click(function(){
        jQuery(".header-menu ul").slideToggle();
    });


    var modal = document.getElementById('myModal');

    // When the user clicks on the button, open the modal
    jQuery('.team-member').click( function() {

        var id = jQuery(this).attr('data-id');

        jQuery(".modal-content").html(jQuery("#member-info-"+id).html());

        jQuery('#myModal').css({
            "display":"block"
        });
    });

    // When the user clicks on the button, open the modal
    jQuery('.myBtn').click( function() {
        jQuery('#myModal').css({
            "display":"block"
        });
    });

    // When the user clicks on <span> (x), close the modal
    jQuery(document).on('click', '.close', function() {
        jQuery("#myModal").css({
            "display":"none"
        });
    });

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    /*----------- FAQs Slide--------------*/

    jQuery('.faq-toggle').click(function(e){
        e.preventDefault();
        var ansId=jQuery(this).attr('id');
        jQuery("."+ansId).slideToggle();
    });

    /*----- Validation -----*/

    jQuery("#testimonial-form").validate();
    jQuery("#appoint-form").validate();
    jQuery("#index-form").validate();


    jQuery( "#appoint-date" ).datepicker({
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true
    }); 

    jQuery('.first-visit').click(function(){

        var first_visit = jQuery(this).attr('value');
        if(first_visit == "Yes")
        {
            jQuery('#first-visit-form').show();
            jQuery('#last-visit-form').hide();       
        }
        else if (first_visit == "No")
        {
            jQuery('#last-visit-form').show();
            jQuery('#first-visit-form').hide();       
        }
    });

});

// reload captcha
jQuery(document).on('click','.reload-captcha', function(e){
    e.preventDefault();
    var url = base_url + "wp-admin/admin-ajax.php";
    var captcha = jQuery(".captcha-image");
    var prefix = jQuery("#prefix");
    jQuery(".reload-captcha").find('.fa-refresh').addClass('fa-spin');
    var data = {
        'action': 'captcha'
    };

    jQuery.post(url, data, function(data ){
        data = JSON.parse(data);
        if(data.success){
          captcha.html('<img src="'+data.img_url+'" >');
          prefix.val(data.prefix);
        } else {
          alert('error getting new captcha');
        }
        jQuery(".reload-captcha").find('.fa-refresh').removeClass('fa-spin');
    });
});
