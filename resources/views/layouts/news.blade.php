<section class="newsSection" id="news">
    <div class="container">
      <h3 class="title title-withDot">Новости и акции</h3>
      <div class="slider slider-light news-slider">
          <?php
               $posts = DB::table('posts')->get();

              foreach ($posts as $post)
              {?>
                    <div class="slider__item">
                      <div class="card">
                        <img src="../../img/news1.jpg" alt="" class="card__image image" />
                        <div class="card__content">
                          <p class="text-s"><?= $post->title;?></p>
                          <p class="text-s date"><?= $post->created_at ?></p>
                          <a href="#" class="button newsSection__hoverButton"
                            >Читать статью</a
                          >
                        </div>
                      </div>
                    </div>
             <?php }
              ?>
      </div>
    </div>
  </section>
