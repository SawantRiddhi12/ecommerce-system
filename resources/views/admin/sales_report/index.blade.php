@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sales Report</h3>
        </div>

        <div class="card-body">
            <!-- Sales Report Form -->
            <form action="{{ route('sales.report') }}" method="POST">
                @csrf

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" required>
                        </div>
                    </div>
</br>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-file-alt"></i> Generate Report
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
