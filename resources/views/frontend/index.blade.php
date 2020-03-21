@extends('frontend.master')
@section('content')
<div class="banner">
    <img src="images/banner.png" alt="banner" width="100%">
</div>

<section>
    <h3 class="default-color mb-header-font text-center py-5 font-weight-bold">ရောင်းအားအကောင်းဆုံးပစ္စည်းများ</h3>
    <section class="regular slider">
        @foreach ($product as $item)
        @if ($item->hot_item==1)
        <div class="card driver-card">
        <a href="/product_detail/{{ $item->id }}" class="img-zoom"><figure class="m-0"><img src="/uploads/{{ $item->product_img }}" class="card-img-top" style="width: 100%;height: 180px;" alt="..."></figure></a></a>
            <div class="card-body">
                <h6 class="card-title mb-font default-color h-fs font-weight-bold">{{ $item->category->category_name }}</h6>
                <p class="card-text d-fs">{{ $item->product_name }}</p>
                <p class="card-text"><small>၁ပိဿာ - {{ $item->price }}ကျပ်</small></p>
            </div>
        </div>
        @endif
        @endforeach
        
    </section>
</section>
@endsection
@push('scripts')

<script type="text/javascript">
    $(document).ready(function () {
        $(".searchicon").click(function () {
            
            $(".search-box").toggle();
            
            $("input[type='text'].search").focus();
            
        });
        var count = 0;
        $(".add").click(function () {
            
            count++;
            
            $(".count").html(count);
            
            $(".count").css("background", "#F70024");
            
        });
        $('.owl-carousel').owlCarousel({
            
            loop: true,
            
            margin: 30,
            
            nav: true,
            
            dots: true,
            
            autoplay: true,
            
            responsive: {
                
                0: {
                    
                    items: 1
                    
                },
                
                600: {
                    
                    items: 1
                    
                },
                
                1000: {
                    
                    items: 4
                    
                }
                
            }
            
        });
    });
    
</script>
@endpush