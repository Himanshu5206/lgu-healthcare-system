<?php include 'server/server.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Supplies - Masili Health Service System</title>
</head>
<body>
	<div class="wrapper">
		<?php include 'templates/main-header.php' ?>
		<?php include 'templates/sidebar.php' ?>

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="row mt--2">
						<div class="col-md-12">
							<?php include 'templates/loading_screen.php' ?>
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">
											<h1>
                                            <a href="appointment.php" class="text-primary">APPOINTMENT</a> > <strong class="text-default">CREATE</strong></h1>
										</div>
									</div>
								</div>
								<div class="card-body">
                                    <form method="POST" action="appointment_add_record.php">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputAppointmentType">Appointment Type</label>
                                                    <select class="form-control" id="inputAppointmentType" name="appointment_type">
                                                        <option>CHECK-UP</option>
                                                        <option>VACCINATION</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputResidentName">Resident Name</label>
                                                    <input type="text" class="form-control" id="inputResidentName" name="resident_name">
                                                    <small class="form-text text-muted">ex: DELA CRUZ, JUAN V.</small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAge">Age</label>
                                                    <input type="text" class="form-control" id="inputAge" name="age">
                                                </div>
                                                <div class="form-group">
                                                    <label for="concern">Concern</label>
                                                    <textarea class="form-control" id="concern" rows="4" name="concern"></textarea>
                                                    <small class="form-text text-muted">ex: continuous headache for 2 days, vomitting</small>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary mt-2 mb-2 mr-1">Create</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                    </form>
								</div>
								<!-- end of medicine table -->
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			
		</div>
	</div>
	
	<?php include 'templates/footer.php' ?>
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>
</body>
</html>