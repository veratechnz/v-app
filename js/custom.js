// My Custom JS


//data is already a preset object via the json api. 
function listPosts(data){

	var output = '<form class="ui-filterable"><input id="searchposts" data-type="search"></form>';

		//'searchposts' links the unordered list to the forms id
		//+= means the previous 'output' variable content is retained. 
		output += '<ul data-role="listview" data-filter="true" data-input="#searchposts">';

		//Now we will go through each list element using jQuery .each
		//each post will be scanned by the function key value.
		$.each(data.posts, function(key, val){
			output += '<li>';
			output += '<a href="#blogpost" onclick = showPost(' + val.id + ')">';
			output += '<h3>' + val.title + '</h3>';
			//Here we shorten the paragraph to 60 characters. 
			var str = val.excerpt;
			var paraInfo = str.slice(0, 60);
			output += '<p>' + paraInfo + '</p>';
			output += '</a>';
			output += '</li>';
		});//Go through each post

		output += '</ul>';//Close the unordered list. 
		$('#postList').html(output);

}//listPosts ends