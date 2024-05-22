<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loader with Flexbox Containers</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      background-color: #eee;
    }

    .wrapper {
      height: 100vh;
      text-align: center;
      position: relative;
    }

    .wrapper button {
      position: relative;
      top: 50%;
      transform: translateY(-50%);
    }

    .loader {
      position: fixed;
      z-index: 999;
      top: 0;
      left: 0;
      width: 0;
      height: 100vh;
      transition: width 0s 1.4s ease;
    }

    .loader__icon {
      position: absolute;
      z-index: 1;
      top: 50%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%);
      opacity: 0;
      transition: opacity .5s ease;
    }

    .loader__icon svg {
      transform-origin: 0 0;
    }

    .loader__tile {
      position: absolute;
      left: 0;
      width: 0;
      height: 20%;
      background-color: #ff6486;
      transition: width .7s ease;
    }

    .loader__tile:nth-child(1) {
      top: calc(0 * 20%);
      transition-delay: 0s;
    }

    .loader__tile:nth-child(2) {
      top: calc(1 * 20%);
      transition-delay: 0.2s;
    }

    .loader__tile:nth-child(3) {
      top: calc(2 * 20%);
      transition-delay: 0.4s;
    }

    .loader__tile:nth-child(4) {
      top: calc(3 * 20%);
      transition-delay: 0.6s;
    }

    .loader__tile:nth-child(5) {
      top: calc(4 * 20%);
      transition-delay: 0.8s;
    }

    .loader--active {
      width: 100%;
      transition-delay: 0s;
    }

    .loader--active .loader__icon {
      opacity: 1;
      transition: opacity .5s 1.4s ease;
    }

    .loader--active .loader__tile {
      width: 100%;
    }

    .loader--active .loader__tile:nth-child(1) {
      transition-delay: 0s;
    }

    .loader--active .loader__tile:nth-child(2) {
      transition-delay: 0.2s;
    }

    .loader--active .loader__tile:nth-child(3) {
      transition-delay: 0.4s;
    }

    .loader--active .loader__tile:nth-child(4) {
      transition-delay: 0.6s;
    }

    .loader--active .loader__tile:nth-child(5) {
      transition-delay: 0.8s;
    }

    .content {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 10px;
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      opacity: 0;
      transform: translateY(100%);
      transition: opacity 1s ease, transform 1s ease;
    }

    .content.show {
      opacity: 1;
      transform: translateY(0);
    }

    .flex-container {
      width: 150px;
      height: 200px;
      background-color: #f095a8;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: white;
      font-size: 1.5rem;
      padding: 10px;
      box-sizing: border-box;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .flex-container:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .product-image {
      width: 80%;
      height: auto;
      margin-bottom: 10px;
      border-radius: 5px;
    }

    .product-name {
      font-size: 1.2rem;
      margin-bottom: 5px;
    }

    .flex-container button {
      background-color: #fff;
      color: #007AE5;
      border: none;
      padding: 5px 10px;
      margin: 2px;
      cursor: pointer;
      border-radius: 5px;
      font-size: 1rem;
      transition: background-color 0.3s, color 0.3s;
    }

    .flex-container button:hover {
      background-color: #007AE5;
      color: #fff;
    }

    .flex-container span.quantity {
      font-size: 2rem;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <button class="btn" type="button">START ORDERING</button>
    <div class="loader loader--active">
      <div class="loader__icon">
        <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
          <path opacity="0.2" fill="#fff" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"></path>
          <path fill="#fff" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0C22.32,8.481,24.301,9.057,26.013,10.047z"></path>
          <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatCount="indefinite"></animateTransform>
        </svg>
      </div>
      <div class="loader__tile"></div>
      <div class="loader__tile"></div>
      <div class="loader__tile"></div>
      <div class="loader__tile"></div>
      <div class="loader__tile"></div>
    </div>
    <div class="content">
      <div class="flex-container">
        <img src="product1.jpg" alt="Product 1" class="product-image">
        <span class="product-name">Product 1</span>
        <button class="decrement">-</button>
        <span class="quantity">0</span>
        <button class="increment">+</button>
      </div>
      <div class="flex-container">
        <img src="product2.jpg" alt="Product 2" class="product-image">
        <span class="product-name">Product 2</span>
        <button class="decrement">-</button>
        <span class="quantity">0</span>
        <button class="increment">+</button>
      </div>
      <div class="flex-container">
        <img src="product3.jpg" alt="Product 3" class="product-image">
        <span class="product-name">Product 3</span>
        <button class="decrement">-</button>
        <span class="quantity">0</span>
        <button class="increment">+</button>
      </div>
      <div class="flex-container">
        <img src="product4.jpg" alt="Product 4" class="product-image">
        <span class="product-name">Product 4</span>
        <button class="decrement">-</button>
        <span class="quantity">0</span>
        <button class="increment">+</button>
      </div>
      <div class="flex-container">
        <img src="product5.jpg" alt="Product 5" class="product-image">
        <span class="product-name">Product 5</span>
        <button class="decrement">-</button>
        <span class="quantity">0</span>
        <button class="increment">+</button>
      </div>
      <div class="flex-container">
        <img src="product6.jpg" alt="Product 6" class="product-image">
        <span class="product-name">Product 6</span>
        <button class="decrement">-</button>
        <span class="quantity">0</span>
        <button class="increment">+</button>
      </div>
      <div class="flex-container">
        <img src="product7.jpg" alt="Product 7" class="product-image">
        <span class="product-name">Product 7</span>
        <button class="decrement">-</button>
        <span class="quantity">0</span>
        <button class="increment">+</button>
      </div>
      <div class="flex-container">
        <img src="product8.jpg" alt="Product 8" class="product-image">
        <span class="product-name">Product 8</span>
        <button class="decrement">-</button>
        <span class="quantity">0</span>
        <button class="increment">+</button>
      </div>
    </div>
  </div>
  <script>
    var $loader = document.querySelector('.loader');
    var $content = document.querySelector('.content');
    var $button = document.querySelector('.btn');

    window.onload = function() {
      $loader.classList.remove('loader--active');
    };

    $button.addEventListener('click', function () {
      $loader.classList.add('loader--active');
      
      window.setTimeout(function () {
        $loader.classList.remove('loader--active');
        $content.classList.add('show');
        $button.remove(); // Remove the button after the loader completes
      }, 5000);
    });

    document.querySelectorAll('.increment').forEach(function(btn) {
      btn.addEventListener('click', function() {
        var quantity = btn.previousElementSibling;
        quantity.textContent = parseInt(quantity.textContent) + 1;
      });
    });

    document.querySelectorAll('.decrement').forEach(function(btn) {
      btn.addEventListener('click', function() {
        var quantity = btn.nextElementSibling;
        var currentValue = parseInt(quantity.textContent);
        if (currentValue > 0) {
          quantity.textContent = currentValue - 1;
        }
      });
    });
  </script>
</body>
</html>
