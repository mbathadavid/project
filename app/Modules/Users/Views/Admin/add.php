<?= $this->extend('layouts/admin/default') ?>


<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <!-- <h4 class="card-title mb-0">Wizard with Progressbar</h4> -->
            </div>
            <div class="card-body">

                <div id="progrss-wizard" class="twitter-bs-wizard">
                    <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a href="#progress-user-details" class="nav-link" data-toggle="tab">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Seller Details">
                                    <i class="bx bx-list-ul"></i>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#progress-perm-detail" class="nav-link" data-toggle="tab">
                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Details">
                                    <i class="bx bxs-bank"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- wizard-nav -->

                    <div id="bar" class="progress mt-4">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated">
                        </div>
                    </div>
                    <?php
                        echo form_open(current_url());
                    ?>
                    <div class="tab-content twitter-bs-wizard-tab-content">
                        <div class="tab-pane" id="progress-user-details">
                            <div class="text-center mb-4">
                                <h5>Personal Details</h5>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="progresspill-firstname-input">Email</label>
                                        <input type="email" name="email" class="form-control" id="progresspill-firstname-input" placeholder="Enter the Email">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="progresspill-lastname-input">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" required>
                                        <!-- <input type="text" class="form-control" id="progresspill-lastname-input" placeholder="Enter your Last Name"> -->
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label for="progresspill-lastname-input">Username</label>
                                    <?php
                                    echo form_dropdown('group', ['' => 'Select Group'] +  $groups,   '', 'class="form-control" data-trigger id="choices-single-default" required')
                                    ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="progresspill-phoneno-input">Password</label>
                                        <!-- <input type="text" class="form-control" id="progresspill-phoneno-input" placeholder="Enter your Phone No"> -->
                                        <input type="password" name="password" class="form-control" id="password" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="progresspill-email-input">Confirm Password</label>
                                        <!-- <input type="email" class="form-control" id="progresspill-email-input" placeholder="Enter your Email"> -->
                                        <input type="password" name="cpassword" class="form-control" id="password" required>
                                    </div>
                                </div>
                            </div>

                          
                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                            </ul>
                        </div>

                        <div class="tab-pane" id="progress-perm-detail">
                            <div>
                                <div class="text-center mb-4">
                                    <h5>Permissions</h5>
                                    <p class="card-title-desc">Select Permissions to Assign</p>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="nav flex-column nav-pills me-3 mb-2" id="vertical-tab" role="tablist" aria-orientation="vertical">
                                            <?php
                                            $ii = 1;

                                            function custom_str_contains($haystack, $needle)
                                            {
                                                return strpos($haystack, $needle) !== false;
                                            }

                                            foreach ($perms as $key => $perm) :
                                                if ($ii == 1) {
                                                    // echo '<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#' . $key . '" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">' . $key . '</span> </a> </li>';
                                                    echo '<button class="nav-link text-start active" id="' . $key . '-tab" data-bs-toggle="pill" data-bs-target="#' . $key . '" type="button" role="tab" aria-controls="vertical-home" aria-selected="true">' . $key . '</button>';
                                                } else {
                                                    // echo '<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#' . $key . '" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">' . $key . '</span> </a> </li>';
                                                    echo '<button class="nav-link text-start" id="' . $key . '-tab" data-bs-toggle="pill" data-bs-target="#' . $key . '" type="button" role="tab" aria-controls="vertical-home" aria-selected="true">' . $key . '</button>';
                                                }
                                            ?>
                                            <?php
                                                $ii++;
                                            endforeach;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="tab-content" id="vertical-tabContent">
                                            <?php
                                            $i = 1;
                                            foreach ($perms as $key => $perm) :
                                                if ($i == 1) {
                                                    echo '<div class="tab-pane fade show active" id="' . $key . '" role="tabpanel" aria-labelledby="' . $key . '-tab" tabindex="0">';
                                                } else {
                                                    echo '<div class="tab-pane fade" id="' . $key . '" role="tabpanel" aria-labelledby="' . $key . '-tab" tabindex="0">';
                                                }

                                                foreach ($perm as $kkk => $val) :
                                                    if ($val === "index") {
                                                        $text = "View " . $key;
                                                    } else {
                                                        if (custom_str_contains($val, '_')) {
                                                            $text = str_replace('_', ' ', $val);
                                                        } else {
                                                            $text = $val;
                                                        }
                                                    }
                                            ?>
                                                    <label>
                                                        <input class="form-check-input" type="checkbox" id="<?php echo $key ?>" name="perms[]" value="<?php echo strtolower($key) . '.' . strtolower($val) ?>">
                                                        <?php echo ucwords($text) ?> </label><br>
                                            <?php
                                                endforeach;
                                                echo '</div>';
                                                $i++;
                                            endforeach;
                                            ?>
                                        </div>
                                        
                                    </div>
                                </div>
                            
                                
                              
                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary"><i class="bx bx-chevron-left me-1"></i> Previous</a>
                                    </li>
                                    <li class="float-end"><button class="btn btn-primary" type="submit">Save
                                            Changes</button></li>
                                </ul>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

<?= $this->endSection() ?>