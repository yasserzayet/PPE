@include('head')



@include('nav')
<div class="container">

  <nav class="level">
    <!-- Left-Side -->
    <a href="{{ url('dash')}}"  class="ui animated black button" tabindex="0">
      <div class="visible content">back</div>
      <div class="hidden content">
        <i class="angle double left icon"></i>
      </div>
    </a>
    <!-- Right-Side -->
    <div class="level-right">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search Patient....." >
        <div class="input-group-append">
          <button class="btn btn-dark" type="button">Search</button>
        </div>
      </div>
    </div>

  </nav>


</div>
<br>

@if(empty($data))

<div class="container has-text-centered"><p class="title is-2">No patient</p></div>
@else


<div class="container">
  <div class="ui three column grid ">
    @foreach($data as $val)
    <div class="column ">

      <div class="ui special cards"  style="padding-left:5vh;">
        <div class="card">
          <div class="blurring dimmable image">
            <div class="ui dimmer">
              <div class="content">
                <div class="center">
                  <a href="{{ route('patShow.show',[$val->id]) }}" class="ui inverted button">View Profile</a>
                </div>
              </div>
            </div>
            <img src="/img/av.png" >
          </div>
          <div class="content">
            <p class="header">{{$val->PrenomPat}}</p>
            <div class="meta">
              <span class="date">Last appointment  {{ $val->created_at->toDateString()}}</span>
            </div>
          </div>
        </div>
      </div>

    </div>
    @endforeach
  </div>
</div>7
@endif
<script type="text/javascript">
$(document).ready(function(){

  $.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });






  $('.special.cards .image').dimmer({
    on: 'hover'
  });







});

</script>
@include('footer')
