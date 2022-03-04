<!-- BEGIN OF page cover -->
<div class="hh-cover page-cover">
  <!-- Particles as background - uncomment below to use particles/snow -->
  {{--  <div id="particles-js" class="cover-bg pos-abs full-size bg-color" data-bgcolor="rgba(2, 3, 10, 0.7)"></div>  --}}
</div>
<!--END OF page cover -->

@extends('layouts.canvas')

@section('content')
<div class="container">
    <div class="row article">
        <div class="col-md-8 article-column">
            {{--  begin recent post  --}}
            <h2 class="text-center article-big-title">RECENT POST</h2>
            <span class="section-line section"></span>

            <h2 class="article-title">Lorem Ipsum Dolor, Sit Amet Consectetur Adipisicing.</h2>
            <div class="row justify-content-between article-info mb-4">
                <div class="col-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                    admin
                </div>
                <div class="col-3">
                    <span class="article-info-date">
                        January 18, 2022
                    </span>
                </div>
            </div>

            {{--  begin article description  --}}
            <div class="content">
                <div>
                    <img class="article-content-img" style="width: 400px; height:300px" src="{{asset('img/bg.png')}}" alt="">
                </div>
                <p class="article-content-txt">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor exercitationem ullam maxime quia. Provident quae ea est nesciunt animi, eligendi a. Commodi animi alias aut nisi error, repudiandae possimus veniam ipsum repellendus magnam enim doloribus! Officiis in fugiat mollitia libero ipsam, alias, quasi repudiandae accusantium explicabo asperiores exercitationem maxime sunt. Voluptatum modi assumenda a inventore atque iste velit accusamus dignissimos deserunt doloribus qui harum doloremque aut, aperiam reprehenderit, ducimus omnis distinctio quia blanditiis quas dolore unde. Fuga quod architecto numquam atque repellendus neque consectetur repellat ut iste quis corporis molestiae sit, ipsum unde ducimus optio fugit assumenda natus esse illo accusantium tempore? Eveniet at sunt, illum deleniti rerum quibusdam odio, nihil libero mollitia fugit, odit a provident praesentium consectetur. Illo eligendi, laudantium id quam quia suscipit esse iure ducimus sapiente accusamus natus quasi voluptas. Asperiores porro nemo modi officiis rem rerum velit quidem sunt labore, ipsum dicta consequuntur corporis facilis. Reiciendis ex possimus facilis explicabo dolorem et cupiditate sequi ullam at quaerat nulla fuga totam non ea odit iste velit deleniti recusandae, repudiandae tenetur accusamus voluptate, cum inventore pariatur. Minus aperiam placeat perspiciatis. Quasi, ut dolore repellat odit veniam, molestias explicabo ipsam saepe eveniet debitis voluptatem. Excepturi labore illo odit nulla laboriosam cumque sunt aut perferendis numquam, doloribus accusamus error, tenetur earum nisi deleniti, facere dignissimos repellat vero! Dicta recusandae doloremque voluptatibus? Unde eveniet eaque natus porro quisquam distinctio fugiat qui doloribus. Eos, placeat ducimus tenetur dolorum reprehenderit accusantium debitis dignissimos vitae, ipsam et sequi explicabo molestiae voluptates minima, autem aut laboriosam eum alias voluptatem eaque maiores unde rem? Delectus, consequatur dolore error atque ipsa odio cumque in voluptates est. Voluptates recusandae deleniti praesentium alias reprehenderit ut error minima blanditiis voluptas temporibus? Nobis cumque suscipit aperiam, natus quia porro earum error similique, autem velit accusamus, delectus et. Veniam, eveniet deleniti lorem300
                </p>
            </div>
            {{--  ending article description  --}}
        </div>
        {{--  ending recent post  --}}

        <div class="col-6 col-md-4 article-column">
            {{--  begin label  --}}
            <h2 class="text-center article-big-title">LABEL</h2>
            <span class="section-line section"></span>

            <div class="label">
                <a href="#" class="article-user-label">Technologi</a>
                <a href="#" class="article-user-label">Education</a>
                <a href="#" class="article-user-label">Economic</a>
                <a href="#" class="article-user-label">Startup</a>
                <a href="#" class="article-user-label">Politic</a>
            </div>
            {{--  ending label  --}}

            {{--  begin popular post  --}}
            <h2 class="mt-5 text-center article-big-title">POPULAR POST</h2>
            <span class="section-line section"></span>

            <div class="card article-popular-post">
                <a href="#" class="row article-pp-row">
                    <div class="col-3">
                        <img class="article-popular-img" src="{{asset('img/bg.png')}}" alt="">
                    </div>
                    <div class="col-9 article-popular-title">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                </a>

                <a href="#" class="row article-pp-row">
                    <div class="col-3">
                        <img class="article-popular-img" src="{{asset('img/bg.png')}}" alt="">
                    </div>
                    <div class="col-9 article-popular-title">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                </a>

                <a href="#" class="row article-pp-row">
                    <div class="col-3">
                        <img class="article-popular-img" src="{{asset('img/bg.png')}}" alt="">
                    </div>
                    <div class="col-9 article-popular-title">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                </a>
            </div>
            {{--  ending popular post  --}}
        </div>
    </div
</div>
@endsection
