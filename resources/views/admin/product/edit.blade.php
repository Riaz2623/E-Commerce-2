@extends('layouts.backend')

@section('main')

<div class="card">

    <div class="card-header p-0 justify-content-centrer d-flex">

        <h4 class="card-title text-center bg-white" style='border:1px solid; border-radius:10px;padding:20px 60px; width:100%;'><b>Product Edit</b></h4>

    </div>
    <div class="card-body">
        <div class="pull-left">
            <a class="btn btn-primary" href="{{route('product.manage')}}"> Manage Product</a>
        </div>
        </br>
        </br>
        <p class="text-center text-success">{{Session::get('message')}}</p>
        <form action="{{route('product.update',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Product Name">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        </div>
                    </div>
                    </br>
                    <div class="input-group">
                        <input type="number" name="offerprice" value="{{$product->offerprice}}" class="form-control" placeholder="Offer Price">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa-solid fa-hand-holding-dollar"></i></span>
                        </div>
                    </div>
                    </br>
                    <div class="input-group">
                        <input type="number" name="regularprice" value="{{$product->regularprice}}" class="form-control" placeholder="Regular Price">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa-solid fa-money-check-dollar"></i></span>
                        </div>
                    </div>
                    </br>
                    <div class="input-group">
                        <input type="file" name="photo" class="form-control-file" placeholder="Image">
                        <img src="{{asset($product->photo)}}" alt="" width="120" height="120">
                    </div>
                    </br>
                    <div class="card-style mb-30">
                        <div class="input-style-2">

                            <select name="category_id" class="form-control text-center" id="">
                                <option> -- Select Category Name -- </option>
                                @foreach($categorys as $Category)
                                <option value="{{$Category->id}}"> {{$Category->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </br>
                    <div class="card-style mb-30">
                        <div class="input-style-2">

                            <select name="section_id" class="form-control text-center" id="">
                                <option> -- Select Section Name -- </option>
                                @foreach($sections as $section)
                                <option value="{{$section->id}}"> {{$section->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </br>
                    <!-- <div class="input-group">
                            <input type="text" name="eachfeature" class="form-control" placeholder="Each Feature" >
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa-solid fa-money-check-dollar"></i></span>
                            </div>
                        </div>
                        </br> -->
                    <div class="input-group">
                        <input type="text" name="weight" value="{{$product->weight}}" class="form-control" placeholder="Weight">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa-solid fa-scale-unbalanced-flip"></i></span>
                        </div>
                    </div>
                    </br>
                    <div class="input-group">
                        <input type="number" name="bar_code" value="{{$product->bar_code}}" class="form-control" placeholder="Bar_Code">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa-solid fa-barcode"></i></span>
                        </div>
                    </div>
                    </br>
                    <div class="input-group">
                        <input type="number" name="offerdiscount" value="{{$product->offerdiscount}}" class="form-control" placeholder="Offer Discount">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa-brands fa-discourse"></i></span>
                        </div>
                    </div>
                    </br>
                </div>
                <div class="col-lg-6">
                    <label for="horizontal-email-input" class="col-form-label">Description</label>
                    <div class="input-group">
                        <textarea class="ckeditor" name="description" placeholder="Description">{!! $product->description !!}</textarea>
                    </div>
                    </br>

                    <div class="card-style mb-30">
                        <div class="input-style-2">

                            <select name="brand_id" class="form-control text-center" id="">
                                <option> -- Select Brand Name -- </option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}"> {{$brand->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </br>

                    <div class="card-style mb-30">
                        <div class="input-style-2">

                            <select name="manufacturer_id" class="form-control text-center" id="">
                                <option> -- Select Manufacturer Name -- </option>
                                @foreach($manufacures as $manufacure)
                                <option value="{{$manufacure->id}}"> {{$manufacure->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </br>

                    <div class="card-style mb-30">
                        <div class="input-style-2">

                            <select name="uom_id" class="form-control text-center" id="">
                                <option> -- Select UOM Name -- </option>
                                @foreach($uoms as $uom)
                                <option value="{{$uom->id}}"> {{$uom->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </br>
                </div>
            </div>
            </br>
            <div class="form-group row justify-content-end">
                <div>
                    <button type="submit" class="btn btn-primary w-md">Update</button>

                </div>
            </div>
        </form>
    </div>
</div>
<script>
    CKEDITOR.replace('description');
    .hight 360;
</script>





@endsection