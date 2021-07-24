<div class=" card login-form justify-content-center">
	<div class="card-body">
		<h3 class="card-title text-center">Change password</h3>
		
		<!--Password must contain one lowercase letter, one number, and be at least 7 characters long.-->
		
		<div class="card-text text-success">
			<form>
                <div class="form-group">
					<label for="exampleInputEmail1">Your new password</label>
					<input type="password" class="form-control form-control-sm">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Your new password</label>
					<input type="password" class="form-control form-control-sm">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Repeat password</label>
					<input type="password" class="form-control form-control-sm">
				</div>
				<button type="submit" class="btn btn-success btn-block submit-btn">Confirm</button>
			</form>
		</div>
	</div>
</div>
<style>
    html,body { height: 100%; }

body{
	display: -ms-flexbox;
	display: -webkit-box;
	display: flex;
	-ms-flex-align: center;
	-ms-flex-pack: center;
	-webkit-box-align: center;
	align-items: center;
	-webkit-box-pack: center;
	justify-content: center;
	background-color: #f5f5f5;
}

form{
	padding-top: 20px;
	font-size: 13px;
	margin-top: 30px;
}

.card-title{ font-weight:300; }

.btn{
	font-size: 13px;
}

.login-form{ 
	width:320px;
	margin:20px;
}

.sign-up{
	text-align:center;
	padding:20px 0 0;
}

span{
	font-size:14px;
}

.submit-btn{
	margin-top:20px;
}
</style>