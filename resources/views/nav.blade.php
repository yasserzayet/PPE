<nav class="navbar is-transparent " style="background-color:#f9f7f7;" >
  <div class="container">
  <div class="navbar-brand ">
    <a class="navbar-item " style="text-decoration: none;" href="{{ url('dash')}}">
      <span class="icon" >
        <i class="fas fa-stethoscope"></i>&nbsp;
      </span>
      <span>
        <p class="title is-5">MEDICAL CABINET MANAGEMENT</p>
      </span>
    </a>
    <div role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false" data-target="navbarExampleTransparentExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu" id="navMenu">
    <div class="navbar-start">
      <!--  <a class="navbar-item" href="https://bulma.io/">
      Home
    </a>-->
    <!-- Patients
    <div class="navbar-item has-dropdown is-hoverable"  >
      <a class="navbar-link"  style="text-decoration: none;">
        <span class="icon">
          <i class="fas fa-users"></i>&nbsp;
        </span>
        <span>
          Patients
        </span>
      </a>
      <div class="navbar-dropdown is-boxed">
        <a class="navbar-item" href="{{ url('patient') }}"   style="text-decoration: none;">
          <span class="icon">
            <i class="fas fa-restroom"></i>&nbsp;

          </span>
          <span>
            View Patients
          </span>
        </a>
        <a class="navbar-item" href="{{ url('patientAdd') }}"  style="text-decoration: none;">
          <span class="icon">
            <i class="fas fa-user-plus"></i>&nbsp;
          </span>
          <span>
            Add Patients
          </span>
        </a>
      </div>
    </div>
    Patients -->

    <!-- Appointments
    <div class="navbar-item has-dropdown is-hoverable">
      <a class="navbar-link"  style="text-decoration: none;">
        <span class="icon">
          <i class="fas fa-calendar-alt"></i>&nbsp;
        </span>
        <span>
          Appointments
        </span>
      </a>
      <div class="navbar-dropdown is-boxed">
        <a class="navbar-item" href="{{ url('allAppointments') }}" style="text-decoration: none;">

          <span class="icon">
            <i class="fas fa-calendar-alt"></i>&nbsp;
          </span>
          <span>
            View Appointments
          </span>
        </a>
        <a class="navbar-item" href="{{ url('addAppoint') }}" style="text-decoration: none;">
          <span class="icon">
            <i class="fas fa-plus-circle"></i>&nbsp;
          </span>
          <span>
            Add a Appointment
          </span>

        </a>
      </div>
    </div>
    Appointments -->

    <!-- Connsultation
    <div class="navbar-item has-dropdown is-hoverable">
      <a class="navbar-link" style="text-decoration: none;">
        <span class="icon">
          <i class="far fa-clock"></i>&nbsp;
        </span>
        <span>
          Connsultation
        </span>

      </a>
      <div class="navbar-dropdown is-boxed">
        <a class="navbar-item" href="{{ url('showCons') }}" style="text-decoration: none;">
          <span class="icon">
            <i class="far fa-eye"></i>&nbsp;
          </span>
          <span>
            Show Connsultation
          </span>

        </a>
        <a class="navbar-item" href="{{ url('ordShow') }}" style="text-decoration: none;">
          <span class="icon">
            <i class="fas fa-capsules"></i>&nbsp;
          </span>
          <span>
            Prescription
          </span>

        </a>
      </div>
    </div>
    Connsultation -->
  </div>

  <div class="navbar-end">
    <div class="navbar-item">
      <div class="field is-grouped">

      <!--  <div class="field">
          <form>
          <p class="control has-icons-left">
            <input class="input" type="text" placeholder="Search">
            <span class="icon is-small is-left">
              <i class="fas fa-search"></i>
            </span>
          </p>
          </form>
        </div>&nbsp;
        <p class="control">
          <a class="button is-link" href="{{ url('logout')}}" style="text-decoration: none;">
            <span class="icon">
              <i class="fas fa-search"></i>
            </span>
            <span>Search</span>
          </a>
        </p>
        &nbsp;&nbsp;
        <p class="control">
          <a class="bd-tw-button button is-info" id="pro" style="text-decoration: none;" href="#">
            <span class="icon">
              <i class="fas fa-user"></i>
            </span>
            <span>
              Profil
            </span>
          </a>
        </p>-->
        <p class="control">
          <a class="button is-dark" href="{{ url('logout')}}" style="text-decoration: none;">
            <span class="icon">
              <i class="fas fa-sign-out-alt"></i>
            </span>
            <span>Log Out</span>
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
</div>

</nav>
<div class="container" ><hr ></div>
