<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn btn-delete" data-dismiss="modal" aria-label="Close">x</button>
        <h4 class="modal-title" id="myModalLabel">Войти в кабинет</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <h5 class='error-mes'>Комбинация email и пароль неправильные</h5>
            <form>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <label>Email *</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="email" class="form-control error">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <label>Пароль *</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-9">
                    <a href="#">Вспомнить пароль</a>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-9">
                    <p>* - поле обязательное для заполнения</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-red">Отправить</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn btn-delete" data-dismiss="modal" aria-label="Close">x</button>
        <h4 class="modal-title" id="myModalLabel">Регистрация в магазине</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <form>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <label>Ф.И.О. *</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <label>Телефон *</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <label>Email *</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <label>Пароль *</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <label>Повтор пароля *</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" name="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-9">
                    <div class="form-check">
                      <input type="radio" name="rr" id="mr1">
                      <label for="mr1">Физическое лицо</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" name="rr" id="mr2">
                      <label for="mr2">Юридическое лицо</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <label>Введите код с картинки</label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="email" class="form-control">
                  </div>
                  <div class="col-md-5">
                    <img src="img/capchea.png" alt="cpachea">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-9">
                    <p>* - поле обязательное для заполнения</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-red">Зарегистрироваться</button>  <a href='#'>Войти</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="succes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <button type="button" class="btn btn-delete" data-dismiss="modal" aria-label="Close">x</button>
        <p class="succes-apply">Данные поступили в обработку, 
          в ближайшее время мы их увидим
        </p>
      </div>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn btn-delete" data-dismiss="modal" aria-label="Close">x</button>
        <h4 class="modal-title" id="myModalLabel">Подтверждение регистрации</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <p class="into-text text-center">Для обеспечения безопасности необходимо ввести одноразовый пароль. Убедитесь, что пароль введен верно и нажмите на кнопку «Подтвердить».</p>
            <form>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <label>Введите SMS-пароль  *</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="email" class="form-control">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-9">
                    <p>* - поле обязательное для заполнения</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-red">Отправить</button>  <a href='#'>Отмена</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="text" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn btn-delete" data-dismiss="modal" aria-label="Close">x</button>
        <div class="info-block-text">
          <p>Нарисовать рамку модального окна. внутри которого будет вставлен текст. Для окна нарисовать скролл , кнопку “закрыть” и крестик в правом верхнем углу для очевидной возможности закрытия. Нарисовать рамку модального окна. внутри которого будет вставлен текст. </p>
          <p>Для окна нарисовать скролл , кнопку “закрыть” и крестик в правом верхнем углу для очевидной возможности закрытия. Нарисовать рамку модального окна. </p>
          <p>Нарисовать рамку модального окна. внутри которого будет вставлен текст. Для окна нарисовать скролл , кнопку “закрыть” и крестик в правом верхнем углу для очевидной возможности закрытия. Нарисовать рамку модального окна. внутри которого будет вставлен текст. </p>
          <p>Для окна нарисовать скролл , кнопку “закрыть” и крестик в правом верхнем углу для очевидной возможности закрытия. Нарисовать рамку модального окна. </p>
          <p>Нарисовать рамку модального окна. внутри которого будет вставлен текст. Для окна нарисовать скролл , кнопку “закрыть” и крестик в правом верхнем углу для очевидной возможности закрытия. Нарисовать рамку модального окна. внутри которого будет вставлен текст. </p>
          <p>Для окна нарисовать скролл , кнопку “закрыть” и крестик в правом верхнем углу для очевидной возможности закрытия. Нарисовать рамку модального окна. </p>
        </div>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-red" data-dismiss="modal" aria-label="Close">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn btn-delete" data-dismiss="modal" aria-label="Close">x</button>
        <h4 class="modal-title" id="myModalLabel">Название товара</h4>
      </div>
      <div class="modal-body">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-6">
              <div class="image-block">
                <img src="img/produs1.png" alt="produs">
                <i class="icon promo"></i>
              </div>
            </div>
            <div class="col-md-6">
              <p class="prod">Цена:  <span>580</span> руб.-</p>                
              <p class="prod">Количество покупаемого товара: <strong>2</strong></p>           

              <div class="buttons-side">
                <button class="btn btn-red">Оформить заказ</button>
                <button class="btn btn-pers">Выбрать еще товары</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
</div>
