<!DOCTYPE html>
<html>
<head>
	<title>PT ASTRA DAIHATSU </title>
		<link rel="shortcut icon" href="assets/img/IMG-20191018-WA0009.jpg">
		<style type="text/css">
				{
				    padding: 0; margin: 0;
				}
				h2{
					color:#50626C;
					text-align: center;
					font-family: arial;
					text-transform: uppercase;
					border: 20px solid #f1f1f1;
					padding: 5px;
					width: 490px;
					margin: auto;
					margin-bottom: 10px;
				    margin-top: 10px;
				}
				form {
				    border: 20px solid #f1f1f1;
				    font-family: arial;
				    width: 500px;
				    margin: auto;
				}

				input[type=text], input[type=password] {
				    width: 100%;
				    padding: 12px 20px;
				    margin: 8px 0;
				    display: inline-block;
				    border: 1px solid #ccc;
				    box-sizing: border-box;
				}
				label{
					color:#50626C;
					text-transform: uppercase;
				}
				button {
				    background-color: #049372;
				    color: white;
				    padding: 14px 20px;
				    margin: 8px 0;
				    border: none;
				    cursor: pointer;
				    width: 100%;
				}

				button:hover {
				    opacity: 0.8;
				}
				.cancelbtn {
				    width: auto;
				    padding: 10px 18px;
				    background-color: #f03434;
				}

				.imgcontainer {
				    text-align: center;
				    margin: 24px 0 20px 0;
				}

				img.astra {
				    width: 300px;
				     height: 200px;
				     border: 7px solid #f1f1f1;
				     padding: 10px;
				}

				.container {
				    padding: 20px;
				}

				span.psw {
				    float: right;
				    padding-top: 16px;

				}
				span{
					color:#50626C;
				}
		</style>
</head>
<body>

<h2>PT. ASTRA DAIHATSU </h2>
	
<form action="act_login.php" method="post">
 <div class="imgcontainer">
    	<img src="assets/img/IMG-20191018-WA0009.jpg" alt="Astra" class="astra">
 </div>
	  <div class="container">
	    <div>
			<input type="text" class="form-control" name="username" placeholder="Username" required="" />
		</div>
		<div>
			<input type="password" class="form-control" name="password" placeholder="Password" required="" />
		</div>
	  </div>
 <div>
		<button class="btn btn-default" type="reset">Reset </button>
		<button class="btn btn-success" type="submit" name="login">Login</button>
  </div>
</form>

</body>
</html>
