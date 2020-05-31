$(document).ready(function(){
	//user login
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

//create user
	$("#add-user").on("submit", function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$("#submit-add-user").addClass("disabled");
		$.ajax({
			type : "POST",
			data : formData,
			cache : false,
			url : "../ajax-files/create-user-api.php",
			beforeSend : function(){
				console.log("Adding User");
			},
			success : function(xhr){
				console.log(xhr);
				var req = $.trim(xhr);
				if(req == 502){
					$(".add-user-notify").fadeIn(2000).html("<pre class='small notify-success text-center'><i class='spinner-border' style='width: 1rem; height: 1rem;'></i> Authenticating...</pre>");
					setTimeout(function(){
						$(".add-user-notify").html("<pre class='small notify-error text-center'><i class='fas fa-thumbs-down'></i> Already exist!</pre>");
						location.href = "?manage-instructor=add";
					}, 4000);
					$("#add-user").trigger("reset");
				}else if(req == 200){
					$(".add-user-notify").fadeIn(2000).html("<pre class='small notify-success text-center'><i class='spinner-border' style='width: 1rem; height: 1rem;'></i> Authenticating...</pre>");
					setTimeout(function(){
						$(".add-user-notify").html("<pre class='small notify-success text-center'><i class='fas fa-thumbs-up'></i>Added Successfully!</pre>");
						location.href = "?manage-instructor=add";
					}, 4000);
					$("#add-user").trigger("reset");
				}else if(req == 404){
					$(".add-user-notify").fadeIn(2000).html("<pre class='small notify-success text-center'> <i class='spinner-border' style='width: 1rem; height: 1rem;'></i> Authenticating...</pre>");
					setTimeout(function(){
						$(".add-user-notify").html("<pre class='small notify-error text-center'><i class='fas fa-thumbs-down'></i> Failed, try again</pre>");
						location.href = "?manage-instructor=add";
					}, 4000);
					$("#add-user").trigger("reset");
				};
			},
			error : function(error){
				console.log(error);
			}
		})
	});

$("#update-user").on("submit", function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$("#submit-update-user").addClass("disabled");
		$.ajax({
			type : "POST",
			data : formData,
			cache : false,
			url : "../ajax-files/update-user-api.php",
			beforeSend : function(){
				console.log("Updating User");
			},
			success : function(xhr){
				console.log(xhr);
				var req = $.trim(xhr);
				if(req == 200){
					$(".update-user-notify").fadeIn(2000).html("<pre class='small notify-success text-center'><i class='spinner-border' style='width: 1rem; height: 1rem;'></i> Checking Status, Please Wait !!...</pre>");
					setTimeout(function(){
						$(".update-user-notify").html("<pre class='small notify-success text-center'><i class='fas fa-thumbs-up'></i> User Details Updated!</pre>");
					}, 4000);
					$("#update-user").trigger("reset");
				}else if(req == 300){
					$(".update-user-notify").fadeIn(2000).html("<pre class='small notify-success text-center'> <i class='spinner-border' style='width: 1rem; height: 1rem;'></i> Checking Status, Please Wait !!...</pre>");
					setTimeout(function(){
						$(".update-user-notify").html("<pre class='small notify-error text-center'><i class='fas fa-thumbs-down'></i> An Error Occurred, try again</pre>");
					}, 4000);
					$("#update-user").trigger("reset");
				};
			},
			error : function(error){
				console.log(error);
			}
		})
	});

	$("#change-password-form").on("submit", function(form){
		form.preventDefault();
		var data = $(this).serialize();
		$("#change-password-btn").addClass("disabled");
		$.ajax({
			url : "../ajax-files/change-password-api.php",
			data : data,
			cache : false,
			type : 'POST',
			beforeSend : function(){
				console.log("Verifying Data");
			},
			success : function(xhr){
				console.log(xhr);
				var res = $.trim(xhr);
				if(res == 200){
					$(".change-password-notify").fadeIn(2000).html("<pre class='small notify-success text-center'><i class='spinner-border' style='width: 1rem; height: 1rem;'></i> Checking Status, Please Wait !!...</pre>");
					setTimeout(function(){
						$(".change-password-notify").html("<pre class='small notify-success text-center'><i class='fas fa-thumbs-up'></i> Password changed successfully!</pre>");
						location.href = "?profile";
					}, 4000);
					$("#change-password-form").trigger("reset");
				}else if(res == 300){
					$(".change-password-notify").fadeIn(2000).html("<pre class='small notify-success text-center'><i class='spinner-border' style='width: 1rem; height: 1rem;'></i> Checking Status, Please Wait !!...</pre>");
					setTimeout(function(){
						$(".change-password-notify").html("<pre class='small notify-error text-center'><i class='fas fa-thumbs-down'></i> Wrong Password!</pre>");
						location.href = "?change-password";
					}, 4000);
					$("#change-password-form").trigger("reset");
				}else if(res == 400){
					$(".change-password-notify").fadeIn(2000).html("<pre class='small notify-success text-center'><i class='spinner-border' style='width: 1rem; height: 1rem;'></i> Checking Status, Please Wait !!...</pre>");
					setTimeout(function(){
						$(".change-password-notify").html("<pre class='small notify-error text-center'><i class='fas fa-thumbs-down'></i> Error! passwords does not match</pre>");
						location.href = "?change-password";
					}, 4000);
					$("#change-password-form").trigger("reset");
				}else{

				}
			},
			error : function(error){
				console.log(error);
			}
		});
	});
});