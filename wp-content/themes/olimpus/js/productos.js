jQuery(document).ready(function( $ ) {
	//console.log(category);
	//console.log(pagedata.in_category);
	if(pagedata.in_category) {
		if(pagedata.current_category.length > 0) {
			var cat = pagedata.current_category[0].cat_ID;
			//var cat = pagedata.current_category;
			console.log(cat);
		}
	}
	
	
	var site_url = pagedata.site_url;
	console.log(site_url)
	$('#aluminio-filter select').change(function() {
		console.log('select changed');

		var $tag = $(this).val();
		if(cat) {
			window.location.href = site_url + '?cat=' + cat + '&tag=' + $tag;
		} else {
			window.location.href = site_url + '?tag=' + $tag;
		}
		
	});

});