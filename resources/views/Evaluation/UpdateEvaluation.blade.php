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
			 <h1 style="text-align: center;">Evaluation</h1>
             <table style="width:100%">
        <tr>
			 <h1 style="text-align: center;">Edit Report</h1>
       <br>
		</a></button>
	<fieldset>
		     <br>
			 <table class="center">
				<form action="/onclick_update" method="POST">
                @csrf
				<center>
				<td><td>
					<p>
					<td>
					<label for="student_name">Name:</label>
					</td>
					<td>
					<input type="text" class="form-control" name="student_name" id="student_name" value="{{ $manageevaluation[0]->student_name }}" readonly> 
					<td>
					</p>
				</td>
                </tr>

				<td><td>
					<p>
					<td>
					<label for="student_id">Matric ID:</label>
					</td>
					<td>
					<input type="text" class="form-control" name="student_id" id="student_id" value="{{ $manageevaluation[0]->student_id }}">  
					</td>
					</p>
				</td>
				</tr>
			
				<td><td>
					<p>
					<td>
					<label for="psm_title">Title:</label>
					</td>
					<td>
					<input type="text" class="form-control" name="psm_title" id="psm_title" value="{{ $manageevaluation[0]-psm_title }}">  
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for="psm_type">PSM:</label>
					</td>
					<td>
					<input type="text" class="form-control" name="psm_type" id="psm_type" value="{{ $manageevaluation[0]->psm_type }}" >  
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for="supervisor_name">Supervisor:</label>
					</td>
					<td>
					<input type="text" class="form-control" name="supervisor_name" id="supervisor_name" value="{{ $manageevaluation[0]->supervisor_name }}" >  
					</td>
					</p>
				</td>
				</tr>

                <td><td>
					<p>
					<td>
					<label for="psm1_mark">PSM 1 Mark:</label>
					</td>
					<td>
					<input type="double" class="form-control" name="psm1_mark" id="psm1_mark" value="{{ $manageevaluation[0]->psm1_mark }}"> 
					</td>
					</p>
				</td>
				</tr>

                <td><td>
					<p>
					<td>
					<label for="psm2_mark">PSM 2 Mark:</label>
					</td>
					<td>
					<input type="double" class="form-control" name="psm2_mark" id="psm2_mark" value="{{ $manageevaluation[0]->psm2_mark }}"> 
					</td>
					</p>
				</td>
				</tr>
			</table>
				<br>
			<input class="btn btn-success" type="submit" name="Submit" id="Submit" value="Save" method="post">
            <a href="AddEvaluation" class="btn btn-success">Back<class="nav-link  @if(url()->current() ===  URL::to('/AddEvaluation'))
		active
		@endif"></td>
			</p>
			</form>
		</fieldset>
</table></center>

    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />