<template>
    <section>
        <div class="container-fluid" style="margin-top: 10%; margin-bottom: 10%">
            <div class="row">
                <h1 class="uppercase text-lg-left roboto-condensed-font instagram-title">
                    instagram
                </h1>
                <div class="col-xs-12 col-sm-6" style="padding-bottom: 5%">
                    <div class="row">
                        <div class="container" style="padding-left: 40px; padding-right: 40px">
                            <div class="row">
                                <div class="col" style="padding: 0; margin: 0">
                                    <div class="row">
                                        <img src="https://media.cnn.com/api/v1/images/stellar/prod/130624174959-50-surf-spots-the-box.jpg?q=w_2365,h_1571,x_0,y_0,c_fill"
                                            alt="" width="400" height="300" />
                                    </div>
                                    <div class="row">
                                        <img src="https://images.ctfassets.net/xhzuh2up4xai/4aV7Lb6hpazK1XtAALe3o8/a09d7ad6c1878ab349a8afa2a309a193/Surf_Ericeira39-min.jpg"
                                            alt="" width="400" height="300" />
                                    </div>
                                </div>
                                <div class="col" style="padding: 0; margin: 0">
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
                                    style="text-align: left; padding-left: 10%"></i>
                            </div>
                            <div class="col-md-4">
                                <p class="uppercase font-bold roboto-condensed-font"
                                    style="font-size: xx-large; color: #02b0ff">
                                    follow us
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p class="pt-2" style="font-size: large">
                                    @surfersco
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div style="padding-left: 40px; padding-right: 40px">
                        <form @submit.prevent="submitForm" class="row g-3">
                            <div class="col-12">
                                <input type="text" id="name" placeholder="Name" class="form-control" v-model="name" required />
                            </div>
                            <div class="col-12">
                                <input type="email" id="email" placeholder="Email" class="form-control" v-model="email" required />
                            </div>
                            <div class="col-md-6">
                                <select id="birthPlace" class="form-select" v-model="birthplace" required>
                                    <option selected disabled>
                                        Birth Place
                                    </option>
                                    <option>...</option>
                                    <option>Brazil</option>
                                    <option>Italy</option>
                                    <option>United States</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="date" id="birthday" class="form-control" v-model="birthday" required />
                            </div>
                            <div class="col-md-6">
                                <input type="tel" id="phone" placeholder="Phone" class="form-control" v-model="phone" required />
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="company" placeholder="Company" class="form-control" v-model="company" required />
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
                                <textarea id="message" rows="3" placeholder="Your Message" class="form-control" v-model="message"
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary button-color" style="width: 200px">Submit</button>
                        </form>
                        <div v-if="responseMessage" class="alert alert-success pt-4">
                            <p>{{ responseMessage }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            email: '',
            birthplace: '',
            birthday: '',
            phone: '',
            company: '',
            message: '',
            responseMessage: '',
        };
    },
    methods: {
        async submitForm() {
            const formData = {
                name: this.name,
                email: this.email,
                birthPlace: this.birthplace,
                birthday: this.birthday,
                phone: this.phone,
                company: this.company,
                mailMessage: this.message,
                url:'https://example.com/'
            };

            try {
                const response = await axios.post('/send-email', formData, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'application/json',
                    }
                });
                // alert('E-mail sent');
                this.responseMessage = 'E-mail successfully sent';
                this.name = '';
                this.email = '';
                this.birthplace = '';
                this.birthday = '';
                this.phone = '';
                this.company = '';
                this.message = '';
            } catch (error) {
                console.error('ERROR ***', error);
                this.responseMessage = 'An error occurred.';
            }
        },
    },
};
</script>