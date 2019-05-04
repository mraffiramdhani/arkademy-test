<?php 
	
	include 'controller/connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SI Quick Count | Arkademy Online Test</title>
	<link rel="stylesheet" href="assets/css/app.css">
</head>
<body>

	<div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="#">
                    QCount
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <main class="py-4">
        <div class="container">
		    <div class="row justify-content-center">
		        <div class="col-md-8">
		            <div class="card">
		                <div class="card-header">Daftar Pasangan Calon Presiden</div>

		                <div class="card-body">
		                    <div class="table-responsive">
		                    	<table class="table table-bordered">
		                    		<thead>
		                    			<tr class=" text-center">
		                    				<th>Nama Calon</th>
		                    				<th>Opsi</th>
		                    			</tr>
		                    		</thead>
		                    		<tbody>
		                    			<?php 
		                    				$data = mysqli_query(Open(), "SELECT * FROM candidates");
		                    				while($row = mysqli_fetch_array($data)){
		                    			?>
		                    			<tr>
		                    				<th><?php echo $row['name'] ?></th>
		                    				<th rowspan="2" class="text-center"><a href="controller/insert.php?id=<?=$row['id']?>" class="btn btn-lg btn-primary">VOTE</a></th>
		                    			</tr>
		                    			<tr>
		                    				<th>Perolehan Suara : <?php echo $row['earned_vote'] ?></th>
		                    			</tr>
		                    			<?php } ?>
		                    		</tbody>
		                    	</table>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </main>

<script type="text/javascript" src="assets/js/app.js"></script>
</body>
</html>