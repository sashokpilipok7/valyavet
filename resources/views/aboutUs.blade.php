@extends('layouts.main')

 @section('main-container')

 <?php
 $pages = DB::table('pages')->get();

foreach ($pages as $page)
{
    if($page->name == 'aboutUs'){

    ?>
			<div class="breadcrums">
				<a href="/" class="link breadcrums__link">Главная</a>
				<hr class="breadcrums__hr">
				<p class="breadcrums__text"><?= $page->title ?></p>
			</div>
			</div>
		<section class="aboutSection">
  <div class="container aboutSection__container">
    <div class="aboutSection__left">
      <img src="../../img/about-line.png" alt="" class="aboutSection__line" />
      <h2 class="title title-xl">
        <?= $page->h1; ?>
      </h2>
      <p class="text text-xs">
        <?= $page->content;?>
      </p>
      <div class="textGroup">
        <div class="text text-s">
          Профессиональные<br />
          врачи с огромным<br />
          опытом
        </div>
        <div class="text text-s">
          Новое<br />
          современное<br />
          оборудование
        </div>
        <div class="text text-s">
          Безграничная<br />
          любовь и забота<br />
          о животных
        </div>
      </div>
      <div class="aboutSection__ourMission">
        <div class="text text-xl">
          НАША миссия:
          <hr class="aboutSection__hr" />
        </div>
        <p class="text text-xs">
          Вывести качество жизни людей и их питомцев на новый уровень,
          предоставляя услуги ветеринарной помощи безупречного качества при
          высоком уровне сервиса, прозрачности процессов и с заботой как о
          питомце, так и о клиенте.
        </p>
      </div>
    </div>
    <div class="aboutSection__right">
      <img
        src="../../img/about-us-1.jpg"
        alt=""
        class="image image-bl aboutSection__img-big"
      />
      <img
        src="../../img/about-us-2.jpg"
        alt=""
        class="image aboutSection__img-small"
      />
      <img
        src="../../img/about-us-3.jpg"
        alt=""
        class="image aboutSection__img-small"
      />
      <img
        src="../../img/about-us-4.jpg"
        alt=""
        class="image aboutSection__img-small"
      />
    </div>
  </div>
</section>

		<section class="weHelp">
  <div class="container weHelp__container">
    <h2 class="title title-withDot">Каким животным мы помогаем</h2>
    <p class="text weHelp__text">
      Наша ветеринарная клиника многопрофильная, поэтому для любого вашего
      питомца мы подберём того врача, который знает, как найти к нему подход и
      сможет назначить подходящее лечение
    </p>
    <div class="weHelp__cardsWrapper">
      <div class="weHelp__card">
        <img src="../../img/cat.jpg" alt="" class="image" />
        <p class="text text-xs">кошки</p>
      </div>
      <div class="weHelp__card">
        <img src="../../img/dog.jpg" alt="" class="image" />
        <p class="text text-xs">собаки</p>
      </div>
      <div class="weHelp__card">
        <img src="../../img/rabbit.jpg" alt="" class="image" />
        <p class="text text-xs">кролики</p>
      </div>
      <div class="weHelp__card">
        <img src="../../img/mouse.jpg" alt="" class="image" />
        <p class="text text-xs">мыши</p>
      </div>
      <div class="weHelp__card">
        <img src="../../img/hamster.jpg" alt="" class="image" />
        <p class="text text-xs">хомяки</p>
      </div>
      <div class="weHelp__card">
        <img src="../../img/ferret.jpg" alt="" class="image" />
        <p class="text text-xs">хорьки</p>
      </div>
    </div>
  </div>
</section>

<?php }}?>

@include('layouts.form')


	</main>
	@endsection
