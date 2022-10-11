<?php
//error_reporting(E_ALL);
session_start();
include 'includes/db_connect.php';
if (isset($_SESSION['user'])) {
} else {
echo "<script>
window.location='index.php?session=out';
</script>";
}
if($_REQUEST['action'] == 'del'){
$del_q = mysqli_query($db, "DELETE FROM `quotes` WHERE `number`='".$_REQUEST['number']."'");
echo "<script>window.location='quotes.php';</script>";
}
?>
<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Quotes</title>
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
					<h1>Manage Quotes</h1>
					<ol class="breadcrumb">
						<li><a href="quotes.php">Quotes</a></li>
						<li class="active">Manage Quotes</li>
					</ol>
				</header>
				<!-- /page title -->
			<div id="content" class="padding-20">
					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success
						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<div class="col-md-6">
							<span class="title elipsis">
								<strong><i class="fa fa-umbrella"></i> MANAGE QUOTES</strong> <!-- panel title -->
							</span>
							</div>
							<div class="col-md-6">
							</div>	
						</div>
						<!-- panel content -->
						<div class="panel-body">
							<table class="table table-striped table-bordered table-hover" id="datatable_sample">
							<thead>
									<tr>
										<th>Number</th>
										<th>Email</th>
										<th>Created On</th>
                                        <th>Product</th>
                                        <th>Coverage</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
                                <?php

$srno = 0;
$sql = mysqli_query($db, "SELECT * FROM `quotes`");
while($fetch = mysqli_fetch_assoc($sql)){
$srno++;	
$number = $fetch['number'];
$email = $fetch['email'];
$created_on = Date("Y-m-d", strtotime($fetch['created_on']));
$data = json_decode($fetch['data'], true);
$product = mysqli_query($db, "SELECT pro_name FROM `wp_dh_products` WHERE `pro_id`='" .$data['product_id'] ."'");
$product_name = mysqli_fetch_assoc($product)["pro_name"];

$coverage = number_format($data['sum_insured2']);


?>


									<tr class="odd gradeX">
										<td style="text-align:center;"><?php echo $number; ?></td>
										<td><?php echo $email; ?></td>
									    <td><?php echo $created_on; ?></td>
										<td><?php echo $product_name;?></td>
										<td>$<?php echo $coverage; ?></td>
                                        <td>
    										<a href="/quote/tab_quotes.php?quote=<?php echo $number;?>" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-search white"></i> Show </a>
    										<a href="?action=del&number=<?php echo $number;?>" class="btn btn-default btn-xs"><i class="fa fa-times white"></i> Delete </a>
										</td>
									</tr>
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
								"orderable": true
							}, {
								"orderable": true
							}, {
								"orderable": true
							}, {
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
</html>p