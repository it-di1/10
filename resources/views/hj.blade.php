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
    color: black;
    margin-bottom: 20px;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.message-container {
    background: rgba(255, 255, 255, 0.8);
    border: none;
    display: flex; 
  flex-direction: column; 
  justify-content: center; 
  align-items: center;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
}

.message-container a {
    color: #698ea2;
    text-decoration: none;
    font-weight: bold;
    border: 2px solid #698ea2;
    padding: 10px 20px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.message-container a:hover {
    background-color: #698ea2;
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
