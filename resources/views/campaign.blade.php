@extends('layout.app')

@section('title', __('common.campaign'))

@section('content')
<style>
.background-bg{
    background-image: url('/images/background_BG_1920_1080_web.jpg');
    /* background-repeat:no-repeat; */
    color:white;
    }
    @media (max-width: 576px) {
      .background-bg{
        background-image: url('/images/background_BG_1920_1080_mob.jpg');
    /* background-repeat:no-repeat; */
        color:white;
        }
    }

        .blink_me {
        animation: blinker 1s linear infinite;
    }

    @keyframes blinker {
    70% {
        opacity: 0;
        }
    }

        .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(255,255,255,0.8);
        transition: 0.3s;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
        box-shadow: 0 8px 16px 0 rgba(255,255,255,0.2);
        }


</style>

<section class="background-bg">
 <div class="main-div" >

    <div class="container">
        <h1 class="heading" style="padding-top:5%; text-align: center; font-size: 70px;
        font-family: fantasy;">83 GIVEAWAY</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 py-4" style="margin-top: 5%; text-align: center">
                <h3 class="alert-heading">You have landed at the right place! Follow the below-mentioned steps and crack the quiz. </h3>
                <hr>
                <table>
                <tr>
                  <td>
                      <h4 class="steps-heading">Step 1: Fill up the form </h4>
                  </td>

                </tr>
                      <td>
                          <h4 class="steps-heading">Step 2: Tick the right answer </h4>

                      </td>
                  </tr>
                </tr>
                <td>
                    <h4 class="steps-heading">Step 3: Follow us on </h4>

                    <a href="https://www.instagram.com/vaioind/" class="fa fa-instagram text-white"  style="text-decoration:none; font-size:25px; margin-top:15px;" aria-hidden="true"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.facebook.com/VAIOIndia/" class="fa fa-facebook text-white"  style="text-decoration:none; font-size:25px; margin-top:15px;" aria-hidden="true"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com/vaioind/" class="fa fa-twitter text-white"  style="text-decoration:none; font-size:25px; margin-top:15px;" aria-hidden="true"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td>
                  <br/>  <h3 class="bold-heading"><strong> And stand a chance to win VAIO merchandise and goodies.</strong></h3>
             </td>
        </tr>

                </table>

            </div>

            <div class="col-md-6" style="margin-top: 5%;">
                <div class="card" style="position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: transparent;
    background-clip: border-box;
    border: 1px solid rgba(255,255,255, 0.5);
    border-radius: 25px;
    padding:2%;">
                        <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                               <div class="col-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible text-center" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                        @if(session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                        <form class="my-5" method="POST" action="{{ route('campaign83.store')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" required>
                                              </div>
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Email Address</label>
                                              <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" required>
                                              <small id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</small>
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputPassword1">Phone</label>
                                              <input type="text" class="form-control"  name="phone" id="exampleInputPassword1" placeholder="Enter Your Mobile Number" required>
                                            </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


     <h2 class="text-center mt-4 "><strong>Q & A</strong></h3>
       <hr>
       <div class="row container">
        <div class="col-md-6 mb-4">
          <div class="form-group">


            <label for="question1">1. Where are the headquarters of VAIO located ?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" value="Queensland, Australia">
                <label class="form-check-label" for="flexRadioDefault1">
                    Queensland, Australia

                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" value="Azumino City, Japan">
                <label class="form-check-label" for="flexRadioDefault1">
                    Azumino City, Japan

                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1" value="Bejing, China">
                <label class="form-check-label" for="flexRadioDefault1">
                    Bejing, China

                </label>
              </div>
            </div>
            <div class="form-group">
                <label for="question1">2. In which year, VAIO Corporation was established ? </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" value="2018">
                    <label class="form-check-label" for="flexRadioDefault2">
                        2018
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" value="2014">
                    <label class="form-check-label" for="flexRadioDefault2">
                        2014
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" value="2013">
                    <label class="form-check-label" for="flexRadioDefault2">
                        2013
                    </label>
                  </div>
                </div>
                <div class="form-group">
                    <label for="question1">3. What is the name of VAIO’s first 3D carbon fiber laptop ? </label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" value="VAIO Z">
                        <label class="form-check-label" for="flexRadioDefault3">
                            VAIO Z

                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" value="VAIO E15">
                        <label class="form-check-label" for="flexRadioDefault3">
                            VAIO E15

                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" value="VAIO SE14">
                        <label class="form-check-label" for="flexRadioDefault3">
                            VAIO SE14

                        </label>
                      </div>
                    </div>
              </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="question1">4. Which are the two new laptops launched in the KACHI-IRO edition ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" value="VAIO E15, VAIO SE14">
                            <label class="form-check-label" for="flexRadioDefault4">
                                VAIO E15, VAIO SE14

                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" value="VAIO Z, VAIO SX14">
                            <label class="form-check-label" for="flexRadioDefault4">
                                VAIO Z, VAIO SX14

                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault4" value="VAIO Z, VAIO SE14">
                            <label class="form-check-label" for="flexRadioDefault4">
                                VAIO Z, VAIO SE14
                            </label>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="question1">5. Is Nexstgo Company Ltd licensing partner for VAIO sales and services in India ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault5" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault5">
                                    YES
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault5" value="No">
                            <label class="form-check-label" for="flexRadioDefault5">
                                    No
                            </label>
                          </div>

                        </div>
                        <br/>
                        <button type="submit" class="btn btn-primary my-4">Submit</button>
                    </div>

              </div>


        </form>
 </div>
</div>

</section>

@endsection
