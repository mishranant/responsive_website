$("#menu-toggle").click(function(e) {
	e.preventDefault();
	$("#sidebar-wrapper").toggleClass("toggled");
	$("#sidebar-wrapper-group").toggleClass("toggled");
	$("#page-content-wrapper").toggleClass("toggled");
	$("#page-content-wrapper-group").toggleClass("toggled");
	$("#menu-toggle").toggleClass("toggled");
});

$(".sidebar-nav li a.self-contained").click(function(e) {
	e.preventDefault();
	var clickedhref = $(this).attr('href');
	$('html, body').animate({
		scrollTop: $(clickedhref).offset().top
	}, 1000);
});