<div id="location" class="container py-3 pb-lg-4 font-size-lg">
  <span>Quidquid</span>
  <h2 class="h1 mb-3 mb-lg-4">Esse me et eum nisi laesit hac <br>quas w subsit nisi se</h2>

  <div class="row">
    <div class="col-sm-4">
      <h4>Quidquid</h4>
      <address>
        <strong>Zundel Webdesign</strong><br>
        Saalburgstraße 26<br>
        61267 Neu-Anspach
      </address>
    </div>

    <div class="col-sm-4">
      <h4>Contact</h4>

      @icon('oi oi-phone') <a href="tel:+496081408575">+49 (0) 60 81 408 57 5</a><br>
      @icon('oi oi-envelope-closed') <a href="mailto:info@zundel-webdesign.de">info@zundel-webdesign.de</a>
    </div>
  </div>
</div>

@if($agent->isMobile() and !$agent->isTablet())
  @php
    $embedFormat = '16by9'
  @endphp
@else
  @php
    $embedFormat = '21by9'
  @endphp
@endif

<x-embed src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.1127905248313!2d8.509095316397369!3d50.28982240680601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bdabff4dc7fe39%3A0x22e7424ac3700505!2sFewo-Zundel.de!5e0!3m2!1sde!2sde!4v1564940106677!5m2!1sde!2sde" :format="$embedFormat"/>


