@extends('frontend.layouts.master')
@section('title', 'Company Profile  ')
@section('styling')
@endsection
@section('content')
<div class="profile-cover text-center">
  <img class="img-fluid" src="{{asset('frontend-assets/images/job-profile.jpg')}}" alt="">
</div>
<div class="bg-white shadow-sm-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex align-items-center py-3">
          <div class="profile-left">
            <h5 class="font-weight-bold text-dark mb-1 mt-0">Senior Ruby Developer</h5>
            <p class="mb-0 text-muted"><a class="mr-2 font-weight-bold" href="#">Envato</a> <i class="fa fa-map"></i> Melbourne, AU -- DatePosted 2 weeks ago</p>
          </div>
          <div class="profile-right ml-auto">
            <button type="button" class="btn btn-light mr-1"> &nbsp; Save &nbsp; </button>
            <button type="button" class="btn btn-success"> &nbsp; Apply &nbsp; </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-5">
  <div class="container">
    <div class="row">
      <!-- Main Content -->
      <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
        <div class="box shadow-sm rounded bg-white mb-3">
          <div class="box-title border-bottom p-3">
            <h6 class="m-0">Overview</h6>
          </div>
          <div class="box-body p-3">
            <p>Headquartered in Melbourne, Australia, Envato is a completely online company with an ecosystem of sites and services to help people get creative. We’ve consistently been named as one of the Best Places to Work in Australia, since 2015, in the BRW Awards , and we’ve also been awarded the title of Australia's Coolest Company for Women and Diversity by JobAdvisor.</p>
            <p class="mb-0">Envato was found in 2006 and, since then, we’ve helped a community of creative sellers earn more than $500 Million . Millions of people around the world choose our marketplace, studio and courses to buy files, hire freelancers, or learn the skills needed to build websites, videos, apps, graphics and more. Find out more at Envato Market , Envato Elements , Envato Sites , Envato Studio and Tuts+...  <a class="mr-2 font-weight-bold" href="#">Read More</a>
          </p>
        </div>
      </div>
      <div class="box shadow-sm rounded bg-white mb-3">
        <div class="box-title border-bottom p-3">
          <h6 class="m-0">Job Details</h6>
        </div>
        <div class="box-body">
          <table class="table table-borderless mb-0">
            <tbody>
              <tr class="border-bottom">
                <th class="p-3">Seniority Level</th>
                <td class="p-3">Mid-Senior level
                </td>
              </tr>
              <tr class="border-bottom">
                <th class="p-3">Industry</th>
                <td class="p-3">Internet Information Technology & Services</td>
              </tr>
              <tr class="border-bottom">
                <th class="p-3">Employment Type</th>
                <td class="p-3">Full-time
                </td>
              </tr>
              <tr class="border-bottom">
                <th class="p-3">Job Functions</th>
                <td class="p-3">Other</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="box mb-3 shadow-sm rounded bg-white osahan-post">
        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
          <div class="dropdown-list-image mr-3">
            <img class="rounded-circle" src="{{asset('frontend-assets/images/user/s4.png')}}" alt="">
          </div>
          <div class="font-weight-bold">
            <div class="text-truncate">Envato</div>
            <div class="small text-gray-500">Internet | 24,044 followers</div>
          </div>
          <span class="ml-auto"><button type="button" class="btn btn-light"><i class="fa fa-plus"></i> Follow</button></span>
        </div>
        <img src="{{asset('frontend-assets/images/post1.png')}}" class="img-fluid" alt="Responsive image">
        <div class="p-3 osahan-post-body">
          <h5 class="mb-3">About us</h5>
          <p>Welcome! We’re so happy you found us. Since you’ve come this far, we’d love to take the opportunity to introduce ourselves.</p>
          <p class="mb-0">Our story starts in 2006 with three founders in a Sydney garage (no, we’re not kidding). Born from a desire to earn a living doing what they loved, with the flexibility to do it from anywhere, Envato set out to create an online community for buying and selling creative digital assets. Nearly 13 years later, we’re profitable and still totally bootstrapped. This allows us to stay super experimental and totally focused on the best interests of our authors and customers around the world.
          </p>
        </div>
        <div class="overflow-hidden border-top text-center">
          <a class="font-weight-bold p-3 d-block" href="#"> READ MORE </a>
        </div>
      </div>
    </main>
    <aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
      <div class="box mb-3 shadow-sm rounded bg-white profile-box text-center">
        <div class="p-5">
          <img src="{{asset('frontend-assets/images/clogo2.png')}}" class="img-fluid" alt="Responsive image">
        </div>
        <div class="p-3 border-top border-bottom">
          <h5 class="font-weight-bold text-dark mb-1 mt-0">Envato</h5>
          <p class="mb-0 text-muted">Melbourne, AU
          </p>
        </div>
        <div class="p-3">
          <div class="d-flex align-items-top mb-2">
            <p class="mb-0 text-muted">Posted</p>
            <p class="font-weight-bold text-dark mb-0 mt-0 ml-auto">1 day ago</p>
          </div>
          <div class="d-flex align-items-top">
            <p class="mb-0 text-muted">Applicant Rank</p>
            <p class="font-weight-bold text-dark mb-0 mt-0 ml-auto">25</p>
          </div>
        </div>
      </div>
      <div class="box shadow-sm rounded bg-white mb-3">
        <div class="box-title border-bottom p-3 d-flex align-items-center">
          <h6 class="m-0">Photos</h6>
          <a class="ml-auto" href="#">See All <i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="box-body p-3">
          <div class="gallery-box-main">
            <div class="gallery-box">
              <img class="img-fluid" src="{{asset('frontend-assets/images/user/s1.png')}}" alt="">
              <img class="img-fluid" src="{{asset('frontend-assets/images/user/s2.png')}}" alt="">
              <img class="img-fluid" src="{{asset('frontend-assets/images/user/s3.png')}}" alt="">
            </div>
            <div class="gallery-box">
              <img class="img-fluid" src="{{asset('frontend-assets/images/user/s4.png')}}" alt="">
              <img class="img-fluid" src="{{asset('frontend-assets/images/user/s5.png')}}" alt="">
              <img class="img-fluid" src="{{asset('frontend-assets/images/user/s6.png')}}" alt="">
            </div>
            <div class="gallery-box">
              <img class="img-fluid" src="{{asset('frontend-assets/images/user/s7.png')}}" alt="">
              <img class="img-fluid" src="{{asset('frontend-assets/images/user/s8.png')}}" alt="">
              <img class="img-fluid" src="{{asset('frontend-assets/images/user/s9.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="box shadow-sm mb-3 rounded bg-white ads-box text-center">
        <img src="{{asset('frontend-assets/images/job1.png')}}" class="img-fluid" alt="Responsive image">
        <div class="p-3 border-bottom">
          <h6 class="font-weight-bold text-dark">Osahan Solutions</h6>
          <p class="mb-0 text-muted">Looking for talent?</p>
        </div>
        <div class="p-3">
          <button type="button" class="btn btn-outline-success pl-4 pr-4"> POST A JOB </button>
        </div>
      </div>
    </aside>
    <aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">
      <button type="button" class="btn btn-lg btn-block btn-danger mb-3"> <i class="fa fa-bell"></i> Set alert for jobs </button>
      <div class="box shadow-sm rounded bg-white mb-3">
        <div class="box-title border-bottom p-3">
          <h6 class="m-0">Similar Jobs
          </h6>
        </div>
        <div class="box-body p-3">
          <a href="job-profile.html">
            <div class="shadow-sm rounded bg-white job-item mb-3">
              <div class="d-flex align-items-center p-3 job-item-header">
                <div class="overflow-hidden mr-2">
                  <h6 class="font-weight-bold text-dark mb-0 text-truncate">Product Director</h6>
                  <div class="text-truncate text-primary">Spotify Inc.</div>
                  <div class="small text-gray-500"><i class="fa fa-map"></i> India, Punjab</div>
                </div>
                <img class="img-fluid ml-auto" src="{{asset('frontend-assets/images/l3.png')}}" alt="">
              </div>
              <div class="d-flex align-items-center p-3 border-top border-bottom job-item-body">
                <div class="overlap-rounded-circle">
                  <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('frontend-assets/images/user/s4.png')}}" alt="" data-original-title="Sophia Lee">
                  <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('frontend-assets/images/user/s5.png')}}" alt="" data-original-title="John Doe">
                  <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('frontend-assets/images/user/s6.png')}}" alt="" data-original-title="Julia Cox">
                  <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('frontend-assets/images/user/s7.png')}}" alt="" data-original-title="Robert Cook">
                </div>
                <span class="font-weight-bold text-muted">18 connections</span>
              </div>
              <div class="p-3 job-item-footer">
                <small class="text-gray-500"><i class="fa fa-clock-o"></i> Posted 3 Days ago</small>
              </div>
            </div>
          </a>
          <a href="job-profile.html">
            <div class="shadow-sm rounded bg-white job-item">
              <div class="d-flex align-items-center p-3 job-item-header">
                <div class="overflow-hidden mr-2">
                  <h6 class="font-weight-bold text-dark mb-0 text-truncate">.NET Developer</h6>
                  <div class="text-truncate text-primary">Invision</div>
                  <div class="small text-gray-500"><i class="fa fa-map"></i> London, UK
                  </div>
                </div>
                <img class="img-fluid ml-auto" src="{{asset('frontend-assets/images/l4.png')}}" alt="">
              </div>
              <div class="d-flex align-items-center p-3 border-top border-bottom job-item-body">
                <div class="overlap-rounded-circle">
                  <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('frontend-assets/images/user/s8.png')}}" alt="" data-original-title="Sophia Lee">
                  <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('frontend-assets/images/user/s9.png')}}" alt="" data-original-title="John Doe">
                  <img class="rounded-circle shadow-sm" data-toggle="tooltip" data-placement="top" title="" src="{{asset('frontend-assets/images/user/s10.png')}}" alt="" data-original-title="Robert Cook">
                </div>
                <span class="font-weight-bold text-muted">18 connections</span>
              </div>
              <div class="p-3 job-item-footer">
                <small class="text-gray-500"><i class="fa fa-clock-o"></i> Posted 3 Days ago</small>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="box shadow-sm rounded bg-white mb-3">
        <div class="box-title border-bottom p-3">
          <h6 class="m-0">Who viewed your profile</h6>
        </div>
        <div class="box-body p-3">
          <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="{{asset('frontend-assets/images/user/s4.png')}}" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold mr-2">
              <div class="text-truncate">Sophia Lee</div>
              <div class="small text-gray-500">@Harvard
              </div>
            </div>
            <span class="ml-auto"><button type="button" class="btn btn-outline-success btn-sm">Connent</button>
            </span>
          </div>
          <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="{{asset('frontend-assets/images/user/s3.png')}}" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold mr-2">
              <div class="text-truncate">John Doe</div>
              <div class="small text-gray-500">Traveler
              </div>
            </div>
            <span class="ml-auto"><button type="button" class="btn btn-outline-success btn-sm">Connent</button>
            </span>
          </div>
          <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="{{asset('frontend-assets/images/user/s6.png')}}" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold mr-2">
              <div class="text-truncate">Julia Cox</div>
              <div class="small text-gray-500">Art Designer
              </div>
            </div>
            <span class="ml-auto"><button type="button" class="btn btn-outline-success btn-sm">Connent</button>
            </span>
          </div>
          <div class="d-flex align-items-center osahan-post-header mb-3 people-list">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="{{asset('frontend-assets/images/user/s7.png')}}" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold mr-2">
              <div class="text-truncate">Robert Cook</div>
              <div class="small text-gray-500">@Photography
              </div>
            </div>
            <span class="ml-auto"><button type="button" class="btn btn-outline-success btn-sm">Connent</button>
            </span>
          </div>
          <div class="d-flex align-items-center osahan-post-header people-list">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="{{asset('frontend-assets/images/user/s8.png')}}" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold mr-2">
              <div class="text-truncate">Richard Bell</div>
              <div class="small text-gray-500">@Envato
              </div>
            </div>
            <span class="ml-auto"><button type="button" class="btn btn-outline-success btn-sm">Connent</button>
            </span>
          </div>
        </div>
      </div>
      <div class="box shadow-sm mb-3 rounded bg-white ads-box text-center">
        <img src="{{asset('frontend-assets/images/ads1.png')}}" class="img-fluid" alt="Responsive image">
        <div class="p-3 border-bottom">
          <h6 class="font-weight-bold text-gold">Miver Premium</h6>
          <p class="mb-0 text-muted">Grow &amp; nurture your network</p>
        </div>
        <div class="p-3">
          <button type="button" class="btn btn-outline-gold pl-4 pr-4"> ACTIVATE </button>
        </div>
      </div>
    </aside>
  </div>
</div>
</div>
@endsection
@section('script')
@endsection