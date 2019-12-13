@extends('layouts.page')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @section('title', $page->title)
                {!! $page->lb_content !!}
            </div>
            <div class="col-md-4">
                <h2>Testimonials</h2>
                <hr>
                <div class="testimonial">
                    <p>"Our guests had a FABULOUS time!
                        Thank you to you & your wonderful
                        staff for assisting us with making
                        the night so special for everyone!
                        It was awesome to see so many people
                        having fun on the gaming tables &
                        getting stuck into it"<br/>
                    <small><b>Lisa - Head of events and engagement - North QLD Cowboys</b></small></p>
                    <hr>
                </div>
                <div class="testimonial">
                    <p>"Hi Sarah,
                        Thanks for the quick wrap up on chips.
                        You and your team were very professional.
                        From the quality of the tables, to the
                        staff and uniforms, I was very impressed.
                        Thank you Kindly"<br/>
                        <small><b>Justin - Arty Productions</b></small></p>
                    <hr>
                </div>
                <div class="testimonial">
                    <p>"Just a quick note to thank you and your
                        staff for an excellent event on 12
                        December. Feedback on the event has been
                        very positive and we were delighted with
                        the casino arrangements. Thank you again
                        for a great evening’s entertainment!"<br/>
                        <small><b>Clare - Port of Townsville</b></small></p>
                    <hr>
                </div>
                <div class="testimonial">
                    <p>"It was a fantastic night, and we have had
                        great feedback, so thank you to you and
                        your team for all your effort."<br/>
                        <small><b>Elysia - Dallecourt Financial</b></small></p>
                </div>
            </div>
        </div>
    </div>

@stop