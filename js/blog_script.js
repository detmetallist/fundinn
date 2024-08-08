$(document).ready(function() {
	var mob_menu_active=0;
	$(".mobile_menu").click(function(){
		if(mob_menu_active==0){
			mob_menu_active=1;
			$(".left_sidebar").animate({'left':'0px'},300);
		} else {
			mob_menu_active=0;
			$(".left_sidebar").animate({'left':'-1440px'},300);
		}
	});
});