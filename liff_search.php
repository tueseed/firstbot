<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/cus.css">
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Sarabun|Roboto" rel="stylesheet">
		<script src="upload.js"></script>
	</head>
	<body>
		<header style="margin-bottom: 70px;">
			<nav class="shadow-sm navbar fixed-top navbar-light bg-white">
				<!-- Brand/logo -->
				<a class="navbar-brand font-weight-bold" href="#!">
					<img src="assets/images/pea-logo.png" alt="logo" style="width:100px;">
					ค้นหาข้อมูลอุปกรณ์
				</a>
			</nav>
		</header>
		<main>
			<div class="container mt-2">
				<div clas="row row-center">
					<select class="form-control" id="office_select">
						<option>กฟอ.พธร.</option>
						<option>กฟส.บางแพ</option>
						<option>กฟส.ดำเนินสะดวก</option>
						<option>กฟส.ดอนไผ่</option>
					</select>
				</div>
				<div class="row row-center">
					<div class="col-lg-12">
						<button type="button" class="btn btn-primary" data-toggle="modal" href="#addtopic">เพิ่มข้อมูลการแจ้งเตือน</button>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>