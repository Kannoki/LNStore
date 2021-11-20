<div class="container contain-bg">
    <div class="row left-contact">
        <div class="col-12 col-sm-12 col-lg-12 col-xl-6">
            <div class="p-0 col-12 text-contact">
                <h1 class="title-about">Contact Us</h1>
                <p style="color: white"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> 155 Yên Khê 2, Phường Thanh Khê
                    Đông, Quận Thanh Khê, TP.Đà Nẵng
                </p>
                <p style="color: white"><span><i class="fas fa-mail-bulk"></i></span> Huy225dn@gmail.com</p>
                <p style="color: white"><span><i class="fa fa-phone" aria-hidden="true"></i></span> 091636512</p>
            </div>
            <div class="p-0 col-12">
                <h1 class="title-about">Follow Us</h1>
                <div class="follow-icon">
                    <a href="">
                        <div><svg class="icon-edit" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg></div>
                    </a>
                    <a href="">
                        <div><svg class="icon-edit" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-12 col-xl-6">
            <iframe class="map-edit"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8754285780674!2d108.17976524985572!3d16.071952843580707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218fc668d27ff%3A0x1b54817e747d0e97!2zMTU1IFnDqm4gS2jDqiAyLCBUaGFuaCBLaMOqIMSQw7RuZywgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1634998751147!5m2!1svi!2s"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div class="title-about">
        <h1>Send Feedback</h1>
    </div>
    <div>
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <form action="" wire:submit.prevent="sendMessage">
            <div class="form-group row col-12">
                <div class="col-6 input-edit"><input type="text" class="form-control" name="name" id="" placeholder="Name" wire:model="name">
                </div>
                @error('name')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="col-6 input-edit"><input type="email" class="form-control" name="email" id="" wire:model="email"
                        placeholder="Email"></div>
                @error('email')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="col-12 input-edit"><input class="form-control" type="text" name="subject" id="" wire:model="subject"
                        placeholder="Subject"></div>
                @error('subject')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="col-12 input-edit"><textarea class="form-control" name="comment" id="" rows="3" wire:model="comment"
                        placeholder="Your Feedback"></textarea>
                </div>
                @error('comment')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="col-12 input-edit"><button class="btn btn-primary" type="submit">Send Feeback</button></div>
            </div>
        </form>
        <br>
    </div>
</div>