<x-app-layout class="flex justify-center items-center">
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight capitalize">
            details
        </h2>
    </x-slot>
    <div  class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <div >
            <h2 class="text-3xl text-blue-400">{{$lead->company_name}}</h2>
            <h1 class="text-5xl font-extrabold mt-2 text-blue-500">{{$lead->job_title}}</h1>
            <div class="flex justify-between">
                <div class="flex flex-wrap items-center mt-4">
                    <p class="text-gray-500">
                        <div>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <a href="{{$lead->company_website}}" class="mr-4 ml-2 text-orange-500">{{$lead->company_name}} website</a>
                        </div>
                    </p>
        
                    <p class="text-gray-500  pr-5">
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                            <span class=" ml-2">{{$lead->job_location}}</span> 
                        </div>
                
                    </p>
        
                    <p class="text-gray-500  pr-5">
                        <div>
                            <i class="fa fa-usd" aria-hidden="true"></i> 
                            <span class=" ml-2">{{$lead->compensation}}</span> 
            
                        </div>
                    
                    </p>
        
                    <p class="text-gray-500  pr-5">
                        <div>
                            <i class="fa fa-briefcase" aria-hidden="true"></i> 
                            <span class=" ml-2">{{$lead->contract_type}}</span> 
    
                        </div>
                       
                    </p>
                </div>

                <div class="flex">
                    {{-- {{route('lead.showdetails',['id' => $interviewSet->id])}} --}}
                    <form action="{{route('lead.updateStatusFormDetails',['taskId' => $lead->id])}}" method="post"  id="statusForm" class="max-w-sm mx-auto mr-4">
                        @csrf
                        <div class="flex">
                            <div class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-10">
                                Current Status
                            </div>
                            <select id="states" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full pr-10">
                               
                                <option value="lead" @if($lead->status == 'lead') selected @endif>lead</option>
                                <option value="Application sent" @if($lead->status == 'Application sent') selected @endif>Application sent</option>
                                <option value="Interview set" @if($lead->status == 'Interview set') selected @endif>Interview set</option>
                                <option value="Offer Received" @if($lead->status == 'Offer Received') selected @endif>Offer Received</option>
                                <option value="Closed" @if($lead->status == 'Closed') selected @endif>Closed</option>
                            </select>
                        </div>
                    </form>
                    <a href="{{route('lead.showeditdetailsform',['id'=>$lead->id])}}">
                        <button class="font-mono bg-blue-100 text-blue-600 rounded-lg w-24 h-11 transition duration-300 hover:bg-blue-600 hover:shadow-outline hover:text-white">
                            Edit
                          </button>
                    </a>
                   
                </div>
                

            </div>
          
        </div>
        {{-- top section ends here --}}


        <div class="mt-8">
            <div>
                <h2 class="text-2xl  pb-2 text-blue-500">Company Summary</h2>
                <p class="text-gray-500 ">{{$lead->company_summary}}</p>
            </div>
        </div>
        {{-- compnay summary ends here --}}

        <div class="mt-8">
            <div>
                <div class="flex justify-between">
                    <div class="w-3/5">
                        <div class="flex justify-between">
                            <h2 class="text-2xl  pb-5 text-blue-500">Job Description</h2>
                    
                            <a href="{{$lead->listing_url}} " class="text-orange-500">View Listing <i class="ml-2 fa-solid fa-arrow-up-right-from-square"></i> </a>
                        </div>
                        <div class="bg-white shadow-md p-6 ">
                            <p>
                                <p class="whitespace-pre-line">
                                    {{$lead->job_description}}
                                </p>
                            </p>
                        </div>
                       
                    </div>

            {{-- JOB DESCRIPTION ENDS HERE --}}

                    <div class="w-4/12">
                        {{-- <div class="bg-white shadow-md rounded-md p-6  mt-80 mr-36"> --}}
                            <div class="pb-10">
                            <h2 class="text-3xl  pb-2">Contacts</h2>
                            <p class="text-gray-500  pb-2">You haven't added any contacts from this company</p>
                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300  font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-3">Add a contact</button>
                            </div>
                            <h2 class="text-3xl  pb-2">Documents</h2>
                            <p class="text-gray-500  pb-2">No documents assigned to this lead</p>
                            <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 flex items-center focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                                <i class="fa fa-file mr-2" aria-hidden="true"></i> Add a document
                             </button>
                        {{-- </div> --}}
                    </div>
                   
                </div>
            </div>

          
        </div>
     
    </div>
    <script>
        document.getElementById('states').addEventListener('change', function() {
            document.getElementById('statusForm').submit();
        });
    </script>
</x-app-layout>