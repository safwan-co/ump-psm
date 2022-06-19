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
    <h1 style="text-align: center;">Rubric</h1>
    <form action = "/edit/<?php echo $rubric[0]->id; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
    <tr>
    <td>RubricID</td>
    <td>
    <input type = 'text' name = 'rubricID'
    value = '<?php echo$rubric[0]->rubricID; ?>'/> </td>
    </tr>
    <tr>
    <td>Rubric Info</td>
    <td>
    <input type = 'text' name = 'rubricInfo'
    value = '<?php echo$rubric[0]->rubricInfo; ?>'/>
    </td>
    </tr>
    <tr>
    <td>Rubric Mark</td>
    <td>
    <input type = 'text' name = 'rubricMark'
    value = '<?php echo$rubric[0]->rubricMark; ?>'/>
    </td>
    </tr>
    <tr>
    <td colspan = '2'>
    <input type = 'submit' value = "Update student" />
    </td>
    </tr>
    </table>
  </form>


    </div><!-- /.container -->
  </div>
<!-- ./wrapper -->

<x-footer-new />