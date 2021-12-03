<x-guest-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @auth()
                        <p>Logged in</p>
                    @endauth
                    <h2 class="text-3xl bg-gray-200 p-4 mb-6">Welcome to the Car Zone</h2>
                    <table class="border-collapse border border-gray-400 text-gray-800">
                        <thead class="bg-gray-600 text-gray-100">
                        <tr class="p-2">
                            <th>Model</th>
                            <th>Manufacturer</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr class="p-2">
                                <td>{{$car->model}}</td>
                                <td>{{$car->manufacturer}}</td>
                                <td>{{$car->price}}</td>
                                <td class="text-coolGray-700">SHOW EDIT DELETE</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="4">NAVIGATION HERE</td>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
