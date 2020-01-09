@include('head')

@include('nav')

<div class="container">
  <!--<p class="control">
  <a class="button is-dark" href="{{ url('dash')}}" style="text-decoration: none;">
  <span class="icon">
  <i class="fas fa-arrow-left"></i>
</span>
<span>Back</span>
</a>
</p>-->
<a href="{{ url('dash')}}"  class="ui animated black button" tabindex="0">
  <div class="visible content">back</div>
  <div class="hidden content">
    <i class="angle double left icon"></i>
  </div>
</a>
</div>
<br>
<div class="container ">
  <div class="has-text-centered">
    <a href="{{ url('addCons') }}" class=" ui teal button">Add Consultation for existe Appointment </a>
  </div>
  <form class="ui form">

    <h4 class="ui dividing header">Appointment </h4>
    <div class="two fields">
      <div class="field">
        <label>Appointment number</label>
        <input placeholder="Appointment number" name="numRdv" type="text">
      </div>
      <div class="field">
        <label>Patient number</label>
        <div class="field">
          <select id="numP">
            <option selected>Select Patient</option>
            @foreach($rdv as $val)
            <option selected>{{ $val->NumPat }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>


    <div class="two fields">
      <div class="field">
        <label>Appointment Date</label>
        <input placeholder="Appointment Date"  type="date" name="DateRdv">
      </div>
      <div class="field">
        <label>Appointment Time</label>
        <input placeholder="Appointment Time" type="time" name="TimeRdv">
      </div>
    </div>

    <h4 class="ui dividing header">Consultation </h4>
    <div class="two fields">
      <div class="field">
        <label>Consultation number</label>
        <input type="text"  name="numCons" placeholder="Consultation number">
      </div>
      <!--<div class="field">
      <label>Consultation date</label>
      <input    type="date" name="DateCons" placeholder="Consultation date" >
    </div>-->
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

</from>
</div>


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
      url:  '/apponitAdd',
      data: {

        'NumPat'       : $("#numP").val() ,
        'NumRdv'       : $("input[name=numRdv]").val() ,
        'DateRdv'      : $("input[name=DateRdv]").val() ,
        'TimeRdv'      : $("input[name=TimeRdv]").val() ,
        'NumCons'       : $("input[name=numCons]").val() ,
        'DateCons'      : $("input[name=DateRdv]").val(),
        'NumOrd'        : $("input[name=numOrd]").val() ,
        'NomMedc'       : $("#NomMedc").val() ,
        'DateOrd'       : $("input[name=DateRdv]").val(),
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
