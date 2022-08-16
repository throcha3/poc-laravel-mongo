<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
 <div class="p-6 bg-white border-b border-gray-200">
   <h1 class="text-xl md:text-2xl">{{ $post['title']}}</h1>
   <p class="my-2">{{ $post['content'] }}</p>
   <small class="text-gray-500">{{ $post['user']['name'] }} - {{ $post['created_at'] }}</small>
 </div>
</div>