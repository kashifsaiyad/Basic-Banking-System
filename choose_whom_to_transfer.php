<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Features - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">TASK 1</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page">
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Transfering the Credit from:</h2>
                    <div class="col-md-12 search-table-col"><span class="counter pull-right"></span>
                        <div class="table-responsive table-bordered table table-hover table-bordered results">
                            <table class="table table-bordered table-hover">
                                <thead class="bill-header cs">
                                    <tr>
                                        <th id="trs-hd" class="col-lg-2">ID</th>
                                        <th id="trs-hd" class="col-lg-2">Customer Name</th>
                                        <th id="trs-hd" class="col-lg-3">Customer Email</th>
                                        <th id="trs-hd" class="col-lg-2">Credit Remaining</th>
                                    </tr>
                                </thead>
                                <tbody id="userdetail">
                                    <tr class="warning no-result">
                                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                                    </tr>
                                    <?php
                                        	include 'database.php';
                                        	$sql = "SELECT * FROM users WHERE id='".$_GET['userid']."'";
                                        	$result = $conn->query($sql);
                                        	if ($result->num_rows > 0) {
                                        		while($row = $result->fetch_assoc()) {
                                    ?>	
                                        		<tr>
                                        			<td><?=$row['id'];?></td>
                                        			<td><?=$row['username'];?></td>
                                        			<td><?=$row['email'];?></td>
                                        			<td><?=$row['credit'];?></td>
                                        		</tr>
                                    <?php	
                                        	}
                                        	}
                                        	else {
                                        		echo "0 results";
                                        	}
                                        	mysqli_close($conn);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="block-heading"></div>
                    <h2 class="text-info">Transfer the Credit to:</h2>
                    <div class="col-md-12 search-table-col">
                        <div class="table-responsive table-bordered table table-hover table-bordered results">
                            <table class="table table-bordered table-hover">
                                <thead class="bill-header cs">
                                    <tr>
                                        <th id="trs-hd" class="col-lg-2">Account ID</th>
                                        <th id="trs-hd" class="col-lg-2">Name</th>
                                        <th id="trs-hd" class="col-lg-3">Email ID</th>
                                        <th id="trs-hd" class="col-lg-2">Credit Remaining</th>
                                        <th id="trs-hd" class="col-lg-2">Action to be performed</th>
                                    </tr>
                                </thead>
                                <tbody id="otheruserdetail">
                                    <tr class="warning no-result">
                                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                                    </tr>
                                    <?php
                                    	include 'database.php';
                                    	$sql = "SELECT * FROM users WHERE id!='".$_GET['userid']."'";
                                    	$result = $conn->query($sql);
                                    	if ($result->num_rows > 0) {
                                    		while($row = $result->fetch_assoc()) {
                                    ?>	
                                    		<tr>
                                    			<td><?=$row['id'];?></td>
                                    			<td><?=$row['username'];?></td>
                                    			<td><?=$row['email'];?></td>
                                    			<td><?=$row['credit'];?></td>
                                    			<td><a href="enter_credit.php?userid1=<?php echo $_GET["userid"]; ?>&userid2=<?php echo $row['id']; ?>">Transfer to</a></td>
                                    		</tr>
                                    <?php	
                                    	}
                                    	}
                                    	else {
                                    		echo "0 results";
                                    	}
                                    	mysqli_close($conn);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <footer class="page-footer dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h5>About us</h5>
                        <ul>
                            <li><a href="#">Github project</a></li>
                            <li><a href="#">LinkedIn</a></li>
                            <li><a href="#">Youtube Video</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>© 2021 internship basic banking system</p>
            </div>
        </footer>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>