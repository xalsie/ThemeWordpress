function ajaxifyLinks(){
	$('.page-numbers').click(function(e){
		e.preventDefault();

		const currentPage = Number($('.current').html());
		var page;

		if($(this).hasClass('next')){
			page = currentPage + 1;
		}
		else if($(this).hasClass('prev')){
			page = currentPage - 1;
		}
		else{
			page = $(this).html()
		}

		const nextState = {};
		const nextTitle = 'Blog page - ' + page;
		const nextURL = $(this).attr('href');
		loadPage(page, nextState, nextTitle, nextURL);
	})
}

function loadPage(page, nextState, nextTitle, nextURL){
	$.ajax({
		url: esgi.ajaxURL,
		type: 'POST',
		data: {
			'action': 'load_posts',
			'page' : page,
			'base' : esgi.baseURL
		}
	}).done(function(reponse){
		$('#list-wrapper').html(reponse)

		ajaxifyLinks()
		window.history.replaceState(nextState, nextTitle, nextURL);
	})
}

$(document).ready(function(){
	ajaxifyLinks();

	$('.menu-toggle').click(function () {
		$('.main-menu-container').slideToggle();
		$('#site-header').toggleClass('active');
		$('.burger').toggleClass('active');
	});
})
