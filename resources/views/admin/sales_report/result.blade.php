{{-- resources/views/admin/sales_report/result.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Sales Report Results</h1>

    <p>Total Sales: ${{ number_format($totalSales, 2) }}</p>
</div>
@endsection
