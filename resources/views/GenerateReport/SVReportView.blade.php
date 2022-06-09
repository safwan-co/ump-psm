

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
      <table>
        <tr>
			 <h1 style="text-align: center;">Report List</h1>
       <br>
		     <br>
			 <table class="table09">
			 <form action="/back" method="POST">
                @csrf
				<center>

					<td>
					<label for="id">Report ID:</label>
					</td>
					<td>
					{{ $student[0]->id }}
                    </td>
				</td>
                </tr>

				<td>
					<label for="id">Student ID:</label>
					</td>
					<td>
					{{ $student[0]->userID }}
                    </td>
				</td>
                </tr>

				<td>
					<label for="id">Date:</label>
					</td>
					<td>
					{{ $student[0]->Date }}
                    </td>
				</td>
                </tr>

				<td>
					<label for="id">Title:</label>
					</td>
					<td>
					{{ $student[0]->Time }}
                    </td>
				</td>
                </tr>

				<td>
					<label for="id">Decription:</label>
					</td>
					<td>
					{{ $student[0]->Description }}
                    </td>
				</td>
                </tr>
			</table>
			<br>
			<input class="btn btn-success" type="submit" name="Submit" id="Submit" value="Back" method="post">
			</p>
			</form>
</table></center>
    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />