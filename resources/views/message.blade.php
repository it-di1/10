<!DOCTYPE html>
<html>
<head>
    <title>Messages</title>
    <style>
        body {
            background:#220000;
            
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color:white;
            margin-bottom: 20px;
        }

        .message-container {
            width: 40%;
        }

        .message-box {
            background-color: white;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius:5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Messages</h1>
    <div class="message-container">
        <ul>
            @foreach ($msg as $data)
                <li class="message-box">{{ $data->message }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>