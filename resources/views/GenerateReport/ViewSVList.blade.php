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
			 <h1 style="text-align: center;">Supervisor List</h1>
       </br>
			<table class="table09">
			<tr class="center">
				<br><br>
				<th>Supervisor ID</th>
        <th>Supervisor Name</th>
			</tr> 
      @foreach ($users as $data)
   <tr>
            <td>&nbsp&nbsp{{$data->userID}}</td>
            <td>&nbsp&nbsp{{$data->name}}</td>
    </tr>
     @endforeach
		</table><br>
    <a href="AddReport" class="btn btn-success">Back<class="nav-link  @if(url()->current() ===  URL::to('/AddReport'))
		active
		@endif">
		</a>
</center>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />