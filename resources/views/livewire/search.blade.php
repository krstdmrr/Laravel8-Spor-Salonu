<div class="input-group">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <input wire:model="search" name="search" type="text" class="form-control" list="myList"
           placeholder="Search Membership..."/>

    @if(!empty($query))
        <datalist id="myList">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
