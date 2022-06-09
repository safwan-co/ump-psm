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
				<th>Report ID</th>
        <th>Student ID</th>
				<th>Date</th>
				<th>Time</th>
				<th>Title</th>
				<th>Action</th>
			</tr> 
      @foreach ($reports as $data)
   <tr>
            <td>&nbsp&nbsp{{$data->id}}</td>
            <td>&nbsp&nbsp{{$data->userID}}</td>
            <td>&nbsp&nbsp{{$data->Date}}</td>
            <td>&nbsp&nbsp{{$data->Time}}</td>
            <td>&nbsp&nbsp{{$data->Title}}</td>
			<td><a href="click_view/{{$data->id}}" class="btn btn-success">View</a></td>
    </tr>
     @endforeach
		</table><br>
</center>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />