@extends('inc.header')
<style>
  .container {
    position: relative;
    width: 50%;
  }
  
  .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
  }
  
  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
  }
  
  .container:hover .image {
    opacity: 0.3;
  }
  
  .container:hover .middle {
    opacity: 1;
  }
  
  .text {
    background-color: rebeccapurple;
    color: white;
    font-size: 16px;
    padding: 16px 32px;
  }

  </style>
@section('content')
<img src="/images/hire.jpeg" class="w-100" >
<div class="pt-lg-5 pb-lg-5">
  
  <div class="row justify-content-lg-center">
      <h2 class="pt-4 " ><strong>Work with someone perfect for your company</strong></h2>
      <div class="col-9 justify-content-lg-center">
          <div class="row justify-content-center">
              <div class="col-4 pt-4">
                  <div class="card" style="width: 20rem; height: 20rem">
                    <div class="container">
                      <img src="/images/gra3.jpeg" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                        <div class="text"><a href="/freelancer">Get here</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Writer</h5>
                      <p class="card-text"> Hire writer</p>
                    </div>
                  </div>
               </div>
               <div class="col-4 pt-4">
                  <div class="card" style="width: 20rem; height: 20rem">
                    <div class="container">
                      <img src="/images/gra2.jpeg" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                        <div class="text"><a href="/freelancer">Get here</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Logo designer</h5>
                      <p class="card-text">Hire logo designer</p>
                    </div>
                  </div>
               </div>
               <div class="col-4 pt-4">
                  <div class="card" style="width: 20rem; height: 20rem">
                    <div class="container">
                      <img src="/images/dm.jpeg" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                        <div class="text"><a href="/freelancer">Get here</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Digital marketer</h5>
                      <p class="card-text">Hire digital marketer</p>
                    </div>
                  </div>
                </div>
                <div class="col-4 pt-4">
                  <div class="card" style="width: 20rem; height: 20rem">
                    <div class="container">
                      <img src="/images/mob.jpeg" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                        <div class="text"><a href="/freelancer">Get here</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Mobile app</h5>
                      <p class="card-text">Hire mobile app developer</p>
                    </div>
                  </div>
                </div>
                <div class="col-4 pt-4">
                  <div class="card" style="width: 20rem; height: 20rem">
                    <div class="container">
                      <img src="/images/gra.jpeg" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                        <div class="text"><a href="/freelancer">Get here</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Graphic designer</h5>
                      <p class="card-text">Hire graphic designer</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-4 pt-4">
                  <div class="card" style="width: 20rem; height: 20rem">
                    <div class="container">
                      <img src="/images/web.jpeg" alt="Avatar" class="image" style="width:100%">
                      <div class="middle">
                        <div class="text"><a href="/freelancer">Get here</a></div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Web developer</h5>
                      <p class="card-text">Hire web developers</p>
                    </div>
                  </div>
                </div>
        
          </div>
      </div>
  </div>
</div>
<div class="row pt-lg-5 justify-content-center pb-lg-5">
    <h3 style="color:darkgreen"> Find Jobs</h3>
    <div class="col-4 justify-content-center">
        @foreach ($posts as $post)
            <div class=" pt-lg-5 d-flex justify-content-between ">
                <h4><strong style="color:green">{{ $post->title }} </strong></h4>
                <p class="pl-lg-5"> {{ $post->bid }} $</p>
            </div> 
            <div class="pt-3">
                <p>{{ $post->description }}</p>

                <a class="btn btn-primary" href="{{ route('apply.create',$post->id) }}">Apply Now</a>
            </div>
        @endforeach
    </div>
</div>
<div class="freelancer justify-content-center">
  <div class="row justify-content-center">
      <h3 class=" pt-lg-5 pl-lg-5 justify-content-center">Hire freelancers for your project</h3>       
      <div class="col-9 justify-content-center">
          <div class="card">
              <div class="card-body justify-content-center pl-lg-5">
                  <div class="row">
                      <div class="col-1">
                          <img src="/images/pro1.jpeg" class="rounded-circle "  height="100" width="100">
                      </div>
                      <div class="col-11">
                          <div class="d-flex align-items-center pl-lg-5 pt-lg-4 ">
                              <a href="/profile/yonatan"><p ><strong class=" pt-lg-5 " >yonatan Demlie</strong></p></a>
                          </div>
                          <div class=" pl-lg-5 d-flex">
                              <p>web developer</p>
                              <p class=" pl-5">$20/hr</p>
                              <p class="pl-5"> 2 years experience</p>
                          </div>
                          <div class=" pl-lg-5">
                            <p>helo guyes i am a software engineer graduated from 
                                adama science and technology university. now i am worked as a freelancer 
                                and i have more than 3 years experience on web development and web design</p>
                          </div>
                      </div>
                  </div>
                  <div class="row pt-lg-5">
                      <div class="col-1">
                          <img src="/images/pro2.jpeg" class="rounded-circle "  height="100" width="100">
                      </div>
                      <div class="col-11">
                          <div class="d-flex align-items-center pl-lg-5 pt-lg-4 ">
                              <a href="/profile/abel"><p ><strong class=" pt-lg-5 " >Abel Zemenu</strong></p></a>
                          </div>
                          <div class=" pl-lg-5 d-flex">
                              <p>Mobile App developer</p>
                              <p class=" pl-5">$5/hr</p>
                              <p class="pl-5"> 2 years experience</p>
                          </div>
                          <div class=" pl-lg-5">
                            <p>helo guyes i am a software engineer graduated from 
                                adama science and technology university. now i am worked as a freelancer 
                                and i have more than 3 years experience on web development and web design</p>
                          </div>
                      </div>
                  </div>
                  <div class="row pt-lg-5">
                      <div class="col-1">
                          <img src="/images/pro3.jpeg" class="rounded-circle "  height="100" width="100">
                      </div>
                      <div class="col-11">
                          <div class="d-flex align-items-center pl-lg-5 pt-lg-4 ">
                              <a href="/profile/natnael"><p ><strong class=" pt-lg-5 " >Betelhem Yosef</strong></p></a>
                          </div>
                          <div class=" pl-lg-5 d-flex">
                              <p>Graphic designer</p>
                              <p class=" pl-5">$10/hr</p>
                              <p class="pl-5"> 1 years experience</p>
                          </div>
                          <div class=" pl-lg-5">
                            <p>helo guyes i am a software engineer graduated from 
                                adama science and technology university. now i am worked as a freelancer 
                                and i have more than 3 years experience on web development and web design</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row justify-content-center pt-lg-5 pb-lg-4">
                <div class=" justify-content-center">
                  <a class="btn btn-success" href="/freelancer">Get more freelancers</a>
                </div>
              </div>
          </div>
      </div> 
  </div>
</div>
@include('inc.footer')

    
@endsection

  
                