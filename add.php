<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<title>发布文章</title>
</head>

<body>

	<div class="container">
		<form action="actions.php?act=1" method="post">
		  <div class="form-group">
			<label for="exampleInputEmail1">标题</label>
			<input type="text" class="form-control" name="title" placeholder="文章标题">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">内容</label>
			<textarea class="form-control" rows="3" name="content"></textarea>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	
</body>
	
</html>