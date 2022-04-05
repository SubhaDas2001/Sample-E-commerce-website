<?php
    require('top.php');

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $comment=$_POST['comment'];
        

        $res="insert into contact_us(name,email,mobile,comment) values('$name','$email','$mobile','$comment')";
		mysqli_query($con, $res);
        header('location:contact.php');
		die();
    }

?>

<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
            <form method="post">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="name">Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" name="name" id="name" placeholder="Enter First Name" name="fname">
				  </div>
				</div>
                <div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="mobile">Mobile:</label>
				  <div class="col-sm-10">          
					<input type="mobile" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile No" name="lname">
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit"  name="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
</form>
		</div>
	</div>
</div> -->




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div >
    <h2 class="text-center trending1" style="color: rgb(248, 26, 92);" >Contact Form</h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form method="post">
                        <div class="card rounded-0">
                            <div class="card-header p-0" >
                                <div class="text-white text-center py-2" style="background-color: rgb(248, 26, 92);">
                                    <h3 ><i class="fa fa-envelope"></i> Contact Us</h3>
                                    <p class="m-0">We would Love To Hear From You</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user" style="color: rgb(248, 26, 92);"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope" style="color: rgb(248, 26, 92);"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
                                    </div>
                                </div>

								<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone" style="color: rgb(248, 26, 92);"></i></div>
                                        </div>
                                        <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile No." required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment" style="color: rgb(248, 26, 92);"></i></div>
                                        </div>
                                        <textarea class="form-control" id="comment" name="comment" placeholder="Enter Your Comment" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-block py-2 btn1">Submit</button>
                                </div>

								<div class="form-group">        
				
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>
</div>
<?php
    require('footer.php');
    ?>


