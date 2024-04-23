<x-app-layout>
    @vite(['resources/css/showstatus.css'])
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight capitalize">
            {{$status }}
        </h2>
    </x-slot>
   
    <div class="max-w-6xl m-auto mt-7 flex justify-between flex-wrap">

        @foreach ($leads as $lead)
            {{-- <h1>{{$lead->job_title}}</h1> --}}
            <div class="w-[48%] mb-10">
                <div class="bg-white p-5">
                    <div class="flex justify-between ">
                        <h3 class="text-xl bold"><span class="text-blue-500">{{$lead->job_title}}</span> <span class="text-[#718096]">at</span> <span>{{$lead->company_name}}</span></h3>
                        <a href="{{route('lead.showeditdetailsform',['id'=>$lead->id])}}">
                        <button class="Btn">Edit 
                            <svg class="svg" viewBox="0 0 512 512">
                              <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path></svg>
                          </button>
                        </a>
                      
                          
                          
                    </div>
            
                    <div class="flex mt-3">
                        <div class="w-[55%] h-24 mr-3 overflow-y-clip">
                           {{$lead->company_summary}}
                        </div>
                        <div class="w-2/5 h-24 overflow-y-clip"> 
                            <p class="flex justify-between"><span  class="text-[#718096]">location</span> <span>{{$lead->job_location}}</span></p>
                            <p class="flex justify-between"><span  class="text-[#718096]">Contract Type</span> <span>{{$lead->contract_type}}</span></p>
                            <p class="flex justify-between"><span  class="text-[#718096]">compensation</span> <span>{{$lead->compensation}}</span></p>
                        </div>
                    </div>
                </div>
           
    
                <div class="flex justify-between bg-[#f7fafc] p-5">
                    <div>1 Contact</div>
                    <div>0 documents</div>
                    <a href="{{route('lead.showdetails',['id' => $lead->id])}}">
                        <button class="cursor-pointer relative group overflow-hidden border-2 px-8 py-1 border-green-500">
                            <span class="font-bold text-white text-base relative z-10 group-hover:text-green-500 duration-500">View</span>
                            <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 group-hover:-translate-x-full h-full"></span>
                            <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 group-hover:translate-x-full h-full"></span>
                            
                              <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 delay-300 group-hover:-translate-y-full h-full"></span>
                            <span class="absolute delay-300 top-0 left-0 w-full bg-green-500 duration-500 group-hover:translate-y-full h-full"></span>
                          </button>
                    </a>
                    
    
                    
                </div>
            </div>
            
        @endforeach

        {{-- <h1>this is {{$status}}</h1> --}}
        {{-- <div class="w-[45%] mb-10">
            <div class="bg-white p-5">
                <div class="flex justify-between ">
                    <h3 class="text-xl bold"><span class="text-blue-500">Data entry</span> <span class="text-[#718096]">at</span> <span>NomadList</span></h3>
                    <button class="Btn">Edit 
                        <svg class="svg" viewBox="0 0 512 512">
                          <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path></svg>
                      </button>
                  
                      
                      
                </div>
        
                <div class="flex mt-3">
                    <div class="w-3/5 h-24 mr-3 overflow-y-clip">
                        The best places to live and work remotely for remote workers, based on cost of living, internet speed, weather and
                    </div>
                    <div class="w-2/5"> 
                        <p class="flex justify-between"><span  class="text-[#718096]">location</span> <span>Remote</span></p>
                        <p class="flex justify-between"><span  class="text-[#718096]">Contract Type</span> <span>Full time</span></p>
                        <p class="flex justify-between"><span  class="text-[#718096]">compensation</span> <span>$90/hr</span></p>
                    </div>
                </div>
            </div>
       

            <div class="flex justify-between bg-[#f7fafc] p-5">
                <div>1 Contact</div>
                <div>0 documents</div>
                <button class="cursor-pointer relative group overflow-hidden border-2 px-8 py-1 border-green-500">
                    <span class="font-bold text-white text-base relative z-10 group-hover:text-green-500 duration-500">View</span>
                    <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 group-hover:-translate-x-full h-full"></span>
                    <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 group-hover:translate-x-full h-full"></span>
                    
                      <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 delay-300 group-hover:-translate-y-full h-full"></span>
                    <span class="absolute delay-300 top-0 left-0 w-full bg-green-500 duration-500 group-hover:translate-y-full h-full"></span>
                  </button>

                
            </div>
        </div>


        <div class="w-[45%] mb-10">
            <div class="bg-white p-5">
                <div class="flex justify-between ">
                    <h3 class="text-xl bold"><span class="text-blue-500">Data entry</span> <span class="text-[#718096]">at</span> <span>NomadList</span></h3>
                    <button class="Btn">Edit 
                        <svg class="svg" viewBox="0 0 512 512">
                          <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path></svg>
                      </button>
                  
                      
                      
                </div>
        
                <div class="flex mt-3">
                    <div class="w-3/5 h-24 mr-3 overflow-y-clip">
                        The best places to live and work remotely for remote workers, based on cost of living, internet speed, weather and
                    </div>
                    <div class="w-2/5"> 
                        <p class="flex justify-between"><span  class="text-[#718096]">location</span> <span>Remote</span></p>
                        <p class="flex justify-between"><span  class="text-[#718096]">Contract Type</span> <span>Full time</span></p>
                        <p class="flex justify-between"><span  class="text-[#718096]">compensation</span> <span>$90/hr</span></p>
                    </div>
                </div>
            </div>
       

            <div class="flex justify-between bg-[#f7fafc] p-5">
                <div>1 Contact</div>
                <div>0 documents</div>
                <button class="cursor-pointer relative group overflow-hidden border-2 px-8 py-1 border-green-500">
                    <span class="font-bold text-white text-base relative z-10 group-hover:text-green-500 duration-500">View</span>
                    <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 group-hover:-translate-x-full h-full"></span>
                    <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 group-hover:translate-x-full h-full"></span>
                    
                      <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 delay-300 group-hover:-translate-y-full h-full"></span>
                    <span class="absolute delay-300 top-0 left-0 w-full bg-green-500 duration-500 group-hover:translate-y-full h-full"></span>
                  </button>

                
            </div>
        </div>





        <div class="w-[45%] mb-10">
            <div class="bg-white p-5">
                <div class="flex justify-between ">
                    <h3 class="text-xl bold"><span class="text-blue-500">Data entry</span> <span class="text-[#718096]">at</span> <span>NomadList</span></h3>
                    <button class="Btn">Edit 
                        <svg class="svg" viewBox="0 0 512 512">
                          <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path></svg>
                      </button>
                  
                      
                      
                </div>
        
                <div class="flex mt-3">
                    <div class="w-3/5 h-24 mr-3 overflow-y-clip">
                        The best places to live and work remotely for remote workers, based on cost of living, internet speed, weather and
                    </div>
                    <div class="w-2/5"> 
                        <p class="flex justify-between"><span  class="text-[#718096]">location</span> <span>Remote</span></p>
                        <p class="flex justify-between"><span  class="text-[#718096]">Contract Type</span> <span>Full time</span></p>
                        <p class="flex justify-between"><span  class="text-[#718096]">compensation</span> <span>$90/hr</span></p>
                    </div>
                </div>
            </div>
       

            <div class="flex justify-between bg-[#f7fafc] p-5">
                <div>1 Contact</div>
                <div>0 documents</div>
                <button class="cursor-pointer relative group overflow-hidden border-2 px-8 py-1 border-green-500">
                    <span class="font-bold text-white text-base relative z-10 group-hover:text-green-500 duration-500">View</span>
                    <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 group-hover:-translate-x-full h-full"></span>
                    <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 group-hover:translate-x-full h-full"></span>
                    
                      <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 delay-300 group-hover:-translate-y-full h-full"></span>
                    <span class="absolute delay-300 top-0 left-0 w-full bg-green-500 duration-500 group-hover:translate-y-full h-full"></span>
                  </button>

                
            </div>
        </div>

      

        <div class="w-[45%] mb-10">
            <div class="bg-white p-5">
                <div class="flex justify-between ">
                    <h3 class="text-xl bold"><span class="text-blue-500">Data entry</span> <span class="text-[#718096]">at</span> <span>NomadList</span></h3>
                    <button class="Btn">Edit 
                        <svg class="svg" viewBox="0 0 512 512">
                          <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path></svg>
                      </button>
                  
                      
                      
                </div>
        
                <div class="flex mt-3">
                    <div class="w-3/5 h-24 mr-3 overflow-y-clip">
                        The best places to live and work remotely for remote workers, based on cost of living, internet speed, weather and
                    </div>
                    <div class="w-2/5"> 
                        <p class="flex justify-between"><span  class="text-[#718096]">location</span> <span>Remote</span></p>
                        <p class="flex justify-between"><span  class="text-[#718096]">Contract Type</span> <span>Full time</span></p>
                        <p class="flex justify-between"><span  class="text-[#718096]">compensation</span> <span>$90/hr</span></p>
                    </div>
                </div>
            </div>
       

            <div class="flex justify-between bg-[#f7fafc] p-5">
                <div>1 Contact</div>
                <div>0 documents</div>
                <button class="cursor-pointer relative group overflow-hidden border-2 px-8 py-1 border-green-500">
                    <span class="font-bold text-white text-base relative z-10 group-hover:text-green-500 duration-500">View</span>
                    <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 group-hover:-translate-x-full h-full"></span>
                    <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 group-hover:translate-x-full h-full"></span>
                    
                      <span class="absolute top-0 left-0 w-full bg-green-500 duration-500 delay-300 group-hover:-translate-y-full h-full"></span>
                    <span class="absolute delay-300 top-0 left-0 w-full bg-green-500 duration-500 group-hover:translate-y-full h-full"></span>
                  </button>

                
            </div>
        </div> --}}

      
       
    </div>
</x-app-layout>
