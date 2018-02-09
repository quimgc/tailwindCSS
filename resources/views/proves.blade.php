@extends('layouts.app')

@section('content')

    {{--El primer és pensar que s'ha de fer--}}

    <div class="bg-red-lightest border border-red-light ml-4 mr-4 p-4 text-red-dark rounded relative">

        <strong>Error</strong>
        <span>Something nasty has been happen!</span>
        <span class="absolute pin-r pin-t pin-b py-3 px-4">
            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>

        </span>


    </div>
    
    <div class="flex justify-center my-2">

        <div class="w-full max-w-md">

            <form action="#" class="bg-white shadow-md text-sm mb-4 pb-8 pt-4 px-2">

                <div>
                    <label class="block text-grey-darker font-bold mb-2" for="mail">Email</label>
                    <input class="shadow border appearance-none rounded w-full text-grey" id="mail" type="email" name="email" placeholder="example@example.com">
                </div>

                <div>
                    <label class="block text-grey-darker font-bold mb-2 mt-2" for="password">Password</label>
                    <input class="shadow border appearance-none rounded w-full text-grey"id="password" type="password" name="password" placeholder="Password here">

                    <p class="text-red mt-2 text-xs">* Password is required!</p>
                </div>

                <div class="flex items-center justify-between">
                    <button class="rounded border font-bold bg-blue-dark text-white mt-4 px-3 py-3 shadow hover:bg-blue-darker">Login</button>
                    <a class="inline-block text-xs text-blue hover:text-blue-darker mt-2" href="#">Password oblidat</a>

                </div>
            </form>

        </div>

    </div>

    <div class="flex justify-center my-2">

        <div class="w-full max-w-sm shadow-lg rounded bg-white">
            <img src="img/descarga.jpg" alt="Text Alternatiu">
            <div class="px-6 py-4">
                <div class="font-bold text-xl">Titol Imatge</div>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cum cumque dicta dignissimos dolorem, earum eveniet ex id modi nemo officiis provident quis suscipit. Blanditiis distinctio ducimus obcaecati quisquam sapiente!</p>
            </div>

            <div class="px-6 py-4">
                <span class="bg-grey-lighter rounded-full px-3 py-1 text-sm text-grey-darkest">#Cool</span>
                <span class="bg-grey-lighter rounded-full px-3 py-1 text-sm text-grey-darkest">#DAM</span>
                <span class="bg-grey-lighter rounded-full px-3 py-1 text-sm text-grey-darkest">#QuimGonzalez</span>
                <span class="bg-grey-lighter rounded-full px-3 py-1 text-sm text-grey-darkest">#F135</span>

            </div>

        </div>

    </div>

@endsection


<style>
    
    
    
</style>