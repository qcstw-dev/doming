<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <h2 class="col-xs-12"><?php print $title ?></h2>
    <div class="col-xs-12 text-justify padding-0">
        <div class="col-xs-12 col-sm-5 col-md-4 thumbnail">
            <img src="<?php print file_create_url($field_about_us_image[0]['uri']); ?>" alt="" title="" />
        </div>
        <div class="col-sm-7 col-md-8"><?php print $field_about_us_text[0]['value'] ?></div>
    </div>
    <div class="col-xs-12 col-md-6 padding-left-0">
        <h3><?php print $field_title_address_taiwan[0]['value'] ?></h3>
        <?php print $field_address_taiwan[0]['value'] ?>
        <div class="col-xs-12 margin-top-20 padding-0"><?php print $field_map_localisation_taiwan[0]['value'] ?></div>
    </div>
    <div class="col-xs-12 col-md-6 padding-right-0">
        <h3><?php print $field_title_address_china[0]['value'] ?></h3>
        <?php print $field_address_china[0]['value'] ?>
        <div class="col-xs-12 margin-top-20 padding-0"><?php print $field_map_localisation_china[0]['value'] ?></div>
    </div>
</div>
