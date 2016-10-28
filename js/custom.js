jQuery(document).ready(function(){

    var show_no = 0;
    var position = jQuery('#animate-no').position();

    jQuery(window).scroll(function(){
      if( jQuery(window).scrollTop() > (position.top-150) && show_no == 0) {
        jQuery('.stats-text h1').css({
            "visibility":"visible"
        });
        jQuery('#implants-no').animateNumber({ number: 2062 },2000);
        jQuery('#dentists-no').animateNumber({ number: 12 },1000);
        jQuery('#braces-no').animateNumber({ number: 6450 },2000);
        jQuery('#operations-no').animateNumber({ number: 28 },2000);
        show_no = 1;
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

jQuery("#testimonial-form").validate();

jQuery("#appoint-form").validate();

jQuery(document).ready(function(){

    jQuery("#menu-bar").click(function(){
        jQuery(".header-menu ul").slideToggle();
    });

    jQuery("ul.centers-tabs li").click(function() {
        var data_id = jQuery(this).attr("data-id");
	    jQuery("li").removeClass("active");
	    jQuery(this).addClass("active");
        jQuery(".center-content").removeClass("active");
        jQuery("#tab-"+data_id).addClass("active");
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

    /*--------- Location Map Changer ----------*/

    jQuery('.location1').click(function(){
        jQuery(this).addClass('loc-active');
        jQuery('.location2').removeClass('loc-active');
        jQuery('.location3').removeClass('loc-active');
        jQuery('#loc-1').show();
        jQuery('#loc-2').hide(); 
        jQuery('#loc-3').hide();
    });
    jQuery('.location2').click(function(){
        jQuery(this).addClass('loc-active');
        jQuery('.location1').removeClass('loc-active');
        jQuery('.location3').removeClass('loc-active');
        jQuery('#loc-2').show();
        jQuery('#loc-1').hide(); 
        jQuery('#loc-3').hide();
    });
    jQuery('.location3').click(function(){
        jQuery(this).addClass('loc-active');
        jQuery('.location1').removeClass('loc-active');
        jQuery('.location2').removeClass('loc-active');
        jQuery('#loc-3').show();
        jQuery('#loc-1').hide(); 
        jQuery('#loc-2').hide();
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
        
        if(first_visit == "No")
        {
            jQuery('#last-visit').show();       
        }
        else
        {
            jQuery('#last-visit').hide();              
        }
    });  

});
