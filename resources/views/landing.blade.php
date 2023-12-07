<!DOCTYPE html>
<html>

<head>
  <title>Welcome to Our Site</title>
  @vite('resources/css/app.css')
</head>

@php
  $cards = json_decode(file_get_contents(resource_path('cards.json')), true);
@endphp

<body>
  <div class="flex w-full flex-col items-center bg-slate-100 py-4">
    <div class="text-center">
      <div class="text-3xl font-semibold text-red-500">
        PHP Programming Language
      </div>
      <div class="mt-2 text-base text-gray-600">
        by Ambal, Bulan, Lagman
      </div>
    </div>
    <div class="mt-8 flex w-full flex-row flex-wrap justify-center gap-6 px-8 md:w-9/12">
      @foreach ($cards as $card)
        <x-card :link="$card['link']" :number="$card['number']" :title="$card['title']" :description="$card['description']" />
      @endforeach
    </div>
  </div>
</body>

</html>
