<div>
    @section('title', 'Contact')
    <div class="main">
        <div class="text-center">
               <h3>If you're experiencing an immediate crisis, <br> please utilize resources below.</h3>
               <div class="flex  justify-center">
                   <div class="m-6">Suicide Prevention Hotline: <br> 800-273-8255</div>
                   <div class="m-6">Veterans Crisis Line: <br>
                   800-273-8255, Press 1</div>
                   <div class="m-6">Crisis Text Line: <br> Text HOME to 741741</div>
               </div>
               <br>
               <p>

                   <a class="btn" href="tel:+19102950500">Call Kardia Counseling & Consulting Now: (910) 295-0500</a>
               <br>
               </p>
               <p>Press 2</p>
           </div>


        </div>
     <div class="mt-8 p-13 bg-gray-400">
        <form wire:submit.prevent="save" class="w-full p-6" >
       <div class="flex flex-wrap -mx-3 mb-6">
         <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
             Full Name
           </label>
           <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" wire:model="name" type="text" placeholder="Full Name">

         </div>
         <div class="w-full md:w-1/2 px-3">
           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="subject">
             Subject
           </label>
           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model="subject" type="text" placeholder="Subject of Your Message">
         </div>
       </div>
       <div class="flex flex-wrap -mx-3 mb-6">
         <div class="w-1/2 px-3">
           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
             E-mail
           </label>
           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model="email" type="email">
           <p class="text-gray-600 text-xs italic">Please enter a valid email address (your email address will not be shared)</p>
         </div>
         <div class="w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
              Phone
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model="phone" type="text">
            <p class="text-gray-600 text-xs italic">Please enter a phone number (optional)</p>
          </div>
       </div>
       <div class="flex flex-wrap -mx-3 mb-6">
         <div class="w-full px-3">
           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
             Message
           </label>
           <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" wire:model="message"></textarea>
           <p class="text-gray-600 text-xs italic">Press Send After Your Message Is Complete. Thank You.</p>
         </div>
       </div>
       <div class="md:flex md:items-center">
         <div class="md:w-1/3">
           <button class="shadow bg-gray-800 hover:bg-gray-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
             Send
           </button>
         </div>

       </div>
     </form>



     <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.081993505288!2d-79.38600838549854!3d35.17950888031438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8854b4ac6620f801%3A0xac62b2ea4c30ad8f!2s780%20NW%20Broad%20St%2C%20Southern%20Pines%2C%20NC%2028387!5e0!3m2!1sen!2sus!4v1615932290614!5m2!1sen!2sus' width='800' height='600' style='border:0;' allowfullscreen='' loading='lazy'></iframe></div></div>
    </div>
</div>

