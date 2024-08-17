<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عملائنا</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; 
            font-family: 'Tajawal', sans-serif;
            direction: rtl;
            text-align: right;
        }

        .glass-container {
            margin: 50px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            max-width: 1200px;
        }

        .service-item {
            padding: 20px;
            margin-bottom: 20px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .service-item h2.major {
            color: #152935; 
        }

        .service-item img {
            max-width: 100%;
            border-radius: 8px;
        }

        .service-item p.arabic-text {
            color: #555;
        }

        .btn-warning {
            background-color: #152935; 
            border-color: #152935;
            color: white;
            border-radius: 8px;
        }

        .btn-warning:hover {
            background-color: #698ea2; 
            border-color: #698ea2;
        }
    </style>
</head>
<body>

<article id="work">
    <h2 class="major">عملائنا</h2>
    <div class="glass-container">
        @foreach($customers as $customer)
            <div class="service-item">
                <h2 class="major">{{ $customer->Title }}</h2> 
                <img src="{{ asset('logo/' . $customer->Picture) }}" alt="{{ $customer->Title }}"> 
                <p class="arabic-text">
                    {{ $customer->Description }} 
                </p>

                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">تعديل</a>
            </div>
        @endforeach
    </div>
</article>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
