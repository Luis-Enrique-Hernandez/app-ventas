@extends('layouts.app')

@section('body-class', 'landing-page')

@section('tittle', 'Bienvenido a app venta')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
<div class="container">
<div class="row">
    <div class="col-md-6">
        <h1 class="title">Bienvenidos a pagina de App ventas.com</h1>
        <h4>Realiza pedidos en linea y te contactaremos para cordinar la entrega</h4>
        <br />
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> ¿COMO FUNCIONA?
        </a>
    </div>
</div>
</div>
</div>

<div class="main main-raised">
<div class="container">
<div class="section text-center section-landing">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="title">¿Por què App Venta</h2>
            <h5 class="description">puedes realizar nuestra relacion completa de productos, comparar precios y realizar pedidos cuando estes seguro</h5>
        </div>
    </div>

    <div class="features">
        <div class="row">
            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-primary">
                        <i class="material-icons">chat</i>
                    </div>
                    <h4 class="info-title">Atendemos tus dudas</h4>
                    <p>atendemos rapidamente cualquier duda via chat. No estas solo, si no que siempre estamos atentos a tus inquietudes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-success">
                        <i class="material-icons">verified_user</i>
                    </div>
                    <h4 class="info-title">Pagos seguros</h4>
                    <p>Todo pedido que realices serà confirmado a traves de una llamada. Si no confias en los pagos en linea pedes pagar contra entrega el valor acordado.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-danger">
                        <i class="material-icons">fingerprint</i>
                    </div>
                    <h4 class="info-title">Informacion privada</h4>
                    <p>Los pedidos que que realices solo lo conoceras tu a traves de tu panel de usuario. Nadie mas tiene acceso a esta informacion.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section text-center">
    <h2 class="title">Productos disponibles</h2>

    <div class="team">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4">
                <div class="team-player">
                    <img src="{{ $product->featuredimageurl }}" alt="Thumbnail Image" class="img-raised img-circle">
                    <h4 class="title">{{$product->name}}<br />
                        <small class="text-muted">{{$product->category->name}}</small>
                    </h4>
                    <p class="description">{{$product->description}}</p>
                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                </div>
            </div>
            @endforeach            
        </div>
    </div>

</div>


<div class="section landing-section">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center title">Informacion privada</h2>
            <h4 class="text-center description">Los pedidos que realices serà confirmado a travez de una llamada. Si no confias en los pagos en linea puedes paga contra entrega el valor acordado</h4>
            <form class="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Your Name</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Your Email</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Your Messge</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <button class="btn btn-primary btn-raised">
                            Send Message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
</div>

</div>

<footer class="footer">
<div class="container">
<nav class="pull-left">
    <ul>
        <li>
            <a href="http://www.creative-tim.com">
                Creative Tim
            </a>
        </li>
        <li>
            <a href="http://presentation.creative-tim.com">
               About Us
            </a>
        </li>
        <li>
            <a href="http://blog.creative-tim.com">
               Blog
            </a>
        </li>
        <li>
            <a href="http://www.creative-tim.com/license">
                Licenses
            </a>
        </li>
    </ul>
</nav>
<div class="copyright pull-right">
    &copy; 2016, made with <i class="fa fa-heart heart"></i> by Creative Tim
</div>
</div>
</footer>

@endsection
