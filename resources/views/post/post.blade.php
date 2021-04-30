@extends('layouts.app')
@section('content')
<div class="container">

    <form action="{{ route('do_post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (session('success'))
        <div class="alert alert-danger">
            <h5>Data Insert Successfully!</h5>
        </div>

        @endif
            @error('name')
             <div class="alert alert-primary">
                 {{ $message }}
                </div>
            @enderror
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div>
            <label for="name">Age</label>
            <input type="text" name="age" class="form-control">
        </div>
        <div>
            <label for="name">Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div>
            <label for="name">Father_Name</label>
            <input type="text" name="father_name" class="form-control">
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

            <div class="mt-5">
                <label for="department">Department</label>
                <select name="department_id" class="form-control">
                   @foreach ($departments as $department )
                   <option value="{{ $department->id }}">{{ $department->name }}</option>

                   @endforeach
                </select>
            </div>
            <div class="mt-5">
                <label for="subject">Subject</label>
                <select name="subject_id" class=" form-control">
                    @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-5">
                <label for="subject">Ourclass</label>
                <select name="ourclass_id" class=" form-control">
                    @foreach ($ourclasses as $ourclass)
                    <option value="{{ $ourclass->id }}">{{ $ourclass->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-5">
                <button class="btn btn-primary" type="submit">submit</button>
            </div>
     </form>


</div>


@endsection
