<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/sp-2.1.2/datatables.min.css" rel="stylesheet"/>
 
    <script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/sp-2.1.2/datatables.min.js"></script>
    
    <style>
        .dataTables_info {
            display: none;
        }
        .dataTables_paginate {
            padding-top: 2rem;
        }
    </style>

    <title>Gestion Agen Habitat</title>
</head>

<body style="padding-top: 5rem;">
    
    @include('partials._navbar')
    
    <main class="container pb-5">
        {{ $slot }}
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>