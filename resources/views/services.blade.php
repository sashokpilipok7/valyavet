<?php
$pages = DB::table('pages')->get();

foreach ($pages as $page)
{
   if($page->name == 'services'){
   ?>

@extends('layouts.main',  ['title' => $page->title, 'description' => $page->desctiption])

 @section('main-container')
			<div class="breadcrums">
				<a href="/" class="link breadcrums__link">Главная</a>
				<hr class="breadcrums__hr">
				<p class="breadcrums__text">{{ $page->title }}</p>
			</div>
			</div>
        <section class="servicesAndPrice">
  <div class="container">
    <h3 class="title title-withDot">{{ $page->title }}</h3>
    <div class="servicesAndPrice__row">
      <div class="servicesAndPrice__left">
        <?php
        $categories = DB::table('categories')->get();

       foreach ($categories as $cat)
       {?>
            <button class="servicesAndPrice__button"><?= $cat->title?></button>
       <?php }?>
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
        <style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;}
            .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
              overflow:hidden;padding:10px 5px;word-break:normal;}
            .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
              font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
            .tg .tg-baqh{text-align:center;vertical-align:top}
            .tg .tg-0lax{text-align:left;vertical-align:top}
            </style>
            <table class="tg">
            <thead>
              <tr>
                <th class="tg-0lax"></th>
                <th class="tg-baqh"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
              </tr>
              <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
              </tr>
            </tbody>
            </table>
        {{-- <table class="servicesAndPrice__table">
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
        /> --}}
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

<?php }}?>

	</main>
@endsection
