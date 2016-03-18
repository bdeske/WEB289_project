function youAreHere(element, element2){
	alert('help');
	var pathname = $(location).attr('pathname');
	var curPage = pathname.substring(pathname.lastIndexOf('/')+1);
	
	$(element).each(function(){

		if(curPage == $(this).attr('href')){
			$(this).attr('id', 'current');
			$(this).addClass(element2);
		} else if(curPage == ''){
			$('a:first').attr('id', 'current');
		} // end else if
	}); // end anony fcn
}

function validator(element, element2){
	var pathname = $(location).attr('pathname');
	var curPage = pathname.substring(pathname.lastIndexOf('/')+1);;
	
	if(curPage == element){
$(element2).validate({
			rules: {
				First_Name: {
					required: true
					
				},
				
				Last_Name: {
					required: true
					
				},
				
				Email: {
					required: true,
					email: true
				},
				
				Password: "required",
				
				
			},
			messages: {
				First_Name: "You Must enter your first name",
				
				Last_Name: "You Must enter your first name",
				
				
				Email: 
					"Please provide a valid email address",
					
				Password: "Please enter a password",
				
				
				
			}
		});
}
}