

  @if (! $openingHours->isOpen())

 <!--================ Popup geschlossen ================-->
 <div id="page-popup" class="mad-page-popup">
    <div class="mad-popup-inner">
      <button id="mad-popup-close" class="arcticmodal-close"><i class="material-icons">close</i></button>
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-md-6">
            <h3 class="mad-page-title">Ups!! Geschlossen!</h3>
            <p>We offer our full menu for Pick Up and Delivery during our hours of operation.</p>
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
   <!--================ Popup ================-->
 <div id="page-popup" class="mad-page-popup">
    <div class="mad-popup-inner">
      <button id="mad-popup-close" class="arcticmodal-close"><i class="material-icons">close</i></button>
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-md-6">
            <h3 class="mad-page-title">We Are Open!</h3>
            <p>We offer our full menu for Pick Up and Delivery during our hours of operation.</p>
            <p class="content-element-4">Click on the link below or Call our restaurant at <br>
              +1 800 559 6580 to place your order.</p>
            <a href="#" class="btn btn-big btn-style-3">Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================ /Popup ================-->
  @endif
