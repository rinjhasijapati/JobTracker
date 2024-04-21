<x-app-layout>
   <x-slot name="header">
      <div class="flex justify-between">
         <h2 class="font-semibold text-lg text-gray-800 leading-tight">
            {{ __('Dashboard') }}
         </h2>
       
         <a href="{{route('displaycreatenewleadform')}}">
            <button class="cursor-pointer font-semibold overflow-hidden relative z-100 border border-green-500 group px-4 py-1 rounded-md">
               <span class="relative z-10 text-green-500 group-hover:text-white text-base duration-500">Create a new Lead</span>
               <span class="absolute w-full h-full bg-green-500 -left-24 top-0 -rotate-45 group-hover:rotate-0 group-hover:left-0 duration-500"></span>
               <span class="absolute w-full h-full bg-green-500 -right-24 top-0 -rotate-45 group-hover:rotate-0 group-hover:right-0 duration-500"></span>
             </button>
         </a>
       
      </div>
  
   </x-slot>

   <div class="pt-12">
               <div class="board">

                  <div class="lanes">
                     <div>
                        <div class="swim-lane" id="todo-lane">

                           <h3 class="heading">lead</h3>
                           @foreach ($leads as $lead)
                           <a href="{{route('lead.showdetails',['id' => $lead->id])}}" data-id="{{$lead->id}}" class="task" draggable="true">
                              <div >
                                 <h4 class="todo-head">{{$lead->company_name}}</h4>
                                 <p>{{$lead->job_title}}</p>
                              </div>
                           </a>
                        @endforeach
                        </div>
                        <div id="todo-form" class="flex justify-center bg-green-300 mt-4 rounded-md shadow-2xl" >
                           <button id="show-form-btn">Quick Add</button>
                           <form action="{{route('quicknewlead.add')}}" method="post" id="add-form" style="display: none;">
                             @csrf()
                              <div class="flex flex-col items-center">
                                 <input name="companyname" value="{{ old('companyname') }}" type="text" placeholder="Add a company name..." id="company-name-input" class="rounded-md p-3 outline-none " required/>
                                 <x-input-error :messages="$errors->get('companyname')" class="mt-2" />
                                  <input name="jobtitle" value="{{ old('jobtitle') }}" type="text" placeholder="Add a job" id="job-input"  class="rounded-md p-3 outline-none" required/>
                                 @error('jobtitle')
                                       <script>
                                          window.onload = function() {
                                             alert("{{$message}}");
                                          }
                                    </script>
                                 @enderror
                                    
                                  <div class="p-3">
                                 <button type="submit" >Add</button>
                                 <button type="button" id="hide-form-button">Cancel</button>
                               </div>

                              </div>
                           </form>
                       </div>
                     </div>
                

                     <div class="swim-lane">
                        <h3 class="heading">Application sent</h3>

                        @foreach ($applicationsSent as $applicationSent)
                        <a href="{{route('lead.showdetails',['id' => $applicationSent->id])}}" data-id="{{$applicationSent->id}}" class="task" draggable="true">
                           <div >
                              <h4 class="todo-head">{{$applicationSent->company_name}}</h4>
                              <p>{{$applicationSent->job_title}}</p>
                           </div>
                        </a>
                     @endforeach
                       
                     </div>

                     <div class="swim-lane">
                        <h3 class="heading">Interview set</h3>
                        @foreach ($interviewsSet as $interviewSet)
                        <a href="{{route('lead.showdetails',['id' => $interviewSet->id])}}" data-id="{{$interviewSet->id}}" class="task" draggable="true">
                           <div >
                              <h4 class="todo-head">{{$interviewSet->company_name}}</h4>
                              <p>{{$interviewSet->job_title}}</p>
                           </div>
                        </a>
                     @endforeach
                        
                     </div>

                     <div class="swim-lane">
                        <h3 class="heading">Offer Received</h3>

                        @foreach ($offersReceived as $offerReceived)
                        <a href="{{route('lead.showdetails',['id' => $offerReceived->id])}}" data-id="{{$offerReceived->id}}" class="task" draggable="true">
                           <div >
                              <h4 class="todo-head">{{$offerReceived->company_name}}</h4>
                              <p>{{$offerReceived->job_title}}</p>
                           </div>
                        </a>
                     @endforeach
                        
                     </div>


                     <div class="swim-lane">
                        <h3 class="heading">Closed</h3>

                        @foreach ($closedleads as $closedlead)
                        <a href="{{route('lead.showdetails',['id' => $closedlead->id])}}" data-id="{{$closedlead->id}}" class="task" draggable="true">
                           <div >
                              <h4 class="todo-head">{{$closedlead->company_name}}</h4>
                              <p>{{$closedlead->job_title}}</p>
                           </div>
                        </a>
                     @endforeach
                        
                     </div>

                  </div>

              
               </div>

             
      @vite(['resources/js/drag.js' ,'resources/css/dashboard.css'])
   </div>
</x-app-layout>