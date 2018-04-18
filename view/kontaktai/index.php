<script src="https://api-maps.yandex.ru/2.1/?lang=en_US" type="text/javascript"></script>
  <script type="text/javascript">

      ymaps.ready(init);
      var myMap, 
      myPlacemark,
      myPlacemark2,
      myPlacemark3,
      myPlacemark4,
      myPlacemark5;

      function init(){ 
        myMap = new ymaps.Map("map", {
          center: [55.38787290, 23.58638670],
          zoom: 7
        }); 



        myPlacemark = new ymaps.Placemark([55.75442267, 21.15147496], {
          hintContent: 'Akmenų g. 5 Klaipeda',
          balloonContent: 'Akmenų g. 5 Klaipeda'},{iconLayout: 'default#image',iconImageHref: '/images/logo-map.png',iconImageSize: [123, 128],});
        
        myPlacemark2 = new ymaps.Placemark([54.64418401, 25.12674550], {
          hintContent: 'Vilnius Lentvario gatvė 3', 
          balloonContent: 'Vilnius Lentvario gatvė 3'},{iconLayout: 'default#image',iconImageHref: '/images/logo-map.png',iconImageSize: [123, 128],});

        myPlacemark3 = new ymaps.Placemark([54.87190104, 23.94771550], {
          hintContent: 'Drobės g. 62 Kaunas', 
          balloonContent: 'Drobės g. 62 Kaunas'},{iconLayout: 'default#image',iconImageHref: '/images/logo-map.png',iconImageSize: [123, 128],});

        myPlacemark4 = new ymaps.Placemark([55.95389600, 23.31570100], {
          hintContent: 'J. Basanavičiaus g. 144A, Šiauliai', 
          balloonContent: 'J. Basanavičiaus g. 144A, Šiauliai'},{iconLayout: 'default#image',iconImageHref: '/images/logo-map.png',iconImageSize: [123, 128],});

        myPlacemark5 = new ymaps.Placemark([55.72815450, 24.36975750], {
          hintContent: 'J. Janonio g. Panevėžys', 
          balloonContent: 'J. Janonio g. Panevėžys'},{iconLayout: 'default#image',iconImageHref: '/images/logo-map.png',iconImageSize: [123, 128],});

        myMap.geoObjects.add(myPlacemark);
        myMap.geoObjects.add(myPlacemark2);
        myMap.geoObjects.add(myPlacemark3);
        myMap.geoObjects.add(myPlacemark4);
        myMap.geoObjects.add(myPlacemark5);
      }

</script>

<section class="head-page">
    <div class="container">
      <div class="row">
        <h1 class="title-head-page">Kontaktai</h1>
      </div>
    </div>
  </section>
  <div class="bg-white">
        <div class="container">
          <div class="row">
              <h5 class="contact-title">MES DIRBAME VISOJE LIETUVOJE IR LATVIJOJE.</h5>
              <h6 class="contact-pre">Jei turite klausimų dėl savo namo apšiltinimo ir Jums reikia specialistų patarimo, nedvejokite ir
susisiekite su mumis, mūsų konsultantų komanda visada pasiruošusi padėti Jums.</h6>
          </div>
          <div class="row" style="padding-bottom: 115px;">
            <div class="col col-12 col-lg-4">
              <div class="row">
                <div class="contact-phone">
                  <span>8 (800) 234-543-22</span>
                </div>
                <div class="contact-mail">
                  <span>support@website.com</span>
                </div>
                <div class="contact-pin">
                  <span>Islandijos pl. 209, Kaunas</span>
                </div>
                <div class="col col-12">
                  <div class="row">
                    <div class="tbl-header">Miestai</div>
                    <div class="table-responsive table-phones">
                      <table>
                        <tbody>
                          <tr>
                            <td>Bendras</td>
                            <td>+370 609 74777</td>
                          </tr>
                          <tr>
                            <td>Vilnius</td>
                            <td>+370 616 36366</td>
                          </tr>
                          <tr>
                            <td>Kaunas</td>
                            <td>+370 620 97914</td>
                          </tr>
                          <tr>
                            <td>Klaipėda</td>
                            <td>+370 686 85003</td>
                          </tr>
                          <tr>
                            <td>Panevėžys</td>
                            <td>+370 686 85003</td>
                          </tr>
                          <tr>
                            <td>Šiauliai</td>
                            <td>+370 614 23976</td>
                          </tr>
                          <tr>
                            <td>Alytus</td>
                            <td>+370 671 17028</td>
                          </tr>
                          <tr>
                            <td>Marijampolė</td>
                            <td>+370 614 28965</td>
                          </tr>
                          <tr>
                            <td>Ryga</td>
                            <td>+371 200 23000</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-12 col-lg-7 offset-lg-1">
              <div class="row pt-5 d-none" id="loader3">
                <div class="w-100" style="margin-top: 180px;">
                  <div class="loader mx-auto" style="padding-bottom: 60px;"></div>
                </div>
              </div>
              <div class="row collapsed-contact-input d-none" id="C-Collapsed">
                  <div class="w-100" style="margin-top: 100px;">
                    <img src="/images/success-modal-block.png" alt="" class="d-block mx-auto">
                  </div>
                  <div class="w-100">
                    <div class="extra-title-success text-center">Jūsų laiškas sėkmingai išsiųstas!</div>
                    <div class="extra-pre-success text-center mx-auto">Mūsų specialistas susisieks su Jumis artimiausiu metu sutarti atvykimo laiką. </div>
                  </div>
              </div>
              <div class="row" id="C-Input">
                <div class="contact-inputs">
                  <div class="row">
                    <div class="input-group left-contact-input-15">
                      <input type="text" placeholder="Vardas" id="C_Vardas">
                    </div>
                    <div class="input-group left-contact-input-30">
                      <input type="text" placeholder="Telefonas" id="C_Telefonas">
                    </div>
                  </div>
                  <div class="row" style="padding-top: 15px;">
                    <div class="input-group left-contact-input-15">
                      <input type="text" placeholder="El. paštas" id="C_ElPastas">
                    </div>
                    <div class="input-group left-contact-input-30">
                      <input type="text" placeholder="Miestas" id="C_Miestas">
                    </div>
                  </div>
                  <div class="row" style="min-height: 210px;">
                    <div class="input-group group-area">
                      <textarea name="zin" id="" cols="30" rows="10" placeholder="Žinutės tekstas" id="C_Comment"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <a href="#!" class="siu">Siųsti</a>
                    <div class="ten-min"><span>Mūsų specialistas tau atsakys per 10 minučių</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
  <div class="w-100">
    <div id="map" style="min-height: 330px"></div>
  </div>
