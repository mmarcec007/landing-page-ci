<div class="container">
    <?php $counter = 0; ?>
    <ul class="collection" data-collapsible="accordion">
            <?php foreach ($collection as $car => $value) : ?>
                <?php  $counter++; ?>
                <li class="collection-item avatar">
                    <img src="<?php echo base_url('assets/images/ford/ford_image.jpg'); ?>" alt="" class="circle">
                    <span class="title"><?php echo $counter . ". " , $value["shortCarName"]; ?></span>
                    <p> <?php echo $value["price"]; ?> </p>
                    <a href="<?php echo to_view("details/index/", $car); ?>" class="secondary-content"><i class="material-icons">send</i></a>
                </li>
            <?php endforeach ?>
        </div>
    </ul>
</div>