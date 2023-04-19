<section class="feedbacksection" id="feedback_form">
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
          <form class="feedbacksection__form" method="post" action="{{route('thanks')}}">
            @csrf
            <input type="text" name="name" class="input" placeholder="Ваше имя" />
            <input type="tel" name="phone" class="input" placeholder="Телефон" />
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
