<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background:#220000;
        }
        #contact {
            width: 600px; 
            background:white;
            margin: 0 auto; 
            margin-top:100px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

    
        #contact h2 {
            text-align: center;
        }

        #contact .field {
            display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;}

        #contact .actions {
            text-align: center;
        }
    </style>
</head>
<body>
    
<article id="contact" class="glass-effect">
            <h2 class="major">اترك لنا رسالتك</h2>
            <form method="post" action="/hj">
                @csrf
                <div class="fields">
                    <div class="field half">
                        <label for="name"></label>
                        <input type="text" name="name" id="name" placeholder="الاسم" />
                    </div>
                    <div class="field half">
                        <label for="email"></label>
                        <input type="text" name="email" id="email"placeholder="البريد الإلكتروني" />
                    </div>
                    <div class="field">
                        <label for="message"></label>
                        <textarea name="message" placeholder="الرسالة" id="message" rows="4"></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <input type="submit" value="ارسال" class="primary" />
                    <input type="reset" value="مسح" />
            </form> 
            
        </article> 
    




</body> 
</html>