<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');
// $all = session()->all();

// var_dump($all);
?>
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
  <center>
	<div class="content">
    <div class="container">
      <table style="width:100%">
        <tr>
			 <h1 style="text-align: center;">Student Progress Form</h1>
        </br>

        <fieldset>
		     <br>

			 <table class="center">
				<form action="GenerateReport" method="POST" >
                @csrf
				
				<td><td>
					<p>
					<td>
					<label for=id>Report ID:</label>
					</td>
					<td>
					<input type="text" name="id" placeholder="Student ID_Report No">E.g: CBXXXXX_1
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for=id>Supervisor ID:</label>
					</td>
					<td>
					<input type="text" name="sv"><a href="ViewSVList">click here<class="nav-link  @if(url()->current() ===  URL::to('/ViewSVList'))
		              active
		             @endif">
		              </a>
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
					<input type="text" name="Description" style="width: 300px; height:150px;"> 
					</td>
					</p>
				</td>
				</tr>
			</table>
			<br>
			<input type="submit" class="btn btn-success" name="Submit" id="Submit" value="Submit" method="post">
			<a href="ViewReport" class="btn btn-success">View Report<class="nav-link  @if(url()->current() ===  URL::to('/ViewReport'))
		active
		@endif">
		</a>
			</p>
			</form>
		</fieldset>
</table>
</center>
    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />