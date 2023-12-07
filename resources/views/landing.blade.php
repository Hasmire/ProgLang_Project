<!DOCTYPE html>
<html>

<head>
  <title>Welcome to Our Site</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @vite('resources/css/app.css')
</head>

<body>
  <div class="flex h-screen w-full flex-col items-center bg-slate-100 py-4">
    <div class="text-center">
      <div class="text-3xl font-semibold text-red-500">
        PHP Programming Language
      </div>
      <div class="mt-2 text-base text-gray-600">
        by Ambal, Bulan, Lagman
      </div>
    </div>
    <div class="mx-4 mt-8 md:mx-0 md:w-[600px]">
      <a href="https://laravel.com/docs"
        class="duration-250 s cale-100 flex rounded-lg bg-white from-gray-700/50 via-transparent p-6 shadow-2xl shadow-gray-500/20 transition-all focus:outline focus:outline-2 focus:outline-red-500 motion-safe:hover:scale-[1.01]">
        <div>
          <div class="flex h-16 w-16 items-center justify-center rounded-full bg-red-50">
            <p class="text-xl text-red-500">
              1
            </p>
          </div>
          <h2 class="mt-6 text-xl font-semibold text-gray-900">Web-Centric Focus</h2>
          <p class="mt-4 text-sm leading-relaxed text-slate-500">
            Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer
            or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
          </p>
        </div>
      </a>
    </div>
  </div>
</body>

</html>
