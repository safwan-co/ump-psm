<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

// $all = session()->all();

// var_dump($all);
?>
<x-header-new />
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
</style>
  <!-- Main content -->
  <center>
			 <h1 style="text-align: center;">Report List</h1>
       </br>
			<table class="table09">
			<tr class="center">
				<br><br>
				<th>Student's Name</th>
        <th>Matric ID</th>
				<th>Supervisor's Name</th>
				<th>PSM 1 Mark</th>
				<th>PSM 2 Mark</th>
				<th>Action</th>
			</tr> 
      @foreach ($studentevaluations as $evaluations)
   <tr>
            <td>&nbsp&nbsp{{$evaluations->student_name}}</td>
            <td>&nbsp&nbsp{{$evaluations->student_id}}</td>
            <td>&nbsp&nbsp{{$evaluations->supervisor_name}}</td>
            <td>&nbsp&nbsp{{$evaluations->psm1_mark}}</td>
            <td>&nbsp&nbsp{{$evaluations->psm2_mark}}</td>
            
			<td><a href="UpdateEvaluation" class="btn btn-success">Modify<class="nav-link  @if(url()->current() ===  URL::to('/UpdateEvaluation'))
		active
		@endif"></td>
    </tr>
     @endforeach
		</table><br>
		</a></center>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />