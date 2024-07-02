<template>
    <section>
        <div class="container-fluid" style="margin-top: 10%; margin-bottom: 10%">
            <div class="row">
                <h1 class="uppercase text-lg-left roboto-condensed-font instagram-title">instagram</h1>
                <div class="col-xs-12 col-sm-6" style="padding-bottom: 5%;">
                    <div class="row">
                        <div class="container" style="padding-left: 40px;padding-right: 40px;">
                            <div class="row">
                                <div class="col" style="padding: 0;margin: 0;">
                                    <div class="row">
                                        <img src="https://media.cnn.com/api/v1/images/stellar/prod/130624174959-50-surf-spots-the-box.jpg?q=w_2365,h_1571,x_0,y_0,c_fill"
                                            alt="" width="400" height="300" />
                                    </div>
                                    <div class="row">
                                        <img src="https://images.ctfassets.net/xhzuh2up4xai/4aV7Lb6hpazK1XtAALe3o8/a09d7ad6c1878ab349a8afa2a309a193/Surf_Ericeira39-min.jpg"
                                            alt="" width="400" height="300" />
                                    </div>
                                </div>
                                <div class="col" style="padding: 0;margin: 0;">
                                    <div class="row">
                                        <img src="https://content.api.news/v3/images/bin/a57640b0bec6753cb09dbb2a43a6836e"
                                            alt="" width="400" height="300" />
                                    </div>
                                    <div class="row">
                                        <img src="https://www.parrishmaui.com/wp-content/uploads/2022/09/Kapalua-Surfing.jpg"
                                            alt="" width="400" height="300" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-4 pb-5">
                                <i class="fa fa-instagram fa-stack-2x text-info pt-1"
                                    style="text-align: left;padding-left: 10%;"></i>
                            </div>
                            <div class="col-md-4">
                                <p class="uppercase font-bold roboto-condensed-font"
                                    style="font-size: xx-large;color: #02b0ff;">follow us</p>
                            </div>
                            <div class="col-md-4">
                                <p class=" pt-2" style="font-size: large;">@surfersco</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div style="padding-left: 40px;padding-right: 40px">
                        <form method="POST" name="emailForm" action="/todo" enctype="multipart/form-data"
                            class="row g-3">
                            <!-- <form method="POST" name="emailForm" action=""{{ route('send_mail') }}""
                            enctype="multipart/form-data" class="row g-3"> -->
                            <!-- <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/> -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="col-12">
                                <input type="text" class="form-control" name="name" placeholder="Name" required />
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" name="email" placeholder="Email" required />
                            </div>
                            <div class="col-md-6">
                                <select name="birthPlace" class="form-select">
                                    <option selected disabled>Birth Place</option>
                                    <option>...</option>
                                    <option>Brazil</option>
                                    <option>Italy</option>
                                    <option>United States</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <!-- <label for="inputBirthday">Birthday</label> -->
                                <input name="birthday" class="form-control" type="date" />
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone" />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company" placeholder="Company" />
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" required />
                                    <label class="form-check-label" for="gridCheck">
                                        Accept privacy police
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="3" placeholder="Your Message"
                                    required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary button-color" style="width: 200px">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
