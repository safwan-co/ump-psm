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

  <div class="content">
    <div class="container">
    <h1 style="text-align: center;">Rubric</h1>
    <form action="create" method="POST">
			{{csrf_field()}}
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Rubric ID</label>
        <input type="text" class="form-control" name="rubricID" id="rubricID" >
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Rubric Description</label>
        <textarea class="form-control" type="text" name="rubricInfo" id="rubricInfo" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Rubric Mark</label>
        <input type="number" class="form-control" name="rubricMark" id="rubricMark" >
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Date</label>
        <input type="date" class="form-control" name="date" id="date">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Time</label>
        <input type="time" class="form-control" name="time" id="time" >
    </div>
<div class="form-group">
           <div class="col-md-6">
                <input type="submit" name="submit" value='Submit' class='btn btn-success'>
           </div>
        </div>
  </form>


    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />