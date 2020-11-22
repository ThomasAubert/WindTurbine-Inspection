<?php

// wind turbine items using ajax
// $inspectedItems = json_decode(stripslashes($_POST['$inspectedItems']));

// iteration through the items

$coatingDamage = 'Coating Damage';
$lightningStrike = 'Lightning Strike';
?>

<!DOCTYPE html>
<html lang="en">

<?php include('./templates/header.php'); ?>

<main class="bg">
  <section>
    <div class="container mx-auto">

      <h2 class="text-dark text-center font-weight-bold text-monospace my-5 shadow rounded-lg">Wind Turbine Inspection Items</h2>

      <div class="row mx-auto">

        <?php
        $inspectedItems = range(1, 100);
        foreach ($inspectedItems as $item) {
          //  multiples of 3 && 5
          if ($item % 15 == 0) { ?>
            <div class=" col-md-4 col-lg-3">
              <div class="card bg-danger mb-4 border-0 shadow-sm" style="height: 120px">
                <div class="card-body text-center">
                  <p class="card-title font-weight-bold text-uppercase">
                    <?php echo "$coatingDamage and $lightningStrike"; ?>
                  </p>
                </div>
              </div>
            </div>

          <?php
            // multiples of 3
          } elseif ($item % 3 == 0) { ?>
            <div class=" col-md-4 col-lg-3">
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
            <div class=" col-md-4 col-lg-3">
              <div class="card bg-warning mb-4 border-0 shadow-sm" style="height: 100px">
                <div class="card-body text-center">
                  <p class="card-title font-weight-bold text-uppercase">
                    <?php echo "$lightningStrike"; ?>
                  </p>
                </div>
              </div>
            </div>

          <?php
          } else { ?>
            <div class=" col-md-4 col-lg-3">
              <div class='card bg-dark mb-4 border-0 shadow-sm' style="height: 100px">
                <div class="card-body text-white">
                  <p class='card-title font-weight-bold'><?php echo "$item"; ?></p>
                </div>
              </div>
            </div>
        <?php
          }
        } ?>

      </div> <!-- end of grid -->

    </div> <!-- end of container -->

  </section>
</main>

<?php include('./templates/footer.php'); ?>
</body>

</html>