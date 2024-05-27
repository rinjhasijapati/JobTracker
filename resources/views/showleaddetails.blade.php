<x-app-layout class="flex justify-center items-center">
    @vite(['resources/css/showleaddetails.css'])
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
                    <div class="w-[55%]">
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
                     {{-- w-4/12 --}}
                    <div class="w-[40%]">
                        {{-- <div class="bg-white shadow-md rounded-md p-6  mt-80 mr-36"> --}}
                            <div class="pb-10">
                                <div class="flex justify-between">
                                    <h2 class="text-3xl  pb-2">Contacts</h2>
                                    {{-- <p class="text-gray-500  pb-2">You haven't added any contacts from this company</p> --}}
                                    
                                    <button id='show-form-btn' type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300  font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-3">Add a contact</button>
                                </div>
                           
                            <form method="post" action="{{route('contact.add',['jobId'=>$lead->id])}}"  class="bg-white p-5 rounded-r-md shadow-md mb-6"    
                                 @if ($errors->has('email'))
                                style="display: block;"
                                @else
                                    style="display: none;"
                                @endif 
                                id="add-form">
                                @csrf()
                                <div class="flex space-x-3 mb-3">
                                    <div class="input flex flex-col w-fit static">
                                        <label
                                          for="input"
                                          class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-white w-fit"
                                          >Contact Name</label
                                        >
                                        <input
                                          id="contact_name"
                                          type="text"
                                          placeholder="Name"
                                          name="contact_name"
                                          required
                                          class="border-blue-500 input px-[10px] py-[11px] text-xs bg-white border-2 rounded-[5px] w-[210px] focus:outline-none placeholder:text-black/25"
                                        />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                      </div>

    
                                      <div class="input flex flex-col w-fit static">
                                        <label
                                          for="input"
                                          class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-white w-fit"
                                          >Contact Email</label
                                        >
                                        <input
                                            id="contact_email"
                                          type="email"
                                          placeholder="Name"
                                          name="contact_email"
                                          required
                                          class="border-blue-500 input px-[10px] py-[11px] text-xs bg-white border-2 rounded-[5px] w-[210px] focus:outline-none placeholder:text-black/25"
                                        />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                      </div>

                                </div>
                         
                                <div class="flex space-x-3">
                                    <div class="input flex flex-col w-fit static">
                                        <label
                                          for="input"
                                          class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-white w-fit"
                                          >Job Title</label
                                        >
                                        <input
                                        id="job_title"
                                          type="text"
                                          placeholder="Job Title"
                                          name="job_title"
                                         
                                          class="border-blue-500 input px-[10px] py-[11px] text-xs bg-white border-2 rounded-[5px] w-[210px] focus:outline-none placeholder:text-black/25"
                                        />
                                      </div>
    
    
    
                                      <div class="input flex flex-col w-fit static">
                                        <label
                                          for="input"
                                          class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-white w-fit"
                                          >LinkedIn URL</label
                                        >
                                        <input
                                        id="linkedin_url"
                                          type="url"
                                          placeholder="LinkedIn URL"
                                      
                                          name="linkedin_url"
                                          required
                                          class="border-blue-500 input px-[10px] py-[11px] text-xs bg-white border-2 rounded-[5px] w-[210px] focus:outline-none placeholder:text-black/25"
                                        />
                                      </div>
                                </div>

                                <div class="flex justify-end pt-4">
                                    

                                      <button id="hide-form-button" class="cancel-button mr-3" type="button">
                                        Cancel
                                      </button>



                                      <button id="create-contact-button" class="create-button" type="submit">
                                        <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Create
                                        </span>
                                      </button>

                                      {{-- <button id="save-contact-button" style="display: none" class="create-button" type="button">
                                        <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Save
                                        </span>
                                      </button> --}}
                                </div>  
                                  
                            </form>

                            <form method="post" action="{{route('contact.edit',['jobId'=>$lead->id])}}"  class="bg-white p-5 rounded-r-md shadow-md mb-6"    
                                @if ($errors->has('edit'))
                               style="display: block;"
                               @else
                                   style="display: none;"
                               @endif 
                               id="edit-form">
                               @csrf()
                               <div class="flex space-x-3 mb-3">
                                   <div class="input flex flex-col w-fit static">
                                       <label
                                         for="input"
                                         class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-white w-fit"
                                         >Contact Name</label
                                       >
                                       <input
                                         id="contact_name"
                                         type="text"
                                         placeholder="Name"
                                         name="contact_name"
                                         required
                                         class="border-blue-500 input px-[10px] py-[11px] text-xs bg-white border-2 rounded-[5px] w-[210px] focus:outline-none placeholder:text-black/25"
                                       />
                                       <x-input-error :messages="$errors->get('edit')" class="mt-2" />

                                     </div>

   
                                     <div class="input flex flex-col w-fit static">
                                       <label
                                         for="input"
                                         class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-white w-fit"
                                         >Contact Email</label
                                       >
                                       <input
                                           id="contact_email"
                                         type="email"
                                         placeholder="Name"
                                         name="contact_email"
                                         required
                                         class="border-blue-500 input px-[10px] py-[11px] text-xs bg-white border-2 rounded-[5px] w-[210px] focus:outline-none placeholder:text-black/25"
                                       />
                                       <x-input-error :messages="$errors->get('edit')" class="mt-2" />

                                     </div>

                               </div>
                        
                               <div class="flex space-x-3">
                                   <div class="input flex flex-col w-fit static">
                                       <label
                                         for="input"
                                         class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-white w-fit"
                                         >Job Title</label
                                       >
                                       <input
                                       id="job_title"
                                         type="text"
                                         placeholder="Job Title"
                                         name="job_title"
                                        
                                         class="border-blue-500 input px-[10px] py-[11px] text-xs bg-white border-2 rounded-[5px] w-[210px] focus:outline-none placeholder:text-black/25"
                                       />
                                     </div>
   
   
   
                                     <div class="input flex flex-col w-fit static">
                                       <label
                                         for="input"
                                         class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-white w-fit"
                                         >LinkedIn URL</label
                                       >
                                       <input
                                       id="linkedin_url"
                                         type="url"
                                         placeholder="LinkedIn URL"
                                     
                                         name="linkedin_url"
                                         required
                                         class="border-blue-500 input px-[10px] py-[11px] text-xs bg-white border-2 rounded-[5px] w-[210px] focus:outline-none placeholder:text-black/25"
                                       />
                                     </div>
                               </div>

                               <div class="flex justify-end pt-4">
                                   

                                     <button id="hide-form-button" class="cancel-button mr-3" type="button">
                                       Cancel
                                     </button>



                                     <button id="create-contact-button" class="create-button" type="submit">
                                       <span>
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Update
                                       </span>
                                     </button>

                                     {{-- <button id="save-contact-button" style="display: none" class="create-button" type="button">
                                       <span>
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Save
                                       </span>
                                     </button> --}}
                               </div>  
                                 
                           </form>
                            

                            <div>
                               
                                @foreach ($contacts as $contact)
                                
                                <div id="contact-container" class="bg-white flex p-3 mt-4">
                                    <div class="bg-[#e5e7eb] flex items-center text-2xl p-4 rounded-full mr-3"><i class="fa-solid fa-user"></i></div>
                                    <div class="flex justify-between w-full">
                                        <div class="w-11/12">
                                            <div class="flex justify-between">
                                                <span id="name" >{{$contact->contact_name}}</span>
                                                <span id="job_title">CEO</span>
                                            </div>
                                            <div  class="flex justify-between" >
                                                <span id="contact_email" class="mr-4">{{$contact->contact_email}}</span>
                                                <a id="linkedin_url" class="text-orange-500" href="{{$contact->linkedin_url}}">LinkedIn profile</a>
                                             
                                            </div>
                                        </div>
                                        
                                        <x-dropdown align="right" width="48" contentClasses="py-1 bg-white">
                                            <!-- Trigger -->
                                            <x-slot name="trigger">
                                                <div class="cursor-pointer">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </div>
                                            </x-slot>
                                        
                                            <!-- Dropdown Content -->
                                            <x-slot name="content">
                                                <ul class="py-2 px-3">
                                                    <li>
                                                        <div id="edit-btn" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Edit</div>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('contact.delete',['id'=>$contact->id])}}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Delete</a>
                                                    </li>
                                                </ul>
                                            </x-slot>
                                            
                                        </x-dropdown>
                                    </div>
                
                                </div>
                                @endforeach
                               


                            
                            </div>
                          
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

        
        document.getElementById("show-form-btn").addEventListener("click", function () {
            document.getElementById("add-form").style.display = "inline-block";
            document.getElementById("edit-form").style.display = "none";
            document.getElementById("show-form-btn").style.display = "none";
        });

        document.querySelectorAll('#hide-form-button').forEach(btn => {
            btn.addEventListener('click', function() {
            let form = document.getElementById("add-form");
            document.getElementById("edit-form").style.display = "none";
            form.style.display = "none";
            form.querySelector('#contact_name').value="";
            form.querySelector('#contact_email').value="";
            form.querySelector('#job_title').value="";
            form.querySelector('#linkedin_url').value="";

            // document.getElementById("create-contact-button").style.display = 'inline-block';
            // document.getElementById("save-contact-button").style.display = 'none';

            document.getElementById("show-form-btn").style.display = "block";
            });
        });
        // document.getElementById("hide-form-button").addEventListener("click", () => {
        //     // document.getElementById("add-form").style.display = "none";
        //     // document.getElementById("show-form-btn").style.display = "block";

        //     let form = document.getElementById("add-form");
        //     document.getElementById("edit-form").style.display = "none";
        //     form.style.display = "none";
        //     form.querySelector('#contact_name').value="";
        //     form.querySelector('#contact_email').value="";
        //     form.querySelector('#job_title').value="";
        //     form.querySelector('#linkedin_url').value="";

        //     // document.getElementById("create-contact-button").style.display = 'inline-block';
        //     // document.getElementById("save-contact-button").style.display = 'none';

        //     document.getElementById("show-form-btn").style.display = "block";
        // });

        //get contact
        document.querySelectorAll('#edit-btn').forEach(btn => {
         btn.addEventListener('click', function() {
            document.getElementById("add-form").style.display = "none";
            // document.getElementById("create-contact-button").style.display = 'none';
            // document.getElementById("save-contact-button").style.display = 'inline-block';

        // Get the parent container of the clicked button
        const contactContainer = this.closest('#contact-container');

        // Extract data from the contact container
        const name = contactContainer.querySelector('#name').textContent;
        const jobTitle = contactContainer.querySelector('#job_title').textContent;
        const email = contactContainer.querySelector('#contact_email').textContent;
        const linkedinUrl = contactContainer.querySelector('#linkedin_url').href;

     
        let form = document.getElementById("edit-form");
        form.style.display = "inline-block";
        form.querySelector('#contact_name').value=name;
        form.querySelector('#contact_email').value=email;
        form.querySelector('#job_title').value=jobTitle;
        form.querySelector('#linkedin_url').value=linkedinUrl;

    });
});


//     document.getElementById('save-contact-button').addEventListener('click', function() {
//         // Assuming you have a route named 'contact.edit' for editing the form
//         // Replace 'jobId' with the appropriate parameter name for the job ID
//         var jobId = "{{ $lead->id }}"; // Get the job ID from the PHP variable
//         var editRoute = "{{ route('contact.edit', ['jobId' => 'jobIdPlaceholder']) }}";
//         editRoute = editRoute.replace('jobIdPlaceholder', jobId);

//         // Create a hidden form element to submit the form data with a POST request
//         var form = document.getElementById('add-form');
//         var hiddenForm = form.cloneNode(true);

//         hiddenForm.method = 'post';
//         hiddenForm.action = editRoute;
//         hiddenForm.style.display = 'none';
      
//         document.body.appendChild(hiddenForm);
//         console.log(hiddenForm);

       

// // Extract data from the contact container
//     const name = hiddenForm.querySelector('#contact_name').textContent;
//     const jobTitle = hiddenForm.querySelector('#job_title').textContent;
//     const email = hiddenForm.querySelector('#contact_email').textContent;
//     const linkedinUrl = hiddenForm.querySelector('#linkedin_url').href;

//     console.log(name,jobTitle,email,linkedinUrl);
//         // Submit the hidden form
//         // hiddenForm.submit();

//         // Remove the hidden form after submission
//         // hiddenForm.remove();
//     });



    </script>
</x-app-layout>