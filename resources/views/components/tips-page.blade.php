<section id="tips" aria-labelledby="tips-title" class="mt-8">
    <h2 class="sr-only" id="tips-title">SMART Tips</h2>
    <div class="overflow-hidden rounded-lg bg-white shadow mb-8">
      <div class="p-6">
        <h3 class="text-lg font-medium">SMART Tips for Flood Survival</h3>
        <p>Click on each letter to learn more about flood survival tips.</p>
  
        {{-- <!-- Expand and Collapse Buttons -->
        <div class="flex justify-between mb-4">
          <button onclick="expandAll()" class="bg-indigo-500 text-white px-4 py-2 rounded-lg">Expand All</button>
          <button onclick="collapseAll()" class="bg-indigo-500 text-white px-4 py-2 rounded-lg">Collapse All</button>
        </div> --}}
  
        <!-- Buttons for SMART -->
        <div class="flex flex-wrap gap-2 justify-center mt-4">
            <!-- Button for S -->
            <button onclick="toggleTip('tip-s')" class="bg-indigo-500 text-white text-sm sm:text-base lg:text-lg px-2 sm:px-4 py-1 sm:py-2 rounded-lg">S</button>
            <button onclick="toggleTip('tip-m')" class="bg-indigo-500 text-white text-sm sm:text-base lg:text-lg px-2 sm:px-4 py-1 sm:py-2 rounded-lg">M</button>
            <button onclick="toggleTip('tip-a')" class="bg-indigo-500 text-white text-sm sm:text-base lg:text-lg px-2 sm:px-4 py-1 sm:py-2 rounded-lg">A</button>
            <button onclick="toggleTip('tip-r')" class="bg-indigo-500 text-white text-sm sm:text-base lg:text-lg px-2 sm:px-4 py-1 sm:py-2 rounded-lg">R</button>
            <button onclick="toggleTip('tip-t')" class="bg-indigo-500 text-white text-sm sm:text-base lg:text-lg px-2 sm:px-4 py-1 sm:py-2 rounded-lg">T</button>
            <!-- Button for Close (X) -->
            <button onclick="collapseAll()" class="bg-red-500 text-black text-sm sm:text-base lg:text-lg px-2 sm:px-4 py-1 sm:py-2 rounded-lg">X</button>
        </div>
        
  
        <!-- Tip Content for S -->
        <div id="tip-s" class="mt-4 hidden">
          <h4 class="font-bold">S - Stay Informed</h4>
          <p>Monitor weather reports and flood alerts in your area. Sign up for emergency notifications and have a battery-powered radio for updates during power outages.</p>
        </div>
  
        <!-- Tip Content for M -->
        <div id="tip-m" class="mt-4 hidden">
          <h4 class="font-bold">M - Move to Higher Ground</h4>
          <p>If floodwaters begin to rise, quickly move to higher ground. Avoid walking or driving through floodwaters, as just six inches of water can sweep you off your feet.</p>
        </div>
  
        <!-- Tip Content for A -->
        <div id="tip-a" class="mt-4 hidden">
          <h4 class="font-bold">A - Assemble an Emergency Kit</h4>
          <p>Prepare a flood emergency kit with essentials like water, non-perishable food, a flashlight, batteries, first-aid supplies, and important documents in a waterproof container.</p>
        </div>
  
        <!-- Tip Content for R -->
        <div id="tip-r" class="mt-4 hidden">
          <h4 class="font-bold">R - Respond Immediately</h4>
          <p>Follow evacuation orders without delay. If told to evacuate, do so immediately to avoid getting trapped by rising floodwaters.</p>
        </div>
  
        <!-- Tip Content for T -->
        <div id="tip-t" class="mt-4 hidden">
          <h4 class="font-bold">T - Turn Off Utilities</h4>
          <p>Before leaving your home, turn off utilities such as electricity, gas, and water to prevent accidents. Unplug electrical appliances to avoid damage from power surges.</p>
        </div>

        <!-- Case Studies -->
        <div id="case-studies" aria-labelledby="case-studies-title" class="mt-8">
            <h2 class="text-lg font-medium mb-4">Real-Life Case Studies</h2>
            <div class="overflow-hidden rounded-lg bg-white shadow-md shadow-slate-500 mb-8 p-6">
              <!-- Case Study 1 -->
              <div class="case-study mb-6">
                <h3 class="text-md font-bold text-indigo-300">Case Study 1: The Jakarta Flood</h3>
                <p>In 2020, during the Jakarta flood, many residents successfully evacuated and reduced property damage by following preparedness tips. One family, in particular, credited their emergency kit and weather alerts for saving their lives.</p>
              </div>
          
              <!-- Case Study 2 -->
              <div class="case-study mb-6">
                <h3 class="text-md font-bold text-indigo-300">Case Study 2: Bangkok’s Flood Defense</h3>
                <p>In 2011, when Bangkok was hit by severe flooding, several communities survived by using sandbags, relocating to higher grounds, and turning off utilities. These simple actions helped prevent greater devastation.</p>
              </div>
            </div>
        </div>

        <!-- Flood Preparedness Video -->
        <div id="video" aria-labelledby="video-title" class="mt-8">
          <h2 class="text-lg font-medium mb-4">Flood Preparedness Video</h2>
          <div class="overflow-hidden rounded-lg bg-white shadow mb-8 p-6">
              <div class="video-container">
                  <iframe class="w-full h-50dvh" 
                          src="https://www.youtube.com/embed/pi_nUPcQz_A" 
                          title="Flood Preparedness" 
                          frameborder="0" 
                          allowfullscreen>
                  </iframe>
              </div>
          </div>
      </div>
      </div>
    </div>
  </section>
  
  <script>
    function toggleTip(tipId) {
    document.querySelectorAll('#tips div[id^="tip-"]').forEach(function(el) {
        el.classList.add('hidden');
    });
    document.getElementById(tipId).classList.remove('hidden');
    }
    function collapseAll() {
    const tipItems = document.querySelectorAll('#tips div[id^="tip-"]');
    tipItems.forEach(item => item.classList.add('hidden'));
    }
  </script>
  