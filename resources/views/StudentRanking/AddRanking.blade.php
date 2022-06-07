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
	<h1 style="text-align: center;">Ranking</h1>
       <p>add your code here</p>
    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />