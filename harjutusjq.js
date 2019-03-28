$(document).ready(() => {
	//Pushing the buttons 
$('button').bind('click',function (){
  $('<div> Testime koos! </div>').appendTo('body');
  }); 
 $('button').bind('dblclick',function (){
  $('<div> Testime koos topelt! </div>').appendTo('body');
  }); 

// To the top 
$(a[href='#top']).click(function() {
  $("html, body").animate({ scrollTop: 0 }, 'slow');
  return false;
});

//Disable right-click menu
$(document).contextmenu(function() {
    return false;
});
});
