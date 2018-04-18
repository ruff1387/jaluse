<!--
Route Object ( [path:Route:private] => /produse/:id [class:Route:private] => produse [method:Route:private] => view [dynamicElements:Route:private] => Array ( [:id] => :id ) [mapArguments:Route:private] => Array ( [:id] => 1 ) ) 1
-->
<section class="head-page">
    <div class="container">
      <div class="row">
        <h1 class="title-head-page"><?=$_SESSION['Header_Text'][0];?></h1>
      </div>
    </div>
  </section>
  <div class="bg-white">
        <div class="container">
          <div class="row">
                <div class="col col-12 col-lg-7">
                  <div class="produse-top-imgs"></div>
                  <a class="circle-produse-left" href="javascript:void(0)"><i class="produse_arrow_left"></i></a>
                  <div class="produse-slider">
                    <div class="produses-itemss">
                      <img src="/images/produse_window.png" alt="" class="img-fluid d-inline-block">
                      <img src="/images/produse_window.png" alt="" class="img-fluid d-inline-block">
                      <img src="/images/produse_window.png" alt="" class="img-fluid d-inline-block">
                      <img src="/images/produse_window.png" alt="" class="img-fluid d-inline-block">
                    </div>
                  </div>
                  <a class="circle-produse-right" href="javascript:void(0)"><i class="produse_arrow_right"></i></a>
                  <div class="produse-title top-120">
                    <img src="/images/produse-title.png" alt="">
                    <span>Kasetinių roletų privalumai </span>
                  </div>
                  <div class="produse-info"><?=$_SESSION['Header_Text'][1];?></div>
                  <ul class="produse-list">
                    <? if(isset($_SESSION['Header_Text'][2])) : ?>
                      <li><?=$_SESSION['Header_Text'][2];?></li>
                    <?endif;?>
                    <? if(isset($_SESSION['Header_Text'][3])) : ?>
                      <li><?=$_SESSION['Header_Text'][3];?></li>
                    <?endif;?>
                    <? if(isset($_SESSION['Header_Text'][4])) : ?>
                      <li><?=$_SESSION['Header_Text'][4];?></li>
                    <?endif;?>
                    <? if(isset($_SESSION['Header_Text'][5])) : ?>
                      <li><?=$_SESSION['Header_Text'][5];?></li>
                    <?endif;?>
                    <? if(isset($_SESSION['Header_Text'][6])) : ?>
                      <li><?=$_SESSION['Header_Text'][6];?></li>
                    <?endif;?>
                  </ul>
                  <div class="produse-title top-75">
                    <img src="/images/produse-title.png" alt="">
                    <span>Techniniai duomenys</span>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr><td>Sudedamosios dalys</td><td>aliuminio vamzdis, kasetė, šoninės juostelės, apatinis profilis, audinys, valdymo mechanizmas, grandinėlė, grandinėlės fiksatorius.</td></tr>
                        <tr><td>Valdymas</td><td>grandinėle, elektros pavara.</td></tr>
                        <tr><td>Tvirtinimo būdai</td><td>prie lango rėmo (gali būtų prisukama varžteliais arba klijuojama).</td></tr>
                        <tr><td>Maksimalus plotis</td><td>priklauso nuo pasirinkto audinio techninių galimybių.</td></tr>
                        <tr><td>Maksimalu aukštis</td><td>priklauso nuo pasirinkto audinio techninių galimybių.</td></tr>
                        <tr><td>Garantija</td><td>24mėn.</td></tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col col-12 col-lg-5">
                  <div class="konsultanto">
                    <div class="kaina">
                      <span class="kna">Kaina nuo:</span>
                      <span class="nuo">15 Euro <i>/m</i></span>
                    </div>
                    <div class="skambine">
                      <div class="phone">
                        <div class="phone-img">
                          <img src="/images/phone_skambine.png" alt="" width="21" height="21">
                        </div>
                        <div class="phone-text">
                          <span>skambinkite nemokamai</span>
                          <span>8 800 234-543-22</span>
                        </div>
                      </div>
                      <div class="mail">
                        <img src="/images/mail_skambine.png" alt="" width="21" height="17">
                        <span class="mail-label">support@website.com</span>
                      </div>
                      <div class="borders-lines">
                        <div class="border-line-1"></div>
                        <div class="border-label">arba</div>
                        <div class="border-line-2"></div>
                      </div>
                      <a href="#!" class="isk" data-toggle="modal" data-target="#pop-up">Konsultanto iškvietimas</a>
                    </div>
                  </div>
                  <div class="aud mx-auto">
                    <div class="ud-title">Audiniai</div>
                    <div class="ud-prefix">Pasirinkite iš daugybės mūsų <br> siūlomų audinių!</div>
                    <ul class="top-15">
                      <li><img src="/images/aud-1.png" alt="" width="100" height="67"></li>
                      <li><img src="/images/aud-2.png" alt="" width="100" height="67"></li>
                      <li><img src="/images/aud-3.png" alt="" width="100" height="67"></li>
                      <li><img src="/images/aud-4.png" alt="" width="100" height="67"></li>
                    </ul>
                    <ul>
                      <li><img src="/images/aud-5.png" alt=""></li>
                      <li><img src="/images/aud-6.png" alt=""></li>
                      <li><img src="/images/aud-7.png" alt=""></li>
                      <li><img src="/images/aud-8.png" alt=""></li>
                    </ul>
                    <a href="/audiniai/" class="visi">Visi audiniai</a>
                  </div>
                  <div class="komp mx-auto">
                    <div class="ud-title">Komponentu spalvos</div>
                    <ul class="top-15">
                      <li><div class="tooltip-komp">Auksinis azuolas</div><img src="/images/komp-img.png" alt=""></li>
                      <li><div class="tooltip-komp">Auksinis azuolas</div><img src="/images/komp-img.png" alt=""></li>
                      <li><div class="tooltip-komp">Auksinis azuolas</div><img src="/images/komp-img.png" alt=""></li>
                      <li><div class="tooltip-komp">Auksinis azuolas</div><img src="/images/komp-img.png" alt=""></li>
                    </ul>
                    <ul>
                      <li><div class="tooltip-komp">Auksinis azuolas</div><img src="/images/komp-img.png" alt=""></li>
                      <li><div class="tooltip-komp">Auksinis azuolas</div><img src="/images/komp-img.png" alt=""></li>
                      <li><div class="tooltip-komp">Auksinis azuolas</div><img src="/images/komp-img.png" alt=""></li>
                      <li><div class="tooltip-komp">Auksinis azuolas</div><img src="/images/komp-img.png" alt=""></li>
                    </ul>
                    <div class="komp-info"><span>Taip pat galimas dažymas pagal RAL <br> spalvų paletę.</span></div>
                  </div>
                </div>
          </div>
        </div>
  </div>
