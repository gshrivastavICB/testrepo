<?php 
 include("header.php"); 
 include("leftmenu.php"); 
/* echo '<pre>';
 print_r($_SESSION);
 echo '</pre>';exit;*/

 
 //echo $id.'-->>>>';//=isset($_GET['id']) ? $_GET['id'] : '';
// echo "select * from employee where id='$id'";
if(!empty($id)){
 $get_result=$db->singlerec("select * from owner_wallet where id='$id' and owner_id='$owner_id' ");

 $id=isset($get_result['id']) ? $get_result['id'] : '';
 $owner_id=isset($get_result['owner_id']) ? $get_result['owner_id'] : '';
 $wallet_balance=isset($get_result['wallet_balance']) ? $get_result['wallet_balance'] : '';
 $wallet_status=isset($get_result['wallet_status']) ? $get_result['wallet_status'] : '';
}
 

if(isset($type_submit)){
	
	 $result=$db->singlerec("select owner_id from owner_wallet where owner_id='$owner_id' ");
	
	if(empty($result['owner_id'])){
	
	$owner_id=$db->escapstr($owner_id);
	$amount=$db->escapstr($amount);
	$Ip_Address = $_SERVER['REMOTE_ADDR'];	
	
	$vnd  = "owner_id='$owner_id'";
	$vnd .= ",wallet_balance='$amount'";
	$vnd .= ",added_ip='$Ip_Address'";
	$vnd .= ",wallet_status='1'";
    $insertedId = $db->insertid("insert into owner_wallet set $vnd");
	
		if($insertedId)
		{
			$userid=$_SESSION['Adminusrtype_id'];
			$comments="Amount Rs.".$amount." received from admin";
			$transectionid=$otp=rand(0000,9999).strtotime(date('d-m-y H:i:s'));
			
			$set  = "owner_id='$owner_id'";
			$set .= ",transection_id='$transectionid'";
			$set .= ",transection_type='2'";
			$set .= ",amount='$amount'";
			$set .= ",user_type='1'";
			$set .= ",status='1'";
			$set .= ",user_id='$userid'";
			$set .= ",comments='$comments'";
			$inserted=$db->insertid("insert into owner_wallet_transection set $set");
			
			
		echo "<script>location.href='add_money_wallet.php?act=insert';</script>";
		header("location:wallet_listing.php?act=insert");
	}

	}else{
		echo "<script>location.href='add_money_wallet.php?act=already';</script>";
		header("location:wallet_listing.php?act=already");
		
		}
			
	}
	
	
	
	
	
	
if(isset($type_update)){
	
	/*echo '<pre>';
	print_r($_POST);
	echo '</pre>';exit;*/	
	$owner_id=$db->escapstr($owner_id);
	$amount=$db->escapstr($amount);
	$add_on_amount=$db->escapstr($add_on_amount);
	$Ip_Address = $_SERVER['REMOTE_ADDR'];	
	$status=$db->escapstr($status);
	$updatedDate=date('Y-m-d H:i:s');
	
	//$vnd .= "owner_id='$owner_id'";
	//$vnd  = "wallet_balance='$amount'";
	//$vnd .= ",last_update_ip='$Ip_Address'";
	//$vnd .= ",wallet_status='$status'";
	//$vnd .= ",last_update_date='$updatedDate'";
	
	//today_income=today_income+'$totalPrice'
    $update = $db->insertrec("update owner_wallet set wallet_balance=wallet_balance+'$add_on_amount' where id='$id' and owner_id='$owner_id'");
		
			$userid=$_SESSION['Adminusrtype_id'];
			$comments="Amount Rs.".$add_on_amount." add-on from admin";
			$transectionid=$otp=rand(0000,9999).strtotime(date('d-m-y H:i:s'));
			
			$set  = "owner_id='$owner_id'";
			$set .= ",transection_id='$transectionid'";
			$set .= ",transection_type='2'";
			$set .= ",amount='$add_on_amount'";
			$set .= ",user_type='1'";
			$set .= ",status='1'";
			$set .= ",user_id='$userid'";
			$set .= ",comments='$comments'";
			$inserted=$db->insertid("insert into owner_wallet_transection set $set");
		
		
		
		
		echo "<script>location.href='wallet_listing.php?act=upd&id=$id&owner_id=$owner_id';</script>";
		header("location:wallet_listing.php?act=upd&id=$id&owner_id=$owner_id");
	}	


if($act=="deact"){
	$Message = "<font color='blue' size='4em' align='center'><b>Deactivated Successfully</b></font>" ;
	echo "<script>swal('De-Active','Deactivated Successfully','success');</script>";
}
else if($act=="acti"){
	$Message = "<font color='blue' size='4em' align='center'><b>Activated Successfully</b></font>" ;
	echo "<script>swal('Active','Activated Successfully','success');</script>";
}
else if($act=="del"){
	$Message = "<font color='blue' size='4em' align='center'><b>Deleted Successfully</b></font>" ;
	echo "<script>swal('Delete','Deleted Successfully','success');</script>";
}
else if($act=="upd"){
	$Message = "<font color='blue' size='4em' align='center'><b>Updated Successfully</b></font>" ;
	echo "<script>swal('Update','Updated Successfully','success');</script>";	
}
else if($act=="insert"){

	$Message = "<font color='blue' size='4em' align='center'><b>Inserted Successfully</b></font>" ;
	echo "<script>swal('Wallet','Money added Successfully','success');</script>";
	
	
	
}
else if($act=="already"){
	$Message = "<font color='blue' size='4em' align='center'><b>wallet already exist! please update</b></font>" ;
	echo "<script>swal('Already','wallet already exist! please update','success');</script>";
}





 ?>       

        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Wallet Money</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Wallet Money </li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
				<div class="row">
                    <div class="col-lg-12 col-md-12">
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Wallet Money</h4>
                               
							     <form action="" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    <div class="form-body">
                                    
                                    <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Owner: <font color="red">*</font></label>
                                            <div class="col-md-9">
                                              			 <select name="owner_id" id="owner_id" class="form-control"  required  <? if(!empty($owner_id)){echo 'disabled="disabled"';} ?>> 
															<option value="">--Select Owner--</option>
															<?php  $ownerDetails=$db->get_all("select * from owner order by fname asc"); 
															if(!empty($ownerDetails)){
																
																foreach($ownerDetails as $owner){
																	$ownerid=$owner['id'];
																	$ownerName=$owner['fname'].' '.$owner['lname'];?>
																	<option value="<?=$ownerid?>" <?php if($ownerid==$owner_id){echo 'selected="selected"';} ?> ><?=$ownerName;?></option>
																<? }} ?>

															</select>
                                                            <? if(!empty($owner_id)){ ?>
                                                            <input type="hidden" name="owner_id" value="<?=$owner_id;?>" />
                                                            <? } ?>
                                                            
                                                            
                                              </div>
                                        </div>
                                    
                                  
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3"> <? if(!empty($id)){ echo 'current ';}?>Amount: <font color="red">*</font></label>
                                            <div class="col-md-9">
                                                <input type="text" <? if(!empty($id)){ echo 'readonly="readonly" ';}?>  name="amount" class="form-control" value="<? if(!empty($wallet_balance)){echo $wallet_balance;} ?>" required>                                  </div>
                                        </div>
										
                                        <? if(!empty($id)){?>
                                        
                                         <div class="form-group row">
                                            <label class="control-label text-right col-md-3"> Add-on Amount: <font color="red">*</font></label>
                                            <div class="col-md-9">
                                                <input type="text" name="add_on_amount" class="form-control" value="" required>                                  </div>
                                        </div>
                                        
                                         <? } ?>
                                        
                                         
                                        
                                        
                                        
                                        	
                                        
                                        
                                        <? if(!empty($id)){  ?>
                                        <div class="form-group row">
											<label class="control-label text-right col-md-3">Status</label>
											<div class="col-sm-9">
												<select name="status" class="form-control input-sm">
                                                <option value="0" <? if($wallet_status=='0'){echo 'selected="selected"';}?> >In-Active</option>
                                                <option value="1" <? if($wallet_status=='1'){echo 'selected="selected"';}?>>Active</option> 
                                               
                                                </select>
											</div>
										</div>
                                        <? } ?>
                                       
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                  <? if(empty($id)){  ?>
                                                    <div class="offset-sm-3 col-md-9">
                                                   <button type="submit"  class="btn btn-success" name="type_submit"> <i class="fa fa-check"></i> Submit</button>
                                                    </div>
                                                    <? }else{ ?>
                                                    <div class="offset-sm-3 col-md-9">
                                                   <button type="submit"  class="btn btn-success" name="type_update"> <i class="fa fa-check"></i> Update</button>
                                                    </div>
                                                    <? }?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
							   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include("footer.php"); ?>
<script>

function changeCat(selectObject) {

    var catId = selectObject; 
    var brandData = $("#brandVal_id").val();

    //alert(brandData);
      $.ajax({  
         type:"POST",  
         url:"brand_ajax.php",  
         data:"catId="+catId+"brandId="+brandData,  
         success: function(data){
		$("#brand_id").html(data);
         }
      });

}



</script>			
