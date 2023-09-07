<div class="section-indent01">
    <div class="container">
        <div class="section-title section-title_bottom-none">
            <h2 class="section-title__text">Upcoming Events</h2>
            <div class="section-title__text-under">Events</div>
            <div class="section-title__link"><a href="events.html" class="link-01">view all events</a></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="slick-indent">
            <!--js-init-slick -->
            <div class="js-slick01 slick-dots01">
                @foreach($events as $event)
                    <div>
                        <div class="event-item">
                            <div class="event-item__label">
                                {{date('d', strtotime($event->event_date))}} <span> {{date('M', strtotime($event->event_date))}}</span>

                            </div>
                            <div class="event-item__img">
                                <picture>
                                    <source srcset={{$event->image}} type="image/jpg">
                                    <img src="{{$event->image}}" alt="">
                                </picture>
                            </div>
                            <div class="event-item__layout">
                                <p disabled="true" ><span>{{$event->event_name}}</span></p>
                                <a href="/eventsingle/{{$event->id}}" class="tt-btn" ><span>buy tickets</span></a>

                                {{--
                                <a href="#" class="tt-btn" data-toggle="modal" data-target="#modalVipTables"><span>VIP tables</span></a>
--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
