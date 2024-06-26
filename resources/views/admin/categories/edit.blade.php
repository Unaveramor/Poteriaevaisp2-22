@extends('admin.layouts.layout')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>>Редактирование категорий</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Главная</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Категория {{ $category->title }}</h3>
                    </div>
                    <!-- / .card-header -->

                    <form role="form" method="post" action="{{ route('categories.update', ['category'=>$category->id]) }}">
                        @carf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input type="text" name="title" class="form-control @error('titile') is-invalid @enderror" id="title" value="{{ $category->title }}">
                            </div>
                        </div>
                        <!--  -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сщхранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>