@extends('Template.Template')
@section('plantillaWeb')
    <section class="container">
      <form action="{{route('user.store')}}" method="POST">
        {{csrf_field()}}
        <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label" >Nombres</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabel"name="name" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabel"name="email" placeholder="col-form-label">
            </div>
          </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel" name="password" placeholder="col-form-label">
            </div>
          </div>

          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Rol</label>
            <div class="col-sm-10">
              <select type="text" class="form-control" id="role" name="role" placeholder="col-form-label">
                @foreach (Spatie\Permission\Models\Role::get() as $role)
                <option selected value="{{$role->name}}">{{$role->name}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <input type="submit" name="btn_1" value="RegistroUser">
    </form>

    </section>

    @endsection
