<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

// $all = session()->all();

// var_dump($all);
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>UMP | e-PSM</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- Datatable -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
	<div class="header09">
                <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPSM EVALUATION SYSTEM</h1>
              </div>
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-gray-dark navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#" role="button" style="color: white;">Home / About / Contact</a>
				</li>
</ul>
			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a href="/logout" class="nav-link" style="color: white;">Logout</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-light-blue elevation-5">
			<!-- Brand Logo -->
			<a class="brand-link" style="text-align: center;">
				<img class="w-50 h-auto" src="/./images/UMP2.png" alt="UMP" />
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img class="w-10 h-auto rounded-circle" src="https://avatars.dicebear.com/api/initials/:{{$user_name}}.svg" alt="UMP" />
					</div>
					<div class="info">

						<span>{{$user_name}}</span>
					</div>
				</div>

                @if($roles == 'Student')
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="/home" class="nav-link  @if(url()->current() ===  URL::to('/home'))
								active
						   @endif">
								<p>
									Homepage
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/studentprofile" class="nav-link  @if(url()->current() ===  URL::to('/studentprofile'))
								active
						   @endif">
								<p>
									Profile
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link @if(url()->current() ===  URL::to('/mohon' ) or url()->current() ===  URL::to('mohon_two') or  url()->current() ===  URL::to('mohon_three') or  url()->current() ===  URL::to('mohon_tajaan')  or  url()->current() ===  URL::to('mohon_impak')  )
								active
						   @endif">
								<p>
									PSM Menu
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>

							<ul class="nav nav-treeview  ">
								<li class="nav-item ">
									<a href="AddReport" class="nav-link  @if(url()->current() ===  URL::to('/AddReport'))
								active
								@endif">
										<p>Report</p>
									</a>
								</li>

								<li class="nav-item">
								     <a href="AddRanking" class="nav-link  @if(url()->current() ===  URL::to('/AddRanking'))
									 active
								@endif">
										<p>Student Ranking</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="AddEvaluation" class="nav-link @if(url()->current() ===  URL::to('/AddEvaluation'))
								active
						   @endif">
										<p>Evaluation</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="AddRubric" class="nav-link  @if(url()->current() ===  URL::to('AddRubric'))
								active
						   @endif">
										<p>Rubric</p>
									</a>
								</li>

								<li class="nav-item"><!--Student-->
									<a href="Schedule" class="nav-link  @if(url()->current() ===  URL::to(''))
								active
						   @endif">
										<p>View Schedule</p>
									</a>
								</li>
							</ul>

						</li>
				</nav>
				<!-- /.sidebar-menu -->
                @elseif($roles == 'Supervisor')
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item">
							<a href="/home" class="nav-link  @if(url()->current() ===  URL::to('/home'))
								active
						   @endif">
								<p>
									Homepage
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/supervisorprofile" class="nav-link  @if(url()->current() ===  URL::to('/supervisorprofile'))
								active
						   @endif">
								<p>
									Profile
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link @if(url()->current() ===  URL::to('/mohon' ) or url()->current() ===  URL::to('mohon_two') or  url()->current() ===  URL::to('mohon_three') or  url()->current() ===  URL::to('mohon_tajaan')  or  url()->current() ===  URL::to('mohon_impak')  )
								active
						   @endif">
								<p>
									PSM Menu
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>

							<ul class="nav nav-treeview  ">
								<li class="nav-item ">
									<a href="AddReport" class="nav-link  @if(url()->current() ===  URL::to('/AddReport'))
								active
								@endif">
										<p>Report</p>
									</a>
								</li>

								<li class="nav-item">
								     <a href="AddRanking" class="nav-link  @if(url()->current() ===  URL::to('/AddRanking'))
									 active
								@endif">
										<p>Student Ranking</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="AddEvaluation" class="nav-link @if(url()->current() ===  URL::to('/AddEvaluation'))
								active
						   @endif">
										<p>Evaluation</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="AddRubric" class="nav-link  @if(url()->current() ===  URL::to('AddRubric'))
								active
						   @endif">
										<p>Rubric</p>
									</a>
								</li>

								<li class="nav-item"><!--SV-->
									<a href="Schedule" class="nav-link  @if(url()->current() ===  URL::to(''))
								active
						   @endif">
										<p>View Schedule</p>
									</a>
								</li>
							</ul>

						</li>

                @elseif($roles == 'Coordinator')
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item">
							<a href="/home" class="nav-link  @if(url()->current() ===  URL::to('/home'))
								active
						   @endif">
								<p>
									Homepage
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/coordinatorprofile" class="nav-link  @if(url()->current() ===  URL::to('/coordinatorprofile'))
								active
						   @endif">
								<p>
									Profile
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link @if(url()->current() ===  URL::to('/mohon' ) or url()->current() ===  URL::to('mohon_two') or  url()->current() ===  URL::to('mohon_three') or  url()->current() ===  URL::to('mohon_tajaan')  or  url()->current() ===  URL::to('mohon_impak')  )
								active
						   @endif">
								<p>
									PSM Menu
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>

							<ul class="nav nav-treeview  ">
								<li class="nav-item ">
									<a href="AddReport" class="nav-link  @if(url()->current() ===  URL::to('/AddReport'))
								active
								@endif">
										<p>Report</p>
									</a>
								</li>

								<li class="nav-item">
								     <a href="AddRanking" class="nav-link  @if(url()->current() ===  URL::to('/AddRanking'))
									 active
								@endif">
										<p>Student Ranking</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="AddEvaluation" class="nav-link @if(url()->current() ===  URL::to('/AddEvaluation'))
								active
						   @endif">
										<p>Evaluation</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="AddRubric" class="nav-link  @if(url()->current() ===  URL::to('AddRubric'))
								active
						   @endif">
										<p>Rubric</p>
									</a>
								</li>

								<li class="nav-item"><!--Coordinator-->
									<a href="Schedule" class="nav-link  @if(url()->current() ===  URL::to(''))
								active
						   @endif">
										<p>View Schedule</p>
									</a>
								</li>
							</ul>

						</li>
                @endif
			</div>
			<!-- /.sidebar -->
		</aside>
