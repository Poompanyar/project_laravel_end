@extends('layout')
@section('title')
@endsection
@section('content')
    <main class="bg-white-300 flex-1 p-3 overflow-hidden">

        <div class="flex flex-col">
            <!-- Stats Row Starts Here -->
            <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                <div
                    class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                    <div class="p-4 flex flex-col">
                        <a href="#" class="no-underline text-white text-2xl">
                            {{$country}}
                        </a>
                        <a href="#" class="no-underline text-white text-lg">
                            Total Country
                        </a>
                    </div>
                </div>

                <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                    <div class="p-4 flex flex-col">
                        <a href="#" class="no-underline text-white text-2xl">
                            {{$total}} 
                        </a>
                        <a href="#" class="no-underline text-white text-lg">
                            Total Population (millions)
                        </a>
                    </div>
                </div>

                <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                    <div class="p-4 flex flex-col">
                        <a href="#" class="no-underline text-white text-2xl">
                            {{$density}}
                        </a>
                        <a href="#" class="no-underline text-white text-lg">
                            Total Density
                        </a>
                    </div>
                </div>

                <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                    <div class="p-4 flex flex-col">
                        <a href="#" class="no-underline text-white text-2xl">
                            {{$medianAge}}
                        </a>
                        <a href="#" class="no-underline text-white text-lg">
                            Total Median Age
                        </a>
                    </div>
                </div>
            </div>

            <!-- /Stats Row Ends Here -->

            <!-- Card Sextion Starts Here -->
            <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                <!-- card -->

                <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                    <div class="px-6 py-2 border-b border-light-grey">
                        <div class="font-bold text-xl">Trending Categories</div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-grey-darkest">
                            <thead class="bg-grey-dark text-white text-normal">
                                <tr>
                                    <th scope="col">Country</th>
                                    <th scope="col">Total Population</th>
                                    <th scope="col">Density</th>
                                    <th scope="col">Median Age</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($populationData as $item)
                                <tr>
                                    <td>{{$item->pu_country}}</td>
                                    <td>{{$item->pu_total_all}}  (millions)</td>
                                    <td>{{$item->pu_density}}</td>
                                    <td>{{$item->pu_median_age}}</td>
                                    <td>
                                       <a href="{{route('edit',$item->id)}}">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Edit
                                        </button>
                                       </a>
                                    </td>
                                    <td>
                                        <a href="{{route('delete',$item->id)}}">
                                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                Delete
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /card -->

            </div>
        </div>
    </main>
@endsection
