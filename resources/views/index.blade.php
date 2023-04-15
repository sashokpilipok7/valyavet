@extends('layouts.main')

 @section('main-container')

 <div class="mainSection__lineBlock mainSection__lineBlock-mobile">
    <img src="../../img/telegram.svg" alt="" class="icon" />
    <img src="../../img/viber.svg" alt="" class="icon" />
  </div>
  <div class="container mainSection__container">
    <div class="mainSection__lineBlock mainSection__lineBlock-desctop">
      <img src="../../img/telegram.svg" alt="" class="icon" />
      <img src="../../img/viber.svg" alt="" class="icon" />
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

		<section class="teamSection">
  <div class="container">
    <h3 class="title title-withDot">Наша команда</h3>
    <!-- <div class="slider">
      <div class="slider__item">
        <img src="../../img/team1.jpg" alt="" class="slider__img" />
        <div class="slider__textBlock">
          <h5 class="teamSection__itemTitle">Анна Голованова</h5>
          <p class="teamSection__itemText">
            Главный врач, ветеринарныйврач-терапевт, хирург, стоматолог
          </p>
          <span class="teamSection__itemSpan">Стаж - 10+ лет</span>
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
          <h5 class="teamSection__itemTitle">Александра Редькина</h5>
          <p class="teamSection__itemText">
            Эксперт по коррекции поведения,кинолог, зоопсихолог
          </p>
          <span class="teamSection__itemSpan">Стаж - 6+ лет</span>
        </div>
      </div>
      <div class="slider__item">
        <img src="../../img/team4.jpg" alt="" class="slider__img" />
        <div class="slider__textBlock">
          <h5 class="teamSection__itemTitle">Дарья Голякова</h5>
          <p class="teamSection__itemText">Ассистент ветеринарного врача</p>
          <span class="teamSection__itemSpan">Стаж - 2 года</span>
        </div>
      </div>
      <div class="slider__arrows">arrow ... arrow</div>
    </div> -->
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
        <div class="whenSection__item">Вялое состояние</div>
        <div class="whenSection__item">Отсутсвие аппетита</div>
        <div class="whenSection__item">Обильные выделенияиз глаз/носа/ушей</div>
        <div class="whenSection__item">
          Выделения из органов моче-половой системы
        </div>
        <div class="whenSection__item">
          Кашель (часто похож на позывы к рвоте)
        </div>
        <div class="whenSection__item">Кровотечения</div>
        <div class="whenSection__item">Зуд</div>
        <div class="whenSection__item">Постоянное «мотание» головой</div>
        <div class="whenSection__item">Хромота</div>
        <div class="whenSection__item">Беспричинная агрессия</div>
        <div class="whenSection__item">Бледные слизистые оболочки</div>
        <div class="whenSection__item">Приступы различной этиологии</div>
        <div class="whenSection__item">Повышенная жажда</div>
        <div class="whenSection__item">Проблемыс мочеиспусканием</div>
        <div class="whenSection__item">
          Повышеная температура (измеряется ректально)
        </div>
        <div class="whenSection__item">Диарея, жидкий стул, запор</div>
        <div class="whenSection__item">Рвота</div>
        <button class="button whenSection__allButton">
          смотреть все симптомы
        </button>
        <div class="fullWidth">
          <button class="button whenSection__linkButton">
            Записаться на приём
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

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

		<section class="userFeedbacksSection">
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
</section>


		<section class="feedbacksection">
  <div class="container">
    <h3 class="title title-withDot">Предварительная запись</h3>
    <p class="text feedbacksection__text">
      Оставьте свои данные и наш администратор свяжется с вами для уточнения
      всех деталей записи в самое ближайшее время
    </p>
    <div class="feedbacksection__row">
      <div class="feedbacksection__left">
        <img src="../../img/feedback.png" alt="" class="image image-br" />
      </div>
      <div class="feedbacksection__right">
        <form class="feedbacksection__form" action="#">
          <input type="text" class="input" placeholder="Ваше имя" />
          <input type="tel" class="input" placeholder="Телефон" />
          <textarea
            name="message"
            id=""
            cols="25"
            rows="8"
            class="input"
            placeholder="Сообщение для администратора"
          ></textarea>
          <button class="button" type="submit">Записаться на приём</button>
        </form>
        <div class="text">
          Нажимая на кнопку вы соглашаетесь на обработку персональных данных
        </div>
      </div>
    </div>
  </div>
</section>

	</main>

@endsection
