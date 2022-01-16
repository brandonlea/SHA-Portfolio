<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Saturn Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    </head>
    <body>
    <nav>
        <div>
            <div id="navbar" class="fixed z-20 flex items-center justify-between w-full h-16">
                <div class="flex-1 flex items-center justify-center sm:items-stretch">
                    <div class="sm:ml-6">
                        <div class="flex space-x-4">
                            <a href="#" class="text-white px-3 py-2 rounded-md text-sm lg:font-medium sm:font-sm" aria-current="page">HOME</a>

                            <a href="#about" class="text-gray-300  hover:text-white px-3 py-2 rounded-md text-sm lg:font-medium sm:font-sm">ABOUT</a>

                            <a href="#experience" class="text-gray-300 hover:text-white px-3 py-2 px-3 py-2 rounded-md text-sm lg:font-medium sm:font-sm">EXPERIENCE</a>

                            <a href="#products" class="text-gray-300 hover:text-white px-3 py-2 px-3 py-2 rounded-md text-sm lg:font-medium sm:font-sm">PRODUCTS</a>

                            <a href="#vouches" class="text-gray-300 hover:text-white px-3 py-2 px-3 py-2 rounded-md text-sm lg:font-medium sm:font-sm">VOUCHES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div id="home" class="bg-main w-full h-screen">
            <div class="grid place-items-center h-screen">
                <div class="text-center text-white">
                    <h1 class="font-extrabold lg:text-7xl text-4xl"><?php echo e($data->title); ?></h1>
                    <h4 class="mt-2 lg:text-2xl text-xl font-bold"><?php echo e($data->skills); ?></h4>
                    <h4 class="mt-2 lg:text-base text-sm"><?php echo e($data->moto); ?></h4>

                    <div class="pt-10 lg:text-3xl text-xl font-bold">
                       <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($social->active): ?>
                                <a target="_blank" href="<?php echo e($social->link); ?>"><i class="<?php echo e($social->icon); ?>"></i></a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>

    <div id="about" class="bg-gray-900">
            <div class="grid place-items-center h-auto lg:p-0 p-5">
                <div class="flex">
                    <div class="mr-8 self-center lg:h-64 lg:w-64">
                        <img class="rounded-full" src="<?php echo e(asset('images/saturnok.png')); ?>" alt="">
                    </div>
                    <div class="text-white my-auto">
                        <h4 class="lg:text-3xl font-bold text-xl"><?php echo e($data->about); ?></h4>
                        <p class="mt-4 lg:text-base md:text-sm text-sm">
                            <?php echo e($data->about_description); ?>

                        </p>
                    </div>
                </div>
            </div>
    </div>

    <div id="experience" class="w-full h-auto bg-white">
            <h1 class="font-extrabold text-4xl text-center text-gray-700 pt-5">EXPERIENCE</h1>
            <div class="grid place-items-center h-96">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flow-root">
                    <ul role="list" class="-mb-8">

                     <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($loop->last): ?>
                                <li>
                                    <div class="relative pb-8">
                                        <div class="relative flex space-x-3">
                                            <div>
                                        <span class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
                                            <i class="text-white <?php echo e($experience->icon); ?>"></i>
                                        </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-xl text-gray-700"><?php echo e($experience->title); ?></p>
                                                </div>
                                                <div class="text-right text-base whitespace-nowrap text-gray-700">
                                                    <time datetime="2020-09-20"><?php echo e($experience->date); ?></time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <?php else: ?>
                                <li>
                                    <div class="relative pb-8">
                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                        <div class="relative flex space-x-3">
                                            <div>
                                        <span class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
                                            <i class="text-white <?php echo e($experience->icon); ?>"></i>
                                        </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-xl text-gray-700"><?php echo e($experience->title); ?></p>
                                                </div>
                                                <div class="text-right text-base whitespace-nowrap text-gray-700">
                                                    <time datetime="2020-09-20"><?php echo e($experience->date); ?></time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                </div>
            </div>
        </div>



    <div id="products" class="w-full h-auto bg-gray-900">
        <div class="grid place-items-center h-auto">
            <h1 class="text-white text-center text-3xl font-extrabold pt-5">Products</h1>

            <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div x-data="{ open: false }">
                            <div @click="open = true" class="group relative">
                                <img src="<?php echo e($product->image); ?>" alt="" class="group-hover:opacity-25 w-60 min-h-60 aspect-w-1 aspect-h-1 rounded-xl overflow-hidden hover:opacity-50 lg:h-60 lg:aspect-none object-center object-cover">

                                <div class="group-hover:block hidden absolute top-0  w-full h-full text-center text-white">
                                    <h1 class="font-extrabold text-2xl pt-2"><?php echo e($product->title); ?></h1>
                                    <p class="text-sm text-gray-400"><?php echo e($product->short_description); ?></p>
                                </div>
                            </div>

                            <!-- component -->
                            <div x-show="open" class="fixed z-50 inset-0 overflow-y-auto my-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="flex min-h-screen items-center justify-center pt-4 px-4 pb-20 text-center sm:block sm:p-0"
                                     x-transition:enter="ease-out duration-300"
                                     x-transition:enter-start="opacity-0"
                                     x-transition:enter-end="opacity-100"
                                     x-transition:leave="ease-in duration-200"
                                     x-transition:leave-start="opacity-100"
                                     x-transition:leave-end="opacity-0">

                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                                    <!-- This element is to trick the browser into centering the modal contents. -->
                                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                                    <div class="inline-block  align-bottom bg-gray-200 rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"
                                         x-transition:enter="ease-out duration-300"
                                         x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                         x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                         x-transition:leave="ease-in duration-200"
                                         x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                         x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                        <div class="sm:flex sm:items-start">
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                <img class="mx-auto w-20 h-20 pb-3" src="<?php echo e($product->image); ?>" alt="">
                                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                                    <?php echo e($product->title); ?>

                                                </h3>
                                                <div class="mt-2">
                                                    <p class="text-sm  w-48 text-gray-500">
                                                        <?php echo e($product->description); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                            <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>

        </div>
    </div>

    <div id="vouches" class="w-full  h-auto bg-white">
        <h1 class="text-gray-800 text-center text-3xl font-extrabold pt-5">Vouches</h1>

        <div class=" py-16 lg:py-24">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <?php $__currentLoopData = $vouches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vouch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div  class="mySlides relative py-24 px-8 bg-indigo-500 rounded-xl shadow-2xl overflow-hidden lg:px-16 lg:grid lg:grid-cols-2 lg:gap-x-8">
                        <div class="absolute inset-0 opacity-50 filter saturate-0 mix-blend-multiply">
                            <img src="https://wallpaperaccess.com/full/250472.jpg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="relative lg:col-span-1">
                            <blockquote class="mt-6 text-white">
                                <p class="text-xl font-medium sm:text-2xl"><?php echo e($vouch->vouch); ?></p>
                                <footer class="mt-6">
                                    <p class="flex flex-col font-medium">
                                        <span><?php echo e($vouch->name); ?></span>
                                        <span><?php echo e($vouch->username); ?></span>
                                    </p>
                                </footer>
                            </blockquote>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>


    </div>

    <div id="socials" class="w-full  h-96 bg-gray-900">
        <h1 class="text-white text-center text-3xl font-extrabold pt-5">Socials</h1>

        <div class="grid place-items-center h-60">
            <div class="text-center text-white">

                <div class="pt-10 text-3xl font-bold">
                    <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($loop->first): ?>
                            <a class="pr-4" target="_blank" href="<?php echo e($social->link); ?>"><i class="<?php echo e($social->icon); ?>"></i></a>
                        <?php else: ?>
                            <a target="_blank" href="<?php echo e($social->link); ?>"><i class="<?php echo e($social->icon); ?>"></i></a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

    </div>

    

        <script src="<?php echo e(asset('js/scrollspy.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/main.js')); ?>"></script>
        <script src="https://kit.fontawesome.com/6ee91beb67.js" crossorigin="anonymous"></script>
        <script src="//unpkg.com/alpinejs" defer></script>

    </body>
</html>
<?php /**PATH /Users/brandonlea/PhpstormProjects/saturnportfolio/resources/views/home.blade.php ENDPATH**/ ?>