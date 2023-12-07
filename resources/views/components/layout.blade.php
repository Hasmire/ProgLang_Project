<!DOCTYPE html>
<html>

<head>
  <title>ProgLang Final Project</title>
  @vite('resources/css/app.css')
</head>

<body>
  <div class="flex w-full flex-col items-center bg-slate-100 py-4">
    {{ $slot }}
  </div>
</body>

</html>
