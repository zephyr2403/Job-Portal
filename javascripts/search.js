$("document").ready(function(){

$('.dropdown').change(function(evt){
 var category =$('.dropdown option:selected').text().toLowerCase().trim();

 if(category==='all')
 {
 console.log(category)
   $('.segment').each(function(){
     $(this).removeClass("animate fadeOut hiddenz")
     $(this).addClass("animated fadeIn display")

   })
 }
 else{
 $('.segment').each(function(){
   var jcat = $(this).find('.cat').text().toLowerCase().trim();
    if(category===jcat)
    {
      $(this).removeClass("animated fadeOut hiddenz")
      $(this).addClass("animated fadeIn display")
      console.log("Equal")
    }
    else {
      $(this).removeClass("animated fadeIn display")
      $(this).addClass("animated fadeOut hiddenz")
      //console.log(category);
    }
 })//each
}
})//dropdown change

});//document ready
