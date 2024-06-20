@php
    use App\Models\Post;
    $posts = Post::latest()->get();
@endphp

<section class="bg-slate-200">
    <div class="container mx-auto bg-white">
        <div id="postslider" class="owl-carousel owl-theme grid grid-cols-12 gap-3">

            @foreach ($posts as $post)
                <div class="col-span-3">
                    <!-- Card -->
                    <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
                        href="#">
                        <div class="aspect-w-16 aspect-h-11">
                            <img class="w-full object-cover rounded-xl"
                                src="{{asset('storage/'.$post->thumbnail)}}"
                                alt="Image Description">
                        </div>
                        <div class="my-6">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                               {{$post->title}}
                            </h3>
                            <p class="mt-5 text-gray-600 dark:text-neutral-400">
                                <?php echo substr($post->description, 0, 200); ?>
                            </p>
                        </div>

                    </a>
                    <!-- End Card -->
                </div>
            @endforeach
        </div>
    </div>
</section>
