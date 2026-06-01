@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold mb-1">Course Catalog</h1>
            <p class="text-muted mb-0">Activity 5: Courses Module Structure</p>
        </div>

        <span class="badge bg-primary fs-6">
            Total Courses: {{ $courses->count() }}
        </span>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Department</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($courses as $course)
                            <tr>
                                <td class="fw-bold text-primary">
                                    {{ $course->course_code }}
                                </td>
                                <td>{{ $course->course_name }}</td>
                                <td>{{ $course->units }}</td>
                                <td>{{ $course->department }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                    No courses found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection