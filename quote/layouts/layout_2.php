<?php
/*** LAYOUT 1 **/
$q1 = mysqli_query($db, "SELECT * FROM `wp_dh_insurance_plans` WHERE product = '$product_id'");
$row = mysqli_fetch_assoc($q1);
	$premedical[] = $row['premedical'];
	$family_plan[] = $row['family_plan'];


$prodetails = mysqli_query($db, "SELECT * FROM `wp_dh_products` WHERE `pro_id`='$product_id'");
$prorow = mysqli_fetch_assoc($prodetails);
$prosupervisa = $prorow['pro_supervisa'];
$product_name = $prorow['pro_name'];


if($prosupervisa == '1'){
$supervisa = 'yes';
} else {
$supervisa = 'no';	
}
	
$orderdata = $pro_sort;
$allow_input_field = $pro_fields;

$_SESSION['broker'] = $_REQUEST['broker'];
$_SESSION['agent'] = $_REQUEST['agent'];
$_SESSION['user_id'] = $_REQUEST['user_id'];

?>
<style>
.error{
	color: red;
}
#primary_destination_msdd.dd.ddcommon {
    box-shadow: none;
    border: 1px solid #dedede;
    background: none;
    color: #959595;
    font-size: 14px;
}
input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="tel"]:focus, input[type="number"]:focus, input[type="range"]:focus, input[type="date"]:focus, textarea:focus, input.text:focus, input[type="search"]:focus, select:focus, input[type="checkbox"]:focus, .form-control:focus {
    border-color: #ccc !important;
    box-shadow: none !important;
}
form.form.form-layout1 .form-control {
    padding: 5px 12px;
    border-radius: 0px !important;
}
    form.form.form-layout1 .form-control, form.form.form-layout1 .select {
    height: 42px;
}
.dd .ddTitle .ddTitleText {
    padding: 8px 25px 7px 8px !important; 
}
#primary_destination_msdd {
    border-radius: 0;
    height: 42px !important;
}
.toggle-button-icon-fade label {
    height: 42px !important;
}

.toggle-button-icon-fade .toggle-button__icon {
    height: 36px !important;
    width: 28px !important;
    margin: 3px !important;
    background: #eee;
}

    .rangeslider--horizontal {
        height: 15px !important;
    }
    .rangeslider--horizontal .rangeslider__handle {
        top: -13px;
    }

	#dh-get-quote .control-label{
		font-size: 16px;
		font-weight: normal;
		letter-spacing: 0.5px;

	}

    #primary_destination_msdd{
        border-radius: 0;
        height: 50px;
        width: 100% !important;
    }
    .dd .ddTitle .ddTitleText {
        padding: 13px 25px 11px 8px;
    }
	#dh-get-quote button{
padding: 8px 50px;
font-weight: bold;
border: 1px solid #44bc9b;
font-size: 16px;
	}


	#dh-get-quote .range-output{
		position: absolute;
		top: -30px;
		right: 5px;
		font-size: 125%;
	}

.email-main {
    position: relative;
}
.email-main input {
    padding-left: 40px !important;
    position: relative;
}	
label.control-label-mail {
    position: absolute;
    left: 2.5%;
    color: #868585;
    top: 49%;
    padding: 6px 7px;
}
.phone-custom-input2 span.phone-icon {
position: absolute !important;
top: 8% !important;
left: 0.5% !important;
padding: 6px 8px !important;
}


<!--Range Slider CSS-->
.ui-slider-handle .ui-state-default .ui-corner-all {
background: #FFF !important;
font-weight: normal !important;
color: #454545 !important;
padding: 5px !important !important;
width: 25px !important;
height: 25px !important;
margin-top: -5px !important;
border-radius: 50px !important;
border: 5px solid #C00 !important;
}
</style>

<style>
	.toggle-button-icon-fade{
		width: 100%;
		height: 47px;
		color: #444;
		float:left;
	}

	.toggle-button-icon-fade label{
		/*width: 147px;
		height: 47px; */
        width: 100%;
        box-shadow: none;
        border: 1px solid #dedede;
        padding: 5px 20px;
        height: 50px;
        background;#FFF !important;
        color: #959595;
        font-size: 14px;
        line-height: 36px;
        border-radius: 0;
	}

	.toggle-button-icon-fade .toggle-button__icon{
        height: 40px;
        width: 36px;
        margin:4px;
		background:#eee;
	}

	.toggle-button-icon-fade label::before, .toggle-button-icon-fade label::after{
		left: 48px;

		font-weight: normal;
		font-size: 80%;
		color: #686868;

	}

	.selection-box::after{
		height: 43px;
	}


	.toggle-button-icon-fade .toggle-button__icon::before, .toggle-button-icon-fade .toggle-button__icon::after {
		background: #f00;
	}



	.toggle-button-icon-fade .toggle-button__icon::before, .toggle-button-icon-fade .toggle-button__icon::after {
		top:45%;
	}

	.toggle-button__icon::before, .toggle-button__icon::after {
		left: 42%;
	}







#ui-datepicker-div, .ui-datepicker-div, .ui-datepicker-inline {
	width:auto;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
border: none;
background: #f5821f;
font-weight: normal;
color: #fff;
font-weight: bold;
font-size: 14px;	
}
.ui-monthpicker .ui-datepicker-today a, .ui-monthpicker .ui-datepicker-today a:hover, .ui-datepicker .ui-datepicker-current-day a {
background: #44bc9b !important;
color: #FFF !important;
text-align: center;
border: none !important;
outline: none;
}
.ui-datepicker-calendar th span {
	color:#333 !important;
}
.ui-datepicker-header select, table.ui-datepicker td a {
color: #333;
background: #FFF !important;	
}
.ui-datepicker .ui-state-highlight {
background: #FFFA90 !important;
color: #333 !important;	
}

.ui-slider .ui-slider-handle {
border: 7px solid #44bc9b !important;
background: #f6f6f6  !important;
font-weight: normal  !important;
color: #454545  !important;
height: 25px  !important;
width: 25px  !important;
margin-top: -4px  !important;
border-radius: 20px  !important;
cursor: pointer !important;
}

.ui-slider-vertical .ui-widget-header, .ui-slider-horizontal .ui-widget-header {
	background-color: #44bc9b;
}
form.form.form-layout1 label.input-label {
	padding-bottom:0 !important;
	color: #FFF;
font-size: 14px !important;
}
.form-control {
background: #FFF !important;
border: 1px solid #ccc !important;
}

.breadcrumbs {
margin: 10px 0px 15px;
padding: 0;
}

.breadcrumbs ul {
  border-left: 1px solid #ddd;
  border-right: 1px solid #ddd;
  margin:0;
}

.breadcrumbs li {
  float: left;
  width: 20%;
  list-style:none;
}

.breadcrumbs a {
  position: relative;
  display: block;
  padding: 10px;
  padding-right: 0 !important; /* important overrides media queries */
  font-size: 13px;
  font-weight: bold;
  text-align: center;
  color: #888;
  cursor: pointer;
  border-bottom: 2px solid #333;
}

.breadcrumbs a:hover {
  color: #FFF;
}
.breadcrumbs a:hover > span:first-child {
  color: #888;
}
.breadcrumbs a.active {
  color: #FFF;
  border-bottom: 2px solid #44bc9b;
}

.breadcrumbs a span:first-child {
display: inline-block;
width: 24px;
height: 24px;
padding: 0px;
margin-right: 5px;
border: 1px solid #aaa;
border-radius: 50%;
background-color: #fff;
}

.breadcrumbs a.active span:first-child {
color: #fff;
border-color: #58d0af;
background-color: #58d0af;
}

.breadcrumbs a:before,
.breadcrumbs a:after {
content: '';
position: absolute;
top: 0;
left: 100%;
z-index: 1;
display: block;
width: 0;
height: 0;
border-top: 23px solid transparent;
border-bottom: 23px solid transparent;
border-left: 16px solid transparent;
    border-left-color: transparent;
}

.breadcrumbs li:last-child a:before,
.breadcrumbs li:last-child a:after {
  display: none;
}

@media (max-width: 720px) { 
  .breadcrumbs a {
    padding: 15px;
  }
  .breadcrumbs a:before,
  .breadcrumbs a:after {
    border-top-width: 26px;
    border-bottom-width: 26px;
    border-left-width: 13px;
  }
}

@media (max-width: 620px) { 
  .breadcrumbs a {
    padding: 10px;
    font-size: 12px;
  }
  .breadcrumbs a:before,
  .breadcrumbs a:after {
    border-top-width: 22px;
    border-bottom-width: 22px;
    border-left-width: 11px;
  }
}

@media (max-width: 520px) {
  .breadcrumbs a {
    padding: 5px;
  }
  .breadcrumbs a:before,
  .breadcrumbs a:after {
    border-top-width: 16px;
    border-bottom-width: 16px;
    border-left-width: 8px;
  }
  .breadcrumbs li a span:first-child {
    display: block;
    margin: 0 auto;
  }
  .breadcrumbs li a span:last-child {
    display: none;
  }
}

.clearfix {
	clear:both;
}
</style>

    <!--<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link id="bsdp-css" href="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
	<script src="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> 
<style>
.datepicker table tr td.active.active, .datepicker table tr td.active.highlighted.active, .datepicker table tr td.active.highlighted:active, .datepicker table tr td.active:active {
background-color: #04cca4;
border-radius: 100px;	
}
.table-condensed > thead > tr > th, .table-condensed > tbody > tr > th, .table-condensed > tfoot > tr > th, .table-condensed > thead > tr > td, .table-condensed > tbody > tr > td, .table-condensed > tfoot > tr > td {
	padding:3px !important;
}
.datepicker .datepicker-switch, .datepicker .next, .datepicker .prev, .datepicker tfoot tr th { font-weight:bold !important; }
.datepicker table tr td, .datepicker table tr th {
text-align: center;
padding: 8px 12px !important;
border-radius: 50px !important;
border: none;
}
.table-striped > tbody > tr:nth-child(2n+1), table > tbody > tr:nth-child(2n+1) {
border: none !important;	
}
.datepicker table tr td.today {
background: #F1F1F1 !important;
}
.table-condensed thead tr:nth-child(2) {
background: #44bc9b !important;
color: #FFF !important;	
}
.table-condensed thead tr th:nth-child(1) {
border-radius: 0px !important;	
}
.table-condensed thead tr th:nth-child(2) {
border-radius: 0px !important;	
}
.table-condensed thead tr th:nth-child(3) {
border-radius: 0px !important;	
}
.datepicker .datepicker-switch, .datepicker .next, .datepicker .prev, .datepicker tfoot tr th {
	font-size:16px;
}

</style>
<!-- Jquery Datepicker	
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 -->
<script>
<?php
$sum = mysqli_query($db, "SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$product_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
?> 
var SliderValues = [<?php
				$s = 0;
				while($suma = mysqli_fetch_assoc($sum)){
				$s++;	
				echo $sumamount = $suma['sum_insured'];
				if($s < mysqli_num_rows($sum)){
				echo ', ';
				}
				} ?>];

var iValue = SliderValues[0];
$(function () {
    $("#sum_slider").slider({
		range: "min",
        min: 0,
        max: SliderValues.length - 1,
        step: 1,
		value: 0,
        slide: function (event, ui) {
            $('#coverage_amount').text(SliderValues[ui.value]);
			//alert(SliderValues.length);
for (i = 0; i < SliderValues.length; i++) {
var group = SliderValues[i];
$('.coverage-amt-'+group).hide();
}
			$('.coverage-amt-'+SliderValues[ui.value]).show();
			$( "#coverage_amount" ).val( "$" + SliderValues[ui.value] );
			$( "#sum_insured2").val(SliderValues[ui.value]);
        }
    });

});
  </script>


<?php
if($product_id == '1'){
$bgs = array(4, 6, 8, 11); //Super
} else if($product_id == '2'){
$bgs = array(1, 2, 3, 7, 8, 11, 12, 15); //VTC
} else if($product_id == '3'){
$bgs = array(5, 9, 10); //Student
} else if($product_id == '9'){
$bgs = array(13, 14); //Student
} else {
$bgs = array(1, 2, 3, 7, 8, 11, 12); //VTC
}

$k = array_rand($bgs);
$bg = $bgs[$k];

?>

<section style="background: linear-gradient( rgba(162, 44, 44, 0.3), rgba(82, 82, 82, 0.3) ), url(<?php echo 'images/bgs/'.$bg;?>.jpg); background-size: cover; background-position: 50% 50%; padding:0px;">
<div class="container">

<div class="row">
<div class="col-md-2 hidden-xs"></div>
<div class="col-md-8 visa-insurance" style="padding-top: 10px;padding-bottom: 20px;background:rgba(0,0,0,0.7);"> 
<div class="breadcrumbs">
  <div class="inner">
    <ul class="cf">
      <li>
        <a class="active">
          <span>1</span>
          <span>Your Needs</span>
        </a>
      </li>
      <li>
        <a>
          <span>2</span>
          <span>Your Quote</span>
        </a>
      </li>
      <li>
        <a>
          <span>3</span>
          <span>Traveller Details</span>
        </a>
      </li>
      <li>
        <a>
          <span>4</span>
          <span>Success</span>
        </a>
      </li>
      <li>
        <a>
          <span>5</span>
          <span>Get Your Policy</span>
        </a>
      </li>
    </ul>
	<div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
</div>
<div class="clearfix"></div>

	<div class="col-md-12 text-center" style="padding: 20px 0;">
	<h1 style="font-weight:bold;margin: 0px;color: #FFF;font-size: 38px;"><strong><?php echo $product_name;?></strong></h1>
	<h2 style="margin: 0px;font-size: 16px;line-height: normal;color:#FFF;">To start, we have a few quick questions to understand your needs.</h2>
	</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		$("#dh-get-quote").validate();
	    /*$("#dh-get-quote").on("submit",function(){
	        $("#dh-get-quote").validate();
	    })*/
	    
	});
</script>
<?php
if(!empty($_REQUEST['error'])){
?>
	<span style="color:red">Sorry! Not eligible for family plan insurance.</span>
<?php
}
?>
<form action="vtc_results.php" method="get"  class="form form-layout1" role="form"  >


		  <style>
            #primary_destination{
                overflow-y: scroll;
            }
            #primary_destination_child{
                overflow-y: scroll;
            }
			.ui-datepicker-header{
				margin: -11px 0 0px;
			}



            .input-group {
                width: 100%;
            }
            .input-group .form-control{
                z-index: -1;
                position: initial;
            }


		</style>






	<div id="">


          <?php  for($orderi=1;$orderi<=17;$orderi++){ ?> 


          <!-- First Name and lastname -->
            <?php if(array_search("id_1",$orderdata) == $orderi): ?>
		<div class="col-md-12 col-sm-12  col-xs-12 no-padding">

			<?php   
			if(isset($allow_input_field['fname']) && $allow_input_field['fname'] == "on" ){ ?>

				<div class="col-md-6 col-sm-6 col-xs-12 control-input" style="padding-left: 0px;">
				    <label class="input-label">First Name</label>
					<input  id="fname" name="fname" size="" maxlength="40" value="" class="form-control " required  type="text"    style="padding: 8px;">
				</div>
      
			<?php } ?>

			<?php
			if(isset($allow_input_field['lname']) && $allow_input_field['lname'] == "on" ){ ?>
				<div class="col-md-6 col-sm-6 col-xs-12 control-input" style="padding-right: 0px;">
				    <label class="input-label">Last Name</label>
					<input id="lname" name="lname" size="" maxlength="40" value="" class="form-control " required type="text"  style="padding: 8px;" >
				</div>

			<?php } ?>

		</div>
	<?php endif; ?>
         <!-- firstname and lastname end -->



                <!-- Number of travellers and their ages -->
                    <?php if(array_search("id_3",$orderdata) == $orderi): ?>
		<div class="col-md-12 col-sm-12 col-xs-12 pull-left" style="padding-right: 0px; padding-left: 0px; ">

			<?php
			if(isset($allow_input_field['traveller']) && $allow_input_field['traveller'] == "on" ){
				$number_of_travel = $allow_input_field['traveller_number'];
				if($number_of_travel > 0){
					?>

					<div class="col-md-6 col-sm-6 col-xs-12 control-input">
						    <label class="input-label">Number of travellers </label>
							<select name="number_travelers" class="form-control form-select" id="number_travelers"  autocomplete="off" placeholder=""  required onchange="numoftravelers()">
								<option value="">Number of travellers</option>
								<?php for($i=1;$i<=$number_of_travel;$i++){ ?>
									<option value="<?php echo $i; ?>" <?php echo ($i==1) ? "selected" : ""; ?> ><?php echo $i; ?></option>
								<?php } ?>
							</select>
					</div>

                <?php   if(isset($allow_input_field['dob']) && $allow_input_field['dob'] == "on" ){    ?>
<?php 
$ordinal_words = array('oldest', 'oldest', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth');
for($t=1;$t<=$number_of_travel;$t++){ ?>				
<div class="col-md-6 col-sm-6 col-xs-12 control-input" id="traveller_<?php echo $t;?>" style="<?php if($t > 1){ echo 'display: none'; } ?>">
<label class="input-label">Age of the <?php echo $ordinal_words[$t];?> Traveller</label>
<select name="years[]" id="add_<?php echo $t;?>" class="form-control" onchange="numoftravelers()">
<?php $maxyear = date('Y');
$i = $maxyear;
$year = date('Y');
while($i>1918) {?>
<option value="<?php echo $year - $i;?>"><?php echo $i;?></option>
<?php if($i == 1984){?>
<option value="" selected>Year</option>
<?php } ?>
<?php $i--; } ?>
</select>
</div>
<?php } ?>
				<?php } } } ?>
             </div>
     

 

		<div class="col-md-12 col-sm-12" style="padding-right: 0px; padding-left: 0px;  ">
			
				<div id="birthday_view"></div>
			
		</div>

      <?php endif;?>
     <!-- End of number of trvaellers and ages -->


     
         <!-- Email Address -->
     <?php if(array_search("id_4",$orderdata) == $orderi): ?>
<style>
.emailicon {
z-index: 999;
padding: 13px 7px !important;
position: absolute;
margin-top: -41px;
margin-left: 3px;
background: #F1F1F1;
}

.mobemailicon {
z-index: 999;
padding: 12px 7px !important;
position: absolute;
margin-top: -40px;
margin-left: 3px;
background: #F1F1F1;
}

</style>	 
         <div class="col-md-12 col-sm-12 col-xs-12 control-input email-main">
		   <label class="input-label">Email Address (Required)</label>
			<input id="savers_email" name="savers_email" size="20" maxlength="100" value="" class="form-control form-control" type="email" placeholder="Email" style="padding-left: 40px !important;" required>
			<span class="hidden-xs emailicon" style="color:#44bc9b;">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</span>
			<span class="visible-xs mobemailicon" style="color:#44bc9b;">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</span>
		</div>
      <?php endif; ?>
		<!-- end of Email Address -->

         
 

       <!-- Smoke in 12 month o not -->
         <?php if(array_search("id_5",$orderdata) == $orderi): ?>
		<?php
		if(isset($allow_input_field['Smoke12']) && $allow_input_field['Smoke12'] == "on" ){ ?>
			<div class="col-md-12 col-sm-12 col-xs-12" style="padding-right: 0px; padding-left: 0px; float:left;">
				<div class="col-md-12 col-sm-12 control-label "  style="text-align: left; width:100%;" >
					<label class="input-label">Do you Smoke in last 12 months ? </label>
				</div>
				<div class="col-md-12 col-sm-12 control-input">
				<select name="Smoke12" class="form-control form-select" id="Smoke12" autocomplete="off" required>
						<option value="">Please choose</option>
						<option value="yes">Yes</option>
						<option value="no">No</option>
					</select>
				</div>
			</div>
		<?php } ?>
        <?php endif; ?>
         <!-- end date -->


        <!---Traveller Smoke-->
            <?php if(array_search("id_11",$orderdata) == $orderi): ?>
			<?php
				if(isset($allow_input_field['smoked']) && $allow_input_field['smoked'] == "on" ){ ?>
		         <div class="col-md-12 control-label "  style="text-align: left; float:left;" >
					<label class="input-label">Traveller Smoke</label></div>
				<div class="col-md-12 col-sm-12 col-xs-12 control-input" style="text-align: left; float:left;">
					<select name="traveller_Smoke" class="form-control form-select" id="traveller_Smoke" autocomplete="off" required>
						<option value="">Please choose</option>
						<option value="yes">Yes</option>
						<option value="no">No</option>
					</select>
				</div>
		
		<?php } ?>
        <?php endif; ?>
		
		
		

       <!---Destination country -->
         <?php if(array_search("id_6",$orderdata) == $orderi): ?>
        <?php
		if(isset($allow_input_field['Country']) && $allow_input_field['Country'] == "on" ){ 
           
             if($allowed_input_fields[0]->pro_travel_destination == 'worldwide'){

			?>

			<script>

                function CountryState(evt) {
                    if(evt.value=="Canada")
                    {
                        jQuery("#primary_destination_State_div").show();
                        jQuery("#usa_stop_div").hide();
                    }else if(evt.value=="United States")
                    {
                        jQuery("#primary_destination_State_div").hide();
                        jQuery("#usa_stop_div").hide();

                    }else
                    {
                        jQuery("#primary_destination_State_div").hide();
                        jQuery("#usa_stop_div").show();
                    }
                }
			</script>
			<div class="col-md-12 col-sm-12 col-xs-12 control-label "  style="text-align: left;">
				<label class="input-label">Trip destination </label></div>
			<div class="col-md-12 col-sm-12 col-xs-12 no-padding"> 
                <select name="primary_destination" onchange="CountryState(this)" class="form-control form-select" id="primary_destination" aria-required="true" required>
                    <option value='United States' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag us" data-title="United States">United States</option>
                    <option value='Canada' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ca" data-title="Canada" selected="selected">Canada</option>
                    <option value="">---------</option>-->
                    <option value='Andorra' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
                    <option value='United Arab Emirates' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
                    <option value='Afghanistan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
                    <option value='Antigua and Barbuda' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ag" data-title="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value='Anguilla' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ai" data-title="Anguilla">Anguilla</option>
                    <option value='Albania' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag al" data-title="Albania">Albania</option>
                    <option value='Armenia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag am" data-title="Armenia">Armenia</option>
                    <option value='Netherlands Antilles' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
                    <option value='Angola' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ao" data-title="Angola">Angola</option>
                    <option value='Antarctica' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag aq" data-title="Antarctica">Antarctica</option>
                    <option value='Argentina' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ar" data-title="Argentina">Argentina</option>
                    <option value='American Samoa' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag as" data-title="American Samoa">American Samoa</option>
                    <option value='Austria' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag at" data-title="Austria">Austria</option>
                    <option value='Australia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag au" data-title="Australia">Australia</option>
                    <option value='Aruba' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag aw" data-title="Aruba">Aruba</option>
                    <option value='Aland Islands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ax" data-title="Aland Islands">Aland Islands</option>
                    <option value='Azerbaijan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag az" data-title="Azerbaijan">Azerbaijan</option>
                    <option value='Bosnia and Herzegovina' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ba" data-title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value='Barbados' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bb" data-title="Barbados">Barbados</option>
                    <option value='Bangladesh' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bd" data-title="Bangladesh">Bangladesh</option>
                    <option value='Belgium' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag be" data-title="Belgium">Belgium</option>
                    <option value='Burkina Faso' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bf" data-title="Burkina Faso">Burkina Faso</option>
                    <option value='Bulgaria' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bg" data-title="Bulgaria">Bulgaria</option>
                    <option value='Bahrain' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bh" data-title="Bahrain">Bahrain</option>
                    <option value='Burundi' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bi" data-title="Burundi">Burundi</option>
                    <option value='Benin' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bj" data-title="Benin">Benin</option>
                    <option value='Bermuda' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bm" data-title="Bermuda">Bermuda</option>
                    <option value='Brunei Darussalam' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bn" data-title="Brunei Darussalam">Brunei Darussalam</option>
                    <option value='Bolivia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bo" data-title="Bolivia">Bolivia</option>
                    <option value='Brazil' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag br" data-title="Brazil">Brazil</option>
                    <option value='Bahamas' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bs" data-title="Bahamas">Bahamas</option>
                    <option value='Bhutan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bt" data-title="Bhutan">Bhutan</option>
                    <option value='Bouvet Island' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bv" data-title="Bouvet Island">Bouvet Island</option>
                    <option value='Botswana' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bw" data-title="Botswana">Botswana</option>
                    <option value='Belarus' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag by" data-title="Belarus">Belarus</option>
                    <option value='Belize' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag bz" data-title="Belize">Belize</option>
                    <option value='Cocos (Keeling) Islands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cc" data-title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value='Democratic Republic of the Congo' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cd" data-title="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                    <option value='Central African Republic' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cf" data-title="Central African Republic">Central African Republic</option>
                    <option value='Congo' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cg" data-title="Congo">Congo</option>
                    <option value='Switzerland' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ch" data-title="Switzerland">Switzerland</option>
                    <option value='Cote D Ivoire (Ivory Coast)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ci" data-title="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
                    <option value='Cook Islands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ck" data-title="Cook Islands">Cook Islands</option>
                    <option value='Chile' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cl" data-title="Chile">Chile</option>
                    <option value='Cameroon' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cm" data-title="Cameroon">Cameroon</option>
                    <option value='China' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cn" data-title="China">China</option>
                    <option value='Colombia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag co" data-title="Colombia">Colombia</option>
                    <option value='Costa Rica' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cr" data-title="Costa Rica">Costa Rica</option>
                    <option value='Serbia and Montenegro' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cs" data-title="Serbia and Montenegro">Serbia and Montenegro</option>
                    <option value='Cuba' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cu" data-title="Cuba">Cuba</option>
                    <option value='Cape Verde' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cv" data-title="Cape Verde">Cape Verde</option>
                    <option value='Christmas Island' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cx" data-title="Christmas Island">Christmas Island</option>
                    <option value='Cyprus' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cy" data-title="Cyprus">Cyprus</option>
                    <option value='Czech Republic' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag cz" data-title="Czech Republic">Czech Republic</option>
                    <option value='Germany' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag de" data-title="Germany">Germany</option>
                    <option value='Djibouti' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag dj" data-title="Djibouti">Djibouti</option>
                    <option value='Denmark' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag dk" data-title="Denmark">Denmark</option>
                    <option value='Dominica' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag dm" data-title="Dominica">Dominica</option>
                    <option value='Dominican Republic' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag do" data-title="Dominican Republic">Dominican Republic</option>
                    <option value='Algeria' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag dz" data-title="Algeria">Algeria</option>
                    <option value='Ecuador' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ec" data-title="Ecuador">Ecuador</option>
                    <option value='Estonia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ee" data-title="Estonia">Estonia</option>
                    <option value='Egypt' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag eg" data-title="Egypt">Egypt</option>
                    <option value='Western Sahara' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag eh" data-title="Western Sahara">Western Sahara</option>
                    <option value='Eritrea' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag er" data-title="Eritrea">Eritrea</option>
                    <option value='Spain' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag es" data-title="Spain">Spain</option>
                    <option value='Ethiopia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag et" data-title="Ethiopia">Ethiopia</option>
                    <option value='Finland' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag fi" data-title="Finland">Finland</option>
                    <option value='Fiji' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag fj" data-title="Fiji">Fiji</option>
                    <option value='Falkland Islands (Malvinas)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag fk" data-title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value='ederated States of Micronesia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag fm" data-title="Federated States of Micronesia">Federated States of Micronesia</option>
                    <option value='Faroe Islands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag fo" data-title="Faroe Islands">Faroe Islands</option>
                    <option value='France' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag fr" data-title="France">France</option>
                    <option value='France, Metropolitan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag fx" data-title="France, Metropolitan">France, Metropolitan</option>
                    <option value='Gabon' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ga" data-title="Gabon">Gabon</option>
                    <option value='Great Britain (UK)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gb" data-title="Great Britain (UK)">Great Britain (UK)</option>
                    <option value='Grenada' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gd" data-title="Grenada">Grenada</option>
                    <option value='Georgia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ge" data-title="Georgia">Georgia</option>
                    <option value='French Guiana' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gf" data-title="French Guiana">French Guiana</option>
                    <option value='Ghana' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gh" data-title="Ghana">Ghana</option>
                    <option value='Gibraltar' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gi" data-title="Gibraltar">Gibraltar</option>
                    <option value='Greenland' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gl" data-title="Greenland">Greenland</option>
                    <option value='Gambia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gm" data-title="Gambia">Gambia</option>
                    <option value='Guinea' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gn" data-title="Guinea">Guinea</option>
                    <option value='Guadeloupe' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gp" data-title="Guadeloupe">Guadeloupe</option>
                    <option value='Equatorial Guinea' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gq" data-title="Equatorial Guinea">Equatorial Guinea</option>
                    <option value='Greece' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gr" data-title="Greece">Greece</option>
                    <option value='S. Georgia and S. Sandwich Islands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gs" data-title="S. Georgia and S. Sandwich Islands">S. Georgia and S. Sandwich Islands</option>
                    <option value='Guatemala' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gt" data-title="Guatemala">Guatemala</option>
                    <option value='Guam' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gu" data-title="Guam">Guam</option>
                    <option value='Guinea-Bissau' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gw" data-title="Guinea-Bissau">Guinea-Bissau</option>
                    <option value='Guyana' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag gy" data-title="Guyana">Guyana</option>
                    <option value='Hong Kong' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag hk" data-title="Hong Kong">Hong Kong</option>
                    <option value='Heard Island and McDonald Islands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag hm" data-title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                    <option value='Honduras' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag hn" data-title="Honduras">Honduras</option>
                    <option value='Croatia (Hrvatska)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag hr" data-title="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                    <option value='Haiti' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ht" data-title="Haiti">Haiti</option>
                    <option value='Hungary' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag hu" data-title="Hungary">Hungary</option>
                    <option value='Indonesia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag id" data-title="Indonesia">Indonesia</option>
                    <option value='Ireland' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ie" data-title="Ireland">Ireland</option>
                    <option value='Israel' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag il" data-title="Israel">Israel</option>
                    <option value='India' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag in" data-title="India">India</option>
                    <option value='British Indian Ocean Territory' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag io" data-title="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value='Iraq' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag iq" data-title="Iraq">Iraq</option>
                    <option value='Iran' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ir" data-title="Iran">Iran</option>
                    <option value='Iceland' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag is" data-title="Iceland">Iceland</option>
                    <option value='Italy' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag it" data-title="Italy">Italy</option>
                    <option value='Jamaica' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag jm" data-title="Jamaica">Jamaica</option>
                    <option value='Jordan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag jo" data-title="Jordan">Jordan</option>
                    <option value='Japan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag jp" data-title="Japan">Japan</option>
                    <option value='Kenya' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ke" data-title="Kenya">Kenya</option>
                    <option value='Kyrgyzstan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag kg" data-title="Kyrgyzstan">Kyrgyzstan</option>
                    <option value='Cambodia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag kh" data-title="Cambodia">Cambodia</option>
                    <option value='Kiribati' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ki" data-title="Kiribati">Kiribati</option>
                    <option value='Comoros' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag km" data-title="Comoros">Comoros</option>
                    <option value='Saint Kitts and Nevis' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag kn" data-title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value='Korea (North)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag kp" data-title="Korea (North)">Korea (North)</option>
                    <option value='Korea (South)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag kr" data-title="Korea (South)">Korea (South)</option>
                    <option value='Kuwait' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag kw" data-title="Kuwait">Kuwait</option>
                    <option value='Cayman Islands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ky" data-title="Cayman Islands">Cayman Islands</option>
                    <option value='Kazakhstan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag kz" data-title="Kazakhstan">Kazakhstan</option>
                    <option value='Laos' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag la" data-title="Laos">Laos</option>
                    <option value='Lebanon' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag lb" data-title="Lebanon">Lebanon</option>
                    <option value='Saint Lucia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag lc" data-title="Saint Lucia">Saint Lucia</option>
                    <option value='Liechtenstein' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag li" data-title="Liechtenstein">Liechtenstein</option>
                    <option value='Sri Lanka' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag lk" data-title="Sri Lanka">Sri Lanka</option>
                    <option value='Liberia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag lr" data-title="Liberia">Liberia</option>
                    <option value='Lesotho' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ls" data-title="Lesotho">Lesotho</option>
                    <option value='Lithuania' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag lt" data-title="Lithuania">Lithuania</option>
                    <option value='Luxembourg' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag lu" data-title="Luxembourg">Luxembourg</option>
                    <option value='Latvia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag lv" data-title="Latvia">Latvia</option>
                    <option value='Libya' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ly" data-title="Libya">Libya</option>
                    <option value='Morocco' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ma" data-title="Morocco">Morocco</option>
                    <option value='Monaco' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mc" data-title="Monaco">Monaco</option>
                    <option value='Moldova' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag md" data-title="Moldova">Moldova</option>
                    <option value='Madagascar' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mg" data-title="Madagascar">Madagascar</option>
                    <option value='Marshall Islands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mh" data-title="Marshall Islands">Marshall Islands</option>
                    <option value='Macedonia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mk" data-title="Macedonia">Macedonia</option>
                    <option value='Mali' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ml" data-title="Mali">Mali</option>
                    <option value='Myanmar' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mm" data-title="Myanmar">Myanmar</option>
                    <option value='Mongolia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mn" data-title="Mongolia">Mongolia</option>
                    <option value='Macao' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mo" data-title="Macao">Macao</option>
                    <option value='Northern Mariana Islands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mp" data-title="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value='Martinique' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mq" data-title="Martinique">Martinique</option>
                    <option value='Mauritania' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mr" data-title="Mauritania">Mauritania</option>
                    <option value='Montserrat' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ms" data-title="Montserrat">Montserrat</option>
                    <option value='Malta' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mt" data-title="Malta">Malta</option>
                    <option value='Mauritius' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mu" data-title="Mauritius">Mauritius</option>
                    <option value='Maldives' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mv" data-title="Maldives">Maldives</option>
                    <option value='Malawi' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mw" data-title="Malawi">Malawi</option>
                    <option value='Mexico' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mx" data-title="Mexico">Mexico</option>
                    <option value='Malaysia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag my" data-title="Malaysia">Malaysia</option>
                    <option value='Mozambique' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag mz" data-title="Mozambique">Mozambique</option>
                    <option value='Namibia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag na" data-title="Namibia">Namibia</option>
                    <option value='New Caledonia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag nc" data-title="New Caledonia">New Caledonia</option>
                    <option value='Niger' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ne" data-title="Niger">Niger</option>
                    <option value='Norfolk Island' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag nf" data-title="Norfolk Island">Norfolk Island</option>
                    <option value='Nigeria' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ng" data-title="Nigeria">Nigeria</option>
                    <option value='Nicaragua' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ni" data-title="Nicaragua">Nicaragua</option>
                    <option value='Netherlands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag nl" data-title="Netherlands">Netherlands</option>
                    <option value='Norway' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag no" data-title="Norway">Norway</option>
                    <option value='Nepal' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag np" data-title="Nepal">Nepal</option>
                    <option value='Nauru' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag nr" data-title="Nauru">Nauru</option>
                    <option value='Niue' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag nu" data-title="Niue">Niue</option>
                    <option value='New Zealand (Aotearoa)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag nz" data-title="New Zealand (Aotearoa)">New Zealand (Aotearoa)</option>
                    <option value='Oman' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag om" data-title="Oman">Oman</option>
                    <option value='Panama' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag pa" data-title="Panama">Panama</option>
                    <option value='Peru' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag pe" data-title="Peru">Peru</option>
                    <option value='French Polynesia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag pf" data-title="French Polynesia">French Polynesia</option>
                    <option value='Papua New Guinea' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag pg" data-title="Papua New Guinea">Papua New Guinea</option>
                    <option value='Philippines' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ph" data-title="Philippines">Philippines</option>
                    <option value='Pakistan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag pk" data-title="Pakistan">Pakistan</option>
                    <option value='Poland' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag pl" data-title="Poland">Poland</option>
                    <option value='Saint Pierre and Miquelon' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag pm" data-title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value='Pitcairn' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag pn" data-title="Pitcairn">Pitcairn</option>
                    <option value='Puerto Rico' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag pr" data-title="Puerto Rico">Puerto Rico</option>
                    <option value='Palestinian Territory' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ps" data-title="Palestinian Territory">Palestinian Territory</option>
                    <option value='Portugal' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag pt" data-title="Portugal">Portugal</option>
                    <option value='Palau' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag pw" data-title="Palau">Palau</option>
                    <option value='Paraguay' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag py" data-title="Paraguay">Paraguay</option>
                    <option value='Qatar' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag qa" data-title="Qatar">Qatar</option>
                    <option value='Reunion' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag re" data-title="Reunion">Reunion</option>
                    <option value='Romania' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ro" data-title="Romania">Romania</option>
                    <option value='Russian Federation' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ru" data-title="Russian Federation">Russian Federation</option>
                    <option value='Rwanda' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag rw" data-title="Rwanda">Rwanda</option>
                    <option value='Saudi Arabia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sa" data-title="Saudi Arabia">Saudi Arabia</option>
                    <option value='Solomon Islands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sb" data-title="Solomon Islands">Solomon Islands</option>
                    <option value='Seychelles' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sc" data-title="Seychelles">Seychelles</option>
                    <option value='Sudan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sd" data-title="Sudan">Sudan</option>
                    <option value='Sweden' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag se" data-title="Sweden">Sweden</option>
                    <option value='Singapore' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sg" data-title="Singapore">Singapore</option>
                    <option value='Saint Helena' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sh" data-title="Saint Helena">Saint Helena</option>
                    <option value='Slovenia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag si" data-title="Slovenia">Slovenia</option>
                    <option value='Svalbard and Jan Mayen' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sj" data-title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value='Slovakia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sk" data-title="Slovakia">Slovakia</option>
                    <option value='Sierra Leone' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sl" data-title="Sierra Leone">Sierra Leone</option>
                    <option value='San Marino' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sm" data-title="San Marino">San Marino</option>
                    <option value='Senegal' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sn" data-title="Senegal">Senegal</option>
                    <option value='Somalia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag so" data-title="Somalia">Somalia</option>
                    <option value='Suriname' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sr" data-title="Suriname">Suriname</option>
                    <option value='Sao Tome and Principe' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag st" data-title="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value='USSR (former)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag su" data-title="USSR (former)">USSR (former)</option>
                    <option value='El Salvador' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sv" data-title="El Salvador">El Salvador</option>
                    <option value='Syria' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sy" data-title="Syria">Syria</option>
                    <option value='Swaziland' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag sz" data-title="Swaziland">Swaziland</option>
                    <option value='Turks and Caicos Islands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tc" data-title="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value='Chad' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag td" data-title="Chad">Chad</option>
                    <option value='French Southern Territories' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tf" data-title="French Southern Territories">French Southern Territories</option>
                    <option value='Togo' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tg" data-title="Togo">Togo</option>
                    <option value='Thailand' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag th" data-title="Thailand">Thailand</option>
                    <option value='Tajikistan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tj" data-title="Tajikistan">Tajikistan</option>
                    <option value='Tokelau' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tk" data-title="Tokelau">Tokelau</option>
                    <option value='Timor-Leste' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tl" data-title="Timor-Leste">Timor-Leste</option>
                    <option value='Turkmenistan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tm" data-title="Turkmenistan">Turkmenistan</option>
                    <option value='Tunisia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tn" data-title="Tunisia">Tunisia</option>
                    <option value='Tonga' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag to" data-title="Tonga">Tonga</option>
                    <option value='East Timor' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tp" data-title="East Timor">East Timor</option>
                    <option value='Turkey' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tr" data-title="Turkey">Turkey</option>
                    <option value='Trinidad and Tobago' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tt" data-title="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value='Tuvalu' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tv" data-title="Tuvalu">Tuvalu</option>
                    <option value='Taiwan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tw" data-title="Taiwan">Taiwan</option>
                    <option value='Tanzania' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag tz" data-title="Tanzania">Tanzania</option>
                    <option value='Ukraine' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ua" data-title="Ukraine">Ukraine</option>
                    <option value='Uganda' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ug" data-title="Uganda">Uganda</option>
                    <option value='United Kingdom' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag uk" data-title="United Kingdom">United Kingdom</option>
                    <option value='United States Minor Outlying Islands' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag um" data-title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                    <option value='Uruguay' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag uy" data-title="Uruguay">Uruguay</option>
                    <option value='Uzbekistan' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag uz" data-title="Uzbekistan">Uzbekistan</option>
                    <option value='Vatican City State (Holy See)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag va" data-title="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                    <option value='Saint Vincent and the Grenadines' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag vc" data-title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                    <option value='Venezuela' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ve" data-title="Venezuela">Venezuela</option>
                    <option value='Virgin Islands (British)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag vg" data-title="Virgin Islands (British)">Virgin Islands (British)</option>
                    <option value='Virgin Islands (U.S.)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag vi" data-title="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                    <option value='Viet Nam' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag vn" data-title="Viet Nam">Viet Nam</option>
                    <option value='Vanuatu' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag vu" data-title="Vanuatu">Vanuatu</option>
                    <option value='Wallis and Futuna' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag wf" data-title="Wallis and Futuna">Wallis and Futuna</option>
                    <option value='Samoa' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ws" data-title="Samoa">Samoa</option>
                    <option value='Yemen' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag ye" data-title="Yemen">Yemen</option>
                    <option value='Mayotte' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag yt" data-title="Mayotte">Mayotte</option>
                    <option value='Yugoslavia (former)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag yu" data-title="Yugoslavia (former)">Yugoslavia (former)</option>
                    <option value='South Africa' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag za" data-title="South Africa">South Africa</option>
                    <option value='Zambia' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag zm" data-title="Zambia">Zambia</option>
                    <option value='Zaire (former)' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag zr" data-title="Zaire (former)">Zaire (former)</option>
                    <option value='Zimbabwe' data-image="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/msdropdown/icons/blank.gif'; ?>" data-imagecss="flag zw" data-title="Zimbabwe">Zimbabwe</option>
                </select>
			</div>
			<div id="primary_destination_State_div">
				<div class="col-md-12 control-label "  style="text-align: left; float:left;" >
					<label class="input-label">Primary destination in Canada</label></div>
				<div class="col-md-12 col-sm-12 col-xs-12 control-input" style="text-align: left; float:left;">
					<select name="primary_destination_State" class="form-control form-select" id="primary_destination_State" autocomplete="off" required>
						<option value="">Please choose</option>
						<option value="Alberta">Alberta</option>
						<option value="British Columbia">British Columbia</option>
						<option value="Manitoba">Manitoba</option>
						<option value="New Brunswick">New Brunswick</option>
						<option value="Newfoundland">Newfoundland</option>
						<option value="North West Territories">North West Territories</option>
						<option value="Nova Scotia">Nova Scotia</option>
						<option value="Nunavut">Nunavut</option>
						<option value="Ontario" selected>Ontario</option>
						<option value="Prince Edward Island">Prince Edward Island</option>
						<option value="Quebec">Quebec</option>
						<option value="Saskatchewan">Saskatchewan</option>
						<option value="Yukon Territory">Yukon Territory</option>
					</select>
				</div>
			</div>
			
			<div id="do_you_smoke">
				<div class="col-md-12 control-label "  style="text-align: left; float:left;" >
					<label class="input-label">Do you Smoke</label></div>
				<div class="col-md-12 col-sm-12 col-xs-12 control-input" style="text-align: left; float:left;">
					<select name="primary_destination_State" class="form-control form-select" id="primary_destination_State" autocomplete="off" required>
						<option value="">Please choose</option>
						<option value="yes">Yes</option>
						<option value="no">No</option>
					</select>
				</div>
			</div>

			<div id="usa_stop_div" style="display:none;">
				<div class="col-md-12 control-label "  style="text-align: left;" >
					<label class="input-label">Any stop-over in the US?</label> </div>
				<div class="col-md-12">
				<select name="usa_stop" id="usa_stop" aria-invalid="false" class="form-control" required>

                       <?php  for($i=0;$i<=$allow_input_field['us_stop_days'];$i++): 
                            
                           if($allow_input_field['us_stop_days'] == 0 ):

                            echo "<option selected='' value='0'>None</option>";
                                
                            else:

                             echo  "<option value='$i'>$i days</option>";
                            endif;  
                        endfor; ?>
                    </select>
				</div>
			</div>


	





	        <?php } else {  ?>


        

        <div class="col-md-6 col-sm-6 col-xs-12 control-label ">
         <label class="input-label">Primary destination in Canada </label> 
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
        <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off" required>
            <option value="">Please choose</option>
            <option value="Alberta" selected="">Alberta</option>
            <option value="British Columbia">British Columbia</option>
            <option value="Manitoba">Manitoba</option>
            <option value="New Brunswick">New Brunswick</option>
            <option value="Newfoundland">Newfoundland</option>
            <option value="North West Territories">North West Territories</option>
            <option value="Nova Scotia">Nova Scotia</option>
            <option value="Nunavut">Nunavut</option>
            <option value="Ontario" selected>Ontario</option>
            <option value="Prince Edward Island">Prince Edward Island</option>
            <option value="Quebec">Quebec</option>
            <option value="Saskatchewan">Saskatchewan</option>
            <option value="Yukon Territory">Yukon Territory</option>
        </select>
     </div>

<?php } } ?>













        <?php endif; ?>
        <!-- Destination ends -- >


        


                  <!--  Phone Number -->
             <?php if(array_search("id_7",$orderdata) == $orderi): ?>
			<?php
			if(isset($allow_input_field['phone']) && $allow_input_field['phone'] == "on" ){ ?>
<style>
.phoneicon {
z-index: 999;
padding: 13px 7px !important;
position: absolute;
margin-top: -41px;
margin-left: 3px;
background: #F1F1F1;	
}
	
@media screen and (max-width 600px){
.phoneicon {
z-index: 999;
padding: 13px 7px !important;
position: absolute;
margin-top: -41px;
margin-left: 3px;
background: #F1F1F1;
}
}
</style>			
				<div class="col-md-12 col-sm-12" style="padding-right: 0px; padding-left: 0px;">
				<div class="col-md-12 col-sm-12" style="padding-right: 0px; padding-left: 0px;">
					<div class="col-md-12 col-sm-12 col-xs-12 control-input">
					<label class="input-label">Phone <small id="phone_error" class="text-danger"></small></label>
							<input id="phone" name="phone" size="" minlength="10" maxlength="11" value="" class="form-control " placeholder="Enter Phone Number" type="text" required  onkeyup="validatephone()" style="padding-left: 40px !important;">
							<span class="phoneicon" style="color:#44bc9b;">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</span>
					</div>
				</div>
<script>
function validatephone(){
var checkphone = document.getElementById('phone').value;
document.getElementById('phone').value = checkphone.replace(/\D/g,'');
if (checkphone.length < 10) {
document.getElementById('phone_error').innerHTML = 'Must be 10 digits';
document.getElementById('GET_QUOTES').disabled = true;	
} else {
document.getElementById('GET_QUOTES').disabled = false;	
document.getElementById('phone_error').innerHTML = '';
}
}
</script>				
			</div>
			<?php } ?>
           <?php endif; ?>
          <!-- end -->



       
        
           <!-- Start Date  and End date -->
            <?php if(array_search("id_8",$orderdata) == $orderi): ?>
              <?php if(isset($allow_input_field['sdate']) && $allow_input_field['sdate'] == "on" && isset($allow_input_field['edate']) && $allow_input_field['edate'] == "on"){ ?>

			<div class="col-md-12 col-sm-12 col-xs-12 control-input">
			<div class="col-md-6 col-sm-6 col-xs-12 control-input" style="padding-left:0px;">
					<label class="input-label"> Start Date</label>
            <input  id="departure_date"  name="departure_date" value="" class="form-control datepicker" autocomplete="off"  type="text" placeholder="Start Date" required <?php if($supervisa == 'yes'){?> onchange="supervisayes()" <?php } ?> data-format="yyyy-mm-dd" data-lang="en" data-RTL="false">
			
					<!--<script>
						$('#departure_date').datepicker({
						format: 'yyyy-mm-dd',
						todayHighlight:'TRUE',
						autoclose: true,
						});
					</script>-->

                </div>
			
				<div class="col-md-6 col-sm-6 col-xs-12 control-input" style="padding-right:0px;">
					    <label class="input-label">End Date</label>
                        <input id="return_date" name="return_date" class="form-control datepicker" autocomplete="off" type="text" placeholder="End Date" required <?php if($supervisa == 'yes'){?> readonly="true" <?php } ?> value="" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false">
				<?php if($supervisa == 'no'){?>
						<!--<script>
							$('#return_date').datepicker({
							format: 'yyyy-mm-dd',
							todayHighlight:'TRUE',
							autoclose: true,
							});
						</script>-->
				<?php } ?>
				</div>
				</div>
			<script type="text/javascript">
            
                    jQuery(document).ready(function() {
                        // jQuery("#primary_destination").msDropdown();
                    });
                    

				</script>

               <?php } ?>
             <?php endif ?>
           <!-- end  of starting date and ending date --> 



                          <!-- Older traveller Gender -->
 <?php if(array_search("id_12",$orderdata) == $orderi): ?>
<?php if(isset($allow_input_field['traveller_gender']) && $allow_input_field['traveller_gender'] == "on" ){ ?>
    <div class="col-md-12 control-input gender-main">
        <div class="col-md-12 col-sm-12 col-xs-12 control-label no-padding" style="padding: 0;">
            <label class="input-label">Gender of the oldest traveller</label>
		</div>
        <div class="col-md-12 col-sm-12 col-xs-12 control-input no-padding input custom_traveller" style="padding: 0;">
                        <div class="traveller-label">
                            <select name="old_traveller_gender" id="gender" class="form-control form-select" required>
                                <option value="">Please Choose</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        
         </div>
		 </div>
    <?php } ?>
 <?php endif; ?>
    
    <!-- Order Gender ends -->




       <!--   Gender of person -->
        <?php if(array_search("id_14",$orderdata) == $orderi): ?>
		<?php
		if(isset($allow_input_field['gender']) && $allow_input_field['gender'] == "on" ){ ?>
		   <div class="col-md-12" style="padding:0px;">
			<div class="col-md-12 col-sm-12 control-label"  style="text-align: left;">
				<label class="input-label">Gender</label>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 control-input">
			<select name="gender" id="gender" class="form-control" required="">
						<option value="">--- Please Choose ---</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						</select>
			</div>
			</div>
		<?php } ?>
           <? endif; ?>
      <!-- Gender of person ends -->



        <!-- pre existing plan and family plan in one row -->

            <?php if(array_search("id_15",$orderdata) == $orderi): ?>
		<div class="col-md-12 col-sm-12 col-xs-12 control-input" style="padding-right:0px;padding-left:0px;">

			<?php
			if(isset($allow_input_field['fplan']) && $allow_input_field['fplan'] == "on" ){ ?>
				<div class="col-md-6 col-sm-6 col-xs-12" style="padding-right: 0px; padding-left: 0px;">
					<div class="col-md-12 col-sm-12 col-xs-12 control-label "  >
						<label class="input-label">Do you require Family Plan?</label></div>
					<div class="col-md-12 col-sm-12 col-xs-12 control-input"  >
						<select name="familyplan" id="familyplan" class="form-control" onchange="changefamily()">
						<option value="no">No</option>
						<option value="yes">Yes</option>
						</select>

<input type="hidden" id="familyplan_temp" name="familyplan_temp" value="no">
					</div>
				</div>
<script>
function changefamily(){
document.getElementById('familyplan_temp').value = document.getElementById('familyplan').value;
checkfamilyplan();
}
</script>
			<?php } ?>


			<?php
			if(isset($allow_input_field['pre_existing']) && $allow_input_field['pre_existing'] == "on" ){ ?>
				<div class="col-md-6 col-sm-6" style="padding-right: 0px; padding-left: 0px;">
					<div class="col-md-12 col-sm-12 col-xs-12 control-label "  style="text-align: left;    float:right; ">
						<label class="input-label">Pre-existing Condition </label> </div>
					<div class="col-md-12 col-sm-12 col-xs-12 control-input" style=" float:right;">
						<select name="pre_existing" id="pre_existing" class="form-control" required="">
						<option value="no">No</option>
						<option value="yes">Yes</option>
						</select>

					</div>
				</div>
			<?php } ?>
		</div>

      <?php endif; ?>
       <!-- end of pre existing plan and  family plan -->


       <!-- Sum insured -->
             <?php if(array_search("id_17",$orderdata) == $orderi): ?>
        <?php
		if(isset($allow_input_field['sum_insured']) && $allow_input_field['sum_insured'] == "on" ){ ?>
            <div class="col-md-12 col-sm-12 col-xs-12 control-label "  style="text-align: left;">

			<?php
$minsum = mysqli_query($db, "SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$product_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL) limit 1");
$min_sum = mysqli_fetch_assoc($minsum);
$suminsured = $min_sum->sum_insured;
?> 

				<h4 class="coverage" style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left; color:#FFF;">Coverage: <input type="text" id="coverage_amount" name="coverage_amount" style="border:0; font-size:23px; color:#44bc9b; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: left;width: 150px;" value="$<?php echo $suminsured;?>"></h4>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
				<div id="sum_slider" style="padding: 5px;border: none;"></div>
				<input type="hidden" id="sum_insured2" name="sum_insured2" value="<?php echo $suminsured;?>" />

			<input name="sum_insured" value="" type="hidden" id="hidden_sum_insured">
			
			</div>

			

			<script>
/*
                jQuery(document).ready(function($){
                	jQuery(window).load(function(){
                		
            			var values = $('input[type="range"]').data("steps").split(',');
	                    var default_value = $('input[type="range"]').data("default");
	                      
	                       $('input[type="range"]').rangeslider({
	                        polyfill : false,
	                        onInit : function() {
	                            this.output = $( '<div class="range-output" />' ).insertAfter( this.$range).html( "$ "+default_value); //this.$element.val()
	                            $('#hidden_sum_insured').val( default_value );
	                        },
	                        onSlide : function( position, value ) {
	                        	console.log(values);
	                            this.output.html(  "$ "+values[this.value]  );
	                            console.log("Values "+this.value);
	                            $('#hidden_sum_insured').val( values[this.value] );
	                        },
	                        onSlideEnd: function(position, value ){
	                        	localStorage.sliderValue = values[this.value];
	                        	localStorage.sliderPosition = this.value;
	                        }
	                    });
                       if (typeof Storage !== 'undefined' && localStorage.getItem("sliderValue")!==null) {
                			jQuery('input[type="range"]').rangeslider('update', true);
                		}
                	})

                });
               
*/
			</script>


		<?php  } ?>
         <?php endif; ?>
      <!-- Sum insured end -->



         <?php } /*** end of for loop ***/ ?>

		   <div class="col-md-12"  style="margin-top: 20px;">
		   <span id="family_error" style="display: none; font-size: 16px;font-weight: bold;text-align: right;padding: 20px; color:yellow;"><i class="fa fa-warning"></i> </span>
				<button type="submit" name="GET QUOTES" id="GET_QUOTES"  class="btn btn-danger" style="border: 1px solid #44bc9b;padding: 10px 30px;"><i class="fa fa-list"></i> Get a Quote </button>
			</div>

	</div>

<input type="hidden" name="broker" value="<?php echo $_REQUEST['broker']; ?>">     
<input type="hidden" name="agent" value="<?php echo $_REQUEST['agent']; ?>">
<input type="hidden" name="quote" value="<?php //echo randomquote(); ?>">
</form>
<div class="clearfix"></div>

</div>
<div class="col-md-2 hidden-xs"></div>
</div>
</div>
</section>
<script>
<?php if($supervisa == 'yes'){?>
function supervisayes(){
//window.setTimeout(function(){	
	var tt = document.getElementById('departure_date').value;
	var date = new Date(tt);
	var newdate = new Date(date);
	newdate.setDate(newdate.getDate() + 364);
	var dd = newdate.getDate();
	var mm = newdate.getMonth() + 1;
	var y = newdate.getFullYear();
	if(mm <= 9){
	var mm = '0'+mm;	
	}
	if(dd <= 9){
	var dd = '0'+dd;	
	}
	//var someFormattedDate = mm + '/' + dd + '/' + y;
	var someFormattedDate = y + '-' + mm + '-' + dd;
	document.getElementById('return_date').value = someFormattedDate;
//}, 1000);
}
<?php } ?>

function checkfamilyplan(){
//Eligibility
var inps = document.getElementsByName('years[]');
var ages = [];
for (var i = 0; i <inps.length; i++) {
var inp=inps[i];
if(inp.value > 0){
	ages.push(inp.value);
}
}

Array.prototype.max = function() {
  return Math.max.apply(null, this);
};

Array.prototype.min = function() {
  return Math.min.apply(null, this);
};

var max_age = ages.max();
var min_age = ages.min();

if(document.getElementById('familyplan_temp').value == 'yes'){
if(document.getElementById('number_travelers').value >='2' && max_age <=59 && min_age <=21){
document.getElementById('GET_QUOTES').style.display = 'block';
document.getElementById('family_error').innerHTML = '';
document.getElementById('family_error').style.display = 'none';
} else {
document.getElementById('GET_QUOTES').style.display = 'none';
if(document.getElementById('number_travelers').value <'2'){
document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.';
} else if(max_age > 59){
document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Maximum age for family plan should be 59';	
} else if(min_age > 21){
document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21';	
}
document.getElementById('family_error').style.display = 'block';	
}


} else {
	document.getElementById('GET_QUOTES').style.display = 'block';
	document.getElementById('family_error').style.display = 'none';	
}
	
}

function numoftravelers(){
	//Number OF Traveller
	var number_of_traveller = $("#number_travelers").val();
	for(var t=2; t<=8; t++){
		$("#traveller_"+t).hide();
		document.getElementById('add_'+t).required = false;
	}
	for(var i=2; i<=number_of_traveller; i++){
	$("#traveller_"+i).show();
	document.getElementById('add_'+i).required = true;
	}
	//reset values for other people
	var numt = document.getElementById('number_travelers').value;
	var one = 1;
	var num = parseInt(numt) + parseInt(one);
	for(var a=num; a<8; a++){
	document.getElementById('add_'+a).value = '';
	document.getElementById('add_'+a).required = false;
	}

	if(document.getElementById('familyplan_temp').value == 'yes'){
	checkfamilyplan();
	}
}


</script>



<script>
	
 /*   jQuery('#gender:before').click(function() {
        var text = jQuery(this).attr('data-on-text');
//        var text2 = jQuery(this).attr('data-off-text');
//        checkbox-6
         console.log(text);
//         console.log(text2);
    });

    function subform(){
        alert('submit form');
        return false;
    }
*/
    jQuery(document).ready(function($){
        $("select[name=number_travelers]").on("change", function(){
            var number_of_traveller = $(this).val();
            var aa = "";
            for(var i=2; i<=number_of_traveller; i++){
                aa = aa +'<div class="col-md-6 col-sm-6 col-xs-12 control-input">' + $(".birthday")[0].outerHTML +'</div>';
            }

            $("#birthday_view").html(aa);
            console.log( $(".birthday")[0] );
        })
  /*
        $("button[type=submit]").on("change", function(){
            //function validateForm() {
            //if($(this).val() > 1){
            ///		alert('fsd');
            //		return false;
            //}
            //}
        });

       $('button[type="submit"]').click(function() {
            if($("select[name=number_travelers]").val()>1  && $("select[name=familyplan]").val() == "1"){
                var counter = 0;
                var aged=[];
                $("select[name=birth_month\\[\\]]").each(function(){
                    //alert( $("select[name=birth_month\\[\\]]").eq(counter).val() );
                    var d = new Date( $("select[name=birth_year\\[\\]]").eq(counter).val() ,   $("select[name=birth_month\\[\\]]").eq(counter).val()-1,  $("select[name=birth_day\\[\\]]").eq(counter).val() );
                    var tDate = new Date();
                    var age=tDate.getFullYear() - d.getFullYear();
                    aged.push(age);

                    var max=Math.max.apply(Math,aged);
                    var min=Math.min.apply(Math,aged);
                    //if((max>="21" && max<="58") && (min>="1" && min<"21")){
                    if((max < 58) && (min >0 && min < 21)){
                        $("#familymsg").hide();
                        return true;
                    }else{
                        $("#familymsg").show();
                        return false;
                    }
                    counter++;
                })
            }else{
                $("#familymsg").hide();
            }
        });

		$('#GET_QUOTES').click(function(){

			var deparature = $('#departure_date').val();
			$('#departuredate').val(deparature);

			var returndate = $('#return_date').val();
			$('#returndate').val(returndate);


	 	});
*/

    });
</script>




<script>

    // function validateEmail(email) {
        // var re =  /\S+@\S+\.\S+/;
        // return re.test(email);
    // }

    // function validate001(email) {

        // if (validateEmail(email)) {
            // document.getElementById('GET_QUOTES').disabled = false;
        // } else {
            // document.getElementById('GET_QUOTES').disabled = 'disabled';
        // }
        // return false;
    // }



</script>



