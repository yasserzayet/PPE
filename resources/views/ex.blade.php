
<div class="container">
  {{$data}}
  <br><br>
  <div class="row" >

    <div class="col-lg-4" style="padding-top: 35 px;">
      <div class="box has-text-centered" style="width:45vh;height:50vh;">
        <img src="user.png"  width="250px" height="20px"alt="">
        <br><br><br>
        <hr>
        <p class="title is-2 has-text-centered">USER</p>
      </div>
    </div>
    <div class="col-lg-8" >
      <div class="container  ">

        <form action="">
          <!-- Patient Name & Last Name -->
          <div class="row" style="padding-top:5vh;">
            <div class="col-lg-6">
              <div class="field">
                <p class="control has-icons-left">
                  <input class="input " type="text" name="nom" placeholder="Nom" value='{{$data->NomPat}}' disabled>
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="field">
                <p class="control has-icons-left">
                  <input class="input" type="text" name="prenom" placeholder="Prenom" value='{{$data->PrenomPat}}'disabled>
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
              <input class="input" type="text" name="numPat" placeholder="Numero Patient"  value='{{$data->NumPat}}' disabled>
              <span class="icon is-small is-left">
                <i class="fas fa-list-ol"></i>
              </span>
            </p>
          </div>
          <br>
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="text" name="numRdv" placeholder="Numero Rendez-vous"  value='{{$data->NumRdv}}'disabled>
              <span class="icon is-small is-left">
                <i class="fas fa-list-ol"></i>
              </span>
            </p>
          </div>
          <br>
          <!-- Patient Num & RDV Num -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Patient Date de naissance-->
              <div class="field">
                <p class="control has-icons-left">
                  <input class="input" id="date" type="date" name="DateN" placeholder="Date de Naissance"  value='{{$data->DateNaissPat}}' disabled>
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
                    <select name="sexe">
                      <option selected>{{$data->SexePat}}</option>
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
                  <input class="input"  type="text" name="address" value='{{$data->AddressPat}}' placeholder="Address" disabled>
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
                  <input class="input"  type="text" name="phone" placeholder="Phone" value='{{$data->TelephPat}}' disabled>
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
              <input class="input"  type="email" name="email" placeholder="Email" value='{{$data->EmailPat}}'disabled>
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </p>
          </div>
          <!-- Patient Email-->


      </div>
    </div>
  </div>
</div>
<script>
  console.log();
</script>
