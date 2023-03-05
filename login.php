<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/header.php' ?>
	<title>Login -  Barangay Management System</title>

</head>
<body class="login">
	<?php include 'templates/loading_screen.php' ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper wrapper-login">
					<section class="vh-100">
						<div class="container py-5 h-100">
							<div class="row d-flex justify-content-center align-items-center h-100">
								<div class="col col-xl-10">
									<div class="card" style="border-radius: 1rem;">
										<div class="row g-0">
											<div class="col-md-12  d-flex align-items-center">
												<div class="card-body p-4 p-lg-5 text-black">
													<form method="POST" action="model/login.php">
														<!-- login as member -->
														<div class="mb-3 pb-1 text-center">
															<i class="fas fa-briefcase-medical fa-2x me-3 mr-2 text-primary" ></i>
															<span class="h1 fw-bold mb-0 ">Masili Health Service System</span>
														</div>
														<!-- <h5 class="fw-normal mb-3 pb-3 text-danger" style="letter-spacing: 1px;">Invalid Login. Try again!</h5> -->
														<div class="form-outline mb-4">
															<input name="username" class="form-control form-control-lg" />
															<label class="form-label" for="username">Username</label>
														</div>
														<div class="form-outline mb-4">
															<input type="password" name="password" class="form-control form-control-lg" />
															<label class="form-label" for="password">Password</label>
														</div>
														<div class="pt-1 mb-4">
															<button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
														</div>

														<!-- spacer -->
														<hr class="my-4">

														<!-- login as resident -->
														<button class="btn btn-lg btn-block btn-primary" type="submit">
															<i class="fas fa-user me-2 mr-2"></i> Login as Resident
														</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<?php include 'templates/footer.php' ?>
</body>
</html>