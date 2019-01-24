 
			   $(document).ready(function() {
				   
				  // $('.second__scrin__icontext').css("display", "none");
				$('.second__scrin__iconrow .second__scrin__iconbox').hover(function () {	
					
					
	 $(this).toggleClass("hoverpoint");
					
				                $.ajax({   
                    type: "POST",   
                    url: "text/text.php",   
                     data: "id="+this.id, 
				   beforeSend: function() {
$('.second__scrin__icontext').html('<img src="i/loading1.gif" />');
},
                   success: function(html){
					   
				
						
						
                        $(".second__scrin__icontext").html(html);
						  
						
						 
                    }   
                });  
					
					
		
	}); 
	}); 
				   
 
			   $(document).ready(function() {
				   
				 
				$('.gallery__grid__box').hover(function () {	
					
					
	 $(this).toggleClass("gallery__grid__boxnogrd");
					
  
					
					
		
	}); 
	}); 
		
 
			   $(document).ready(function() {
				   
				 
				$('.gallery__grid__firstbox').hover(function () {	
					
					
	 $(this).toggleClass("gallery__grid__boxnogrd");
					
  
					
					
		
	}); 
	}); 


$(document).ready(function(){
	$("#menu").on("click","a", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
		
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1500);
	});
});


$(document).ready(function(){
	
	 $('.fboot').click(function(){ 
		 
		 	var name = $("#name").val();
			var tell= $("#tell").val();
		 
		 if(name=="Ваше имя" ){
			 $(".error").html("<span>Заполните все поля. Ваше имя, телефон, что везёте</span> " );
			 
			 return false;
		 }
		  if(tell=="Ваш телефон" ){
			 $(".error").html("<span>Заполните все поля. Ваше имя, телефон, что везёте</span> " );
			 
			 return false;
		 }
		 
		 
		 
		 
	});
	
	
});

$(document).ready(function(){
	
	 $('.futboot').click(function(){ 
		 
		 	var name = $("#fname").val();
			var tell= $("#ftell").val();
		 
		 if(name=="Ваше имя" ){
			 $(".error").html("<span>Заполните все поля. Ваше имя, телефон, что везёте</span> " );
			 
			 return false;
		 }
		  if(tell=="Ваш телефон" ){
			 $(".error").html("<span>Заполните все поля. Ваше имя, телефон, что везёте</span> " );
			 
			 return false;
		 }
		 
		 
		 
		 
	});
	
	
});





