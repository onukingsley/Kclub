<div class="section-indent03 section-marker section-marker__indent01">
    <div class="container container-fluid-tablet">
        <div class="section-title">
            <h2 class="section-title__text">What We Offer</h2>
            <div class="section-title__text-under">Services</div>
            <div class="title__text-description">
                Experience the best nightlife option in with this escorted tour that includes 3 of the funnest bar/lounges/clubs each night has to offer
            </div>
        </div>
        <div class="events-img-list">
            <div class="slick-dots02 js-slick02 event-item02-list row">
                    <!--js-init-slick-->
               @foreach($items as $item)
                    <div class="col-md-4">
                        <div class="event-item02 event-item">
                            @if($item->discount_price)
                                <div class="event-item__label">
                                    {{round(100-(($item->discount_price/$item->price)*100))}} <span>% off</span>

                                </div>
                            @endif
                            <div class="event-item02__img lazyload" data-bg="{{$item->image}}"></div>
                            <div class="event-item02__content">

                                <div class="event-item02__border">
                                    <h4 class="tt-title">{{$item->item_name}}</h4>
                                    <p>
                                        {{$item->description}}
                                    </p>

                                    <a href="" id="{{$item->id}}" data-id = "{{$item->id}}" data-desc = "{{$item->name}}" data-image = "{{$item->image}}" data-name = "{{$item->item_name}}" data-price = "{{$item->discount_price??$item->price}}" data-toggle="modal" data-target="#modalBayTickets" class="tt-btn"><span>${{$item->discount_price?$item->discount_price:$item->price}} Order</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
