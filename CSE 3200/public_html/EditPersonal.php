<?php

    session_start();

    $roll = $_GET['roll'];

	$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());

					if (isset($_POST['submit1']) && $_SESSION['user']==$roll){
					    
						$name = $_POST['Name'];
						$email = $_POST['Email'];
						$bdate = $_POST['Bdate'];
						$bmonth = $_POST['Bmonth'];
						$byear = $_POST['Byear'];

						$query = "update personal set name='".$name."',email='".$email."',bdate='".$bdate."',bmonth='".$bmonth."',byear='".$byear."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						
						$filename = $_FILES['image']['name'];
            			$tmpname = $_FILES['image']['tmp_name'];
            			$filetype = strtolower($_FILES['image']['type']);
            			$filesize = $_FILES['image']['size'];
            			$temp = explode(".", $_FILES["image"]["name"]);
            			$imag = $roll.'.'.strtolower(end($temp));
            			$filepath = "userImages/".$imag;
            			
            			$filepath1 = "userImages/".$roll.".jpg";
            			$filepath2 = "userImages/".$roll.".jpeg";
            			$filepath3 = "userImages/".$roll.".png";
            			
            			///echo $filepath1.'-'.$filepath2.'-'.$filepath3;
            							
            			$OK1 = 1;
            			
            			if (empty($_FILES['image']['name'])){
            			    $OK1 = 0;
            			}
            							
            			if ($filetype!="image/jpg" && $filetype!="image/jpeg" && $filetype!="image/png")
            			    $OK1 = 0;
            							
            			$OK2 = 1;
            			if ($filesize>12097152)
            				$OK2 = 0;
            							
            			$OK3 = 1;
            			if (file_exists($filepath)){
            			    $OK3 = 0;
            			    
            			    if ($OK1==1 && $OK2==1){
            			        
            			        unlink($filepath);
            			        if (move_uploaded_file($tmpname, $filepath)){
                					$tm = date("m/d/y h:i:s a")." +GMT";
                					$query = "update personal set image='$imag' where roll='$roll'";
                					$res = mysqli_query($connection,$query);
                							        ///echo $query;
                				}
            			        
            			    }
            			}
            			
            			if (file_exists($filepath1)){
            			    $OK3 = 0;
            			    
            			    if ($OK1==1 && $OK2==1){
            			        
            			        unlink($filepath1);
            			        if (move_uploaded_file($tmpname, $filepath)){
                					$tm = date("m/d/y h:i:s a")." +GMT";
                					$query = "update personal set image='$imag' where roll='$roll'";
                					$res = mysqli_query($connection,$query);
                							        ///echo $query;
                				}
            			        
            			    }
            			}
            			
            			if (file_exists($filepath2)){
            			    $OK3 = 0;
            			    
            			    if ($OK1==1 && $OK2==1){
            			        
            			        unlink($filepath2);
            			        if (move_uploaded_file($tmpname, $filepath)){
                					$tm = date("m/d/y h:i:s a")." +GMT";
                					$query = "update personal set image='$imag' where roll='$roll'";
                					$res = mysqli_query($connection,$query);
                							        ///echo $query;
                				}
            			        
            			    }
            			}
            			
            			if (file_exists($filepath3)){
            			    $OK3 = 0;
            			    
            			    if ($OK1==1 && $OK2==1){
            			        
            			        unlink($filepath3);
            			        if (move_uploaded_file($tmpname, $filepath)){
                					$tm = date("m/d/y h:i:s a")." +GMT";
                					$query = "update personal set image='$imag' where roll='$roll'";
                					$res = mysqli_query($connection,$query);
                							        ///echo $query;
                				}
            			        
            			    }
            			}
            			    
                                        
                        ///echo $OK1.$OK2.$OK3.$imag;
            			if ($OK1==1 && $OK2==1 && $OK3==1){
            				if (move_uploaded_file($tmpname, $filepath)){
            					$tm = date("m/d/y h:i:s a")." +GMT";
            					$query = "update personal set image='$imag' where roll='$roll'";
            					///echo $query;
            					$res = mysqli_query($connection,$query);
            							        ///echo $query;
            				}
            							    ///$res++;
            			}
            
            						///header("Location:edit.php?roll=$roll");
					}
					
					header("Location:viewMember.php?roll=$roll");

?>
				
				