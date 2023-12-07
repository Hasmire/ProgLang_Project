@props(['link', 'number', 'title', 'description'])

<a href="{{ $link }}"
  class="duration-250 flex scale-100 rounded-lg bg-white from-gray-700/50 via-transparent p-6 shadow-2xl shadow-gray-500/20 transition-all focus:outline focus:outline-2 focus:outline-red-500 motion-safe:hover:scale-[1.01] md:w-[500px]">
  <div>
    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-red-50">
      <p class="text-xl text-red-500">
        {{ $number }}
      </p>
    </div>
    <h2 class="mt-6 text-xl font-semibold text-gray-900">{{ $title }}</h2>
    <p class="mt-4 text-sm leading-relaxed text-slate-500">{{ $description }}</p>
  </div>
</a>
