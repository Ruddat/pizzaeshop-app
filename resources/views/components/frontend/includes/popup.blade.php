

  @if (! $openingHours->isOpen())

 <!--================ Popup geschlossen ================-->
 <div id="page-popup" class="mad-page-popup">
    <div class="mad-popup-inner">
      <button id="mad-popup-close" class="arcticmodal-close"><i class="material-icons">close</i></button>
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-md-6">
            <h3 class="mad-page-title">Ups!! Geschlossen!</h3>
            <p>
            @php
            // This will allow you to display things like:
            $now = new DateTime('now');
            $range = $openingHours->currentOpenRange($now);

            if ($range) {
                echo "It's open since ".$range->start()."\n";
                echo "It will close at ".$range->end()."\n";
            } else {
                echo "It's closed since ".$openingHours->previousClose($now)->format('l H:i')."\n";
                echo "It will re-open at ".$openingHours->nextOpen($now)->format('l H:i')."\n";

            }
            @endphp
            </p>

            <p class="content-element-4">Click on the link below or Call our restaurant at <br>
              +1 800 559 6580 to place your order.</p>




            <a href="#" class="btn btn-big btn-style-4">Vorbestellen</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================ /Popup ================-->


  @else
  <span class="mkd-icon-text">JETZT GEÖFFNET</span>

  @endif
