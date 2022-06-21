
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

@extends('includes.header')
<form action="{{ url('insertdatauser') }}" method="post">
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="nameInputLabel">Name:</label>
            <input type="text" class="form-control" id="nameInputLabel" name="name">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="emailInputLabel">E-mail:</label>
            <input type="text" class="form-control" id="emailInputLabel" name = "email">
          </div>
        </div>



        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
