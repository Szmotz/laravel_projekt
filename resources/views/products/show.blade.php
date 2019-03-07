@extends('master')
@section('content')

<div class="col-xs-12 videos-header card">
    <h2>{{ $product->name }}.</h2>
</div>

<div class="row">

    <!-- left col. -->
    <div class="col-xs-12 col-md-9 single-video-left">

        <div class="card">

            <div class="embed-responsive embed-responsive-16by9">
               <img src="{{ $product->img }}">
            </div>
        
            <div class="single-video-content">
                <div class="categories">
                    <h4>Kategorie</h4>
                    <span>
                    <a href="">Do Gier</a>,&nbsp;
                    <a href="">Biura</a>,&nbsp;
                    <a href="">Modny</a>
                    </span>
                </div>
                <h4>Pełny opis produktu: </h4>
                <p>{{ $product->description }}</p>
                <span class="upper-label">Cena: {{ $product->price }} ZŁ.</span>
                
                <div class="edit-button">
                    
                    @can('admin-only', Auth::user())
                
                 <a class="btn btn-primary btn-lg" href="{{ action('ProductsController@edit', $product->id) }}">
                        Edytuj Produkt
                    </a>    
                @endcan
              @cannot('admin-only',Auth::user())
                    <button class="btn btn-primary btn-lg">
                        Dodaj do koszyka
                    </button>
                @endcannot
                </div>

                
            </div>
            
        </div>
        
    </div>

    <!-- right col. -->
    <div class="col-xs-12 col-md-3 single-video-right">
        
        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box">
                <h4>Udostępnij</h4>
                <div class="social-icons">
                    <i class="fa fa-facebook-official"></i>
                    <i class="fa fa-twitter-square"></i>
                    <i class="fa fa-google-plus-square"></i> 
                    <i class="fa fa-youtube-square"></i>
                </div>
            </div>
        </div>

        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box categories-box">
                <h4>Popularne kategorie</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h5>Do gier</h5>
                        <span>2 produktów</span>
                    </li>
                    <li class="list-group-item">
                        <h5>Do biura</h5>
                        <span>87 filmów</span>
                    </li>
                    
                </ul>
            </div>
        </div>

        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box">
                <h4>Statystyki</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge">13</span>Produktów
                    </li>
                    <li class="list-group-item">
                        <span class="badge">18</span>Kategorii
                    </li>
                    <li class="list-group-item">
                        <span class="badge">7</span>Użytkowników
                    </li>
                    
                </ul>                            
            </div>
        </div>

    </div>

</div>

@stop