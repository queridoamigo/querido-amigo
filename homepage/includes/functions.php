<?php

function completeRows() {

	$linksPics[0] = array("thumb" => "https://farm1.staticflickr.com/506/19401739228_248e7fa5a7_n.jpg", "fullsize" => "https://farm1.staticflickr.com/506/19401739228_248e7fa5a7_c.jpg");
	$linksPics[1] = array("thumb" => "https://farm1.staticflickr.com/264/20151032216_40dfb8280f_n.jpg", "fullsize" => "https://farm1.staticflickr.com/264/20151032216_40dfb8280f_c.jpg");
	$linksPics[2] = array("thumb" => "https://farm1.staticflickr.com/506/19828357310_5d5789d621_n.jpg", "fullsize" => "https://farm1.staticflickr.com/506/19828357310_5d5789d621_c.jpg");
	$linksPics[3] = array("thumb" => "https://farm6.staticflickr.com/5822/19997280023_a37cc32e73_n.jpg", "fullsize" => "https://farm6.staticflickr.com/5822/19997280023_a37cc32e73_c.jpg");
	$linksPics[4] = array("thumb" => "https://farm1.staticflickr.com/538/20485737746_a0771c2943_n.jpg", "fullsize" => "https://farm1.staticflickr.com/538/20485737746_a0771c2943_c.jpg");
	$linksPics[5] = array("thumb" => "https://farm4.staticflickr.com/3771/19552191951_a431197caf_n.jpg", "fullsize" => "https://farm4.staticflickr.com/3771/19552191951_a431197caf_c.jpg");
/*	$linksPics[6] = array("thumb" => "https://farm1.staticflickr.com/255/19474561321_aa43b8a0b7_n.jpg", "fullsize" => "https://farm1.staticflickr.com/255/19474561321_aa43b8a0b7_c.jpg");
	$linksPics[7] = array("thumb" => "https://farm4.staticflickr.com/3668/19433324594_c8b69453b2_n.jpg", "fullsize" => "https://farm4.staticflickr.com/3668/19433324594_c8b69453b2_c.jpg");
	$linksPics[8] = array("thumb" => "https://farm1.staticflickr.com/561/19979468121_08bb8c0e69_n.jpg", "fullsize" => "https://farm1.staticflickr.com/561/19979468121_08bb8c0e69_c.jpg");
	$linksPics[9] = array("thumb" => "https://farm9.staticflickr.com/8688/16600184620_71e975c28b_n.jpg", "fullsize" => "https://farm9.staticflickr.com/8688/16600184620_71e975c28b_c.jpg");
	$linksPics[10] = array("thumb" => "https://farm9.staticflickr.com/8678/16112200563_a6e108bc6a_n.jpg", "fullsize" => "https://farm9.staticflickr.com/8678/16112200563_a6e108bc6a_c.jpg");
	$linksPics[11] = array("thumb" => "https://farm8.staticflickr.com/7497/16212313735_bab48656ca_n.jpg", "fullsize" => "https://farm8.staticflickr.com/7497/16212313735_bab48656ca_c.jpg");
	$linksPics[12] = array("thumb" => "https://farm8.staticflickr.com/7532/15461933493_6a0525f859_n.jpg", "fullsize" => "https://farm8.staticflickr.com/7532/15461933493_6a0525f859_c.jpg");
	$linksPics[13] = array("thumb" => "https://farm8.staticflickr.com/7569/16158772306_9b7d16a6a7_n.jpg", "fullsize" => "https://farm8.staticflickr.com/7569/16158772306_9b7d16a6a7_c.jpg");
	$linksPics[14] = array("thumb" => "https://farm8.staticflickr.com/7574/15919555377_e136e043e2_n.jpg", "fullsize" => "https://farm8.staticflickr.com/7574/15919555377_e136e043e2_c.jpg");
*/


	$rows = 
            "
            <div class=\"row\"> ";

	foreach($linksPics as $row => $value) {
			$rows .=" 
					<div class='col-md-4'>
							<div class='thumbnail'>
							<a class='cboxElement' rel='colorbox' href='". $value['fullsize'] ."' style='outline: none' > <img src='". $value['thumb'] ."' style='border: 1px solid #456;' alt='Lorem ipsum dolor sit amet...' />
							</a> 
							</div>
					</div>
					";
	}

	$rows .= " 
				</div> 
				";

	echo $rows;
}


function completeRows1() {

	$linksPics[6] = array("thumb" => "https://farm1.staticflickr.com/255/19474561321_aa43b8a0b7_n.jpg", "fullsize" => "https://farm1.staticflickr.com/255/19474561321_aa43b8a0b7_c.jpg");
	$linksPics[7] = array("thumb" => "https://farm4.staticflickr.com/3668/19433324594_c8b69453b2_n.jpg", "fullsize" => "https://farm4.staticflickr.com/3668/19433324594_c8b69453b2_c.jpg");
	$linksPics[8] = array("thumb" => "https://farm1.staticflickr.com/561/19979468121_08bb8c0e69_n.jpg", "fullsize" => "https://farm1.staticflickr.com/561/19979468121_08bb8c0e69_c.jpg");
	$linksPics[9] = array("thumb" => "https://farm9.staticflickr.com/8688/16600184620_71e975c28b_n.jpg", "fullsize" => "https://farm9.staticflickr.com/8688/16600184620_71e975c28b_c.jpg");
	$linksPics[10] = array("thumb" => "https://farm9.staticflickr.com/8678/16112200563_a6e108bc6a_n.jpg", "fullsize" => "https://farm9.staticflickr.com/8678/16112200563_a6e108bc6a_c.jpg");
	$linksPics[11] = array("thumb" => "https://farm8.staticflickr.com/7497/16212313735_bab48656ca_n.jpg", "fullsize" => "https://farm8.staticflickr.com/7497/16212313735_bab48656ca_c.jpg");



	$rows = 
            "
            <div class=\"row\"> ";

	foreach($linksPics as $row => $value) {
			$rows .=" 
					<div class='col-md-4'>
							<div class='thumbnail-feature'>
							<a class='cboxElement' rel='colorbox' href='". $value['fullsize'] ."' style='outline: none' > <img src='". $value['thumb'] ."' style='border: 1px solid #456;' alt='Lorem ipsum dolor sit amet...' />
							</a> 
							</div>
					</div>
					";
	}

	$rows .= " 
				</div> 
				";

	echo $rows;
}

function completeRows2() {

	$linksPics[0] = array("thumb" => "https://farm6.staticflickr.com/5687/20666995821_328efeee7b_n.jpg", "fullsize" => "https://farm6.staticflickr.com/5687/20666995821_328efeee7b_c.jpg");
	$linksPics[1] = array("thumb" => "https://farm1.staticflickr.com/421/20400539946_f4f6d6aaef_n.jpg", "fullsize" => "https://farm1.staticflickr.com/421/20400539946_f4f6d6aaef_c.jpg");
	$linksPics[2] = array("thumb" => "https://farm3.staticflickr.com/2946/15403110075_bffcb732eb_n.jpg", "fullsize" => "https://farm3.staticflickr.com/2946/15403110075_bffcb732eb_c.jpg");
	$linksPics[3] = array("thumb" => "https://farm4.staticflickr.com/3927/15407385562_8fdb9273d6_n.jpg", "fullsize" => "https://farm4.staticflickr.com/3927/15407385562_8fdb9273d6_c.jpg");
	$linksPics[4] = array("thumb" => "https://farm1.staticflickr.com/278/20210386601_da2bec13a7_n.jpg", "fullsize" => "https://farm1.staticflickr.com/278/20210386601_da2bec13a7_c.jpg");
	$linksPics[5] = array("thumb" => "https://farm8.staticflickr.com/7570/16051213476_3be5712676_n.jpg", "fullsize" => "https://farm8.staticflickr.com/7570/16051213476_3be5712676_c.jpg");



	$rows = 
            "
            <div class=\"row\"> ";

	foreach($linksPics as $row => $value) {
			$rows .=" 
					<div class='col-md-4'>
							<div class='thumbnail-feature'>
							<a class='cboxElement' rel='colorbox' href='". $value['fullsize'] ."' style='outline: none' > <img src='". $value['thumb'] ."' style='border: 1px solid #456;' alt='Lorem ipsum dolor sit amet...' />
							</a> 
							</div>
					</div>
					";
	}

	$rows .= " 
				</div> 
				";

	echo $rows;
}

function completeRows3() {

	$linksPics[0] = array("thumb" => "https://farm6.staticflickr.com/5576/15226238932_53876cd8f7_n.jpg", "fullsize" => "https://farm6.staticflickr.com/5576/15226238932_53876cd8f7_c.jpg");
	$linksPics[1] = array("thumb" => "https://farm3.staticflickr.com/2948/15190956387_453d83032b_n.jpg", "fullsize" => "https://farm3.staticflickr.com/2948/15190956387_453d83032b_c.jpg");
	$linksPics[2] = array("thumb" => "https://farm4.staticflickr.com/3921/15185808735_42fc0b0c5e_n.jpg", "fullsize" => "https://farm4.staticflickr.com/3921/15185808735_42fc0b0c5e_c.jpg");
	$linksPics[3] = array("thumb" => "https://farm6.staticflickr.com/5595/14977383228_20493d8269_n.jpg", "fullsize" => "https://farm6.staticflickr.com/5595/14977383228_20493d8269_c.jpg");
	$linksPics[4] = array("thumb" => "https://farm4.staticflickr.com/3845/15172166281_cecf9263e4_n.jpg", "fullsize" => "https://farm4.staticflickr.com/3845/15172166281_cecf9263e4_c.jpg");
	$linksPics[5] = array("thumb" => "https://farm4.staticflickr.com/3842/15217937742_6af24f84ec_n.jpg", "fullsize" => "https://farm4.staticflickr.com/3842/15217937742_6af24f84ec_c.jpg");



	$rows = 
            "
            <div class=\"row\"> ";

	foreach($linksPics as $row => $value) {
			$rows .=" 
					<div class='col-md-4'>
							<div class='thumbnail-feature'>
							<a class='cboxElement' rel='colorbox' href='". $value['fullsize'] ."' style='outline: none' > <img src='". $value['thumb'] ."' style='border: 1px solid #456;' alt='Lorem ipsum dolor sit amet...' />
							</a> 
							</div>
					</div>
					";
	}

	$rows .= " 
				</div> 
				";

	echo $rows;
}
?>