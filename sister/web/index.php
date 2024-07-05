<?php
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Promosi Slai Jeruk</title>
        <style>
            body {
                background: linear-gradient(to bottom, orange, white); /* Orange to white gradient */
                text-align: center;
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .container {
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
            .product-img {
                width: 200px;
                height: 200px;
                border-radius: 50%;
                margin-bottom: 20px;
            }
            .btn {
                background-color: orange;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s;
            }
            .btn:hover {
                background-color: darkorange;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Slai Jeruk Terbaik</h1>
            <img src="path/to/your/orange-jam.jpg" alt="Slai Jeruk" class="product-img">
            <p>Rasakan manis dan segarnya slai jeruk asli dari kebun terbaik kami. Ideal untuk sarapan dan cemilan sehat Anda!</p>
            <a href="order-page-link.html" class="btn">Pesan Sekarang</a>
        </div>
    </body>
    </html>';
?>
