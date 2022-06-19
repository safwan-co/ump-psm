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
    <?php $psmsession = 1;?>
    <table class="table table-striped">
      <tr>
        <td>PSM ID</td>
        <td>User ID</td>
        <td>PSM Year</td>
        <td>Session</td>
      </tr>
    @foreach($st_i as $std)
      <tr>
        <td>{{$std->psm_id}}</td>
        <td>{{$std->userID}}</td>
        <td>{{$std->psm_sid}}</td>
        <td>{{$std->psm_snum}}</td>
      </tr>
    @endforeach

    </table>
    @endif
  </div><!-- /.container -->
</div>
<!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />