<a href="#" class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
  <p class="mx-2 text-sm">
    <?= $notification['title']  . "  " . \Carbon\Carbon::parse($notification['createdAt'])->diffForHumans(\Carbon\Carbon::now('GMT')->subHours(-3)); ?>
  </p>
</a>