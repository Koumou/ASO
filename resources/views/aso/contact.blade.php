@extends('layouts.app')

@section('content')
<div class="container">
    <br />
    <br />
    <div class="row pt-4 pb-4 " style="background-color:#EAF2F8; border-radius: 10px 10px 10px 10px;">


        <div class="col-lg-6 text-dark pl-4 pt-4">
            <h3 class="card-title "><b>Contact Us</b></h3>
            <p>We will be happy to answer your questions. <br />
                Fill out the form and our Team will get back to you within 12 hours.</p>

        </div>
        <div class="col-lg-6">


        </div>

        <!-- </div>
<div class="row pt-4"> -->

        <div class="col-lg-5">

            <div class="pt-4 auto-tbfill tbgrid  ">
                <div class="card border-0 bg-transparent">
                    <div class="card-body">
                        <div class="pt-1 mb-2 colorvalue mt-2  justify-content-between rounded stats ">
                            <p><i class="fas fa-phone-alt pl-4 pr-2 " style="font-size:16px;color:#ffae00; vertical-align:baseline;"></i> (+242) 1234567890</p>
                        </div>
                        <div class="pt-1 mb-2 colorvalue mt-2  justify-content-between rounded stats ">
                            <p><i class="fa fa-envelope pl-4 pr-2 " style="font-size:16px;color:#ffae00; vertical-align:baseline;"></i> support@email.com</p>

                        </div>
                        <div class="pt-1 mb-2 colorvalue mt-2 justify-content-between rounded stats ">
                            <p><i class="fa fa-map-marker pl-4 pr-2 " style="font-size:22px;color:#ffae00; vertical-align:baseline;"></i> 177 rue Makoko, Ouenze</p>
                        </div>


                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-6 order-sm-1 order-md-1 ">
            <div class="card border shadow-sm mb-5 bg-white rounded align-self-center">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <h4 class="card-title pt-2 pb-2"><b>Send us a message</b></h4>
                            <label for="formGroupExampleInput">Your Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Hint: Jean Lioje">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Mail</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Hint: jean@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3"></textarea>
                        </div>
                        <a class="btn text-light btnsend" href="#" role="button"> Send <i class="fa fa-send-o pl-1" style="font-size:14px;color:whitesmoke"></i></a>

                    </form>
                </div>
            </div>
        </div>
        <div class="pb-4 pt-4"></div>
    </div>

</div>
@endsection