<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="col-xs-12 text-center">
        <h2>Doming enables full color print</h2>
    </div>
    <div class="col-xs-12">
        <p class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras 
            efficitur ex dignissim eros blandit, a aliquam diam semper. 
            Vestibulum in commodo augue, in condimentum est. Ut scelerisque 
            tincidunt posuere. Praesent enim ex, tempor ac porta non, aliquet 
            id dolor. Morbi eu scelerisque eros. Aenean nec eleifend ex. Sed 
            fringilla, purus id suscipit sollicitudin, risus turpis rutrum sem,
            vel mattis libero lorem id purus. Cras egestas viverra viverra. 
            Vestibulum quis mollis lacus, pretium euismod nunc. Aenean lacus 
            velit, gravida eget enim a, iaculis vehicula diam. Cras feugiat 
            metus libero, eget luctus magna pulvinar eget. Duis pulvinar 
            laoreet sollicitudin. Etiam blandit non est in ornare.
        </p>
    </div>
    <div class="col-xs-12">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
              <li data-target="#carousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="<?php print url("/sites/default/files/doming-is-multicolor/PCA19ODD6.jpg") ?>" alt="...">
                <div class="carousel-caption">
                  ...
                </div>
              </div>
              <div class="item">
                <img src="<?php print url("/sites/default/files/doming-is-multicolor/PSPHODD1.jpg") ?>" alt="...">
                <div class="carousel-caption">
                  ...
                </div>
              </div>
              <div class="item">
                <img src="<?php print url("/sites/default/files/doming-is-multicolor/QCK4002ODD.jpg") ?>" alt="...">
                <div class="carousel-caption">
                  ...
                </div>
              </div>
              <div class="item">
                <img src="<?php print url("/sites/default/files/doming-is-multicolor/ZTOPODD1.jpg") ?>" alt="...">
                <div class="carousel-caption">
                  ...
                </div>
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
