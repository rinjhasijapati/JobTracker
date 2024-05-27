<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-blue-500 leading-tight capitalize">
            create a new lead
        </h2>
    </x-slot>


    <form action="{{route('newlead.add')}}" method='post'>
        @csrf()
        <div class="max-w-2xl mx-auto">
            <br>
            <h1 class="text-xl text-blue-500">Company Overview</h1>
            <br>
            <div class="bg-white shadow-md rounded-md p-6 max-w-3xl mx-auto">
                <div class="flex mb-5">
                    <div class="w-1/2 pr-4">
                        <label class="text-gray-600">Company Name</label>
                        <input  value="{{ old('companyname') }}" name='companyname' type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" Company Name (required)" required />

                    </div>
                    <div class="w-1/2 pl-4">
                        <label class="text-gray-600">Company Website</label>
                        <input value="{{ old('companywebsite') }}" name='companywebsite' type="url" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" https://" required />
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label class="text-gray-600">Company Summary</label>
                    <textarea name='companysummary' name="message" rows="3" column="50" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" Enter a short description about the company." required>{{ old('companysummary') }}</textarea>
                </div>
            </div>
        </div>
        
        
            <div class="max-w-2xl mx-auto">
                <br>
                <h1 class="text-xl text-blue-500">Job Details</h1>
                <br>
                <div class="bg-white shadow-md rounded-md p-6 max-w-3xl mx-auto">
                <div class="flex mb-5">
                    <div class="w-3/4 pr-4">
                        <label class="text-gray-600">Job Title</label>
                        <input value="{{ old('jobtitle') }}"  name="jobtitle" type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" Job Title" required />
                    </div>
                    <div class="w-3/4 pr-4">
                        <label class="text-gray-600">Listing URL</label>
                        {{-- @error('email')
    <div class="text-danger">{{ $message }}</div>
@enderror --}}

                        <input name="listingurl" type="url" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" Where did you find this job?" required />
                        <x-input-error :messages="$errors->get('listingurl')" class="mt-2" />
                        
                    </div>
                </div>
                <div class="flex mb-5">
                    <div class="w-3/4 pr-4">
                        <label class="text-gray-600">Location</label>
                        <input value="{{ old('joblocation') }}" name="joblocation" type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" Remote" required />
                    </div>
                    <div class="w-3/4 pr-4">
                        <label class="text-gray-600">Compensation</label>
                        <input value="{{ old('compensation') }}"  name="compensation" type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" Rs.6,00,000/year" required />
                    </div>
                    <div class="w-3/4 pr-4">
                        <label class="text-gray-600">Contract Type</label>
                        <input value="{{ old('contracttype') }}" name="contracttype" type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" Full-Time" required />
                    </div>
                </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label class="text-gray-600">Job Description</label>
                        <textarea name="jobdescription" rows="10" column="50" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" Paste the job description here" required>{{ old('jobdescription') }}</textarea>
                    </div>
                </div>
                <br>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
    </form>
   


</x-app-layout>