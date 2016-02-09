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