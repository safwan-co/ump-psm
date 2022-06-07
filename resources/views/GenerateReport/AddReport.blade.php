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
          <h1 class="m-0 text-dark">Student Profile</h1>
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
      <table style="width:100%">
        <tr>
         	<center>
			 <h1 style="text-align: center;">Student Progress Form</h1>
        </br>
		<button><a href="AddReport" >Add Student Progress<class="nav-link  @if(url()->current() ===  URL::to('/AddReport'))
		active
		@endif">
		</a></button>
		<button><a href="ViewReport" >View Report<class="nav-link  @if(url()->current() ===  URL::to('/ViewReport'))
		active
		@endif">
		</a></button>

  </center>
	<center><fieldset>
		     <br>

			 <table class="center">
				<form action="GenerateReport" method="POST" >
                @csrf
				<center>
				
				<td><td>
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

				<td><td>
					<p>
					<td>
					<label for=Date>Date:</label>
					</td>
					<td>
					<input type="date" name="Date">
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for=Time>Time:</label>
					</td>
					<td>
					<input type="time" name="Time">
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for="Title">Title:</label>
					</td>
					<td>
					<input type="text" name="Title"> 
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for="Description">Description:</label>
					</td>
					<td>
					<input type="text" name="Description"> 
					</td>
					</p>
				</td>
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