@extends('FrontEnd.layouts.master')
@section('title')
Porsche.ca
@endsection

@section('content')
<div class="slide">
    <img src="{{ asset('Porsche03/img/homepage/homepage01.png') }}" class="slide-item" number="0" />
    <img src="{{ asset('Porsche03/img/homepage/homepage02.png') }}" class="slide-item" number="1" style="display: none;"  />
    <img src="{{ asset('Porsche03/img/homepage/background.png') }}" class="slide-item" number="2" style="display: none;"  />
    {{-- <a href="#" class="next">></a>
    <a href="#" class="prev"><</a> --}}
 </div>
 <div>
    <diV class="wapper">
        <!-- <p>Models</p> -->
        <div class="wrapper-img-1">
            <div class="box">
                <!-- <p>Models</p> -->
                <img src="{{ asset('Porsche03/img/homepage/model1.png') }}" class="models">
                <p> > 718-MSRP $ 66,400</p>
            </div>
            <div class="box">
                <!-- <p>Models</p> -->
                <img src="{{ asset('Porsche03/img/homepage/Model2.png') }}" class="models">
                <p>>  911 MSRP $ 113,000</p>
            </div>
            <div class="box">
                <!-- <p>Taycan MSRP $ 119,400</p> -->
                <img src="{{ asset('Porsche03/img/homepage/model3.png') }}" class="models">
                <p> > Taycan MSRP $ 119,400</p>
            </div>
            <div class="box">
        </div>
    </diV>
    <diV class="wapper">
        <!-- <p>Models</p> -->
        <div class="wrapper-img-1">
            <div class="box">
                <!-- <p>Models</p> -->
                <img src="{{ asset('Porsche03/img/homepage/model4.png') }}" class="models">
                <p> > 718-MSRP $ 66,400</p>
            </div>
            <div class="box">
                <!-- <p>Models</p> -->
                <img src="{{ asset('Porsche03/img/homepage/model5.png') }}" class="models">
                <p> > 911 MSRP $ 113,000</p>
            </div>
            <div class="box">
                <!-- <p>Taycan MSRP $ 119,400</p> -->
                <img src="{{ asset('Porsche03/img/homepage/model6.png') }}" class="models">
                <p> > Taycan MSRP $ 119,400</p>
            </div>
            <div class="box">
        </div>
    </diV>
    <div class="find">
        <p>Find a Porsche near you</p>
        <div class="relative">
            <img src="{{ asset('Porsche03/img/homepage/find1.png') }}" class="img">
            <!-- <a href="#">Reserve a 781 Model</a> -->
            <img src="{{ asset('Porsche03/img/homepage/find2.png') }}" class="img">
            <!-- <a href="#">Reserve a 911 Model</a> -->
            <img src="{{ asset('Porsche03/img/homepage/find3.png') }}" class="img">
            <!-- <a href="#">Reserve a Taycan Model</a> -->
        </div>
    </div>
    <div class="discover" >
        <p>Discover</p>
        <div class="grid-container">
            <div class="row">
                <div class="grid-item">
                    <img src="https://files.porsche.com/filestore/image/multimedia/none/rd-2020-homepage-teaser-pcl-porscheconnect-kw41/normal/0de81ee8-0305-11eb-80ce-005056bbdc38;sL;twebp/porsche-normal.webp">
                </div>
                <div class="grid-item">
                    <img src="https://files.porsche.com/filestore/image/multimedia/none/rd-2018-homepage-teaser-ww-e-performance-kw12/normal/f7cc8e7c-6599-11e9-80c4-005056bbdc38;sL;twebp/porsche-normal.webp">
                </div>
                <div class="grid-item">
                    <img src="https://files.porsche.com/filestore/image/multimedia/none/rd-2020-homepage-teaser-pcl-myporsche-kw39/normal/3dc71943-f82d-11ea-80ce-005056bbdc38;sL;twebp/porsche-normal.webp">
                </div>
                <div class="grid-item">
                    <img src="https://files.porsche.com/filestore/image/multimedia/none/rd-2020-homepage-teaser-pcl-porscheonlinecatalogue-kw41/normal/5e1186a2-0303-11eb-80ce-005056bbdc38;sL;twebp/porsche-normal.webp">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection