<?php include 'server/server.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Announcement - Masili Health Service System</title>
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
                                            <a href="announcement.php" class="text-primary">ANNOUNCEMENT</a> > <strong class="text-default">CREATE</strong></h1>
										</div>
									</div>
								</div>
								<div class="card-body">
                                    <form method="POST" action="announcement_add_record.php" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" accept="image/*">
                                                </div>
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input class="form-control" id="title" name="title">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputCategory">Category</label>
                                                    <select class="form-control" id="inputCategory" name="category">
                                                        <option selected="selected" disabled="disabled">--</option>
                                                        <option value="ANNOUNCEMENT">ANNOUNCEMENT</option>
                                                        <option value="REMINDER">REMINDER</option>
                                                        <option value="BRGY EVENT">BARANGAY EVENT</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea class="form-control" id="description" rows="10" name="description"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary mt-2 mb-2 mr-1" name="submit">Create</button>
                                                </div>
                                            </div>
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