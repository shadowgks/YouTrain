<div class="modal fade" id="edit_user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
       <div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Profile</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<!-- need documentation  -->
				<form class="" action="" method="post"  enctype="multipart/form-data">
					<!-- need documentation  -->

			</div> <?php
				$rows = viewUser("this_user", $_SESSION["user_id"]);
				if (is_array($rows)) {
					foreach ($rows as $row) { ?> <div>
						<label class="ms-2 text-secondary">Prénom :</label>
						<input type="text" class="form-control mt-0" name="edit_first" placeholder="First name" value="<?= $row["prenom"] ?>">
					</div>
					<div>
						<label class="ms-2  text-secondary">Nom :</label>
						<input type="text" class="form-control mt-0" name="edit_last" placeholder="Last name" value="<?= $row["nom"] ?>">
					</div>
					<div>
						<label class="ms-2 text-secondary">Email :</label>
						<input type="text" class="form-control mt-0 " name="edit_email" placeholder="E-mail" value="<?= $row["email"] ?>">
					</div>
					<div>
					               <label class="ms-2 text-secondary">Image :</label>
					               <input type="file"  accept="image/png ,image/jpg, image/jpeg" name="edit_image" class="form-control mt-0" name="edit_image"  value="<?= $row["image"] ?>">
					</div>
					              <input type="password" class="form-control mt-3" name="edit_pass" placeholder="Password" value="">
					              <input type="password" class="form-control mt-3" name="edit_confirm_pass" placeholder="Confirm Password" value="">


					<input type="hidden" class="form-control mt-3" name="edit_pass_confirm_real" value="">
					<input type="hidden" id="hdn_session_pass3" value="<?= $row["id"] ?>">
			<?php }
				} else {
					echo "no records;";
				} ?>


			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" name="profile_delete" id="profile_edit_btn" class="btn btn-danger  px-4">Delete</button>

				<button type="submit" name="profile_edit" id="profile_edit_btn" class="btn  btn-primary  px-4">Edit</button>

			</div>
		</div>
		</form>
	</div>
</div>