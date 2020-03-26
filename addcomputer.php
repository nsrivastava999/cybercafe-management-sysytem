<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>CCMS Add Computers</title>
  

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
                        <h1>Computer Details</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li>Dashboard</li>
                            <li>Computer Details</li>
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
                            <div class="card-header"><strong>Computer</strong><small> Details</small></div>
                            <form name="computer" method="post" action="">
                                <p style="font-size:16px; color:red" align="center"></p>
                            <div class="card-body card-block">
 
                                <div class="form-group"><label for="company" class=" form-control-label">Computer Name</label><input type="text" name="compname" value="" class="form-control" id="compname" required="true"></div>
                                                                          
                                        <div class="form-group"><label for="street" class=" form-control-label">Computer Locations</label><input type="text" name="comploc" value="" id="comploc" class="form-control" required="true"></div>
                                            <div class="row form-group">
                                                <div class="col-12">
                                                    <div class="form-group"><label for="city" class=" form-control-label">ID Address</label><input type="text" name="idadd" id="idadd" value="" class="form-control" required="true"></div>
                                                </div>
                                                    
                                            </div>
                                                    
                            </div>
                                                    
                                <div class="card-footer">
                                    <p style="text-align: center;">
                                        <button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">Add</button>
                                    </p>
                                            
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
