<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        @foreach($slider as $rs)
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay" style="background-image:url('{{ Storage::url($rs->image) }}')">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>{{$rs->title}}</h3>
                            <p>Build Your Body and Fitness with Professional Touch</p>
                            <p>{{$rs->price}}₺</p>
                            <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="boxed-btn3">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <span>Build Up Your</span>
                            <h3>Strength</h3>
                            <p>Build Your Body and Fitness with Professional Touch</p>
                            <a href="#" class="boxed-btn3">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <span>Build Up Your</span>
                            <h3>Body Shape</h3>
                            <p>Build Your Body and Fitness with Professional Touch</p>
                            <a href="#" class="boxed-btn3">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <span>Build Up Your</span>
                            <h3>Strength</h3>
                            <p>Build Your Body and Fitness with Professional Touch</p>
                            <a href="#" class="boxed-btn3">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- slider_area_end -->
