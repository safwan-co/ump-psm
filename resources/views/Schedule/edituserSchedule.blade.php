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
    <h1 style="text-align: center;">Student</h1>
    @if($roles == 'Supervisor'|| $roles == 'Coordinator')
  	<a href="/viewstdSchedule" class="btn btn-dark" style="">Student Schedule</a>
  	<a href="/viewsSchedule" class="btn btn-dark" style="">View Schedule</a><br><br>
  	@foreach($st_e as $std)
    <form action="" method="get">
      {{ csrf_field() }}

      <label for="psm_id">PSM ID</label>
      <input type="text" name="psm_id" id="psm_id" value="{{$std->psm_id}}"><br>
      <label for="psm_id">User ID</label>
      <input type="text" name="userID" id="userID" value="{{$std->userID}}"><br>
      <label for="psm_id">User Type</label>
      <select name="psm_type" id="psm_type">
        <option value="Supervisor"
        @if($std->psm_type == 'Supervisor') selected @endif
        >Supervisor</option>
        <option value="Coordinator"
        @if($std->psm_type == 'Coordinator') selected @endif
        >Coordinator</option>
        <option value="Student"
        @if($std->psm_type == 'Student') selected @endif
        >Student</option>
      </select><br>
      <label for="psm_id">PSM Year</label>
      <input type="text" name="psm_sid" id="psm_sid" value="{{$std->psm_sid}}"><br>
      <label for="psm_id">PSM Session</label>
      <input type="text" name="psm_snum" id="psm_snum" value="{{$std->psm_snum}}"><br>
      <input class="btn btn-primary" type="submit" value="Update">
    </form>
    
    @endforeach
    @endif
  </div><!-- /.container -->
</div>
<!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />