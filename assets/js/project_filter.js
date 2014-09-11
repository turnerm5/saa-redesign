jQuery(document).ready(function(){

	var filterOnLoad = document.location.hash ? '.' + (document.location.hash).replace('#','') : 'all';

	// $('#Container').mixItUp();

	$('#Container').mixItUp({
	  load: {
	    filter: filterOnLoad
	  }
	});

	$('#masonry ul').masonry({
		itemSelector: '.post-box',
        columnWidth: '.post-box',
	});
});