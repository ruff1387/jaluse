<?php
class produseController {

  public function view ( $view_id ) {

      $products_text = array ( 
        1 => array(
          0 => 'Kasetiniai roletai',
          1 => 'Ieškote patikimo, funkcionalaus ir praktiško sprendimo savo namų langams? Tuomet kasetiniai roletai yra puikus pasirinkimas. Universalūs, modernaus dizaino kasetiniai roletai tinka prie bet kokio interjero.',
          2 => 'Kasetinio roleto mechanizmas paslėptas kasetės, montuojamos prie stiklo, viduje;',
          3 => 'Roletas tvirtinamas prie stiklo, todėl nepažeidžiamas lango rėmas;',
          4 => 'Specialios aliumininės juostos nukreipia audinį ir išlaiko jį prigludusį prie stiklo;',
          5 => 'Audinys lieka prigludęs prie stiklo net atidarius langą;',
          6 => 'Kokybiškas audinys yra patvarus, jį lengva prižiūrėti ir valyti.'
        ),
        2 => array(
          0 => 'Klasikiniai roletai',
          1 => 'Ieškote sprendimo, galinčio padėti apsisaugoti nuo nepageidaujamos saulės šviesos ir kartu sukursiančio namuose jaukų interjerą? Tuomet klasikiniai roletai yra idealus pasirinkimas. Klasikinis sprendimas puikiai tinka bet kokiam namų interjerui.',
          2 => 'Naudojama kokybiška, impregnuota ir todėl atspari drėgmei ir purvui medžiaga;',
          3 => 'Didelis audinių pasirinkimas leidžia kurti unikalų namų interjerą;',
          4 => 'Roletai lengvai pritaikomi bet kokio dydžio ir tipo langams ar nišoms;',
          5 => 'Montuojami prie lango rėmo, sienų ar lubų;',
          6 => 'Nesudėtingas valdymas grandinėle, spyruokle arba elektrine pavara.'
        ),
        3 => array(
          0 => 'Diena naktis roletai',
          1 => 'Ieškote modernaus ir estetiško sprendimo, leidžiančio reguliuoti pro langą patenkančios šviesos srautą? Diena naktis roletai puikus, patogus, praktiškas ir funkcionalus pasirinkimas. Roleto konstrukcija yra lengvai montuojama ir puikiai tiks bet kokioje aplinkoje.',
          2 => 'Išskirtinės konstrukcijos roletas pagamintas iš dvigubo audinio su permatomomis ir nepermatomomis juostomis;',
          3 => 'Šviesos srautas reguliuojamas keičiant audinio juostų persidengimą',
          4 => 'Galima pasirinkti norimą mechanizmo tipą: kasetinį ar klasikinį;',
          5 => 'Kokybiškos medžiagos užtikrina ilgaamžiškumą ir nesudėtingą priežiūrą;',
          6 => 'Lengvai valdomas ir bet kokiam langui pritaikomas mechanizmas;'
        ),
        4 => array(
          0 => 'Roletai nuo saulės',
          1 => 'Ieškote sprendimo, padėsiančio apsisaugoti nuo nepageidaujamos saulės karštą vasaros dieną? Roletai nuo saulės - tinkamiausias sprendimas, leidžiantis sumažinti infraraudonųjų spindulių patekimą į patalpą.',
          2 => 'Specialūs audiniai dengti saulę atspindinčia medžiaga užtikrina, kad nepageidaujama šiluma nepatektų į patalpas;',
          3 => 'Pritemdoma akinanti šviesa, todėl patalpoje nereikia prisimerkti bei išvengiama atspindžių kompiuterio ar televizoriaus ekrane;',
          4 => 'Specialus audinys leidžia matyti vaizdą lauke;',
          5 => 'Sprendimas gali būti realizuotas su bet kokiu roletų mechanizmu, todėl lengvai pritaikomas visų tipų langams;',
          6 => 'Nesudėtingas valdymas grandinėle, spyruokliniu mechanizmu ar elektrine pavara.'
        ),
        5 => array(
          0 => 'Foto roletai',
          1 => 'Klasikiniai audinių raštai ir standartinė spalvų paletė nesuderinama su Jūsų interjero vizija ir norais? Foto roletai yra puikus pasirinkimas ieškantiems išskirtinumo, originalumo ir jaukumo. Tai modernus langų dekoravimo būdas, padėsiantis sukurti išskirtinį būsto interjerą.',
          2 => 'Pasirinktas paveikslas perkeliamas ant norimo audinio;',
          3 => 'Galima rinktis audinio rūšį ir tipą – nuo standartinio iki permatomo ar pilnai užtamsinančio patalpą;',
          4 => 'Galimybė sukurti išskirtinį būsto interjerą ar patalpinti įmonės reklamą;',
          5 => 'Galima pasirinkti klasikinį ar kasetinį mechanizmą;',
          6 => 'Lengvai montuojami ir tinka bet kokio tipo langams;'
        ),
        6 => array(
          0 => 'Roletai stoglangiams',
          1 => 'Vadovaudamiesi šiuolaikinio interjero tendencijomis palėpę pavertėte darbo kambariu, kūrybine ar poilsio erdve, tačiau nežinote, kaip papuošti stoglangius? Roletai stoglangiams puikus ir estetiškas sprendimas, padėsiantis reguliuoti patenkančios šviesos srautą.',
          2 => 'Roletų stoglangiams sistema sklandžiai veikia ant pasvirusių plokštumų;',
          3 => 'Šonuose montuojamos kreipiančiosios prilaiko audinį, todėl jis išlieka prigludęs prie stiklo;',
          4 => 'Roleto valdymo mechanizmas patogus ir pritaikytas net labai aukštiems stoglangiams;',
          5 => 'Kokybiškos medžiagos užtikrina ilgaamžiškumą ir patogią priežiūrą;',
          6 => 'Galima rinktis įvairių tipų audinius, kurie atrodo estetiškai ir apsaugo nuo nepageidaujamos šviesos.'
        ),
        7 => array(
          0 => 'Roletai iš apačios į viršų',
          1 => 'Pabodo standartiniai roletų sprendimai, kuriuose mechanizmas montuojamas lango viršuje? Tuomet galite išbandyti roletus, valdomus iš apačios į viršų. Tai originalus ir netikėtas sprendimas, kuriuo paįvairinsite savo būsto interjerą.',
          2 => 'Roleto mechanizmas montuojamas lango apačioje, todėl sprendimas puikiai tinka butams, esantiems pirmame aukšte;',
          3 => 'Mechanizmas paslėptas po specialiu aliuminio profiliu, kuris atrodo estetiškai;',
          4 => 'Roletas valdomas rankenėle, todėl medžiagą galima fiksuoti bet kokiame aukštyje;',
          5 => 'Šonuose įmontuotos kreipiančiosios išlaiko audinį prigludusį prie stiklo;',
          6 => 'Naudojamos kokybiškos ir ilgaamžės medžiagos, todėl jas lengva prižiūrėti ir valyti.'
        ),
        8 => array(
          0 => 'Roletai DUO',
          1 => 'Ieškote universalaus, modernaus ir funkcionalaus sprendimo savo langams, leidžiančio jaukiai jaustis tiek dieną, tiek naktį? Roletai DUO yra tinkamiausias sprendimas, kadangi yra ir praktiškas, bet ir estetiškas.',
          2 => 'Dviguba kasetė, turinti du valdymo mechanizmus, todėl galima pasirinkti du audinius;',
          3 => 'Galima rinktis du audinius – vieną dienai, kitą – nakčiai;',
          4 => 'Abu audiniai gali būti naudojami tiek vienu metu, tiek atskirai.',
          5 => 'Estetiškai atrodanti kasetė ir nesudėtingas valdymas rankenėle užtikrina funkcionalumą ir paprastumą;',
          6 => 'Kokybiški audiniai nereikalauja daug priežiūros.'
        ),
        9 => array(
          0 => 'Horizontalios žaliuzės',
          1 => 'Ieškote funkcionalumo ir estetikos derinio, kuriuo papuošite savo namų ar biuro langus? Horizontalios žaliuzės – puikus pasirinkimas, norintiems patogiai reguliuoti patalpos apšvietimą ir kartu sukurti nepriekaištingą įvaizdį.',
          2 => 'Galima patogiai reguliuoti į patalpą patenkančios šviesos srautą arba visiškai užtamsinti patalpą;',
          3 => 'Nesudėtingas valdymas rankenėle, virvele arba grandinėle;',
          4 => 'Žaliuzes galima pakelti ir fiksuoti norimoje padėtyje;',
          5 => 'Gali būti montuojamos ant lango, sienos arba lubų;',
          6 => 'Ilgaamžės ir patvarios medžiagos užtikrina atsparumą drėgmei, saulės spinduliams.'
        ),
        10 => array(
          0 => 'Vertikalios žaliuzės',
          1 => 'Siekiate visapusiškos šviesos kontrolės biure ar namuose, tačiau nežinote kokį sprendimą pasirinkti? Vertikalios žaliuzės yra puikus sprendimas, pritaikomas įvairios paskirties patalpose.',
          2 => 'Vertikalios juostos sukasi 180 laipsnių kampu, todėl galima nesudėtingai reguliuoti šviesos srautą;',
          3 => 'Valdant virvele žaliuzes galima sutraukti ir atidengti dalį lango;',
          4 => 'Gali būti tvirtinamos prie sienų ar lubų, todėl vertikalias žaliuzės tinka ir erdvėms atskirti;',
          5 => 'Audinys atsparus drėgmei ir saulės spinduliams, be to jį galima nesudėtingai išskalbti;',
          6 => 'Didelis audinių pasirinkimas leidžia priderinti žaliuzes prie įmantriausio interjero.'
        ),
        11 => array(
          0 => 'Medinės žaliuzės',
          1 => 'Siekiate namuose susikurti jaukų ir prabangų interjerą? Nesuklysite langų dekoravimui pasirinkę medines žaliuzes. Tai ilgaamžis ir prabangus sprendimas, suteiksiantis Jūsų būstui jaukaus solidumo.',
          2 => 'Žaliuzių juostelėms gaminti naudojama kokybiška mediena, todėl jos išlaiko savo formą;',
          3 => 'Medinės juostelės dengiamos specialiu laku, kuris padeda apsaugoti medieną nuo išblukimo ir drėgmės;',
          4 => 'Medieną nesudėtinga prižiūrėti – galima valyti drėgna šluoste;',
          5 => 'Juostelių pasvirimo kampas reguliuojamas rankenėle, o virvelė leidžia fiksuoti žaliuzes tam tikrame aukštyje;',
          6 => 'Nesunkiai pritaikomos prie bet kokio interjero.'
        ),
        12 => array(
          0 => 'Plisuotos žaliuzės',
          1 => 'Ieškote būdo madingai papuošti savo namų interjerą arba nežinote, kaip apipavidalinti nestandartinių formų langus? Plisuotos žaliuzės padės šias problemas išspręsti, bei suteiks Jūsų būstui elegancijos, jaukumo ir žaismingumo.',
          2 => 'Tvirtinamos ant stiklo arba lango rėmo, todėl netrukdo, kuomet norite atidaryti langą;',
          3 => 'Galima pasirinkti, kurią lango dalį norite uždengti;',
          4 => 'Lengvai tvirtinamos prie lango, bet to, plisuotas žaliuzes nesudėtinga pritaikyti bet kokios formos langams;',
          5 => 'Kokybiški impregnuoti audiniai neblunka, todėl prižiūrėti nesudėtinga, galima skalbti;',
          6 => 'Pakeltos žaliuzės užima nedaug vietos, todėl neblokuoja matomumo'
        ),
        13 => array(
          0 => 'Tinkleliai rėmeliai',
          1 => 'Įkyrėjo į kambarį atskrendantys vabzdžiai, kuomet šiltą vasaros vakarą leidžiate prie atviro lango? Tinkleliai rėmeliai yra puikus sprendimas, padėsiantis apsisaugoti nuo uodų ir kitų vabzdžių.',
          2 => 'Tinkleliai rėmeliai puikiai apsaugo nuo vabzdžių pateikimo į patalpą;',
          3 => 'Rėmelis lengvai montuojamas prie bet kokio lango rėmo specialiais laikikliais;',
          4 => 'Kokybiškas aliuminio profilis atsparus atmosferos poveikiui, todėl galima naudoti bet kokiu oru;',
          5 => 'Jeigu rėmelis tampa nebereikalingas, jį galima lengvai nuimti, o prisireikus – vėl uždėti;',
          6 => 'Rėmo spalvą galite pasirinkti iš kelių variantų, todėl galima priderinti prie lango'
        ),
        14 => array(
          0 => 'Tinkleliai roletai',
          1 => 'Ieškote patogaus sprendimo, padėsiančio apsisaugoti nuo vabzdžių šiltą vasaros vakarą? Tuomet tinkleliai roletai yra puikus pasirinkimas, tinkantis ne tik langams, tačiau ir terasos bei balkono durims.',
          2 => 'Tinka naudoti tiek ant langų, tiek ant durų;',
          3 => 'Roleto mechanizmas paslėptas estetiškai atrodančios kasetės viduje, kuri montuojama išorinėje lango ar durų pusėje;',
          4 => 'Nereikia nuimti žiemos metu, kadangi uždara kasetė apsaugo tinklelį roletą nuo aplinkos poveikio;',
          5 => 'Galima rinktis iš kelių spalvų variantų;',
          6 => 'Ilgaamžė sistema, kuri tarnaus ne vienerius metus'
        ) );
      $pid = current ( $view_id );     
      if(!empty($pid)){
        $_SESSION['Header_Text'] = $products_text[$pid];
      }
      else{
        $_SESSION['Header_Text'] = $products_text[1];
      }
      return 1;
  }
}
?>
