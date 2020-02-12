<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
		<title></title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">&nbsp;</div>
			</div>
			<div class="row">
				<div class="col-md-12">&nbsp;</div>
			</div>
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<span class="glyphicon glyphicon-user"></span>
								Login Setup
							</h3>
						</div>
						<div class="panel-body">
							<form action="login" method="post">
								<table class="table table-bordered">
									<tr>
										<td><label class="control-label">Email</label></td>
										<td>
											<input type="email" name="email" value="" placeholder="Email" class="form-control" required>
										</td>
									</tr>
									<tr>
										<td><label class="control-label">Password</label></td>
										<td>
											<input type="text" name="password" value="" placeholder="******" class="form-control" required>
										</td>
									</tr>
									<tr>
										<td colspan="2" style="text-align:center">
											<button type="submit" name="submit" class="btn btn-primary btn-md">Masuk</button>
											<button type="button" name="button" class="btn btn-default btn-md" onclick="history.back()">Kembali</button>
										</td>
									</tr>
								</table>
							</form>
							<?= $this->session->flashdata('pesan'); ?>
						</div>
					</div>
				</div>
				<div class="col-md-3">
				</div>
		</div>
	</body>
</html>
