@include('head')

@include('nav')

<p class="title is-2 has-text-centered">Add Appointment</p>
<hr>
<div class="container "style="padding-left:26.2%;">
  <div class="box" style="width:40vh;height:50vh;padding-top:100px;">
    <form >

      <div class="field">
        <p class="control has-icons-left">
          <input class="input" type="text" name="numRdv" value="{{ $data->NumRdv}}" placeholder="Numero Rendez-vous" disabled>
          <span class="icon is-small is-left">
            <i class="fas fa-list-ol"></i>
          </span>
        </p>
      </div>

      <div class="field">
        <div class="control has-icons-left">
          <div class="select" >
            <select id="numP" disabled>

                <option selected >{{ $data->NumPat }}</option>

            </select>
          </div>
          <div class="icon is-small is-left">
            <i class="fas fa-venus-mars"></i>
          </div>
        </div>
      </div>

      <div class="field">
        <p class="control has-icons-left">
          <input class="input"  type="date" name="DateRdv" disabled value="{{ $data->DateRdv }}" placeholder="Date de Rendez-vous" >
          <span class="icon is-small is-left">
            <i class="fas fa-calendar-day"></i>
          </span>
        </p>
      </div>

      <div class="field">
        <p class="control has-icons-left">
          <input class="input"  type="time" name="TimeRdv" disabled value="{{ $data->TimeRdv }}" placeholder="Heure de Rendez-vous" >
          <span class="icon is-small is-left">
            <i class="fas fa-clock"></i>
          </span>
        </p>
      </div>
        <hr>
            <p class="title is-3 has-text-centered">  {{ $pat->NomPat}} {{ $pat->PrenomPat}}</p>
<!--      <button id="Add" class="button is-rounded is-info is-light is-fullwidth">Add</i></button>-->
    </form>
  </div>
</div>


<script>
$(document).ready(function () {
});
</script>

@include('footer')
