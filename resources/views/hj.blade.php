<!DOCTYPE html>
<html>
<head>
    <title>Messages</title>
    <style>
        body {
            background-color: #698ea2; 
            font-family: 'Tajawal', sans-serif;
            color: white; 
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            justify-content: center;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            color: white;
        }

        .message-container {
            width: 90%;
            max-width: 1200px;
        }

        .message-box {
            background: rgba(255, 255, 255, 0.2); 
            border: 1px solid rgba(255, 255, 255, 0.3); 
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); 
            backdrop-filter: blur(10px); 
        }

        .message-box p {
            margin: 0;
            color: #ffffff; 
        }
    </style>
</head>
<body>
    <h1>Messages</h1>
    <div class="message-container">
        <ul>
            @foreach ($msg as $data)
                <li class="message-box"><p>{{ $data->message }}</p></li>
            @endforeach
        </ul>
    </div>
</body>
</html>
