<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset("backend/vendors/feather/feather.css") }}">
  <link rel="stylesheet" href="{{  asset("backend/vendors/mdi/css/materialdesignicons.min.css") }}">
  <link rel="stylesheet" href="{{ asset("backend/vendors/ti-icons/css/themify-icons.css") }}">
  <link rel="stylesheet" href="{{ asset("backend/vendors/typicons/typicons.css") }}">
  <link rel="stylesheet" href="{{ asset("backend/vendors/simple-line-icons/css/simple-line-icons.css") }}">
  <link rel="stylesheet" href="{{ asset("backend/vendors/css/vendor.bundle.base.css") }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset("backend/css/vertical-layout-light/style.css") }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset("backend/images/favicon.png") }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">

              <h4>Préstataire ou Client ? créer un compte</h4>
              <form class="pt-3" method="POST" action="{{ route("register") }}">
                @csrf
                <div class="form-group">
                  <label for="">Qui êtes-vous?</label>
                  <select class="form-control " name="role_id" id="">
                    <option selected>Veillez selectionner un role</option>
                    <option value="3">ClIENT</option>
                    <option value="2">PRESTATAIRE</option>
                  </select>
                </div>

                <div class="form-group">
                    <input type="text" name="name" class="form-control form-control-lg"  placeholder="votre nom et post-nom">
                  </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="votre mail">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="votre mot de passe">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" ">s'enregistrer</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Rester connecté
                    </label>
                  </div>

                </div>

                <div class="text-center mt-4 fw-light">
                  Vous avez un compte? <a href="{{ route("login") }}" class="text-primary">Se connecter</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset("/backend/vendors/js/vendor.bundle.base.js") }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset("backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js") }}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset("backend/js/off-canvas.js") }}"></script>
  <script src="{{ asset("backend/js/hoverable-collapse.js") }}"></script>
  <script src="{{ asset("backend/js/template.js") }}"></script>
  <script src="{{ asset("backend/js/settings.js") }}"></script>
  <script src="{{ asset("backend/js/todolist.js") }}"></script>
  <!-- endinject -->
</body>

</html>
