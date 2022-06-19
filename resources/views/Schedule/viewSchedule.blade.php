<?php
$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');
// $all = session()->all();
// var_dump($all);
?>
<style>
	table.center{
		margin-left :auto;
		margin-right :auto;
	}

</style>
<x-header-new/>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<!-- <li class="breadcrumb-item active">Starter Page</li> -->
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container">
	<h1 style="text-align: center;">View Schedule : <?php echo $roles;?></h1>
	@if($roles == 'Supervisor')

	@endif
	@if($roles == 'Coordinator')
	<!--<a href="addPSM" class="btn btn-primary">Add PSM User</a>
	-->

	<a href="viewstdSchedule" class="btn btn-dark" style="float: right;">Student Schedule</a>
	<br><br>
	<table class="table">
		<tr class="table-dark">
		<td>PSM ID</td>
		<td>ID</td>
		<td>Type</td>
		<td>Schedule ID</td>
		<!--<td>Session</td>-->
		</tr>

		@foreach ($co_i as $coo)
		<tr>
		<td>{{ $coo->psm_id }}</td>
		<td>{{ $coo->userID }}</td>
		<td>{{ $coo->psm_type }}</td>
		<td>{{ $coo->psm_sid }}</td>
		<!--<td>{{ $coo->psm_snum }}</td>-->
		</tr>
		@endforeach
	</table>
	@endif
	
	@if($roles == 'Student')
	<?php $psmsession = 1;?>
    @foreach($st_p as $std)
    <table class="table table-striped">
    	<tr>
        	<td colspan="2" style="text-align: center" class="table-dark">{{$std->userID}}</td>
    	</tr>
		<tr>
			<td colspan="2" style="text-align: center" class="table-light">{{$user_name}}</td>
		</tr>
		<tr>
			<td>PSM ID</td>
			<td>{{$std->psm_id}}</td>
		</tr>
		<tr>
			<td>PSM Year</td>
			<td>{{$std->psm_sid}}</td>
		</tr>
		<tr>
			<td>Session</td>
			<td>{{$std->psm_snum}}</td>
		</tr>
		<?php
		//}
		?>
    </table>
    @endforeach
	@endif
	</div><!-- /.container -->
</div><!-- /.content -->

</div><!-- ./wrapper -->

<x-footer-new />