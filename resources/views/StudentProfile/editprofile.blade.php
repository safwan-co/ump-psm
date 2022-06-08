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
    <div class="">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Profile</h1>
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
    <div class="content">
        <div class="container">
            <form action="STD_update" method="post">
                {{ csrf_field() }}
                <table style="width:100%">
                    <tr>
                        <td width="30%" class="topleft"><img src="https://avatars.dicebear.com/api/initials/:{{$user_name}}.svg" width="200" height="180">
                            <h2><br></h2>
                            <h4></h4>
                        </td>
                        <td width="70%">
                            <table>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Name</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp{{$students[0]->name}}</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Matric ID</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp{{$students[0]->userID}}</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Faculty</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="faculty" value="{{$students[0]->faculty}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Course</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="course" value="{{$students[0]->course}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Sem & Year</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="sem_year" value="{{$students[0]->sem_year}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Campus/Home Address</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="address" value="{{$students[0]->address}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Phone Number</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="phone" value="{{$students[0]->phone}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Email</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="email" value="{{$students[0]->email}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Supervisor Name</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="sv_name" value="{{$students[0]->sv_name}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> PSM Title</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="psm_title" value="{{$students[0]->psm_title}}"></h3>
                                    </td>
                            </table>
                        </td>
                    </tr>
                </table>
                <h2><br></h2>
                <h2><br></h2>
                <input type="submit" value="Update" class="button-73">
                <h2><br></h2>
            </form>
        </div><!-- /.container -->
    </div>
    <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />
