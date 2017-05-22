
<div class="container">
    <?php $counter = 0; ?>
    <ul class="collapsible popout" data-collapsible="accordion">
            <?php foreach ($collection as $car => $value) : ?>
            <?php  $counter++; ?>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i><?php echo $value["shortCarName"]; ?></div>
                        <div class="collapsible-body">
                            <span>
                                <p>
                                    <a href="<?php echo site_url("details/index/".$car); ?>">Details of <?php echo $car; ?></a>
                                </p>
                            </span>
                        </div>
                    </li>
            <?php endforeach ?>
        </div>
    </ul>
</div>