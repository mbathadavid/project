<?php 
// Load the URI helper
helper('uri');

// Get the segments
$segments = uri_string();

// Explode the segments by '/'
$segments = explode('/', $segments);

// Find the index of 'admin'
$admin_index = array_search('admin', $segments);

if ($admin_index !== false && isset($segments[$admin_index + 1])) {
    // Segment after 'admin'
    $module_segment = $segments[$admin_index + 1];
    
    // Segment after 'groups'
    $fun_segment = isset($segments[$admin_index + 2]) ? $segments[$admin_index + 2] : null;

    // Output the segments
}

?>

<?php 
if (isset($module_segment) && isset($fun_segment)) {
?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18"><?php echo ucwords($segments[$admin_index]) ?></h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo ucwords($module_segment) ?></a></li>
                    <li class="breadcrumb-item active"><?php echo ucwords($fun_segment) ?></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<?php } elseif (isset($module_segment) && !isset($fun_segment)) { ?>
    <div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18"><?php echo ucwords($segments[$admin_index]) ?></h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo ucwords($module_segment) ?></a></li>
                    <!-- <li class="breadcrumb-item active"></li> -->
                </ol>
            </div>

        </div>
    </div>
</div>
<?php } else { ?>
    <div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18"><?php echo ucwords($segments[$admin_index]) ?></h4>

            

        </div>
    </div>
</div>
<?php } ?>