@include('head')

@include('nav')
<p class="title is-2 has-text-centered">Ordonnance</p>
<div class="container"><hr>
  <span class="has-text-centered"> </span>
  <br><br>
  <table id="tab"class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <thead>
      <tr>
        <td>Numero Ordonnance</td>
        <td>Numero Consultation</td>
        <td>Date Ordonnance</td>
        <td>Medicaments</td>
        <td class="has-text-centered">CRUD</td>
      </tr>
    </thead>
    <tbody>
      <form >
        @foreach($data as $val)
        <tr>
          <td>{{ $val->NumOrd }}</td>
          <td>{{ $val->NumCons }}</td>
          <td>{{ $val->DateOrd }}</td>
          <td>{{ $val->NomMedc }}</td>
          <td class="has-text-centered" colspan="4">
            <a id="del"class="button  is-danger  " href="{{ route('ordDelete.destroy',[$val->id]) }}" name="view"><i class="fas fa-trash-alt"></i></a>
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
