	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="https://seeklogo.com/images/P/pdi-love-logo-C8738BCFAD-seeklogo.com.png?v=638198273740000000" alt="logo" width="150">
					</div>
                    <?= $this->session->flashdata('message'); ?>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="<?= base_url('Auth');?>">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="<?=
									set_value('email');?>" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
									<?= form_error('email', 'small class="text-danger pl-3">', '</small>');?>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<a href="#" class="float-end">
											Forgot Password?
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="password" value="<?=
									set_value('password');?>">
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
									<?= form_error('password', 'small class="text-danger pl-3">', '</small>');?>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="<?= base_url('Auth/register')?>" class="text-dark">Create One</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>