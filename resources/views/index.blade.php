@extends('layouts.main2',  ['title' => 'Главнач', 'description' => 'Когда здоровье вашего питомца важнее всего остального' ])

 @section('main-container')

 {{-- <div class="mainSection__lineBlock mainSection__lineBlock-mobile">
    @foreach (\App\Models\SocialLink::all() as $socialLink)
      <a href="{{$socialLink->link}}"
          ><img src="../../img/{{$socialLink->title}}.svg" alt="" class="icon"
      /></a>
    @endforeach
  </div>
  <div class="container mainSection__container">
    <div class="mainSection__lineBlock mainSection__lineBlock-desctop">
        @foreach (\App\Models\SocialLink::all() as $socialLink)
            <a href="{{$socialLink->link}}"
                ><img src="../../img/{{$socialLink->title}}.svg" alt="" class="icon"
            /></a>
        @endforeach
    </div>
    <div class="mainSection__left">
      <p class="text text-xs">
        Когда здоровье вашего питомца <br />
        важнее всего остального
        <img
          src="../../img/mainLineForText.png"
          alt=""
          class="mainLineForText"
        />
      </p>
      <h2 class="title title-xl">
        Ветеринарная <br />
        клиника <span>VоLYAVET</span>
      </h2>
      <button class="button">Записаться на приём</button>
      <div class="textGroup">
        <div class="text">Профессиональные врачи с огромным опытом</div>
        <div class="text">Новое современное оборудование</div>
        <div class="text">Безграничная любовь и забота о животных</div>
      </div>
    </div>
    <div class="mainSection__right">
      <img
        src="../../img/main.png"
        alt=""
        class="image image-bl mainSection__img"
      />
      <img
        src="../../img/main-tablet.png"
        alt=""
        class="image image-bl mainSection__imgTablet"
      />
      <img
        src="../../img/main-mobile.png"
        alt=""
        class="image image-bl mainSection__imgMobile"
      />
    </div>
  </div>
</section>

		<section class="servicesSection">
  <div class="container">
    <h3 class="title title-withDot">Услуги</h3>
    <p class="text">
      Мы круглосуточно на связи и готовы оказать качественную медицинскую помощь
      вашему любимцу в любое время суток
    </p>
    <div class="servicesSection__cardGroup">
      <div class="cardService">
        <img src="../../img/service1.jpg" alt="" class="cardImg" />
        <p class="cardTitle">Стационар</p>
      </div>
      <div class="cardService">
        <img src="../../img/service2.jpg" alt="" class="cardImg" />
        <p class="cardTitle">Анализы</p>
      </div>
      <div class="cardService">
        <img src="../../img/service3.jpg" alt="" class="cardImg" />
        <p class="cardTitle">Хирургия</p>
      </div>
      <div class="cardService">
        <img src="../../img/service4.jpg" alt="" class="cardImg" />
        <p class="cardTitle">Терапия</p>
      </div>
      <div class="cardService">
        <img src="../../img/service5.jpg" alt="" class="cardImg" />
        <p class="cardTitle">Вакцинации</p>
      </div>
      <div class="cardService">
        <img src="../../img/service6.jpg" alt="" class="cardImg" />
        <p class="cardTitle">Стоматология</p>
      </div>
    </div>
    <button class="button">Список всех услуг</button>
  </div>
</section>

		<section class="teamSection" id="team">
  <div class="container">
    <h3 class="title title-withDot">Наша команда</h3>
    <div class="slider team-slider">
      <div class="slider__item">
        <img src="../../img/team1.jpg" alt="" class="slider__img" />
        <div class="slider__textBlock">
          <h5 class="teamSection__itemTitle">Анна Голованова</h5>
          <p class="teamSection__itemText">
            Главный врач, ветеринарныйврач-терапевт, хирург, стоматолог
          </p>
          <span class="teamSection__itemSpan">Стаж - 10+ лет</span>
        </div>
        <div class="teamSection__hoverItem">
          <div class="slider__textBlock">
            <h5 class="teamSection__itemTitle">Анна Голованова</h5>
            <p class="teamSection__itemText">
              Главный врач, ветеринарныйврач-терапевт, хирург, стоматолог
            </p>
            <span class="teamSection__itemSpan">Стаж - 10+ лет</span>
          </div>
          <div class="teamSection__contentItem">
            Два высших образования: ветеринарное и биологическое, на постоянной
            основе повышает квалификацию. Имеет научные статьи. <br />
            <br />
            Сейчас Анна – владелица и главный врач клиники. Начала работать по
            специализации в Московском зоопарке ещё будучи студенткой.
          </div>
          <a href="/#feedback_form" class="button">Записаться</a>
        </div>
      </div>
      <div class="slider__item">
        <img src="../../img/team2.jpg" alt="" class="slider__img" />
        <div class="slider__textBlock">
          <h5 class="teamSection__itemTitle">Виктория Целобёнок</h5>
          <p class="teamSection__itemText">
            Ветеринарный врач - терапевт,хирург, специалист УЗД,преподаватель
          </p>
          <span class="teamSection__itemSpan">Стаж - 10+ лет</span>
        </div>
      </div>
      <div class="slider__item">
        <img src="../../img/team3.jpg" alt="" class="slider__img" />
        <div class="slider__textBlock">
          <h5 class="teamSection__itemTitle">Виктория Целобёнок</h5>
          <p class="teamSection__itemText">
            Ветеринарный врач - терапевт,хирург, специалист УЗД,преподаватель
          </p>
          <span class="teamSection__itemSpan">Стаж - 10+ лет</span>
        </div>
      </div>
      <div class="slider__item">
        <img src="../../img/team4.jpg" alt="" class="slider__img" />
        <div class="slider__textBlock">
          <h5 class="teamSection__itemTitle">Виктория Целобёнок</h5>
          <p class="teamSection__itemText">
            Ветеринарный врач - терапевт,хирург, специалист УЗД,преподаватель
          </p>
          <span class="teamSection__itemSpan">Стаж - 10+ лет</span>
        </div>
      </div>
      <div class="slider__item">
        <img src="../../img/team4.jpg" alt="" class="slider__img" />
        <div class="slider__textBlock">
          <h5 class="teamSection__itemTitle">Виктория Целобёнок</h5>
          <p class="teamSection__itemText">
            Ветеринарный врач - терапевт,хирург, специалист УЗД,преподаватель
          </p>
          <span class="teamSection__itemSpan">Стаж - 10+ лет</span>
        </div>
      </div>
      <div class="slider__item">
        <img src="../../img/team4.jpg" alt="" class="slider__img" />
        <div class="slider__textBlock">
          <h5 class="teamSection__itemTitle">Виктория Целобёнок</h5>
          <p class="teamSection__itemText">
            Ветеринарный врач - терапевт,хирург, специалист УЗД,преподаватель
          </p>
          <span class="teamSection__itemSpan">Стаж - 10+ лет</span>
        </div>
      </div>
      <div class="slider__item">
        <img src="../../img/team4.jpg" alt="" class="slider__img" />
        <div class="slider__textBlock">
          <h5 class="teamSection__itemTitle">Виктория Целобёнок</h5>
          <p class="teamSection__itemText">
            Ветеринарный врач - терапевт,хирург, специалист УЗД,преподаватель
          </p>
          <span class="teamSection__itemSpan">Стаж - 10+ лет</span>
        </div>
      </div>
      <div class="slider__item">
        <img src="../../img/team4.jpg" alt="" class="slider__img" />
        <div class="slider__textBlock">
          <h5 class="teamSection__itemTitle">Виктория Целобёнок</h5>
          <p class="teamSection__itemText">
            Ветеринарный врач - терапевт,хирург, специалист УЗД,преподаватель
          </p>
          <span class="teamSection__itemSpan">Стаж - 10+ лет</span>
        </div>
      </div>
    </div>
  </div>
</section>

		<section class="whenSection">
  <div class="container">
    <h3 class="title title-withDot">Когда стоит обратиться в клинику ?</h3>
    <p class="text">
      Мы круглосуточно на связи и готовы оказать качественную медицинскую помощь
      вашему любимцу в любое время суток
    </p>
    <div class="whenSection__row">
      <div class="whenSection__left">
        <img
          src="../../img/when.png"
          alt=""
          class="image image-br whenSection__desctop"
        />
        <img
          src="../../img/when-tablet.png"
          alt=""
          class="image image-br whenSection__tablet"
        />
        <img
          src="../../img/when-mobile.png"
          alt=""
          class="image image-br whenSection__mobile"
        />
      </div>
      <div class="whenSection__right">
        <?php
             $evidences = DB::table('evidence')->get();

            foreach ($evidences as $evid)
            {?>
                 <div class="whenSection__item"><?= $evid->title;?></div>
            <?php }?>
        <button class="button whenSection__allButton">
          смотреть все симптомы
        </button>
        <div class="fullWidth">
          <a href="/#feedback_form" class="button whenSection__linkButton">
            Записаться на приём
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('layouts.news');

		<section class="userFeedbacksSection" id="feedback">
  <div class="container">
    <h3 class="title title-withDot">Отзывы</h3>
    <button class="userFeedbacksSection__button">
      <img src="../../img/yandex.svg" alt="" /> Яндекс.Карты 5.0
    </button>

    <div class="slider slider-light feedbacks-slider">
      <div class="userFeedbacksSection__card">
        <div class="userFeedbacksSection__userRow">
          <div class="userFeedbacksSection__userIcon">AI</div>
          <div class="userFeedbacksSection__userInfo">
            <div class="userFeedbacksSection__stars">
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
            </div>
            <h5 class="userFeedbacksSection__userName">Andrey Ivashko</h5>
            <p class="userFeedbacksSection__date">12 февр. 2021</p>
          </div>
        </div>
        <p class="userFeedbacksSection__feedbackText">
          VolyaVet – это больше, чем просто ветеринарная клиника. Мы – семья,
          ваша поддержка и опора во всём, что связано с вашими питомцами. У нас
          индивидуальный подход к каждому пациенту и владельцу. Здесь выслушают,
          поддержат и помогут, ведь мы понимаем ту связь...
        </p>
        <a href="#" class="userFeedbacksSection__more">Подробнее</a>
        <a href="#" class="userFeedbacksSection__linkToMap"
          >Отзыв из Яндекс.Карт</a
        >
      </div>
      <div class="userFeedbacksSection__card">
        <div class="userFeedbacksSection__userRow">
          <div class="userFeedbacksSection__userIcon">AI</div>
          <div class="userFeedbacksSection__userInfo">
            <div class="userFeedbacksSection__stars">
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
            </div>
            <h5 class="userFeedbacksSection__userName">Andrey Ivashko</h5>
            <p class="userFeedbacksSection__date">12 февр. 2021</p>
          </div>
        </div>
        <p class="userFeedbacksSection__feedbackText">
          VolyaVet – это больше, чем просто ветеринарная клиника. Мы – семья,
          ваша поддержка и опора во всём, что связано с вашими питомцами. У нас
          индивидуальный подход к каждому пациенту и владельцу. Здесь выслушают,
          поддержат и помогут, ведь мы понимаем ту связь...
        </p>
        <a href="#" class="userFeedbacksSection__more">Подробнее</a>
        <a href="#" class="userFeedbacksSection__linkToMap"
          >Отзыв из Яндекс.Карт</a
        >
      </div>
      <div class="userFeedbacksSection__card">
        <div class="userFeedbacksSection__userRow">
          <div class="userFeedbacksSection__userIcon">AI</div>
          <div class="userFeedbacksSection__userInfo">
            <div class="userFeedbacksSection__stars">
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
            </div>
            <h5 class="userFeedbacksSection__userName">Andrey Ivashko</h5>
            <p class="userFeedbacksSection__date">12 февр. 2021</p>
          </div>
        </div>
        <p class="userFeedbacksSection__feedbackText">
          VolyaVet – это больше, чем просто ветеринарная клиника. Мы – семья,
          ваша поддержка и опора во всём, что связано с вашими питомцами. У нас
          индивидуальный подход к каждому пациенту и владельцу. Здесь выслушают,
          поддержат и помогут, ведь мы понимаем ту связь...
        </p>
        <a href="#" class="userFeedbacksSection__more">Подробнее</a>
        <a href="#" class="userFeedbacksSection__linkToMap"
          >Отзыв из Яндекс.Карт</a
        >
      </div>
      <div class="userFeedbacksSection__card">
        <div class="userFeedbacksSection__userRow">
          <div class="userFeedbacksSection__userIcon">AI</div>
          <div class="userFeedbacksSection__userInfo">
            <div class="userFeedbacksSection__stars">
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
            </div>
            <h5 class="userFeedbacksSection__userName">Andrey Ivashko</h5>
            <p class="userFeedbacksSection__date">12 февр. 2021</p>
          </div>
        </div>
        <p class="userFeedbacksSection__feedbackText">
          VolyaVet – это больше, чем просто ветеринарная клиника. Мы – семья,
          ваша поддержка и опора во всём, что связано с вашими питомцами. У нас
          индивидуальный подход к каждому пациенту и владельцу. Здесь выслушают,
          поддержат и помогут, ведь мы понимаем ту связь...
        </p>
        <a href="#" class="userFeedbacksSection__more">Подробнее</a>
        <a href="#" class="userFeedbacksSection__linkToMap"
          >Отзыв из Яндекс.Карт</a
        >
      </div>
      <div class="userFeedbacksSection__card">
        <div class="userFeedbacksSection__userRow">
          <div class="userFeedbacksSection__userIcon">AI</div>
          <div class="userFeedbacksSection__userInfo">
            <div class="userFeedbacksSection__stars">
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
            </div>
            <h5 class="userFeedbacksSection__userName">Andrey Ivashko</h5>
            <p class="userFeedbacksSection__date">12 февр. 2021</p>
          </div>
        </div>
        <p class="userFeedbacksSection__feedbackText">
          VolyaVet – это больше, чем просто ветеринарная клиника. Мы – семья,
          ваша поддержка и опора во всём, что связано с вашими питомцами. У нас
          индивидуальный подход к каждому пациенту и владельцу. Здесь выслушают,
          поддержат и помогут, ведь мы понимаем ту связь...
        </p>
        <a href="#" class="userFeedbacksSection__more">Подробнее</a>
        <a href="#" class="userFeedbacksSection__linkToMap"
          >Отзыв из Яндекс.Карт</a
        >
      </div>
      <div class="userFeedbacksSection__card">
        <div class="userFeedbacksSection__userRow">
          <div class="userFeedbacksSection__userIcon">AI</div>
          <div class="userFeedbacksSection__userInfo">
            <div class="userFeedbacksSection__stars">
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
              <img src="../../img/star.svg" alt="" />
            </div>
            <h5 class="userFeedbacksSection__userName">Andrey Ivashko</h5>
            <p class="userFeedbacksSection__date">12 февр. 2021</p>
          </div>
        </div>
        <p class="userFeedbacksSection__feedbackText">
          VolyaVet – это больше, чем просто ветеринарная клиника. Мы – семья,
          ваша поддержка и опора во всём, что связано с вашими питомцами. У нас
          индивидуальный подход к каждому пациенту и владельцу. Здесь выслушают,
          поддержат и помогут, ведь мы понимаем ту связь...
        </p>
        <a href="#" class="userFeedbacksSection__more">Подробнее</a>
        <a href="#" class="userFeedbacksSection__linkToMap"
          >Отзыв из Яндекс.Карт</a
        >
      </div>
    </div>
  </div>
</section> --}}


{{-- @include('layouts.form') --}}

    </section>
	</main>

@endsection
