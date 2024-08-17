<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    </head>
<body>

<section id="services">
        <div class="glass-container">
            @foreach($services as $service)
                <div class="service-item">
                    <h2 class="major">{{ $service->Title }}</h2> 
                    <img src="{{ asset('logo/' . $service->Picture) }}" alt="{{ $service->Title }}"> 
                    <p class="arabic-text">
                        {{ $service->Description }} 
                    </p>

					
                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">تعديل</a>
                

                </div>
            @endforeach
        </div>
    </section>
</body>
</html>
