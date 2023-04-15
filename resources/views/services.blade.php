@extends('layouts.main')

 @section('main-container')
			<div class="breadcrums">
				<a href="/" class="link breadcrums__link">Главная</a>
				<hr class="breadcrums__hr">
				<p class="breadcrums__text">Услуги и цены</p>
			</div>
			</div>
        <section class="servicesAndPrice">
  <div class="container">
    <h3 class="title title-withDot">Услуги и цены</h3>
    <div class="servicesAndPrice__row">
      <div class="servicesAndPrice__left">
        <button class="servicesAndPrice__button">Анализы</button>
      </div>
      <div class="servicesAndPrice__right">
        <h3 class="servicesAndPrice__title">вакцинации</h3>
        <p class="text">
          Вакцинация – обязательная процедура для безопасности вашего питомца. С
          помощью вакцинации можно избежать значительного количества
          инфекционных заболеваний (у животных формируется стойкий иммунитет).
          Вакцинацию важно проводить регулярно (примерно раз в год) под
          наблюдением врача.
        </p>
        <img
          src="../../img/servicesAndPrice.jpg"
          alt=""
          class="image servicesAndPrice__image"
        />
        <table class="servicesAndPrice__table">
          <img
            src="../../img/table.png"
            alt=""
            class="image servicesAndPrice__table"
          />
        </table>
        <img
          src="../../img/tableMobile.png"
          alt=""
          class="image servicesAndPrice__tableMobile"
        />
        <div class="servicesAndPrice__bottomRow">
          <p class="text">
            Стоимость услуг на сайте не является публичной офертой и может
            отличаться от цен прейскуранта
          </p>
          <button class="button">Записаться на приём</button>
        </div>
      </div>
    </div>
  </div>
</section>

	</main>
@endsection
