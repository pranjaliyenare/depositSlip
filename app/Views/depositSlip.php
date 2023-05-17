
<?= $this->include('default/header') ?>
<?php echo view('default/navbar', array('title' => 'Deposit Slip')); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/style.css">

<script>
	
		function TwoThousand()
		{
			var a = document.getElementById('twoThosandNoteCount').value;
			var ttl2000 = (Number(2000)) * a ;
			document.getElementById("totalRupees2000").innerHTML = ttl2000;
		}

		function FiveHundred()
		{
			var b = document.getElementById('fiveHundredRupeesNoteCount').value;
			var ttl500 = (Number(500)) * b ;
			document.getElementById("totalRupees500").innerHTML = ttl500;
		}

		function TwoHundred()
		{
			var c = document.getElementById('twoHundredRupeesNoteCount').value;
			var ttl200 = (Number(200)) * c ;
			document.getElementById("totalRupees200").innerHTML = ttl200;
		}

		function OneHundred()
		{
			var d = document.getElementById('hundredRupeesNoteCount').value;
			var ttl100 = (Number(100)) * d ;
			document.getElementById("totalRupees100").innerHTML = ttl100;
		}

		function Fifty()
		{
			var e = document.getElementById('fiftyRupeesNoteCount').value;
			var ttl50 = (Number(50)) * e ;
			document.getElementById("totalRupees50").innerHTML = ttl50;
		}

		function Twenty()
		{
			var f = document.getElementById('twentyRupeesNoteCount').value;
			var ttl20 = (Number(20)) * f ;
			document.getElementById("totalRupees20").innerHTML = ttl20;
		}

		function Ten()
		{
			var g = document.getElementById('tenRupeesNoteCount').value;
			var ttl10 = (Number(10)) * g ;
			document.getElementById("totalRupees10").innerHTML = ttl10;
		}

		function Five()
		{
			var k = document.getElementById('fiveRupeesNoteCount').value;
			var ttl5 = (Number(5)) * k ;
			document.getElementById("totalRupees5").innerHTML = ttl5;
		}

		function Two()
		{
			var h = document.getElementById('twoRupeesCount').value;
			var ttl2 = (Number(2)) * h ;
			document.getElementById("totalRupees2").innerHTML = ttl2;
		}

		function One()
		{
			var i = document.getElementById('oneRupeesCount').value;
			var ttl1 = (Number(1)) * i ;
			document.getElementById("totalRupees1").innerHTML = ttl1;
		}
	
		

		function TotalCountOfNotes()
		{
			var a = document.getElementById("twoThosandNoteCount").value;
			var b = document.getElementById("fiveHundredRupeesNoteCount").value;
			var c = document.getElementById("twoHundredRupeesNoteCount").value;
			var d = document.getElementById("hundredRupeesNoteCount").value;
			var e = document.getElementById("fiftyRupeesNoteCount").value;
			var f = document.getElementById("twentyRupeesNoteCount").value;
			var g = document.getElementById("tenRupeesNoteCount").value;
			var h = document.getElementById("fiveRupeesNoteCount").value;
			var i = document.getElementById("twoRupeesCount").value;
			var k = document.getElementById("oneRupeesCount").value;
			var x = Number(a)+Number(b)+Number(c)+Number(d)+Number(e)+Number(f)+Number(g)+Number(h)+Number(i)+Number(k);
			document.getElementById("totalNoOfNotes").innerHTML = x;
		}
</script>

	<style>
		label {
			font-size: 13px;
		}
		.vl {
			border-left: 2px dotted black;
			height: 350px;
		}
		.form-control {
			height: 27px;
			background-color: #a3eced;
			border: 1px solid #000000;
		}
		input .padd {
			padding-top: 10px;
		}

		@media only print {
         body {
            visibility: visible;
			size:25.5cm  9.5cm;
			height: 9.5cm;
			width: 25.5cm;
			/* background-color: #00cace5c; */
         }
         /* .cssInp {
            visibility: visible;
         } */

		 .az-content-body{
			background-color: #00cace5c;
		 }
		 .col-lg-8{
			width: 70%;
			height: 50%;
		 }

		 .part1{
			width: 100%;
			background: #a3eced;
			/* border: 1px solid #000000; */
		 }
		 .col-lg-3{
			width: 25%;
			height: 50px;
		 }

		 .col-lg-1{
			display: visible;
			width: 5%;
		 }

		 .table{
			width: 40%;
		 }
		 
		 .tblwidth{
			width: 30%;
		 }

		 .az-header{
			display: none;
		 }

		 .vl  {
			width: 5%;
		 }

		 .v1Height{
		height: 100%;
		 }
				 
		 .btn{
			display: none;
		 }

		 .hdname{
			width: 20%;
		 }

		 .hdname1{
			width: 30%;
		 }

		 .hdname2{
			width: 40%;
		 }

		 .border{
			border: 1px solid #000000;
		 }

		 .vendorListHeading {
			background-color: #a3eced;
			color: #000000;
			-webkit-print-color-adjust: exact; 
		}

      }

	</style>
	<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
		<div class="container">

			<script>
				document.addEventListener("DOMContentLoaded",fns);
				function fns() {
					// auto tabbing between number fields
					var inputs = document.querySelectorAll("form input");
					for (i in inputs) {
						if (i < inputs.length) {
							inputs[i].addEventListener("input",function(){
								if (this.value.length === 1) {
									if (this.nextSibling.tagName == "INPUT") {
										this.nextSibling.focus();
										this.nextSibling.select();
									}
								}
							});
						}
					}
				}
			</script>

			<div class="az-content-body pd-lg-l-40 d-flex flex-column">
				<div class="row row-sm mg-b-20">
					<div class="col-lg-12 ht-lg-100p">
						<div class="row row-xs wd-xl-80p">
							<div class="col-sm-6 col-md-3">
								<button class="btn btn-warning btn-with-icon btn-block" onclick="window.print()"><i class="typcn typcn-download"></i> Print</button>
								<!-- <input class="btn btn-secondary btn-with-icon btn-block print" type="button" value="Print" onclick="myApp.printTable()"> -->
							</div>
						</div>
					</div>
				</div>
			<div>
			<div class="part1 vendorListHeading">
				<div class="row row-sm border">
					<div class="col-md">
						<div class="card card-body bg-gray-200 bd-0" style='background-color: #00cace5c;'>
							<div class="row row-sm mg-b-20">
								<div class="col-lg-3 ht-lg-100p">
									<div class="row headerName">								
										<h1 style="padding-top: 20px; font-size: 15px; font-weight: bold; text-align:center;">ऊर्जा नागरी सहकारी पतसंस्था मर्यादित</h1><br>
									</div>
									<div class="row row-sm">
										<h1 style="font-size: 12px; font-weight: bold; text-align:center;">बचत ठेव जमा चलन</h1>
									</div>
									<div class="row row-sm ">
										<div class="col-lg hdname2">
											<label>दि.     /       / २०२ </label>
										</div><!-- col -->
										<div class="col-lg hdname1 " style="max-width: 64;background-color: #a3eced;">
											<label> स्क्रोल नं. </label>
										</div><!-- col -->
										<div class="col-lg hdname1 vendorListHeading">
											<input class="form-control textBox " type="text" style="background-color: #a3eced;">
										</div><!-- col -->
									</div>
									<div class="row row-sm">
										<div class="col-lg"  style="max-width: 100px;background-color: #a3eced;">
											<label>रोख/चेक रुपये</label>
										</div>
										<div class="col-lg ">
											<input class="form-control textBox" type="text" style="background-color: #a3eced;"   value="<?php echo $amount_in_number ; ?>" readonly>
										</div><!-- col -->
									</div>
									<div class="row row-sm" style="padding-top: 10px">
										<div class="col-lg">
											<label>नाव</label>
										</div>
										<div class="col-lg ">
											
											<input class="form-control" type="text" value="<?php echo $acc_holdr_name; ?>" style="border-bottom: 1px solid #000000;background-color: #a3eced; border-top: #fff; border-right: #fff;border-left: #fff;" readonly>
										</div><!-- col -->
										
										<input class="form-control" type="text" style="border-bottom: 1px solid #000000; border-top: #fff;background-color: #a3eced; border-right: #fff;border-left: #fff;" readonly>
									</div>
									<div class="row row-sm" style="padding-top: 10px">
										<div class="col-lg">
											<label>अक्षरी रुपये</label>
										</div>
										<div class="col-lg">
										<input class="form-control" type="text" value="<?php echo $amount_in_words; ?>" style="border-bottom: 1px solid #000000;background-color: #a3eced; border-top: #fff; border-right: #fff;border-left: #fff;" readonly>
										</div><!-- col -->
										<input class="form-control" type="text" style="border-bottom: 1px solid #000000; border-top: #fff;background-color: #a3eced; border-right: #fff;border-left: #fff;" readonly>
									</div>
									<div class="row row-sm" style="padding-top: 10px">
										<div class="col-lg" style="max-width: 60px;">
											<label>खाते नं</label>
										</div>
										<div class="col-lg ">
											<input class="form-control" type="text"   value="<?php echo $acc_no ; ?>" style="background-color: #a3eced;" readonly>
												<!-- <?php 	
													$acc = chunk_split($acc_no,1,',');
													$keywords = explode(',', $acc);
													
													foreach ($keywords as $keyword)
													{ 
														if($keyword != ""){
															echo '<td class="td_class">'.$keyword.'</td>';
														}
													}
												?> -->
											<label>बचत ठेव खाती भरले.</label>
										</div><!-- col -->
									</div>
									<div class="row row-sm" style="padding-top: 10px;margin-left: 40%;">
										<div class="col-lg">
											<label>खातेदाराची सही</label>
										</div>
									</div>
									<div class="row row-sm" style="padding-top: 10px;">
									<label>कॅशिअर / लेजर क्लार्क / एजंट / चेकर </label>
									</div>
								</div>
								<div class="col-lg-1 ht-lg-100p">
									<div class="vl v1Height">

									</div>
								</div>
								<div class="col-lg-8 ht-lg-100p">
									<div class="row">	
										<div class="col-lg hdname">
											<label>BC/BN No. </label>
										</div><!-- col -->							
										<div class="logo-slip">
											<img src="<?php echo base_url(); ?>/public/assets/img/icon.png"/>
										</div>
										<div class="logo-slip">
											<label class="logo-label" style=" font-weight: bold;">ऊर्जा पतसंस्था</label><br>
											<label class="logo-label">Urja Patsanstha</label>
										</div>
										
										<div class="col-lg hdname" >
											<label> चलन नं.</label>
											
										</div><!-- col -->
										<div class="col-lg hdname">
											<label>दि.     /      /२०२ </label>
										</div><!-- col -->
									</div>
									<div class="row row-sm">	
										<h1 style="font-size:20px;padding-left: 22%;"><b>बचत ठेव जमा चलन</b></h1>
									</div>
									<div class="row row-sm" style=" padding-bottom: 2px;">
										<div class="col-lg-3">
											<label>रुपये </label>
											<!-- <input class="form-control" type="text"> -->
										</div><!-- col -->
										<div class="col-lg-3 ">
										<input class="form-control"  value="<?php echo $amount_in_number; ?>" type="text" style="background-color: #a3eced;" readonly>
										</div><!-- col -->
										<div class="col-lg-3 ">
											<label> स्क्रोल नं. </label>
										</div><!-- col -->
										<div class="col-lg-3 ">
										<input class="form-control" type="text" style="background-color: #a3eced;">
										</div><!-- col -->
									</div>
									<div class="row row-sm">
										<div class="col-lg-4 tblwidth">
											<h1 style="font-size: 15px;"><b>रोख रकमेचा तपशील</b> </h1>
											<table>
												<thead>
													<th style="font-size:10px;font-weight:bold;"> रु. च्या नोटा </th>
													<th style="font-size:10px;font-weight:bold;"> संख्या </th>
													<th style="font-size:10px;font-weight:bold;"> रुपये </th>
													<th style="font-size:10px;font-weight:bold;"> पैसे </th>
												</thead>
												<tbody>

													<tr>
														<td>२००० </td>
														<td style="width:10%;"><input class="form-control" type="text"  id="twoThosandNoteCount" onkeyup="TwoThousand()" style="height: 15px;background-color: #a3eced;font-size: 0.610rem; text-align:center; padding:0px 0px 0px 0px;"></td>
														<td style="width:10%;"  id="totalRupees2000"><input class="form-control" style="height: 15px;background-color: #a3eced;padding:0px 0px 0px 0px;font-size: 0.610rem;" type="text"></td>
														<td style="width:10%;"><input class="form-control" style="height: 10px;background-color: #a3eced;" id="totalPaise2000" name="totalPaise2000" type="text"></td>
													</tr>
													<tr>
														<td>५०० </td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem; padding:0px 0px 0px 0px;background-color: #a3eced; text-align:center; " onkeyup="FiveHundred()" id="fiveHundredRupeesNoteCount" name="fiveHundredRupeesNoteCount" type="text"></td>
														<td style="width:10%;" id="totalRupees500" name="totalRupees500"><input class="form-control" style="height: 15px;background-color: #a3eced;font-size: 0.610rem; padding:0px 0px 0px 0px;"  type="text"></td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem;background-color: #a3eced; padding:0px 0px 0px 0px;" id="totalPaise500" name="totalPaise500" type="text"></td>
													</tr>
													<tr>
														<td>२०० </td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem;background-color: #a3eced; padding:0px 0px 0px 0px; text-align:center; " onkeyup="TwoHundred()" id="twoHundredRupeesNoteCount" name="twoHundredRupeesNoteCount" type="text"></td>
														<td style="width:10%;" id="totalRupees200" name="totalRupees200" ><input class="form-control" style="height: 15px;background-color: #a3eced;font-size: 0.610rem; padding:0px 0px 0px 0px;" type="text"></td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem;background-color: #a3eced; padding:0px 0px 0px 0px;" id="totalPaise200" name="totalPaise200" type="text"></td>
													</tr>
													<tr>
														<td>१०० </td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem;background-color: #a3eced; padding:0px 0px 0px 0px; text-align:center; " id="hundredRupeesNoteCount" name="hundredRupeesNoteCount" onkeyup="OneHundred()" type="text"></td>
														<td style="width:10%;" id="totalRupees100" name="totalRupees100"><input class="form-control" style="height: 15px;background-color: #a3eced;font-size: 0.610rem; padding:0px 0px 0px 0px;" type="text"></td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem; padding:0px 0px 0px 0px;background-color: #a3eced;" id="totalPaise100" name="totalPaise100" type="text"></td>
													</tr>
													<tr>
														<td>५० </td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem; padding:0px 0px 0px 0px;background-color: #a3eced; text-align:center; " id="fiftyRupeesNoteCount" name="fiftyRupeesNoteCount" onkeyup="Fifty()"  type="text"></td>
														<td style="width:10%;" id="totalRupees50" name="totalRupees50" ><input class="form-control" style="height: 15px;background-color: #a3eced;font-size: 0.610rem; padding:0px 0px 0px 0px;"type="text"></td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem;background-color: #a3eced; padding:0px 0px 0px 0px;" id="totalPaise50" name="totalPaise50" type="text"></td>
													</tr>
													<tr>
														<td>२० </td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem; background-color: #a3eced;padding:0px 0px 0px 0px; text-align:center; " id="twentyRupeesNoteCount" name="twentyRupeesNoteCount" onkeyup="Twenty()"  type="text"></td>
														<td style="width:10%;" id="totalRupees20" name="totalRupees20" ><input class="form-control" style="height: 15px;background-color: #a3eced;font-size: 0.610rem; padding:0px 0px 0px 0px;" type="text"></td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem;background-color: #a3eced; padding:0px 0px 0px 0px;" id="totalPaise20" name="totalPaise20" type="text"></td>
													</tr>
													<tr>
														<td>१० </td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem; padding:0px 0px 0px 0px;background-color: #a3eced; text-align:center; " id="tenRupeesNoteCount" name="tenRupeesNoteCount" onkeyup="Ten()"  type="text"></td>
														<td style="width:10%;" id="totalRupees10" name="totalRupees10" ><input class="form-control" style="height: 15px;background-color: #a3eced;font-size: 0.610rem; padding:0px 0px 0px 0px;" type="text"></td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem;background-color: #a3eced; padding:0px 0px 0px 0px;" id="totalPaise10" name="totalPaise10" type="text"></td>
													</tr>
													<tr>
														<td>५ </td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem;background-color: #a3eced; padding:0px 0px 0px 0px; text-align:center; " id="fiveRupeesNoteCount" name="fiveRupeesNoteCount" onkeyup=" Five()" type="text"></td>
														<td style="width:10%;" id="totalRupees5" name="totalRupees5"><input class="form-control" style="height: 15px;background-color: #a3eced;font-size: 0.610rem; padding:0px 0px 0px 0px;" type="text"></td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem; padding:0px 0px 0px 0px;background-color: #a3eced;" id="totalPaise5" name="totalPaise5" type="text"></td>
													</tr>
													<tr>
														<td>२</td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem; text-align:center;background-color: #a3eced;  padding:0px 0px 0px 0px" id="twoRupeesCount" onkeyup=" Two()" name="twoRupeesCount" type="text"></td>
														<td style="width:10%;" id="totalRupees2" name="totalRupees2"><input class="form-control" style="height: 15px;background-color: #a3eced;font-size: 0.610rem; padding:0px 0px 0px 0px"  type="text"></td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem; background-color: #a3eced;padding:0px 0px 0px 0px" id="totalPaise2" name="totalPaise2" type="text"></td>
													</tr>
													<tr>
														<td>१</td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;font-size: 0.610rem; padding:0px 0px 0px 0px;background-color: #a3eced; text-align:center; " id="oneRupeesCount" name="oneRupeesCount"onkeyup="One()"  type="text"></td>
														<td style="width:10%;" id="totalRupees1" name="totalRupees1" ><input class="form-control" style="height: 15px;background-color: #a3eced;font-size: 0.610rem; padding:0px 0px 0px 0px;" type="text"></td>
														<td style="width:10%;"><input class="form-control" style="height: 15px;background-color: #a3eced;font-size: 0.610rem; padding:0px 0px 0px 0px;" id="totalPaise1" name="totalPaise1" type="text"></td>
													</tr>
													<tr>
														<td>रोकड रुपये</td>
														<td id="totalNoOfNotes"><input class="form-control" style="height: 15px; text-align:center; background-color: #a3eced;font-size: 0.610rem; padding:0px 0px 0px 0px;" onclick="TotalCountOfNotes()" type="text"></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td>नाणी </td>
														<td></td>
														<td></td>
														<td></td>
													</tr>	
													<tr>
														<td onclick="TotalRs()">एकूण रुपये</td>
														<td colspan="3" id="totalAmount"></td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="col-lg-8">
										<h1><b>बचत / मुदत / रिकरिंग / चालू खाते</b></h1>
											<div class="row row-sm" style="padding-top: 10px">
												<div class="col-lg">
													<label>खातेदाराचे संपूर्ण नाव</label>
												</div>
												<div class="col-lg ">
													
													<input class="form-control" type="text"  value="<?php echo $acc_holdr_name; ?>" style="border-bottom: 1px solid #000000; border-top: #fff;background-color: #a3eced; border-right: #fff;border-left: #fff;" readonly>
												</div><!-- col -->
												<input class="form-control" type="text" style="border-bottom: 1px solid #000000; border-top: #fff; border-right: #fff;border-left: #fff;background-color: #a3eced;" readonly>
											</div>
											<div class="row row-sm" style="padding-top: 10px">
												<div class="col-lg">
													<label>अक्षरी रुपये</label>
												</div>
												<div class="col-lg">
													<input class="form-control" value="<?php echo $amount_in_words; ?>" type="text" style="border-bottom: 1px solid #000000;background-color: #a3eced; border-top: #fff; border-right: #fff;border-left: #fff;" readonly>
												</div><!-- col -->
												<input class="form-control" type="text" style="border-bottom: 1px solid #000000;background-color: #a3eced; border-top: #fff; border-right: #fff;border-left: #fff;" readonly>
											</div>
											<div class="row row-sm" style="padding-top: 10px">
												<div class="col-lg" style="max-width: 60px;">
													<label>खाते नं</label>
												</div>
												<div class="col-lg ">
													<!-- <?php 	
														$acc = chunk_split($acc_no,1,',');
														$keywords = explode(',', $acc);
														
														foreach ($keywords as $keyword)
														{ 
															if($keyword != ""){
																echo '<td class="td_class">'.$keyword.'</td>';
															}
														}
													?> -->
													<input class="form-control" type="text"   value="<?php echo $acc_no ; ?>" style="width:80%;background-color: #a3eced;"  readonly/>
													<label>बचत ठेव खाती भरले.</label>
												</div><!-- col -->
											</div>
											<div class="row row-sm" style="padding-top: 10px;margin-left: 40%;">
												<div class="col-lg ">
													<label>खातेदाराची सही</label>
													
												</div>
												<div class="col-lg ">
												<input class="form-control" type="text" style="border-bottom: 1px solid #000000; border-top: #fff; border-right: #fff;border-left: #fff;background-color: #a3eced;">
												</div><!-- col -->
											</div>
											<div class="row row-sm" style="padding-top: 10px;">
												<div class="col-lg-4 hdname">
													<label>कॅशिअर</label>
												</div>
												<div class="col-lg-4 hdname">
													<label>लेजर क्लार्क</label>
												</div>
												<div class="col-lg-4 hdname">
													<label>एजंट / चेकर</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>

						</div><!-- card -->
					</div><!-- col -->
					
				</div>
			</div>

			
		</div>
	</div>
</div>
</div>
</div>
</div>
	


<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
		<div class="container">

			<script>
				document.addEventListener("DOMContentLoaded",fns);
				function fns() {
					// auto tabbing between number fields
					var inputs = document.querySelectorAll("form input");
					for (i in inputs) {
						if (i < inputs.length) {
							inputs[i].addEventListener("input",function(){
								if (this.value.length === 1) {
									if (this.nextSibling.tagName == "INPUT") {
										this.nextSibling.focus();
										this.nextSibling.select();
									}
								}
							});
						}
					}
				}
			</script>

			<div class="row row-sm border vendorListHeading">
				<div class="col-md">
					<div class="card card-body bg-gray-200 bd-0" style='background-color: #00cace5c;'>
						<div class="row row-sm mg-b-20">
							
							   


							<div class="col-lg-8">
								<!-- <div class="row row-sm"> -->
									<div class="col-md-12">
										<h1 style="font-size:16px;text-align:center;"><b>चेकचा तपशील </b></h1>
										<table style="width:100%;">
											<thead style="height: 30px;text-align: center;">
												<th style=" font-size: 12px;font-weight:bold;">बँकेचे नाव व चेक क्रमांक </th>
												<th style=" font-size: 12px;font-weight:bold;">  गाव  / शाखा  </th>
												<th style=" font-size: 12px;font-weight:bold;"> रुपये </th>
												<th style=" font-size: 12px;font-weight:bold;"> पैसे </th>
											</thead>
											<tbody>
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>	
												<tr style="height: 20px;">
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
									
								<!-- </div> -->
							</div>

							<div class="col-lg-1 ht-lg-100p">
								<div class="vl">

								</div>
							</div>


							<div class="col-lg-3 ht-lg-100p">
								
								
								
								<div class="row row-sm" style="padding-top: 10px">
									<div class="col-lg">
										<label>रक्कम रुपये </label>
									</div>
									<div class="col-lg ">
										
										<input class="form-control" type="text" style="border-bottom: 1px solid #000000; border-top: #fff; border-right: #fff;border-left: #fff;">
									</div><!-- col -->
									
									<input class="form-control" type="text" style="border-bottom: 1px solid #000000; border-top: #fff; border-right: #fff;border-left: #fff;">
								</div>
								<div class="row row-sm" style="padding-top: 10px">
									<div class="col-lg">
										<label>चेक क्रमांक  </label>
									</div>
									<div class="col-lg">
										<input class="form-control" type="text" style="border-bottom: 1px solid #000000; border-top: #fff; border-right: #fff;border-left: #fff;">
									</div><!-- col -->
									<input class="form-control" type="text" style="border-bottom: 1px solid #000000; border-top: #fff; border-right: #fff;border-left: #fff;">
								</div>
								<div class="row row-sm" style="padding-top: 10px">
									<div class="col-lg">
										<label>चेक दिनांक &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/202&nbsp;&nbsp;&nbsp;  </label>
									</div>
								</div>
								<div class="row row-sm" style="padding-top: 10px">
									<div class="col-lg">
										<label>बँकेचे नाव </label>
									</div>
									<div class="col-lg">
										<input class="form-control" type="text"  style="border-bottom: 1px solid #000000; border-top: #fff; border-right: #fff;border-left: #fff;">
									</div><!-- col -->
									<input class="form-control" type="text" style="border-bottom: 1px solid #000000; border-top: #fff; border-right: #fff;border-left: #fff;">
									<input class="form-control" type="text" style="border-bottom: 1px solid #000000; border-top: #fff; border-right: #fff;border-left: #fff;">
								</div>
							</div>
							
						</div>

					</div><!-- card -->
				</div><!-- col -->
				
          	</div>

			
		</div>
	</div>
</div>
</div>
</div>
</div>
	<script>
	// 	var myApp = new function () {
    //     this.printTable = function () {
	// 		var tab = document.getElementById('divPrint');
    //         var style = "<style>";
    //             style = style + "table {width: 100%;font: 10px Calibri;}";
    //             style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
    //             style = style + "padding: 2px 3px;text-align: center;}";
    //             style = style + "</style>";

    //         var win = window.open('', '', 'height=2000,width=1000');
    //         win.document.write(style);          //  add the style.
    //         win.document.write(tab.outerHTML);
    //         win.document.close();
    //         win.print();
    //     }
    // }
        // function printDiv() {
		// 	var divToPrint=document.getElementById("divPrint");
		// 	newWin= window.open("");
		// 	newWin.document.write(divToPrint.outerHTML);
		// 	newWin.print();
		// 	newWin.close();
        // }
    </script>
<?= $this->include('default/footer') ?>




