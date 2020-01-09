@include('head')



@include('nav')
<div class="container">
  <a href="{{ url('patient')}}"  class="ui animated black button" tabindex="0">
    <div class="visible content">back</div>
    <div class="hidden content">
      <i class="angle double left icon"></i>
    </div>
  </a>
</div><br><br>
<div class="container">

  <div class="row">
    <div class="col-lg-3" >
      <h1 class="title is-2 has-text-info ">{{ $data->NomPat }}</h1>
      <h2 class="subtitle has-text-weight-bold	">{{ $data->PrenomPat}}</h2>
      <img class="ui medium rounded image" src="/img/av.png">
      <h4 class="ui horizontal divider header">
        Last Visite
      </h4>

      <h1 class="title is-3  has-text-centered ">{{ $data->updated_at->toDateString() }}</h1>

    </div>

    <div class="col-lg-9" >
      <div class="container" >

        <h3 class="ui horizontal divider header">Patient Info</h3>

        <div class="container has-text-centered">
          <a class="ui violet label">
            Date de Naissance : <span class="ui   teal inverted header ">{{$data->DateNaissPat}}</span>
          </a>
          <a class="ui label violet">
            Sexe : <span class="ui   teal inverted header ">{{$data->SexePat}}</span>
          </a>
          <a class="ui label violet">
            Adress :<span class="ui   teal inverted header "> {{$data->AddressPat}}</span>
          </a>
          <a class="ui label violet">
            Telephone :<span class="ui   teal inverted header "> {{$data->TelephPat}}</span>
          </a>
          <a class="ui label violet">
            E-mail : <span class="ui   teal inverted header ">{{$data->EmailPat}}</span>
          </a>
        </div>


        <h3 class="ui horizontal divider header">Appointment Info</h3>
        <table class="ui grey table">
          <thead>
            <tr>
              <th>Numero Consultation</th>
              <th>Date Consultation</th>
              <th>Patient </th>
            </tr>
          </thead>
          <tbody>

            @foreach($rdv as $val)
            <tr>
              <td>{{ $val->NumRdv }}</td>
              <td>{{ $val->DateRdv }}</td>
              <td>{{ $val->TimeRdv}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>


      <!--  <h3 class="ui horizontal divider header"> Info</h3>
        <table class="ui grey table">
          <thead>
            <tr>
              <th>Numero Consultation</th>
              <th>Date Consultation</th>
              <th>Patient </th>
            </tr>
          </thead>
          <tbody>

            @foreach($cons as $val)
            <tr>
              <td>{{ $val->NumCons }}</td>
              <td>{{ $val->DateCons }}</td>
              <td>{{ $data->PrenomPat}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>-->


        <h3 class="ui horizontal divider header">Consultation &  Ordonnance Info</h3>
        <table class="ui grey table">
          <thead>
            <tr>
              <th>Numero Ordonnance</th>
              <th>Numero Consultation </th>
              <th>Date Ordonnance</th>
              <th>Médicaments</th>
            </tr>
          </thead>
          <tbody>

            @foreach($ord as $val)
            <tr>
              <td>{{ $val->NumOrd  }}</td>
              <td>{{ $val->NumCons }}</td>
              <td>{{ $val->DateOrd }}</td>
              <td>{{ $val->NomMedc }}</td>
            </tr>
            @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>



<script>
$(document).ready(function(){

  $(".item").click(function () {
    $("a").removeClass("active");
    $("a").addClass("active");
  });

  $('.menu .item')
  .tab()
  ;


});
</script>
@include('footer')
