<div class="mx-auto" style="width: 500px;">
    <div class="card">
      <div class="card-header">@yield('card')</div>
        <div class="card-body text-nowrap">
            <div class="form-group">
            <input type="text" name="name" value="{{session('name')}}" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <textarea id="textarea1" class="form-control" name="description" placeholder="Description">{{session('description')}}</textarea>
              </div>
              <button class="btn btn-primary" type="submit">Create</button>
         </div>
     </div>
  </div>