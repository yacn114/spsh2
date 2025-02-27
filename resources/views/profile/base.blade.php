@if ($user->role->HasPermission('create-category') || $user->role->HasPermission('create-product') || $user->role->HasPermission('create-role') || $user->role->HasPermission('create-siteData'))
@include('profile.navigation')
@else
@include("main.navigation")
@endif

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

						@if ($user->role->HasPermission('create-category') || $user->role->HasPermission('create-product') || $user->role->HasPermission('create-role') || $user->role->HasPermission('create-siteData'))
						@include('profile.right-menu-admin')
						@else
						@include('profile.right-menu')
						
						@endif
						
					
						
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
		@include('profile.footer')