<?php $this->load->view('auth/templates/admin_header') ?>

<body id="page-top">

      <!-- Page Wrapper -->
      <div id="wrapper">

            <!-- Sidebar -->
            <?php $this->load->view('back/layouts/_sidebar') ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                  <!-- Main Content -->
                  <div id="content">

                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                              <!-- Sidebar Toggle (Topbar) -->
                              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                    <i class="fa fa-bars"></i>
                              </button>

                              <!-- Topbar Navbar -->
                              <?php $this->load->view('back/layouts/_topbar') ?>
                        </nav>
                        <!-- End of Topbar -->

                        <!-- Begin Page Content -->
                        <div class="container">
                              <div class="row">
                                    <div class="col">
                                          <h1><?php echo lang('create_user_heading'); ?></h1>
                                          <p><?php echo lang('create_user_subheading'); ?></p>
                                    </div>
                              </div>

                              <div id="infoMessage"><?php echo $message; ?></div>

                              <?php echo form_open("auth/create_user"); ?>

                              <div class="form-row mt-2">
                                    <div class="form-group ">
                                          <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
                                          <?php echo form_input($first_name); ?>
                                    </div>
                              </div>
                              <div class="form-row mt-2">
                                    <div class="form-group">
                                          <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
                                          <?php echo form_input($last_name); ?>
                                    </div>
                              </div>
                              <?php
                              if ($identity_column !== 'email') {
                                    echo '<p>';
                                    echo lang('create_user_identity_label', 'identity');
                                    echo '<br />';
                                    echo form_error('identity');
                                    echo form_input($identity);
                                    echo '</p>';
                              }
                              ?>

                              <div class="form-row mt-2">
                                    <div class="form-group">
                                          <?php echo lang('create_user_company_label', 'company'); ?> <br />
                                          <?php echo form_input($company); ?>
                                    </div>
                              </div>

                              <div class="form-row mt-2">
                                    <div class="form-group">
                                          <?php echo lang('create_user_email_label', 'email'); ?> <br />
                                          <?php echo form_input($email); ?>
                                    </div>
                              </div>

                              <div class="form-row mt-2">
                                    <div class="form-group">
                                          <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
                                          <?php echo form_input($phone); ?>
                                    </div>
                              </div>

                              <div class="form-row mt-2">
                                    <div class="form-group">
                                          <?php echo lang('create_user_password_label', 'password'); ?> <br />
                                          <?php echo form_input($password); ?>
                                    </div>
                              </div>

                              <div class="form-row mt-2">
                                    <div class="form-group">
                                          <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
                                          <?php echo form_input($password_confirm); ?>
                                    </div>
                              </div>

                              <div class="row mt-2">
                                    <div class="col">
                                          <?php echo form_submit('submit', lang('create_user_submit_btn'), ['class' => 'btn btn-success']); ?>

                                    </div>
                              </div>

                              <?php echo form_close(); ?>
                        </div>

                  </div>
                  <!-- End of Main Content -->

                  <!-- Footer -->
                  <?php $this->load->view('back/layouts/_footer') ?>
                  <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->