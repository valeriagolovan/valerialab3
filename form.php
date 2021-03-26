<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <title>Задание 3</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <h1 class="header_title">
    Форма
    </h1>
  </header>
  <div id="main-aside-wrapper">
    <div id="cont" class="container">
      <div id="form" class="col-12 order-lg-3 order-sm-2">
        <form action="" method="POST">
          ФИО:
          <label>
            <input name="fio" placeholder="Введите ФИО">
          </label>
          <br>
          <br>
          E-mail:
          <label>
            <input type="email" name="email" placeholder="Введите e-mail">
          </label>
          <p>Ваш год рождения:</p>
          <label>
            <select name="yob">
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001" selected="selected">2001</option>
              <option value="2002">2002</option>
            </select>
          </label>

          <p>Пол:</p>
          <label>
            <input type="radio" name="radio-pol" checked="checked" value="M">М
          </label>
          <label>
            <input type="radio" name="radio-pol" value="W" />Ж
          </label>

          <p>Количество конечностей</p><br />
          <label>
            <input type="radio" name="radio-kon" value="0" />0
          </label>
          <label>
            <input type="radio" name="radio-kon" value="1" />1
          </label>
          <label>
            <input type="radio" name="radio-kon" value="2" />2
          </label>
          <label>
            <input type="radio" name="radio-kon" value="3" />3
          </label>
          <label>
            <input type="radio" checked="checked" name="radio-kon" value="4" />4
          </label>
          <label>
            <input type="radio" name="radio-kon" value="5" />5
          </label>

          <p>Сверхспособности</p>
          <label>
            <select name="sp-sp[]" multiple=multiple>
              <option value="Immortal">Бессмертие</option>
              <option value="Through the walls"> Прохождение сквозь стены</option>
              <option value="Levitation">Левитация</option>
            </select>
          </label>

          <p id="bio">Биография</p>
          <label>
            <textarea placeholder="Расскажите о себе" name="biography" rows="6" cols="60"></textarea>
          </label>
          <br>

          <label>
            С контрактом ознакомлен
            <input type="checkbox" name="check-ok" checked="checked">
          </label>
          <br>
          <input type="submit" value="Отправить">
        </form>
      </div>
    </div>
  </div>
</body>

</html>