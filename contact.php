<?php
	require "includes/header.php";
?>

<main id="pg-main">
	<!--
		This sectain contain a form that viewers can use contact form
		Form contain five elements first name , last name, email, phone number and message
		And first four elements is short, so I choose to use Bootstrap class="col-md-6"
	-->
	<section id="featured-news">
		<h2>Contact us!</h2>
		<form id="form" class="row g-3">
			<div class="col-md-6">
				<label for="fname" class="form-label"><b>FIRST NAME:</b></label>
				<input class="form-control " type="text" id="fname" name="firstname">
			</div>

			<div class="col-md-6">
				<label for="lname" class="form-label"><b>LAST NAME:</b></label>
				<input class="form-control" type="text" id="lname" name="lastname">
			</div>

			<div class="col-md-6">
				<label for="email" class="form-label"><b>EMAIL:</b></label>
				<input class="form-control" type="text" id="email" name="email">
			</div>

			<div class="col-md-6">
				<label for="phone" class="form-label"><b>PHONE NUMBER:</b></label>
				<input class="form-control" type="text" id="phone" name="phone">
			</div>

			<div class="col-12">
				<label for="message" class="form-label"><b>MESSAGE:</b></label>
				<textarea class="form-control rounded-0" id="message" name="message"></textarea><br><br>
			</div>
			<button type="button" id="submit" class="btn btn-primary"><b>SUBMIT</b></button>
		</form>
	</section>
</main>

<?php
	require "includes/footer.php";
?>

<!--This website let me know structure of contact form
	URL: https://www.w3schools.com/howto/howto_css_contact_form.asp
	Arthur: getbootstrap.com
	Date accessed: 22-09-2021

	This website used to make form responsive
	https://getbootstrap.com/docs/5.1/forms/layout/
	Arthur: getbootstrap.com
	Date accessed: 22-09-2021

	This website used to make buttons responsive
	https://getbootstrap.com/docs/5.1/components/buttons/
	Arthur: getbootstrap.com
	Date accessed: 22-09-2021
-->