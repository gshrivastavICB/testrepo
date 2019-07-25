<?php include("header.php"); 
  include("leftmenu.php"); 
  
if(isset($type_submit)){
	$oneway=$db->escapstr($oneway);
	$roundtrip=$db->escapstr($roundtrip);
	$waiting=$db->escapstr($waiting);
	$rental=$db->escapstr($rental);
	  $vendorId = $_SESSION['vyusrlog'];
	$set = "oneway='$oneway'";
	$set .= ",roundtrip='$roundtrip'";
	$set .= ",waiting_charge='$waiting'";
	$set .= ",rental='$rental'";
    $set .= ",vendor_id='$vendorId'";
    $set .= ",active_status='1'";
	
	$db->insertrec("insert into rate_card set $set ");
	echo "<script>location.href='rate-card.php?act=insert';</script>";
        header("location:rate-card.php?act=insert");
}

  ?>

        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Rate Card</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Rate Card</li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
				<div class="row">
                    <div class="col-lg-12 col-md-12">
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rate Card</h4>
								<? 
								// $getrate=$db->singlerec("select * from rate_card where active_status='1'");
								// $oneway=$getrate['oneway'];
								// $roundtrip=$getrate['roundtrip'];
								// $waiting_charge=$getrate['waiting_charge'];
								// $rental=$getrate['rental'];
								?>
                               
							   <form class="form-horizontal form-bordered" action="" method="POST">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Point to point</label>
                                            
											   <div class="col-md-3">
                                               <div class="input-group">
                                                <div class="input-group-addon">USH</div>
                                                <input type="text" name="oneway" class="form-control" value=""> 
                                                 </div>
                                              </div>
											  <label class="control-label text-left col-md-4">per Km</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Round trip</label>
                                          
											   <div class="col-md-3">
                                               <div class="input-group">
                                                <div class="input-group-addon">USH</div>
                                                <input type="text" name="roundtrip" class="form-control" value="">
                                                    </div>
                                              </div>
											  <label class="control-label text-left col-md-4">per Km(Up and Down)</label>
                                        </div>
										  <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Waiting charges</label>
											   <div class="col-md-3">
                                               <div class="input-group">
													<div class="input-group-addon">USH</div>
													<input type="text" name="waiting" class="form-control" value="">
                                                </div>
                                              </div>
											  <label class="control-label text-left col-md-3">per Minutes</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Rental Charges</label>
                                          
											   <div class="col-md-3">
                                               <div class="input-group">
                                                <div class="input-group-addon">USH</div>
                                                <input type="text" name="rental" class="form-control" value="">
                                                    </div>
                                              </div>
											  <label class="control-label text-left col-md-3">per Hour</label>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
												<div class=" col-md-3"> </div>
                                                    <div class=" col-md-9">
                                                        <button type="submit" name="type_submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                                                    </div>
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
