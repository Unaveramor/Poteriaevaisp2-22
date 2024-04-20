@extends('admin.layouts.layout')

@section('content')
<div class="content_wrapper">
        <section class="content_header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>создание категории</h1>
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
                                <h3 class="card-title">создание категорий</h3>
                            </div>
                            
                            <form role="form" method="post" action="{{ route('categories.store') }}">
                                @csrf 
                                <div class="card-body"> 
                                    <div class="form-group">
                                        <label for="title">Название</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" 
                                        id="title" placeholder="Название">
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </form> 

                            <div class="card-footer clearfix">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection