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


.fields .field {
   
    width: 100%;
}

.fields .field.half {
  
    width: 48%;
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

.button-container {
    text-align: center; 
    margin-top: 1rem; 
}

.field input, .field textarea {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
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

.actions input {
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-weight: bold;
}

.actions input.primary {
    background-color: #008CBA;
    color: white;
}

.actions input:hover {
    opacity: 0.9;
}


.glass-effect {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: white;
    text-align: center;
}


input[type="submit"].primary,
input[type="reset"] {
    background-color: #dd4b39;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"].primary:hover,
input[type="reset"]:hover {
    background-color: #c43a28;
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