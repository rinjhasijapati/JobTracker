<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-lg text-gray-800 leading-tight">
         {{ __('Dashboard') }}
      </h2>
   </x-slot>

   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

               <div class="board">

                  <div class="lanes">
                     <div class="swim-lane" id="todo-lane">
                        <h3 class="heading">ToDo</h3>
                        <form id="todo-form">
                           <input type="text" placeholder="Add a task..." id="todo-input" />
                           <button type="submit">Add +</button>
                        </form>
                        <div class="task" draggable="true">

                           <h4 class="todo-head">fsdfsdf1</h4>
                           <p>fsdfsd</p>
                        </div>
                        <div class="task" draggable="true">

                           <h4 class="todo-head">fsdfsdf2</h4>
                           <p>fsdfsd</p>
                        </div>
                        <div class="task" draggable="true">

                           <h4 class="todo-head">fsdfsdf3</h4>
                           <p>fsdfsd</p>
                        </div>

                     </div>

                     <div class="swim-lane">
                        <h3 class="heading">In Progress</h3>

                        <div class="task" draggable="true">

                           <h4 class="todo-head">fsdfsdf</h4>
                           <p>fsdfsd</p>
                        </div>
                        <div class="task" draggable="true">

                           <h4 class="todo-head">fsdfsdf</h4>
                           <p>fsdfsd</p>
                        </div>
                        <div class="task" draggable="true">

                           <h4 class="todo-head">fsdfsdf</h4>
                           <p>fsdfsd</p>
                        </div>
                     </div>

                     <div class="swim-lane">
                        <h3 class="heading">Done!</h3>

                        <div class="task" draggable="true">

                           <h4 class="todo-head">fsdfsdf</h4>
                           <p>fsdfsd</p>
                        </div>
                        <div class="task" draggable="true">

                           <h4 class="todo-head">fsdfsdf</h4>
                           <p>fsdfsd</p>
                        </div>
                        <div class="task" draggable="true">

                           <h4 class="todo-head">fsdfsdf</h4>
                           <p>fsdfsd</p>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</x-app-layout>