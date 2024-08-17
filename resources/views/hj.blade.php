<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        body {
            background-color: #698ea2; 
            font-family: 'Tajawal', sans-serif;
            color: white; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        .message-container {
            background: rgba(255, 255, 255, 0.2); 
            border: 1px solid rgba(255, 255, 255, 0.3); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); 
            backdrop-filter: blur(10px); 
            text-align: center;
        }

        .message-container a {
            color: #ffffff; 
            text-decoration: none;
            font-weight: bold;
        }

        .message-container a:hover {
            color: #698ea2; 
        }

        .button {
            background-color: #152935; 
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #152935; 
            color: white;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <h1>تم إرسال الرسالة بنجاح</h1>
        <a href="/" class="button">عودة إلى الصفحة الرئيسية</a>
    </div>
</body>
</html>
