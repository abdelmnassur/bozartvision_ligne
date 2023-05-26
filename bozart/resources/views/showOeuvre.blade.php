<x-home-basic>
    <main id="MainContent" class="content-for-layout">
        <div class="product-page mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-gallery product-gallery-vertical d-flex">
                            <div class="product-img-large">
                                <div class="img-large-slider common-slider" data-slick='{
                                    "slidesToShow": 1, 
                                    "slidesToScroll": 1,
                                    "dots": false,
                                    "arrows": false,
                                    "asNavFor": ".img-thumb-slider"
                                }'>
                                    <div class="img-large-wrapper">
                                        <a href="assets/img/products/bags/39.jpg" data-fancybox="gallery">
                                            <img src="{{ asset('storage/image/oeuvres/'.$oeuvre->image) }}" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-img-thumb">
                                <div class="img-thumb-slider common-slider" data-vertical-slider="true" data-slick='{
                                    "slidesToShow": 5, 
                                    "slidesToScroll": 1,
                                    "dots": false,
                                    "arrows": true,
                                    "infinite": false,
                                    "speed": 300,
                                    "cssEase": "ease",
                                    "focusOnSelect": true,
                                    "swipeToSlide": true,
                                    "asNavFor": ".img-large-slider"
                                }'>
                                    
                                </div>
                                <div class="activate-arrows show-arrows-always arrows-white d-none d-lg-flex justify-content-between mt-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-details ps-lg-4">
                            <h3 class="product-title mb-3">{{ $oeuvre->titre }}</h3>
                            
                            <h4 class="product-vendor product-meta mb-3"> <strong class="label">Categorie :</strong> {{ $oeuvre->categorie->categorie }}</h4>
                            
                            {{-- <h4 class="product-vendor product-meta mb-3">
                                <strong class="label"></strong> <br>
                                <p>{{ $oeuvre->description }}</p>
                            </h4>
                             --}}
                            <h4 class="product-vendor product-meta mb-3"> Nombre d'exemplaire : {{ $oeuvre->nombre_exemplaire }}
                            
                            <h4 class="product-vendor product-meta mb-3"> <strong class="label">Taille :</strong> {{ $oeuvre->largeur }}X{{ $oeuvre->largeur }} cm</h4>
                            
                            <div class="product-price-wrapper mb-4">
                                <span class="product-price regular-price">${{ $oeuvre->prix }}</span>
                            </div>

                            <form class="product-form" action="#">
                                <div class="buy-it-now-btn mt-2">
                                    <button type="submit" class="position-relative btn-atc btn-buyit-now">COMMANDEZ MAINTENANT</button>
                                </div>
                            </form>

                            <h4 class="product-vendor product-meta mb-3 pt-3">
                                <strong class="label">Réaliser par :</strong> <br>
                                <a href="{{ route('showArtiste',$oeuvre->artiste->id) }}"> {{ $oeuvre->artiste->user->prenom }} {{ $oeuvre->artiste->user->nom }} </a>
                            </h4>
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- product tab start -->
        <div class="product-tab-section mt-100" data-aos="fade-up" data-aos-duration="700">
            <div class="container">
                <div class="tab-list product-tab-list">
                    <nav class="nav product-tab-nav">
                        <a class="product-tab-link tab-link active" href="#pdescription" data-bs-toggle="tab">Description</a>
                    </nav>
                </div>
                <div class="tab-content product-tab-content">
                    <div id="pdescription" class="tab-pane fade show active">
                        <div class="row">
                            <div class="col-lg-7 col-md-12 col-12">
                                <div class="desc-content">
                                    <h4 class="heading_18 mb-3"> C'est quoi {{ $oeuvre->titre }} ?</h4>
                                    <p class="text_16 mb-4">{{ $oeuvre->description }}.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product tab end -->
        
        <!-- you may also like start -->
        {{-- <div class="featured-collection-section mt-100 home-section overflow-hidden">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-heading">You may also like</h2>
                </div>

                <div class="product-container position-relative">
                    <div class="common-slider" data-slick='{
                    "slidesToShow": 4, 
                    "slidesToScroll": 1,
                    "dots": false,
                    "arrows": true,
                    "responsive": [
                    {
                        "breakpoint": 1281,
                        "settings": {
                        "slidesToShow": 3
                        }
                    },
                    {
                        "breakpoint": 768,
                        "settings": {
                        "slidesToShow": 2
                        }
                    }
                    ]
                }'>

                <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a class="hover-switch" href="collection-left-sidebar.html">
                                <img class="secondary-img" src="assets/img/products/bags/11.jpg"
                                    alt="product-img">
                                <img class="primary-img" src="assets/img/products/bags/1.jpg"
                                    alt="product-img">
                            </a>

                            <div class="product-card-action product-card-action-2">
                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                    data-bs-toggle="modal">QUICKVIEW</a>
                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                            </div>

                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                        <div class="product-card-details text-center">
                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">black backpack</a>
                            </h3>
                            <div class="product-card-price">
                                <span class="card-price-regular">$1529</span>
                                <span class="card-price-compare text-decoration-line-through">$1759</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a class="hover-switch" href="collection-left-sidebar.html">
                                <img class="secondary-img" src="assets/img/products/bags/22.jpg"
                                    alt="product-img">
                                <img class="primary-img" src="assets/img/products/bags/2.jpg"
                                    alt="product-img">
                            </a>

                            <div class="product-card-action product-card-action-2">
                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                    data-bs-toggle="modal">QUICKVIEW</a>
                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                            </div>

                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                        <div class="product-card-details text-center">
                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">lady handbag</a>
                            </h3>
                            <div class="product-card-price">
                                <span class="card-price-regular">$529</span>
                                <span class="card-price-compare text-decoration-line-through">$759</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a class="hover-switch" href="collection-left-sidebar.html">
                                <img class="secondary-img" src="assets/img/products/bags/23.jpg"
                                    alt="product-img">
                                <img class="primary-img" src="assets/img/products/bags/3.jpg"
                                    alt="product-img">
                            </a>

                            <div class="product-card-action product-card-action-2">
                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                    data-bs-toggle="modal">QUICKVIEW</a>
                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                            </div>

                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                        <div class="product-card-details text-center">
                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">men travel bag</a>
                            </h3>
                            <div class="product-card-price">
                                <span class="card-price-regular">$529</span>
                                <span class="card-price-compare text-decoration-line-through">$759</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a class="hover-switch" href="collection-left-sidebar.html">
                                <img class="secondary-img" src="assets/img/products/bags/26.jpg"
                                    alt="product-img">
                                <img class="primary-img" src="assets/img/products/bags/4.jpg"
                                    alt="product-img">
                            </a>

                            <div class="product-card-action product-card-action-2">
                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                    data-bs-toggle="modal">QUICKVIEW</a>
                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                            </div>

                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                        <div class="product-card-details text-center">
                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">nike legend
                                    stripe</a>
                            </h3>
                            <div class="product-card-price">
                                <span class="card-price-regular">$529</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a class="hover-switch" href="collection-left-sidebar.html">
                                <img class="secondary-img" src="assets/img/products/bags/27.jpg"
                                    alt="product-img">
                                <img class="primary-img" src="assets/img/products/bags/5.jpg"
                                    alt="product-img">
                            </a>

                            <div class="product-card-action product-card-action-2">
                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                    data-bs-toggle="modal">QUICKVIEW</a>
                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                            </div>

                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                        <div class="product-card-details text-center">
                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">nike legend
                                    stripe</a>
                            </h3>
                            <div class="product-card-price">
                                <span class="card-price-regular">$529</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a class="hover-switch" href="collection-left-sidebar.html">
                                <img class="secondary-img" src="assets/img/products/bags/29.jpg"
                                    alt="product-img">
                                <img class="primary-img" src="assets/img/products/bags/6.jpg"
                                    alt="product-img">
                            </a>

                            <div class="product-card-action product-card-action-2">
                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                    data-bs-toggle="modal">QUICKVIEW</a>
                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                            </div>

                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                        <div class="product-card-details text-center">
                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">nike legend
                                    stripe</a>
                            </h3>
                            <div class="product-card-price">
                                <span class="card-price-regular">$529</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a class="hover-switch" href="collection-left-sidebar.html">
                                <img class="secondary-img" src="assets/img/products/bags/17.jpg"
                                    alt="product-img">
                                <img class="primary-img" src="assets/img/products/bags/7.jpg"
                                    alt="product-img">
                            </a>

                            <div class="product-card-action product-card-action-2">
                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                    data-bs-toggle="modal">QUICKVIEW</a>
                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                            </div>

                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                        <div class="product-card-details text-center">
                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">women vanity
                                    bag</a>
                            </h3>
                            <div class="product-card-price">
                                <span class="card-price-regular">$529</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-item" data-aos="fade-up" data-aos-duration="300">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a class="hover-switch" href="collection-left-sidebar.html">
                                <img class="secondary-img" src="assets/img/products/bags/18.jpg"
                                    alt="product-img">
                                <img class="primary-img" src="assets/img/products/bags/8.jpg"
                                    alt="product-img">
                            </a>

                            <div class="product-card-action product-card-action-2">
                                <a href="#quickview-modal" class="quickview-btn btn-primary"
                                    data-bs-toggle="modal">QUICKVIEW</a>
                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                            </div>

                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                <svg class="icon icon-wishlist" width="26" height="22" viewBox="0 0 26 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                        <div class="product-card-details text-center">
                            <h3 class="product-card-title"><a href="collection-left-sidebar.html">women large
                                    bag</a>
                            </h3>
                            <div class="product-card-price">
                                <span class="card-price-regular">$529</span>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                    <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
                </div>
            </div>
        </div> --}}
        <!-- you may also lik end -->
    </main>
</x-home-basic>