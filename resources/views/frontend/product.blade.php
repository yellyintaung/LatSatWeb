@extends('frontend.master')
@push('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
@endpush
@section('content')

<section>
            
    <div class="container">
    <img src="/uploads/{{ $category->image }}" alt="product" width="100%">
        
      
            <div class="breadcrumb mt-3" style="background: #32B34A;">
                <h5 class="text-white font-weight-bold">{{ $category->category_name }}</h5>   
            </div>
       
        @foreach ($category->product->chunk(4) as $chunk)
        <div class="row">
            @foreach ($chunk as $item)
            <div class="col-md-3">
                <div class="card meat-card">
                <a href="/product_detail/{{ $item->id }}" class="img-zoom"><figure class="m-0"><img src="/uploads/{{ $item->product_img }}" class="card-img-top" style="width: 100%;height: 180px;" alt="..."></figure></a> 
                    <div class="card-body" style="padding-top: 0.7rem;">
                        <p class="card-text m-0 font-weight-bold" style="font-size: 15px;">{{ $item->product_name }}</p>
                        <p class="card-text m-0 pb-1 pt-1"><small>၁ပိဿာ - {{$item->price }}ကျပ်</small></p>
                        
                        <h6 class="default-color">အရေအတွက်</h6>
                        <div class="wrap w-100 pt-1">
                            <button type="button" id="sub" class="sub">-</button>
                            <input class="count pl-2 txt-qy" id="count" type="text" value="1" min="1" max="1000" style="width:42%;" /> ကျပ်သား
                            <button type="button" id="plus" class="plus">+</button>
                        </div>
                        <a class="btn btn-sm btn-add add text-white mt-3 float-right" style="cursor:pointer;" data-id="">Add To Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</section>
@endsection
@push('scripts')
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
        
        $('.plus').click(function () {		
            var th = $(this).closest('.wrap').find('.count');    	
            th.val(+th.val() + 1);
        });
        $('.sub').click(function () {
            var th = $(this).closest('.wrap').find('.count');    	
            if (th.val() > 1) th.val(+th.val() - 1);
        });
        $('.btn-add').click(function(){
            var id=$(this).data("id");
            var count=$('#count').val();
            $.ajax({
                url:'/add_cart',
                type:'get',                                                                           
                data:{'id':id,'qty':count},
                success:function(data){
                    console.log(data);
                    showCart();
                }
            });
        });
        
        $('.txt-qy').keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                //display error message
                $("#errmsg").html("Digits Only").show().fadeOut("slow");
                return false;
            }
        });
        
    });
</script>
@endpush