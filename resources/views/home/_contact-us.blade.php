<div class="ps-contact ps-section pb-80">
    <div id="contact-map" data-address="New York, NY" data-title="Sky Store!" data-zoom="17">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192697.79327606485!2d28.872096507201327!3d41.00549580936355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1620390884115!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="ps-container">
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 "style="width: 50%">
              <div class="ps-section__header mb-50">
                <h2 class="ps-section__title" data-mask="Contact">- Get in touch</h2>
                @include('home.message')
                <form class="ps-contact__form" action="{{route('sendmessage')}}" method="post">
                  @csrf
                  <div class="row">   
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="form-group">
                            <label>Name <sub>*</sub></label>
                            <input class="form-control" name="name" type="text" placeholder="Name"required>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="form-group">
                            <label>Email <sub>*</sub></label>
                            <input class="form-control" name="email" type="email" placeholder="Email" required>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="form-group">
                            <label>Phone <sub>*</sub></label>
                            <input class="form-control" name="phone" type="text" placeholder="Phone"required>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                          <div class="form-group">
                            <label>Subject <sub>*</sub></label>
                            <input class="form-control" name="subject" type="text" placeholder="Subject"required>
                          </div>
                        </div>                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                          <div class="form-group mb-25">
                            <label>Your Message <sub>*</sub></label>
                            <textarea class="form-control" rows="6" name="message" required></textarea>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="ps-btn">Send Message<i class="ps-icon-next"></i></button>
                          </div>
                        </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " style="width: 50%;margin-top: 15rem">
              <div class="ps-section__content">
                <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 "style="width: 100%">
                        <div class="ps-contact__block" data-mh="contact-block">
                          <header>
                            <h3>TURKEY <span> {{$setting->address}}</span></h3>
                          </header>
                          <footer>
                            <p><i class="fa fa-map-marker"></i> {{$setting->address}}</p>
                            <p><i class="fa fa-envelope-o"></i><a href="mailto@supportShoes@shoes.net">{{$setting->email}}</a></p>
                            <p><i class="fa fa-phone"></i> {{$setting->phone}}</p>
                          </footer>
                        </div>
                      </div>                      
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>