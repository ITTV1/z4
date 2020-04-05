

$(function(){
  // Обработчик нажатия на кнопку submit   в джаваскрипт
  $('input[type=submit]').on('click', function(e){
    // Предотвращаем обычное поведение элемента   в джаваскрипт
    e.preventDefault();
    // Формируем JSON из полей формы  в джаваскрипт
    var json = {
      name: $('input[name=name]').val(),
      family:  $('input[name=familys]').val()
    }
    // Отправляем асинхронный POST-запрос по адресу  в джаваскрипт
    // указанному в атрибуте action формы   в джаваскрипт
    $.ajax({
      url: $('form').prop('action'),
      method: 'POST',
      data: 'json=' + JSON.stringify(json)
    })
    // В случае успешного получения ответа от сервера  в джаваскрипт
    .done(function(msg){
      // Заменяем надпись Приветтсвуем в поле p#is-hello  в джаваскрипт
      $('#hello').html(msg);
    });
  });
});
