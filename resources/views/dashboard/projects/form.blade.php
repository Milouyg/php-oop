@if ($errors->any())
                    <div class="p-2 bg-yellow border-2 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{route('dashboard/store')}}" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                    @csrf 
                    {{ method_field($method) }}
                    <div class="mb-4">
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Titel
                      </label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="titel" value="{{old('title')}}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                          Beschrijving
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" type="text" placeholder="beschrijving" value="{{old('description')}}">
                      </div>
                      <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
                </form>

