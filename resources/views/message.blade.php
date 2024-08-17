<!DOCTYPE html>
<html>
<head>
    <title>Messages</title>
    <style>
        body {
            background-color: #698ea2; 
            font-family: 'Tajawal', sans-serif;
            color: white; 
            margin: 10;
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
            width: 50%;
            max-width: 1200px;
            margin:top:10px;
        }

        .message-box {
            background: rgba(255, 255, 255, 0.2); 
            border: 1px solid rgba(255, 255, 255, 0.3); 
            padding: 5px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); 
            backdrop-filter: blur(10px); 
        }

        .message-box p {
            margin: 10;
            color: #ffffff; 
        }
    </style>
</head>
<body>
    <h1>Messages</h1>
    <div class="message-container">
        <ul>
            @foreach ($msg as $data)
                <li class="message-box"><p>
              <h3>Name:  {{ $data->Name }}<h3><br>
              <h3>Email:   {{ $data->Email }}</h3><br>
              <h3>Message: {{ $data->message }}</h3>
                </p></li>
            @endforeach
        </ul>
    </div>
</body>
</html>
