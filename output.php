<?php
         /*   header("Content-type: application/octet-stream");
			header('Content-Type: text/csv');
			header("Content-Disposition: attachment; filename=table4_".date('d')."_".date('m')."_".date('Y')."_".date('H')."_".date('i')."_".date('s').".csv");
			header("Pragma: no-cache");
			header("Expires: 0"); */
if(!defined('DOING_AJAX'))
define('DOING_AJAX', true);

include_once('../../../../wp-config.php');
include_once('../../../../wp-load.php');
include_once('../../../../wp-includes/wp-db.php');
include ('../../../../wp-load.php');

	     
 global $wpdb;
 global $current_user;
 $filtr= $_POST['filtre']; 
 //$filtr='3333-111111'; 
  
//$delete = $wpdb->query(" DROP TABLE `table4`"); 







/* ************************************************************************************************************************************/
/*															Création des table  4 s'il n'existe pas!
/* ************************************************************************************************************************************/
	
			global $jal_db_version;
	       $jal_db_version = '1.0';
           jal_install();
		
			function jal_install() {
				global $wpdb;
				global $jal_db_version; 

				$table_name1 =  'table4';
				
                        
       					   
				$charset_collate = $wpdb->get_charset_collate();
				
	 
				$sql = "CREATE TABLE IF NOT EXISTS $table_name1 (
					    `num_portefeuille` varchar(100),`nom_client` varchar(100),`Prenom_client` varchar(100), ";
											
                for($i=1;$i<=10;$i++){
					$suite1.='`ETF_name_sold_'.$i.'` varchar(100), `ETF_code_sold_'.$i.'` varchar(100), `ETF_%_sold_'.$i.'` varchar(20), ';
					$suite4.='`ETF_name_buy_'.$i.'` varchar(100), `ETF_code_buy_'.$i.'`  varchar(100), `ETF_%_buy_'.$i.'` varchar(20), ';
				}                
				$sql .=$suite1.$suite4." `jour` varchar(10), `mois` varchar(15), `annee` varchar(20), PRIMARY KEY (`num_portefeuille`)) $charset_collate" ;
                           
				require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
				
				dbDelta( $sql );
               
				add_option( 'jal_db_version', $jal_db_version );
			}		

			
/* ************************************************************************************************************************************/
/*															Création du compte rendu
/* ************************************************************************************************************************************/
		
		$date=date('Y-m-d');
				
		//$sites = realpath(dirname(__FILE__)).'/';
		 $sites='./';
		 $newfile = $sites."Compte_rendu.txt";
		 if (file_exists($newfile)) { 
			     
				  $fh = fopen($newfile, 'wb');
				  
				  $newfile="\xEF\xBB\xBF".$newfile;
				  fwrite($fh, '****************************************************************** '.PHP_EOL);
				  fwrite($fh, ' Compte rendu de portfeuilles : le '.date('d-m-Y H:i:s').PHP_EOL);
				  fwrite($fh, '******************************************************************'.PHP_EOL);
				  fwrite($fh, '																			'.PHP_EOL);
				} else {
				  
				  $fh = fopen($newfile, 'wb'); 
				  $newfile="\xEF\xBB\xBF".$newfile;
				  fwrite($fh, '********************************************************************** '.PHP_EOL);
				  fwrite($fh, ' Compte rendu de portfeuilles : le '.date('d-m-Y H:i:s').PHP_EOL);
				  fwrite($fh, '**********************************************************************'.PHP_EOL);
				  fwrite($fh, '																			'.PHP_EOL);
				}
			

/* ************************************************************************************************************************************/
/*															Comparaison de portfeuilles
/* ************************************************************************************************************************************/			
	            $tranch=explode('-',$date);
				$day=$tranch[2];
				$mounth=$tranch[1];
				$year=$tranch[0];
	
	//vider la table4 
	
	$delete = $wpdb->query(" TRUNCATE TABLE `table4`");

	if(isset($filtr) && !empty($filtr))
	{		
					
	
		$portfeuille=$filtr;
		
		$results=$wpdb->get_results("SELECT * FROM `table2` WHERE  `NUM_PORTEFEUILLES` = '".$portfeuille."'");
	
		$count=1; $countbuy=1; $tjk=0; $counttab1=0; $checksum=0;
		foreach  ($results as $row) {

				
				$profil_d_risque= $row->PROFIL;
				$nom= $row->Nom_client;
				$prenom= $row->Prenom_client; 
				
			
			/* ********************************************************************************************/
			/*			Pour chaque Code ETF de la table 1, vérifier sa présence dans la table 3
			/* *********************************************************************************************/
				$reqq=" SELECT `POLICY NUMBER`,`FUND NAME`, tab1.`FUND ISIN`, tab1.`POIDS`  FROM `table1` as tab1  WHERE tab1.`POLICY NUMBER`='".$portfeuille."' ";
				$compare=$wpdb->get_results($reqq); 
	
				$counttab1=Count($compare);
				
				if(Count($compare) ==0){
				
					
					$insertREq="INSERT INTO `table4`(`num_portefeuille`, `nom_client`, `Prenom_client`, `ETF_name_sold_1`, `ETF_code_sold_1`,  `ETF_%_sold_1`,  `ETF_name_sold_2`, `ETF_code_sold_2`, `ETF_%_sold_2`,  `ETF_name_sold_3`, `ETF_code_sold_3`, `ETF_%_sold_3`,  `ETF_name_sold_4`,  `ETF_code_sold_4`, `ETF_%_sold_4`,  `ETF_name_sold_5`,`ETF_code_sold_5`, `ETF_%_sold_5`,   `ETF_name_sold_6`,  `ETF_code_sold_6`,  `ETF_%_sold_6`,  `ETF_name_sold_7`, `ETF_code_sold_7`, `ETF_%_sold_7`,  `ETF_name_sold_8`, `ETF_code_sold_8`,  `ETF_%_sold_8`, `ETF_name_sold_9`, `ETF_code_sold_9`,  `ETF_%_sold_9`,  `ETF_name_sold_10`, `ETF_code_sold_10`, `ETF_%_sold_10`, `ETF_name_buy_1`, `ETF_code_buy_1`,  `ETF_%_buy_1`,  `ETF_name_buy_2`,  `ETF_code_buy_2`,  `ETF_%_buy_2`,  `ETF_name_buy_3`,  `ETF_code_buy_3`,  `ETF_%_buy_3`, `ETF_name_buy_4`,  `ETF_code_buy_4`,  `ETF_%_buy_4`,  `ETF_name_buy_5`,  `ETF_code_buy_5`, `ETF_%_buy_5`,   `ETF_name_buy_6`,  `ETF_code_buy_6`, `ETF_%_buy_6`,  `ETF_name_buy_7`,  `ETF_code_buy_7`,  `ETF_%_buy_7`,  `ETF_name_buy_8`,  `ETF_code_buy_8`,  `ETF_%_buy_8`,  `ETF_name_buy_9`,  `ETF_code_buy_9`,  `ETF_%_buy_9`, `ETF_name_buy_10`, `ETF_code_buy_10`, `ETF_%_buy_10`, `jour`, `mois`, `annee`) VALUES ('".$portfeuille."','".$nom."','".$prenom."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','$day','$mounth','$year')";  

					 $tmp_result = $wpdb->query($insertREq); 
					
				
						fwrite($fh, '  - Anomalie : client '.$nom.' introuvable dans fichier client. '.PHP_EOL);
						fwrite($fh, ' 																			 '.PHP_EOL); 
						fwrite($fh, '  - Anomalie : Profil '.$profil_d_risque.' du client '.$nom.' introuvable dans le fichier Portefeuilles Modèles. '.PHP_EOL);
						fwrite($fh, ' 																			 '.PHP_EOL); 
				}
				else{
					
			
					
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
								$codee=$tabetfcode[$h];
								$countbuyy=	$tabetfcount[$h];
									
								if($sum>0 || $summ>0){
																		$ETF_buy_i = 100*((intval($tab3poidss)- intval($tab1poidss))/intval($summ));
																		$numbers[$countbuyy]=$ETF_buy_i ;
							
																			if((intval($tab3poidss) - intval($tab1poidss))>=5){
																				$update_buy_REq="UPDATE `table4` SET `ETF_name_buy_$countbuyy`='".$etff."',`ETF_code_buy_$countbuyy`='".$codee."',`ETF_%_buy_$countbuyy`='".round($ETF_buy_i,0, PHP_ROUND_HALF_DOWN)."' WHERE `num_portefeuille`='".$portfeuille."'";
																				$up_buy_rslt=$wpdb->query($update_buy_REq); 
																				
																				
																			}
																			
																	}
								
								
								
								
							}
							
							
							$percentages = percent($numbers);
								for($chs=1;$chs<= count($percentages);$chs++){
											$update_buy_REq="UPDATE `table4` SET `ETF_%_buy_$chs`='".$percentages[$chs]."' WHERE `num_portefeuille`='".$portfeuille."'";
											$up_buy_rslt=$wpdb->query($update_buy_REq); 

								}
									
				
				
				
				
		        }		
					


	    }
				
			
		
	
		
		
		
	    fclose($fh);	
			
	}
	
	
	
	
	
	//****************************************************************************************************************
	
	
	
	
	
	
	
	
	else{
		
		$results=$wpdb->get_results("SELECT * FROM `table2` ");
		
		
		
		foreach  ($results as $row) {
				
				$count=1;$countbuy=1; $tjk=0; $counttab1=0; $checksum=0;$numbers=[];
				$portfeuille= $row->NUM_PORTEFEUILLES;
				$profil_d_risque= $row->PROFIL;
				$nom= $row->Nom_client;
				$prenom= $row->Prenom_client;
				
			
		
				
			
			/* ********************************************************************************************/
			/*			Pour chaque Code ETF de la table 1, vérifier sa présence dans la table 3
			/* *********************************************************************************************/
				$reqq=" SELECT `POLICY NUMBER`,`FUND NAME`, tab1.`FUND ISIN`, tab1.`POIDS`  FROM `table1` as tab1  WHERE tab1.`POLICY NUMBER`='".$portfeuille."' ";
				$compare=$wpdb->get_results($reqq); 
	
	
				if(Count($compare) ==0){
				
					
					$insertREq="INSERT INTO `table4`(`num_portefeuille`, `nom_client`, `Prenom_client`, `ETF_name_sold_1`, `ETF_code_sold_1`,  `ETF_%_sold_1`,  `ETF_name_sold_2`, `ETF_code_sold_2`, `ETF_%_sold_2`,  `ETF_name_sold_3`, `ETF_code_sold_3`, `ETF_%_sold_3`,  `ETF_name_sold_4`,  `ETF_code_sold_4`, `ETF_%_sold_4`,  `ETF_name_sold_5`,`ETF_code_sold_5`, `ETF_%_sold_5`,   `ETF_name_sold_6`,  `ETF_code_sold_6`,  `ETF_%_sold_6`,  `ETF_name_sold_7`, `ETF_code_sold_7`, `ETF_%_sold_7`,  `ETF_name_sold_8`, `ETF_code_sold_8`,  `ETF_%_sold_8`, `ETF_name_sold_9`, `ETF_code_sold_9`,  `ETF_%_sold_9`,  `ETF_name_sold_10`, `ETF_code_sold_10`, `ETF_%_sold_10`, `ETF_name_buy_1`, `ETF_code_buy_1`,  `ETF_%_buy_1`,  `ETF_name_buy_2`,  `ETF_code_buy_2`,  `ETF_%_buy_2`,  `ETF_name_buy_3`,  `ETF_code_buy_3`,  `ETF_%_buy_3`, `ETF_name_buy_4`,  `ETF_code_buy_4`,  `ETF_%_buy_4`,  `ETF_name_buy_5`,  `ETF_code_buy_5`, `ETF_%_buy_5`,   `ETF_name_buy_6`,  `ETF_code_buy_6`, `ETF_%_buy_6`,  `ETF_name_buy_7`,  `ETF_code_buy_7`,  `ETF_%_buy_7`,  `ETF_name_buy_8`,  `ETF_code_buy_8`,  `ETF_%_buy_8`,  `ETF_name_buy_9`,  `ETF_code_buy_9`,  `ETF_%_buy_9`, `ETF_name_buy_10`, `ETF_code_buy_10`, `ETF_%_buy_10`, `jour`, `mois`, `annee`) VALUES ('".$portfeuille."','".$nom."','".$prenom."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','$day','$mounth','$year')";  

					 $tmp_result = $wpdb->query($insertREq); 
					
				
						fwrite($fh, '  - Anomalie : client '.$nom.' introuvable dans fichier client. '.PHP_EOL);
						fwrite($fh, ' 																			 '.PHP_EOL); 
						fwrite($fh, '  - Anomalie : Profil '.$profil_d_risque.' du client '.$nom.' introuvable dans le fichier Portefeuilles Modèles. '.PHP_EOL);
						fwrite($fh, ' 																			 '.PHP_EOL); 
				}
				else{
					
			
					
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


					
				
				}
				
				






		
				
				
		}
		
		
	    fclose($fh);
	
	}	 

	
	/* ************************************************************************************************************************************/
	/*															vérification du somme des achats 
	/* ************************************************************************************************************************************/

	
					
					function percent(array $numbers)
						{
							$result = array();
							$total = array_sum($numbers);

							foreach($numbers as $key => $number){
								$result[$key] = round(($number/$total) * 100, 2);
							}

							$sum = array_sum($result);//This is 100.02 with my example array.

							if(100 !== $sum){
								$maxKeys = array_keys($result, max($result));
								$result[$maxKeys[0]] = 100 - ($sum - max($result));
							}
							return $result;
						}

	

	/* ************************************************************************************************************************************/
	/*															Télechargement du fichier csv resultant 
	/* ************************************************************************************************************************************/

  	$data = fopen('php://output', 'w');
	            $path= explode('themes',getcwd());
                $path= $path[0].'uploads/formidable/57/table4.csv';
 
              //  file_put_contents($path, $data);
	   // $data1=fopen($path, 'w');
	

				  $MyQuery = $wpdb->get_results("SELECT * FROM  `table4`");
				  $first = true;
				foreach ($MyQuery as $Result) {
					
					  // Add table headers
					  if($first){
						 $titles = array();
						 foreach($Result as $key=>$val){
							$titles[] = $key;
						 }
						 fputcsv($data, $titles);
						// fputcsv($data1, $titles); 
						 $first = false;
					  }
						$leadArray = (array) $Result; // Cast the Object to an array
						// Add row to file
						fputcsv( $data, $leadArray );
						//fputcsv( $data1, $leadArray );
				}
			
				
                	fclose($data);
				//	fclose($data1);
		

	exit;
    
	/* ************************************************************************************************************************************/
	/*															Ajout du nouvelles entrées dans formidable
	/* ************************************************************************************************************************************/
 $MyQueryR = $wpdb->get_results("SELECT `num_portefeuille`, `nom_client`, `Prenom_client`, `ETF_name_sold_1`, `ETF_code_sold_1`,  `ETF_%_sold_1` as sold_1,  `ETF_name_sold_2`, `ETF_code_sold_2`, `ETF_%_sold_2` as sold_2,  `ETF_name_sold_3`, `ETF_code_sold_3`, `ETF_%_sold_3` as sold_3,  `ETF_name_sold_4`,  `ETF_code_sold_4`, `ETF_%_sold_4` as sold_4,  `ETF_name_sold_5`,`ETF_code_sold_5`, `ETF_%_sold_5` as sold_5,   `ETF_name_sold_6`,  `ETF_code_sold_6`,  `ETF_%_sold_6` as sold_6,  `ETF_name_sold_7`, `ETF_code_sold_7`, `ETF_%_sold_7` as sold_7,  `ETF_name_sold_8`, `ETF_code_sold_8`,  `ETF_%_sold_8` as sold_8, `ETF_name_sold_9`, `ETF_code_sold_9`,  `ETF_%_sold_9` as sold_9,  `ETF_name_sold_10`, `ETF_code_sold_10`, `ETF_%_sold_10` as sold_10, `ETF_name_buy_1`, `ETF_code_buy_1`,  `ETF_%_buy_1` as buy_1,  `ETF_name_buy_2`,  `ETF_code_buy_2`,  `ETF_%_buy_2` as buy_2,  `ETF_name_buy_3`,  `ETF_code_buy_3`,  `ETF_%_buy_3` as buy_3, `ETF_name_buy_4`,  `ETF_code_buy_4`,  `ETF_%_buy_4` as buy_4,  `ETF_name_buy_5`,  `ETF_code_buy_5`, `ETF_%_buy_5` as buy_5,   `ETF_name_buy_6`,  `ETF_code_buy_6`, `ETF_%_buy_6` as buy_6,  `ETF_name_buy_7`,  `ETF_code_buy_7`,  `ETF_%_buy_7` as buy_7,  `ETF_name_buy_8`,  `ETF_code_buy_8`,  `ETF_%_buy_8` as buy_8,  `ETF_name_buy_9`,  `ETF_code_buy_9`,  `ETF_%_buy_9` as buy_9, `ETF_name_buy_10`, `ETF_code_buy_10`, `ETF_%_buy_10` as buy_10, `jour`, `mois`, `annee` FROM  `table4`");
		foreach ($MyQueryR as $Result) {
		        
				if($Result->ETF_name_sold_1 !=""){
					$post = array('form_id' => 57,
					'frm_action' => 'create',
					'form_key' => 'entry',
					'item_meta' => array(
					'1482' =>' '.$Result->num_portefeuille.'',
					'1483' => ''.$Result->nom_client.'',
					'1485' =>''.$Result->Prenom_client.'',
					'1486' => ''.$Result->ETF_name_sold_1.'',
					'1487' => ''.$Result->ETF_code_sold_1.'',
					'1488' => ''.$Result->sold_1.'',
					'1498' => ''.$Result->ETF_name_sold_2.'',
					'1489' =>''. $Result->ETF_code_sold_2.'',
					'1507' => ''.$Result->sold_2.'',
					'1499' => ''.$Result->ETF_name_sold_3.'',
					'1490' => ''.$Result->ETF_code_sold_3.'',
					'1508' => ''.$Result->sold_3.'',
					'1500' => ''.$Result->ETF_name_sold_4.'',
					'1491' => ''.$Result->ETF_code_sold_4.'',
					'1509' => ''.$Result->sold_4.'',
					'1501' => ''.$Result->ETF_name_sold_5.'',
					'1492' => ''.$Result->ETF_code_sold_5.'',
					'1510' => ''.$Result->sold_5.'',
					'1502' => ''.$Result->ETF_name_sold_6.'',
					'1493' => ''.$Result->ETF_code_sold_6.'',
					'1511' => ''.$Result->sold_6.'',
					'1503' => ''.$Result->ETF_name_sold_7.'',
					'1494' => ''.$Result->ETF_code_sold_7.'',
					'1512' => ''.$Result->sold_7.'',
					'1504' => ''.$Result->ETF_name_sold_8.'',
					'1495' => ''.$Result->ETF_code_sold_8.'',
					'1513' => ''.$Result->sold_8.'',
					'1505' =>''. $Result->ETF_name_sold_9.'',
					'1496' => ''.$Result->ETF_code_sold_9.'',
					'1514' => ''.$Result->sold_9.'',
					'1506' => ''.$Result->ETF_name_sold_10.'',
					'1497' =>''. $Result->ETF_code_sold_10.'',
					'1515' => ''.$Result->sold_10.'',
					'1517' =>''. $Result->ETF_name_buy_1.'',
					'1516' => ''.$Result->ETF_code_buy_1.'',
					'1518' => ''.$Result->buy_1.'',
					'1520' =>''. $Result->ETF_name_buy_2.'',
					'1519' => ''.$Result->ETF_code_buy_2.'',
					'1521' => ''.$Result->buy_2.'',
					'1523' => ''.$Result->ETF_name_buy_3.'',
					'1522' => ''.$Result->ETF_code_buy_3.'',
					'1524' => ''.$Result->buy_3.'',
					'1526' =>''. $Result->ETF_name_buy_4.'',
					'1525' => ''.$Result->ETF_code_buy_4.'',
					'1527' => ''.$Result->buy_4.'',
					'1529' => ''.$Result->ETF_name_buy_5.'',
					'1528' => ''.$Result->ETF_code_buy_5.'',
					'1530' => ''.$Result->buy_5.'',
					'1532' => ''.$Result->ETF_name_buy_6.'',
					'1531' => ''.$Result->ETF_code_buy_6.'',
					'1533' => ''.$Result->buy_6.'',
					'1535' => ''.$Result->ETF_name_buy_7.'',
					'1534' => ''.$Result->ETF_code_buy_7.'',
					'1536' => ''.$Result->buy_7.'',
					'1538' => ''.$Result->ETF_name_buy_8.'',
					'1537' => ''.$Result->ETF_code_buy_8.'',
					'1539' => ''.$Result->buy_8.'',
					'1541' => ''.$Result->ETF_name_buy_9.'',
					'1540' => ''.$Result->ETF_code_buy_9.'',
					'1542' => ''.$Result->buy_9.'',
					'1544' => ''.$Result->ETF_name_buy_10.'',
					'1543' => ''.$Result->ETF_code_buy_10.'',
					'1545' => ''.$Result->buy_10.'',
					'1546' => ''.$Result->jour.'',
					'1547' => ''.$Result->mois.'',
					'1548' => ''.$Result->annee.''
					)
					);
					
				
					$errors = FrmEntryValidate::validate( $post );
              
				    FrmEntry::create($post); 
                }			
		}
		

		
		

?>    