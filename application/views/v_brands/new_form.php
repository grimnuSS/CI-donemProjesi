<!-- partial:partials/_navbar.html -->
<?php $this->load->view("inc/navbar"); ?>
<!-- partial -->

<div class="container-fluid page-body-wrapper">
	<!-- partial:partials/_settings-panel.html -->
	<?php $this->load->view("inc/settings_panel"); ?>

	<!-- partial -->
	<!-- partial:partials/_sidebar.html -->
	<?php $this->load->view("inc/sidebar"); ?>
	<!-- partial -->

	<div class="main-panel">
		<!-- content-wrapper ends -->
		<div class="content-wrapper">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Şube Ekle</h4>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form class="forms-sample" action="<?php echo base_url("Brands/save")?>" method="POST">
										<div class="form-group">
											<label for="title">Resim Linki</label>
											<input type="file" class="form-control" id="img_url" name="img_url" placeholder="Resim Linki">
										</div>
										<div class="form-group">
											<label for="address">Başlık</label>
											<input type="text" class="form-control" id="title" name="title" placeholder="Başlık">
										</div>
										<div class="form-group">
											<label for="address">Seviye</label>
											<input type="text" class="form-control" id="rank" name="rank" placeholder="Seviye">
										</div>
										<button type="submit" class="btn btn-primary me-2">Kaydet</button>
										<a href="<?php echo base_url("Brands/index")?>" class="btn btn-light">İptal Et</a>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- partial:partials/_footer.html -->
			<?php $this->load->view("inc/footer"); ?>
			<!-- partial -->
		</div>
		<!-- main-panel ends -->
	</div>
	<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?php echo base_url("assets/"); ?>vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo base_url("assets/"); ?>vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url("assets/"); ?>vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?php echo base_url("assets/"); ?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url("assets/"); ?>js/off-canvas.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/hoverable-collapse.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/template.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/settings.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo base_url("assets/"); ?>js/dashboard.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
</body>

</html>

