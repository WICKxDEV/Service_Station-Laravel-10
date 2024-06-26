
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;

        }
        /* Animation keyframes for slide and fade out effect */
        @keyframes slideFadeOutUpwardSmooth {
              0% {
                  opacity: 1;
                  transform: translateY(0);
              }
              50% {
                  opacity: 0.5;
                  transform: translateY(-100%);
              }
              100% {
                  opacity: 0;
                  transform: translateY(-100%);
              }
          }

          /* Class to apply the smooth animation */
          .slideFadeOutUpwardSmooth {
              animation-name: slideFadeOutUpwardSmooth;
              animation-duration: 3s; /* Adjusts the speed of the animation */
              animation-fill-mode: forwards; /* Keeps the element in the state of the last keyframe when the animation completes */
              animation-timing-function: ease-in-out; /* Starts and ends the animation slowly, making it smoother */
          }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="" id="">
        <div class="">
          <div class="">
            <!-- <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div> -->
          </div>
        </div>
      </div>

      @include('admin.sidebar')

      @include('admin.navbar')

        <div class="main-panel">

            <div class="container" align="center" style="padding-top: 100px;">

                  <!-- @if(session()->has('message'))
              
                  <div class="alert alert-success">

                  <button type="button" class="close" data-dismiss="alert">
                      X
                  </button>

                    {{session()->get('message')}}

                  </div>

                  @endif -->

                  @if(session()->has('message'))
                    <div class="alert alert-success slideFadeOutUpwardSmooth">
                      {{ session()->get('message') }}
                    </div>
                  @endif

                <form action="{{url('sendemail',$data->id)}}" method="POST" >
                    @csrf

                <div style="padding: 15px;">
                    <label>Greeting</label>
                    <input type="text"  style="color:black; width:210px;" name="Greeting" required="" >
                </div>

                <div style="padding: 15px;">
                    <label>Body</label>
                    <input type="text" style="color:black; width:210px;" name="body" required="" >
                </div>

                <div style="padding: 15px;">
                    <label>Action Text</label>
                    <input type="text" style="color:black; width:210px;" name="actiontext" required="" >
                </div>

                <div style="padding: 15px;">
                    <label>Action URL</label>
                    <input type="text" style="color:black; width:210px;" name="actionurl" required="" >
                </div>

                <div style="padding: 15px;">
                    <label>End part</label>
                    <input type="text" style="color:black; width:210px;" name="endpart" required="" >
                </div>

                

                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-success">
                </div>

                </form>

            </div>

        </div>


      <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.script')
  </body>
</html>