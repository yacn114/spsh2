


@include('profile.header')
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Dashboard: Dashboard Start ================================== -->
			<section class="gray pt-4" style="background-color: whitesmoke">
				<div class="container-fluid">
										
					<div class="row">
@include('profile.navigation')
					
						
						<div class="col-lg-9 col-md-9 col-sm-12">
							
							<!-- Row -->
							@yield('content')
						</div>
					
					</div>
					
				</div>
			</section>
			<!-- ============================ Dashboard: Dashboard End ================================== -->
			
		<!-- ============================ Call To Action ================================== -->
		@include('main.footer')