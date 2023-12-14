@extends("layouts.restaurantback")

@section("content")
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Ajouter un restaurant</h4>

            <form class="forms-sample" method="POST" action="{{ route("restaurant.store") }}">
                @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">nom</label>
                <input type="text" class="form-control" name="name" id="exampleInputUsername1" placeholder="le nom du restaurant">
              </div>
            <div class="form-group">
                <label for="my-textarea">Description</label>
                <textarea id="my-textarea" class="form-control" cols="6" rows="6" name="description" ></textarea>
            </div>
              <div class="form-group">
                <label for="exampleInputPassword1">image</label>
                <input type="file" name="logo_path" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-primary me-2">Ajouter</button>
              <button class="btn btn-light">Annuler</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
