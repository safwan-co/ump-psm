<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');
// $all = session()->all();

// var_dump($all);
?>
<style>
table.center {
    margin-left: auto;
    margin-right: auto;
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

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <table style="width:100%">
                <tr>
                    <center>
                        <h1 style="text-align: center;">Ranking</h1>
                        </br>
                        <button><a href="AddRanking">Add Ranking<class="nav-link @if(url()->current() ===
                                    URL::to('/AddRanking'))
                                    active
                                    @endif">
                            </a></button>
                        <button><a href="ViewRanking">View Ranking<class="nav-link @if(url()->current()
                                    === URL::to('/ViewRanking'))
                                    active
                                    @endif">
                            </a></button>

                    </center>
                    <center>
                        <fieldset>
                            <br>

                            <table class="center">
                                <form action="StudentRanking" method="POST">
                                    @csrf
                                    <center>

                                        <td>
                                        <td>
                                            <p>
                                        <td>
                                            <label for=Student_ID>Student ID:</label>
                                        </td>
                                        <td>
                                            <input type="text" name="Student_ID">
                                        </td>
                                        </p>
                                        </td>
                </tr>

                <td>
                <td>
                    <p>
                <td>
                    <label for=Student_Grade>Student Grade:</label>
                </td>
                <td>
                    <input type="text" name="Student_Grade">
                </td>
                </p>
                </td>
                </tr>

                <td>
                <td>
                    <p>
                <td>
                    <label for=Student_Ranking>Student Ranking:</label>
                </td>
                <td>
                    <input type="text" name="Student_Ranking">
                </td>
                </p>
                </td>
                </tr>

                <td>
                </tr>
            </table>
            <br>
            <center>
                <input type="submit" name="Submit" id="Submit" value="Submit" method="post">
            </center>
            </p>
            </form>
            </fieldset>
            </center>
            </table>
        </div><!-- /.container -->
    </div>
    <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />