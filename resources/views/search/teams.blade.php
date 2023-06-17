<x-base-layout>
    <div class="bg-white p-3">
        <div class="flex justify-center">
            <h1>Teams Search</h1>
        </div>

        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Code</th>
                <th scope="col">Country</th>
                <th scope="col">Founded</th>
                <th scope="col">Logo</th>
                <th scope="col">Surface</th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $result)
                <tr>
                    <th scope="row">{{$result->team->id}}</th>
                    <th scope="row">{{$result->team->name}}</th>
                    <th scope="row">{{$result->team->code}}</th>
                    <th scope="row">{{$result->team->country}}</th>
                    <th scope="row">{{$result->team->founded}}</th>
                    <th scope="row">
                        <img src="{{$result->team->logo}}" alt="logo">

                    </th>
                    <th scope="row">{{$result->venue->surface}}</th>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

</x-base-layout>
