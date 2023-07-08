 <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                    	 <h1 class="text-uppercase text-white font-weight-bold">Welcome To Hotel Destiny</h1>
                        <hr class="divider my-4" />
                    </div>
                   <!-- <div class="col-lg-10 align-self-end mb-4">-->
									<div class="glass">

                    				<form action="index.php?page=list" id="filter" method="POST">
										<div class="row">
											<div class="col">
												<input type="text" class="form-control datepicker" name="date_in" placeholder="Arival" aria-label="Arival" required>
											</div>
											<div class="col">
												<input type="text" class="form-control datepicker" name="date_out" placeholder="Departure" aria-label="Departure">
											</div>
											<!-- test-->
                    					<!--	<div class="col-md-3">
                    							<label for="">Arival</label>
                    							<input type="text" class="form-control datepicker" name="date_in" autocomplete="off" required>
                    						</div>
                    						<div class="col-md-3">
                    							<label for="">Departure</label>
                    							<input type="text" class="form-control datepicker" name="date_out" autocomplete="off" required>
                    						</div> -->
                    						<div class="col">
                    							<button class="btn btn-primary">Check Availability</button>
                    						</div>
                    					</div>
                    				</form>

									</div>
                    			</div>
                    		</div>
			</div>
        </header>
<!--	<section class="page-section">
        </section>-->
	  <!--<div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                	<?php 
                	include'admin/db_connect.php';
                	$qry = $conn->query("SELECT * FROM  room_categories order by rand() ");
                	while($row = $qry->fetch_assoc()):
                	?>
                  <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="#">
                            <img class="img-fluid" src="assets/img/<?php echo $row['cover_img'] ?>" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-30"><?php echo "$ ".number_format($row['price'],2) ?> per day</div>
                                <div class="project-name"><?php echo $row['name'] ?></div>
                            </div>
                        </a>
                    </div>
                	<?php endwhile; ?>

                </div>
            </div>
        </div>-->
