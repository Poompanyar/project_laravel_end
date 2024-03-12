@extends('layout')
@section('title')
    
@endsection
@section('content')
<div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
    <div class="bg-gray-600 px-2 py-3 border-solid border-gray-400 border-b">
        Form
    </div>
    <div class="p-5">

        <form action="{{route('addCountry')}}" method="POST" class="w-full bg-gray-300">
            @csrf
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/4">
                    <label class="block text-gray font-regular md:text-right mb-1 md:mb-0 pr-4"
                           for="pu_country">
                        Country
                    </label>
                </div>
                <div class="md:w-3/4">
                    <input class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
                           name="pu_country" type="text" value="" placeholder="country...">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/4">
                    <label class="block text-gray font-regular md:text-right mb-1 md:mb-0 pr-4"
                           for="pu_total_all">
                        Population
                    </label>
                </div>
                <div class="md:w-3/4">
                    <input class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
                           name="pu_total_all" type="number" value="" placeholder="population...">
                </div>
            </div><div class="md:flex md:items-center mb-6">
                <div class="md:w-1/4">
                    <label class="block text-gray font-regular md:text-right mb-1 md:mb-0 pr-4"
                           for="pu_density">
                        Density
                    </label>
                </div>
                <div class="md:w-3/4">
                    <input class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
                           name="pu_density" type="number" step="0.01" value="" placeholder="density...">
                </div>
            </div><div class="md:flex md:items-center mb-6">
                <div class="md:w-1/4">
                    <label class="block text-gray font-regular md:text-right mb-1 md:mb-0 pr-4"
                           for="pu_median_age">
                        Median Age
                    </label>
                </div>
                <div class="md:w-3/4">
                    <input class="bg-grey-200 appearance-none border-1 border-grey-200 rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
                           name="pu_median_age" type="number" step="0.01" value="" placeholder="median age...">
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                            type="submit">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection