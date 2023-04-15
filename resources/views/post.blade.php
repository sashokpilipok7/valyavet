@extends('layouts.main')

 @section('main-container')

			<div class="breadcrums">
				<a href="/" class="link breadcrums__link">Главная</a>
				<hr class="breadcrums__hr">
				<p class="breadcrums__text">Самые важные домашние животные</p>
			</div>
			</div>
        <section class="postInfoSection">
  <div class="container">
    <h3 class="title title-withDot">
      Самые важные <br />
      домашние животные
    </h3>
    <div class="postInfoSection__info">
      <div class="postInfoSection__row">
        <div class="postInfoSection__left">
          <img src="../../img/post1.jpg" alt="" class="image image-br" />
        </div>
        <div class="postInfoSection__right">
          <p class="text text-m">
            Процесс приручения дикого животного был чрезвычайно сложным,
            длительным, далеко не всегда успешно заканчивался. Но это было
            необходимо. Теперь трудно себе представить жизнь человека без таких
            великолепных поставщиков и помощников, какими являются домашние
            животные. <br /><br />

            В самого верного друга первым превратился волк. Долгие столетия
            злобный хищник превращался в ту самую домашнюю собаку, которая
            охраняет нас, помогает охотиться, воевать, разыскивать преступников,
            сопровождать незрячих и многое, многое ещё. Учёные утверждают, что
            первые волки привыкали к людям так давно, что 26 тысяч лет тому
            назад им уже спокойно поручали охранять маленьких детей, оставляемых
            в пещере, пока родители занимаются поисками еды. Во Франции есть
            пещера со следами ребёнка и собаки (или ещё волка), датируемыми
            именно этим столетием. Постепенно природа дикого животного под
            воздействием человека менялась, возникали всё новые и новые породы,
            можно сказать — узко специализированные. Различие бывшие волки
            получили и в величине, и в форме тела, в масти и во множестве других
            признаков. Дрессировке собаки поддаются превосходно. У них обоняние
            во множество раз лучше человеческого, поэтому они гораздо успешнее
            стерегут стадо, охраняют имущество, на севере перевозят людей и
            грузы, служат на границах и таможнях, а также связистами,
            подрывниками, разведчиками на войне, спасателями в горах и на водах.
            Людям собаки преданы всем сердцем, готовы погибнуть сами, чтобы
            спасти хозяина. Это касается любых, даже абсолютно декоративных
            пород. <br /><br />

            Это домашнее животное находится у человека на привилегированном
            положении как минимум десять тысяч лет. В дикой природе кошек,
            наверное, меньше, чем в неволе, где они чувствуют себя настоящими
            хозяевами. Как только древние люди перестали кочевать, начали жить
            оседло, возделывая поля, появилась необходимость в охране запасов.
          </p>
        </div>
      </div>
      <span class="postInfoSection__date"></span>
      <a href="#" class="button">Назад к статьям</a>
    </div>
  </div>
  <section class="newsSection">
  <div class="container">
    <h3 class="title title-withDot">Новости и акции</h3>
    <!-- <div class="newsSection__row">
      <div class="card">
        <img src="../../img/news1.jpg" alt="" class="card__image image" />
        <div class="card__content">
          <p class="text-s">Как часто нужно стричь когти своему коту?</p>
          <p class="text-s date">16.06.23</p>
        </div>
      </div>
      <div class="card">
        <img src="../../img/news2.jpg" alt="" class="card__image image" />
        <div class="card__content">
          <p class="text-s">О чём говорит сонливость питомца</p>
          <p class="text-s date">16.06.23</p>
        </div>
      </div>
      <div class="card">
        <img src="../../img/news3.jpg" alt="" class="card__image image" />
        <div class="card__content">
          <p class="text-s">Запишитесь на весенний чек-ап здоровья питомца</p>
          <p class="text-s date">16.06.23</p>
        </div>
      </div>
    </div> -->

    <div class="slider slider-light news-slider">
      <div class="slider__item">
        <div class="card">
          <img src="../../img/news1.jpg" alt="" class="card__image image" />
          <div class="card__content">
            <p class="text-s">Как часто нужно стричь когти своему коту?</p>
            <p class="text-s date">16.06.23</p>
            <a href="#" class="button newsSection__hoverButton"
              >Читать статью</a
            >
          </div>
        </div>
      </div>
      <div class="slider__item">
        <div class="card">
          <img src="../../img/news2.jpg" alt="" class="card__image image" />
          <div class="card__content">
            <p class="text-s">Как часто нужно стричь когти своему коту?</p>
            <p class="text-s date">16.06.23</p>
            <a href="#" class="button newsSection__hoverButton"
              >Читать статью</a
            >
          </div>
        </div>
      </div>
      <div class="slider__item">
        <div class="card">
          <img src="../../img/news2.jpg" alt="" class="card__image image" />
          <div class="card__content">
            <p class="text-s">Как часто нужно стричь когти своему коту?</p>
            <p class="text-s date">16.06.23</p>
            <a href="#" class="button newsSection__hoverButton"
              >Читать статью</a
            >
          </div>
        </div>
      </div>
      <div class="slider__item">
        <div class="card">
          <img src="../../img/news2.jpg" alt="" class="card__image image" />
          <div class="card__content">
            <p class="text-s">Как часто нужно стричь когти своему коту?</p>
            <p class="text-s date">16.06.23</p>
            <a href="#" class="button newsSection__hoverButton"
              >Читать статью</a
            >
          </div>
        </div>
      </div>
      <div class="slider__item">
        <div class="card">
          <img src="../../img/news2.jpg" alt="" class="card__image image" />
          <div class="card__content">
            <p class="text-s">Как часто нужно стричь когти своему коту?</p>
            <p class="text-s date">16.06.23</p>
            <a href="#" class="button newsSection__hoverButton"
              >Читать статью</a
            >
          </div>
        </div>
      </div>
      <div class="slider__item">
        <div class="card">
          <img src="../../img/news2.jpg" alt="" class="card__image image" />
          <div class="card__content">
            <p class="text-s">Как часто нужно стричь когти своему коту?</p>
            <p class="text-s date">16.06.23</p>
            <a href="#" class="button newsSection__hoverButton"
              >Читать статью</a
            >
          </div>
        </div>
      </div>
      <div class="slider__item">
        <div class="card">
          <img src="../../img/news2.jpg" alt="" class="card__image image" />
          <div class="card__content">
            <p class="text-s">Как часто нужно стричь когти своему коту?</p>
            <p class="text-s date">16.06.23</p>
            <a href="#" class="button newsSection__hoverButton"
              >Читать статью</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</section>

	</main>
@endsection
