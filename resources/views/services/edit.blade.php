

@extends('layouts.app')

@section('content')
    <h1>تعديل الخدمة</h1>

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
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

        @if(Auth::check() && Auth::user()->role == 'admin')
            <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">حذف</button>
            </form>
        @endif
    </form>
@endsection
