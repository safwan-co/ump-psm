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
	<h1 style="text-align: center;">Schedule</h1>
    <form class="form-group" action="" style="text-align: center;">
      {{@csrf_field()}}
      <table class="table">
        <tr>
          <td>
            <label for="userid">User ID</label>
          </td>
          <td>
            <input class="form-group" name="userID" id="userID" type="text" value="" placeholder="">
          </td>
        </tr>
        <tr>
          <td>
            <label for="psm_type">User Type</label>
          </td>
          <td>
            <input class="form-group" name="psm_type" id="psm_type" type="text" list="psmtype" value="PSM">
            <datalist id="psmtype">
              <option>PSM</option>
              <option>Supervisor</option>
              <option>Coordinator</option>
            </datalist>
          </td>
        </tr>
        <tr>
          <td>
            <label for="userid">User ID</label>
          </td>
          <td>
            <input class="form-group" name="userID" id="userID" type="text" value="" placeholder="User ID">
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" class="btn btn-primary" value="Save">

          </td>
        </tr>
      </table>
    </form>

    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />