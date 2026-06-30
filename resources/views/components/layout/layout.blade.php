@props([
    'title'=>'My App'
]
    
)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-layout.nav/>

    
    <main>
        {{ $slot }}
    </main>
   @session('success')
        <div 
        x-data="{show:true}"
        x-init="setTimeout(()=>show=false,3000)"
        x-show="show"
        id="success-message" style="position: fixed; right: 1rem; bottom: 1rem; z-index: 1000; padding: 0.75rem 1rem; background: #16a34a; color: white; border: 1px solid #15803d; border-radius: 9999px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.2);">
            {{ session('success') }}
        </div>
    @endsession

        
    
   

</body>
</html>