@extends('layouts.app')
@section('title-block')Каталог@endsection
@section('content')
<section class="catalog-section">
    <div class="catalog-main-container">
        <div class="catalog-mainitems-block">

            <div class="catalog-allblocks">
         
            </div>
        </div>
        <div class="catalog-allproducts-block blur__modal">

        е 

            <button class="catalog-filters-button">Фильтр</button>

            <div class="catalog-filters-block hidden-filter">

            <h1 class="catalog-main-text hidden500-">Каталог</h1>

               @include('catalogFilter')
            </div>



            
            @include('productCatalog')


            <div>
            @include('cartProduct')
            </div>


        </div>
    </div>
</section>

<script src="./js/catalog.js"></script>
<script src="./js/filterCatalog.js"></script>



@endsection