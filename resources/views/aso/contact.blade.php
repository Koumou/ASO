@extends('layouts.app')

@section('content')
<div class="container">
    <br />
    <br />
    <div class="row pt-4 pb-4 " style="background-color:#FFFFFF; border-radius: 10px 10px 10px 10px;">
        <div class="col-lg-6 text-dark pl-4 pt-4">
            <h3 class="card-title "><b>Contact Us</b></h3>
            <p>Fill up the form and our Team will get back to you within 48 hours.</p>

        </div>
        <div class="col-lg-6">

        </div>

        <!-- </div>
<div class="row pt-4"> -->
        <div class="col-lg-1">

        </div>
        <div class="col-lg-6 pt-3 order-sm-2 order-md-2 pt-3">
            <!-- <p class="text-light"><i class="fas fa-phone-alt pr-2 " style="font-size:16px;color:#ffae00; vertical-align:baseline;"></i> (+242) 1234567890</p> -->
            <img src="https://www.comsyscx.com/wp-content/uploads/2019/04/contact-page-banner.png" class="borderradius1" style="width: 100%; max-width:100vw;max-height:unset;" alt="...">

        </div>
        <div class="col-lg-5 order-sm-1 order-md-1 pt-4">
            <div class="card ">
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
                        <a class="btn btn-primary" href="#" role="button"> Send <i class="fa fa-send-o pl-1" style="font-size:14px;color:whitesmoke"></i></a>

                    </form>
                </div>
            </div>
        </div>

        <div class="pb-4 pt-4"></div>
    </div>

</div>
@endsection