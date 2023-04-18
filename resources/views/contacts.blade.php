<?php
$pages = DB::table('pages')->get();

foreach ($pages as $page)
{
   if($page->name == 'contacts'){
   ?>

@extends('layouts.main',  ['title' => $page->title, 'description' => $page->desctiption])

 @section('main-container')

			<div class="breadcrums">
				<a href="/" class="link breadcrums__link">Главная</a>
				<hr class="breadcrums__hr">
				<p class="breadcrums__text">Контакты</p>
			</div>
			</div>
        <section class="contactsSection">
  <div class="container">
    <h3 class="title title-withDot">Контакты</h3>
    <div class="contactsSection__textRow">
      <div class="contactsSection__textCol">
        <h4 class="contactsSection__title">телефон для связи:</h4>
        <a href="tel:+7 (977) 799-87-82" class="link contactsSection__text"><img
            src="../../img/telIcon.svg"
            alt=""
            class="contactsSection__icon"
          />
          +7 (977) 799-87-82</a
        ></a>
      </div>
      <div class="contactsSection__textCol contactsSection__textCol-withForm">
        <form action="">
            <h4 class="contactsSection__title">закажите звонок:</h4>
            <input type="text" class="input" placeholder="Ваше имя" />
            <input type="tel" class="input" placeholder="Телефон" />
            <button class="button" type="submit">заказать звонок</button>
          </form>
      </div>
      <div class="contactsSection__textCol">
        <h4 class="contactsSection__title">ждем вас по адресу :</h4>
        <p class="contactsSection__text">
            <img
            src="../../img/locationIcon.svg"
            alt=""
            class="contactsSection__icon"
          />
          ул. Германа Титова, 12, корп. 1, Химки
        </p>
      </div>
      <div class="contactsSection__textCol">
        <h4 class="contactsSection__title">время работы :</h4>
        <p class="contactsSection__text">
            <img
            src="../../img/timeIcon.svg"
            alt=""
            class="contactsSection__icon"
          />
          ПН-ВС <br />
          9:00 - 21:00
        </p>
      </div>
      <div class="contactsSection__textCol">
        <h4 class="contactsSection__title">ПОЧТА :</h4>
        <a href="mailto:Volyavet@yandex.ru" class="link contactsSection__text"
          >   <img
          src="../../img/mailIcon.svg"
          alt=""
          class="contactsSection__icon"
        />Volyavet@yandex.ru</a
        >
      </div>
    </div>
    <div class="contactsSection__formRow">
      <div class="contactsSection__formCol">
        <form action="">
            <h4 class="contactsSection__title">закажите звонок:</h4>
          <input type="text" class="input" placeholder="Ваше имя" />
          <input type="tel" class="input" placeholder="Телефон" />
          <button class="button" type="submit">заказать звонок</button>
        </form>
      </div>
      <div class="contactsSection__formCol">
        <iframe
          class="contactsSection__map"
          src="https://www.google.com/maps/d/embed?mid=1Hpy8cWYwS4DPMcVq4hY8j-P-7Qg&ehbc=2E312F"
        ></iframe>
      </div>
    </div>
  </div>
</section>
<?php }} ?>

	</main>
@endsection
