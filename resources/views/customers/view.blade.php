<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    </head>
<body>

<article id="work">
			<h2 class="major"> عملائنا</h2>
        <div class="glass-container">
            @foreach($customers as $customer)
                <div class="service-item">
                    <h2 class="major">{{ $customer->Title }}</h2> <!-- تأكد من أن 'Title' هو الاسم الصحيح -->
                    <img src="{{ asset('logo/' . $customer->Picture) }}" alt="{{ $customer->Title }}"> <!-- تأكد من أن 'Picture' هو الاسم الصحيح -->
                    <p class="arabic-text">
                        {{ $customer->Description }} <!-- تأكد من أن 'Description' هو الاسم الصحيح -->
                    </p>

					
                    
                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">تعديل</a>

                </div>
            @endforeach
        </div>
</article>
</body>
</html>