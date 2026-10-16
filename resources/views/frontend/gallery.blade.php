@extends('layouts.main')
@section('head', 'Gallery')

@section('header-area')
   @include('layouts.subheader')
@endsection

@section('content')
    @section('breadcrumb', 'Gallery')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->

    <!-- services-area -->
    <section class="services__area-five services__bg-five" data-background="assets/img/bg/inner_services_bg02.jpg" style="padding: 100px 0px;">
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center" style="margin-bottom:70px; padding-top: 80px;">
                        <h2 class="section__title section__title-44">Our Gallery</h2>
                    </div>
                </div>
            </div> --}}
            <div class="services-item-wrap">
                <div class="row justify-content-center">
                    @foreach ($gallery as $gallerys)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
                        <div class="gallery-item">
                            <a href="javascript:void(0);" class="lightbox-trigger">
                                <img src="storage/{{ $gallerys->image }}" alt="">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
    <div class="col-12 d-flex justify-content-center">
        <div class="edu-pagination mt-30 mb-20">
            @if ($gallery->hasPages())
            <ul>
                {{-- Previous Page Link --}}
                @if ($gallery->onFirstPage())
                    <li class="disabled"><span><i class="fal fa-angle-left"></i></span></li>
                @else
                    <li><a href="{{ $gallery->previousPageUrl() }}" rel="prev"><i class="fal fa-angle-left"></i></a></li>
                @endif
    
                {{-- Pagination Links --}}
                @foreach ($gallery->getUrlRange(1, $gallery->lastPage()) as $page => $url)
                    @if ($page == $gallery->currentPage())
                        <li class="active"><a href="#"><span>{{ $page }}</span></a></li>
                    @else
                        <li><a href="{{ $url }}"><span>{{ $page }}</span></a></li>
                    @endif
                @endforeach
    
                {{-- Next Page Link --}}
                @if ($gallery->hasMorePages())
                    <li><a href="{{ $gallery->nextPageUrl() }}" rel="next"><i class="fal fa-angle-right"></i></a></li>
                @else
                    <li class="disabled"><span><i class="fal fa-angle-right"></i></span></li>
                @endif
            </ul>
            @endif
        </div>
    </div>
</div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- Lightbox -->
    <div id="lightbox" class="lightbox">
        <span class="close">&times;</span>
        <a class="prev">&#10094;</a>
        <a class="next">&#10095;</a>
        <div class="lightbox-content">
            <img id="lightbox-img" src="" alt="">
        </div>
    </div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const closeBtn = document.querySelector('.close');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        let currentIndex = 0;
        const galleryItems = document.querySelectorAll('.lightbox-trigger');

        function showLightbox(index) {
            lightbox.style.display = 'block';
            lightboxImg.src = galleryItems[index].querySelector('img').src;
            currentIndex = index;
        }

        galleryItems.forEach((item, index) => {
            item.addEventListener('click', function () {
                showLightbox(index);
            });
        });

        closeBtn.addEventListener('click', function () {
            lightbox.style.display = 'none';
        });

        prevBtn.addEventListener('click', function () {
            currentIndex = (currentIndex === 0) ? galleryItems.length - 1 : currentIndex - 1;
            showLightbox(currentIndex);
        });

        nextBtn.addEventListener('click', function () {
            currentIndex = (currentIndex === galleryItems.length - 1) ? 0 : currentIndex + 1;
            showLightbox(currentIndex);
        });

        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) {
                lightbox.style.display = 'none';
            }
        });
    });
</script>
@endpush