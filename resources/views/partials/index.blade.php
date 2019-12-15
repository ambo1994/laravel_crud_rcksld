@extends('layout.master')

@section('content')

<div class="container">
    <form name="form"  >
      <div class="form-group">
        <h1 class="text-center ">Christmas Gift Ideas</h1>
        <div class="input-group-prepend">
          <input  type="text"  class="form-control" placeholder="Click the button to add your wish list" name="todo" disabled>
          <a href="" data-toggle="modal" data-target="#add_new_list">
          <span class="input-group-text" >
          <i class="fas fa-plus"></i>
          </span>
          </a>
        </div>
      </div>
      <div class="data">
        <ul class="list-unstyled">
        </ul>
      </div>
    </form>
</div>

<!-- Add Modal -->

<div class="modal" tabindex="-1" role="dialog" id="add_new_list" aria-labelledby="add_new_list" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create your Wish list</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group row">
              <label for="list" class="col-sm-2 col-form-label"><b>Wishlist:</b></label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-black" id="list" name="list" placeholder="Your wish list">
              </div>
            </div>
          </div>

          
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" id="add" class="btn btn-primary">Add</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Update Modal -->

<div class="modal" tabindex="-1" role="dialog" id="update_list" aria-labelledby="update_list" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit your Wish list</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <label for="edit_list" class="col-sm-2 col-form-label"><b>Wishlist:</b></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-black" id="edit_list" name="edit_list" placeholder="Your wish list">
                  <input type="hidden" class="form-control form-control-black" id="edit_id" name="edit_id">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="update" class="btn btn-primary">Save</button>
          <button type="button" id="delete" class="btn btn-danger">Delete</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


@endsection
