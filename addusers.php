<!doctype html>
<html class="no-js" lang="en">

<head>
    
    <title>CCMS User Details</title>
    

    <link rel="apple-touch-icon" href="apple-icon.png">
  


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <div id="right-panel" class="right-panel">
    	<?php include('includes/header.php');?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User Detail</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li>Dashboard</li>
                            <li>User Detail</li>
                            <li class="active">Add</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">

                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>User</strong><small> Details</small></div>
                            <form name="computer" method="post" action="">
                                <p style="font-size:16px; color:red" align="center"></p>
                            <div class="card-body card-block">
 
                                <div class="form-group"><label for="company" class=" form-control-label">User Name</label><input type="text" name="username" value="" class="form-control" id="username" required="true"></div>
                                                                          
                                        <div class="form-group"><label for="street" class=" form-control-label">User Address</label><textarea type="text" name="uadd" value="" id="uadd" class="form-control" required="true"></textarea></div>
                                            <div class="row form-group">
                                                <div class="col-12">
                                                    <div class="form-group"><label for="city" class=" form-control-label">Mobile Number</label><input type="text" name="mobilenumber" id="mobilenumber" value="" class="form-control" required="true" maxlength="10" pattern="[0-9]+"></div>
                                                    </div>
                                                    <div class="col-12">
                                                    <div class="form-group"><label for="city" class=" form-control-label">Email</label><input type="email" name="email" id="email" value="" class="form-control" required="true"></div>
                                                    </div>
                                                    <div class="col-12">
                                                    <div class="form-group"><label for="city" class=" form-control-label">Computer Name</label><select type="text" name="cname" id="cname" value="" class="form-control" required="true">
                                                    <option value="">Choose Computer</option> 
                                                    </select></div>
                                                    </div>
                                                    <div class="col-12">
                                                    <div class="form-group"><label for="city" class=" form-control-label">ID Proof</label><input type="text" name="idproof" id="idproof" value="" class="form-control" required="true"></div>
                                                    </div>
                                                
                                                    </div>
                                                    
                                                    </div>
                                                    
                                                     <div class="card-footer">
                                                       <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                                            <i class="fa fa-dot-circle-o"></i>  Add
                                                        </button></p>
                                                        
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</body>
</html>
