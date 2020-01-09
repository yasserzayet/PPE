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
<div class="container">

  <div class="row">
    <!--<div class="col-lg-3">
    <h1 class="title is-2 has-text-info "></h1>
    <h2 class="subtitle has-text-weight-bold	"></h2>
    <img class="ui medium rounded image" src="/img/av.png">
    <h4 class="ui horizontal divider header">
    Last Visite
  </h4>

  <h1 class="title is-3  has-text-centered "></h1>-->
</div>
<div class="col-lg-12">
  <form class="ui form">
    <h4 class="ui dividing header">Patient Information</h4>
    <!-- Name -->

    <div class="three fields">
      <div class="field">
        <label>Patient number</label>
        <input type="text" placeholder="patient number" name="numPat">
      </div>
      <div class="field">
        <label>Last name</label>
        <input type="text" name="nom" placeholder="Last Name">
      </div>
      <div class="field">
        <label>First name</label>
        <input type="text" name="prenom" placeholder="First Name">
      </div>
    </div>
    <!-- Name -->


    <!-- 2 -->
    <div class="three fields">
      <div class="field">
        <label>Gender</label>
        <div class="field">
          <select id="sexe">
            <option value="0">Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
      </div>
      <div class="field">
        <label>Adress</label>
        <input type="text" placeholder="Address" name="address">
      </div>
      <div class="field">
        <label>Birthday Date</label>
        <input  type="date" name="DateN" placeholder="Birthday Date" >
      </div>
    </div>
    <!-- 2 -->
    <!-- 3 -->

    <div class="two fields">
      <div class="field">
        <label>E-mail</label>
        <input type="text" placeholder="exemple@domain.com" name="email">
      </div>
      <div class="field">
        <label>Phone number</label>
        <input type="text" placeholder="Phone number" name="phone">
      </div>
    </div>
    <!-- 3 -->









    <!-- 4
    <h4 class="ui dividing header">Appointment Information</h4>
    <div class="three fields">
      <div class="field">
        <label>Appointment number</label>
        <input type="text"  name="numRdv" placeholder="Appointment number">
      </div>
      <div class="field">
        <label>Appointment date</label>
        <input    type="date" id="DateRdv" placeholder="Appointment date" >
      </div>
      <div class="field">
        <label>Appointment time</label>
        <input type="time" name="TimeRdv" placeholder="Appointment time">
      </div>
    </div>
    <h4 class="ui dividing header">Consultation Information</h4>
    <div class="two fields">
      <div class="field">
        <label>Consultation number</label>
        <input type="text"  name="numCons" placeholder="Consultation number">
      </div>
        <div class="field">
      <label>Consultation date</label>
      <input    type="date" name="DateCons" placeholder="Consultation date" >
    </div>
  </div>
  <h4 class="ui dividing header">Ordonnance Information</h4>
  <div class="three fields">
    <div class="field">
      <label>Ordonnance number</label>
      <input type="text"  name="numOrd" placeholder="Appointment number">
    </div>
    <div class="field">
    <label>Ordonnance date</label>
    <input    type="date" name="Date" placeholder="Appointment date" >
  </div>
  <div class="field">
    <label>Pharmaceuticals</label>
    <div class="field">
      <textarea id="NomMedc" rows="2"></textarea>
    </div>
  </div>
</div>
 6 -->
<!-- Button
<h4 class="ui horizontal divider header">Add</h4>-->
<button id="Add"class="fluid ui violet button">Add</button>
</form>
<br><br>






</div>
</div>

</div>





<script>
$(document).ready(function () {
  $.ajaxSetup({

    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });


  $('.selection.dropdown').dropdown()  ;
  /*$('#').keydown(function(){
  $('#').html($('#').val());
});*/



//update
$("#Add").click(function (e) {

  e.preventDefault();

  $.ajax({
    type: 'post',
    url:  '/patAdd',
    dataType:'json',
    data: {

      'NumPat'       : $("input[name=numPat]").val() ,
      'NomPat'       : $("input[name=nom]").val() ,
      'PrenomPat'    : $("input[name=prenom]").val() ,
      'DateNaissPat' : $("input[name=DateN]").val() ,
      'SexePat'      : $('#sexe').val() ,
      'AddressPat'   : $("input[name=address]").val() ,
      'TelephPat'    : $("input[name=phone]").val() ,
      'EmailPat'     : $("input[name=email]").val(),
      /*'NumRdv'       : $("input[name=numRdv]").val() ,
      'DateRdv'      : $("#DateRdv").val() ,
      'TimeRdv'      : $("input[name=TimeRdv]").val() ,
      'NumCons'       : $("input[name=numCons]").val() ,
      'DateCons'      : $("#DateRdv").val(),
      'NumOrd'        : $("input[name=numOrd]").val() ,
      'NomMedc'       : $("#NomMedc").val() ,
      'DateOrd'       : $("#DateRdv").val(),*/
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
    }else {
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
