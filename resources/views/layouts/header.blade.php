<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{{ $description }}" />
    <meta name="keywords" content="" />
    <link rel="shortcut icon" href="img/favicons/favicon.svg" type="image/svg+xml" />
    <link rel="shortcut icon" href="img/favicons/favicon.webp" type="image/webp" />
    <link rel="shortcut icon" href="img/favicons/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/libs.min.css" />
    <link rel="stylesheet" href="css/style.min.css" />
    <title>{{ $title }}</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
  </head>
</html>


<body id="body">
	<main class="main">
		<div class="container">
			<header class="header">
  <div class="header__row">
    <div class="header__col">
        <a href="/"> <img src="../../img/logo.png" alt="" class="header__logo" /></a>
      <div class="dropdown">
        <button class="dropbtn">
          Меню
          <img src="../../img/dropdown.svg" alt="" class="dropbtn-icon" />
        </button>
        <div class="dropdown-content">
          <a href="/#news">Новости и акции</a>
          <a href="/aboutUs">О нас</a>
          <a href="/services">Услуги и цены</a>
          <a href="/library">Библиотека</a>
          <a href="/#team">Наша команда</a>
          <a href="/#feedback">Отзывы</a>
          <a href="/contacts">Контакты</a>
        </div>
      </div>
    </div>
    <div class="header__col">
      <nav class="nav">
        <a href="/#news" class="navLink">Новости и акции</a
        ><a href="/aboutUs" class="navLink">О нас</a
        ><a href="/services" class="navLink">услуги и цены</a
        ><a href="/library" class="navLink">Библиотека</a
        ><a href="/#team" class="navLink">Наша команда</a
        ><a href="/#feedback" class="navLink">Отзывы</a
        ><a href="/contacts" class="navLink">Контакты</a>
      </nav>
    </div>
    @include('layouts.search')
  </div>
</header>
