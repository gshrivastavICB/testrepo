 
<?php include("header.php"); 
include("leftmenu.php"); 
  // die('here');
$driverid=isset($driverid) ? $driverid : "";  
$getdriver=$db->singlerec("select * from driver where id='$driverid'");
$countryid=$getdriver['country'];
$stateid=$getdriver['state'];
$cityid=$getdriver['city'];
$fcm_token=$getdriver['fcm_token'];

if(isset($type_submit)) {
	//echo '<pre>';print_r($_POST);die('here');
	$fname=$db->escapstr($fname);
	$lname=$db->escapstr($lname);
	$phone=$db->escapstr($phone);
	$status=$db->escapstr($status);
	$available=$db->escapstr($available);
	$address=$db->escapstr($address);
	$country=$db->escapstr($country);
	$state=$db->escapstr($state);
	$city=$db->escapstr($city);
	$zipcode=$db->escapstr($zipcode);
	$brand=$db->escapstr($brand);
	$model=$db->escapstr($model);
	$number=$db->escapstr($number);
	$year=$db->escapstr($year);
	$fcm_token=$db->escapstr($fcm_token);
	$email=$db->escapstr($email);
	$vendor=$db->escapstr($vendor);
	$fairs = $db->escapstr($fair);
	$cabCat = $db->escapstr($category);
	$password = $db->escapstr($password);

/*$price1 = $_POST['price1'];
$price12 = $_POST['price12'];
$distance1 = $_POST['distance1'];
$distance12 = $_POST['distance12'];
$extra_charge1 = $_POST['extra_charge1'];
$extra_charge12 = $_POST['extra_charge12'];*/
	
	$price1 = $_POST['price1'];
	$price2 = $_POST['price2'];
	$price3 = $_POST['price3'];
	$price4 = $_POST['price4'];
	$price5 = $_POST['price5'];
	$price6 = $_POST['price6'];
	$price7 = $_POST['price7'];
	$price8 = $_POST['price8'];
	$price9 = $_POST['price9'];
	$price10 = $_POST['price10'];
	$price11 = $_POST['price11'];
	$price12 = $_POST['price12'];
	$price13 = $_POST['price13'];
	$price14 = $_POST['price14'];
	$price15 = $_POST['price15'];
	$price16 = $_POST['price16'];
	$price17 = $_POST['price17'];
	$price18 = $_POST['price18'];
	$price19 = $_POST['price19'];
	$price20 = $_POST['price20'];
	$price21 = $_POST['price21'];
	$price22 = $_POST['price22'];
	$price23 = $_POST['price23'];
	$price24 = $_POST['price24'];
	$price25 = $_POST['price25'];
	$price26 = $_POST['price26'];
	$price27 = $_POST['price27'];
	$price28 = $_POST['price28'];
	$price29 = $_POST['price29'];
	$price30 = $_POST['price30'];
	$price31 = $_POST['price31'];
	$price32 = $_POST['price32'];
	$price33 = $_POST['price33'];
	$price34 = $_POST['price34'];
	$price35 = $_POST['price35'];
	$price36 = $_POST['price36'];
	$price37 = $_POST['price37'];
	$price38 = $_POST['price38'];
	$price39 = $_POST['price39'];
	$price40 = $_POST['price40'];
	$price41 = $_POST['price41'];
	$price42 = $_POST['price42'];
	$price43 = $_POST['price43'];
	$price44 = $_POST['price44'];
	$price45 = $_POST['price45'];

	$distance1 = $_POST['distance1'];
	$distance2 = $_POST['distance2'];
	$distance3 = $_POST['distance3'];
	$distance4 = $_POST['distance4'];
	$distance5 = $_POST['distance5'];
	$distance6 = $_POST['distance6'];
	$distance7 = $_POST['distance7'];
	$distance8 = $_POST['distance8'];
	$distance9 = $_POST['distance9'];
	$distance10 = $_POST['distance10'];
	$distance11 = $_POST['distance11'];
	$distance12 = $_POST['distance12'];
	$distance13 = $_POST['distance13'];
	$distance14 = $_POST['distance14'];
	$distance15 = $_POST['distance15'];
	$distance16 = $_POST['distance16'];
	$distance17 = $_POST['distance17'];
	$distance18 = $_POST['distance18'];
	$distance19 = $_POST['distance19'];
	$distance20 = $_POST['distance20'];
	$distance21 = $_POST['distance21'];
	$distance22 = $_POST['distance22'];
	$distance23 = $_POST['distance23'];
	$distance24 = $_POST['distance24'];
	$distance25 = $_POST['distance25'];
	$distance26 = $_POST['distance26'];
	$distance27 = $_POST['distance27'];
	$distance28 = $_POST['distance28'];
	$distance29 = $_POST['distance29'];
	$distance30 = $_POST['distance30'];
	$distance31 = $_POST['distance31'];
	$distance32 = $_POST['distance32'];
	$distance33 = $_POST['distance33'];
	$distance34 = $_POST['distance34'];
	$distance35 = $_POST['distance35'];
	$distance36 = $_POST['distance36'];
	$distance37 = $_POST['distance37'];
	$distance38 = $_POST['distance38'];
	$distance39 = $_POST['distance39'];
	$distance40 = $_POST['distance40'];
	$distance41 = $_POST['distance41'];
	$distance42 = $_POST['distance42'];
	$distance43 = $_POST['distance43'];
	$distance44 = $_POST['distance44'];
	$distance45 = $_POST['distance45'];

	$extra_charge1 = $_POST['extra_charge1'];
	$extra_charge2 = $_POST['extra_charge2'];
	$extra_charge3 = $_POST['extra_charge3'];
	$extra_charge4 = $_POST['extra_charge4'];
	$extra_charge5 = $_POST['extra_charge5'];
	$extra_charge6 = $_POST['extra_charge6'];
	$extra_charge7 = $_POST['extra_charge7'];
	$extra_charge8 = $_POST['extra_charge8'];
	$extra_charge9 = $_POST['extra_charge9'];
	$extra_charge10 = $_POST['extra_charge10'];
	$extra_charge11 = $_POST['extra_charge11'];
	$extra_charge12 = $_POST['extra_charge12'];
	$extra_charge13 = $_POST['extra_charge13'];
	$extra_charge14 = $_POST['extra_charge14'];
	$extra_charge15 = $_POST['extra_charge15'];
	$extra_charge16 = $_POST['extra_charge16'];
	$extra_charge17 = $_POST['extra_charge17'];
	$extra_charge18 = $_POST['extra_charge18'];
	$extra_charge19 = $_POST['extra_charge19'];
	$extra_charge20 = $_POST['extra_charge20'];
	$extra_charge21 = $_POST['extra_charge21'];
	$extra_charge22 = $_POST['extra_charge22'];
	$extra_charge23 = $_POST['extra_charge23'];
	$extra_charge24 = $_POST['extra_charge24'];
	$extra_charge25 = $_POST['extra_charge25'];
	$extra_charge26 = $_POST['extra_charge26'];
	$extra_charge27 = $_POST['extra_charge27'];
	$extra_charge28 = $_POST['extra_charge28'];
	$extra_charge29 = $_POST['extra_charge29'];
	$extra_charge30 = $_POST['extra_charge30'];
	$extra_charge31 = $_POST['extra_charge31'];
	$extra_charge32 = $_POST['extra_charge32'];
	$extra_charge33 = $_POST['extra_charge33'];
	$extra_charge34 = $_POST['extra_charge34'];
	$extra_charge35 = $_POST['extra_charge35'];
	$extra_charge36 = $_POST['extra_charge36'];
	$extra_charge37 = $_POST['extra_charge37'];
	$extra_charge38 = $_POST['extra_charge38'];
	$extra_charge39 = $_POST['extra_charge39'];
	$extra_charge40 = $_POST['extra_charge40'];
	$extra_charge41 = $_POST['extra_charge41'];
	$extra_charge42 = $_POST['extra_charge42'];
	$extra_charge43 = $_POST['extra_charge43'];
	$extra_charge44 = $_POST['extra_charge44'];
	$extra_charge45 = $_POST['extra_charge45'];

/*	$db->insertrec("insert into amb_fare ('Arua','Bundibugyo','Bushenyi','Entebbe','Fort Portal','Gulu','Hoima','Ibanda','Iganga','Jinja','Kabale','Kampala','Kanungu','Kapchorwa','Kasese','Kayunga','Kiboga','Kigumba','Kiryadongo','Kisoro','Kitgum','Kotido','Kumi','Lira','Lugazi','Luwero','Lyantonde','Masaka','Masindi','Mbale','Mbarara','Mityana','Moroto','Moyo,'Mpigi','Mubende','Mukono','Nairobi','Nebbi','Packwach','Paraa','Rukungiri','Soroti','Tororo','Wobulenzi') VALUES('price1','price2','price3','price4','price5','price6','price7','price8','price9','price10','price11','price12','price13','price14','price15','price16','price17','price18','price19','price20','price21','price23','price24','price25','price26','price27','price28','price29','price30','price31','price32','price33','price34','price35','price36','price37','price38','price39','price40','price41','price42','price43','price44','price45')");

$db->insertrec("insert into amb_max_distance ('Arua','Bundibugyo','Bushenyi','Entebbe','Fort Portal','Gulu','Hoima','Ibanda','Iganga','Jinja','Kabale','Kampala','Kanungu','Kapchorwa','Kasese','Kayunga','Kiboga','Kigumba','Kiryadongo','Kisoro','Kitgum','Kotido','Kumi','Lira','Lugazi','Luwero','Lyantonde','Masaka','Masindi','Mbale','Mbarara','Mityana','Moroto','Moyo,'Mpigi','Mubende','Mukono','Nairobi','Nebbi','Packwach','Paraa','Rukungiri','Soroti','Tororo','Wobulenzi') VALUES('distance1','distance2','distance3','distance4','distance5','distance6','distance7','distance8','distance9','distance10','distance11','distance12','distance13','distance14','distance15','distance16','distance17','distance18','distance19','distance20','distance21','distance23','distance24','distance25','distance26','distance27','distance28','distance29','distance30','distance31','distance32','distance33','distance34','distance35','distance36','distance37','distance38','distance39','distance40','distance41','distance42','distance43','distance44','distance45')");


$db->insertrec("insert into amb_extchr_/km ('Arua','Bundibugyo','Bushenyi','Entebbe','Fort Portal','Gulu','Hoima','Ibanda','Iganga','Jinja','Kabale','Kampala','Kanungu','Kapchorwa','Kasese','Kayunga','Kiboga','Kigumba','Kiryadongo','Kisoro','Kitgum','Kotido','Kumi','Lira','Lugazi','Luwero','Lyantonde','Masaka','Masindi','Mbale','Mbarara','Mityana','Moroto','Moyo,'Mpigi','Mubende','Mukono','Nairobi','Nebbi','Packwach','Paraa','Rukungiri','Soroti','Tororo','Wobulenzi') VALUES('extra_charge1','extra_charge2','extra_charge3','extra_charge4','extra_charge5','extra_charge6','extra_charge7','extra_charge8','extra_charge9','extra_charge10','extra_charge11','extra_charge12','extra_charge13','extra_charge14','extra_charge15','extra_charge16','extra_charge17','extra_charge18','extra_charge19','extra_charge20','extra_charge21','extra_charge23','extra_charge24','extra_charge25','extra_charge26','extra_charge27','extra_charge28','extra_charge29','extra_charge30','extra_charge31','extra_charge32','extra_charge33','extra_charge34','extra_charge35','extra_charge36','extra_charge37','extra_charge38','extra_charge39','extra_charge40','extra_charge41','extra_charge42','extra_charge43','extra_charge44','extra_charge45')");*/

			//$farewxy = "Arua='$price1'";
			//$farewxy .= ",Kampala='$price12'";





			//$distwxy = "Arua='$distance1'";
			//$distwxy .= ",Kampala='$distance12'";

		$distwxy = "Arua='$distance1'";
			$distwxy .= ",Bundibugyo='$distance2'";
			$distwxy .= ",Bushenyi='$distance3'";
			$distwxy .= ",Entebbe='$distance4'";
			$distwxy .= ",Fort_Portal='$distance5'";
			$distwxy .= ",Gulu='$distance6'";
			$distwxy .= ",Hoima='$distance7'";
			$distwxy .= ",Ibanda='$distance8'";
			$distwxy .= ",Iganga='$distance9'";
			$distwxy .= ",Jinja='$distance10'";
			$distwxy .= ",Kabale='$distance11'";
			$distwxy .= ",Kampala='$distance12'";
			$distwxy .= ",Kanungu='$distance13'";
			$distwxy .= ",Kapchorwa='$distance14'";
			$distwxy .= ",Kasese='$distance15'";
			$distwxy .= ",Kayunga='$distance16'";
			$distwxy .= ",Kiboga='$distance17'";
			$distwxy .= ",Kigumba='$distance18'";
			$distwxy .= ",Kiryadongo='$distance19'";
			$distwxy .= ",Kisoro='$distanc20'";
			$distwxy .= ",Kitgum='$distance21'";
			$distwxy .= ",Kotido='$distance22'";
			$distwxy .= ",Kumi='$distance23'";
			$distwxy .= ",Lira='$distance24'";
			$distwxy .= ",Lugazi='$distance25'";
			$distwxy .= ",Luwero='$distance26'";
			$distwxy .= ",Lyantonde='$distance27'";
			$distwxy .= ",Masaka='$distance28'";
			$distwxy .= ",Masindi='$distance29'";
			$distwxy .= ",Mbale='$distance30'";
			$distwxy .= ",Mbarara='$distance31'";
			$distwxy .= ",Mityana='$distance32'";
			$distwxy .= ",Moroto='$distance33'";
			$distwxy .= ",Moyo='$distance34'";
			$distwxy .= ",Mpigi='$distance35'";
			$distwxy .= ",Mubende='$distance36'";
			$distwxy .= ",Mukono='$distance37'";
			$distwxy .= ",Nairobi='$distance38'";
			$distwxy .= ",Nebbi='$distance39'";
			$distwxy .= ",Packwach='$distance40'";
			$distwxy .= ",Paraa='$distance41'";
			$distwxy .= ",Rukungiri='$distance42'";
			$distwxy .= ",Soroti='$distance43'";
			$distwxy .= ",Tororo='$distance44'";
			$distwxy .= ",Wobulenzi='$distance45'";

		//	$db->insertrec("insert into amb_max_distance set $distwxy ");

		//	$extwxy = "Arua='$extra_charge1'";
		//	$extwxy .= ",Kampala='$extra_charge12'";

			$extwxy = "Arua='$extra_charge1'";
			$extwxy .= ",Bundibugyo='$extra_charge2'";
			$extwxy .= ",Bushenyi='$extra_charge3'";
			$extwxy .= ",Entebbe='$extra_charge4'";
			$extwxy .= ",Fort_Portal='$extra_charge5'";
			$extwxy .= ",Gulu='$extra_charge6'";
			$extwxy .= ",Hoima='$extra_charge7'";
			$extwxy .= ",Ibanda='$extra_charge8'";
			$extwxy .= ",Iganga='$extra_charge9'";
			$extwxy .= ",Jinja='$extra_charge10'";
			$extwxy .= ",Kabale='$extra_charge11'";
			$extwxy .= ",Kampala='$extra_charge12'";
			$extwxy .= ",Kanungu='$extra_charge13'";
			$extwxy .= ",Kapchorwa='$extra_charge14'";
			$extwxy .= ",Kasese='$extra_charge15'";
			$extwxy .= ",Kayunga='$extra_charge16'";
			$extwxy .= ",Kiboga='$extra_charge17'";
			$extwxy .= ",Kigumba='$extra_charge18'";
			$extwxy .= ",Kiryadongo='$extra_charge19'";
			$extwxy .= ",Kisoro='$extra_charge20'";
			$extwxy .= ",Kitgum='$extra_charge21'";
			$extwxy .= ",Kotido='$extra_charge22'";
			$extwxy .= ",Kumi='$extra_charge23'";
			$extwxy .= ",Lira='$extra_charge24'";
			$extwxy .= ",Lugazi='$extra_charge25'";
			$extwxy .= ",Luwero='$extra_charge26'";
			$extwxy .= ",Lyantonde='$extra_charge27'";
			$extwxy .= ",Masaka='$extra_charge28'";
			$extwxy .= ",Masindi='$extra_charge29'";
			$extwxy .= ",Mbale='$extra_charge30'";
			$extwxy .= ",Mbarara='$extra_charge31'";
			$extwxy .= ",Mityana='$extra_charge32'";
			$extwxy .= ",Moroto='$extra_charge33'";
			$extwxy .= ",Moyo='$extra_charge34'";
			$extwxy .= ",Mpigi='$extra_charge35'";
			$extwxy .= ",Mubende='$extra_charge36'";
			$extwxy .= ",Mukono='$extra_charge37'";
			$extwxy .= ",Nairobi='$extra_charge38'";
			$extwxy .= ",Nebbi='$extra_charge39'";
			$extwxy .= ",Packwach='$extra_charge40'";
			$extwxy .= ",Paraa='$extra_charge41'";
			$extwxy .= ",Rukungiri='$extra_charge42'";
			$extwxy .= ",Soroti='$extra_charge43'";
			$extwxy .= ",Tororo='$extra_charge44'";
			$extwxy .= ",Wobulenzi='$extra_charge45'";
			
			//$db->insertrec("insert into amb_extchr_km set $extwxy ");

	//print_r($fare);die;

	if($status=='0'){
		$msg=array
		(
			'message' 	=> 'Your profile has been DeActivated by Admin',
			'type'		=> 'status',
			'vibrate'	=> 1,
			'sound'		=> 1,
			'largeIcon'	=> 'large_icon',
			'smallIcon'	=> 'small_icon'
		);
		notification($fcm_token,$msg);
	}
	else if($status=='1'){
		$msg=array
		(
			'message' 	=> 'Your profile has been Activated by Admin',
			'type'		=> 'status',
			'vibrate'	=> 1,
			'sound'		=> 1,
			'largeIcon'	=> 'large_icon',
			'smallIcon'	=> 'small_icon'
		);
		notification($fcm_token,$msg);
	}
	// foreach ($_POST['category'] as $key => $CatVal) {

	// 	echo '<pre>';print_r($CatVal);echo '</pre>';
	// }
	// die('here');
	$pwd = md5($password);
	$set = "fname='$fname'";
	$set .= ",lname='$lname'";
	$set .= ",phone='$phone'";
	$set .= ",active_status='$status'";
	$set .= ",availability_status='$available'";
	$set .= ",address='$address'";
	$set .= ",country='$country'";
	$set .= ",state='$state'";
	$set .= ",city='$city'";
	$set .= ",zipcode='$zipcode'";
	$set .= ",vehicle_brand='$brand'";
	$set .= ",model='$model'";
	$set .= ",number='$number'";
	$set .= ",year='$year'";
	$set .= ",email='$email'";
	$set .= ",vendor_id='$vendor'";
	$set .= ",pwd='$pwd'";
	$set .= ",decript_pwd='$password'";
	$set .= ",cab_type='$cabCat'";

	//echo '>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>'.$set;die('herer');
	$imgErr="";
	$insurance=isset($_FILES['insurance']['tmp_name']) ? $_FILES['insurance']['tmp_name'] : ''; 
	$licence_back=isset($_FILES['licence_back']['tmp_name'])?$_FILES['licence_back']['tmp_name']:''; 
	$licence_front=isset($_FILES['licence_front']['tmp_name'])?$_FILES['licence_front']['tmp_name']:''; 
	$registration=isset($_FILES['registration']['tmp_name'])?$_FILES['registration']['tmp_name']:''; 
	if($insurance !=""){
		$rand=uniqid();
		$upload=$com_obj->upload_image2('insurance',$rand,null,null,null,null,"../admin/restapi/driver/images/insurance","");
		if($upload){
			$imgName=$com_obj->img_Name;
			$set .= ",insurance='$imgName'";
		}
		else{
			$imgErr .= "$com_obj->Img_err";
		}
	}
	if($licence_back!=""){
		$rand=uniqid();
		$upload=$com_obj->upload_image2('licence_back',$rand,null,null,null,null,"../admin/restapi/driver/images/licence_back","");
		if($upload){
			$imgName=$com_obj->img_Name;
			$set .= ",licence_back='$imgName'";
		}
		else{
			$imgErr .= "$com_obj->Img_err";
		}
	}
	if($licence_front!=""){
		$rand=uniqid();
		$upload=$com_obj->upload_image2('licence_front',$rand,null,null,null,null,"../admin/restapi/driver/images/licence_front","");
		if($upload){
			$imgName=$com_obj->img_Name;
			$set .= ",licence_front='$imgName'";
		}
		else{
			$imgErr .= "$com_obj->Img_err";
		}
	}
	if($registration!=""){
		$rand=uniqid();
		$upload=$com_obj->upload_image2('registration',$rand,null,null,null,null,"../admin/restapi/driver/images/registration","");
		if($upload){
			$imgName=$com_obj->img_Name;
			$set .= ",vehicle_registration='$imgName'";
		}
		else{
			$imgErr .= "$com_obj->Img_err";
		}
	}

	$profile=isset($_FILES['profile']['tmp_name'])?$_FILES['profile']['tmp_name']:''; 
	$imgErr="";
	if($profile!=""){
		$rand=uniqid();
		$upload=$com_obj->upload_image2('profile',$rand,null,null,null,null,"../admin/restapi/driver/images/profile","");
		if($upload){
			$imgName=$com_obj->img_Name;
			$set .= ",profile_img='$imgName'";
		}
		else{
			$imgErr .= "$com_obj->Img_err";
		}
	}

	


		//echo '<pre>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>';print_r($set);die('herer');
	//$token =onTokenRefresh();
	//$token="mvfif";
	$date=date("Y-m-d");
	$dateNew=date("Y").rand(00,99);
	$set  .= ",chngdt = '$dateNew'";   
	$set  .= ",driver_id='PHPDID$dateNew'";
	//$set  .= ",fcm_token='$token'";
	$insertedId = $db->insertid("insert into driver set $set");
	if($insertedId){
		if(isset($_POST['category']) && !empty($_POST['category'])){

				//$catId = $catVal['id'];
			$cs = "cab_cat_id='$cabCat'";
			$cs .= ",driver_id='$insertedId'";
			$cs .= ",status='1'";
			$cabService = $db->insertrec("insert cab_services set $cs");


			    //Price

			$fair=$db->escapstr($fairs);
			$vendorId = $_SESSION['vyusrlog'];
			$rc = "ambulance_id='$insertedId'";
			$rc .= ",vendor_id='$vendorId'";
			$rc .= ",fair='$fair'";
			$rc .= ",active_status='1'";
			$db->insertrec("insert into rate_card set $rc ");
		}

	}


			$farewxy = "Arua='$price1'";
			$farewxy .= ",Bundibugyo='$price2'";
			$farewxy .= ",Bushenyi='$price3'";
			$farewxy .= ",Entebbe='$price4'";
			$farewxy .= ",Fort_Portal='$price5'";
			$farewxy .= ",Gulu='$price6'";
			$farewxy .= ",Hoima='$price7'";
			$farewxy .= ",Ibanda='$price8'";
			$farewxy .= ",Iganga='$price9'";
			$farewxy .= ",Jinja='$price10'";
			$farewxy .= ",Kabale='$price11'";
			$farewxy .= ",Kampala='$price12'";
			$farewxy .= ",Kanungu='$price13'";
			$farewxy .= ",Kapchorwa='$price14'";
			$farewxy .= ",Kasese='$price15'";
			$farewxy .= ",Kayunga='$price16'";
			$farewxy .= ",Kiboga='$price17'";
			$farewxy .= ",Kigumba='$price18'";
			$farewxy .= ",Kiryadongo='$price19'";
			$farewxy .= ",Kisoro='$price20'";
			$farewxy .= ",Kitgum='$price21'";
			$farewxy .= ",Kotido='$price22'";
			$farewxy .= ",Kumi='$price23'";
			$farewxy .= ",Lira='$price24'";
			$farewxy .= ",Lugazi='$price25'";
			$farewxy .= ",Luwero='$price26'";
			$farewxy .= ",Lyantonde='$price27'";
			$farewxy .= ",Masaka='$price28'";
			$farewxy .= ",Masindi='$price29'";
			$farewxy .= ",Mbale='$price30'";
			$farewxy .= ",Mbarara='$price31'";
			$farewxy .= ",Mityana='$price32'";
			$farewxy .= ",Moroto='$price33'";
			$farewxy .= ",Moyo='$price34'";
			$farewxy .= ",Mpigi='$price35'";
			$farewxy .= ",Mubende='$price36'";
			$farewxy .= ",Mukono='$price37'";
			$farewxy .= ",Nairobi='$price38'";
			$farewxy .= ",Nebbi='$price39'";
			$farewxy .= ",Packwach='$price40'";
			$farewxy .= ",Paraa='$price41'";
			$farewxy .= ",Rukungiri='$price42'";
			$farewxy .= ",Soroti='$price43'";
			$farewxy .= ",Tororo='$price44'";
			$farewxy .= ",Wobulenzi='$price45'";
			$farewxy  .= ",driver_id='PHPDID$dateNew'";


			$db->insertrec("insert into amb_fare set $farewxy ");

	if(isset($_POST['state']) && $_POST['state'] !='')
	{
		for($i=0;$i<COUNT($_POST['state']);$i++)
		{
			$countryId=$db->escapstr($country);
			$stateId=$db->escapstr($state_id[$i]);
			$price=$db->escapstr($price[$i]);
			$distnace=$db->escapstr($distance[$i]);
				//$countryId = country
			$nrc = "vendor_id='$vendorId'";
			$nrc .= ",ambulance_id='$insertedId'";
			$nrc .= ",country_id='$countryId'";
			$nrc .= ",state_id='$stateId'";
			$nrc .= ",fare='$price'";
			$nrc .= ",distance='$distnace'";
			$db->insertrec("insert new_rate_card set $nrc");	
		}
	}

	$act="succ";
	echo "<script>location.href='drivers.php?act=$act';</script>";
	header("location:add-ambulance-profile.php");
	exit;
}
if($act=="deact"){
	$Message = "<font color='blue' size='4em' align='center'><b>Deactivated Successfully</b></font>" ;
}
else if($act=="acti"){
	$Message = "<font color='blue' size='4em' align='center'><b>Activated Successfully</b></font>" ;
}
else if($act=="del"){
	$Message = "<font color='blue' size='4em' align='center'><b>Deleted Successfully</b></font>" ;
}
else if($act=="upd"){
	$Message = "<font color='blue' size='4em' align='center'><b>Updated Successfully</b></font>" ;
}
else if($act=="insert"){
	$Message = "<font color='blue' size='4em' align='center'><b>Inserted Successfully</b></font>" ;
}




?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Add Ambulance Profile</h3>
		</div>
		<div class="col-md-7 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active">Add Ambulance Profile</li>
			</ol>
		</div>

	</div>
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-8 col-xlg-9 col-md-9">
				<div class="card">
					<ul class="nav nav-tabs profile-tab" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">Profile</a> </li>
						<?php echo $msg=isset($msg) ? $msg : ''; ?>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="profile" role="tabpanel" aria-expanded="false">
							<div class="card-body">
								<form name="myform" method="post" action="add-ambulance-profile.php" enctype="multipart/form-data">

									<h4 class="font-medium m-t-30">Important Details</h4>
									<hr>	

									<div>
										<table class="table table-hover table-striped table-condensed">

											<!-- <tbody> -->
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Services: <font color="red">*</font></label>
													<div class="col-sm-9">
														<select name="category" id="cat_id" class="form-control"  required> 
															<option value="">--Select Services--</option>
															<?php  $cabCat=$db->get_all("select * from cab_category order by id asc"); 
															if(!empty($cabCat)){
																$i=1;
																foreach($cabCat as $cabCatVal){
																	$catid=$cabCatVal['id'];
																	$catName=$cabCatVal['name'];?>
																	<option value="<?=$catid?>"><?=$catName;?></option>
																<? }} ?>

															</select>
														</div>
													</div>
													<!--  </tbody> -->
												</table>
											</div>

											<div class="form-body">
												<div class="form-group row">
                                         <!--    <label class="control-label text-right col-md-3">Fair:<font color="red">*</font></label>
                                            
											   <div class="col-md-3">
                                               <div class="input-group">
                                                <div class="input-group-addon">USH</div>
                                                <input type="text" name="fair" class="form-control" value="" required="required"> 
                                                 </div>
                                              </div>
                                              <label class="control-label text-left col-md-4">per Hours</label> -->
                                              <h4 class="font-medium m-t-30">Vehicle Details</h4>
                                              <hr>

                                              <div class="table-responsive">
                                              	<table class="table table-hover table-striped table-condensed">

                                              		<tbody>
                                            <!-- <tr>
                                                <td>Vehicle Brand</td>
                                                <td><input type="text" name="brand" id="brand" class="form-control" value=""> <div id="brandErr"></div></td>
                                            </tr> -->
											<!-- <tr>
                                                <td>Vehicle Category</td>
                                                <td><input type="text" name="model" id="model" class="form-control" value="">
												<div id="modelErr"></div></td>
											</tr> -->
											<tr>
												<td>Number</td>
												<td><input type="text" name="number" id="number" class="form-control" value="">
													<div id="numberErr"></div></td>
												</tr>
												<tr>
													<td>Year</td>
													<td><input type="text" name="year" class="form-control" value=""></td>
												</tr>
											</tbody>
										</table>
									</div>
									<h4 class="font-medium m-t-30">Documents</h4>
									<div class="popup-gallery row m-t-30">
										<div class="col-md-4">
											<h4 class="font-medium m-t-30">Insurance</h4>
											<input type="file" id="insurance" name="insurance" onchange="return img_validate('insurance','615','409','615','409','showdiv1','insurance')">
											<img id="showdiv1" style="max-width:100px;">
											<img src="<?=$siteurl;?>/admin/restapi/driver/images/insurance/<?=$getdriver['insurance'];?>" id="img_div" width="100" height="80">
											<div id="imgErr"></div>
										</div>
										<div class="col-md-4">
											<h4 class="font-medium m-t-30">Licence Front</h4>
											<input type="file" id="licence_front" name="licence_front" onchange="return img_validate('licence_front','615','409','615','409','showdiv2','licence_front')">
											<img id="showdiv2" style="max-width:100px;">
											<img src="<?=$siteurl;?>/admin/restapi/driver/images/licence_front/<?=$getdriver['licence_front'];?>" id="img_div" width="100" height="80" <?if($getdriver['licence_front']==''){?>style='display:none;vertical-align: bottom;'<?}?>>
											<div id="imgErr"></div>
										</div>
										<div class="col-md-4">
											<h4 class="font-medium m-t-30">Licence Back</h4>
											<input type="file" id="licence_back" name="licence_back" onchange="return img_validate('licence_back','615','409','615','409','showdiv3','licence_back')">
											<img id="showdiv3" style="max-width:100px;">
											<img src="<?=$siteurl;?>/admin/restapi/driver/images/licence_back/<?=$getdriver['licence_back'];?>" id="img_div" width="100" height="80" <?if($getdriver['licence_back']==''){?>style='display:none;vertical-align: bottom;'<?}?>>
											<div id="imgErr"></div>
										</div>
										<div class="col-md-4">
											<h4 class="font-medium m-t-30">vehicle Registration</h4>
											<input type="file" id="registration" name="registration" onchange="return img_validate('registration','615','409','615','409','showdiv4','registration')">
											<img id="showdiv4" style="max-width:100px;">
											<img src="<?=$siteurl;?>/admin/restapi/driver/images/registration/<?=$getdriver['vehicle_registration'];?>" id="img_div" width="100" height="80" <?if($getdriver['vehicle_registration']==''){?>style='display:none;vertical-align: bottom;'<?}?>>
											<div id="imgErr"></div>
										</div>
									</div>
								</div>


								<h4 class="font-medium m-t-30">Add Profile 
									<hr>
									<div>
										<table class="table table-hover table-striped table-condensed" id="extable">

											<tbody>

												<center class="m-t-30"> 
													<img src="<?=$siteurl;?>/admin/restapi/driver/images/profile/<?=$getdriver['profile_img'];?>" class="img-square" style="width:150px;height:150px" id="showdiv1" >
													<div class="row text-center justify-content-md-center m-t-30">
														<input type="file" id="profile" name="profile" onchange="return img_validate('profile','615','409','615','409','showdiv1','profile')" onchange="this.form1.submit();">
														<div id="imgErr"></div>
													</div>

												</center>

												<tr>
													<td>First Name</td>
													<td><input type="text" name="fname" id="fname" class="form-control" value="">
														<div id="fnameErr"></div>
													</td>
												</tr>
												<tr>
													<td>Last name</td>
													<td><input type="text" name="lname" id="lname" class="form-control" value="">
														<div id="lnameErr"></div>
													</td>
												</tr>
												<tr>
													<td>Email</td>
													<td><input type="email" name="email" class="form-control" value="">
													</td>
												</tr>
												<tr>
													<td>Password</td>
													<td><input type="password" class="form-control" value="" name="password"></td>
												</tr>
												<tr>
													<td>Mobile</td>
													<td><input type="text" name="phone" id="mobile" class="form-control" value="">
														<div id="mobileErr"></div></td>
													</tr>

													<tr>
														<td>Profile Status</td>
														<td>
															<div class="demo-radio-button">
																<input name="status" type="radio" class="with-gap" id="radio_5" value="1" <? if($getdriver['active_status']=='1') echo "checked";?>>
																<label for="radio_5">Active</label>
																<input name="status" type="radio" id="radio_6" class="with-gap" value="0" <? if($getdriver['active_status']=='0') echo "checked";?>>
																<label for="radio_6">Deactivate</label>
															</div>
														</td>
													</tr>
													<tr>
														<td>Available Status</td>
														<td>
															<div class="demo-radio-button">
																<input name="available" type="radio" class="with-gap" id="radio_7" value="1" <? if($getdriver['availability_status']=='1') echo "checked";?>>
																<label for="radio_7">Online</label>
																<input name="available" type="radio" id="radio_8" class="with-gap" value="0" <? if($getdriver['availability_status']=='0') echo "checked";?>>
																<label for="radio_8">Offline</label>
															</div>
														</td>
													</tr>
										<!-- 	<tr>
                                                <td>Addess</td>
                                                <td><input type="text" name="address" id="addressid" class="form-control" value=""> <div id="addressErr"></div></td>
                                            </tr> -->
                                            <tr>
                                            	<td>Country</td>
                                            	<td>
                                            		<select name="country" id="countryid" class="form-control" onchange="return get_state(this.value);" required>
                                            			<?php
                                            			echo $drop->get_dropdown($db,"SELECT country_id,country_name from country where country_status='0' AND country_id='206' order by country_name asc",$countryid);
                                            			?>
                                            		</select>
                                            		<div id="countryErr"></div>
                                            	</td>
                                            </tr>


                                            <!-- <div id="price_dist"></div> -->
                                            <table>
                                            	<tbody id="" border="2">
                                            		<tr>
                                            			<td>
                                            				<lable>Arua</lable>
                                            			</td>
                                            			<input name="state_id[]" value="27" type="hidden">
                                            			<td>
                                            				<input name="price1" class="cntcity" placeholder="fare" type="number">
                                            				<span style="padding:5px;">USH</span>
                                            			</td>	
                                            		 <!--	<span style="padding:5px;">USH</span>
                                            			
                                            			<td> <input class="cntcity" name="distance1" placeholder="distance" type="text">
                                            				<span style="padding:5px;">Km</span>
                                            			</td>
                                            			<td>
                                            				<input class="cntcity" name="extra_charge1" placeholder="Charge" type="text">
                                            				<span style="padding:1px;">Ext Chrg/Km</span>
                                            			</td> -->
                                            		</tr>
                                            	 <tr>
                                            			<td>
                                            				<lable>Bundibugyo</lable>
                                            			</td>
                                            			<input name="state_id2" value="217" type="hidden">
                                            			<td>
                                            				<input name="price2" class="cntcity" placeholder="fare" type="number">
                                            				<span style="padding:5px;">USH</span>
                                            				</td>
                                            	<!-- 			<span style="padding:5px;">USH</span>
                                            			
                                            			<td>
                                            				<input class="cntcity" name="distance2" placeholder="distance" type="text">
                                            				<span style="padding:5px;">Km</span>
                                            			</td>
                                            			<td> 
                                            				<input class="cntcity" name="extra_charge2" placeholder="Charge" type="text">
                                            				<span style="padding:1px;">Ext Chrg/Km</span>
                                            			</td> -->
                                            		</tr>
                                            		<tr>
                                            			<td>
                                            				<lable>Bushenyi</lable>
                                            			</td>
                                            			<input name="state_id[]" value="258" type="hidden">
                                            			<td>
                                            				<input name="price3" class="cntcity" placeholder="fare" type="number">
                                            				<span style="padding:5px;">USH</span>
                                            				</td>
                                            	<!-- 			<span style="padding:5px;">USH</span>
                                            			
                                            			<td>
                                            				<input class="cntcity" name="distance3" placeholder="distance" type="text">
                                            				<span style="padding:5px;">Km</span>
                                            			</td>
                                            			<td> 
                                            				<input class="cntcity" name="extra_charge3" placeholder="Charge" type="text">
                                            				<span style="padding:1px;">Ext Chrg/Km</span>
                                            			</td> -->
                                            		</tr>
                                            		<tr>
                                            			<td>
                                            				<lable>Entebbe</lable>
                                            			</td>
                                            			<input name="state_id[]" value="575" type="hidden">
                                            			<td>
                                            				<input name="price4" class="cntcity" placeholder="fare" type="number">
                                            				<span style="padding:5px;">USH</span>
                                            				</td>
                                            		<!-- 		<span style="padding:5px;">USH</span>
                                            			
                                            			<td> 
                                            				<input class="cntcity" name="distance4" placeholder="distance" type="text">
                                            				<span style="padding:5px;">Km</span>
                                            			</td>
                                            			<td> 
                                            				<input class="cntcity" name="extra_charge4" placeholder="Charge" type="text">
                                            				<span style="padding:1px;">Ext Chrg/Km</span>
                                            			</td> -->
                                            		</tr>
                                            		<tr>
                                            			<td>
                                            				<lable>Fort Portal</lable>
                                            			</td>
                                            			<input name="state_id[]" value="583" type="hidden">
                                            			<td>
                                            				<input name="price5" class="cntcity" placeholder="fare" type="number">
                                            				<span style="padding:5px;">USH</span>
                                            				</td>
                                            	<!-- 			<span style="padding:5px;">USH</span> 
                                            			
                                            			<td> 
                                            				<input class="cntcity" name="distance5" placeholder="distance" type="text">
                                            				<span style="padding:5px;">Km</span>
                                            			</td>
                                            			<td> 
                                            				<input class="cntcity" name="extra_charge5" placeholder="Charge" type="text">
                                            				<span style="padding:1px;">Ext Chrg/Km</span>
                                            			</td> -->
                                            		</tr>
                                            		<tr>
                                            			<td>
                                            				<lable>Gulu</lable>
                                            			</td>
                                            			<input name="state_id[]" value="594" type="hidden">
                                            			<td>
                                            				<input name="price6" class="cntcity" placeholder="fare" type="number">
                                            				<span style="padding:5px;">USH</span>
                                            				</td>
                                            	<!-- 			<span style="padding:5px;">USH</span>
                                            			
                                            			<td> 
                                            				<input class="cntcity" name="distance6" placeholder="distance" type="text">
                                            				<span style="padding:5px;">Km</span>
                                            			</td>
                                            			<td> 
                                            				<input class="cntcity" name="extra_charge6" placeholder="Charge" type="text">
                                            				<span style="padding:1px;">Ext Chrg/Km</span>
                                            			</td> -->
                                            		</tr>
                                            		<tr>
                                            			<td>
                                            				<lable>Hoima</lable>
                                            			</td>
                                            			<input name="state_id[]" value="595" type="hidden">
                                            			<td>
                                            				<input name="price7" class="cntcity" placeholder="fare" type="number">
                                            				<span style="padding:5px;">USH</span>
                                            				</td>
                                            	<!-- 			<span style="padding:5px;">USH</span>
                                            			
                                            			<td> 
                                            				<input class="cntcity" name="distance7" placeholder="distance" type="text">
                                            				<span style="padding:5px;">Km</span>
                                            			</td>
                                            			<td>
                                            				<input class="cntcity" name="extra_charge7" placeholder="Charge" type="text">
                                            				<span style="padding:1px;">Ext Chrg/Km</span>
                                            			</td> -->
                                            		</tr>
                                            		<tr>
                                            			<td>
                                            				<lable>Ibanda</lable>
                                            			</td>
                                            			<input name="state_id[]" value="1288" type="hidden">
                                            			<td>
                                            				<input name="price8" class="cntcity" placeholder="fare" type="number">
                                            				<span style="padding:5px;">USH</span>
                                            				</td>
                                            	<!-- 			<span style="padding:5px;">USH</span>
                                            			
                                            			<td> 
                                            				<input class="cntcity" name="distance8" placeholder="distance" type="text">
                                            				<span style="padding:5px;">Km</span>
                                            			</td>
                                            			<td> 
                                            				<input class="cntcity" name="extra_charge8" placeholder="Charge" type="text">
                                            				<span style="padding:1px;">Ext Chrg/Km</span>
                                            			</td> -->
                                            		</tr>
                                            		<tr>
                                            			<td>
                                            				<lable>Iganga</lable>
                                            			</td>
                                            			<input name="state_id[]" value="4152" type="hidden">
                                            			<td>
                                            				<input name="price9" class="cntcity" placeholder="fare" type="number">
                                            				<span style="padding:5px;">USH</span>
                                            				</td>
                                            	<!-- 			<span style="padding:5px;">USH</span>
                                            			
                                            			<td>
                                            				<input class="cntcity" name="distance9" placeholder="distance" type="text">
                                            				<span style="padding:5px;">Km</span>
                                            			</td>
                                            			<td> 
                                            				<input class="cntcity" name="extra_charge9" placeholder="Charge" type="text">
                                            				<span style="padding:1px;">Ext Chrg/Km</span>
                                            			</td> -->
                                            		</tr>
                                            		<tr>
                                            			<td>
                                            				<lable>Jinja</lable>
                                            			</td>
                                            			<input name="state_id[]" value="1386" type="hidden">
                                            			<td>
                                            				<input name="price10" class="cntcity" placeholder="fare" type="number">
                                            				<span style="padding:5px;">USH</span>
                                            				</td>
                                            			<!-- 	<span style="padding:5px;">USH</span>
                                            				 
                                            				 <td>
                                            				  <input class="cntcity" name="distance10" placeholder="distance" type="text">
                                            				  <span style="padding:5px;">Km</span>
                                            				</td>
                                            				<td>
                                            				 <input class="cntcity" name="extra_charge10" placeholder="Charge" type="text">
                                            				 <span style="padding:1px;">Ext Chrg/Km</span>
                                            				</td> -->
                                            			</tr>
                                            			<tr>
                                            				<td>
                                            					<lable>Kabale</lable>
                                            				</td>
                                            				<input name="state_id[]" value="1820" type="hidden">
                                            				<td>
                                            					<input name="price11" class="cntcity" placeholder="fare" type="number">
                                            					<span style="padding:5px;">USH</span>
                                            					</td>
                                            			<!-- 		<span style="padding:5px;">USH</span> 
                                            				
                                            				<td> 
                                            					<input class="cntcity" name="distance11" placeholder="distance" type="text"><span style="padding:5px;">Km</span>
                                            				</td>
                                            				<td> 
                                            					<input class="cntcity" name="extra_charge11" placeholder="Charge" type="text">
                                            					<span style="padding:1px;">Ext Chrg/Km</span>
                                            				</td> -->
                                            			</tr>
                                            			<tr>
                                            				<td>
                                            					<lable>Kampala &amp; Suburbs</lable>
</td>
<input name="state_id[]" value="1426" type="hidden">
<td>
<input name="price12" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span> 

<td>
 <input class="cntcity" name="distance12" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge12" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
 <tr>
<td>
<lable>Kamuli</lable>
</td>
<input name="state_id[]" value="1522" type="hidden">
<td>
<input name="price13" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>

<!-- <span style="padding:5px;">USH</span>
 <td>
 <input class="cntcity" name="distance13" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge13" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Kapchorwa</lable>
</td>
<input name="state_id[]" value="1542" type="hidden">
<td>
<input name="price14" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span> 

<td>
 <input class="cntcity" name="distance14" placeholder="distance" type="text">
 <span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge14" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Kasese</lable>
</td>
<input name="state_id[]" value="1543" type="hidden">
<td>
<input name="price15" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>
<!-- <span style="padding:5px;">USH</span>

<td> 
<input class="cntcity" name="distance15" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
<input class="cntcity" name="extra_charge15" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Kayunga</lable>
</td>
<input name="state_id[]" value="1555" type="hidden">
<td>
<input name="price16" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span> 

<td> 
<input class="cntcity" name="distance16" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge16" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Kiboga</lable>
</td>
<input name="state_id[]" value="1571" type="hidden">
<td>
<input name="price17" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span>

<td>
<input class="cntcity" name="distance17" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge17" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Kigumba</lable>
</td>
<input name="state_id[]" value="1578" type="hidden">
<td>
<input name="price18" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span> 

<td>
<input class="cntcity" name="distance18" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge18" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Kiryadongo</lable>
</td>
<input name="state_id[]" value="1579" type="hidden">
<td>
<input name="price19" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span> 

<td> 
<input class="cntcity" name="distance19" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge19" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Kisoro</lable></td><input name="state_id[]" value="1592" type="hidden">
<td>
<input name="price20" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>
<!-- <span style="padding:5px;">USH</span>

<td> 
<input class="cntcity" name="distance20" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
<input class="cntcity" name="extra_charge20" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
	<lable>Kitgum</lable>
</td>
<input name="state_id[]" value="1596" type="hidden">
<td>
<input name="price21" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span>
 
<td> 
<input class="cntcity" name="distance21" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge21" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Kotido</lable></td><input name="state_id[]" value="1621" type="hidden">
<td>
<input name="price22" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>

</td>
<!-- <span style="padding:5px;">USH</span> 

<td>
 <input class="cntcity" name="distance22" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge22" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Kumi</lable>
</td>
<input name="state_id[]" value="1627" type="hidden">
<td>
<input name="price23" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span> 

<td>
<input class="cntcity" name="distance23" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
	<input class="cntcity" name="extra_charge23" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Lira</lable>
</td>
<input name="state_id[]" value="1638" type="hidden">
<td>
<input name="price24" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span>
 
<td>
 <input class="cntcity" name="distance24" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge24" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Lugazi</lable></td><input name="state_id[]" value="1690" type="hidden">
<td>
<input name="price25" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>
<!-- <span style="padding:5px;">USH</span>

<td>
 <input class="cntcity" name="distance25" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge25" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Luwero</lable></td><input name="state_id[]" value="2016" type="hidden">
<td>
<input name="price26" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>

</td>
<!-- <span style="padding:5px;">USH</span>
 
<td>

<input class="cntcity" name="distance26" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge26" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Lyantonde</lable>
</td><input name="state_id[]" value="1719" type="hidden"><td>
<input name="price27" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span> 

<td> 
<input class="cntcity" name="distance27" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge27" placeholder="Charge" type="text"><span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Masaka</lable>
</td>
<input name="state_id[]" value="2125" type="hidden">
<td>
<input name="price28" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span>
 
<td>

 <input class="cntcity" name="distance28" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge28" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Masindi</lable>
</td>
<input name="state_id[]" value="2134" type="hidden">
<td>
<input name="price29" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>
<!-- <span style="padding:5px;">USH</span>

<td>
 <input class="cntcity" name="distance29" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>

 <input class="cntcity" name="extra_charge29" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Mbale</lable></td><input name="state_id[]" value="2159" type="hidden">
<td>
<input name="price30" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span> 

<td>
<input class="cntcity" name="distance30" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge30" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Mbarara</lable></td><input name="state_id[]" value="4178" type="hidden">
<td>
<input name="price31" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span> 

<td>
 <input class="cntcity" name="distance31" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge31" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Mityana</lable>
</td>

<input name="state_id[]" value="4179" type="hidden">
<td>
<input name="price32" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
</td>
<!-- <span style="padding:5px;">USH</span>
 
<td>
 <input class="cntcity" name="distance32" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge32" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Moroto</lable>
</td>
<input name="state_id[]" value="2268" type="hidden">
<td>
<input name="price33" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>


<!-- <td> 
<input class="cntcity" name="distance33" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge33" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Moyo</lable></td><input name="state_id[]" value="2281" type="hidden">
<td>
<input name="price34" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>
<!--<td> 
 <input class="cntcity" name="distance34" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge34" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Mpigi</lable>
</td>
<input name="state_id[]" value="4182" type="hidden">
<td>
	<input name="price35" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>
<!-- <td>
 <input class="cntcity" name="distance35" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge35" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Mubende</lable></td><input name="state_id[]" value="4183" type="hidden">
<td>
<input name="price36" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span> 
</td>
<!-- <td> <input class="cntcity" name="distance36" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge36" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Mukono</lable></td><input name="state_id[]" value="4184" type="hidden">
<td>
<input name="price37" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>
<!-- <td> 
<input class="cntcity" name="distance37" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
<input class="cntcity" name="extra_charge37" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Nairobi</lable></td><input name="state_id[]" value="4185" type="hidden">
<td>
<input name="price38" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>
<!-- <td> 
<input class="cntcity" name="distance38" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge38" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Nebbi</lable></td><input name="state_id[]" value="4186" type="hidden">
<td>
<input name="price39" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>
<!-- <td>
 <input class="cntcity" name="distance39" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge39" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>


<lable>Packwach</lable></td><input name="state_id[]" value="4187" type="hidden">
<td>
<input name="price40" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>
<!-- <td> 
<input class="cntcity" name="distance40" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge40" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Paraa</lable>
</td>
<input name="state_id[]" value="4188" type="hidden">
<td>
<input name="price41" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span> 
</td>
<!-- <td> 
<input class="cntcity" name="distance41" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge41" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Rukungiri</lable>
</td>
<input name="state_id[]" value="4189" type="hidden">
<td>
<input name="price42" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>
<!-- <td> 
<input class="cntcity" name="distance42" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>
 <input class="cntcity" name="extra_charge42" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Soroti</lable>
</td>
<input name="state_id[]" value="4190" type="hidden">
<td>
<input name="price43" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span> 
</td>
<!-- <td>
 <input class="cntcity" name="distance43" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td>

 <input class="cntcity" name="extra_charge43" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Tororo</lable>
</td>
<input name="state_id[]" value="4191" type="hidden">
<td>
<input name="price44" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span> 
</td>
<!-- <td> 
<input class="cntcity" name="distance44" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> 
<input class="cntcity" name="extra_charge44" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr>
<tr>
<td>
<lable>Wobulenzi</lable>
</td>
<input name="state_id[]" value="4192" type="hidden">
<td>
<input name="price45" class="cntcity" placeholder="fare" type="number">
<span style="padding:5px;">USH</span>
 </td>
<!-- <td> 
<input class="cntcity" name="distance45" placeholder="distance" type="text">
<span style="padding:5px;">Km</span>
</td>
<td> <input class="cntcity" name="extra_charge45" placeholder="Charge" type="text">
<span style="padding:1px;">Ext Chrg/Km</span>
</td> -->
</tr> 
</tbody>







                                            			</table>



                                            		</tbody>
                                            	</table>
                                            </div>

                                            <input type="hidden" name="fcm_token" value="<?=$fcm_token;?>"/>
                                            <div class="table-responsive" style=" margin-left: 341px;">
                                            	<table class="table table-hover table-striped table-condensed">
                                            		<tbody>
                                            			<tr>
                                            				<td>
                                            					<button type="submit" name="type_submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>

                                            					<!-- <a href="driver-profile.php?driverid=<?=$getdriver['id'];?>"><input class="btn btn-success" value="View Profile"></a> -->

                                            					<a href="drivers.php"><input class="btn btn-success" value="Back"></a>
                                            				</td>

                                            			</tr>
                                            		</tbody>
                                            	</table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>	   

                        <!-- ============================================================== -->
                        <!-- End PAge Content -->
                        <!-- ============================================================== -->

                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    <!-- ============================================================== -->
                    <!-- End Container fluid  -->
                    <!-- ============================================================== -->
                    <script>
                    	function get_state(val){
                    		$.ajax({
                    			url: "state_ajax.php?val="+val, 
                    			success: function(result){
                    				$("#statetrId").show();

                    				var stateInfo = result.split("&&");
				//alert(stateInfo);
		//	$("#stateid").append(stateInfo[0]);JSON.parse(json)
		var objData = JSON.parse(stateInfo[1]);
		//alert(objData.dataVal[1].state_name);
		var i;
		var htmlData = '';
		for (i = 0; i < stateInfo[0]; i++) { 

			htmlData += '<tr><td><lable>'+objData.dataVal[i].state_name+'</lable></td><input type="hidden"  name="state_id[]" value="'+objData.dataVal[i].state_id+'"><td><input type="text" name="price[]" class="cntcity" placeholder="fair"><span style="padding:5px;">USH</span> </td><td> <input type="text" class="cntcity" name="distance[]" placeholder="distance"><span style="padding:5px;">Km</span></td><td> <input type="text" class="cntcity" name="extra_charge[]" placeholder="Charge"><span style="padding:1px;">Ext Chrg/Km</span></td></tr>';
		}
//alert(htmlData);
$('#price_dist').html(htmlData);

}	

});
                    	}
                    	function get_city(val){
                    		$.ajax({url: "city_ajax.php?val="+val, success: function(result){
                    			$("#cityid").html(result);
                    		}});
                    	}
                    	function validate_profile(){
                    		var fname=$('#fname').val();
                    		var lname=$('#lname').val();
                    		var mobile=$('#mobileid').val();
                    		var country=$('#countryid').val();
                    		var state=$('#stateid').val();
                    		var city=$('#cityid').val();
                    		var zip=$('#zipid').val();
                    		var address=$('#addressid').val();
                    		var brand=$('#brandid').val();
                    		var model=$('#modelid').val();
                    		var number=$('#numberid').val();
                    		var year=$('#yearid').val();

                    		var Err=0;
                    		if(fname==""){
                    			$('#fnameErr').html('<span style="color:red;">Enter first name</span>');
                    			$('#fname').focus();
                    			Err++;
                    		}
                    		if(lname==""){
                    			$('#lnameErr').html('<span style="color:red;">Enter last name</span>');
                    			$('#lname').focus();
                    			Err++;
                    		}
                    		if(mobile==""){
                    			$('#mobileErr').html('<span style="color:red;">Enter Mobile</span>');
                    			$('#mobileid').focus();
                    			Err++;
                    		}
                    		if(country==""){
                    			$('#countryErr').html('<span style="color:red;">Enter country</span>');
                    			$('#countryid').focus();
                    			Err++;
                    		}
                    		if(state==""){
                    			$('#stateErr').html('<span style="color:red;">Enter state</span>');
                    			$('#stateid').focus();
                    			Err++;
                    		}
                    		if(city==""){
                    			$('#cityErr').html('<span style="color:red;">Enter city</span>');
                    			$('#cityid').focus();
                    			Err++;
                    		}
                    		if(zip==""){
                    			$('#zipErr').html('<span style="color:red;">Enter zip</span>');
                    			$('#zipid').focus();
                    			Err++;
                    		}
                    		if(address==""){
                    			$('#addressErr').html('<span style="color:red;">Enter address</span>');
                    			$('#addressid').focus();
                    			Err++;
                    		}
                    		if(brand==""){
                    			$('#brandErr').html('<span style="color:red;">Enter Brand</span>');
                    			$('#brandid').focus();
                    			Err++;
                    		}
                    		if(model==""){
                    			$('#modelErr').html('<span style="color:red;">Enter model</span>');
                    			$('#modelid').focus();
                    			Err++;
                    		}
                    		if(number==""){
                    			$('#numberErr').html('<span style="color:red;">Enter number</span>');
                    			$('#numberid').focus();
                    			Err++;
                    		}
                    		if(year==""){
                    			$('#yearErr').html('<span style="color:red;">Enter year</span>');
                    			$('#yearid').focus();
                    			Err++;
                    		}
                    		if(Err === 0){
                    			return true;
                    		}else{
                    			return false;
                    		}

                    	}

                    	function img_validate(name,width,height,r1,r2,showDiv){

                    		if(showDiv=='' || showDiv==null){
                    			showDiv = "img_div";
                    		}
                    		var fuData = document.getElementById(name);
                    		var FileUploadPath = fuData.value;
                    		var action = 'update';
                    		if(window.FileReader) {   
                    			if (FileUploadPath == '') {
                    				if (action == 'update') {
                    					return true;
                    				} else {
                    					swal("Please upload an image");
                    					return false;
                    				}
                    			} else {

                    				$("#"+showDiv).hide();
                    				var size = fuData.files[0].size;
		/* 	if (size > 1048576) {
				sweetAlert("File size exceeded!","Maximum allowed size is 1 mb","error");
				return false;
			} else { */

				var Extension = FileUploadPath.substring(FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
				if (Extension == "gif" || Extension == "png" || Extension == "bmp" || Extension == "jpeg" || Extension == "jpg") {
					if (fuData.files && fuData.files[0]) {
						var reader = new FileReader();
						$image = $("#"+showDiv+"");
						reader.onload = function(e) {
							var w, h;
							
							var image = new Image();
							image.src = e.target.result;
							image.onload = function() {
								w = this.width;
								h = this.height;
								//localStorage.setItem("width", w);
								//localStorage.setItem("height", h);
								/* if (w < width || h < height) {
								
									alert("Too short!","Your image size (" + w + 'x' + h + "). size should grater than ("+width+"x"+height+").","error");
									
									$image.hide();
									
								} else if ((w*r2) != (h*r1)) {
								
									alert("Invalid aspect ratio!","image ratio should be "+r1+":"+r2+" and image size should be grater than "+width+"x"+height+".","error");
									$image.hide();
								} else { */

									$image.attr("src", e.target.result).show();
									/* } */
								}
							}
							reader.readAsDataURL(fuData.files[0]);

							var w = localStorage.getItem("width");
							var h = localStorage.getItem("height");

							if (w < width || h < height) {
								return false;
							} else if ((w*r2) != (h*r1)) {
								return false;
							} else {
								localStorage.setItem("width", 0);
								localStorage.setItem("height", 0);
								return true;
							}
						}
					} else {

						$("#"+showDiv+"").css('display','block');
						sweetAlert("Invalid file format!","Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ","error");
						return false;
					}
			//}
		}
	} else {

	//$("#imgname").css("display","block");	
	//$("#imgname").text(FileUploadPath);	
	sweetAlert("Incompatible browser","Your browser does not support Advance javascript functions so kindly update your browser to latest version..","warning");
	return true;
}
}

</script>
<?php include("footer.php"); ?>	 

