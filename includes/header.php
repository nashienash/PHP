<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LN Cosmetics</title>
    </head>
      <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Helvetica', 'Arial', sans-serif;
            }

            body {
                background-image: url(imgs/bg.jpg);
                color: #000;
                line-height: 1.6;
                padding: 40px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            h1 {
                font-family: 'Helvetica', 'Arial', sans-serif;
                font-size: 3.5em;
                margin-bottom: 20px;
                letter-spacing: 8px;
                text-transform: uppercase;
            }

            .page-container {
                background-color: rgba(255, 255, 255, 0.85);
                padding: 30px 30px;
                border-radius: 15px;
                max-width: 900px;
                width: 100%;
                margin: 30px auto;
                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .page-title {
                color: #d6336c;
                font-family: 'Arial', sans-serif;
                text-align: center;
                margin-bottom: 20px;
                font-weight: 700;
            }

            .page-text {
                font-size: 18px;
                font-weight: 500;
                line-height: 1.8;
                color: #333;
                margin-bottom: 15px;
                text-align: justify;
            }

            table {
                border-collapse: collapse;
                margin: 20px auto 40px auto;
                width: 80%;
                max-width: 700px;
                text-align: left;
                box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            }

            th, td {
                padding: 12px 15px;
            }

            th {
                background-color: #000;
                color: #fff;
                font-weight: 600;
                text-transform: uppercase;
                font-size: 0.95em;
            }

            td {
                background-color: #fff;
                color: #000;
                border-bottom: 1px solid #ddd;
            }

            td:last-child {
                text-align: right;
            }

            h2 {
                font-size: 1.8em;
                margin-bottom: 15px;
            }

            p strong {
                color: #000;
            }

            .discount {
                background-color: #fff;
                padding: 25px 30px;
                margin-top: 30px;
                border-radius: 15px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
                border: 1px solid rgba(0, 0, 0, 0.08);
                max-width: 600px;
                text-align: center;
            }

            .main-nav {
                background-color: rgba(255, 255, 255, 0.85);
                padding: 15px 30px;
                border-radius: 15px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                margin-bottom: 40px;
                width: 100%;
                max-width: 900px;
            }

            .main-nav ul {
                list-style: none;
                display: flex;
                justify-content: center;
                gap: 30px;
            }

            .main-nav ul li a {
                text-decoration: none;
                font-size: 1em;
                font-weight: 500;
                color: #333;
                transition: all 0.3s ease;
            }

            .main-nav ul li a:hover {
                color: #d6336c;
                font-weight: 600;
            }

            .main-nav ul li a.active {
                color: #d6336c;
                font-weight: 700;
            }
        </style>

    <body>

    <h1>LN COSMETICS</h1>

    <nav class="main-nav">
        <ul>
            <li><a href="lnCosmetics.php?page=home">Home</a></li>
            <li><a href="lnCosmetics.php?page=about">About</a></li>
            <li><a href="lnCosmetics.php?page=products">Products</a></li>
            <li><a href="lnCosmetics.php?page=discount">Discount</a></li>
        </ul>
    </nav>

    <hr>
