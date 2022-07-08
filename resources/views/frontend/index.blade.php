@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/counterup2/2.0.2/index.min.js"></script>
    
<div >
    <div class="block">
        <x-primary-image-slider />
    </div>

    <div class="my-5"></div>
    
    

    <div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="product-card grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3   gap-8">
                
                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/mission.jpg"
                            class="card-img-top" alt="Mission" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Mission</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
                
                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/vision.jpg" 
                            class="card-img-top" alt="vision" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Vision</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>

                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/core-value.jpg"
                            class="card-img-top" alt="Core Value" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Core Value</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
            </div>
        </section>
    </div>




    <div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"> </h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                
                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/current-events-newspaper.jpg"
                            class="card-img-top" alt="Current Event" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Current Event</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>

                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="" 
                            class="card-img-top" alt="Upcoming event" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Upcoming event</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>

                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/blog-post.jpg"
                            class="card-img-top" alt="Blog Post" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Blog Post</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
            </div>
        </section>
    </div>

<!-- News and newsletter -->
    <div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">
                
            
            <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/news.jpg" 
                            class="card-img-top" alt="News" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">News</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>

                <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/news-letter.jpg"
                            class="card-img-top" alt="Newsletter" />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Newsletter</h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>

                            <!-- <button class="btn">
                                <a href="#">Submit</a>
                            </button>  -->
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>                
            </div>
        </div>
    </section>
</div>
<!-- Advertisment and calander -->
<div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                
            
            <section>
                <div class="container py-5">
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card text-black">
                        
                        <img src="/images/advertisement.jpg" 
                            class="card-img-top" alt="Advertisement " />
                        <div class="card-body">
                            <div class="text-center">
                            <h5 class="card-title">Advertisement </h5>
                            <p class="text-muted mb-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>


                    <section>
                            <div class="row justify-content-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <div class="card text-black">
                                        <div class="calendar">
                                        <iframe src="https://www.hamropatro.com/widgets/calender-medium.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:295px; height:385px;" allowtransparency="true"></iframe>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>                  
 </div>
</div>


<!-- Date Converter and Clock -->
<div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                
            
            <section>
                    <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                       <div class="converter">
                        <h1>Date Converter</h1>
                       <iframe src="https://www.hamropatro.com/widgets/dateconverter.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:350px; height:150px;" allowtransparency="true"></iframe>
                       </div>
                    </div>
                    </div>
                
                </section>


                    <section>
                       
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4">
                                <div class="time_zone">
                                            <div class="clock" data-timezone="Asia/Kathmandu"></div>
                                                <div class="place_name">Nepal,Kathmandu</div>

                                            <div class="clock" data-timezone="America/New_York"></div>
                                                <div class="place_name">US,New York</div>
                                        </div>  
                                </div>
                            </div>
                        
                    </section>                  
    </div>
</div>
</section>
</div>


<!-- Counter Up -->
<div class="container py-5 count-up">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-10">
                
            
            <section class="counter-container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                            <div class="col-3">
                            <div class="icon"><i class="fa-solid fa-chart-line"></i></div>
                            <p><span class="counter" data-count="4070">0</span>+</p>
                            <p><span class="counter-desc">Website Reach</span></p>
                            </div>
                </div>
            </section>

            <section>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="col-3">
                            <div class="icon"><i class="fa-solid fa-circle-dollar-to-slot"></i></div>
                            <p><span class="counter" data-count="2500">0</span>+</p>
                            <p><span class="counter-desc">Number Of Doners</span></p>
                            </div>
                </div>
            </section>

            <section>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="col-3">
                            <div class="icon"><i class="fa-solid fa-star"></i></div>
                            <p><span class="counter" data-count="50">0</span>+</p>
                            <p><span class="counter-desc">Ratings</span></p>
                            </div>
                </div>
            </section>
                

            <section>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="col-3">
                            <div class="icon"><i class="fa-solid fa-handshake-angle"></i></div>
                            <p><span class="counter" data-count="8343">0</span>+</p>
                            <p><span class="counter-desc">Number Of Volunteers</span></p>
                            </div>
                </div>
    </div>
</div>
</section>
</div>



  
<!-- Features -->
<div class="container py-5">
        <section class="mb-4">
            <div class="flex items-center mb-4 sm:mb-6">
                <h2 class="tracking-wide text-lg"></h2>
                {{-- <h2 class="tracking-wide bg-main-40 bg-gradient-to-r from-main-500 rounded-sm via-blue-500 to-main-400 py-2 px-4 lg:px-8 text-white"></h2> --}}
                <a class="ml-auto text-sm text-red-600 font-semibold hover:underline" href="{{ route('frontend.products.by-group', 'top') }}"></a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-20">
                
            
            <section>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-graduation-cap"></i></div>
                        <div class="title">Educate</div>
                        <div class="para">Your generosity through sponsorship can change children's lives by providing 
                            them with food, education, medical care & opportunity.
                        </div>
                        <div class="button"><button>Educate</button></div>
                    </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-apple-whole"></i></div>
                        <div class="title">Feed</div>
                        <div class="para">Every person knows hunger. We have the opportunity to alleviate suffering for someone
                            every time you give.
                        </div>
                        <div class="button"><button>Feed</button></div>
                    </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-om"></i></div>
                        <div class="title">Spread</div>
                        <div class="para">Provide hope by sending upstream guru to spread the 
                            gospel of Ram krishna throughout world.
                        </div>
                        <div class="button"><button>Feed</button></div>
                    </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
                        <div class="title">Give</div>
                        <div class="para">Every single cent counts,and your generosity matters. 
                            Each donation we receive enables us to keep helping people who help people.  
                        </div>
                        <div class="button"><button>Give</button></div>
                    </div>
                    </div>
                </div>
            </section>
    </div>
</div>
</section>
</div>







    <div class="bg-gray-100">
        <div class="container py-5 md:py-8 ">
            <div class="text-center mb-4 sm:mb-6">
                <h2 class="text-lg sm:text-2xl tracking-wide">Blogs</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 lg:gap-8">
                @foreach ($posts as $post)
                <div class="bg-white rounded shadow-sm overflow-hidden">
                    @if ($post->cover_image)
                    <a href="{{ route('frontend.blogs.show', $post) }}" class="block aspect-w-12 aspect-h-6">
                        <img src="{{ $post->imageUrl() }}" alt=" {{ $post->title }}">
                    </a>
                    @endif
                    <div class="p-4">
                        <h6 class="text-gray-800 line-clamp-1">
                            <a href="{{ route('frontend.blogs.show', $post) }}">
                                {{ $post->title }}
                            </a>
                        </h6>
                        <p class="text-sm">
                            {{ $post->excerpt }}
                        </p>
                        <a href="{{ route('frontend.blogs.show', $post) }}" class="underline text-sm font-semibold mt-4">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-5 sm:mt-6">
                <a href="{{ route('frontend.blogs.index') }}" class="inline-block py-2 px-4 bg-blue-600 text-white rounded-full hover:bg-blue-500 font-semibold text-sm">View All Blogs</a>
            </div>
        </div>
    </div>

    <div class="text-white py-5" style="background-color: #444444;">
        @include('frontend.partials.our-services')
    </div>

</div>


@endsection

