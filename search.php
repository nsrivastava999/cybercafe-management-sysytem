<!doctype html>
<html class="no-js" lang="en">
<head>
   
    <title>CCMS Search</title>
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <div id="right-panel" class="right-panel">
        <?php include_once('includes/header.php');?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Search Users</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li>Dashboard</li>
                            <li>Search Users</li>
                            <li class="active">Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Search Users</strong>
                            </div>

        <form name="search" method="post" style="padding-top: 20px" >
            <div class="row">
                <div class="col-12">
                    <div class="card-box">       
                        <div class="form-group row">
                                <label class="col-4 col-form-label" for="example-email" style="padding-left: 50px"><strong>Search by User's name</strong></label>
                                    <div class="col-6">
                                        <input id="searchdata" type="text" name="searchdata" required="true" class="form-control">
                                    </div>
                        </div> 
                        <div class="card-footer">
                        <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="search" id="submit">Search</button></p>
                        </div>
                    </div>                     
                </form>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>