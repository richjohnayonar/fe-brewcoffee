<div class="owl-carousel owl-theme">

                        <!-- Announcement 1 -->
                                 @foreach($sliders as $SliderItem)
                                <div class="owl-carousel-info-wrap item ">
                                    <img src="{{ asset($SliderItem->image)}}" class="owl-carousel-image " alt="">
                                    <span class="text-wrap text-info fs-4">
                                    {{$SliderItem->title}}</span>
                                </div>
                                @endforeach
</div>

<!-- 
<div class="owl-carousel-info-wrap item d-flex align-items-center position-relative">
    <img src="{{ asset($SliderItem->image)}}" class="owl-carousel-image" alt="">
    <span class="text-wrap fs-3 position-absolute text-center w-100 text-blue" style="bottom: 0; color: 
#fad44b ">{{$SliderItem->title}}</span>
</div> -->