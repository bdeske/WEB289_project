function stopLink(element) {
	
    $(element).attr('target', '_blank');

}

function youAreHere(element, element2){
	var pathname = $(location).attr('pathname');
	var curPage = pathname.substring(pathname.lastIndexOf('/')+1);;
	
	$(element).each(function(){
		if(curPage == $(this).attr('href')){
			$(this).attr('id', 'current');
			$(this).addClass(element2);
		} else if(curPage == ''){
			$('a:first').attr('id', 'current');
		} // end else if
	}); // end anony fcn
}


function table(element1, element2, tName) {
	$('a').parent('td').parent('tr').click(function(){
		var wholeLink = $(this).children('td').children('a').attr('href');
		window.open(wholeLink);
	});
	
	$('a').parent('td').parent('tr').children('td').css('text-decoration', 'underline');
	$('a').parent('td').parent('tr').children('td').css('color', 'blue');
	$('a').parent('td').parent('tr').css('cursor', 'pointer');
	$('a').parent('td').parent('tr:even').addClass(element1);
	$('a').parent('td').parent('tr:odd').addClass(element2);
	$(tName).hover(highlight, highlight);
	
	
}
function highlight(){
	$(this).toggleClass('rowOver');

}


function loadImages(element){
	var galleryImages = [];
	var loadThese = $(element);
	for(i=0; i<loadThese.length; i++){
		galleryImages[i] = new Image();
		galleryImages[i].src = loadThese[i];
		}
} // end loadImages

function displayFirst(element, element2){
		var firstImagePath = $(element).attr('href');
		var caption = $(element).attr('title');
		var firstImage = $('<img id="galleryBig" src="' + firstImagePath + '" alt="' + caption + '">');
		$(element2).after(firstImage);
		$('#galleryBig').after('<div id="caption">' + caption + '</div>');
		$('#caption').fadeIn(caption);
}

function gallery(element, element2){
	$(element).click(function(evt){
		evt.preventDefault();
		oldImage = $(element2).next();
		var imgPath = $(this).attr('href');
		var newImage = $('<img id="galleryBig" src="' + imgPath + '">');
		alt = $(this).attr('title');
		$('#caption').remove();
		newImage.hide();
		$(element2).after(newImage);
		$('#galleryBig').after('<div id="caption">' + alt + '</div>');
		$('#caption').hide().fadeIn();
		newImage.fadeIn();
		oldImage.remove();		
	}); //end anonymous fcn

} //end gallery 

function autoFocus(field){
	$(field).focus();
}

function autoClear(){

var elements = $('input[type="text"], textarea');


elements.focus(function(){
		var defVal = $(this).prop('defaultValue');
		var curVal = $(this).val();
		if(defVal == curVal){
			$(this).val('');
		}
	}); // end anonymous function
	

elements.blur(function(){
		if($(this).val() == ''){
			$(this).val($(this).prop('defaultValue'));
		}
	}); // end anonymous function
}

function validator(element, element2){
	var pathname = $(location).attr('pathname');
	var curPage = pathname.substring(pathname.lastIndexOf('/')+1);;
	
	if(curPage == element){
$(element2).validate({
			rules: {
				fullname: {
					required: true
					
				},
				
				
				emailaddy: {
					required: true,
					email: true
				},
				
				sightingdate: "required",
				
				
			},
			messages: {
				fullname: "You Must enter your full name",
				
				
				emailaddy: 
					"Please provide a valid email address",
					
				sightingdate: "Please choose a sighting date",
				
				
				
			}
		});
}
}




function validators(element, element2){
var pathname = $(location).attr('pathname');
	var curPage = pathname.substring(pathname.lastIndexOf('/')+1);;
	
	if(curPage == element){
$(element2).validate({
			rules: {
				
				email: {
					required: true,
					email: true
				},
				
				date: "required",
				
				
			},
			messages: {
				

				email: 
					"Please provide a valid email address",
					
				date: "Please choose a treatment date"
				
				
				
			}
		});
}
}

function pickDate(element) {

$(element).datepicker({
	
	maxDate: '0'

});


// Hover states on the static widgets
$( element, "#icons li" ).hover(
	function() {
		$(element, "#icons li" ).addClass( "ui-state-hover" );
	},
	function() {
		$(element, "#icons li" ).removeClass( "ui-state-hover" );
	}
);

}


function accordions(element){
$(element).accordion({
	collapsible: true,
	active: false,
	heightStyle: "content"
});
}

function searchMovies(element1, animalName){
	var pathname = $(location).attr('pathname');
	var curPage = pathname.substring(pathname.lastIndexOf('/')+1);;
	
	
		if(curPage == element1){
			
		var api = 'mv63eupbf36bpmmw4d8mpkn5'
		var animal = animalName;
		var moviesURL = 'http://api.rottentomatoes.com/api/public/v1.0/movies.json';
		moviesURL += '?apikey=' + api;
		moviesURL += '&q=' + animal;
		moviesURL += '&callback=?';
		$.getJSON(moviesURL, displayResults);
	
			
			
		}
		
} //end function

function displayResults(serverResults) {
	var total = serverResults.total;
	var movies = serverResults.movies;
	var count = 1;
	$.each(movies, function(index, property) {

		var results = '<div id="review"></div>';
		var title = '<h1>' + '#' + count  + ' ' + property.title + '</h1>';
		var synopsis = '<p>' + property.synopsis + '</p></div>';
		var img = '<img src="' + property.posters.thumbnail + '" ';
		var movieDetails = results + total + ' movies found' + title + img + synopsis;
		$('div').children('div').children('p').append(movieDetails);
		count++;
		// paginate(movies);
	}); // end each function
} //end function

		
// function previous(){  
  
//     new_page = parseInt($('#current_page').val()) - 1;  
//     //if there is an item before the current active link run the function  
//     if($('.active_page').prev('.page_link').length==true){  
//         go_to_page(new_page);  
//     }  
  
// }  
  
// function next(){  
//     new_page = parseInt($('#current_page').val()) + 1;  
//     //if there is an item after the current active link run the function  
//     if($('.active_page').next('.page_link').length==true){  
//         go_to_page(new_page);  
//     }  
  
// }  

// function go_to_page(page_num){  
//     //get the number of items shown per page  
//     var show_per_page = parseInt($('#show_per_page').val());  
  
//     //get the element number where to start the slice from  
//     start_from = page_num * show_per_page;  
  
//     //get the element number where to end the slice  
//     end_on = start_from + show_per_page;  
  
//     //hide all children elements of movies div, get specific items and show them  
//     $('div').children('div').children('p').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');  
  
//     /*get the page link that has longdesc attribute of the current page and add active_page class to it 
//     and remove that class from previously active page link*/  
//    $('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');  
  
//     //update the current page input field  
//     $('#current_page').val(page_num);  
// }


// function paginate(element) {

//     //how much items per page to show  
//     var show_per_page = 30;  
//     //getting the amount of elements inside movies div  
//     var number_of_items = $('div').children('div').children('p').children().size();  
//     //calculate the number of pages we are going to have  
//     var number_of_pages = Math.ceil(number_of_items/show_per_page);  
  
//     //set the value of our hidden input fields  
//     $('#current_page').val(0);  
//     $('#show_per_page').val(show_per_page);  
  
//     //now when we got all we need for the navigation let's make it '  
  
//     /* 
//     what are we going to have in the navigation? 
//         - link to previous page 
//         - links to specific pages 
//         - link to next page 
//     */  
//     var navigation_html = '<a class="previous_link" href="javascript:previous();">Prev</a>';  
//     var current_link = 0;  
//     while(number_of_pages > current_link){  
//         navigation_html += '<a class="page_link" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';  
//         current_link++;  
//     }  
//     navigation_html += '<a class="next_link" href="javascript:next();">Next</a>';  

//     $('#page_navigation').html(navigation_html);  
  
//     //add active_page class to the first page link  
//     $('#page_navigation .page_link:first').addClass('active_page'); 









//     //hide all the elements inside movies div  
//     $('div').children('div').children('p').children().css('display', 'none');  
  
//     //and show the first n (show_per_page) elements  
//     $('div').children('div').children('p').children().slice(0, show_per_page).css('display', 'block'); 
// }



