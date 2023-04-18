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
                  <h3 class="title title-withDot">Найдено - {{$posts->count()}}</h3>
                  @foreach ($posts as $post)
                  <div class="searchSection__row">
                    <div class="searchSection__col">
                      <div class="searchSection__textBlock">
                        <img src="/storage/{{$post->image}}" alt="" class="card__image image" />
                        <div>
                          <h4 class="searchSection__title">
                            {{$post->title}}
                          </h4>
                          <style>
                            .searchSection__text {
                                display: -webkit-box;
                                max-width: 100%;
                                font-size: 20px;
                                -webkit-line-clamp: 4; /* количество строк */
                                -webkit-box-orient: vertical;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            }
                          </style>
                          <p class="searchSection__text">
                            {!!$post->body!!}
                          </p>
                        </div>
                      </div>
                      <div class="searchSection__dateBlock">

                        <p class="searchSection__date">{{-- тут можна замынити на created_at час створення  --}} {{$post->updated_at->format('d.m.Y')}}</p>
                      </div>
                      <div class="searchSection__buttonBlock">
                        <a href="#" class="button">смотреть</a>
                      </div>
                    </div>
                  </div>
                  @endforeach

                </div>
              </section>

	</main>

    @endsection

