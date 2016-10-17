$(document).ready(function(){
	$.emajl();
	$("table.zebra tbody tr:nth-child(odd)").css("background-color","#F0F0F0");
});
jQuery.extend({	// stare metode prebacene u $.namespace
emajl: function(){  // <a class="emajl" href="user_nameATdomain">tekst linka</a> >>> mailto:user_name@domain
$("a.emajl").each(function(){
$(this).attr("href",$(this).attr("href").replace(/([^A]+)AT([\w]+)/,"mailto:$1@$2"));
if(!$(this).text()) $(this).text($(this).attr("href").substr(7));
});},
})
