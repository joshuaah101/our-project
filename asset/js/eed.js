$(document).ready(function(){
	$("#user-login").on("submit", function(eed){
		eed.preventDefault();
		var formData = $(this).serialize();
		$("#submit").addClass("disabled");
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
					$(".notify").fadeIn(2000).html("<pre class='small notify-success text-center'><i class='spinner-border' style='width: 1rem; height: 1rem;'></i> Authenticating...</pre>");
					setTimeout(function(){
						$(".notify").html("<pre class='small notify-success text-center'><i class='fas fa-thumbs-up'></i> Login Successful</pre>");
						location.href = "redirect.php";
					}, 4000);
					$("#user-login").trigger("reset");
				}else if(req == 404){
					$(".notify").fadeIn(2000).html("<pre class='small notify-success text-center'> <i class='spinner-border' style='width: 1rem; height: 1rem;'></i> Authenticating...</pre>");
					setTimeout(function(){
						$(".notify").html("<pre class='small notify-error text-center'><i class='fas fa-thumbs-down'></i> Login Failed, try again</pre>");
						location.href = "index.php";
					}, 4000);
					$("#user-login").trigger("reset");
				};
			},
			error : function(error){
				console.log(error);
			}
		})
	});
});