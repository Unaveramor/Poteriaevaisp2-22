@extends('admin.layouts.layout')

@section('content')
    <div class="content_wrapper">
        <section class="content_header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Категория</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumd float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список категорий</h3>
                            </div>
                            <div class="card-body">
                            
                                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Добавить категорию</a>
                                @if (count($categories))
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th style="width: 30px">#</th>
                                                    <th>Наименование</th>
                                                    <th>Slug</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{ $category->id }}</td>
                                                    <td>{{ $category->title }}</td>
                                                    <td>{{ $category->slug }}</td>
                                                    <td>
                                                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-into btn-sm float-left mr-1">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>

                                                        <from action="{{ route('categories.destroy', ['category'=>$category->id]) }}" method="post" class="float-left">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger dtn-sm" onclick="return confirm('Подтверждение удаления, ааа')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        
                                                            </button>
                                                        </from>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p>Категорий пока нет . _.</p>
                                @endif

                            </div>
                            <div class="card-footer clearfix">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection