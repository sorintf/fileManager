

	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">Navbar</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?php echo $baseFunctions->buildUrl(array('view'=>"f_index")); ?>"><?php echo $baseFunctions->translate['f_index']['link_label'][$baseFunctions->lang]; ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo $baseFunctions->buildUrl(array('view'=>"f_about")); ?>"><?php echo $baseFunctions->translate['f_about']['link_label'][$baseFunctions->lang]; ?></a>
						</li>
						<?php if ($baseFunctions->user_is_logged_in): ?>
							<li class="nav-item">
								<a class="nav-link" href=""></a>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMyAccount" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Welcome <?php echo $baseFunctions->username; ?>
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMyAccount">

									<?php if ($baseFunctions->admin_status): ?>
										<li><a class="dropdown-item bg-info" href="/admin.php">Admin</a></li>
										<li><hr class="dropdown-divider"></li>
									<?php endif ?>

									<li><a class="dropdown-item" href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_general")); ?>"><?php echo $baseFunctions->translate['b_acc_general']['link_label'][$baseFunctions->lang]; ?></a></li>
									<li><a class="dropdown-item" href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_security")); ?>"><?php echo $baseFunctions->translate['b_acc_security']['link_label'][$baseFunctions->lang]; ?></a></li>

									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_logout")); ?>"><?php echo $baseFunctions->translate['b_acc_logout']['link_label'][$baseFunctions->lang]; ?></a></li>
								</ul>
							</li>
						<?php else: ?>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_login")); ?>"><?php echo $baseFunctions->translate['b_acc_login']['link_label'][$baseFunctions->lang]; ?></a>
							</li>
						<?php endif ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>





    <?php if (!$baseFunctions->user_is_logged_in): ?>
    	<!-- DELETE this if login with modal is not wanted -->
        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <h2 class="modal-title" id="loginModalLabel">Intră în cont</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation ajaxForm mb-4" id="ajaxLoginForm" action="" method="post" novalidate>
                            <div id="ajaxLoginFormMsg"></div>

                            <div class="form-row">
                                <div class="col-12 mb-3">
                                    <label for="ajxusr">E-mail</label>
                                    <input type="email" class="form-control" id="ajxusr" name="ajxusr" value="" placeholder="E-mail" required>
                                    <div class="invalid-tooltip">
                                        Te rugam sa introduci o adresa de email valida.
                                    </div>
                                </div>
                                <div class="col-12 mb-3 position-relative">
                                    <label for="ajxpwd">Parola</label>
                                    <input type="password" class="form-control password" id="ajxpwd" name="ajxpwd" value="" placeholder="Parola" required>
                                    <span class="togglePass"></span>
                                    <div class="invalid-tooltip">
                                        Te rugam sa introduci o parola valida
                                    </div>
                                </div>
                            </div>

                            <div class="text-end mb-3">
                                <a href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_password_request_reset")); ?>" class="">Ai uitat parola?</a>
                            </div>

                            <button class="btn btn-gradient-02 w-100" type="submit" name="ajaxLogin">Login</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        Nu ai cont? <a href="<?php echo $baseFunctions->buildUrl(array('view'=>"b_acc_register")); ?>" class="">Înregistrează-te.</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>