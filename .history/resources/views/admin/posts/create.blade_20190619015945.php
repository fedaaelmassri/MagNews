@extends('layouts.admin');
@section('content')
<h2>New Post</h2>
<!-- @if ($errors->any())
<div class="alert alert-danger">
	<ul>
	@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
</div>
@endif -->
<form method="post" action="{{ route('admin.posts.store') }}">
{{csrf_field()}}
<div class="form-group">
    <label class="control-label">Tiltle </label>
        <input type="text" name="title" id="title" value="{{ old('title')}}" class="col-form-control @error('title') is-invalid @enderror">
			 
    </div>
<div class="form-group">
    <label class="control-label">Content </label>
    
<textarea name="content" id="content" class="col-7 form-control @error('content') is-invalid @enderror" >{{ old('content') }}</textarea>
			 
 </div>
   <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
@endsection