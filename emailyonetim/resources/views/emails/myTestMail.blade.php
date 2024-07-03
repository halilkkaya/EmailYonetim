<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        @media screen and (max-width: 600px) {
            .container {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $baslik }}</h1>
        <p>
            Merhaba {{ $musteriler->adsoyad }},
            <br>
            Umarım bu mesaj, sizi sağlıklı ve mutlu bir şekilde bulur.
        </p>
        <p>
            <strong>{{ $baslik }}:</strong>
        </p>
        <p>
            <strong>{{ $metin }}</strong>
        </p>
        <p>
            Bu konu hakkında daha fazla bilgi veya herhangi bir sorunuz varsa, lütfen bize ulaşın. Size yardımcı olmaktan mutluluk duyarız.
        </p>
        <a href="#" class="btn">Daha fazla bilgi al</a>
    </div>


</body>
</html>
