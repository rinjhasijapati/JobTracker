<x-app-layout>
   <x-slot name="header">
      <div class="flex justify-between">
         <h2 class="font-semibold text-lg text-gray-800 leading-tight">
            {{ __('Dashboard') }}
         </h2>
         <a href="{{route('displaycreatenewleadform')}}">
            <button class="cursor-pointer font-semibold overflow-hidden relative z-100 border border-green-500 group px-8 py-1">
               <span class="relative z-10 text-green-500 group-hover:text-white text-xl duration-500">Create a new Lead</span>
               <span class="absolute w-full h-full bg-green-500 -left-32 top-0 -rotate-45 group-hover:rotate-0 group-hover:left-0 duration-500"></span>
               <span class="absolute w-full h-full bg-green-500 -right-32 top-0 -rotate-45 group-hover:rotate-0 group-hover:right-0 duration-500"></span>
             </button>
         </a>
       
      </div>
  
   </x-slot>

   <div class="pt-12">
               <div class="board">

                  <div class="lanes">
                     <div>
                        <div class="swim-lane" id="todo-lane">
                           <h3 class="heading">leads</h3>
   
                           <div class="task" draggable="true">
   
                              <h4 class="todo-head">American heritage girls</h4>
                              <p>Application Developer</p>
                           </div>
                           <div class="task" draggable="true">
   
                              <h4 class="todo-head">Chill piper</h4>
                              <p>Fornt end engineer</p>
                           </div>
                           <div class="task" draggable="true">
   
                              <h4 class="todo-head">pied piper</h4>
                              <p>intern</p>
                           </div>
                           <div class="task" draggable="true">
   
                              <h4 class="todo-head">pied piper</h4>
                              <p>intern</p>
                           </div>
                           <div class="task" draggable="true">
   
                              <h4 class="todo-head">pied piper</h4>
                              <p>intern</p>
                           </div>
   
                           
                        </div>
                        <div id="todo-form" class="flex justify-center bg-green-300 mt-4 rounded-md shadow-2xl" >
                           <button id="show-form-btn">Quick Add</button>
                           <form id="add-form" style="display: none;">
                              <div class="flex flex-col items-center">
                                 <input type="text" placeholder="Add a company name..." id="company-name-input" class="rounded-md p-3 outline-none "/>
                                  <input type="text" placeholder="Add a job" id="job-input"  class="rounded-md p-3 outline-none "/>
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

                        <div class="task" draggable="true">

                           <h4 class="todo-head">NomadList</h4>
                           <p>Data entry</p>
                        </div>
                       
                     </div>

                     <div class="swim-lane">
                        <h3 class="heading">Interview set</h3>

                        <div class="task" draggable="true">

                           <h4 class="todo-head">Veeva system</h4>
                           <p>Full stack web Developer</p>
                        </div>
                        <div class="task" draggable="true">

                           <h4 class="todo-head">Ghost</h4>
                           <p>Front end Developer</p>
                        </div>
                        
                     </div>

                     <div class="swim-lane">
                        <h3 class="heading">Interview set</h3>

                        <div class="task" draggable="true">

                           <h4 class="todo-head">Veeva system</h4>
                           <p>Full stack web Developer</p>
                        </div>
                        <div class="task" draggable="true">

                           <h4 class="todo-head">Ghost</h4>
                           <p>Front end Developer</p>
                        </div>
                        
                     </div>


                     <div class="swim-lane">
                        <h3 class="heading">Interview set</h3>

                        <div class="task" draggable="true">

                           <h4 class="todo-head">Veeva system</h4>
                           <p>Full stack web Developer</p>
                        </div>
                        <div class="task" draggable="true">

                           <h4 class="todo-head">Ghost</h4>
                           <p>Front end Developer</p>
                        </div>
                        
                     </div>

                  </div>
               </div>
      @vite(['resources/js/drag.js' ,'resources/css/dashboard.css'])
   </div>
</x-app-layout>