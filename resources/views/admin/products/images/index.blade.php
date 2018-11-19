@extends('layouts.app')

@section('body-class', 'hernandez-page')

@section('tittle', 'Imagenes de productos de productos')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
<div class="container">


<div class="section text-center">
    <h2 class="title">Images del producto "{{$producthernandez->name}}"</h2>
    
            <form method="post" action="" enctype="multipart/form-data">
                 {{ csrf_field() }}
             <input type="file" name="photo" required>
             <button type="submit" class="btn btn-primary btn-round">Subir nueva imagen</button>
             <a href="{{ url('/admin/products') }}" class="btn btn-default btn-round">Volver al listado de productos</a>
            </form>
       
     <hr>
     

     <div class="row">
     @foreach($imageshernandez as $images)
    <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <img src="{{ $images->url }}" width="250" height="250" >
            <form action="" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="hidden" name="image_id" value="{‌{ $images->id }}">   
                <button type="submit" class="btn btn-danger btn-round">Eliminar imagen</button>

            </form>
            
          </div>
        </div>
    </div>
    @endforeach
    </div>

</div>



</div>

</div>

<!-- de esta forma llamamos el includ de unfooter dice que esta dentro de la carpeta includes hay un archivo llamado footer  -->
@include('includes.footer')

@endsection
