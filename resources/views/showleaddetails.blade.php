<x-app-layout class="flex justify-center items-center">
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight capitalize">
            details
        </h2>
    </x-slot>
    <div  class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <div >
            <h2 class="text-3xl  ">American Heritage Girls</h2>
            <h1 class="text-5xl font-extrabold mt-2">Application Developer</h1>
            <div class="flex flex-wrap items-center mt-4">
                <p class="text-gray-500">
                    <div>
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <a href="#" class="mr-4 ml-2 text-orange-500">American Heritage Girls Website</a>
                    </div>
                </p>
    
                <p class="text-gray-500  pr-5">
                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                        <span class=" ml-2">Remote</span> 
                    </div>
            
                </p>
    
                <p class="text-gray-500  pr-5">
                    <div>
                        <i class="fa fa-usd" aria-hidden="true"></i> 
                        <span class=" ml-2">$22-$24 an hour</span> 
        
                    </div>
                
                </p>
    
                <p class="text-gray-500  pr-5">
                    <div>
                        <i class="fa fa-briefcase" aria-hidden="true"></i> 
                        <span class=" ml-2">Full-Time</span> 

                    </div>
                   
                </p>
            </div>
        </div>
        {{-- top section ends here --}}


        <div class="mt-8">
            <div>
                <h2 class="text-2xl  pb-2">Company Summary</h2>
                <p class="text-gray-500 ">Add a quick summary about this company.</p>
            </div>
        </div>
        {{-- compnay summary ends here --}}

        <div class="mt-8">
            <div>
                <div class="flex justify-between">
                    <div class="w-3/5">
                        <div class="flex justify-between">
                            <h2 class="text-2xl  pb-5">Job Description</h2>
                    
                            <a href="" class="text-orange-500">View Listing <i class="ml-2 fa-solid fa-arrow-up-right-from-square"></i> </a>
                        </div>
                        <div class="bg-white shadow-md p-6 ">
                            <p class="mb-3 text-gray-700">Position title: Application Developer</p><br>
                            <p class="mb-3 text-gray-700">Department: IT Status: Full Time, Non-Exempt</p><br>
                            <p class="mb-3 text-gray-700">Location: Remote</p><br>
                            <p class="mb-3 text-gray-700">Reports to: Sr. Director of IT & Volunteer Services Works with: AHG Staff and Volunteers Pay</p><br>
                            <p class="mb-3 text-gray-700">Range: $22 - $24 per hour</p><br>
                            <p class="mb-3 text-gray-700">
                                Position Description:<br>
            
                                Exhibits a Christ-like servant leadership spirit while developing and maintaining all databases and websites in the environment. This role is the primary administrator for all development applications and projects.
            
                                Key Responsibilities and Objectives Domain monitoring, and Hosting
            
                                A. Manage GoDaddy and Hover accounts; purchase domains; renew domains B. Ensure site security; SSL Updates
            
                                Development, Architecture, Programming
            
                                C. Typical programming: HTML/PHP/CSS/JQUERY/MySQL D. Manage postgresql database E. Bootstrap Framework F. WordPress and other CMS updates G. General redesign and/or maintenance of current websites
            
                                Required Skills, Education, and Experience A. Passion for serving God in the AHG ministry. B. Agreement with AHG’s Statement of Faith; must exhibit and maintain a strong relationship with Christ and a positive faith attitude. C. Associates degree in information technology Bachelor’s degree or 0 – 2 years’ experience in information technology, computer science or related field. D. Strong analytical skills and methodical troubleshooting. E. Ability to communicate complex technical issues to non-technical individuals. F. Exceptional oral and written communication skills within a diverse office environment. G. Capacity to prioritize a variety of tasks and a heavy volume of work. H. Dexterity with learning new skills and staying current with rapidly changing technology. I. Ability to work independently and as a member of a team. J. Excellent analytical and problem-solving skills.
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
    {{-- <div class="flex max-w-7xl mx-auto">
        <div class="">
            <div>
                <br>
                <h2 class="text-3xl  ">American Heritage Girls</h2>
                <h1 class="text-5xl font-extrabold ">Application Developer</h1>
                <div class="flex flex-wrap items-center">
                    <p class="text-gray-500  pr-5">
                        <a href="#" class="mr-4">
                            <i class="fa fa-globe" aria-hidden="true"></i> American Heritage Girls Website
                        </a>
                    </p>

                    <p class="text-gray-500  pr-5">
                        <a href="#" class="mr-4">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Remote
                        </a>
                    </p>

                    <p class="text-gray-500  pr-5">
                        <a href="#" class="mr-4">
                            <i class="fa fa-usd" aria-hidden="true"></i> $22-$24 an hour
                        </a>
                    </p>

                    <p class="text-gray-500  pr-5">
                        <a href="#" class="mr-4">
                            <i class="fa fa-briefcase" aria-hidden="true"></i> Full-Time
                        </a>
                    </p>


                </div>
            </div>
            <br>
            <div>
                <h2 class="text-2xl  pb-2">Company Summary</h2>
                <p class="text-gray-500 ">Add a quick summary about this company.</p>
            </div>
            <br>
            <div>
                <h2 class="text-2xl  pb-2">Job Description</h2>
            </div>

            <div class="bg-white shadow-md rounded-md p-6">
                <p class="mb-3 text-gray-700">Position title: Application Developer</p><br>
                <p class="mb-3 text-gray-700">Department: IT Status: Full Time, Non-Exempt</p><br>
                <p class="mb-3 text-gray-700">Location: Remote</p><br>
                <p class="mb-3 text-gray-700">Reports to: Sr. Director of IT & Volunteer Services Works with: AHG Staff and Volunteers Pay</p><br>
                <p class="mb-3 text-gray-700">Range: $22 - $24 per hour</p><br>
                <p class="mb-3 text-gray-700">
                    Position Description:<br>

                    Exhibits a Christ-like servant leadership spirit while developing and maintaining all databases and websites in the environment. This role is the primary administrator for all development applications and projects.

                    Key Responsibilities and Objectives Domain monitoring, and Hosting

                    A. Manage GoDaddy and Hover accounts; purchase domains; renew domains B. Ensure site security; SSL Updates

                    Development, Architecture, Programming

                    C. Typical programming: HTML/PHP/CSS/JQUERY/MySQL D. Manage postgresql database E. Bootstrap Framework F. WordPress and other CMS updates G. General redesign and/or maintenance of current websites

                    Required Skills, Education, and Experience A. Passion for serving God in the AHG ministry. B. Agreement with AHG’s Statement of Faith; must exhibit and maintain a strong relationship with Christ and a positive faith attitude. C. Associates degree in information technology Bachelor’s degree or 0 – 2 years’ experience in information technology, computer science or related field. D. Strong analytical skills and methodical troubleshooting. E. Ability to communicate complex technical issues to non-technical individuals. F. Exceptional oral and written communication skills within a diverse office environment. G. Capacity to prioritize a variety of tasks and a heavy volume of work. H. Dexterity with learning new skills and staying current with rapidly changing technology. I. Ability to work independently and as a member of a team. J. Excellent analytical and problem-solving skills.
                </p>
            </div>
        </div>
        {{-- max-w-sm --}}
        {{-- <div class="bg-white shadow-md rounded-md p-6  mt-80 mr-36">
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
        </div> --}}
    {{-- </div>  --}}
</x-app-layout>