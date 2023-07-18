<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Grocery Shop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/master.css">
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Grocery Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Главная</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">О нас</a></li>
                        <li class="nav-item"><a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Карта магазинов</a></li>
                        <li class="nav-item"><a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Напишите нам</a></li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Новосибирск
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="">Новосибирск</a></li>
                          </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link active" href="contacts.php">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="bg-dark py-5">
          <div class="container px-4 px-lg-5 my-5">
              <div class="text-center text-white">
                  <h1 class="display-4 fw-bolder">Grocery Shop</h1>
                  <p class="lead fw-normal text-white-50 mb-0">Мы продаем только самые лучшие продукты!</p>
              </div>
          </div>
        </header>
        <section class="py-5">
          <div class="container">
            <div class="row center-block">
              <h1>Контактная информация</h1>
              <p>Телефон: +7-012-345-67-89</p>
              <p>Факс: +7-012-345-67-89</p>
              <p>Служба персонала: +7-012-345-67-89</p>
              <p>Электронная почта: info@example.com</p>
              <p>Адрес: Новосибирск, Россия</p>
              <h2>Карта магазинов</h2>
              <div class="" id="map">

              </div>
            </div>
          </div>
        </section>

        <footer class="bg-dark text-center text-white">
          <div class="container p-4 pb-0">
            <section class="">
              <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                      <i class="fas fa-gem me-3"></i>Grecory Shop
                    </h6>
                    <p>Мы продаем только самые лучшие продукты!</p>
                  </div>
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Ссылки</h6>
                    <p><a href="about.php" class="text-reset">О нас</a></p>
                    <p><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="text-reset">Напишите нам</a></p>
                    <p><i class="bi-facebook"></i> <a href="" class="text-reset">Facebook</a></p>
                    <p><i class="bi-whatsapp"></i> <a href="" class="text-reset">WhatsApp</a></p>
                  </div>
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Контакт</h6>
                    <p><i class="bi-house-fill"></i> Новосибирск, Россия</p>
                    <p><i class="bi-envelope"></i> info@example.com</p>
                    <p><i class="bi-phone-fill"></i> +7-012-345-67-89</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2021 Copyright: <b>Grocery Shop</b></div>
        </footer>

        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Напишите нам</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
                  </div>
                  <div class="mb-3">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                      <label for="floatingTextarea2">Сообщение</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-outline-dark mt-auto">Отправить</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-custom">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Карта магазинов</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div id="map">

                </div>
              </div>
            </div>
          </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>
