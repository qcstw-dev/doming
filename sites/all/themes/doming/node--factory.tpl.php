<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="col-xs-12 margin-top-20 padding-0">
        <div class="col-xs-12 padding-0">
            <h2 class="margin-top-0"><?php print $title ?></h2>
            <div class="col-xs-12 col-md-6 thumbnail margin-right-md-20 margin-bottom-20">
                <img src="<?php print file_create_url($field_factory_image[0]['uri']); ?>" alt="<?php print $field_factory_image[0]['alt']; ?>" title="<?php print $field_factory_image[0]['title']; ?>" />
            </div>
            <div class="text-justify"><?php
                print $field_factory_text[0]['value'] ?>
                <div class="col-xs-12 padding-0">
                    <div class="hidden-text-area"><?php
                        print $field_more_text[0]['value'] ?>
                    </div>
                    <div class="btn-show-hide-text-area"><span class="glyphicon glyphicon-menu-down"></span> More <span class="glyphicon glyphicon-menu-down"></span></div>
                </div>
            </div>
        </div>
    </div><?php
        $list_raw_ids = [];
        foreach ($field_raw_captioned_picture as $item_id) {
            $list_raw_ids[] = $item_id['value']; 
        }
        $raws = entity_load('field_collection_item', $list_raw_ids);
        foreach ($raws as $raw) { ?>
            <div class="col-xs-12 padding-0">
                <h3><?= $raw->field_title_raw_captioned_pictur['und'][0]['value'] ?></h3>
                <div class="gallery gallery-container"><?php
                    $list_captioned_picture_ids = [];
                    foreach ($raw->field_captioned_picture['und'] as $item_id) {
                        $list_captioned_picture_ids[] = $item_id['value'];
                    }
                    $captioned_pictures = entity_load('field_collection_item', $list_captioned_picture_ids); 
                    foreach ($captioned_pictures as $captioned_picture) { ?>
                        <div class="col-sm-3 padding">
                            <a class="thumbnail" title="<?php print $captioned_picture->field_image['und'][0]['title'] ?>" href="<?php print file_create_url($captioned_picture->field_image['und'][0]['uri']); ?>">
                                <img class="" src="<?php print file_create_url($captioned_picture->field_image['und'][0]['uri']); ?>" alt="<?php print $captioned_picture->field_image['und'][0]['alt'] ?>" title="<?php print $captioned_picture->field_image['und'][0]['title'] ?>" />
                            </a>
                            <p class="subtitle-pic"><?php print $captioned_picture->field_caption['und'][0]['value']?></p>
                        </div><?php
                    } ?>
                </div>
            </div><?php
        } ?>
</div>