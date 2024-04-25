<x-app-layout class="flex justify-center items-center">
    @vite(['resources/css/showleaddetails.css'])
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight capitalize">
            details
        </h2>
    </x-slot>
    <div  class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <div >
            <div class="flex justify-between">
              <h2 class="text-3xl text-blue-400">{{$lead->company_name}}</h2>
              <a  href="{{route('lead.delete',['id'=>$lead->id])}}">
                <button id="lead-delete" class="lead-delete">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 69 14"
                    class="svgIcon bin-top"
                  >
                    <g clip-path="url(#clip0_35_24)">
                      <path
                        fill="black"
                        d="M20.8232 2.62734L19.9948 4.21304C19.8224 4.54309 19.4808 4.75 19.1085 4.75H4.92857C2.20246 4.75 0 6.87266 0 9.5C0 12.1273 2.20246 14.25 4.92857 14.25H64.0714C66.7975 14.25 69 12.1273 69 9.5C69 6.87266 66.7975 4.75 64.0714 4.75H49.8915C49.5192 4.75 49.1776 4.54309 49.0052 4.21305L48.1768 2.62734C47.3451 1.00938 45.6355 0 43.7719 0H25.2281C23.3645 0 21.6549 1.00938 20.8232 2.62734ZM64.0023 20.0648C64.0397 19.4882 63.5822 19 63.0044 19H5.99556C5.4178 19 4.96025 19.4882 4.99766 20.0648L8.19375 69.3203C8.44018 73.0758 11.6746 76 15.5712 76H53.4288C57.3254 76 60.5598 73.0758 60.8062 69.3203L64.0023 20.0648Z"
                      ></path>
                    </g>
                    <defs>
                      <clipPath id="clip0_35_24">
                        <rect fill="white" height="14" width="69"></rect>
                      </clipPath>
                    </defs>
                  </svg>
                
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 69 57"
                    class="svgIcon bin-bottom"
                  >
                    <g clip-path="url(#clip0_35_22)">
                      <path
                        fill="black"
                        d="M20.8232 -16.3727L19.9948 -14.787C19.8224 -14.4569 19.4808 -14.25 19.1085 -14.25H4.92857C2.20246 -14.25 0 -12.1273 0 -9.5C0 -6.8727 2.20246 -4.75 4.92857 -4.75H64.0714C66.7975 -4.75 69 -6.8727 69 -9.5C69 -12.1273 66.7975 -14.25 64.0714 -14.25H49.8915C49.5192 -14.25 49.1776 -14.4569 49.0052 -14.787L48.1768 -16.3727C47.3451 -17.9906 45.6355 -19 43.7719 -19H25.2281C23.3645 -19 21.6549 -17.9906 20.8232 -16.3727ZM64.0023 1.0648C64.0397 0.4882 63.5822 0 63.0044 0H5.99556C5.4178 0 4.96025 0.4882 4.99766 1.0648L8.19375 50.3203C8.44018 54.0758 11.6746 57 15.5712 57H53.4288C57.3254 57 60.5598 54.0758 60.8062 50.3203L64.0023 1.0648Z"
                      ></path>
                    </g>
                    <defs>
                      <clipPath id="clip0_35_22">
                        <rect fill="white" height="57" width="69"></rect>
                      </clipPath>
                    </defs>
                  </svg>
                </button>
              </a>
            
              
            </div>
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