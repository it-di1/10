<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل الخدمة</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>تعديل الخدمة</h1>

        <form action="/customers/{{ $customer->id }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">
                <label for="Title">العنوان:</label>
                <input type="text" name="Title" id="Title" class="form-control" value="{{ old('Title', $customer->Title) }}" required>
            </div>

            <div class="form-group">
                <label for="Description">الوصف:</label>
                <textarea name="Description" id="Description" class="form-control" required>{{ old('Description', $customer->Description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="Picture">الصورة (اختياري):</label>
                <input type="file" name="Picture" id="Picture" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">تحديث</button>
        </form>

        <form action="/customers/{{ $customer->id }}" method="POST" style="display: inline;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">حذف</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
