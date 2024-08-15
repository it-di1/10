<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>إنشاء خدمة جديدة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            margin-top: 50px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2>إنشاء خدمة جديدة</h2>
        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">عنوان الخدمة</label>
                <input type="text" class="form-control" id="title" name="Title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">وصف الخدمة</label>
                <textarea class="form-control" id="description" name="Description" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="picture" class="form-label">صورة الخدمة</label>
                <input type="file" class="form-control" id="picture" name="Picture" required>
            </div>
            <button type="submit" class="btn btn-primary">إضافة الخدمة</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>