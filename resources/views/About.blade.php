@extends('layouts/layBas')
@section('body')
<div class="text-4xl text-center my-4">
    About us
</div>
<div class="w-[100%] flex items-center justify-evenly">
    <div class="bgGradientprimary !w-[50%] cardNormal p-4">
        <h1 class="text-4xl mb-4">What is this web?</h1>
        <p class="text-xl">This website builded to make student found a great resources for them to learn and to pass pass the exam like final exam adn etc from the senior.
            <div class="text-xl mt-4">
                feel free to use this website, no need to login etc. just search and download the file. but if you want to contribute feel free to login and join our comunity :)_
            </div>
        </p>
    </div>
    <div>
        <img src="{{ Storage::url('img\WebAsset\Group 66.png') }}" alt="" class="bgGradientprimary !w-[70%] cardNormal">
    </div>
</div>

@endsection
