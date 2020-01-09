@include('head')

<div id="fullpage">
  <section class="section s1  ">
    <h1>MEDICAL CABINET MANAGEMENT</h1>
    <div class="container">
      <div class="box">
        <form>
          <div class="row container">
            <div class="col-lg-4">
              <div class="field">
                <p class="control has-icons-left">
                  <input class="input" type="text" name="user" placeholder="Username">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="field">
                <p class="control has-icons-left">
                  <input class="input" type="password" name="pwd" placeholder="Password">
                  <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                  </span>
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="field">
                <p class="control has-icons-left">
                  <input class="button is-fullwidth is-primary" type="submit" name="login" id="login" value="Login">

                </p>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <section class="section s2 ">
    <h1>ABOUT US </h1>

  </section>
</div>


<script type="text/javascript">
$(document).ready(function () {
  $.ajaxSetup({

    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });

  //login
  $("#login").click(function (e) {
    e.preventDefault();

    $.ajax({
      type: 'GET',
      url:  '/login',
      data: {

        'user' : $("input[name=user]").val() ,
        'pwd'  : $("input[name=pwd]").val()
      },
      dataType:'json',
      success:function (data) {
        if(data.string == 'dashbord'){
          window.location.href = 'dash';
        }else {
          console.log(data.string);
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Username not found!',
          })
        }

      },
      error:function (data) {
        alert('error');
      }
    });
  });
});

</script>

@include('footer')
