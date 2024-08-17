<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اترك لنا رسالتك</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #698ea2; 
            font-family: 'Tajawal', sans-serif;
            color: white; 
        }

        #contact {
            display: flex;
            flex-direction: column;
            justify-content: center; 
            align-items: center;
            width: 90%;
            max-width: 1200px;
            background: rgba(255, 255, 255, 0.1); 
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            margin: 50px auto;
            box-sizing: border-box;
        }

        h2.major {
            text-align: center;
            margin-bottom: 10px;
            font-size: 1.5rem;
            color: white; 
        }

        form {
            width: 100%; 
            max-width: 1000px;
        }

        .fields {
            padding: 1rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 10px;
            box-sizing: border-box;
            margin: 10px 10px auto;
        }

        .field {
            width: 100%;
        }

        .field.half {
            width: 48%;
        }

        .field input, .field textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 2px solid #152935; 
            background: rgba(255, 255, 255, 0.2); 
            color: #000000; 
            font-size: 16px; 
        }

        .field input:focus, .field textarea:focus {
            border-color: #698ea2; 
            outline: none;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .actions li {
            list-style: none;
        }

        .actions input.primary {
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            background-color: #152935; 
            color: white;
        }

        .actions input.primary:hover {
            background-color: #004080; 
        }

        .actions input {
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            background-color: #152935; 
            color: white;
        }

        .actions input:hover {
            background-color: #004080; 
        }
    </style>
</head>
<body>

<article id="contact" class="glass-effect">
    <h2 class="major">اترك لنا رسالتك</h2>
    <form id="contact-form" method="post" action="/hj">
        @csrf
        <div class="fields">
            <div class="field half">
                <label for="name"></label>
                <input type="text" name="name" id="name" placeholder="الاسم" />
            </div>
            <div class="field half">
                <label for="email"></label>
                <input type="text" name="email" id="email" placeholder="البريد الإلكتروني" />
            </div>
            <div class="field">
                <label for="message"></label>
                <textarea name="message" placeholder="الرسالة" id="message" rows="4"></textarea>
            </div>
        </div>
        <ul class="actions">
            <input type="submit" value="ارسال" class="primary" />
            <input type="reset" value="مسح" />
        </ul>
    </form>
</article> 

</body> 
</html>
