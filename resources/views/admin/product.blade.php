@extends('admin/layout')

@section('container')
{{session('message')}};
<h1 class="m-b-15">All Medicines</h1>

<a href="product/manage_product">
    <button class="btn btn-success" type="submit">Add Medicine</button>
</a>
<div class="row m-t-30">
    <div class="col-md-3 col-xl-3">
    <!-- DATA TABLE-->
    <div class="card">
        <img class="card-img-top" src="{{asset('admin_assets/images/bg-title-01.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title mb-3">Card Image Title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.
            </p>
        </div>
    </div>
    <!-- END DATA TABLE-->
    </div>

    <div class="col-md-3 col-xl-3">
    <!-- DATA TABLE-->
    <div class="card">
        <img class="card-img-top" src="{{asset('admin_assets/images/bg-title-01.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title mb-3">Card Image Title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.
            </p>
        </div>
    </div>
    <!-- END DATA TABLE-->
    </div>

    <div class="col-md-3 col-xl-3">
    <!-- DATA TABLE-->
    <div class="card">
        <img class="card-img-top" src="{{asset('admin_assets/images/bg-title-01.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title mb-3">Card Image Title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.
            </p>
        </div>
    </div>
    <!-- END DATA TABLE-->
    </div>

    <div class="col-md-3 col-xl-3">
    <!-- DATA TABLE-->
    <div class="card">
        <img class="card-img-top" src="{{asset('admin_assets/images/bg-title-01.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title mb-3">Card Image Title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.
            </p>
        </div>
    </div>
    <!-- END DATA TABLE-->
    </div>
</div>

@endsection
