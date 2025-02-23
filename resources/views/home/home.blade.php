@extends('layout.app')

@section('title', 'Attendance Dashboard')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card mt-5">
            <div class="card-header bg-dark text-white">
                <h3 class="card-title mt-3" style="font-size: 1.5rem;">Search Attendance</h3>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('attendance.search') }}">

                    <div class="d-flex justify-content-end">
                        @csrf
                        <div class="input-group mb-3 w-50">
                            <input type="text" class="form-control @error('search_term') is-invalid @enderror"
                                name="search_term" placeholder="Enter email or phone number"
                                value="{{ old('search_term') }}" required>
                            <button class="btn btn-dark" type="submit">Search</button>
                            @error('search_term')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </form>

                @if (isset($attendanceData) && $attendanceData->isNotEmpty())
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Login Time</th>
                            <th>Logout Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendanceData as $attendance)
                        <tr>
                            <td>{{ $attendance->internalUser->id ?? $attendance->externalUser->id ?? 'N/A' }}</td>
                            <td>
                                {{ $attendance->internalUser->email ?? $attendance->externalUser->phone_2 ?? 'N/A' }}
                            </td>
                            <td>{{ $attendance->login_time ?? 'N/A' }}</td>
                            <td>{{ $attendance->logout_time ?? 'N/A' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @elseif (isset($attendanceData))
                <p class="text-muted">No attendance records found.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection