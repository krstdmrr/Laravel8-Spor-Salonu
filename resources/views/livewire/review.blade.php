<div>
    @if(session()->has('message'))
        <div class="alert alert-success">,
            {{session('message')}}
        </div>
    @endif
    <form class="form-contact comment_form" wire:submit.prevent="store" id="commentForm">
        <div class="row">
            @csrf
            <div class="col-md-12">
                <div class="form-group">
                    <input class="form-control w-100" wire:model="subject" placeholder="Write Subject"/>
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control" wire:model="review" placeholder="Your review"></textarea>
                    @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <div class="form-radio">

                        <strong class="text-uppercase">Your Rating:</strong>
                        <input type="radio" id="star5" wire:model="rate" value="5"/><label for="star5">5</label>
                        <input type="radio" id="star4" wire:model="rate" value="4"/><label for="star4">4</label>
                        <input type="radio" id="star3" wire:model="rate" value="3"/><label for="star3">3</label>
                        <input type="radio" id="star2" wire:model="rate" value="2"/><label for="star2">2</label>
                        <input type="radio" id="star1" wire:model="rate" value="1"/><label for="star1">1</label>
                    </div>
                    @error('rate')<span class="text-danger">{{$message}}</span>@enderror

                </div>
            </div>
        </div>
        @auth
            <button type="submit" class="button button-contactForm btn_1 boxed-btn" value="Save">Send
                Message
            </button>
        @else
        <a href="/login" class="button button-contactForm btn_1 boxed-btn">please login</a>
        @endauth
    </form>

</div>
