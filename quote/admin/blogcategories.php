<?php
error_reporting(E_ALL);
session_start();
include 'includes/db_connect.php';
if (isset($_SESSION['user'])) {
} else {
echo "<script>
window.location='index.php?session=out';
</script>";
}
if($_REQUEST['action'] == 'del'){
$del_q = mysqli_query($db, "DELETE FROM `blog` WHERE `id`='".$_REQUEST['id']."'");
echo "<script>window.location='blog.php';</script>";
}
if($_REQUEST['action'] == 'add'){
	$categoryname = $_POST['categoryname'];
	$q = mysqli_query($db, "INSERT INTO `blogcategories`(`name`, `status`) VALUES ('$categoryname','1')");

	echo "<script>window.location='blogcategories.php';</script>";
}
if($_REQUEST['action'] == 'update'){
	$categoryname = $_POST['categoryname'];
	$status = $_POST['status'];
	$id = $_POST['id'];
	$query = mysqli_query($db, "UPDATE `blogcategories` SET `name`='$categoryname',`status`='$status' WHERE `id`='$id'");
	echo "<script>window.location='blogcategories.php';</script>";
}
if($_REQUEST['action'] == 'del'){
$del_q = mysqli_query($db, "DELETE FROM `blog` WHERE `category_id`='".$_REQUEST['id']."'");
$del_q = mysqli_query($db, "DELETE FROM `blogcategories` WHERE `id`='".$_REQUEST['id']."'");
echo "<script>window.location='blogcategories.php';</script>";
}
?>
<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Blog Categories</title>
		<meta name="description" content="" />
		<meta name="Author" content="" />
	<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />
		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- PAGE LEVEL STYLES -->
		<link href="assets/css/layout-datatables.css" rel="stylesheet" type="text/css" />
	</head>
	<!--
		.boxed = boxed version
	-->
	<body>
		<!-- WRAPPER -->
		<div id="wrapper">
			<!-- 
				ASIDE 
				Keep it outside of #wrapper (responsive purpose)
			-->
			<?php include 'sidebar.php'; ?>
			<!-- /ASIDE -->
			<!-- HEADER -->
			<?php include 'header.php'; ?>
			<!-- /HEADER -->
			<!-- 
				MIDDLE 
			-->
			<section id="middle">
			<!-- page title -->
				<header id="page-header">
					<h1>Manage Blog Categories</h1>
					<ol class="breadcrumb">
						<li><a href="blogcategories.php">Blog Categories</a></li>
						<li class="active">Manage Blog Categories</li>
					</ol>
				</header>
				<!-- /page title -->
			<div id="content" class="padding-20">
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<div class="col-md-6">
							<span class="title elipsis">
								<strong>MANAGE Blog Categories</strong> <!-- panel title -->
							</span>
							</div>
							<div class="col-md-6">
								<button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary pull-right" style="margin-top: -9px;"><i class="fa fa-plus"></i> Add New Blog category</button>
							</div>	
						</div>
						<div class="modal fade" id="myModal">
						  <div class="modal-dialog modal-dialog-centered">
						    <div class="modal-content">

						      <!-- Modal Header -->
						      <div class="modal-header">
						        <h4 class="modal-title">Add New Blog Category</h4>
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						      </div>
						      <form method="POST" action="?action=add">
						      <!-- Modal body -->
						      <div class="modal-body">
						        	<div class="row">
						        		<div class="col-md-12">
						        			<div class="form-group">
						        				<label>Category Name</label>
						        				<input type="text" name="categoryname" class="form-control">
						        			</div>
						        		</div>
						        	</div>
						      </div>

						      <!-- Modal footer -->
						      <div class="modal-footer">
						        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-success">Save</button>
						      </div>
						      </form>
						    </div>
						  </div>
						</div>
						<!-- panel content -->
						<div class="panel-body">
							<table class="table table-striped table-bordered table-hover" id="datatable_sample">
							<thead>
									<tr>
										<th>SrNo</th>
										<th>Name</th>
										<th>Status</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$srno = 0;
									$sql = mysqli_query($db, "SELECT * FROM `blogcategories`");
									while($fetch = mysqli_fetch_assoc($sql)){
									$srno++;	
									$id = $fetch['id'];
									$name = $fetch['name'];
									$status = $fetch['status'];
									?>
									<tr class="odd gradeX">
										<td style="text-align:center;"><?php echo $srno;?></td>
										<td><?php echo $name; ?></td>
                                        <td><?php if($status == 1){ echo 'Published'; }else{echo "Not Published";} ?></td>
                                        <td>
										<a href="javascript::void()" data-toggle="modal" data-target="#myModal<?php echo $id; ?>" class="btn btn-default btn-xs"><i class="fa fa-edit white"></i> Edit</a>
										<a onclick="return confirm('Are You Sure You want to Delete This Category. If you Delete This category. All Blogs will be Deleted Automatialy Against This Category')" href="?action=del&id=<?php echo $id;?>" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> Delete</a>
										</td>
									</tr>


									<div class="modal fade" id="myModal<?php echo $id; ?>">
										  <div class="modal-dialog modal-dialog-centered">
										    <div class="modal-content">

										      <!-- Modal Header -->
										      <div class="modal-header">
										        <h4 class="modal-title">Add New Blog Category</h4>
										        <button type="button" class="close" data-dismiss="modal">&times;</button>
										      </div>
										      <form method="POST" action="?action=update">
										      	<input type="hidden" value="<?php echo $id ?>" name="id">
										      <!-- Modal body -->
										      <div class="modal-body">
										        	<div class="row">
										        		<div class="col-md-12">
										        			<div class="form-group">
										        				<label>Category Name</label>
										        				<input value="<?php echo $name; ?>" type="text" name="categoryname" class="form-control">
										        			</div>
										        		</div>
										        	</div>
										        	<div class="row">
										        		<div class="col-md-12">
										        			<div class="form-group">
										        				<label>Status</label>
										        				<select class="form-control" name="status">
										        					<option>Select Status</option>
										        					<option <?php if($status == 1) {echo "selected";} ?> value="1">Published</option>
										        					<option <?php if($status == 2) {echo "selected";} ?> value="2">Not Published</option>
										        				</select>
										        			</div>
										        		</div>
										        	</div>
										      </div>

										      <!-- Modal footer -->
										      <div class="modal-footer">
										        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										        <button type="submit" class="btn btn-success">Save</button>
										      </div>
										      </form>
										    </div>
										  </div>
										</div>







                               <?php } ?>     
								</tbody>
							</table>
						</div>
						<!-- /panel content -->
						<!-- panel footer -->
						<div class="panel-footer">
						</div>
						<!-- /panel footer -->
					</div>
					<!-- /PANEL -->
			</div>
			</section>
			<!-- /MIDDLE -->
		</div>

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript">
			loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){
				loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){
					if (jQuery().dataTable) {
						var table = jQuery('#datatable_sample');
						table.dataTable({
							"columns": [{
								"orderable": false
							}, {
								"orderable": true
							}, {
								"orderable": false
							}],
							"lengthMenu": [
								[5, 15, 20, -1],
								[5, 15, 20, "All"] // change per page values here
							],
							// set the initial value
							"pageLength": 25,            
							"pagingType": "bootstrap_full_number",
							"language": {
								"lengthMenu": "  _MENU_ records",
								"paginate": {
									"previous":"Prev",
									"next": "Next",
									"last": "Last",
									"first": "First"
								}
							},
							"columnDefs": [{  // set default column settings
								'orderable': false,
								'targets': [0]
							}, {
								"searchable": false,
								"targets": [0]
							}],
							"order": [
								[1, "asc"]
							] // set first column as a default sort by asc
						});

						var tableWrapper = jQuery('#datatable_sample_wrapper');
						table.find('.group-checkable').change(function () {
							var set = jQuery(this).attr("data-set");
							var checked = jQuery(this).is(":checked");
							jQuery(set).each(function () {
								if (checked) {
									jQuery(this).attr("checked", true);
									jQuery(this).parents('tr').addClass("active");
								} else {
									jQuery(this).attr("checked", false);
									jQuery(this).parents('tr').removeClass("active");
								}
							});
							jQuery.uniform.update(set);
						});

					table.on('change', 'tbody tr .checkboxes', function () {
							jQuery(this).parents('tr').toggleClass("active");
						});
						tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); // modify table per page dropdown
					}
				});
			});
		</script>
	</body>
</html>