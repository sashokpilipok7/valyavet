@extends('layouts.main',  ['title' => 'Поиск', 'description' => 'Поиск'])

 @section('main-container')

			<div class="breadcrums">
				<a href="/" class="link breadcrums__link">Главная</a>
				<hr class="breadcrums__hr">
				<p class="breadcrums__text">Поиск</p>
			</div>
			</div>

            <section class="searchSection">
                <div class="container">
                  <h3 class="title title-withDot">Найдено - 5</h3>
                  <div class="searchSection__row">
                    <div class="searchSection__col">
                      <div class="searchSection__textBlock">
                        <img src="../../img/cat-card.jpg" alt="" class="card__image image" />
                        <div>
                          <h4 class="searchSection__title">
                            Как часто нужно стричь когти своему коту?
                          </h4>
                          <p class="searchSection__text">
                            VolyaVet – это больше, чем просто ветеринарная клиника. Мы –
                            семья, ваша поддержка и опора во всём, что связано с вашими
                            питомцами. У нас индивидуальный подход к каждому пациенту и
                            владельцу...
                          </p>
                        </div>
                      </div>
                      <div class="searchSection__dateBlock">
                        <p class="searchSection__date">16.06.23</p>
                      </div>
                      <div class="searchSection__buttonBlock">
                        <a href="#" class="button">смотреть</a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

	</main>

    @endsection

