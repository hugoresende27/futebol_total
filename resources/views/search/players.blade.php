<x-base-layout>
    <div class="bg-white p-3">
        <div class="flex justify-center">
            <h1>Players Search</h1>
        </div>


        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Birth Place</th>
                <th scope="col">Nationality</th>
                <th scope="col">height</th>
                <th scope="col">weight</th>
                <th scope="col">photo</th>

            </tr>
            </thead>
            <tbody>
            @foreach($results as $result)
                <tr>
                    <th scope="row">{{$result->player->id}}</th>
                    <th scope="row">{{$result->player->firstname}}</th>
                    <th scope="row">{{$result->player->lastname}}</th>
                    <th scope="row">{{$result->player->age}}</th>
                    <th scope="row">{{$result->player->birth->place}}</th>
                    <th scope="row">{{$result->player->nationality}}</th>
                    <th scope="row">{{$result->player->height}}</th>
                    <th scope="row">{{$result->player->weight}}</th>
                    <th scope="row">
                        <img src="{{$result->player->photo}}" alt="logo">

                    </th>


                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

</x-base-layout>
