<div id="hilang" class="mb-3">
    <?= $this->session->flashdata('alert'); ?>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="contact-list sm-res-mg-t-30">

        <form action="<?= base_url('password/ubahpass') ?>" method="post">
            <input type="hidden" name="id_user" value="<?= $pengguna->id_user ?>">
            <div class="row mb-3">
                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                <div class="col-md-8 col-lg-9">
                    <input name="password0" type="password" class="form-control" id="currentPassword" value="<?= $this->session->userdata('password') ?>" required autocomplete="off">
                </div>
            </div>

            <div class="row mb-3">
                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                <div class="col-md-8 col-lg-9">
                    <input name="newpassword" type="password" class="form-control" id="newPassword" value="<?= $this->session->userdata('password') ?>" required autocomplete="off">
                </div>
            </div>

            <div class="row mb-3">
                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                <div class="col-md-8 col-lg-9">
                    <input name="renewpassword" type="password" class="form-control" id="renewPassword" value="<?= $this->session->userdata('password') ?>" required autocomplete="off">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Change Password</button>
            </div>
        </form><!-- End Change Password Form -->

    </div>
</div>