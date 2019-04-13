



			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2019 &copy; Créative Bus  <a href="#" class="m-link">Créative</a>
							</span>
						</div>

					</div>
				</div>
			</footer>

			<!-- end::Footer -->
		</div>
	</div> <!-- Ibrahim :  a fait une modif -->

		<!-- end:: Page -->


		<!-- end::Quick Sidebar -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->



		<!-- begin::Quick Nav -->

		<?php
			echo "
			<script src='https://canvasjs.com/assets/script/canvasjs.min.js'></script>
		  <script src='".htmlspecialchars($chemin)."vendors/jquery/dist/jquery.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/popper.js/dist/umd/popper.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/bootstrap/dist/js/bootstrap.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/js-cookie/src/js.cookie.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/moment/min/moment.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/tooltip.js/dist/umd/tooltip.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/perfect-scrollbar/dist/perfect-scrollbar.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/wnumb/wNumb.js' type='text/javascript'></script>

			<!--end:: Global Mandatory Vendors -->

			<!--begin:: Global Optional Vendors -->
			<script src='".htmlspecialchars($chemin)."vendors/jquery.repeater/src/lib.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/jquery.repeater/src/jquery.input.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/jquery.repeater/src/repeater.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/jquery-form/dist/jquery.form.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/block-ui/jquery.blockUI.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/bootstrap-daterangepicker/daterangepicker.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/bootstrap-maxlength/src/bootstrap-maxlength.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/bootstrap-switch/dist/js/bootstrap-switch.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/bootstrap-select/dist/js/bootstrap-select.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/select2/dist/js/select2.full.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/typeahead.js/dist/typeahead.bundle.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/handlebars/dist/handlebars.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/inputmask/dist/jquery.inputmask.bundle.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/inputmask/dist/inputmask/inputmask.date.extensions.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/nouislider/distribute/nouislider.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/owl.carousel/dist/owl.carousel.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/autosize/dist/autosize.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/clipboard/dist/clipboard.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/ion-rangeslider/js/ion.rangeSlider.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/dropzone/dist/dropzone.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/summernote/dist/summernote.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/markdown/lib/markdown.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/bootstrap-markdown/js/bootstrap-markdown.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/jquery-validation/dist/jquery.validate.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/jquery-validation/dist/additional-methods.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/jquery-validation/dist/jquery.validate.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/js/framework/components/plugins/forms/jquery-validation.init.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/bootstrap-notify/bootstrap-notify.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/js/framework/components/plugins/base/bootstrap-notify.init.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/toastr/build/toastr.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/jstree/dist/jstree.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/raphael/raphael.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/morris.js/morris.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/chartist/dist/chartist.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/chart.js/dist/Chart.bundle.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/js/framework/components/plugins/charts/chart.init.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/vendors/jquery-idletimer/idle-timer.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/waypoints/lib/jquery.waypoints.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/counterup/jquery.counterup.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/es6-promise-polyfill/promise.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/sweetalert2/dist/sweetalert2.min.js' type='text/javascript'></script>
			<script src='".htmlspecialchars($chemin)."vendors/js/framework/components/plugins/base/sweetalert2.init.js' type='text/javascript'></script>


		    <script src='".htmlspecialchars($chemin)."vendors2/jquery/dist/jquery.min.js'></script>
		    <script src='".htmlspecialchars($chemin)."vendors2/popper.js/dist/umd/popper.min.js'></script>
		    <script src='".htmlspecialchars($chemin)."vendors2/bootstrap/dist/js/bootstrap.min.js'></script>
		    <script src='".htmlspecialchars($chemin)."assets2/js/main.js'></script>

			<script src='".htmlspecialchars($chemin)."vendors2/datatables.net/js/jquery.dataTables.js'></script>
		    <script src='".htmlspecialchars($chemin)."vendors2/datatables.net-bs4/js/dataTables.bootstrap4.min.js'></script>
		    <script src='".htmlspecialchars($chemin)."vendors2/datatables.net-buttons/js/dataTables.buttons.min.js'></script>
		    <script src='".htmlspecialchars($chemin)."vendors2/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js'></script>
		    <script src='".htmlspecialchars($chemin)."vendors2/jszip/dist/jszip.min.js'></script>
		    <script src='".htmlspecialchars($chemin)."vendors2/pdfmake/build/pdfmake.min.js'></script>
		    <script src='".htmlspecialchars($chemin)."vendors2/pdfmake/build/vfs_fonts.js'></script>
		    <script src='".htmlspecialchars($chemin)."vendors2/datatables.net-buttons/js/buttons.html5.min.js'></script>
		    <script src='".htmlspecialchars($chemin)."vendors2/datatables.net-buttons/js/buttons.print.min.js'></script>
		    <script src='".htmlspecialchars($chemin)."vendors2/datatables.net-buttons/js/buttons.colVis.min.js'></script>
		    <script src='".htmlspecialchars($chemin)."assets2/js/init-scripts/data-table/datatables-init.js'></script>
			<!--end:: Global Optional Vendors -->

			<!--begin::Global Theme Bundle -->
			<script src='".htmlspecialchars($chemin)."assets/demo/base/scripts.bundle.js' type='text/javascript'></script>



		<script src='".htmlspecialchars($chemin)."assets/app/js/dashboard.js' type='text/javascript'></script>
		<script src='".htmlspecialchars($chemin)."assets/app/js/canvasjs.min.js' type='text/javascript'></script>
		<script src='".htmlspecialchars($chemin)."assets/app/js/my-script.js' type='text/javascript'></script>
		<script src='".htmlspecialchars($chemin)."assets/app/js/sign.js' type='text/javascript'></script>




	";

 ?>
<script>



</script>
		  <style>
		  #myCanvas {
		    border:4px solid #100;
		    border-radius: 15px;
		  }
		  </style>




		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
