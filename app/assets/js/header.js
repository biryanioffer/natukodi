$(document).ready(function() {
	/* tootl tip starts */
	$('[data-toggle="tooltip"]').tooltip(); 
	/*tool tip ends */
	$("#modify-search").click(function() {
	$(".offers-menu-list").fadeIn(1000);
	});
	$("#key-search").click(function() {
	$(".offers-menu-list").slideUp(300);
	});

	$("#mobile-menu").click(function(){
	$(".mobile-menu-list").slideToggle("slow");
	});
	$(".myaccount-wrap").hide();
	$(".myaccount").click(function() {
	$("div.myaccount-wrap").slideDown(1000);

	});
	
	
	 /* selectric js for select box starts */

	$(function(){
		$('.select').selectric();

		$('.customOptions').selectric({
			optionsItemBuilder: function(itemData, element, index){
				return element.val().length ? '<span class="ico ico-' + element.val() +  '"></span>' + itemData.text : itemData.text;
			}
		});

		$('select').on('selectric-before-init');

	});
	
		$(function() {
	$("#start-date, #dob").datepicker({
	changeMonth: true,
	changeYear: true
	});
	$("#end-date").datepicker({
	changeMonth: true,
	changeYear: true
	});
	});

    	$("div.offers-menu-list ul li").click(function() {
	$("div.offers-menu-list ul li").addClass("active-cat");
	$("div.offers-menu-list ul li").removeClass("active-cat");
	$(this).addClass("active-cat");

	
	});
  var allPanels = $('.accordion > .inner').hide();
  

  $('.accordion > h2 > a').click(function() {
     $(this).slideDown(500);
    $(this).toggleClass('selected');
  
 
    $(this).parent().next().slideToggle(function() { 
  

      });

   
    return false;
  });
  
  
  
  /* selectric js for select box starts */

	$(function(){
		$('.select').selectric();

		$('.customOptions').selectric({
			optionsItemBuilder: function(itemData, element, index){
				return element.val().length ? '<span class="ico ico-' + element.val() +  '"></span>' + itemData.text : itemData.text;
			}
		});

		$('select').on('selectric-before-init');

	});
	
	
	/* selectric js for select box ends */
  
  

});



$( document ).ready(function() {
	
	
	$(".share-btn").click(function(){
	$("ul.share-buttons").fadeToggle("medium").css('cursor', 'pointer');
		
	});
	

	
	
	
});

/*global search home&results */
$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
    	e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
});
/*resutls grid */



$(document).ready(function(){
	$("#city-filter").click(function(){
	$("#sel-city").slideToggle("slow").css('cursor', 'pointer');
	$(".block input[type='radio']").slideToggle("slow").css('cursor', 'pointer');
	
	});
	

	$("#area-filter").click(function(){
	$("#sel-area").slideToggle("slow").css('cursor', 'pointer');
	});
	$("#category-filter").click(function(){
	$("#sel-category-filter").slideToggle("slow").css('cursor', 'pointer');
	});
	$("#offers-filter").click(function(){
	$("#sel-offers").slideToggle("slow").css('cursor', 'pointer');
	$(".offer-percent-slider").slideToggle("slow").css('cursor', 'pointer');
	$(".offers-label-cont").slideToggle("slow").css('cursor', 'pointer');
	
	
	});
	$("#loc-filter").click(function(){
	$("#sel-loc").slideToggle("slow").css('cursor', 'pointer');
	});
	
	


	
});
$( document ).ready(function() {
	
	
	/*$(".container-fluid.results .city-sel-wrap").hide();*/
	$(".modify-search").click(function() {
	
	$(".city-sel-wrap").slideToggle(250);

	

	$(this).toggleClass("active-cat");
	

	
	});
	

	
	
	
});

/*login js */
 $(document).ready(function(){

  $("#forgot-credentials-form-panel").hide();
	$("#forgot-credentials").click(function(){
	$("#loginform-panel").hide();
	$("#forgot-credentials-form-panel").show();
    });
	
	$("#forgot-freeadvertiser-credentials").click(function(){
	$("#loginform-panel").hide();
	$("#forgot-credentials-form-panel").show();
    });
	
	$("#forgot-paidadvertiser-credentials").click(function(){
	$("#loginform-panel").hide();
	$("#forgot-credentials-form-panel").show();
    });
});

/*advertiser signup */


$(document).ready(function(){
	/* tootl tip starts */
	$('[data-toggle="tooltip"]').tooltip(); 
	/*tool tip ends */
	/* calendar starts */  
	$(function() {
	$("#offer-start-date").datepicker({
	changeMonth: true,
	changeYear: true
	});
	$("#offer-end-date").datepicker({
	changeMonth: true,
	changeYear: true
	});
	});
	/* calendar ends */
	$("#vendor-category-lst").hide();
	$("#vendor-category-hd").click(function(){
	$("#vendor-category-lst").slideToggle("slow").css('cursor', 'pointer');
	});
	$("#vendor-category-lst .list-group li").click(function(){
	var test = $(this).html();
	$("#vendor-category-hd").html(test);
	$("#vendor-category-lst").hide();
	});
	
	
	$(".my-recharge-select").click(function(){
	
	$(".my-recharge-select-cont").slideToggle();
	});


});

$(document).ready(function () {
           $('.selectpicker').selectpicker();
         });
	

  $(document).ready(function(){
  
		 
		$(".stats-btn").click(function(){
		$(".ad-stats-wrap-row").slideToggle();
				
		});
	
		
	});

	
/*store manage ads*/
$(document).ready(function(){
	
	
	
	

 $('.select-offer .flat-rd').change(function(){
			 
           if(this.checked)
				{
					$('.flat-metrics').show();
					$('.upto-metrics').hide();
					$('.cashbk-metrics').hide();
					$('.buyofr-metrics').hide();
				}					
				
			});
			
$('.select-offer .upto-rd').change(function(){
			 
           if(this.checked)
				{
					$('.flat-metrics').hide();
					$('.upto-metrics').show();
					$('.cashbk-metrics').hide();
					$('.buyofr-metrics').hide();
				}					
				
			});
			
			
$('.select-offer .cashbk-rd').change(function(){
			 
           if(this.checked)
				{
					$('.flat-metrics').hide();
					$('.upto-metrics').hide();
					$('.cashbk-metrics').show();
					$('.buyofr-metrics').hide();
				}					
				
			});
			
			
$('.select-offer .buyofr-rd').change(function(){
			 
           if(this.checked)
				{
					$('.flat-metrics').hide();
					$('.upto-metrics').hide();
					$('.cashbk-metrics').hide();
					$('.buyofr-metrics').show();
				}					
				
			});
			
			
			
			
		
		});
		
		
		
		
		
		
		
		
		
		





