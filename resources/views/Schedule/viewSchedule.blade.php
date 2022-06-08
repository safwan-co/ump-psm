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
    <h1 style="text-align: center;">View Schedule</h1>
    @if($roles == 'Student')
    <?php $psmsession = 1;?>
    @foreach($psmuser as $user)
    <table class="table table-striped">
      <?php
      $psmsession++;
      $currentID=$user->userID;
      echo $currentID;
      //if($currentID == $userID)
      //{
      ?>
      <tr>
        <td colspan="2" style="text-align: center" class="table-dark">{{$user->userID}}</td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center" class="table-light">{{$user_name}}</td>
      </tr>
      <tr>
        <td>PSM ID</td>
        <td>{{$user->psm_id}}</td>
      </tr>
      <tr>
        <td>PSM Year</td>
        <td>{{$user->psm_sid}}</td>
      </tr>
      <tr>
        <td>Session</td>
        <td>{{$user->psm_snum}}</td>
      </tr>
      <?php
      //}
      ?>
    </table>
    @endforeach
    @endif
    @if($roles == 'Coordinator')
      <table class="table">
        <tr>
        <td>PSM ID</td>
        <td>ID</td>
        <td>Type</td>
        <td>Schedule ID</td>
        <td>Session</td>
        </tr>
        @foreach ($psmuser as $user)
        <tr>
        <td>{{ $user->psm_id }}</td>
        <td>{{ $user->userID }}</td>
        <td>{{ $user->psm_type }}</td>
        <td>{{ $user->psm_sid }}</td>
        <td>{{ $user->psm_snum }}</td>
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