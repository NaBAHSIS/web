<!DOCTYPE html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns#" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  padding : 10px ;
  
}

#exTab1 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

#exTab2 h3 {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

/* remove border radius for the tab */

#exTab1 .nav-pills > li > a {
  border-radius: 0;
}

/* change border radius for the tab , apply corners on top*/

#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!--script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script-->
</head>
<body>


<div class="container"><h2>Example 3 </h2></div>
<div id="exTab3" class="container">	
			<ul  class="nav nav-pills">
						<li class="active">
							<a  href="#1b" data-toggle="tab">Table 1</a>
						</li>
						<li>
							<a href="#2b" data-toggle="tab">Table 2</a>
						</li>
						<li>
							<a href="#3b" data-toggle="tab">Table 3</a>
						</li>
						<li>
							<a href="#4a" data-toggle="tab">Table 4</a>
						</li>
			</ul>

			<div class="tab-content clearfix">
				<div class="tab-pane active" id="1b">
					<h3>Same as example 1 but we have now styled the tab's corner</h3>
				</div>
				<div class="tab-pane" id="2b">
					<h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
				</div>
				<div class="tab-pane" id="3b">
					<h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
				</div>
				<div class="tab-pane" id="4b">
					<h3>We use css to change the background color of the content to be equal to the tab</h3>
				</div>
			</div>
  </div>


<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 
 $sql2="INSERT INTO `table2` (`NUM_PORTEFEUILLES`, `Nom_client`, `Prenom_client`, `PROFIL`) VALUES('1111-111111', 'Mansoif', 'Gérard', 1),('1111-222222', 'Lagreux', 'Nadine', 1),('3333-111111', 'Touille', 'Sacha', 2),('4444-111111', 'Covert', 'Harry', 4)";
		
        //$wpdb->query($sql2);
		
 $sql3="INSERT INTO `table3` (`PROFIL`, `LIBELLE`, `FUND ISIN`, `POIDS`) VALUES
(1, 'ETF1', 'FR1', 10),
(1, 'ETF21', 'FR2', 20),
(1, 'ETF3', 'FR3', 30),
(1, 'ETF4', 'FR4', 30),
(1, 'ETF6', 'FR6', 10),
(2, 'ETF1', 'FR1', 20),
(2, 'ETF9', 'FR9', 50),
(2, 'ETF2', 'FR2', 30),
(3, 'ETF1', 'FR1', 50),
(3, 'ETF8', 'FR8', 25),
(3, 'ETF1', 'FR1', 5),
(3, 'ETF2', 'FR2', 20),
(4, 'ETF5', 'FR5', 30),
(4, 'ETF8', 'FR8', 50),
(4, 'ETF9', 'FR9', 20)";
		
       // $wpdb->query($sql3);
	   
	$sql1="INSERT INTO `table1` (`BROKER NAME`, `POLICY NUMBER`, `FUND NAME`, `FUND ISIN`, `FUND UNITS`, `FUND PRICE DATE`, `FUND PRICE`, `FUND VALUE EUR`, `TOTAL GROSS PREMIUM`, `START FUND DATE`, `FUND PERF (INFO ONLY)`, `EXTRACTION_DATE`, `AUM`, `POIDS`, `CLASSE`, `GEO`, `TYP_TX`, `TYP_REPLIC`, `SMART_BETA`, `FRAIS_GESTION`, `SPREAD`) VALUES
('PRAGMAGES', '1111-111111', 'ETF1', 'FR1', '1489.13021', '31/07/2017', '104.6813', '155884.131', '150000', '18/01/2016', '4.68133', '06/08/2017', '155884.131', '10', '-', '-', '-', '-', '-', '-', '-'),
('PRAGMAGES', '1111-111111', 'ETF2', 'FR2', '1518.48668', '31/07/2017', '97.03006', '147338.854', '150000', '22/02/2017', '-2.96994', '06/08/2017', '147338.854', '30', '-', '-', '-', '-', '-', '-', '-'),
('PRAGMAGES', '1111-111111', 'ETF3', 'FR3', '162.524254', '03/08/2017', '15.7375', '2153.96016', '92000', '22/06/2017', '3.604344964', '06/08/2017', '93223.8600', '50', 'Equity', 'Global', '', 'Physique', 'Market Cap', '0.5', '0.44478732'),
('PRAGMAGES', '1111-111111', 'ETF4', 'FR4', '41.811733', '03/08/2017', '215.6', '9014.60963', '92000', '13/10/2016', '18.61795775', '06/08/2017', '93223.8600', '10', 'Equity', 'European Region', '', 'Synth?tiq', 'Market Cap', '0.2', '0.0916'),
('PRAGMAGES', '1111-222222', 'ETF1', 'FR1', '103.148914', '03/08/2017', '102.06', '8865.52697', '92000', '13/10/2016', '11.69968261', '06/08/2017', '93223.8600', '25', 'Fixed Income', 'U.S.', 'Inflation Protected', 'Synth?tiq', 'Market Cap', '0.2', '0.4209625'),
('PRAGMAGES', '1111-222222', 'ETF5', 'FR5', '30.41482', '03/08/2017', '85.92', '2613.24133', '92000', '20/02/2017', '-12.6562976', '06/08/2017', '93223.8600', '25', 'Fixed Income', 'U.S.', 'Inflation Protected', 'Synth?tiq', 'Market Cap', '0.2', '0.4209625'),
('PRAGMAGES', '1111-222222', 'ETF6', 'FR6', '882.729406', '03/08/2017', '5.765', '4285.60360', '92000', '22/06/2017', '3.13059034', '06/08/2017', '93223.8600', '10', 'Equity', 'Global', '', 'Physique', 'Equal', '0.4', '0.41063668'),
('PRAGMAGES', '1111-222222', 'ETF2', 'FR2', '128.523364', '03/08/2017', '36.64', '3965.71645', '92000', '28/07/2016', '37.07444819', '06/08/2017', '93223.8600', '40', 'Equity', 'China', '', 'Physique', 'Market Cap', '0.6', '0.1468375'),
('PRAGMAGES', '2222-111111', 'ETF1', 'FR1', '318.97153', '03/08/2017', '16.508', '5265.58201', '92000', '28/07/2016', '-32.4826175', '06/08/2017', '93223.8600', '55', 'Equity', 'Global', '', 'Synth?tiq', 'Equal', '0.6', '0.3657875'),
('PRAGMAGES', '2222-111111', 'ETF8', 'FR8', '38.919347', '03/08/2017', '218.78', '8514.77473', '92000', '26/04/2017', '2.757033488', '06/08/2017', '93223.8600', '45', 'Fixed Income', 'Eurozone', 'Corporate', 'Synth?tiq', 'Market Cap', '0.4', '0.2621625'),
('PRAGMAGES', '3333-111111', 'ETF1', 'FR1', '378.653821', '03/08/2017', '13.277', '5027.38678', '92000', '11/05/2017', '-16.1276058', '06/08/2017', '93223.8600', '5', 'Equity', 'Global', '', 'Physique', 'Market Cap', '0.5', '0.44478732'),
('PRAGMAGES', '3333-111111', 'ETF2', 'FR2', '71.652775', '30/06/2017', '145.55', '10429.0614', '92000', '26/04/2017', '0', '06/08/2017', '93223.8600', '20', 'Fixed Income', 'Eurozone', 'Corporate', 'Synth?tiq', 'Market Cap', '0.2', '0.1162375'),
('PRAGMAGES', '3333-111111', 'ETF5', 'FR5', '190.892197', '03/08/2017', '46.52', '8880.30500', '92000', '28/07/2016', '24.48488092', '06/08/2017', '93223.8600', '30', 'Equity', 'Japan', '', 'Physique', 'Market Cap', '0.6', '0.16011532'),
('PRAGMAGES', '3333-111111', 'ETF8', 'FR8', '102.947302', '03/08/2017', '41.22', '4243.48778', '92000', '20/02/2017', '6.374193548', '06/08/2017', '93223.8600', '20', 'Equity', 'European Region', '', 'Physique', 'Market Cap', '0.4', '0.0568125'),
('PRAGMAGES', '3333-111111', 'ETF9', 'FR9', '17.599544', '03/08/2017', '354.2', '6233.75848', '92000', '28/07/2016', '7.571294075', '06/08/2017', '93223.8600', '25', 'Equity', 'Global', '', 'Synth?tiq', 'Multi Factor', '0.4', '0.335025'),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')"; 

//$wpdb->query($sql1);  
		//echo $sql1.'</br>';
		
		$results=$wpdb->get_results("SELECT * FROM `table1`");
		print_r($results);
		
 exit;
 
 
 
 	global $jal_db_version;
	       $jal_db_version = '1.0';
        jal_install();
		
 
			function jal_install() {
				global $wpdb;
				global $jal_db_version;

				$table_name1 =  'table1';
				$table_name2 =  'table2';
                $table_name3 =  'table3';
                       
       					   
				$charset_collate = $wpdb->get_charset_collate();
				//$charset_collate ="ENGINE=InnoDB DEFAULT CHARSET=utf8";

				$sql = "CREATE TABLE $table_name1 (
					    `BROKER NAME` varchar(9) DEFAULT NULL,
                                            `POLICY NUMBER` varchar(11) DEFAULT NULL,
                                            `FUND NAME` varchar(4) DEFAULT NULL,
                                            `FUND ISIN` varchar(3) DEFAULT NULL,
                                            `FUND UNITS` varchar(10) DEFAULT NULL,
                                            `FUND PRICE DATE` varchar(10) DEFAULT NULL,
                                            `FUND PRICE` varchar(8) DEFAULT NULL,
                                            `FUND VALUE EUR` varchar(10) DEFAULT NULL,
                                            `TOTAL GROSS PREMIUM` varchar(6) DEFAULT NULL,
                                            `START FUND DATE` varchar(10) DEFAULT NULL,
                                            `FUND PERF (INFO ONLY)` varchar(11) DEFAULT NULL,
                                            `EXTRACTION_DATE` varchar(10) DEFAULT NULL,
                                            `AUM` varchar(10) DEFAULT NULL,
                                            `POIDS` varchar(2) DEFAULT NULL,
                                            `CLASSE` varchar(12) DEFAULT NULL,
                                            `GEO` varchar(15) DEFAULT NULL,
                                            `TYP_TX` varchar(19) DEFAULT NULL,
                                            `TYP_REPLIC` varchar(9) DEFAULT NULL,
                                            `SMART_BETA` varchar(12) DEFAULT NULL,
                                            `FRAIS_GESTION` varchar(3) DEFAULT NULL,
                                            `SPREAD` varchar(10) DEFAULT NULL
											) $charset_collate;";
                                
								
                              $sql2 = "CREATE TABLE $table_name2 (
                                            `NUM_PORTEFEUILLES` varchar(11) DEFAULT NULL,
                                            `Nom_client` varchar(7) DEFAULT NULL,
                                            `Prenom_client` varchar(6) DEFAULT NULL,
                                            `PROFIL` int(1) DEFAULT NULL
											) $charset_collate;"; 
                               
                                 $sql3 = "CREATE TABLE $table_name3 ( 
                                            `PROFIL` int(1) DEFAULT NULL,
                                            `LIBELLE` varchar(5) DEFAULT NULL,
                                            `FUND ISIN` varchar(3) DEFAULT NULL,
                                            `POIDS` int(2) DEFAULT NULL
											) $charset_collate;"; 
                                 
				require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
				//dbDelta( $sql2 );
				//dbDelta( $sql );
               // dbDelta( $sql2 );
                dbDelta( $sql3 );
				add_option( 'jal_db_version', $jal_db_version );
			}			
		

		
		
		
jQuery(document).ready(function(e){
	
	jQuery('#cpt_rd').css('visibility','hidden');
	//jQuery('#cpt_rd').prev().hide();
	jQuery('#Lancer').click(function(e){
		
	//alert( jQuery('#table_2  .text_filter').val());
		var elt=jQuery(this);
		var formdata={filtre: jQuery('#table_2  .text_filter').val()};
		 
		        jQuery.ajax({
                        url: '../wp-content/themes/consulting-child/js/output.php',
                        type: 'POST',
                        data: formdata,
                        success: function (result, statut) { // success est toujours en place, bien sûr !
                           
							   jQuery('#cpt_rd').css('visibility','visible');
							   jQuery('.disabled').css('opacity','1');
							   jQuery('.disabled').children().attr('data-toggle','tab');
							   jQuery('.disabled').removeClass('disabled'); 
							   jQuery('html,body').animate({
								scrollTop: jQuery(".page_title").offset().top
								}, 700);
					   },
                        error: function (resultat, statut, erreur) {
                                alert(erreur);
                        }
                });  
			
		
	});
	
});
</body>
</html>



















					 $insertREq="INSERT INTO `table4`(`num_portefeuille`, `nom_client`, `Prenom_client`, `ETF_name_sold_1`, `ETF_code_sold_1`,  `ETF_%_sold_1`,  `ETF_name_sold_2`, `ETF_code_sold_2`, `ETF_%_sold_2`,  `ETF_name_sold_3`, `ETF_code_sold_3`, `ETF_%_sold_3`,  `ETF_name_sold_4`,  `ETF_code_sold_4`, `ETF_%_sold_4`,  `ETF_name_sold_5`,`ETF_code_sold_5`, `ETF_%_sold_5`,   `ETF_name_sold_6`,  `ETF_code_sold_6`,  `ETF_%_sold_6`,  `ETF_name_sold_7`, `ETF_code_sold_7`, `ETF_%_sold_7`,  `ETF_name_sold_8`, `ETF_code_sold_8`,  `ETF_%_sold_8`, `ETF_name_sold_9`, `ETF_code_sold_9`,  `ETF_%_sold_9`,  `ETF_name_sold_10`, `ETF_code_sold_10`, `ETF_%_sold_10`, `ETF_name_buy_1`, `ETF_code_buy_1`,  `ETF_%_buy_1`,  `ETF_name_buy_2`,  `ETF_code_buy_2`,  `ETF_%_buy_2`,  `ETF_name_buy_3`,  `ETF_code_buy_3`,  `ETF_%_buy_3`, `ETF_name_buy_4`,  `ETF_code_buy_4`,  `ETF_%_buy_4`,  `ETF_name_buy_5`,  `ETF_code_buy_5`, `ETF_%_buy_5`,   `ETF_name_buy_6`,  `ETF_code_buy_6`, `ETF_%_buy_6`,  `ETF_name_buy_7`,  `ETF_code_buy_7`,  `ETF_%_buy_7`,  `ETF_name_buy_8`,  `ETF_code_buy_8`,  `ETF_%_buy_8`,  `ETF_name_buy_9`,  `ETF_code_buy_9`,  `ETF_%_buy_9`, `ETF_name_buy_10`, `ETF_code_buy_10`, `ETF_%_buy_10`, `jour`, `mois`, `annee`) VALUES ('".$portfeuille."','".$nom."','".$prenom."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','$day','$mounth','$year')"; 
					  $tmp_result = $wpdb->query($insertREq); 
					
					
					 fwrite($fh, '  - Client '.$nom.'  traité. '.PHP_EOL); 
					 fwrite($fh, ' 																			 '.PHP_EOL); 

					
					foreach  ($compare as $col) {
						$col=(array)$col;
						$etf= $col['FUND NAME'];
						$code=$col['FUND ISIN'];
						$tab1poid= $col['POIDS']; 
						//$count++;
						$checksum++;	
						
						$reqcomp=" SELECT DISTINCT  `PROFIL`, `LIBELLE`, tab3.`FUND ISIN` as tab3ISIN, tab3.`POIDS` as tab3Poids  FROM `table3` as tab3  WHERE tab3.`LIBELLE` ='".$etf."' AND tab3.`PROFIL` ='".$profil_d_risque."' ";
						
						$comprslt=$wpdb->get_results($reqcomp);
						
						$counttab1= Count($comprslt);
						
						 if( Count($comprslt) ==0){
							
							//etf not exist on table 3
							
						    $update_buy_name_REq="UPDATE `table4` SET `ETF_name_sold_$count`='".$etf."',`ETF_code_sold_$count`='".$code."',`ETF_%_sold_$count`='100' WHERE `num_portefeuille`='".$portfeuille."'";
							$uprslt=$wpdb->query($update_buy_name_REq); 
							$count++;
							} 
							else{
									foreach  ($comprslt as $rslt) {
										
										$tab3poid=$rslt->tab3Poids;
									
										if($tab1poid >$tab3poid){
											$ETF_sold_i =100*(1-(intval($tab3poid)/intval($tab1poid)));
											
											if($ETF_sold_i>=20)
											{// il faut vendre 
												 $update_sld_REq="UPDATE `table4` SET `ETF_name_sold_$count`='".$etf."',`ETF_code_sold_$count`='".$code."',`ETF_%_sold_$count`='".$ETF_sold_i."' WHERE `num_portefeuille`='".$portfeuille."'";
												$up_sld_rslt=$wpdb->query($update_sld_REq); 
											$count++;
											}
											/*else{
												$update_sld_REq="UPDATE `table4` SET `ETF_name_sold_$count`='',`ETF_code_sold_$count`='',`ETF_%_sold_$count`='' WHERE `num_portefeuille`='".$portfeuille."'";
												$up_sld_rslt=$wpdb->query($update_sld_REq); 
												 
												
											}*/
											
										}
										else if($tab1poid <$tab3poid){ //==>il faut acheter 
						
											$sum=0;	$pd='';
										
											$re_i="SELECT `ETF_%_sold_1`, `ETF_name_sold_1`, `ETF_%_sold_2`, `ETF_name_sold_2`,`ETF_%_sold_3`, `ETF_name_sold_3`, `ETF_%_sold_4`, `ETF_name_sold_4`,`ETF_%_sold_5`, `ETF_name_sold_5`,`ETF_%_sold_6`, `ETF_name_sold_6`,`ETF_%_sold_7`, `ETF_name_sold_7`,`ETF_%_sold_8`, `ETF_name_sold_8`,`ETF_%_sold_9`, `ETF_name_sold_9`, `ETF_%_sold_10`, `ETF_name_sold_10` FROM `table4` WHERE `num_portefeuille`='".$portfeuille."'";
											$rsltt=$wpdb-> get_results($re_i);	
											
											foreach($rsltt as $r){
												
													$tab[0]=$r-> ETF_name_sold_1; 
													$tab[1]=$r-> ETF_name_sold_2;  
													$tab[2]=$r-> ETF_name_sold_3; 
													$tab[3]=$r-> ETF_name_sold_4; 
													$tab[4]=$r-> ETF_name_sold_5;
													$tab[5]=$r-> ETF_name_sold_6;
													$tab[6]=$r-> ETF_name_sold_7; 
													$tab[7]=$r-> ETF_name_sold_8; 
													$tab[8]=$r-> ETF_name_sold_9;
													$tab[9]=$r-> ETF_name_sold_10;												
													
													for ($i=0;$i<10;$i++){
														if($tab[$i] !=''){
															//echo $tab[$i] .' ffkk </br>';
																$res_i="SELECT `POIDS` FROM `table1` WHERE `FUND NAME`='".$tab[$i]."' AND `POLICY NUMBER`='".$portfeuille."'";
																$ress_i="SELECT `POIDS` FROM `table3` WHERE `LIBELLE`='".$tab[$i]."' AND `PROFIL`='".$profil_d_risque."'";
																$valetf = 'ETF_%_sold_'.($i+1);
																$valetf = $r -> $valetf;
																
																$rslts1=$wpdb-> get_var($res_i);  
																$rslts2=$wpdb-> get_var($ress_i);
																if(($rslts2=='')|| ($rslts2<$rslts1)){
																	$pd=$rslts1;
																}
																else if ($rslts2>$rslts1){
																	$pd=$rslts2;
																}
																
																$sum += ($valetf * $pd) /100;
														}	
														
													}	
											
												}
											
											//echo $sum.' la somme </br>'; 
										
												if($sum>0 && ($checksum==$counttab1)){
													$ETF_buy_i = 100*((intval($tab3poid)- intval($tab1poid))/intval($sum));
													$numbers[$countbuy]=$ETF_buy_i ;
														if((intval($tab3poid) - intval($tab1poid))>=5){
															$update_buy_REq="UPDATE `table4` SET `ETF_name_buy_$countbuy`='".$etf."',`ETF_code_buy_$countbuy`='".$code."',`ETF_%_buy_$countbuy`='".round($ETF_buy_i, 0, PHP_ROUND_HALF_DOWN)."' WHERE `num_portefeuille`='".$portfeuille."'";
															$up_buy_rslt=$wpdb->query($update_buy_REq); 
															
															
														}
														
												} else{
													
													$tabetf[$tjk]=$etf;
													$tabetfcount[$tjk]=$countbuy;
													$poid1[$tjk]=$tab1poid;
													$poid3[$tjk]=$tab3poid;
													$tabetfcode[$tjk]=$code;
													$tabprt[$tjk]=$portfeuille;
													$tjk++;
												}													
												
											$countbuy++;
											
										}
										else{
										
											//echo 'rien à faire  '.$etf; 
											 
										}	
										
									
										
									}
									
							}	
				
				
					}
				
				/* ********************************************************************************************/
			    /*			Pour chaque Code ETF de la table 3, vérifier sa présence dans la table 1
			    /* *********************************************************************************************/	
					
							$reqcomp2=" SELECT  `LIBELLE`, `FUND ISIN`, `POIDS` as tab3Poids FROM `table3` WHERE `PROFIL`='".$profil_d_risque."'";
							
							$comprslt2= $wpdb->get_results($reqcomp2,OBJECT_K);
			
							foreach($comprslt2 as $t){
								$t=(array)$t;
								
								
									$etf3 =$t['LIBELLE'];
									$code3=$t['FUND ISIN'];
									$tab3poids=$t['tab3Poids'];
									$count++; 
									
									$reqqq=" SELECT `POLICY NUMBER`,`FUND NAME`, tab1.`FUND ISIN`, tab1.`POIDS`  FROM `table1` as tab1  WHERE tab1.`POLICY NUMBER`='".$portfeuille."' AND tab1.`FUND NAME`= '". $etf3."'";
									$compare2= $wpdb->get_results($reqqq);
									
											
											  	
								   $summ=0;	$pds='';
									// autre façon de le faire!	
									
											
											$re_i="SELECT `ETF_%_sold_1`, `ETF_name_sold_1`, `ETF_%_sold_2`, `ETF_name_sold_2`,`ETF_%_sold_3`, `ETF_name_sold_3`, `ETF_%_sold_4`, `ETF_name_sold_4`,`ETF_%_sold_5`, `ETF_name_sold_5`,`ETF_%_sold_6`, `ETF_name_sold_6`,`ETF_%_sold_7`, `ETF_name_sold_7`,`ETF_%_sold_8`, `ETF_name_sold_8`,`ETF_%_sold_9`, `ETF_name_sold_9`, `ETF_%_sold_10`, `ETF_name_sold_10` FROM `table4` WHERE `num_portefeuille`='".$portfeuille."'";
											
											$rsltt=$wpdb-> get_results($re_i);	
											
											foreach($rsltt as $r){
												
												   $tab[0]=$r-> ETF_name_sold_1; 
													$tab[1]=$r-> ETF_name_sold_2;  
													$tab[2]=$r-> ETF_name_sold_3; 
													$tab[3]=$r-> ETF_name_sold_4; 
													$tab[4]=$r-> ETF_name_sold_5;
													$tab[5]=$r-> ETF_name_sold_6;
													$tab[6]=$r-> ETF_name_sold_7; 
													$tab[7]=$r-> ETF_name_sold_8; 
													$tab[8]=$r-> ETF_name_sold_9;
													$tab[9]=$r-> ETF_name_sold_10;														
													
												
													for ($i=0;$i<10;$i++){
														if($tab[$i] !=''){
														
																$res_i="SELECT `POIDS` FROM `table1` WHERE `FUND NAME`='".$tab[$i]."' AND `POLICY NUMBER`='".$portfeuille."'";
																$ress_i="SELECT `POIDS` FROM `table3` WHERE `LIBELLE`='".$tab[$i]."' AND `PROFIL`='".$profil_d_risque."'";
																$valetf = 'ETF_%_sold_'.($i+1);
																
																$valetf = $r -> $valetf;
																 
																$rslts1=$wpdb-> get_var($res_i);  
																$rslts2=$wpdb-> get_var($ress_i);
																if(($rslts2=='')|| ($rslts2<$rslts1)){
																	$pds=$rslts1;
																}
																else if ($rslts2>$rslts1){
																	$pds=$rslts2;
																}
																
																$summ += ($valetf * $pds) /100;
														}	
														
													}
													
												} 
											
										
									if(Count($compare2) ==0){
										//=> remplir les 3 champs concernant les ETF à acheter avec ETF_%_buy_i  = 100 x [Table3.%_ETF  / (Σ ETF_%_sold_i) ] avec i de 1 à 10.
												
															if($summ>0 ){
																		$ETF_buy_ie = 100*((intval($tab3poids))/intval($summ));
																		$numbers[$countbuy]=$ETF_buy_ie ;
																		$update_buy_REq="UPDATE `table4` SET `ETF_name_buy_$countbuy`='".$etf3."',`ETF_code_buy_$countbuy`='".$code3."',`ETF_%_buy_$countbuy`='".round($ETF_buy_ie, 0, PHP_ROUND_HALF_DOWN)."' WHERE `num_portefeuille`='".$portfeuille."'";
																			
																			$up_buy_rslt=$wpdb->query($update_buy_REq); 
																			 
																
															} 
									  $countbuy++;  						
									}	
								if($count==10){
									$count=0;
									$countbuy=0; 
									break;
								}									
							}
								
					





								for($h=0;$h< count($tabetf);$h++){
									
									$tab1poidss=$poid1[$h];
									$tab3poidss=$poid3[$h];
									$etff=$tabetf[$h];
									$portfeuillee=$tabprt[$h];
									$codee=$tabetfcode[$h];
									$countbuyy=	$tabetfcount[$h];
										
									if($sum>0 || $summ>0){
																			$ETF_buy_i = 100*((intval($tab3poidss)- intval($tab1poidss))/intval($summ));
																			$numbers[$countbuyy]=$ETF_buy_i ;
								
																				if((intval($tab3poidss) - intval($tab1poidss))>=5){
																					$update_buy_REq="UPDATE `table4` SET `ETF_name_buy_$countbuyy`='".$etff."',`ETF_code_buy_$countbuyy`='".$codee."',`ETF_%_buy_$countbuyy`='".round($ETF_buy_i,0, PHP_ROUND_HALF_DOWN)."' WHERE `num_portefeuille`='".$portfeuillee."'";
																					$up_buy_rslt=$wpdb->query($update_buy_REq); 
																					
																					
																				}
																				
																		}
									
								
									
								}		
							$percentages = percent($numbers);
							for($chs=1;$chs<= count($percentages);$chs++){
										$update_buy_REq="UPDATE `table4` SET `ETF_%_buy_$chs`='".$percentages[$chs]."' WHERE `num_portefeuille`='".$portfeuille."'";
										$up_buy_rslt=$wpdb->query($update_buy_REq); 

							}
