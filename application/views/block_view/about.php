
<div class="container">
    <?php $counter = 0; ?>
    <p><?php echo count($collection); ?></p>
        <?php foreach ($collection as $car => $value) : ?>
        <?php  $counter++; ?>
            <div class ="row">
                <div class="col s12 m12">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url('assets/images/ford/ford_image.jpg'); ?>">
                        </div>

                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?php echo $value["shortCarName"]; ?><i class="material-icons right">more_vert</i></span>
                            <p><a href="#">This is a link <?php echo $counter; ?></a></p>
                        </div>

                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?php echo $value["completeCarName"]; ?><i class="material-icons right">close</i></span>
                            <div>
                                <?php echo $value["completeCarNameOverview"] ?>    
                            </div>
                            <strong>
                                <?php echo $value["price"]; ?>
                            </strong>

                            <div>
                                <?php echo $value["slogan"]; ?>
                                <?php echo $value["description"]; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>