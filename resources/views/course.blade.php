@extends('layout.courselayout')

@section('title', 'Course')

@section('pagetitle', 'My Course')

@section('main_content')

    <div class="d-md-flex justify-content-md-end">
        <a href="{{ route('courses.create') }}">
            <button class="btn btn-success my-2" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>
                &nbsp;Create
            </button>
        </a>
    </div>
    <br>

    <table class="table table-hover table-dark table-striped table-border border-light mt-4">
        <tr>
            <th>NUM.</th>
            <th>COURSE CODE</th>
            <th>COURSE NAME</th>
            <th>LECTURER</th>
            <th>SKS</th>
            <th>DESCRIPTION</th>
            <th>ACTIONS</th>
        </tr>
        @foreach ($courses as $matkul)
            {{-- menampilkan nomor kolom secara berurutan melalui $loop->index --}}
            @php($i = $loop->index)
            @php($i++)
            <tr>
                <td class="number">{{ $i }}</td>
                {{-- mengarahkan hyperlink ke detail Courses sesuai Kode Mata Kuliah yang diklik --}}
                <td><a href="{{ route('courses.show', $matkul->course_code) }}">{{ $matkul['course_code'] }}</a></td>
                <td>{{ $matkul['course_name'] }}</td>
                <td>{{ $matkul['lecturer'] }}</td>
                <td class="number">{{ $matkul['number_sks'] }}</td>
                <td>{{ $matkul['description'] }}</td>
                <td>
                    <div class="d-flex gap-2 justify-content-center">
                        <a class="btn btn-warning" href="{{ route('courses.edit', $matkul->course_code) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                        </a>
                        <form action="{{ route('courses.destroy', $matkul->course_code) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger"
                                onclick="return confirm('Are you sure you want to delete the data?\nThis action cannot be undone!');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
