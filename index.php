<?php

// wind turbine items using json file from data.php
// $inspectedItems = json_decode(stripslashes($_POST['$inspectedItems']));

// iteration through the items

$coatingDamage = 'Coating Damage';
$lightningStrike = 'Lightning Strike';
?>

<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php include('./templates/header.php'); ?>

<!-- Main -->
<main class="bg">
  <!-- Only Section -->
  <section>
    <div class="container mx-auto">
      <!-- Section Title -->
      <h1 class="text-dark text-center font-weight-bold my-5 shadow rounded-lg py-1">Wind Turbine Inspection Items</h1>

      <!-- Grid Container -->
      <div class="row mx-auto">

        <!-- PHP ARRAY ITERATION -->
        <?php
        $inspectedItems = range(1, 100); // without AJAX
        foreach ($inspectedItems as $item) {
          //  multiples of 3 && 5
          if ($item % 15 == 0) { ?>
            <div class=" col-md-4 col-lg-3 col-xl-2">
              <div class="card bg-danger mb-4 border-white shadow-sm" style="height: 120px">
                <div class="card-body text-center">
                  <p class="card-title font-weight-bold text-white text-uppercase">
                    <?php echo "$coatingDamage and $lightningStrike"; ?>
                  </p>
                </div>
              </div>
            </div>

          <?php
            // multiples of 3
          } elseif ($item % 3 == 0) { ?>
            <div class=" col-md-4 col-lg-3 col-xl-2">
              <div class="card bg-warning mb-4 border-0 shadow-sm" style="height: 100px">
                <div class="card-body text-center">
                  <p class="card-title font-weight-bold text-uppercase">
                    <?php echo "$coatingDamage"; ?>
                  </p>
                </div>
              </div>
            </div>

          <?php
            // multiples of 5
          } elseif ($item % 5 == 0) { ?>
            <div class=" col-md-4 col-lg-3 col-xl-2">
              <div class="card bg-warning mb-4 border-0 shadow-sm align-text-bottom" style="height: 100px">
                <div class="card-body text-center">
                  <p class="card-title font-weight-bold align-text-bottom text-uppercase">
                    <?php echo "$lightningStrike"; ?>
                  </p>
                </div>
              </div>
            </div>

          <?php
          } else { ?>
            <div class=" col-md-4 col-lg-3 col-xl-2">
              <div class='card bg-dark mb-4 border-0 shadow-sm' style="height: 100px">
                <div class="card-body text-white">
                  <p class='card-title font-weight-bold'><?php echo "$item"; ?></p>
                </div>
              </div>
            </div>
        <?php
          }
        } ?>
        <!-- End of PHP Iteration -->

      </div> <!-- end of grid -->

    </div> <!-- end of container -->

  </section>
</main>

<!-- Footer -->
<?php include('./templates/footer.php'); ?>


</body>

</html>