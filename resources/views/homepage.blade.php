<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

// $all = session()->all();

// var_dump($all);
?>
<style>
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  padding: 30px;

}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #00FF5B;}

#customers th {
  padding: 20px;
  text-align: left;
  background-color: #FCFF00;
  color: #FF0000;
  text-align: center;

}
</style>
<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <a class="brand-link" style="text-align: center;">
				<img src="/./images/UMP.jpg" alt="ump" width="1500" height="500"/>
			</a>
      </table>
      <h2><br></h2>
    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />
