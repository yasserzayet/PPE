@include('head')

@include('nav')

<div class="container">
  <a href="{{ url('addAppoint')}}"  class="ui animated black button" tabindex="0">
    <div class="visible content">back</div>
    <div class="hidden content">
      <i class="angle double left icon"></i>
    </div>
  </a>
</div>
<br>
<div class="container ">
  <!--  <div class="box" style="width:40vh;height:50vh;">
  <form >

  <div class="field">
  <p class="control has-icons-left">
  <input class="input" type="text" name="numCons" placeholder="Numero Consultation">
  <span class="icon is-small is-left">
  <i class="fas fa-list-ol"></i>
</span>
</p>
</div>

<div class="field">
<div class="control has-icons-left">
<div class="select" >
<select id="numP" >
<option >Select Patient</option>
@foreach($pat as $val)
<option value="{{$val->NumPat}}">{{$val->NumPat}}</option>
@endforeach
</select>
</div>
<div class="icon is-small is-left">
<i class="fas fa-venus-mars"></i>
</div>
</div>
</div>

<div class="field">
<p class="control has-icons-left">
<input class="input"  id="DateCons" type="date" name="DateCons" placeholder="Date de Rendez-vous" >
<span class="icon is-small is-left">
<i class="fas fa-calendar-day"></i>
</span>
</p>
</div>


<div class="field">
<p class="control has-icons-left">
<input class="input" type="text" name="numOrd" placeholder="Numero Ordonnance">
<span class="icon is-small is-left">
<i class="fas fa-list-ol"></i>
</span>
</p>
</div>
<div class="field">
<p class="control has-icons-left">
<textarea  class="input" id="NomMedc" name="NomMedc" placeholder="Numero Ordonnance" cols="30" rows="10"></textarea>
<span class="icon is-small is-left">
<i class="fas fa-capsules"></i>
</span>
</p>
</div>

<hr>

<button id="Add" class="button is-rounded is-info is-light is-fullwidth">Add</i></button>
</form>
</div>-->
<form class="ui form">

  <h4 class="ui dividing header">Consultation </h4>
  <div class="three fields">
    <div class="field">
      <label>Patient number</label>
      <div class="field">
        <select id="numP">
          <option selected>Select Patient</option>
          @foreach($pat as $val)
          <option selected>{{ $val->NumPat }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="field">
      <label>Consultation number</label>
      <input type="text" placeholder="Consultation number" name="numCons">
    </div>
    <div class="field">
      <label>Consultation Date</label>
      <input  type="date" id="DateCons" placeholder="Consultation Date" >
    </div>
  </div>

  <h4 class="ui dividing header">Ordonnance </h4>
  <div class="three fields">
    <div class="field">
      <label>Ordonnance number</label>
      <input type="text"  name="numOrd" placeholder="Appointment number">
    </div>
    <!--<div class="field">
    <label>Ordonnance date</label>
    <input    type="date" name="Date" placeholder="Appointment date" >
  </div>-->
  <div class="field">
    <label>Pharmaceuticals</label>
    <div class="field">
      <textarea id="NomMedc" rows="2"></textarea>
    </div>
  </div>
</div>
<button id="Add"class="fluid ui violet button">Add</button>

</form>


<script>
$(document).ready(function () {
  $.ajaxSetup({

    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });

  //update
  $("#Add").click(function (e) {

    e.preventDefault();

    $.ajax({
      type: 'post',
      url:  '/consAdd',
      data: {

        'NumPat'        : $("#numP").val() ,
        'NumCons'       : $("input[name=numCons]").val() ,
        'DateCons'      : $("#DateCons").val() ,
        'NumOrd'        : $("input[name=numOrd]").val() ,
        'NomMedc'       : $("#NomMedc").val() ,
        'DateOrd'       : $("#DateCons").val() ,
      },
      dataType:'json',
      success:function (data) {
        if(data.string == 'added'){
          /*Swal.fire({
          icon: 'success',
          title: 'Success',
          text: 'Patient added',
        })*/
        window.location.href = "patient";
      }else if(data.string == 'Error'){
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Something went wrong!',
        })
      }

    },
    error:function (data) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
      })
    }
  });
});
});

</script>

@include('footer')
