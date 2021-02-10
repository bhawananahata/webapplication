$(document).ready(function(){
  $(window).scroll(function(){
    if(this.scrollY > 20){
      $(".navbar").addClass("sticky");
      $(".goTop").fadeIn();
    }
    else{
      $(".navbar").removeClass("sticky");
      $(".goTop").fadeOut();
    }
  });

  $(".goTop").click(function(){scroll(0,0)});

  $('.menu-toggler').click(function(){
    $(this).toggleClass("active");
    $(".navbar-menu").toggleClass("active");
  });

  $(".works").magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery:{enabled:true}
  });
});

var images=[
	"images/1.jpg","images/2.jpg","images/3.jpg"];
	var num=0;
	function next(){
		var slider=document.getElementById("slider");
		num++;
		if(num>=images.length){
			num=0;
		}
		slider.src=images[num];
	}
	function prev(){
		var slider=document.getElementById("slider");
		num--;
		if(num<0){
			num=images.length-1;
		}
		slider.src=images[num];
	}

