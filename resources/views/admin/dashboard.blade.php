@extends('admin/layout')

@section('container')
{{session('message')}};
<h1 class="m-b-15">All Orders</h1>

<a href="order/manage_order">
    <button class="btn btn-success" type="submit">Add Order</button>
</a>
<div class="row m-t-30">
<div class="col-md-12">
    <!-- DATA TABLE-->
    <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Slug</th>
                    <th>Regular Price <br>(Per piece in BDT)</th>
                    <th>Sale Price <br>(Per piece in BDT)</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $list)
                <tr>
                    <td>{{$list->order_id}}</td>
                    <td>{{$list->fname}}</td>
                    <td>{{$list->lname}}</td>
                    <td>{{$list->email}}</td>
                    <td>{{$list->phnone}}</td>
                    <td>{{$list->bill}}</td>
                    <td>{{$list->delivery}}</td>
                    <td>
                    <a href="product/delete/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                    <a href="product/manage_product/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE-->
    </div>
</div>

@endsection
