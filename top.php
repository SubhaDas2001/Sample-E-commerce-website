<?php
require('link.inc.php');
require('connection.inc.php');
require('functions.inc.php');

$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   
    <title>Estore</title>
</head>

<body>
<nav class="navbar navbar-expand-lg">
        
        <a class="navbar-brand" href="#">
    <img src="img/logo1.jpg" width="90" height="30" alt="">
  </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: rgb(248, 26, 92);" ><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>

                    <?php
						foreach($cat_arr as $list){
						?>
						<li class="nav-item"><a class="nav-link active" href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a></li>
						<?php
							}
						?>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">contact</a>
                    </li>
                </ul>
              

                <div class="icons">

                <i class="fas fa-search" id="search-btn"></i>
                                        <?php if(isset($_SESSION['USER_LOGIN'])){
											echo '<a href="logout.php"><i class="fas fa-power-off" id="login-btn"></i></a>';
										}else{
											echo '<a href="login.php"><i class="fas fa-user" id="login-btn"></i></a>';
										}
										?>

            <form action="search.php" method="get" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
            </form>
										
           </div>
           
        </div>
    </nav>

</body>
</html>