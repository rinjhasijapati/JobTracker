<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-lg text-gray-800 leading-tight">
         {{ __('Dashboard') }}
      </h2>
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