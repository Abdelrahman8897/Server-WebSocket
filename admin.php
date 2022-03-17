
<?php
include 'core/init.php';
$userObj->updateSession();

?>
<style>
	#img1,#img2,#img3{
		display: none;
		/* width: 100px !important;  	height: 100px !important; */
	}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/styles.css">

	<title>Online Exam System</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Welcome</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="index.html">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Current Exams</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Create Exam</span>
				</a>
			</li>


			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Register Admin</span>
				</a>
			</li>
			
			
			
			
			
		</ul>
		<ul class="side-menu">
		
			
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					
				</div>
			</form>


			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="index.html">Home</a>
						</li>
					</ul>
				</div>
				
			</div>









			<ul class="box-info">
				
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>283</h3>
						<p>Student</p>
					</span>
				</li>

				<li>
					<i class='bx bx-layer'></i>
					<span class="text">
						<h3>50</h3>
						<p>Courses</p>
					</span>
				</li>

				<li>
					<i class='bx bxs-calendar-check' ></i>

					<span class="text">
						<h3>5</h3>
						<p>Exams</p>
					</span>
				</li>
			</ul>










			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Sudents</h3>
						<i class='bx bx-search' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th> Details </th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img 	style="width: 150px;  	height: 150px;" id = 'img1' >
									<p id='n1'></p>
								</td>

								<td> <button class="btn btn-info" onclick="togell()" id='btn1'> Monitor </button>
								
									
								</td>
								
							
								<td >
									<p	id='s1'></p>
							
							</tr>



							<tr>
								<td>
									<img  style="width: 150px;  	height: 150px;" id = 'img2' >
									<p id='n2'></p>
								</td>

								<td>  <button class="btn btn-info" onclick="togell2()" id='btn2'> Monitor </button>
								
									
								</td>
								
							
								<td >
									<p	id='s2'></p>
							</tr>

							<!-- <tr>
								<td>
									<img style="width: 150px;  	height: 150px;" id = 'img3' >
									<p id='n3'></p>
								</td>

								<td> <button class="btn btn-info" onclick="togell3()" id='btn3'> See </button>
								
									
								</td>
								
							
								<td >
									<p	id='s3'></p>
							</tr> -->



						
							



							
						</tbody>
					</table>
				</div>





				<div class="todo">
					<div class="head">
						<h3>Exams</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Comuter Graphics</p>
							<div >
								<i class='bx bx-edit p'></i>
								<i class='bx bx-x p'></i>
							   </div>
						</li>
						<li class="completed">
							<p>Database</p>
							<div >
								<i class='bx bx-edit p'></i>
								<i class='bx bx-x p'></i>
							   </div>
						</li>
						<li class="not-completed">
							<p>Software</p>
							<div >
								<i class='bx bx-edit p'></i>
								<i class='bx bx-x p'></i>
							   </div>
						</li>

						<li class="completed">
							<p>Oop</p>
							<div>
								<i class='bx bx-edit p'></i>
								<i class='bx bx-x p'></i>
						   </div>
						</li>

						<li class="not-completed">
							<p>Database II</p>

							<div >
							<i class='bx bx-edit p'></i>
							<i class='bx bx-x p'></i>
						   </div>

						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script>
              const conn = new WebSocket('ws://localhost:8080/?token=<?php
              echo $userObj->sessionID;
              ?>');
          </script>

	<script src="assets/js/script.js"></script>
    <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
</body>
</html>