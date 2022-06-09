<<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

// $all = session()->all();

// var_dump($all);
?>
?>
<style>
	table.center{
		margin-left :auto;
		margin-right :auto;
	}
	}
</style>
<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Student Ranking</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Utama</li>
            <!-- <li class="breadcrumb-item active">Starter Page</li> -->
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
 
  <style>
  .form-center form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
</style>
  <!-- Main content -->
  <style type="text/css">
			<style>
            
			  table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  border: 1px solid black;
			  width: 100%;}
			  
			  th {
				border: 1px solid black;
				border-collapse: collapse;
				text-align: center;
				padding: 6px;
				background:#B2B2B2;
				color: black;}
				
			</style>
		 </style>
  <center>
			 <h1 style="text-align: center;">RANKING LIST</h1>
       </br>
		<button><a href="AddRanking" >Add Ranking<class="nav-link  @if(url()->current() ===  URL::to('/AddRanking'))
		active
		@endif">
		</a></button>
		<button><a href="ViewRanking" >View Ranking<class="nav-link  @if(url()->current() ===  URL::to('/ViewRanking'))
		active
		@endif">
		</a></button>
		
  </center>
			<center><table>
			<tr class="center">
				<br><br>
				<th>Student ID</th>
				<th>Student Grade</th>
				<th>Student Ranking</th>
                <th>Action</th>	
			</tr> 
      @foreach ($rankings as $data)
   <tr>
            <td>&nbsp&nbsp{{$data->Student_ID}}</td>
            <td>&nbsp&nbsp{{$data->student_grade}}</td>
            <td>&nbsp&nbsp{{$data->student_ranking}}</td>
			<td><a href='RetriveRanking/{{$data->id}}' class='btn btn-success'>Edit</a> <td>

    </tr>
     @endforeach
      
        

		</table></center>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />