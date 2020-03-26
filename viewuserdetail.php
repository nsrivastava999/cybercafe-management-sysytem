
<!doctype html>
<html class="no-js" lang="en">

<head>
    
    <title>CCMS New Users</title>
    
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
                        <h1>View Users</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="view-user-detail.php">View Users</a></li>
                            <li class="active">Users</li>
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
                            <div class="card-header"><strong>View</strong><small> Users</small></div>
                           
                                <p style="font-size:16px; color:red" align="center"></p>
                            <div class="card-body card-block">
                  <table border="1" class="table table-bordered mg-b-0">
   
   <tr>
                                <th>Entry ID</th>
                                   <td></td>
                                   </tr>                             
<tr>
                                <th>Full Name</th>
                                   <td></td>
                                   </tr>
                                <tr>
                                <th>User Address</th>
                                   <td></td>
                                   </tr>
                                   <tr>
                                    <th>Mobile Number</th>
                                      <td></td>
                                  </tr>
                                      <tr>  
                                       <th>Email</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                               <th>Computer Name</th>
                                <td><</td>
                            </tr>
                       <tr>
                       <th>ID Proof</th>
                         <td></td>
                         </tr>                          
                     <tr>
       <th>In Time</th>
       <td></td>
</tr>
    <tr>
    <th>Status</th>
    <td></td>
  </tr>
  </table>
  </div>
  </div>
  </table>
<table class="table mb-0">

<?php if($row['Status']==""){ ?>


<form name="submit" method="post" enctype="multipart/form-data"> 

<tr>
    <th>Remark :</th>
    <td>
    <textarea name="remark" placeholder="" rows="12" cols="14" class="form-control wd-450" required="true"></textarea></td>
  </tr>

<tr>
<th>Fees </th>
<td>
  <input type="text" name="fees" id="fees" class="form-control wd-450" >
</td></tr>

  <tr>
    <th>Status :</th>
    <td>
   <select name="status" class="form-control wd-450" required="true" >
     <option value="Out">Check Out</option>
   </select></td>
  </tr>

  <tr align="center">
    <td colspan="2"><button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Update</button></td>
  </tr>
  </form>
<?php } else { ?>
    <table border="1" class="table table-bordered mg-b-0">
  <tr>
    <th>Remark</th>
    <td><?php echo $row['Remark']; ?></td>
  </tr>
<tr>
   <tr>
    <th>Out Time</th>
    <td><?php echo $row['OutTime']; ?></td>
  </tr>

  
 <tr>
    <th>Fees</th>
    <td><?php echo $row['Fees']; ?></td>
  </tr>

<tr>
<th>Updation Date</th>
<td><?php echo $row['UpdationDate']; ?>  </td></tr>
<?php } ?>
</table>


  

  

<?php } ?>

                                            </div>



                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
</body>
</html>
<?php }  ?>
