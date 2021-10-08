
/**
 * 
 * @param {recebe o id da âncora} anchorid 
 */
function scrollToAnchor(anchorid){
    var aTag = $("a[name='"+ anchorid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

//menus que vão ser usado como âncora
$(".homemenu").click(function() {
    scrollToAnchor('home');
});
 
$(".servicesmenu").click(function() {
    scrollToAnchor('services');
});
 
$(".jobsmenu").click(function() {
    scrollToAnchor('jobs');
});
 
$(".aboutmenu").click(function() {
    scrollToAnchor('about');
});
 
$(".contactmenu").click(function() {
    scrollToAnchor('contact');
});