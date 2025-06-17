# 🛴 Scooter S5 - Продающий лендинг для электросамоката

[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)](https://developer.mozilla.org/ru/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)](https://developer.mozilla.org/ru/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)](https://developer.mozilla.org/ru/docs/Web/JavaScript)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)](https://www.php.net/)
[![Responsive Design](https://img.shields.io/badge/Responsive-Design-green)](https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Responsive_Design)

**Продающий лендинг для электросамоката Scooter S5** - полностью адаптивное веб-приложение с фокусом на конверсии. Разработано с использованием современных веб-технологий.

👉 [Живая демонстрация](https://yourdomain.com/scooter-s5) | [Скриншоты](#скриншоты) | [Технические особенности](#технические-особенности)

## 🚀 Особенности проекта

### 💡 Основные характеристики
- **Полностью адаптивный дизайн** (Mobile First, 10+ брейкпоинтов)
- **Тёмная тема** с градиентами и анимациями
- **Оптимизированная производительность** (90+ баллов Lighthouse)
- **SEO-friendly** разметка и структура

### ⚙️ Функционал
| Модуль              | Технологии         | Описание                                  |
|---------------------|--------------------|-------------------------------------------|
| Галерея медиа       | Pure JS            | Кастомный слайдер фото/видео              |
| Формы заказа        | PHP + AJAX         | 2 типа заказов с валидацией               |
| Анимации            | CSS3 + JS          | Параллакс-эффекты, fade-in, floating      |
| Адаптивная вёрстка  | Flexbox + Grid     | Оптимизация под все устройства            |
| Валидация форм      | Регулярные выражения | Кастомная проверка телефонных номеров    |

## 🖼️ Скриншоты

<div align="center">
  <img src="screenshots/desktop-view.png" alt="Десктоп версия" width="45%">
  <img src="screenshots/mobile-view.png" alt="Мобильная версия" width="22%">
  
  *Главный экран на разных устройствах*
</div>

<div align="center">
  <img src="screenshots/gallery.gif" alt="Работа галереи" width="45%">
  <img src="screenshots/form.gif" alt="Работа формы" width="45%">
  
  *Интерактивные элементы: галерея и форма заказа*
</div>

## 🛠️ Технические особенности

### 🧩 Архитектурные решения
```mermaid
graph TD
    A[Главная страница] --> B[Медиа-галерея]
    A --> C[Форма самовывоза]
    A --> D[Форма доставки]
    A --> E[ТТХ самоката]
    C --> F[PHP обработчик]
    D --> F[PHP обработчик]
    F --> G[Отправка email]
