<!-- This code is used to show message when user login -->
<?php
if (isset($_SESSION['status'])) {
    echo '<div class="alert alert-info alert-dismissible fade show text-light" role="alert">
        <strong> ' . $_SESSION['status'] . '</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}
?>
<?php
unset($_SESSION['status']);
?>