
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل الخدمة</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8; 
            font-family: 'Tajawal', sans-serif;
            direction: rtl;
            text-align: right;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            color: #152935; 
        }

        .form-group label {
            font-weight: bold;
            color: #152935; 
        }

        .form-control {
            border-color: #e4a576; 
            border-radius: 8px; 
        }

        .form-control:focus {
            border-color: #698ea2;
            box-shadow: 0 0 0 0.2rem rgba(105, 142, 162, 0.25); }

        .btn-primary {
            background-color: #698ea2; 
            border-color: #698ea2;
            color: white; 
            border-radius: 8px; 
        }

        .btn-primary:hover {
            background-color: #152935; 
            border-color: #152935;
            color: #ffffff; 
        }

        .btn-danger {
            background-color: #e4a576; 
            border-color: #e4a576;
            color: white; 
            border-radius: 8px; 
        }

        .btn-danger:hover {
            background-color: #152935; 
            border-color: #152935;
            color: #ffffff; 
        }

        form {
            background-color: #ffffff; 
            border-radius: 12px; 
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); 
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>تعديل الخدمة</h1>

        <form action="/services/{{ $service->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Title">العنوان:</label>
                <input type="text" name="Title" id="Title" class="form-control" value="{{ old('Title', $service->Title) }}" required>
            </div>

            <div class="form-group">
                <label for="Description">الوصف:</label>
                <textarea name="Description" id="Description" class="form-control" required>{{ old('Description', $service->Description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="Picture">الصورة (اختياري):</label>
                <input type="file" name="Picture" id="Picture" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">تحديث</button>

            <form action="/services/{{ $service->id }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">حذف</button>
            </form>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
