<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
   <meta charset="UTF-8"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <title>{{ $title }}</title> 
   
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
   <!-- Custom CSS (jika ada) -->
   <link rel="stylesheet" href="{{ asset('assets/css/create_user.css') }}"> 
   <link rel="stylesheet" href="{{ asset('assets/css/list_user.css') }}"> 
   <link rel="stylesheet" href="{{ asset('assets/css/show_user.css') }}">
</head>
 
<body> 
@yield('content')
 
</body> 
</html> 
