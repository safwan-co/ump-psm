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
        <center><h1>Edit Profile</h1></center>
        <fieldset>
			 <table class="center">
            <form action="STD_update" method="post">
                {{ csrf_field() }}
               
                <center>
				<td><td>
					<p>
					<td>
                  
					</td>
					<td>
					
					<td>
					</p>
				</td>
                </tr>
			
				<td><td>
					<p>
					<td>
					<h2><br> Name</h2>
					</td>
					<td>
                    <h3><br>:&nbsp&nbsp{{$students[0]->name}}</h3> 
					</td>
					</p>
				</td>
				</tr>

                <td><td>
					<p>
					<td>
					<h2><br> Matric ID</h2>
					</td>
					<td>
                    <h3><br>:&nbsp&nbsp{{$students[0]->userID}}</h3> 
					</td>
					</p>
				</td>
				</tr>

                <td><td>
					<p>
					<td>
					<h2><br>  Faculty</h2>
					</td>
					<td>
                    <h3><br>:&nbsp&nbsp<input type="text" name="faculty" value="{{$students[0]->faculty}}"></h3>
					</td>
					</p>
				</td>
				</tr>

                <td><td>
					<p>
					<td>
					<h2><br>  Course</h2>
					</td>
					<td>
                    <h3><br>:&nbsp&nbsp<input type="text" name="course" value="{{$students[0]->course}}"></h3>
					</td>
					</p>
				</td>
				</tr>

                <td><td>
					<p>
					<td>
					<h2><br>  Year of Study</h2>
					</td>
					<td>
                    <h3><br>:&nbsp&nbsp<input type="text" name="sem_year" value="{{$students[0]->sem_year}}"></h3>
					</td>
					</p>
				</td>
				</tr>

                <td><td>
					<p>
					<td>
					<h2><br>  Campus/Home Address</h2>
					</td>
					<td>
                    <h3><br>:&nbsp&nbsp<input type="text" name="address" value="{{$students[0]->address}}"></h3>
					</td>
					</p>
				</td>
				</tr>

                <td><td>
					<p>
					<td>
					<h2><br>  Phone Number</h2>
					</td>
					<td>
                    <h3><br>:&nbsp&nbsp<input type="text" name="phone" value="{{$students[0]->phone}}"></h3>
					</td>
					</p>
				</td>
				</tr>

                <td><td>
					<p>
					<td>
					<h2><br>  Email</h2>
					</td>
					<td>
                    <h3><br>:&nbsp&nbsp<input type="text" name="email" value="{{$students[0]->email}}"></h3>
					</td>
					</p>
				</td>
				</tr>

                <td><td>
					<p>
					<td>
					<h2><br>  Supervisor Name</h2>
					</td>
					<td>
                    <h3><br>:&nbsp&nbsp<input type="text" name="sv_name" value="{{$students[0]->sv_name}}"></h3>
					</td>
					</p>
				</td>
				</tr>

                <td><td>
					<p>
					<td>
					<h2><br>  PSM Title</h2>
					</td>
					<td>
                    <h3><br>:&nbsp&nbsp<input type="text" name="psm_title" value="{{$students[0]->psm_title}}"></h3>
					</td>
					</p>
				</td>
				</tr>

               
			</table>
				<br>
			<input class="btn btn-success" type="submit" name="Submit" id="Submit" value="Save" method="post">
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
