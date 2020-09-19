@extends(backpack_view('blank'))



@section('content')
<div class="container">
    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Imad  </span><br> Web Developer</h1>

                <a href="{{ url('/contact') }}" class="button">Contact</a>

                <div class="home__social">
                  <a href="https://linkedin.com/in/imad-elberdaoui" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                  <a href="https://be.net/elberdaouiimad" class="home__social-icon"><i class='bx bxl-behance' ></i></a>
                  <a href="https://github.com/elberdaoui" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>
            </div>

            <div class="home__img">
                <img src="{{asset('img/profil5.png')}}" alt="">
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section " id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="{{asset('img/about1.jpg')}}" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle">I'am Imad Elberdaoui</h2>
                    <p class="about__text">Web developer student in YouCode from Youssoufia Morocco, I have serious passion for front-end back-end effects </p>
                </div>
            </div>
        </section>

        <!--===== RESUME =====-->
        <section class="resume section " id="resume">
            <h2 class="section-title">Resume</h2>








                <div id="accordion">
                  <div class="resume__container">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" id="education" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Education
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <section class="section-wrapper section-education">
    <div class="container-fluid">
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Education</h2></div>
            </div>
        </div> -->
        <!--.row-->
        <div class="row">
            <div class="col-md-12 grid-resume">
              <!-- .experience-item -->
              @foreach ($education as $educate)
                <div class="content-item">
                    <small>{{$educate->duration}}</small>
                    <h4>{{$educate->profession}}</h4>
                    <h5>{{$educate->establishment}}</h5>

                    <p>{{$educate->place}}</p>
                </div>
                @endforeach
                <!-- .experience-item -->

            </div>
        </div>
        <!--.row-->
    </div>
    <!-- .container-fluid -->

</section>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Professional Experience
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <section class="section-wrapper section-education">
    <div class="container-fluid">
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Education</h2></div>
            </div>
        </div> -->
        <!--.row-->
        <div class="row">
            <div class="col-md-12 grid-resume">
              <!-- .experience-item -->
              @foreach ($experience as $exper)
                <div class="content-item">
                    <small>{{$exper->duration}}</small>
                    <h4>{{$exper->career}}</h4>
                    <h5>{{$exper->company}}</h5>

                    <p>{{$exper->place}}</p>
                </div>
                @endforeach
                <!-- .experience-item -->


            </div>
        </div>
        <!--.row-->
    </div>
    <!-- .container-fluid -->

</section>
      </div>
    </div>
  </div>
</div>






            </div>
            </section>
            <!--=====END OF RESUME =====-->


        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text">The time that I spent in YouCode I've learnt lots of technologies and tools such as:</p>

                    @foreach ($skill as $skl)
                    <div class="skills__data">
                        <div class="skills__names">
                            <!-- <i class='bx bxs-paint skills__icon'></i> -->
                            <span class="skills__name">{{$skl->skill_name}}</span>
                        </div>
                        <div class="skills__bar " style="width: {{$skl->percentage.'%'}}; ">

                        </div>
                        <div>
                            <span class="skills__percentage">{{$skl->percentage.'%'}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div>
                    <img src="{{asset('img/work3.jpg')}}" alt="" class="skills__img">
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <section class="work section" id="work">
            <h2 class="section-title">Work</h2>

            <div class="work__container bd-grid">
              @foreach ($work as $wrk)
                <div class="work__img" >
                  <a href=" {{'https://'.$wrk->url_link}} " target="_blank">
                  <p class="bx bx-link bg-light">{{$wrk->work_name}}</p>
                    <img src="{{Storage::disk('local')->url($wrk->image)}}" alt="">
                  </a>
                </div>
                @endforeach
            </div>
        </section>
        <!--===== CONTACT =====-->

        </main>

        </div>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title"><b>Imad</b>Eberdaoui</p>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            @if (config('backpack.base.show_powered_by') || config('backpack.base.developer_link'))
                <div class="text-muted ml-auto mr-auto">
                  @if (config('backpack.base.developer_link') && config('backpack.base.developer_name'))
                  {{ trans('backpack::base.handcrafted_by') }} <a target="_blank" rel="noopener" href="{{ config('backpack.base.developer_link') }}">{{ config('backpack.base.developer_name') }}</a>.
                  @endif
                  @if (config('backpack.base.show_powered_by'))
                  {{ trans('backpack::base.powered_by') }} <a target="_blank" rel="noopener" href="http://backpackforlaravel.com?ref=panel_footer_link">Backpack for Laravel</a>.
                  @endif
                </div>
            @endif
        </div>
        <p>&#169; 2020 copyright all right reserved</p>
    </footer>
@endsection
