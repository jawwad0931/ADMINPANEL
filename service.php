<?php
include("Frontenddb/db.php");
include("FrontendInclude/frontHeader.php");
include("FrontendInclude/frontTopbar.php");
?>
<!-- Lawyer Cards -->
<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-wrap">
            <?php
            $sltImage = "SELECT * FROM `updateimage`";
            $result = mysqli_query($conn, $sltImage);

            if (!$result) {
                die("Error in SQL query: " . mysqli_error($conn));
            } else {
                while ($fetch = mysqli_fetch_assoc($result)) {
                    echo '<div class="card mr-2" style="width: 18rem;">
                            <img src="img/' . $fetch["image"] . '" width="100" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">Card Title</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>';
                }
            }
            ?>
        </div>
    </div>
</div>
<style>
    @media (max-width: 992px) {
        .card {
            width: 100%;
            /* Set the card width to 100% for small and medium screens */
        }
    }
</style>
<?php include("FrontendInclude/frontFooter.php") ?>