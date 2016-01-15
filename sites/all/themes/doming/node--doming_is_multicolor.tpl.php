<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="col-xs-12 col-md-5 padding-left-0">
        <div class="col-xs-12 text-center padding-0">
            <h2><?php print $title ?></h2>
        </div>
        <div class="text-justify">
            <?php print $field_multicolor_text[0]['value']; ?>
        </div>
    </div>
    <div class="col-xs-12 col-md-7 margin-top-20 padding-0">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
              <li data-target="#carousel" data-slide-to="3"></li>
              <li data-target="#carousel" data-slide-to="4"></li>
              <li data-target="#carousel" data-slide-to="5"></li>
              <li data-target="#carousel" data-slide-to="6"></li>
              <li data-target="#carousel" data-slide-to="7"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php print url("/sites/default/files/doming-is-multicolor/ADA-REKLAM-DOME.jpg") ?>" alt="Domed badges Ada recklam" title="Domed badges Ada recklam">
                </div>
                <div class="item">
                  <img src="<?php print url("/sites/default/files/doming-is-multicolor/BENENUTS-DOME.jpg") ?>" alt="Domed decals Benenuts" title="Domed decals Benenuts">
                </div>
                <div class="item">
                  <img src="<?php print url("/sites/default/files/doming-is-multicolor/BOTTLE-OPENER-DOME.jpg") ?>" alt="Domed labels Bottle opener" title="Domed labels Bottle opener">
                </div>
                <div class="item">
                  <img src="<?php print url("/sites/default/files/doming-is-multicolor/BRAND-WEEK-DOME.jpg") ?>" alt="Resin stickers Brand week" title="Resin stickers Brand week">
                </div>
                <div class="item">
                  <img src="<?php print url("/sites/default/files/doming-is-multicolor/BRASS-PRO-SHOPS-DOME.jpg") ?>" alt="Epoxy stickers Brass Pro shops" title="Epoxy stickers Brass Pro shops">
                </div>
                <div class="item">
                  <img src="<?php print url("/sites/default/files/doming-is-multicolor/EVOCONTA-DOME.jpg") ?>" alt="Domed stickers Evoconta" title="Domed stickers Evoconta">
                </div>
                <div class="item">
                  <img src="<?php print url("/sites/default/files/doming-is-multicolor/NUVIPA-DOME.jpg") ?>" alt="Dome labels Nuvipa" title="Dome labels Nuvipa">
                </div>
                <div class="item">
                  <img src="<?php print url("/sites/default/files/doming-is-multicolor/SAMANES-DOME.jpg") ?>" alt="Doming stickers Samanes" title="Doming stickers Samanes">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
</div>
<script>
    $('.carousel').carousel();
</script>
