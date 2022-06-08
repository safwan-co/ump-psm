

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
			 <h1 style="text-align: center;">Edit Report</h1>
       <br>
		</a></button>
	<fieldset>
		     <br>
			 <table class="center">
				<form action="/update" method="POST">
                @csrf
				<center>
				<td><td>
					<p>
					<td>
					<label for="id">Report ID:</label>
					</td>
					<td>
					<input type="text" class="form-control" name="id" id="name" value="{{ $student[0]->id }}"> 
					<td>
					</p>
				</td>
                </tr>
			
				<td><td>
					<p>
					<td>
					<label for="Date">Date:</label>
					</td>
					<td>
					<input type="date" class="form-control" name="Date" id="date" value="{{ $student[0]->Date }}">  
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for="Time">Time:</label>
					</td>
					<td>
					<input type="time" class="form-control" name="Time" id="time" value="{{ $student[0]->Time }}" >  
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
					<input type="text" class="form-control" name="Title" id="title" value="{{ $student[0]->Title }}" >  
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
					<input type="text" class="form-control" name="Description" id="description" value="{{ $student[0]->Description }}"> 
					</td>
					</p>
				</td>
				</tr>
			</table>
				<br>
			<input type="submit" name="Submit" id="Submit" value="Save" method="post">
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