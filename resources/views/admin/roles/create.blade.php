@extends('admin.Layout.app')

@section('title', 'Ajouter un rôle')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">Ajouter un nouveau role</h2>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form action="{{ route('admin.roles.store') }}" method="POST">
                @csrf
                
                <div class="mb-5">
                    <label class="form-label fw-bold small text-muted text-uppercase">Nom de role <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control bg-light border-0 py-2" placeholder="ex: Super Admin" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold m-0">Permissions</h5>
                    <button type="button" id="selectAll" class="btn btn-sm btn-outline-secondary px-3">Select All</button>
                </div>

                <div class="table-responsive border rounded mb-5">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4 py-3" style="width: 30%;">Service</th>
                                @foreach($actions as $action)
                                    <th class="text-center py-3">{{ ucfirst($action) }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td class="ps-4 fw-medium text-dark">{{ $service }}</td>
                                @foreach($actions as $action)
                                    @php
                                        $permName = strtolower($service) . '.' . $action;
                                    @endphp
                                    <td class="text-center">
                                        <div class="form-check d-inline-block">
                                            <input class="form-check-input perm-checkbox" type="checkbox" name="permissions[]" value="{{ $permName }}">
                                        </div>
                                    </td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-start">
                    <button type="submit" class="btn btn-dark px-5 py-2 fw-bold shadow-sm">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .bg-light { background-color: #f8f9fa !important; }
    .table thead th {
        font-weight: 600;
        font-size: 0.8rem;
        color: #6c757d;
        border-bottom: 0;
    }
    .form-check-input:checked {
        background-color: #000;
        border-color: #000;
    }
    .form-check-input {
        width: 1.25rem;
        height: 1.25rem;
        cursor: pointer;
    }
    .btn-dark {
        background-color: #193557;
        border-color: #193557;
    }
    .btn-dark:hover {
        background-color: #142b46;
        border-color: #142b46;
    }
</style>

<script>
    document.getElementById('selectAll').addEventListener('click', function() {
        const checkboxes = document.querySelectorAll('.perm-checkbox');
        const allChecked = Array.from(checkboxes).every(cb => cb.checked);
        checkboxes.forEach(cb => cb.checked = !allChecked);
        this.textContent = !allChecked ? 'Deselect All' : 'Select All';
    });
</script>
@endsection
