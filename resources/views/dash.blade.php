@include('head')



@include('nav')



<div class="container bg" >

  <div class="row " style="padding-top:3vh;margin-left:30vh;margin-right:30vh;">
    <div class="tabs is-toggle is-toggle-rounded  is-fullwidth is-large">
      <ul>
        <li class="">
          <a style="text-decoration:none;" href="{{ url('patient') }}">
            <span class="icon is-small"><i class="fas fa-users"></i></span>
            <span>View Patients</span>
          </a>
        </li>

        <li>
          <a style="text-decoration:none;" href="{{ url('patientAdd') }}">
            <span class="icon is-small"><i class="fas fa-user-plus"></i></span>
            <span>Add Patients</span>
          </a>
        </li>
        <li>
          <a style="text-decoration:none;" href="{{ url('addAppoint') }}">
            <span class="icon is-small"><i class="fas fa-calendar-alt"></i></span>
            <span>Add Appointment</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

<!--  <div class="row" style="padding-top:5vh;">
    <div class="col-lg-10">
      <div class="field">
        <p class="control has-icons-left">
          <input class="input is-rounded" type="text" id="search" placeholder="Search Patient.....">
          <span class="icon is-small is-left">
            <i class="fas fa-search"></i>
          </span>
        </p>

      </div>
    </div>
    <div class="col-lg-2">
      <button class="button is-dark is-fullwidth ">Search</button>

    </div>
  </div>

  <br>
  <br>
  <div class="has-text-centered" style="padding-left:80vh;padding-right:80vh.">
    <table class="ui very basic collapsing celled table">
      <thead>
        <tr><th>Patients</th>
          <th>View</th>
        </tr></thead>
        <tbody >

        </tbody>
      </table>
    </div>
  </div>-->







  <script type="text/javascript">

  $(document).ready(function() {
    //Patient Show
    $.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });



  });




  </script>


  @include('footer')
