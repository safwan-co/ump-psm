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
                        <li class="breadcrumb-item active">Main</li>
                        <!-- <li class="breadcrumb-item active">Starter Page</li> -->
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
  <center>
    <div class="content">
        <div class="container">
        <table style="width:100%">
        <tr>
        <center><h1>Coordinator Profile</h1></center>
        <fieldset>
          <br>
          <br>
			 <table class="center">
             <center><img src="https://avatars.dicebear.com/api/initials/:{{$user_name}}.svg" width="200" height="180">
            <h2><br></h2>
          </td></td>
</tr>
<br>
</td>
                    <td>
                    <h2>Name</h2>
                        <h2>Coordinator ID</h2>
                        <h2>Faculty</h2>
                        <h2>Office</h2>
                        <h2>Phone Number</h2>
                        <h2>Email</h2>


                    </td>
                    <td>
                    <h3>:&nbsp&nbsp{{$coordinators[0]->name}}</h3>
                        <h3>:&nbsp&nbsp{{$coordinators[0]->userID}}</h3>
                        <h3>:&nbsp&nbsp{{$coordinators[0]->faculty}}</h3>
                        <h3>:&nbsp&nbsp{{$coordinators[0]->office}}</h3>
                        <h3>:&nbsp&nbsp{{$coordinators[0]->phone}}</h3>
                        <h3>:&nbsp&nbsp{{$coordinators[0]->email}}</h3>
                    </td>
                </tr>
      </table>
      <h2><br></h2>
      <h2><br></h2>
      <center><a class="btn btn-success" role="button" href="COedit">Edit Profile</a>
      <h2><br></h2>
    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />
