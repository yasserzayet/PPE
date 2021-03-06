@include('head')



@include('nav')
<p class="title is-2 has-text-centered">Add Patients</p>
<hr>
<div class="container">

  <div class="row" >

    <div class="col-lg-4" style="padding-top: 34px;">
      <div class="box has-text-centered" style="width:45vh;height:50vh;">
        <img src="../user.png"  width="250px" height="20px"alt="">
        <br><br><br>
        <hr>
        <p class="title is-2 has-text-centered">USER</p>
      </div>
    </div>
    <div class="col-lg-8" >
      <div class="container  ">

        <form action="{{ route('patUpdate.update2',[$data->id]) }}" method="post">
          <!-- Patient Name & Last Name -->
          <div class="row" style="padding-top:5vh;">
            <div class="col-lg-6">
              <div class="field">
                <p class="control has-icons-left">
                  <input class="input" type="text" name="nom" placeholder="Nom" value='{{ $data->NomPat }}'>
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="field">
                <p class="control has-icons-left">
                  <input class="input" type="text" name="prenom" placeholder="Prenom" value='{{ $data->PrenomPat }}'>
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>
                </p>
              </div>
            </div>
          </div>
          <!-- Patient Name & Last Name -->
          <!-- Patient Num & RDV Num -->
          <br>
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="text" name="numPat" placeholder="Numero Patient" value='{{ $data->NumPat }}' disabled>
              <span class="icon is-small is-left">
                <i class="fas fa-list-ol"></i>
              </span>
            </p>
          </div>
          <br>
      
          <br>
          <!-- Patient Num & RDV Num -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Patient Date de naissance-->
              <div class="field">
                <p class="control has-icons-left">
                  <input class="input"  type="date" name="DateN" placeholder="Date de Naissance" value='{{ $data->DateNaissPat }}'>
                  <span class="icon is-small is-left">
                    <i class="fas fa-calendar-day"></i>
                  </span>
                </p>
              </div>
              <!-- Patient Date de naissance-->
            </div>
            <div class="col-lg-6">
              <!-- Sexe -->
              <div class="field">
                <div class="control has-icons-left">
                  <div class="select" >
                    <select id="sexe">
                      <option selected="selected">{{ $data->SexePat }}</option>
                    </select>
                  </div>
                  <div class="icon is-small is-left">
                    <i class="fas fa-venus-mars"></i>
                  </div>
                </div>
              </div>
              <!-- Sexe -->
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-6">
              <!-- Patient address-->
              <div class="field">
                <p class="control has-icons-left">
                  <input class="input"  type="text" name="address" placeholder="address" value='{{ $data->AddressPat }}' >
                  <span class="icon is-small is-left">
                    <i class="fas fa-map-marked-alt"></i>
                  </span>
                </p>
              </div>
              <!-- Patient Address-->
            </div>
            <div class="col-lg-6">
              <!-- Patient phone-->
              <div class="field">
                <p class="control has-icons-left">
                  <input class="input"  type="text" name="phone" placeholder="phone" value='{{ $data->TelephPat }}'>
                  <span class="icon is-small is-left">
                    <i class="fas fa-mobile-alt"></i>
                  </span>
                </p>
              </div>
              <!-- Patient phone-->
            </div>
          </div>
          <br>
          <!-- Patient Email-->
          <div class="field">
            <p class="control has-icons-left">
              <input class="input"  type="email" name="email" placeholder="email"value='{{ $data->EmailPat }}' >
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </p>
          </div>
          <!-- Patient Email-->
          <!-- Button -->
          <button type="submit" id="Update" class="button is-info is-light is-fullwidth" >Update</button>

        </form>

      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function () {
  $.ajaxSetup({

    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });

  //update
/*  $("#Update").click(function (e) {

   e.preventDefault();

    $.ajax({
      type: 'post',
      url:  '/patAdd',
      dataType:'json',
      data: {

        'NumPat'       : $("input[name=numPat]").val() ,
        'NumRdv'       : $("input[name=numRdv]").val() ,
        'NomPat'       : $("input[name=nom]").val() ,
        'PrenomPat'    : $("input[name=prenom]").val() ,
        'DateNaissPat' : $("input[name=DateN]").val() ,
        'SexePat'      : $('#sexe').val() ,
        'AddressPat'   : $("input[name=address]").val() ,
        'TelephPat'    : $("input[name=phone]").val() ,
        'EmailPat'     : $("input[name=email]").val()
      },
      dataType:'json',
      success:function (data) {
        if(data.string == 'added'){
          Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Patient added',
          })
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
  });*/
});
</script>
@include('footer')
