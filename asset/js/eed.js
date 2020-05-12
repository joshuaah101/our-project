$(document).ready(function(){
	$("#user-login").on("submit", function(eed){
		eed.preventDefault();
		var formData = $(this).serialize();
		
		$.ajax({
			type : "POST",
			data : formData,
			cache : false,
			url : "ajax-files/user-login-api.php",
			beforeSend : function(){
				console.log("Ajax online");
			},
			success : function(xhr){
				console.log(xhr);
				var req = $.trim(xhr);
				if(req == 200){
					$(".notify").fadeIn(2000).html("<pre class='small notify-success text-center'>Login Successful</pre>");
					setTimeout(function(){
						location.href = "admin.php";
					}, 3000);
					$("#user-login").trigger("reset");
				}else if(req == 404){
					$(".notify").fadeIn(2000).html("<pre class='small notify-error text-center'>Login Failed, try again</pre>");
					setTimeout(function(){
						location.href = "index.php";
					}, 3000);
					$("#user-login").trigger("reset");
				};
			},
			error : function(error){
				console.log(error);
			}
		})
	});
});