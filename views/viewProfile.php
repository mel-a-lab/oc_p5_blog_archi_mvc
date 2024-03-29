<h3 class="form-control"><b>Profil Personnel</b></h3>
	<section class="comment-section">
		<div class="container">
			<?php if (isset($success)) { ?>
			<div class="row">
				<div class="col-lg-3 col-md-0"></div>
				<div class="col-lg-6 col-md-12" style="margin-bottom: -30px">
					<div class="comment-form center-text">
						<div class="alert-info" role="alert"><?= $success ?> </div>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="row">
				<div class="col-lg-2 col-md-0"></div>
				<div class="col-lg-8 col-md-12">
					<div class="comment-form">
					<label for="editer_nom_prenom">Éditer votre nom et/ou prénom ici :</label> 
						<form method="POST" action="user&userEditName=action" class="contact1-form validate-form" enctype="multipart/form-data">
							<div class="row">
								<div class="col-sm-6">
									<input type="hidden" name="id" value=<?= $_SESSION['id'] ?>>
									<input type="text" aria-required="true" minlength="3" name="firstName" class="form-control"
										value=<?= $user['firstName'] ?> aria-invalid="true" required>
								</div>
								<div class="col-sm-6">
									<input type="text" aria-required="true" minlength="3" name="lastName" class="form-control"
										value=<?= $user['lastName'] ?> aria-invalid="true" required>
								</div>
								<div class="col-sm-2">
									<div class="left-area" style="height: 70px;width: 70px;border-radius: 100px;overflow: hidden;position: absolute;top: 60%;margin-top: -35px;border: 6px solid #fff;box-shadow: 0px 0px 5px rgb(0 0 0 / 30%);">
										<a class="avatar" href="#"><img src=<?= isset($user['picture']) ? "uploads/".$user['picture'] : "images/default-profile.png" ?> alt="Photo de profil"></a>
									</div>
								</div>
								<div class="col-sm-6">
									<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
									<input type="file" name="userPicture" value=<?= $user['picture'] ?>>
								</div>
								<div class="col-sm-12 center-text"><br>
									<button class="submit-btn" type="submit" id="form-submit"><b>MODIFIER</b></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="comment-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-0"></div>
				<div class="col-lg-8 col-md-12">
					<div class="comment-form">
					<label for="éditer_mdp">Éditer votre mot de passe ici :</label> 
						<form method="post" action="user&userEditPassword=action" class="contact1-form validate-form">
							<div class="row">
								<div class="col-sm-6">
									<input type="hidden" name="id" value=<?= $_SESSION['id'] ?>>
									<input type="password" aria-required="true" minlength="6" name="password" class="form-control"
										placeholder="Entrez votre mot de passe" aria-invalid="true" required>
								</div>
								<div class="col-sm-6">
									<input type="password" aria-required="true" minlength="6" name="confirmPassword" class="form-control"
										placeholder="Confirmation du mot de passe" aria-invalid="true" required>
								</div>
								<div class="col-sm-12 center-text">
									<button class="submit-btn" type="submit" id="form-submit"><b>MODIFIER</b></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
