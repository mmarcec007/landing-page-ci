<div class="container">
    <div class ="row">
        <div class="col s12 m12">
            <h2 class="header"><?php echo $carDetails["completeCarName"]; ?></h2>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="<?php echo ford_image('ford_image'); ?>">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <div>
                            <?php echo $carDetails["completeCarNameOverview"]  .  test_method();?>
                        </div>
                        <strong>
                            <?php echo $carDetails["price"]; ?>
                        </strong>
                        <div>
                            <?php echo $carDetails["slogan"]; ?>
                            <?php echo $carDetails["description"]; ?>
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="<?php echo site_url('about') ?>">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>