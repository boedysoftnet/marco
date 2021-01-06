<section id="kontak" class="container">
    <div class="row">
        <div class="col-lg-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.9590399737385!2d116.1142371143357!3d-8.599931189708148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf43c147ae61%3A0xb39da9f6baeffdec!2sBoedyNet%20Home%20Software!5e0!3m2!1sen!2sid!4v1609909731511!5m2!1sen!2sid"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
        <div class="col-lg-6 kontak-info">
            <div class="kontak-title">
                <h2>{{__('page.get-in-touch')}}</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur corporis dicta ea est ex,
                    itaque laborum numquam quibusdam saepe voluptatum.</p>
            </div>
            <form class="row">
                <div class="form-group col-lg-6"><input type="text" placeholder="{{__('page.your-name')}}"
                                                        class="form-control" wire:model="data.nama"></div>
                <div class="form-group col-lg-6"><input type="text" placeholder="{{__('page.your-email')}}"
                                                        class="form-control" wire:model="data.nama"></div>
                <div class="form-group col-lg-6"><input type="text" placeholder="{{__('page.phone')}}"
                                                        class="form-control" wire:model="data.nama"></div>
                <div class="form-group col-lg-6"><input type="text" placeholder="{{__('page.subject')}}"
                                                        class="form-control" wire:model="data.nama"></div>
                <div class="form-group col-lg-12">
                    <textarea cols="30" rows="5" class="form-control"
                              placeholder="{{__('page.your-message')}}"></textarea>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary  text-capitalize"><span
                            class="fa fa-send"></span> {{__('page.submit')}}</button>
                </div>
            </form>
        </div>
    </div>
</section>
