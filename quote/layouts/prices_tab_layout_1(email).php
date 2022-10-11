    <style>
        .main-content .container{
            width: 100%;
        }
        .dh-listings {

        }

        .dh-listings b {
            font-size: 10px;
        }

        .dh-listings hr {
            border: 1px solid #d0d0d0;
            margin: 0px !important;
        }

        .dh-listings ul {
            font-size: 12px;
        }

        .dh-listings tr td, .dh-listings tr th {
            border: 0px solid #eee;
            border-top: 0px !important;
        }

        .dh-listings {

        }

        .testshortcode {
            display: none;
        }

        .main-content {
            background: #f3f5f9 !important;
        }

        .plan-details, .side-bar {
            position: relative;
            background: #fff;
            -webkit-box-shadow: 0 1px 2px 0 rgba(34, 36, 38, .22);
            margin: 15px 0;
            padding: 1em;
            border-radius: .25rem;
            border: 1px solid #ddd;
        }

        #dh-get-quote select, #dh-get-quote input {
            height: 51px;
        }

        .form-control {
            border-radius: 5px !important;
        }

        .side-bar {
            height: auto;
            padding: 20px 0;
        }

        .adjust-quoto {
            border-top: 2px solid #ddd;
        }

        .adjust-quoto h2 {
            color: #464644;
            font-size: 26px;
            font-weight: 400;
        }

        .adjust-quoto h4 {
            color: #8e939c;
            font-size: 20px;
            font-weight: 400;
        }
        .quote_reference{
            padding: 10px 15px;
            font-size: 20px;
        }

        .adjust-quoto{
            margin-bottom: 40px;
        }

        @media only screen and (min-width: 768px) {
            .row.plan-details {
                display: block;
                flex-wrap: wrap;
                align-items: center;
                /*height: 120px;*/
                padding: 10px 10px;
            }
            .main-content, .entry-content, .entry-blog{
                padding: 0px !important;
            }
        }

        button.buynow-btn {
            float: right;
            min-width: 150px;
            background: #1fbd9d;
            border-radius: 5px;
        }

        .compare.center.aligned.middle.aligned.column {
            position: relative;
        }

        .ui.checkbox.large.nopad {
            margin: auto;
            position: relative;
            top: initial;
            left: initial;
            display: table;
        }
        .ui.checkbox.large.nopad input {
            position: relative;
            height: 100% !important;
            margin: 10px 0;
            width: 100% !important;
            z-index: 1;
            opacity: 0.1;
        }

        .nopadding {
            padding:0;
        }

        .submit-btn {
            background-color: #f5821f;
        }
        .submit-btn i{
            color:#FFF;
        }

        .ui.checkbox.large.nopad label {
            height: 100%;
            width: 100%;
            position: absolute;
            border: 1px solid #c5c5c5;
            padding: 0px;
            top: 0;
            left: 0;
            text-align: center;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 100;
            border-radius: 5px;
        }

        .sub.header {
            text-align: center;
            font-size: 15px;
            font-weight: 100;
        }
        .ui.checkbox.large.nopad input:checked+label:before {
            content: "\f00c";
            font-family: fontAwesome;
            font-size: 26px;
        }
        sup.superior {
            top: -.4em;
            font-size: 24px;
        }
<?php
    $fname = isset($_SESSION['fname'])?$_SESSION['fname']:'';
    $lname = isset($_SESSION['lname'])?$_SESSION['lname']:'';
    $fullname = trim(preg_replace('/\s+/', ' ', $fname.' '.$lname));
    $fullname = $fullname?$fullname:'Sir/Madam';
    $message = '<html>
                    <head>
                        <style>
                            .button {
                                border-radius: 2px;
                            }
                            .button a {
                                background:#f0ad4e;
                                padding: 8px 12px;
                                border: 1px solid #f0ad4e;
                                border-radius: 2px;
                                font-family: Helvetica, Arial, sans-serif;
                                font-size: 14px;
                                color: #ffffff; 
                                text-decoration: none;
                                font-weight: bold;
                                display: inline-block;  
                            }
                            .table{
                                border-collapse:collapse!important
                            }
                            .table td,.table th{
                                background-color:#fff!important
                            }
                            .lead{
                                margin-bottom:20px;
                                font-size:16px;
                                font-weight:300;
                                line-height:1.4;
                            }
                            @media (min-width:768px){
                                .lead{
                                    font-size:21px
                                }
                                .img-header {
                                    width:70%;
                                }
                                .container {
                                    padding:2% 10% 2% 10%; 
                                }
                                .wrapper {
                                    padding:10%;
                                }
                            }
                            @media (max-width:768px){
                                .img-brand{
                                    max-height:20;
                                    width:auto;
                                }
                            }
                        </style>
                    </head>
                    <body style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
                        <div style="background-color:#ccc;" class="container">
                            <div style="background-color:#fff;" class="wrapper">
                                <div style="text-align:center;">
                                    <img src="https://lifeadvice.ca/images/brand.png" class="img-header"><hr />
                                </div>
                                <p><b>Hey Savvy Shopper</b>,</p>
                                <p>Thanks for comparing quotes.</p>
                                <p>To take your travel insurance, click on buy now or give us a call at <b style="color:#d9534f;">1855-500-5041</b></p>
                                <table style="padding:5px; width:100%" class="table">'; // Dear '.$fullname.' HTML CONTENT TO BE SENT TO INQUIRER

    if(isset($_SESSION['sum_insured2']))
    {
?>
        @media only screen and (min-width: 768px) {
            .insurance_form {
                padding-right: 0px !important;
                padding-left: 0px !important;
                background-image: none !important;
            }
        }
        @media only screen and (max-width: 768px) {
            /* For mobile phones: */
        
            #bg-insurance-form {
                background-image: none !important;
            }
        }

<?php
    }
?>

        /* ==========================================================================
        > Responsive
        ========================================================================== */

        @media screen and (min-width: 767px) and (max-width: 991px) {

        }

        @media (max-width: 1024px) {

        }

        @media screen and (max-width: 767px) {
            div#demo {
                display: none;
            }
            .side-bar {
                padding: 10px;
                margin-left: 15px;
                margin-right: 15px;
            }

            .ddd.agaya {
                display: block!important;
            }
            
            .row.plan-details {
                display: block;
            }
            .ui.checkbox.large.nopad label{
                padding:11px;
            }

            .hidden-md{
                display: none;
            }
            
            button.buynow-btn {
                float: right;
                min-width: 100%;
                background: #1fbd9d;
                border-radius: 5px;
                font-size: 18px;
                font-weight: 100;
            }

            .ui.center.aligned.header {
                position: relative;
            }
            .ui.checkbox.large.nopad {
                margin: auto;
                position: relative;
                top: initial;
                left: initial;
                display: table;
                width: 100%;
                height: 50px;
                margin-top: 0;
            }
            .sub.header {
                position: absolute;
                top: 0;
                width: 100%;
                text-align: center;
                padding: 14px;
            }
            .mob-img, .gfdgd {
                height: 80px;
            }

            .ui.checkbox.large.nopad input:checked+label:before {
                display:none;
                font-family: fontAwesome;
                font-size: 26px;
            }
            .ui.checkbox.large.nopad input:checked+label {
                background: #999;
                color: #fff;
            }
        }
        h2.chng_amt.baaababa {
            font-size: 1rem;
            font-weight: 500;
            text-align: center;
            margin: 0;
        }
        .chng_amt img {
            max-width: 15px;
            vertical-align: middle;
            margin-right: 6px;
        }

        #dh-get-quote select{
            height: 51px;
            display: none;
        }
        @media screen and (min-width: 768px) {
            h2.chng_amt.baaababa {
                display: none;
            }
        }
        @media screen and (max-width: 425px) {
            .gfdgd h2 {
                font-size: 32px;
            }
        }
        @media screen and (max-width: 374px) {
            .gfdgd h2 {
                font-size: 26px;
            }
            button.buynow-btn {
                font-size: 14px;
                padding: 14px 15px;
            }
            .mob-img, .gfdgd {
                height: 100px;
            }
            .ui.checkbox.large.nopad label {
                padding: 11px 5px;
            }
            .one_select .btn-primary{
                padding: 12px 15px;
            }
            .compare_header_top {
                padding: 15px 15px;
            }
        }

        @media only screen and (min-width: 768px) {
            .side-bar {
                box-shadow: none !important;
                left: 0 !important;
                bottom: 0 !important;
                top: 0px !important;
                /*min-width: 355px;*/

                /*margin-top: -80px !important;*/
            }
            .right-bar-content{
                min-height: 400px !important;
                float: right !important;
                /*width: 81% !important;*/
            }
        }

        @media only screen and (max-width: 768px) {
            .side-bar {
                margin: 0 !important;
                box-shadow: none !important;
                top: 0px !important;
                /*margin-top: -80px !important;*/
            }
            .entry-content, .entry-blog, .main-content{
                padding: 0px !important;
            }
        }

        .rangeslider__fill {
            background: #1BBC9B !important;
            position: absolute;
        }	
        .ui-slider-horizontal .ui-slider-range {
            background: #1BBC9B !important;
        }

        .benefit_padding {
            padding: 20px 0 10px !important;
        }
    }

        @media only screen and (max-width: 600px) {
            .buttons_block { padding: 0px 0px 15px !important; }	
            .nav-tabs > li > a {
                border-radius: 0 !important;
                text-align: center;
                font-size: 120% !important;
            }
            .nav-tabs > li > a svg {
                display:none;
            }
            .benefit_padding {
                padding: 20px 0 10px !important;
            }
        }

        .buttons_block { padding: 8px 20px;	}
        .benefit_padding {
            padding: 45px 0;
        }
        .no-padding {
            padding:0;
        }

        .container {
            padding-left:0 !important;
            padding-right:0 !important;
        }
    </style>


    <!--<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script>
<?php
    $ded = mysqli_query($db, "SELECT `deductible1` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$product_id') GROUP BY `deductible1` ORDER BY `deductible1`");
?> 
        var Slider_Values = [<?php
				$d = 0;
				$havethousand = 'no';
				while($ded_f = mysqli_fetch_assoc($ded)){
				$d++;
				echo $dedivalue = $ded_f['deductible1'];
				if($d < mysqli_num_rows($ded)){
				echo ', ';
				}
				if($dedivalue == 1000){ $havethousand = 'yes'; }
				} ?>];
        var dValue = Slider_Values.indexOf(1000);
        if(dValue == '-1'){ dValue = '0'; }
        $(function () {
            $("#slider").slider({
                range: "min",
                min: 0,
                max: Slider_Values.length - 1,
                step: 1,
                value: dValue,		
                slide: function (event, ui) {
                    $('#coverage_deductible').text(Slider_Values[ui.value]);
                    //alert(Slider_Values.length);
                    for (i = 0; i < Slider_Values.length; i++) {
                        var group = Slider_Values[i];
                        $('.deductable-'+group).hide();
                    }
                    $('.deductable-'+Slider_Values[ui.value]).show();
                    $( "#coverage_deductible" ).val( "$" + Slider_Values[ui.value] );
                }
            });
        });

        //Sum Insured Slider
<?php
    $sum = mysqli_query($db, "SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$product_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
?> 
        var SliderValues = [<?php
				$s = 0;
				while($sum_f = mysqli_fetch_assoc($sum)){
				$s++;	
				echo $sumamount = $sum_f['sum_insured'];
				if($s < mysqli_num_rows($sum)){
				echo ', ';
				}
				} ?>];
        var iValue = SliderValues.indexOf(<?php echo $_SESSION['sum_insured2'];?>);
        $(function () {
            $("#sum_slider").slider({
                range: "min",
                min: 0,
                max: SliderValues.length - 1,
                step: 1,
                value: iValue,
                slide: function (event, ui) {
                    $('#coverage_amount').text(SliderValues[ui.value]);
                    //alert(SliderValues.length);
                    for (i = 0; i < SliderValues.length; i++) {
                        var group = SliderValues[i];
                        $('.coverage-amt-'+group).hide();
                    }
                    $('.coverage-amt-'+SliderValues[ui.value]).show();
                    $( "#coverage_amount" ).val( "$" + SliderValues[ui.value] );
                }
            });

        });
    </script>

    <div class="clear"></div> 

        <div class="dh-listings " id="dh-get-quote">
<?php
    //	error_reporting(E_ERROR);
    $startdate = $_SESSION['departure_date'];
    $enddate = $_SESSION['return_date'];

    $dStart = new DateTime($_SESSION['departure_date']);
    $dEnd  = new DateTime($_SESSION['return_date']);
    $dDiff = $dStart->diff($dEnd);
    $dDiff->format('%R'); // use for point out relation: smaller/greater
    $num_of_days = $dDiff->days + 1;
    if($num_of_days > 365 || $num_of_days == 364){ $num_of_days = 365; }

    //$num_of_days = 365;
    $prosupervisa = $pro_supervisa;
    $product_name = $pro_name;
        
    if($prosupervisa == '1'){
        $supervisa = 'yes';
        $num_of_days = 365;
    } else {
        $supervisa = 'no';	
    }

    $enable_family_plan = (!empty($_SESSION['familyplan'])) ? true : false;
	$enable_pre_existing = (!empty($_SESSION['pre_existing'])) ? true : false;

	if($_SESSION['familyplan_temp'] == 'yes'){
	    $enable_family_plan = true;
	} else {
	    $enable_family_plan = false;	
	}
	if($_SESSION['pre_existing'] == 'Yes'){
	    $enable_pre_existing = true;
	} else {
	    $enable_pre_existing = false;	
	}

	$oldest_traveller = 0;
	$family_plan      = false;

	$years = array();

    //Getting Eldest Age
    $ages_array = array_filter($_SESSION['years']);
    //print_r($ages_array);
    $younger_age = min($ages_array);
    $elder_age = max($ages_array);

    $number_travelers = count($ages_array);

    if($_SESSION['familyplan_temp'] == 'yes'){
        if($number_travelers >= 2 && ($elder_age >= 21 && $elder_age <=58) && ($younger_age <=21)){
            $family_plan = 'yes';
        }
        else {
            $family_plan = 'no';
        }
    } else {
        $family_plan = 'no';
    }

    if($_SESSION['familyplan_temp'] == 'yes' && $family_plan == 'no'){
        echo "<script>window.location='?action=not_eligible';</script>";	
    }
    //echo $family_plan;

    $priceorder = array(); // THIS WILL STORED IN ASSOCIATIVE ARRAY | BE USED TO REORDER PRICE AND EMAIL
    $price_deductibles = array();
    $pricecounter = 0;
?>

            <div class="container">
	            <div class="col-md-12 visible-xs">
	                <button type="button" class="btn" onclick="changedisplay()" style="display: block;width: 100%;background: #FFF !important;color: #333 !important;padding: 10px;"><i class="fa fa-gear"></i> Change Coverage</button>
	            </div>
	            <input type="hidden" id="change_display" name="change_display" value="0" />
                <script>
                    function changedisplay(){
                        var displayvalue = document.getElementById('change_display').value;
                        if(displayvalue == '0'){
                            $('.filterdiv').attr('style','display: block !important');
                            document.getElementById('change_display').value = '1';
                        } else {
                            $('.filterdiv').attr('style','display: none !important');
                            document.getElementById('change_display').value = '0';	
                        }
                    }
                </script>
                <div class="row filterdiv hidden-xs" style="border: 1px solid #ddd;text-align: center;padding-top: 10px;border-top: 4px solid #DDD; margin-bottom:20px; background:#FFF;">	
                    <div class="col-md-2 hidden-xs" style="padding:10px; font-size:21px; font-weight:bold; color:#444;padding-top: 25px;">
                        <i class="fa fa-filter"></i> Filter Results
                    </div>
	                <div class="col-md-3 adjust-quoto" style="border:none;">
                        <h4 class="deductible" style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">Deductible: <input type="text" id="coverage_deductible" name="coverage_deductible" value="$<?php if($havethousand == 'no'){ echo '0'; } else {echo '1000'; } ?>" style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 100px;"></h4>
				
				        <div id="slider" style="border: 1px solid #c5c5c5;padding: 5px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;"></div>
	                </div>
	                <div class="col-md-3 adjust-quoto coverage-mobile-view" style="border-top:0px; ">
                        <h4 class="coverage" style="margin: 0;padding: 0;font-weight: bold;margin-bottom: 0;border: none;text-align: left;">Coverage: <input type="text" id="coverage_amount" name="coverage_amount" value="$<?php echo $_SESSION['sum_insured2'];?>" style="border:0; font-size:24px; color:#444; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: center;width: 150px;"></h4>
				        <div id="sum_slider" style="border: 1px solid #c5c5c5;padding: 5px;box-shadow: 0px 0px 5px 0px inset #CCC;border-radius: 10px;"></div>
                    </div>
                    <div class="col-md-3 quote_reference" style="font-size:15px;">
                        <h3 style="font-weight:bold; margin:0; padding:0;">Quote Reference</h3> 
                        <span style="color:#C00;"><?php echo $randomquote = rand(); ?></span><br/>
                        <small><i class="fa fa-calendar"></i> <?php echo $startdate . "-" . $enddate; ?></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 right-bar-content" id="listprices" style="padding:0;">
<?php
    $addinquery = '';
    if($_SESSION['pre_existing'] == 'yes' || $_SESSION['pre_existing'] == '1'){
        $addinquery .= "AND `premedical`='1'";
    } 
    if($family_plan == 'yes'){
        $addinquery .= "AND `family_plan`='1'";
    }
    if($num_of_days < '365'){
        $lessquery = " AND `rate_base`<>'2'";
    }

    $plans_q = mysqli_query($db,  "SELECT * FROM wp_dh_insurance_plans WHERE `product`='$product_id' AND `status`='1' $lessquery $addinquery ORDER BY `id`" );
    while($getplan = mysqli_fetch_assoc($plans_q)){
        $plan_id = $getplan['id'];
        $plan_name = $getplan['plan_name'];
        $insurance_company = $getplan['insurance_company'];
        $premedical = $getplan['premedical'];
        $rate_base = $getplan['rate_base'];  //0=Daily 1=Monthly 2=Yearly 3=Multi
        $monthly_two = $getplan['monthly_two'];
        $flatrate = $getplan['flatrate'];
        $flatrate_type = $getplan['flatrate_type'];
        $sales_tax = $getplan['sales_tax'];
        $smoke_rate = $getplan['smoke_rate'];
        $smoke = $getplan['smoke'];
        $directlink = $getplan['directlink'];
        $status = $getplan['status'];
        $cdiscountrate = $getplan['cdiscountrate'];
        $plan_discount = $getplan['discount'];
        $plan_discount_rate = $getplan['discount_rate'];
		
		$post_dest = str_replace(' ', '', strtolower($_SESSION['primary_destination']));
		$salestaxeplode = explode('%', $sales_tax);
		$salestax_rate = $salestaxeplode[0];
		$salestax_dest = str_replace(' ', '', $salestaxeplode[1]);
		
		//COMPANY Details
		$company_q = mysqli_query($db,  "SELECT * FROM wp_dh_companies WHERE `comp_id`='$insurance_company'" );
		$company_f = mysqli_fetch_assoc($company_q);
		$comp_id = $company_f['comp_id'];
		$comp_name = $company_f['comp_name'];
		$comp_logo = $company_f['comp_logo'];
		
		$deductsloop = mysqli_query($db,  "SELECT `deductible1` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id` IN (SELECT `id` FROM wp_dh_insurance_plans WHERE `product`='$product_id') GROUP BY `deductible1` ORDER BY `deductible1`" );
		while($deductsloop_f = mysqli_fetch_assoc($deductsloop)){
		    $deductible = $deductsloop_f['deductible1'];
		
            $deduct = '';
            $deduct_rate = '';
            $deduct_plan_id = '';
            $deductsq = mysqli_query($db, "SELECT `deductible1`, `deductible2`, `plan_id` FROM wp_dh_insurance_plans_deductibles WHERE `plan_id`='$plan_id' AND `deductible1`='$deductible'" );
            $deducti = mysqli_fetch_assoc($deductsq);
            $deduct = $deducti['deductible1'];
            $deduct_rate = str_replace('-', '', $deducti['deductible2']);
            $deduct_plan_id = $deducti['plan_id'];
		
            if($supervisa == 'yes'){
                $addinbenefit = "AND CAST(`sum_insured` AS DECIMAL)>='100000'";
            }
            $sum_insured= '';
            $sumin = mysqli_query($db, "SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id`='$deduct_plan_id' $addinbenefit GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");
            while($suminsu = mysqli_fetch_assoc($sumin)){
                $sum_insured = $suminsu['sum_insured'];
                
                $sumamt = '';
                $sumq = mysqli_query($db,  "SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id`='$plan_id' AND `sum_insured`='$sum_insured'");
                $sumqry = mysqli_fetch_assoc($sumq);
                $sumamt = $sumqry['sum_insured'];
		
		
		        //getting prices for each ages

                if($rate_base == '3'){
                    $rates_table_name = "wp_dh_plan_day_rate";
                    $addquery = "AND '$num_of_days' BETWEEN `min_range` AND `max_range`";
                } else {
                    $rates_table_name = "wp_dh_insurance_plans_rates";
                    $addquery = "";
                }

                $total_price = 0;
                $daily_rate = 0;
                //$single_person_rate = 0;
                //$single_person_rate = array();
                $display = array();
                if($family_plan == 'yes'){
                    $plan_rates = mysqli_query($db,  "SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$elder_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery" );
                    $planrates = mysqli_fetch_assoc($plan_rates);
                    $daily_rate = $planrates['rate'] * 2;	//Multipling by 2 for family elder rate
                    
                    if(!$daily_rate){ $display = '0'; }
                } else {
                    foreach($ages_array as $person_age){
                        $plan_rates = mysqli_query($db, "SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$person_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery" );	
                        $planrates = mysqli_fetch_assoc($plan_rates);
                        $dailyrate = $planrates['rate'];

                        $daily_rate += $dailyrate;
                        if($dailyrate == ''){ $dailyrate = 0; }
                        $display[] =  $dailyrate;
                        $dailyrate = 0;
                    }
                }
			
                //print_r($single_person_rate);
                //print_r($ages_array);


                //NUM OF MONTHS
                $num_months = $num_of_days / 30;
                $num_months = ceil($num_months ); // converting is 1.2,1.3 etc.. then it will be 2
                if($num_months > 12){ $num_months = 12; }

                if($rate_base == '0'){ // if daily rate
                    $total_price = $daily_rate * $num_of_days;
                } else if($rate_base == '1'){ //if monthly rate
                    $total_price = $daily_rate * $num_months;
                    $monthly_price = $total_price / $num_months;
                } else if($rate_base == '2'){ // if yearly rate
                    $total_price = $daily_rate;
                } else if($rate_base == '3'){ // if multi days rate
                    $total_price = $daily_rate;
                }

                if($flatrate_type == 'each'){
                    $flat_price = $flatrate * $number_travelers;
                } else if($flatrate_type == 'total'){
                    $flat_price = $flatrate;
                } else {
                    $flat_price = 0;
                }
                //totaldaysprice
                $totaldaysprice = $total_price;
                //SALES TAX
                if($salestax_dest == $post_dest){
                    //$salesequal = 'yes';
                    $salestaxes = ($salestax_rate * $totaldaysprice) / 100;
                } else {
                    $salestaxes = 0;
                    //$salesequal = 'no';
                }

                //SMOKE RATE
                if($_SESSION['Smoke12'] == 'yes' || $_SESSION['traveller_Smoke'] == 'yes'){
                    if($smoke == '0'){
                        $smoke_price = $smoke_rate;
                    } else if($smoke == '1'){
                        $smoke_price = ($totaldaysprice * $smoke_rate) / 100;	
                    }
                } else {
                    $smoke_price = 0;	
                }

                // OTHERS
                $others = ($flat_price + $salestaxes) + $smoke_price;

                $deduct_discount = ($total_price * $deduct_rate) / 100;
                $cdiscount = ($total_price * $cdiscountrate) / 100;

                //Deductible
                if (strpos($deducti['deductible2'], '-') !== false) {
                    //if deductible is in minus
                    $discount = $deduct_discount + $cdiscount;
                    $adddeductible = 0;	
                } else {	
                    //if deductible is in plus		
                    $discount = $cdiscount;
                    $adddeductible = $deduct_discount;
                }

                $total_price = ($total_price - $discount) + ($others + $adddeductible);

                //Discount on plan calculation
                $discountonplan = 0;
                if($plan_discount == '1'){
                    if($number_travelers > 1 && $family_plan == 'no'){
                        $discountonplan = ($plan_discount_rate * $total_price) / 100;
                    }
                }
                $total_price = $total_price - $discountonplan;
                $monthly_price = $total_price / $num_months;
                if($monthly_two == '1'){
                    $total_price = $total_price - $flat_price;
                }

                if (in_array("0", $display)){ $show = '0'; } else {$show = '1'; }
		
		
                if($show == '1' && $total_price > 0){

                    $htmlcontent = '';

                    $explode = explode('.', number_format($total_price, 2));

                    $htmlcontent .= '       <tr>
                                            <td>
                                                <b>
                                                    $<span>'.str_replace(',', '',$explode[0]).'.<sup class="superior">'.$explode[1].'</sup></span>
                                                </b>';
?>

                        <div class="listing-item" data-listing-price="<?php echo str_replace(',', '', number_format($total_price));?>">
                            <div class="coverage-amt coverage-amt-<?php echo $sum_insured; ?>" style=" display: <?php if($_SESSION['sum_insured2'] == $sum_insured ){ echo 'block'; } else { echo 'none'; } ?>;">
                                <div class="row plan-details   deductable-<?php echo $deductible; ?>" style="display: <?php if($deductible == '1000'){ echo 'block'; } else if($havethousand == 'no' && $deductible == '0'){ echo 'bock'; } else { echo 'none'; } ?>; margin-top:0; margin-left:0; margin-right:0; margin-bottom 5px !important;border-bottom: 1px solid #0084c1;">
	                                <div class="col-md-3 col-xs-6 text-center" style="padding-top: 20px;padding-left: 0;padding-right: 0;">
	                                    <img src="admin/uploads/<?php echo $comp_logo ?>" class="img-responsive" />
                                    </div>
                                    <div class="col-md-2 col-xs-6 text-center benefit_padding" style="font-size: 16px;color: #333;">$<?php 
	                if($sum_insured >= 1000000){
                        $millions = $sum_insured/1000000;
                        $txt = ' Million';
                    } else {
                        $millions = $sum_insured;
                        $txt = '';
                    }
	                echo number_format($millions).$txt; ?><br/>
	                $<?php echo $deductible;?> Deductible</div>
	                                <div class="col-md-4 col-xs-12 text-center" style="border:2px solid #f5821f; padding:10px;box-shadow: 0px 0px 5px 0px #999 inset;">
		                                <div class="col-md-6 col-xs-6">
		                                    <h1 style="padding: 0;margin: 0;line-height: normal; font-size:28px;">$<?php echo str_replace(',','', number_format($total_price,2));?></h1>
<?php
                    if($monthly_two == '1'){
                        $htmlcontent .= '           <p><b>$'.number_format($monthly_price,2).'/Month<small style="color: #f5821f;font-weight: bold;margin-left: 1px;">'.$num_months.'</small></b></p>';
?>
		                                    <h2 style=" padding;5px; margin:0; font-size:14px; font-weight:bold;color: #333;font-family: arial;padding: 0;line-height: normal;margin-bottom: 10px;background: #F9F9F9;">$<?php echo number_format($monthly_price,2);?>/M <small style="color: #f5821f;font-weight: bold;margin-left: 1px;"><?php echo $num_months;?></small></h2>
<?php
                    }
?>
                                    		<small><?php echo $number_travelers;?> Traveller(s)</small>
		                                </div>
		                                <div class="col-md-6" style="padding-top: 10px;margin-bottom:10px;">
                                        <style>
                                            .hoverdetails_<?php echo $deductible.$plan_id;?> {
                                                width: 400px;background: #fff;border: 1px solid #ccc;position: absolute;z-index: 100;box-shadow: 0 0 2px #999;border-radius: 2px;display:none;padding:10px 0;
                                            }
                                            .hoverdetails_<?php echo $deductible.$plan_id;?> h2 {
                                                font: 400 14px Arial,Helvetica,sans-serif;line-height: normal;color: #ff8400;line-height: 30px;border-bottom: 1px solid #999;padding-bottom: 5px;margin: 0;	
                                            }
                                            .hoverdetails_<?php echo $deductible.$plan_id;?> h3 {
                                                font: 400 14px Arial,Helvetica,sans-serif;line-height: normal;color: #333;line-height: 30px;padding-bottom: 5px;margin: 0;	
                                            }
                                            .hoverdetails_<?php echo $deductible.$plan_id;?> h3 span{
                                                color: #ff8400;
                                                font-weight:bold;	
                                            }
                                            .hover_<?php echo $deductible.$plan_id;?>:hover  .hoverdetails_<?php echo $deductible.$plan_id;?>{
                                                display:block !important;
                                            }
                                        </style>		
                                        <ul style="margin:0;">
                                            <li style="list-style: none;" class="hover_<?php echo $deductible.$plan_id;?>"><a href="#"> Policy Details</a>
                                                <div class="row hoverdetails_<?php echo $deductible.$plan_id;?>" >
                                                    <div class="col-md-12"><h2>Quote Details <?php echo $product_name;?></h2></div>
                                                    <div class="col-md-12"><h3>Totel Premium: <span>$<?php echo number_format($total_price,2);?></span></h3></div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-12" style="border:1px solid #333; text-align:left;">
                                                            <div class="col-md-12 no-padding"><span style="display:block; padding:3px; font-size:15px; text-align:left; border-bottom:1px dashed #333;">Plan: <span style="font-size:13px; color: #f5821f;"><?php echo $plan_name;?> - <?php echo $plan_id;?></span></span></div>
                                                            <div class="col-md-12 no-padding"><small>Days: <span style="color: #f5821f;"><?php echo $num_of_days;?> (<?php echo $startdate;?> - <?php echo $enddate;?>)</span></small>
                                                                <small>Total: <span style="color: #f5821f;">$<?php echo number_format($total_price,2);?></span></small>
                                                            </div>
                                                            <div class="col-md-12 no-padding"><small>Option: <span style="color: #f5821f;">Deductible Option ($<?php echo $deductible;?> (included in premium))</span></small></div>
                                                            <div class="col-md-12 no-padding">
<?php
					$per = 0;
					$single_person_rate = 0;
					foreach($ages_array as $person_age){
                        $per++;
                        $p_plan_rates = mysqli_query($db,  "SELECT * FROM $rates_table_name WHERE `plan_id`='$deduct_plan_id' AND '$person_age' BETWEEN `minage` AND `maxage` AND `sum_insured`='$sumamt' $addquery" );
                        $p_planrates = mysqli_fetch_assoc($p_plan_rates);
                        $single_person_rate = $p_planrates['rate'];
				
                        if($family_plan == 'yes' && $elder_age != $person_age){
                            $person_daily = 0;
                        } else if($family_plan == 'yes' && $elder_age == $person_age){
                            $person_daily = $single_person_rate * 2;
                        } else {
                            $person_daily = $single_person_rate;
                        }

                        if($rate_base == '0'){ // if daily rate
                            $person_price = $person_daily * $num_of_days;
                        } else if($rate_base == '1'){ //if monthly rate
                            $person_price = $person_daily * $num_months;
                        } else if($rate_base == '2'){ // if yearly rate
                            $person_price = $person_daily;
                        }
                        else if($rate_base == '3'){ // if multi days rate
                            $person_price = $person_daily;
                        }

                        if($flatrate_type == 'each'){
                            $p_flat_price = $flatrate;
                        }else if($flatrate_type == 'total'){
                            $p_flat_price = $flatrate  / $number_travelers;
                        } else {
                            $p_flat_price = 0;
                        }
                        //totaldaysprice
                        $ptotaldaysprice = $person_price;
                        //SALES TAX
                        if($salestax_dest == $post_dest){
                            //$salesequal = 'yes';
                            $p_salestaxes = ($salestax_rate * $ptotaldaysprice) / 100;
                        } else {
                            $p_salestaxes = 0;
                            //$salesequal = 'no';
                        }

                        //SMOKE RATE
                        if($_SESSION['Smoke12'] == 'yes' || $_SESSION['traveller_Smoke'] == 'yes'){
                            if($smoke == '0'){
                                $p_smoke_price = $smoke_rate;
                            } else if($smoke == '1'){
                                $p_smoke_price = ($ptotaldaysprice * $smoke_rate) / 100;	
                            }
                        } else {
                            $p_smoke_price = 0;	
                        }

                        // OTHERS
                        $p_others = ($p_flat_price + $p_salestaxes) + $p_smoke_price;

                        //Deductible 
                        $p_deduct_discount = ($person_price * $deduct_rate) / 100;
                        $p_cdiscount = ($person_price * $cdiscountrate) / 100;

                        if (strpos($deducti['deductible2'], '-') !== false) {
                            //if deductible is in minus
                            $p_discount = $p_deduct_discount + $p_cdiscount;
                            $p_adddeductible = 0;	
                        } else {	
                            //if deductible is in plus		
                            $p_discount = $p_cdiscount;
                            $p_adddeductible = $p_deduct_discount;
                        }

                        $person_price = ($person_price - $p_discount) + ($p_others + $p_adddeductible);

                        $p_discountonplan = 0;
                        if($plan_discount == '1'){
                            if($number_travelers > 1 && $family_plan == 'no'){
                                $p_discountonplan = ($plan_discount_rate * $person_price) / 100;
                            }
                        }
                        $person_price = $person_price - $p_discountonplan;
                        //$monthly_price = $person_price / $num_months;

                        //if($single_person_rate > 0){ 
?>
                                                                <div class="col-md-12 no-padding"><span style="display:block; padding:3px; font-size:15px; text-align:left; border-bottom:1px dashed #333;">Person <?php echo $per;?> </span></div>
                                                                <div class="col-md-12 no-padding"><small>Insured: <span style="color: #f5821f;"> (Age: <?php echo $person_age; ?>)</span> Coverage Amount: <span style="color: #f5821f;">$<?php echo $sum_insured;?></span> Premium: <span style="color: #f5821f;">$<?php echo number_format($person_price,2);?></span></small></div>
                                                                <?php $single_person_rate = '';}//} ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
				                            <li style="list-style: none;"><a href="#"> Sample Policy</a></li>
			                            </ul>	
		                            </div>
		                            <div class="col-md-12 col-xs-12 text-center" style="background:#0084c1; color: #FFF; font-size:15px;padding: 5px;margin-top: 3px; border-radius:10px;">
		                                <?php echo $plan_name;?>
		                            </div>
	                            </div>
<?php
                        $dob = $_SESSION['years'][0].'-'.$_SESSION['months'][0].''.$_SESSION['days'][0];
                        $agent = $_SESSION['agent'];
                        $broker = $_SESSION['broker'];
                        $buynow_url = "tab_buy.php?email=".$_SESSION['savers_email']."&coverage=".$sum_insured."&traveller=".$number_travelers."&deductibles=".$deductible."&deductible_rate=$deduct_rate&person1=".$_SESSION['years'][0]."&days=$num_of_days&companyName=$comp_name&comp_id=".$comp_id."&planname=".$plan_name."&plan_id=".$plan_id."&tripdate=$startdate&tripend=$enddate&premium=$total_price&destination=".$_SESSION['primary_destination']."&cdestination=&product_name=$product_name&product_id=$product_id&country=".$_SESSION['primary_destination']."&visitor_visa_type=$product_name&tripduration=$num_of_days&age=".$ages_array[0]."&dob=$dob&agent=$agent&broker=$broker";
                        $htmlcontent .= '               <p>$'.$deductible.' Deductible</p>
                                            </td>
                                            <td>
                                                <img src="https://lifeadvice.ca/quote/admin/uploads/'.$comp_logo.'" class="img-brand"/>
                                            </td>
                                            <td class="button" bgcolor="#ED2939"><a href="https://lifeadvice.ca/quote/'.$buynow_url.'" class="link" target="_blank"> Buy Now</a></td>
                                        </tr>';

                        if(!in_array($deductible, $price_deductibles)){
                            $price_deductibles[] = $deductible;
                        }
                        $priceorder[$deductible][$pricecounter] = array('price' => $total_price, 'html_content' => $htmlcontent);
                        $pricecounter += 1;
?>
                                <div class="compare col-md-3 col-xs-12 text-center"><a class="submit-btn col-md-12 col-xs-5 " onclick="$('.buynow_<?php echo $deductible.$plan_id;?>').fadeIn();" style="font-weight: bold;padding: 6px 10px;font-size: 16px;display: block;color: #FFF; margin-bottom:5px;margin-top: 10px;border-radius: 6px;border-bottom: 2px solid #999;box-shadow: none;"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                                    <div class="col-xs-2 visible-xs">&nbsp;</div>
                                    <label style="font-weight: normal;padding: 6px 10px;font-size: 15px;display: block; margin-bottom:5px;margin-top: 10px;border-radius: 6px;border: 1px solid #999;background: #F9F9F9;border-bottom: 2px solid #999;cursor: pointer;" class="col-md-12 col-xs-5"><input type="checkbox" name="addtocompare" id="addtocompare" data-productid="<?php echo $product_id; ?>"  data-pid="<?php echo $plan_id; ?>" price="<?php echo str_replace(',', '', number_format($total_price,2));?>" style="height: auto;margin: 0; opacity:0; position:absolute;" value="<?php echo str_replace(',', '', number_format($total_price,2));?>" onclick="comparetest()"> <i class="fa fa-database"></i> Compare</label>
	
	
		                            <!--<small style="display:block"><strong>Plan Type: </strong> <?php if($family_plan == 'yes'){ echo '<i class="fa fa-child"></i> Family'; } else {echo '<i class="fa fa-user"></i> Individual';}?></small>-->
	                            </div>
	                            <div style="clear:both;"></div>
	                            <div class="row buynow_<?php echo $deductible.$plan_id;?>" style="clear:both;margin: 0;border: 1px solid #CCC; display:none;">
	                                <form method="post" action="<?php echo $buynow_url;?>">
	                                    <div class="col-md-6" style="background:#F9F9F9;">
	                                        <h3 style="border-bottom:1px solid #ccc;margin: 0;font-size: 18px;font-weight: bold;">Buy Online</h3>
	                                        <p style="font-weight: bold;">In three simple steps you can purchase your policy, easily and securely, online.</p>
	                                        <p><input type="checkbox" name="agree" required="" style="height: auto;margin: 0;"> I give permission to LifeAdvice.ca to transfer my quote information and contact details to <?php echo $comp_name;?> in order to complete the purchase of travel insurance. LifeAdvice values your privacy. For details, see our <a href="/">Privacy Policy</a></p>
		                                    <p></p>
                                            <p><button type="submit" class="submit-btn" style="font-weight: bold;padding: 6px 20px;font-size: 16px;display: block;color: #FFF; margin-bottom:5px;margin-top: 10px;border-radius: 6px;border-bottom: 2px solid #999;box-shadow: none;"><i class="fa fa-shopping-cart"></i> Buy Now</button></p>
                                        </div>
                                        <div class="col-md-6 text-center" style="font-size:16px;">
                                            <a href="#" onclick="$('.buynow_<?php echo $deductible.$plan_id;?>').fadeOut();" class="pull-right text-danger" style="font-size:16px;"><i class="fa fa-close"></i></a>
                                            <p>or</p>
                                            <p>BY CALLING</p>
                                            <p><a href="tel:8555008999" style="font-size:24px; font-weight:bold; color:#44bc9b;">855-500-8999</a></p>
                                            <p style="font-size:13px; font-weight:bold;border-top: 1px solid #eee;padding-top: 10px;">CALL CENTRE HOURS</p>
                                            <p style="font-size:11px;line-height: normal;">Monday to Thursday 8:00 am to 9:00 pm EDT | Friday 8:00 am to 8:00 pm EDT | Saturday 8:30 am to 4:00 pm EDT | Closed on holidays.</p>
                                        </div>
                                    </form>
                                </div>	
                            </div>
                        </div>
                    </div>
<?php
                    $daily_rate = 0;
                    $mailitem[] = array(
                        "deductible"  => $deductible,
                        "sum_insured" => $sum_insured,
                        "planproduct" => $product_name,
                        "price"       => $total_price,
                        "quote"       => $randomquote,
                        "logo"        => $comp_logo,
                        "url"         => $_SERVER['REQUEST_URI'] . "&fromemail=yes&quote=" . $randomquote,
                        "buynow"      => $buynow_url
                    );

                    $price[] = $total_price;
                    $display = '';
                }
            }
        }
    }
?>
                </div>
            </div>
            <!--    row end-->
        </div>
<?php
    $counter = 0;

    if (isset( $_SESSION['savers_email'])){

        array_multisort($price_deductibles, SORT_ASC); // SORT DEDUCTIBLES
        $price_deductibles = array_slice($price_deductibles, 0, 5);
        
        foreach($price_deductibles AS $ded){
            if($priceorder[$ded]){
                $message .= '<tr><th colspan="3" align="center"><p class="lead" style="color:#d9534f">$'.$ded.' Deductible</p></th></tr>';
                array_multisort($priceorder[$ded], SORT_ASC); // SORT PRICES
                $pricetemp = array_slice($priceorder[$ded], 0, 2);
                foreach($pricetemp AS $key => $pricet){
                    $message .= $priceorder[$ded][$key]['html_content'];
                }
            }
        }

        $to = $_SESSION['savers_email']; //$_SESSION['savers_email']; //'renz_tabadero@yahoo.com'; // $_POST['savers_email']; //contact-us@lifeadvice.ca
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->IsSMTP(); // enable SMTP

        $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail

        /************ USE CODE BELOW TO SEND BLUEHOST EMAIL ************/
        $mail->Host = "lifeadvice.ca";
        $mail->Port = 465; // or 587

        $mail->IsHTML(true);
        $mail->Username = "info@lifeadvice.ca";
        $mail->Password = "Pankaj@123";
        $mail->SetFrom("info@lifeadvice.ca", 'Life Advice Insurance, Inc.');
        $mail->Subject = 'Quotation from Life Advice Insurance, Inc.';

        $message .= '</table>
                    <p>Sincerely,<br>Life Advice Robot</p>
                    <hr />
                    <p style="font-size:10px">
                        Visit <a href="https://lifeadvice.ca">Life Advice Insurance, Inc.</a> for more information.<br>
                        This is an auto-generated email. Do not reply to this message.
                    </p>
                </div>
            </div>
            </body>
        </html>';

        //echo $message;
        $mail->Body = $message;
        $mail->AddAddress($to);
        $mail->addBCC('quote@lifeadvice.ca'); // quote@lifeadvice.ca

        if(!$mail->Send()) {
            $errmessage = 'Cannot send message.';
            //echo 'cannot send message.';
        } else {
            $bool = true;
            //echo 'message sent.';
        }
    }
?>
        <script>
            jQuery(function($) {
                var divList = $(".listing-item");
                divList.sort(function(a, b){ return $(a).data("listing-price")-$(b).data("listing-price")});

                $("#listprices").html(divList);
            })
        </script>
        <script>
            var buynow_selected = "";
            var info_box = "";

            jQuery(".dh-toggle").click(function () {
                if (info_box != "") {
                    jQuery(".dh-toggle-show-hide-" + info_box).slideToggle();
                }

                if (jQuery(this).data('value') == info_box) {
                    info_box = "";
                    return false;
                }

                if (buynow_selected != "") {
                    jQuery(".buynow-btn-" + buynow_selected).slideToggle();
                    buynow_selected = "";
                }

                var id = jQuery(this).data('value');
                info_box = id;
                jQuery(".dh-toggle-show-hide-" + id).slideToggle();
                console.log(".dh-toggle-show-hide-" + id);
            });

            jQuery(".buynow-btn").click(function () {
                if (buynow_selected != "") {
                    jQuery(".buynow-btn-" + buynow_selected).slideToggle();
                }

                if (jQuery(this).data('value') == buynow_selected) {
                    buynow_selected = "";
                    return false;
                }

                if (info_box != "") {
                    jQuery(".dh-toggle-show-hide-" + info_box).slideToggle();
                    info_box = "";
                }

                var id = jQuery(this).data('value');
                buynow_selected = id;
                jQuery(".buynow-btn-" + id).slideToggle();
            });
        </script>

        <script>
       
            jQuery( function() {

                var visiblePlans = jQuery(".plan-details:visible").length;
                var textToShow = "Great! We found "+visiblePlans+" for you.";
                if(visiblePlans > 0){
                    // jQuery(".num-of-quotes").show();
                    jQuery(".num-of-quotes").text(textToShow);
                }else{
                    jQuery(".num-of-quotes").hide();
                }
            });
        </script>
    </div>