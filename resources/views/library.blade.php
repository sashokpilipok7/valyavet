@extends('layouts.main')

 @section('main-container')

			<div class="breadcrums">
				<a href="/" class="link breadcrums__link">Главная</a>
				<hr class="breadcrums__hr">
				<p class="breadcrums__text">Библиотека</p>
			</div>
			</div>
		<section class="library">
	<div class="container library__container">
		<h2 class="title title-m title-withDot">Библиотека</h2>
		<div class="library__buttons">
			<button class="button__category">
				<svg width="19" height="12" viewBox="0 0 23 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M22.4435 2.025C22.2738 1.92806 22.0821 1.87712 21.8871 1.87712C21.6921 1.87712 21.5004 1.92806 21.3306 2.025L17.8065 4.05938C17.787 2.97754 17.3488 1.94651 16.5859 1.18757C15.823 0.428636 14.7962 0.00227553 13.7258 0H1.85484C1.36366 0.00246417 0.893286 0.200799 0.545963 0.551897C0.19864 0.902995 0.00243767 1.37848 0 1.875V10.875C0 11.969 0.429924 13.0182 1.19519 13.7918C1.96046 14.5654 2.99839 15 4.08065 15H15.9516C16.4428 14.9975 16.9132 14.7992 17.2605 14.4481C17.6078 14.097 17.804 13.6215 17.8065 13.125V10.9406L21.3306 12.975C21.4994 13.0748 21.6916 13.1266 21.8871 13.125C22.0827 13.1275 22.2752 13.0756 22.4435 12.975C22.6122 12.8755 22.7523 12.7332 22.8498 12.5622C22.9474 12.3912 22.9992 12.1974 23 12V3C22.9992 2.80259 22.9474 2.60881 22.8498 2.43781C22.7523 2.26681 22.6122 2.12452 22.4435 2.025ZM15.5806 12.75H4.08065C3.58946 12.7475 3.11909 12.5492 2.77177 12.1981C2.42445 11.847 2.22824 11.3715 2.22581 10.875V2.25H13.7258C14.217 2.25246 14.6874 2.4508 15.0347 2.8019C15.382 3.153 15.5782 3.62848 15.5806 4.125V12.75ZM20.7742 10.0594L17.8065 8.34375V6.65625L20.7742 4.94062V10.0594Z"
						fill="#F8F8F8" />
				</svg>
				Видео
			</button>
			<button class="button__category button__category-active">
				<svg width="12" height="15" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M1.875 0.5C1.37772 0.5 0.900805 0.689642 0.549175 1.02721C0.197544 1.36477 0 1.82261 0 2.3V16.7C0 17.1774 0.197544 17.6352 0.549175 17.9728C0.900805 18.3104 1.37772 18.5 1.875 18.5H13.125C13.6223 18.5 14.0992 18.3104 14.4508 17.9728C14.8025 17.6352 15 17.1774 15 16.7V5.9L9.375 0.5H1.875ZM1.875 2.3H8.4375V6.8H13.125V16.7H1.875V2.3ZM3.75 9.5V11.3H11.25V9.5H3.75ZM3.75 13.1V14.9H8.4375V13.1H3.75Z"
						fill="#F8F8F8" />
				</svg>
				Статьи
			</button>
		</div>
		<div class="library__wrapper">
			<div class="card">
				<img src="../../img/cat-card.jpg" alt="" class="card__image image" />
				<div class="card__content">
					<p class="text-s">Как часто нужно стричь когти своему коту?</p>
					<p class="text-s date">16.06.23</p>
				</div>
			</div>
			<div class="card">
				<img src="../../img/cat-card.jpg" alt="" class="card__image image" />
				<div class="card__content">
					<p class="text-s">Как часто нужно стричь когти своему коту?</p>
					<p class="text-s date">16.06.23</p>
				</div>
			</div>
			<div class="card">
				<img src="../../img/cat-card.jpg" alt="" class="card__image image" />
				<div class="card__content">
					<p class="text-s">Как часто нужно стричь когти своему коту?</p>
					<p class="text-s date">16.06.23</p>
				</div>
			</div>
			<div class="card">
				<img src="../../img/cat-card.jpg" alt="" class="card__image image" />
				<div class="card__content">
					<p class="text-s">Как часто нужно стричь когти своему коту?</p>
					<p class="text-s date">16.06.23</p>
				</div>
			</div>
			<div class="card">
				<img src="../../img/cat-card.jpg" alt="" class="card__image image" />
				<div class="card__content">
					<p class="text-s">Как часто нужно стричь когти своему коту?</p>
					<p class="text-s date">16.06.23</p>
				</div>
			</div>
			<div class="card">
				<img src="../../img/cat-card.jpg" alt="" class="card__image image" />
				<div class="card__content">
					<p class="text-s">Как часто нужно стричь когти своему коту?</p>
					<p class="text-s date">16.06.23</p>
				</div>
			</div>
			<div class="card">
				<img src="../../img/cat-card.jpg" alt="" class="card__image image" />
				<div class="card__content">
					<p class="text-s">Как часто нужно стричь когти своему коту?</p>
					<p class="text-s date">16.06.23</p>
				</div>
			</div>
			<div class="card">
				<img src="../../img/cat-card.jpg" alt="" class="card__image image" />
				<div class="card__content">
					<p class="text-s">Как часто нужно стричь когти своему коту?</p>
					<p class="text-s date">16.06.23</p>
				</div>
			</div>
			<div class="card">
				<img src="../../img/cat-card.jpg" alt="" class="card__image image" />
				<div class="card__content">
					<p class="text-s">Как часто нужно стричь когти своему коту?</p>
					<p class="text-s date">16.06.23</p>
				</div>
			</div>
			<div class="card">
				<img src="../../img/cat-card.jpg" alt="" class="card__image image" />
				<div class="card__content">
					<p class="text-s">Как часто нужно стричь когти своему коту?</p>
					<p class="text-s date">16.06.23</p>
				</div>
			</div>
		</div>
		<button class="button">показать больше</button>
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
