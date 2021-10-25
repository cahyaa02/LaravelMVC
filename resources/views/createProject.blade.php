@extends('layout.courselayout')

@section('title', 'Project')

@section('pagetitle', 'Create Project')

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('project.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group py-3">
                        <label for="code">Code:</label>
                        <input type="text" class="form-control bg-black" id="code" name="code" required>
                    </div>
                    <div class="form-group py-3">
                        <label for="project">Project Name:</label>
                        <input type="text" class="form-control bg-black" id="project" name="project" required>
                    </div>
                    <div class="form-group py-3">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control bg-black" id="description" name="description" required>
                    </div>
                    <div class="form-group py-3">
                        <label for="semester">Semester:</label>
                        <input class="form-control bg-black" list="semester" name="semester" required>
                        <datalist id="semester">
                            <option value="Odd">
                            <option value="Even">
                        </datalist>
                    </div>
                    <div class="form-group py-3">
                        <label for="mata_kuliah">Mata Kuliah:</label>
                        <input type="text" class="form-control bg-black" id="mata_kuliah" name="mata_kuliah" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cursor-fill" viewBox="0 0 16 16">
                            <path
                                d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                        </svg>&emsp;Submit
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
