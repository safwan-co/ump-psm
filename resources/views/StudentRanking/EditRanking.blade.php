<style>
table.center {
    margin-left: auto;
    margin-right: auto;
}
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
        @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
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
                                <form action="{{ url ('EditRanking/'.$ranking[0]->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <center>

                                        <td>
                                        <td>
                                            <p>
                                        <td>
                                            <label for=Student_ID>Student ID:</label>
                                        </td>
                                        <td>
                                            <input type="text" name="Student_ID" value="{{$ranking[0]->Student_ID}}">
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
                    <input type="text" name="Student_Grade" value="{{$ranking[0]->student_grade}}">
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
                    <input type="text" name="Student_Ranking" value="{{$ranking[0]->student_ranking}}">
                </td>
                </p>
                </td>
                </tr>

                <td>
                    </tr>
            </table>
            <br>
            <center>
                <input type="submit" name="Submit" id="Submit" value="Edit Ranking" method="post">
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