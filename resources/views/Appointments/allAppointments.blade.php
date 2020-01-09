@include('head')

@include('nav')
<p class="title is-2 has-text-centered">Appointments</p>
<div class="container"><hr>
  <table id="tab"class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <thead>
      <tr>
        <td>Numero Patient</td>
        <td>Numero Rendez-vous</td>
        <td>Rendez-vous suivant</td>
        <td>Heure Rendez-vous</td>
        <td>Premier Rendez-vous</td>
        <td>Dernier Visite</td>
        <td class="has-text-centered">CRUD</td>
      </tr>
    </thead>
    <tbody>
      <form >
        @foreach($data as $val)
        <tr>
          <td>{{ $val->NumPat }}</td>
          <td>{{ $val->NumRdv }}</td>
          <td>{{ $val->DateRdv }}</td>
          <td>{{ $val->TimeRdv }}</td>
          <td>{{ $val->created_at}}</td>
          <td>{{ $val->updated_at}}</td>
          <td colspan="4">
            <a class="button  is-link    " name="id" href="{{ route('rdvShow.show',[$val->id]) }}"  ><i class="fas fa-eye"></i></a>
            <a id="del"class="button  is-danger  " href="{{ route('rdvDelete.destroy',[$val->id]) }}" name="view"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
        @endforeach
      </form>
    </tbody>
  </table>
</div>


<script>
$(document).ready(function(){

  $.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });




  $('#tab').DataTable({
    autoFill: true,
    select: true,
  });
});
</script>

@include('footer')
