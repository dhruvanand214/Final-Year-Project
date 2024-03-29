<?php

include('db.php');


if ($_SESSION['ROLE'] == "admin") {

?>


	<div class="sidebar-container">
		<div class="sidemenu-container navbar-collapse collapse fixed-menu">
			<div id="remove-scroll" class="left-sidemenu">
				<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">

					<li class="sidebar-toggler-wrapper hide">
						<div class="sidebar-toggler">
							<span></span>
						</div>
					</li>


					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="award"></i>
							<span class="title">Departmental Clubs</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="event_manage.php" class="nav-link "> <span class="title">All Clubs</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="edit_gfg.php" class="nav-link "> <span class="title">Add in
										GFG</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="edit_mind-opt.php" class="nav-link "> <span class="title">Add
										in Mind Optimiser</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="edit_spark.php" class="nav-link "> <span class="title">Add in
										Spark</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="edit_knack.php" class="nav-link "> <span class="title">Add
										in Knack</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="user"></i>
							<span class="title">Faculty</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_faculty.php" class="nav-link "> <span class="title">All
										Faculty</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="add_faculty.php" class="nav-link "> <span class="title">Add
										Faculty</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"><i data-feather="users"></i>
							<span class="title">Student</span><span class="arrow"></span></a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_students.php" class="nav-link "> <span class="title">All
										Students</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="add_student.php" class="nav-link "> <span class="title">Add
										Student</span>
								</a>
							</li>

							<!-- <li class="nav-item">
										<a href="edit_student.html" class="nav-link "> <span class="title">Edit
												Student</span>
										</a>
									</li> -->
							<!-- <li class="nav-item">
										<a href="student_profile.html" class="nav-link "> <span class="title">About
												Student</span>
										</a>
									</li> -->
						</ul>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"><i data-feather="users"></i>
							<span class="title">Alumni</span><span class="arrow"></span></a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_alumni.php" class="nav-link "> <span class="title">All
										Alumni</span>
								</a>
							</li>

						</ul>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="archive"></i>
							<span class="title">Study Material</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_study_material.php" class="nav-link "> <span class="title">All Study
										Material</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="add_study_material.php" class="nav-link "> <span class="title">Add Study
										Material</span>
								</a>
							</li>

							<!-- <li class="nav-item">
										<a href="edit_library.html" class="nav-link "> <span class="title">Edit
												Study Material</span>
										</a>
									</li> -->
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"><i data-feather="book-open"></i>
							<span class="title">Subjects</span><span class="arrow"></span></a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="add_subject.php" class="nav-link "> <span class="title">Add
										Subjects</span>
								</a>
							</li>


							<li class="nav-item">
								<a href="add_marks.php" class="nav-link "> <span class="title">Add
										Marks</span>
								</a>
							</li>
							<!-- <li class="nav-item">
										<a href="student_profile.html" class="nav-link "> <span class="title">About
												Student</span>
										</a>
									</li> -->
						</ul>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="edit"></i>
							<span class="title">Forms</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_Forms.php" class="nav-link "> <span class="title">All
										Forms</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="add_Forms.php" class="nav-link "> <span class="title">Add
										Forms</span>
								</a>
							</li>

							<!-- <li class="nav-item">
										<a href="edit_Forms.html" class="nav-link "> <span class="title">Edit
												Forms</span>
										</a>
									</li> -->
						</ul>
					</li>




					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"><i data-feather="code"></i>
							<span class="title">Coding Section</span><span class="arrow"></span></a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="coding.php" class="nav-link "> <span class="title">Coding Problems</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="resources.php" class="nav-link "> <span class="title">Development Resources</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="add_resource.php" class="nav-link "> <span class="title">Add Development Resources</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="add_code.php" class="nav-link "> <span class="title">Add Problem</span>
								</a>
							</li>

						</ul>

					</li>





					<li class="nav-item">
						<a href="javascript:;" class="nav-link nav-toggle"> <i data-feather="calendar"></i>
							<span class="title">Departmental Assests</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item  ">
								<a href="departmental_events.php" class="nav-link "> <span class="title">Departmental Events</span>
								</a>
							</li>
							<li class="nav-item  ">
								<a href="add_dep_event.php" class="nav-link "> <span class="title">Add Departmental Events</span>
								</a>
							</li>
							<!-- <li class="nav-item  ">
								<a href="sign_up.html" class="nav-link "> <span class="title">Feedback Form</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="contact.html" class="nav-link "> <span class="title">Contact Details</span>
								</a>
							</li> -->

						</ul>
					</li>

				</ul>
			</div>
		</div>
	</div>
<?php } elseif ($_SESSION['ROLE'] == "faculty") { ?>
	<div class="sidebar-container">
		<div class="sidemenu-container navbar-collapse collapse fixed-menu">
			<div id="remove-scroll" class="left-sidemenu">
				<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">

					<li class="sidebar-toggler-wrapper hide">
						<div class="sidebar-toggler">
							<span></span>
						</div>
					</li>


					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="award"></i>
							<span class="title">Departmental Clubs</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="event_manage.php" class="nav-link "> <span class="title">All Clubs</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="edit_gfg.php" class="nav-link "> <span class="title">Add in
										GFG</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="edit_mind-opt.php" class="nav-link "> <span class="title">Add
										in Mind Optimiser</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="edit_spark.php" class="nav-link "> <span class="title">Add in
										Spark</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="edit_knack.php" class="nav-link "> <span class="title">Add
										in Knack</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="user"></i>
							<span class="title">Faculty</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_faculty.php" class="nav-link "> <span class="title">All
										Faculty</span>
								</a>
							</li>

							<!-- <li class="nav-item">
										<a href="Faculty_profile.html" class="nav-link "> <span class="title">About
												Faculty</span>
										</a>
									</li> -->
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"><i data-feather="users"></i>
							<span class="title">Student</span><span class="arrow"></span></a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_students.php" class="nav-link "> <span class="title">All
										Students</span>
								</a>
							</li>

							<!-- <li class="nav-item">
										<a href="student_profile.html" class="nav-link "> <span class="title">About
												Student</span>
										</a>
									</li> -->
						</ul>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"><i data-feather="users"></i>
							<span class="title">Alumni</span><span class="arrow"></span></a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_alumni.php" class="nav-link "> <span class="title">All
										Alumni</span>
								</a>
							</li>

						</ul>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="archive"></i>
							<span class="title">Study Material</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_study_material.php" class="nav-link "> <span class="title">All Study
										Material</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="add_study_material.php" class="nav-link "> <span class="title">Add Study
										Material</span>
								</a>
							</li>

							<!-- <li class="nav-item">
										<a href="edit_library.html" class="nav-link "> <span class="title">Edit
												Study Material</span>
										</a>
									</li> -->
						</ul>
					</li>


					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="edit"></i>
							<span class="title">Forms</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_Forms.php" class="nav-link "> <span class="title">All
										Forms</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="add_Forms.php" class="nav-link "> <span class="title">Add
										Forms</span>
								</a>
							</li>

							<!-- <li class="nav-item">
										<a href="edit_Forms.html" class="nav-link "> <span class="title">Edit
												Forms</span>
										</a>
									</li> -->
						</ul>
					</li>




					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"><i data-feather="code"></i>
							<span class="title">Coding Section</span><span class="arrow"></span></a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_alumni.php" class="nav-link "> <span class="title">Coding Problems</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="all_alumni.php" class="nav-link "> <span class="title">Development Resources</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="add_resource.php" class="nav-link "> <span class="title">Add Development Resources</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="add_code.php" class="nav-link "> <span class="title">Add Problem</span>
								</a>
							</li>

						</ul>

					</li>





					<li class="nav-item">
						<a href="javascript:;" class="nav-link nav-toggle"> <i data-feather="calendar"></i>
							<span class="title">Departmental Events</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item  ">
								<a href="login.html" class="nav-link "> <span class="title">Departmental Assests</span>
								</a>
							</li>
							<!-- <li class="nav-item  ">
								<a href="sign_up.html" class="nav-link "> <span class="title">Feedback Form</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="contact.html" class="nav-link "> <span class="title">Contact Details</span>
								</a>
							</li> -->

						</ul>
					</li>

				</ul>
			</div>
		</div>
	</div>
<?php } elseif ($_SESSION['ROLE'] == "student") { ?>
	<div class="sidebar-container">
		<div class="sidemenu-container navbar-collapse collapse fixed-menu">
			<div id="remove-scroll" class="left-sidemenu">
				<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">

					<li class="sidebar-toggler-wrapper hide">
						<div class="sidebar-toggler">
							<span></span>
						</div>
					</li>


					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="award"></i>
							<span class="title">Departmental Clubs</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="event_manage.php" class="nav-link "> <span class="title">All Clubs</span>
								</a>
							</li>
							
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="user"></i>
							<span class="title">Faculty</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_faculty.php" class="nav-link "> <span class="title">All
										Faculty</span>
								</a>
							</li>

							<!-- <li class="nav-item">
										<a href="Faculty_profile.html" class="nav-link "> <span class="title">About
												Faculty</span>
										</a>
									</li> -->
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"><i data-feather="users"></i>
							<span class="title">Student</span><span class="arrow"></span></a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_students.php" class="nav-link "> <span class="title">All
										Students</span>
								</a>
							</li>

							<!-- <li class="nav-item">
										<a href="student_profile.html" class="nav-link "> <span class="title">About
												Student</span>
										</a>
									</li> -->
						</ul>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"><i data-feather="users"></i>
							<span class="title">Alumni</span><span class="arrow"></span></a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_alumni.php" class="nav-link "> <span class="title">All
										Alumni</span>
								</a>
							</li>

						</ul>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="archive"></i>
							<span class="title">Study Material</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_study_material.php" class="nav-link "> <span class="title">All Study
										Material</span>
								</a>
							</li>

						</ul>
					</li>


					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="edit"></i>
							<span class="title">Forms</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_Forms.php" class="nav-link "> <span class="title">All
										Forms</span>
								</a>
							</li>

						</ul>
					</li>


					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"> <i data-feather="coffee"></i>
							<span class="title">Result</span> <span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="result.php" class="nav-link "> <span class="title">Show Result</span>
								</a>
							</li>

						</ul>
					</li>


					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle"><i data-feather="code"></i>
							<span class="title">Coding Section</span><span class="arrow"></span></a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="all_alumni.php" class="nav-link "> <span class="title">Coding Problems</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="all_alumni.php" class="nav-link "> <span class="title">Development Resources</span>
								</a>
							</li>

						</ul>

					</li>





					<li class="nav-item">
						<a href="javascript:;" class="nav-link nav-toggle"> <i data-feather="calendar"></i>
							<span class="title">Departmental Assests</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item  ">
								<a href="login.html" class="nav-link "> <span class="title">Departmental Events</span>
								</a>
							</li>
							<!-- <li class="nav-item  ">
								<a href="sign_up.html" class="nav-link "> <span class="title">Feedback Form</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="contact.html" class="nav-link "> <span class="title">Contact Details</span>
								</a>
							</li> -->

						</ul>
					</li>

				</ul>
			</div>
		</div>
	</div>
<?php } ?>