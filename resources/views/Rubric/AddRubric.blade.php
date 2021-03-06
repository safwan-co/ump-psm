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
    <h1 style="text-align: center;">Rubric</h1>

    <div style="float:right;margin-bottom:20px;">
    <a class="btn btn-primary md-9" href="rbinsert" role="button">Insert new rubric</a>
    </div>
    <table class="table">
  <thead>
    
    <tr>
      <th scope="col">No</th>
      <th scope="col">Rubric ID</th>
      <th scope="col">Rubric Info</th>
      <th scope="col">Rubric Mark</th>
    </tr>
  </thead>
  <tbody>
  @foreach($rubric as $rubric)
    <tr>
      <th scope="row">#</th>
      <td>{{$rubric->rubricID}}</td>
      <td>{{$rubric->rubricInfo}}</td>
      <td>{{$rubric->rubricMark}}</td>
      <td><button type="button" class="btn btn-success"><a href = 'edit/{{ $rubric->rubricID }}'>Edit</a></button>
      <button type="button" class="btn btn-danger"><a href = 'delete/{{ $rubric->rubricID }}'>Delete</a></button></td>
    </tr>
    @endforeach
  </tbody>
</table>






    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />