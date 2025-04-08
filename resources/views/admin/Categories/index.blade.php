@extends('layouts.admin')
@section('title', 'Categories')
@section('content')
    <div class="py-3">
        <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">إضافة قائمة جديدة</a>
        <table class="table">
            <thead>
                <tr>
                    <th>اسم الصنف</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success">تعديل</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="width='100%';height:30px">
            {{ $categories->links() }}
        </div>
    </div>
@endsection
