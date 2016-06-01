	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#userSignUpForm").validate({
			rules: {
				first_name: {
					required: true,
 					minlength: 3
				},
				last_name: {
					required: true,
 					minlength: 3
				},
				username: {
					required: true,
					minlength: 2
				},
				
				email: {
					required: true,
					email: true
				},
				password: {
					required: true,
					minlength: 5
				},
				cpassword: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				contact_number: {
					required: true,
					digits: true,
					maxlength: 10
					
				},
				googleLocation: {
					required: true,
				},
  			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				cpassword: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				email: "Please enter a valid email address",
				contact_number: {
					required: "Please provide a Phone Number",
					minlength: "Your Phone Number must be at least 10 digits long",
				},
				googleLocation: "Please enter a Address / location",
			}
		});

	 
	});
 