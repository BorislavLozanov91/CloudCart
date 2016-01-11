$(document).ready( function() {

	var base_url = 'http://localhost/cloudcart/public/';

	$('.findBttn').click(function() {
		html = '';

		var post = {};
		post.startPoint = $('.startPointField').val();
		post.endPoint = $('.endPointField').val();

		$.ajax({
		    url : 'findRoutes',
		    type: "POST",
		    data : post,
		    success: function(data)
		    {
				$('#ajaxContent').html('');
		    	if (data) {
		    		if (data.statusCode != 400) {
				    	$.each(JSON.parse(data.body), function(key, value) {
								value.full_route = value.full_route.replace(/,/g, ' - ');
					    		html += value.full_route+'<br/>';
						});
		    		}
					html += 'Status Code - '+data.statusCode+'<br/>';
					html += 'Response message - '+data.statusText+'<br/>';

					$('#ajaxContent').append(html);
				}
		    }
		});

	})

});