<section id="information" aria-labelledby="information-title" class="mt-8">
    <h2 class="sr-only" id="information-title">Information</h2>
    <div class="overflow-hidden rounded-lg bg-white shadow mb-8">
        <div class="p-6">
            <h3 class="text-lg font-medium">Information</h3>
            <p>
                Flooding is one of the most destructive natural disasters, impacting millions of lives every year. Understanding the risks associated with floods can help you better prepare and respond to these events. Here's why floods pose such a significant danger:
            </p>

            <!-- Information Grid-->
            <div class="grid grid-cols-5 gap-4">
                <!-- Information Grid 1 -->
                <div class="info-section mt-4" aria-labelledby="danger-1">
                    <div onclick="openModel('model-1')" class="bg-slate-200 h-full cursor-pointer overflow-hidden rounded-lg shadow-md shadow-slate-500 flex flex-col" role="button" aria-expanded="false" aria-controls="model-1">
                        <div class="p-3 flex flex-col items-center h-full">
                            <h2 class="text-base font-semibold text-indigo-500">Physical Hazard</h2>
                        </div>
                    </div>
                </div>

                <!-- Information Grid 2 -->
                <div class="info-section mt-4" aria-labelledby="danger-2">
                    <div onclick="openModel('model-2')" class="bg-slate-200 h-full cursor-pointer overflow-hidden rounded-lg shadow-md shadow-slate-500 flex flex-col" role="button" aria-expanded="false" aria-controls="model-2">
                        <div class="p-3 flex flex-col items-center h-full">
                            <h2 class="text-base font-semibold text-indigo-500">Health Risks</h2>
                        </div>
                    </div>
                </div>

                <!-- Information Grid 3 -->
                <div class="info-section mt-4" aria-labelledby="danger-3">
                    <div onclick="openModel('model-3')" class="bg-slate-200 h-full cursor-pointer overflow-hidden rounded-lg shadow-md shadow-slate-500 flex flex-col" role="button" aria-expanded="false" aria-controls="model-3">
                        <div class="p-3 flex flex-col items-center h-full">
                            <h2 class="text-base font-semibold text-indigo-500">Property Damage</h2>
                        </div>
                    </div>
                </div>

                <!-- Information Grid 4 -->
                <div class="info-section mt-4" aria-labelledby="danger-4">
                    <div onclick="openModel('model-4')" class="bg-slate-200 h-full cursor-pointer overflow-hidden rounded-lg shadow-md shadow-slate-500 flex flex-col" role="button" aria-expanded="false" aria-controls="model-4">
                        <div class="p-3 flex flex-col items-center h-full">
                            <h2 class="text-base font-semibold text-indigo-500">Economic Impact</h2>
                        </div>
                    </div>
                </div>

                <!-- Information Grid 5 -->
                <div class="info-section mt-4" aria-labelledby="danger-5">
                    <div onclick="openModel('model-5')" class="bg-slate-200 h-full cursor-pointer overflow-hidden rounded-lg shadow-md shadow-slate-500 flex flex-col" role="button" aria-expanded="false" aria-controls="model-5">
                        <div class="p-3 flex flex-col items-center h-full">
                            <h2 class="text-base font-semibold text-indigo-500">Environmental Impact</h2>
                        </div>
                    </div>
                </div>
            </div>
            <p class="mt-4 text-sm text-gray-500">* Click on each section to learn more about the dangers of flooding.</p>

            <!-- Emergency Contacts Section -->
            <div class="mt-6">
                <h3 class="text-lg font-medium">Emergency Contacts</h3>
                <ul class="list-disc list-inside mt-2">
                    <li>Local Emergency Number: <strong>112</strong></li>
                    <li>Fire Department: <strong>113</strong></li>
                    <li>Police Department: <strong>110</strong></li>
                    <li>Disaster Management Agency: <strong>123</strong></li>
                    <li>Nearest Evacuation Center: <strong>City Hall</strong></li>
                </ul>
            </div>

            <!-- Myths vs Facts Section -->
            <div class="mt-6">
                <h3 class="text-lg font-medium">Flood Myths and Facts Game</h3>
                <div id="quiz" class="mt-4 text-center">
                    <p id="quiz-question" class="text-lg mb-4"></p>
                    <div class="flex justify-center">
                        <button onclick="submitAnswer(true)" class="mr-2 bg-green-500 text-white px-4 py-2 rounded-lg">Fact</button>
                        <button onclick="submitAnswer(false)" class="ml-2 bg-red-500 text-white px-4 py-2 rounded-lg">Myth</button>
                    </div>
                </div>
            </div>
            
            <!-- Popup for Quiz Feedback -->
            <div id="quiz-feedback" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex justify-center items-center">
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-md">
                    <h2 class="text-lg font-bold mb-4" id="feedback-title"></h2>
                    <p id="feedback-question" class="font-bold mt-2"></p> <br> <!-- Display the question again -->
                    <p id="feedback-message"></p>
                    <button onclick="closeQuiz()" class="mt-4 bg-indigo-500 text-white px-4 py-2 rounded-lg">Next</button>
                </div>
            </div>

            <!-- FAQs Section -->
            <div class="mt-6">
                <h3 class="text-lg font-medium">Frequently Asked Questions (FAQs)</h3>
                <div class="mt-4">
                    <div class="faq-item border border-gray-300 rounded-lg p-4 mb-2">
                        <div class="flex items-center cursor-pointer" onclick="toggleFAQ(this)">
                            <span class="faq-arrow text-gray-700 mr-2">&#x25BC;</span>
                            <h4 class="font-semibold">1. What should I do before a flood?</h4>
                        </div>
                        <p class="text-gray-700 hidden transition-all duration-500 ease-in-out mt-2">Make a flood emergency kit with essentials like food, water, medications, and important documents. Plan your evacuation route and stay informed about weather alerts.</p>
                    </div>
                    <div class="faq-item border border-gray-300 rounded-lg p-4 mb-2">
                        <div class="flex items-center cursor-pointer" onclick="toggleFAQ(this)">
                            <span class="faq-arrow text-gray-700 mr-2">&#x25BC;</span>
                            <h4 class="font-semibold">2. How can I stay safe during a flood?</h4>
                        </div>
                        <p class="text-gray-700 hidden transition-all duration-500 ease-in-out mt-2">Stay indoors and avoid floodwaters. If instructed to evacuate, do so immediately. Do not drive through flooded areas.</p>
                    </div>
                    <div class="faq-item border border-gray-300 rounded-lg p-4 mb-2">
                        <div class="flex items-center cursor-pointer" onclick="toggleFAQ(this)">
                            <span class="faq-arrow text-gray-700 mr-2">&#x25BC;</span>
                            <h4 class="font-semibold">3. How do I clean up after a flood?</h4>
                        </div>
                        <p class="text-gray-700 hidden transition-all duration-500 ease-in-out mt-2">Wear protective gear and avoid contact with contaminated water. Remove water-damaged materials and allow the area to dry completely to prevent mold growth.</p>
                    </div>
                    <div class="faq-item border border-gray-300 rounded-lg p-4 mb-2">
                        <div class="flex items-center cursor-pointer" onclick="toggleFAQ(this)">
                            <span class="faq-arrow text-gray-700 mr-2">&#x25BC;</span>
                            <h4 class="font-semibold">4. How can I prevent flooding in my home?</h4>
                        </div>
                        <p class="text-gray-700 hidden transition-all duration-500 ease-in-out mt-2">Ensure gutters and downspouts are clear. Use sandbags in flood-prone areas and consider installing a sump pump.</p>
                    </div>
                    <div class="faq-item border border-gray-300 rounded-lg p-4 mb-2">
                        <div class="flex items-center cursor-pointer" onclick="toggleFAQ(this)">
                            <span class="faq-arrow text-gray-700 mr-2">&#x25BC;</span>
                            <h4 class="font-semibold">5. What is a flood watch vs. a flood warning?</h4>
                        </div>
                        <p class="text-gray-700 hidden transition-all duration-500 ease-in-out mt-2">A flood watch means flooding is possible, while a flood warning means flooding is occurring or will occur soon. Take necessary precautions during a warning.</p>
                    </div>
                    <div class="faq-item border border-gray-300 rounded-lg p-4 mb-2">
                        <div class="flex items-center cursor-pointer" onclick="toggleFAQ(this)">
                            <span class="faq-arrow text-gray-700 mr-2">&#x25BC;</span>
                            <h4 class="font-semibold">6. How do I prepare my pets for a flood?</h4>
                        </div>
                        <p class="text-gray-700 hidden transition-all duration-500 ease-in-out mt-2">Ensure you have a pet emergency kit ready, including food, water, medications, and identification. Identify safe locations to take your pets if you need to evacuate.</p>
                    </div>
                    <div class="faq-item border border-gray-300 rounded-lg p-4 mb-2">
                        <div class="flex items-center cursor-pointer" onclick="toggleFAQ(this)">
                            <span class="faq-arrow text-gray-700 mr-2">&#x25BC;</span>
                            <h4 class="font-semibold">7. What should I do if I am trapped in a flood?</h4>
                        </div>
                        <p class="text-gray-700 hidden transition-all duration-500 ease-in-out mt-2">Move to the highest level of your home and call emergency services. Avoid rising waters and stay put until help arrives.</p>
                    </div>
                    <div class="faq-item border border-gray-300 rounded-lg p-4 mb-2">
                        <div class="flex items-center cursor-pointer" onclick="toggleFAQ(this)">
                            <span class="faq-arrow text-gray-700 mr-2">&#x25BC;</span>
                            <h4 class="font-semibold">8. How can I get flood insurance?</h4>
                        </div>
                        <p class="text-gray-700 hidden transition-all duration-500 ease-in-out mt-2">Contact your insurance provider to discuss flood insurance options. You can also visit the National Flood Insurance Program (NFIP) website for more information.</p>
                    </div>
                    <div class="faq-item border border-gray-300 rounded-lg p-4 mb-2">
                        <div class="flex items-center cursor-pointer" onclick="toggleFAQ(this)">
                            <span class="faq-arrow text-gray-700 mr-2">&#x25BC;</span>
                            <h4 class="font-semibold">9. What are some common flood myths?</h4>
                        </div>
                        <p class="text-gray-700 hidden transition-all duration-500 ease-in-out mt-2">Some common myths include: "My home is not in a flood zone, so I'm safe" and "Floods only happen in the rainy season." Always be prepared regardless of your zone.</p>
                    </div>
                    <div class="faq-item border border-gray-300 rounded-lg p-4 mb-2">
                        <div class="flex items-center cursor-pointer" onclick="toggleFAQ(this)">
                            <span class="faq-arrow text-gray-700 mr-2">&#x25BC;</span>
                            <h4 class="font-semibold">10. How can I stay informed about flood alerts?</h4>
                        </div>
                        <p class="text-gray-700 hidden transition-all duration-500 ease-in-out mt-2">Sign up for local weather alerts, follow your local emergency management agency on social media, and use weather apps for real-time updates.</p>
                    </div>
                </div>
            </div>


            <!-- Models -->
            <div id="model-1" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex justify-center items-center">
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-md">
                    <h2 class="text-lg font-bold mb-4">Physical Hazard</h2>
                    <p>Floodwaters can cause severe injuries or death. Rapid water currents can knock people off their feet, carry vehicles away, and sweep entire homes. Even shallow water can become dangerous if it moves quickly enough.</p>
                    <button onclick="closeModel('model-1')" class="mt-4 bg-indigo-500 text-white px-4 py-2 rounded-lg">Close</button>
                </div>
            </div>

            <div id="model-2" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex justify-center items-center">
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-md">
                    <h2 class="text-lg font-bold mb-4">Health Risks</h2>
                    <p>Floods contaminate water supplies, leading to the spread of waterborne diseases like cholera, typhoid, and hepatitis A. Standing floodwater also becomes a breeding ground for mosquitoes, increasing the risk of diseases such as malaria and dengue fever.</p>
                    <button onclick="closeModel('model-2')" class="mt-4 bg-indigo-500 text-white px-4 py-2 rounded-lg">Close</button>
                </div>
            </div>

            <div id="model-3" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex justify-center items-center">
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-md">
                    <h2 class="text-lg font-bold mb-4">Property Damage</h2>
                    <p>Floods can cause widespread destruction to homes, buildings, infrastructure, and crops. The damage caused by water can be extremely costly to repair, and for many, recovery may take months or even years.</p>
                    <button onclick="closeModel('model-3')" class="mt-4 bg-indigo-500 text-white px-4 py-2 rounded-lg">Close</button>
                </div>
            </div>

            <div id="model-4" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex justify-center items-center">
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-md">
                    <h2 class="text-lg font-bold mb-4">Economic Impact</h2>
                    <p>Flooding disrupts the economy by impacting businesses and agriculture. The costs can include lost productivity, increased insurance claims, and government aid, which can strain local and national resources.</p>
                    <button onclick="closeModel('model-4')" class="mt-4 bg-indigo-500 text-white px-4 py-2 rounded-lg">Close</button>
                </div>
            </div>

            <div id="model-5" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex justify-center items-center">
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-md">
                    <h2 class="text-lg font-bold mb-4">Environmental Impact</h2>
                    <p>Flooding can lead to soil erosion, water pollution, and destruction of wildlife habitats. The balance of ecosystems can be disrupted, causing long-term environmental consequences.</p>
                    <button onclick="closeModel('model-5')" class="mt-4 bg-indigo-500 text-white px-4 py-2 rounded-lg">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>    
    let quizData = [
    { question: "Flooding can only occur during heavy rain.", answer: false, explanation: "Flooding can occur from various sources, including melting snow, storm surges, and dam failures." },
    { question: "Dams can help control floodwaters.", answer: true, explanation: "Dams are designed to manage water flow and can reduce the risk of flooding downstream." },
    { question: "Floods can happen in any season.", answer: true, explanation: "Flooding can occur in any season due to rain, snowmelt, or storms." },
    { question: "Only coastal areas are at risk for flooding.", answer: false, explanation: "Flooding can affect inland areas as well due to heavy rainfall, river overflow, or flash floods." },
    { question: "Floodwaters can be contaminated and unsafe to drink.", answer: true, explanation: "Floodwaters often contain pollutants and pathogens, making them unsafe for consumption." },
    { question: "Flash floods can occur with little warning.", answer: true, explanation: "Flash floods can happen suddenly due to heavy rain in a short period, often with no time for evacuation." },
    { question: "All floods are caused by heavy rain.", answer: false, explanation: "Floods can be caused by various factors, including snowmelt, ice jams, and storm surges." },
    { question: "Flood insurance is important for homeowners.", answer: true, explanation: "Flood insurance can protect homeowners from significant financial losses due to flood damage." },
    { question: "Flooding only affects rural areas.", answer: false, explanation: "Flooding can impact urban areas significantly, leading to infrastructure damage and safety hazards." },
    { question: "Flood-prone areas can be identified using flood maps.", answer: true, explanation: "Flood maps show areas at risk for flooding and can help with preparedness." },
    { question: "You should never drive through flooded roads.", answer: true, explanation: "Even shallow water can sweep away vehicles and pose a serious risk to safety." },
    { question: "All flooding is natural.", answer: false, explanation: "Some flooding is caused by human activities, such as poor land management and urbanization." },
    { question: "Floods can improve soil fertility.", answer: true, explanation: "Floodwaters can deposit nutrient-rich silt on farmland, enhancing soil fertility after floods recede." },
    { question: "Floods can lead to landslides.", answer: true, explanation: "Heavy rains and flooding can saturate soil, making it unstable and prone to landslides." },
    { question: "The most common type of flood is river flooding.", answer: true, explanation: "River flooding occurs when rivers overflow their banks due to prolonged rainfall or rapid snowmelt." },
    { question: "It's safe to return home as soon as floodwaters recede.", answer: false, explanation: "Returning home too early can be dangerous due to potential hidden hazards like unstable structures or contaminated water." },
    { question: "Flood warnings are issued by meteorological agencies.", answer: true, explanation: "Meteorological agencies monitor weather patterns and issue warnings to inform the public about potential flooding." },
    { question: "Floodwaters can carry debris and hazardous materials.", answer: true, explanation: "Floodwaters can pick up dangerous debris, including sharp objects and chemicals, posing additional risks." },
    { question: "Not all floods are destructive.", answer: true, explanation: "Some floods can be beneficial for ecosystems, replenishing groundwater and habitats." },
    { question: "You should wait for the water to go down before evacuating.", answer: false, explanation: "If a flood warning is issued, it's important to evacuate immediately rather than waiting." },
    { question: "Flash floods can occur within minutes.", answer: true, explanation: "Flash floods can happen very quickly, often within minutes of heavy rainfall." },
    { question: "Flood barriers can help protect properties.", answer: true, explanation: "Flood barriers can divert water and reduce the impact of flooding on properties." },
    { question: "It is safe to walk through floodwaters if the water is clear.", answer: false, explanation: "Clear floodwater can still be contaminated and pose health risks." },
    { question: "Hurricanes can cause flooding.", answer: true, explanation: "Hurricanes can produce heavy rain and storm surges that lead to significant flooding." },
    { question: "Floods can result in long-term economic losses.", answer: true, explanation: "The aftermath of floods can lead to prolonged economic disruption, affecting businesses and jobs." },
    { question: "Flooding can destroy infrastructure such as roads and bridges.", answer: true, explanation: "Floodwaters can undermine and damage critical infrastructure, leading to transportation challenges." },
    { question: "People living in flood-prone areas should have an evacuation plan.", answer: true, explanation: "Having an evacuation plan helps ensure safety during a flood." },
    { question: "Floodwaters can damage electrical systems.", answer: true, explanation: "Water can cause electrical systems to short circuit, leading to fire hazards." },
    { question: "Flooding can lead to water supply contamination.", answer: true, explanation: "Flooding can contaminate drinking water supplies, posing health risks to communities." },
    { question: "FEMA provides assistance for flood recovery.", answer: true, explanation: "The Federal Emergency Management Agency (FEMA) offers resources and support for communities affected by floods." },
    { question: "Floods can disrupt transportation and logistics.", answer: true, explanation: "Flooding can close roads and impede transportation, affecting supply chains." },
    { question: "Inland flooding can occur from rivers and lakes.", answer: true, explanation: "Rivers and lakes can overflow, causing inland flooding even away from the coast." },
    { question: "It's safe to swim in floodwaters.", answer: false, explanation: "Floodwaters can be extremely dangerous, with strong currents and hidden hazards." },
    { question: "Evacuations should be done in a timely manner during a flood.", answer: true, explanation: "Timely evacuations can save lives and reduce injuries during flooding events." },
    { question: "Flood alerts can be received through mobile apps.", answer: true, explanation: "Many mobile apps provide real-time flood alerts and emergency notifications." },
    { question: "Floods can occur due to rapid melting of snow.", answer: true, explanation: "Rapid snowmelt can lead to increased water flow in rivers, resulting in flooding." },
    { question: "Rainfall patterns are the only factor that contributes to flooding.", answer: false, explanation: "Flooding can also be influenced by land use, topography, and human activity." },
    { question: "You should stay informed during a flood event.", answer: true, explanation: "Staying informed helps individuals make safe decisions during emergencies." },
    { question: "Flooding can lead to a loss of life.", answer: true, explanation: "Flooding is a major cause of fatalities during natural disasters." },
    { question: "Building in flood-prone areas can increase risks.", answer: true, explanation: "Development in flood-prone areas can exacerbate flooding and damage." },
    { question: "Flooding can disrupt agricultural production.", answer: true, explanation: "Flooding can destroy crops and render farmland unusable." },
    { question: "Flood insurance is optional for homeowners in flood zones.", answer: false, explanation: "While optional, flood insurance is highly recommended for those in flood-prone areas." },
    { question: "Flooding can affect air quality.", answer: true, explanation: "Flooding can lead to contamination and long-term effects on air quality due to mold growth." },
    { question: "Flood mitigation strategies can help reduce risks.", answer: true, explanation: "Mitigation strategies, such as levees and retention basins, can reduce the impact of flooding." },
    { question: "Flash floods occur more frequently than regular floods.", answer: true, explanation: "Flash floods can happen quickly and are often more common during heavy storms." },
    { question: "Flooding can displace entire communities.", answer: true, explanation: "Major floods can force people to evacuate and disrupt communities for long periods." },
    { question: "Floodwaters can carry harmful chemicals.", answer: true, explanation: "Flooding can mobilize hazardous materials from industrial sites, posing health risks." },
    { question: "Groundwater can be contaminated by floodwaters.", answer: true, explanation: "Floodwaters can seep into groundwater, leading to contamination of drinking water supplies." },
    { question: "Houses on stilts are safer in flood-prone areas.", answer: true, explanation: "Building homes on stilts can help prevent flood damage." },
    { question: "Flood warnings are issued for short-duration storms only.", answer: false, explanation: "Flood warnings can be issued for both short-duration and long-duration storms." },
    { question: "The effects of flooding can last for years.", answer: true, explanation: "Recovery from significant flooding can take years for individuals and communities." },
    { question: "Flooding can increase the risk of disease outbreaks.", answer: true, explanation: "Flooding can create conditions conducive to the spread of waterborne diseases." },
    { question: "It's safe to let children play in floodwaters.", answer: false, explanation: "Floodwaters can be dangerous for children due to strong currents and contamination." },
    { question: "Flooding can lead to loss of biodiversity.", answer: true, explanation: "Flooding can destroy habitats, affecting wildlife and plant species." },
    { question: "Flood-prone areas can be improved with proper drainage systems.", answer: true, explanation: "Improving drainage systems can help manage stormwater and reduce flooding risks." },
    { question: "Flood events can lead to changes in local policies.", answer: true, explanation: "Major flooding incidents can prompt changes in land use and zoning regulations." },
    { question: "People should not ignore flood evacuation orders.", answer: true, explanation: "Ignoring evacuation orders can put lives at risk during dangerous flooding." },
    { question: "Flooding can cause long-term mental health issues.", answer: true, explanation: "The stress and trauma from flooding can lead to mental health challenges." },
    { question: "Not all floodplains are designated by the government.", answer: false, explanation: "Floodplains are typically designated by government agencies to inform land use planning." },
    { question: "Flooding can damage historical landmarks.", answer: true, explanation: "Flooding can lead to significant damage to historical buildings and monuments." },
    { question: "Emergency responders are trained to handle flood situations.", answer: true, explanation: "Emergency responders receive training to assist in flood evacuations and recovery efforts." },
    { question: "Flooding can increase insurance premiums.", answer: true, explanation: "Homes in flood-prone areas often have higher insurance premiums due to the increased risk." },
    { question: "Flooding is a major concern for urban planners.", answer: true, explanation: "Urban planners must consider flood risks when developing land use strategies." },
    { question: "Evacuating during a flood is always easy.", answer: false, explanation: "Evacuating during a flood can be challenging due to road closures and heavy traffic." },
    { question: "Flood forecasting technology has improved over the years.", answer: true, explanation: "Advancements in technology have enhanced the ability to predict and monitor floods." },
    { question: "Floods can occur without heavy precipitation.", answer: true, explanation: "Flooding can occur from other sources, such as dam failures or ice jams." },
    { question: "Low-lying areas are more vulnerable to flooding.", answer: true, explanation: "Low-lying areas are more likely to experience flooding due to water accumulation." },
    { question: "Flooding can lead to increased property taxes.", answer: true, explanation: "Flooding can impact property values and subsequently lead to changes in tax assessments." },
    { question: "You can predict flooding solely by observing local weather.", answer: false, explanation: "Flood predictions rely on data analysis, including rainfall amounts and river levels, not just local weather observations." },
    { question: "Floods can cause social and economic inequality.", answer: true, explanation: "Communities with fewer resources are often more severely affected by flooding." },
    { question: "Community engagement is important for flood preparedness.", answer: true, explanation: "Community involvement helps increase awareness and preparedness for flooding risks." },
    { question: "Climate change can increase the frequency of flooding.", answer: true, explanation: "Climate change can lead to more extreme weather events, increasing the risk of flooding." },
    { question: "It is safe to ignore weather forecasts if it looks clear outside.", answer: false, explanation: "Weather forecasts provide important information about potential flooding risks, regardless of current conditions." },
    { question: "The first step in flood preparedness is to know your risk.", answer: true, explanation: "Understanding flood risk is essential for effective preparedness and response planning." },
    { question: "Floods can change river courses over time.", answer: true, explanation: "Erosion and sedimentation from flooding can alter the natural course of rivers." },
    { question: "There is no safe place to shelter during a flood.", answer: false, explanation: "High ground is the safest place to shelter during a flood event." },
    { question: "Floods can lead to loss of agricultural land.", answer: true, explanation: "Flooding can render farmland unusable for extended periods, impacting food production." },
    { question: "Reforestation can help mitigate flood risks.", answer: true, explanation: "Healthy forests can absorb rainfall and reduce runoff, decreasing flood risks." },
    { question: "Flood-related deaths are often preventable.", answer: true, explanation: "Many flood-related deaths occur due to lack of awareness or failure to evacuate in time." },
    { question: "It's important to stay informed about flood risks in your area.", answer: true, explanation: "Being aware of local flood risks can help individuals prepare and respond appropriately." },
    { question: "Flood control projects are always successful.", answer: false, explanation: "Not all flood control projects are effective; some can fail or may not account for extreme weather." },
    { question: "Flooding can impact local wildlife populations.", answer: true, explanation: "Flooding can disrupt habitats and affect the survival of various species." },
    { question: "Flood awareness programs are crucial for community safety.", answer: true, explanation: "Education and awareness can significantly reduce risks associated with flooding." },
    { question: "Flood risks can be managed through proper urban design.", answer: true, explanation: "Effective urban planning can minimize the impact of flooding on communities." },
    { question: "Flooding can result in loss of cultural heritage.", answer: true, explanation: "Floods can damage cultural sites and artifacts, resulting in a loss of history." },
    { question: "There is a one-size-fits-all solution to flooding.", answer: false, explanation: "Flood management solutions must be tailored to local conditions and needs." },
    { question: "Flooding can exacerbate existing health conditions.", answer: true, explanation: "Flooding can worsen health issues, especially for vulnerable populations." },
    { question: "Public transportation can be affected by flooding.", answer: true, explanation: "Flooding can disrupt public transportation services, affecting mobility." },
    { question: "Flooding can lead to increased crime rates.", answer: true, explanation: "Displacement and disruption caused by flooding can lead to social unrest and increased crime." },
    { question: "Floodplain zoning can help prevent future flood damage.", answer: true, explanation: "Zoning laws can restrict development in flood-prone areas, reducing risks." },
    { question: "Floods can cause significant emotional distress.", answer: true, explanation: "The aftermath of flooding can lead to trauma and emotional challenges for survivors." },
    { question: "You should not use electrical appliances during flooding.", answer: true, explanation: "Using electrical appliances in flooded areas can lead to electrocution." },
    { question: "Flooding can increase the cost of living in affected areas.", answer: true, explanation: "Floods can impact housing availability and increase living costs due to demand." },
    { question: "Flood recovery can take years for individuals and communities.", answer: true, explanation: "The rebuilding process after a flood can extend over several years." },
    { question: "Flood warnings can vary based on local conditions.", answer: true, explanation: "Different regions may experience flooding differently, affecting warning levels." },
    { question: "Public awareness campaigns can improve flood preparedness.", answer: true, explanation: "Awareness campaigns can inform communities about flood risks and preparedness measures." },
    { question: "Flooding is a global issue affecting many countries.", answer: true, explanation: "Flooding affects various regions worldwide, making it a global concern." },
    { question: "Climate adaptation strategies are essential for flood-prone areas.", answer: true, explanation: "Adaptation strategies can help communities cope with changing climate conditions and flooding risks." },
    { question: "Increased urbanization can lead to more flooding.", answer: true, explanation: "Urbanization often increases impermeable surfaces, leading to higher runoff and flooding." },
    { question: "Floods can have positive effects on ecosystems.", answer: true, explanation: "Floods can rejuvenate wetlands and provide nutrients to ecosystems." },
    { question: "Floods can affect the availability of emergency services.", answer: true, explanation: "Flooding can hinder access to emergency services, affecting response times." },
    { question: "It's safe to ignore flood watches.", answer: false, explanation: "Flood watches indicate potential flooding; ignoring them can be dangerous." },
    { question: "Flooding can disrupt communication networks.", answer: true, explanation: "Flooding can damage communication infrastructure, making it difficult to relay information." },
    { question: "Personal preparedness is essential during flood season.", answer: true, explanation: "Having a personal preparedness plan can improve safety during flooding events." },
    { question: "Flooding can lead to job losses in affected areas.", answer: true, explanation: "Flooding can result in business closures and job losses due to damage and disruption." },
    { question: "Floods can affect the quality of life in communities.", answer: true, explanation: "Flooding can lead to displacement, damage, and economic hardship, impacting quality of life." },
    { question: "Flood preparedness includes having an emergency kit.", answer: true, explanation: "An emergency kit can provide essential supplies during a flood." },
    { question: "You should never attempt to rescue someone from floodwaters.", answer: false, explanation: "While it's important to help others, rescuing someone from floodwaters should only be attempted if safe to do so." },
    { question: "Flood-related infrastructure improvements can be costly.", answer: true, explanation: "Improving infrastructure to manage flooding can require significant investment." },
    { question: "Flood recovery efforts can strain community resources.", answer: true, explanation: "Communities often face resource shortages during recovery, impacting efforts." },
    { question: "Floodwaters can carry debris and pollutants.", answer: true, explanation: "Floodwaters can pick up harmful substances, making them unsafe." },
    { question: "Flooding can increase the demand for mental health services.", answer: true, explanation: "Flooding can lead to increased mental health issues, creating higher demand for services." },
    { question: "Floods can happen even during drought conditions.", answer: true, explanation: "Flooding can occur due to flash floods, dam breaks, or other sudden events, regardless of drought." },
    { question: "It's important to have an evacuation plan in place.", answer: true, explanation: "Having an evacuation plan can save lives during a flood." },
    { question: "Flood recovery can be an opportunity for improvement.", answer: true, explanation: "Communities can use recovery efforts to enhance resilience against future flooding." },
    { question: "Flooding is primarily a rural issue.", answer: false, explanation: "Flooding affects both urban and rural areas, posing risks to all communities." },
    { question: "Floods can lead to soil erosion.", answer: true, explanation: "Flooding can wash away soil, leading to erosion and loss of land." },
    { question: "Flood-prone areas are often marked on maps.", answer: true, explanation: "Flood maps help identify areas at risk of flooding, aiding in planning and preparedness." },
    { question: "Flooding can affect water quality for drinking.", answer: true, explanation: "Floodwaters can contaminate drinking water sources, posing health risks." },
    { question: "Flooding is only a problem in developing countries.", answer: false, explanation: "Flooding can occur in any country, regardless of its development status." },
    { question: "Flooding can lead to infrastructure improvements.", answer: true, explanation: "After flooding, communities may invest in better infrastructure to prevent future events." },
    { question: "Flash floods can occur with little warning.", answer: true, explanation: "Flash floods can develop rapidly and are often unpredictable." },
    { question: "Floods can damage roads and bridges.", answer: true, explanation: "Flooding can compromise infrastructure, making roads and bridges unsafe." },
    { question: "Flood recovery can be faster with community support.", answer: true, explanation: "Community support and involvement can speed up recovery efforts after a flood." },
    { question: "Flooding can create opportunities for community bonding.", answer: true, explanation: "Shared experiences during floods can bring communities together and foster resilience." },
    { question: "Flooding is a predictable natural disaster.", answer: false, explanation: "While flood patterns can be studied, many factors make precise predictions difficult." },
    { question: "Floods can displace families and individuals.", answer: true, explanation: "Flooding can force people to leave their homes, leading to displacement." },
    { question: "Flood risks can change over time.", answer: true, explanation: "As urban areas grow and climate changes, flood risks may evolve." },
    { question: "Flood insurance is optional in flood-prone areas.", answer: false, explanation: "In many flood-prone areas, flood insurance is strongly recommended and sometimes required." },
    { question: "Flooding can disrupt agricultural practices.", answer: true, explanation: "Flooding can damage crops and disrupt farming activities." },
    { question: "Floods can impact local economies.", answer: true, explanation: "Flooding can lead to significant economic losses for communities and businesses." },
    { question: "Flooding is solely caused by rainfall.", answer: false, explanation: "Flooding can be caused by various factors, including rainfall, snowmelt, and dam failures." },
    { question: "Flood-prone areas often have warning systems in place.", answer: true, explanation: "Many flood-prone regions have alert systems to inform residents of impending floods." },
    { question: "Flood recovery involves more than rebuilding structures.", answer: true, explanation: "Recovery includes emotional support, economic assistance, and infrastructure improvements." },
    { question: "Floodwaters can contain hazardous materials.", answer: true, explanation: "Floodwaters can carry chemicals and other hazardous materials, making them dangerous." },
    { question: "Flooding can negatively impact local tourism.", answer: true, explanation: "Flooding can deter tourists and damage attractions, affecting local economies." },
    { question: "Flood awareness is crucial for students.", answer: true, explanation: "Teaching students about flooding can prepare them for future risks." },
    { question: "Floods can change the landscape over time.", answer: true, explanation: "Repeated flooding can reshape land and alter ecosystems." },
    { question: "Floods can create new habitats for wildlife.", answer: true, explanation: "Flooding can create wetlands, providing new habitats for various species." },
    { question: "Flooding can lead to loss of power supply.", answer: true, explanation: "Floods can damage power infrastructure, leading to outages." },
    { question: "Floodwaters can carry infectious diseases.", answer: true, explanation: "Contaminated floodwaters can pose health risks, including disease transmission." },
    { question: "Flooding affects only those directly in its path.", answer: false, explanation: "Flooding can have ripple effects, impacting wider communities and economies." },
    { question: "Flood preparedness can be a community effort.", answer: true, explanation: "Communities can work together to create flood preparedness plans and resources." },
    { question: "Floods can cause long-term economic impacts.", answer: true, explanation: "The economic consequences of flooding can be felt for years after an event." },
    { question: "Flooding can lead to increased demand for construction.", answer: true, explanation: "After flooding, there may be a surge in demand for construction and repair services." },
    { question: "Flooding is only a concern in low-income areas.", answer: false, explanation: "Flooding can affect communities of all economic backgrounds." },
    { question: "Floods can contribute to climate change.", answer: false, explanation: "Floods are a result of climate change effects, but they do not directly contribute to climate change." },
    { question: "Flooding can disrupt supply chains.", answer: true, explanation: "Flooding can affect transportation routes, disrupting the flow of goods." },
    { question: "Floods can impact mental health in children.", answer: true, explanation: "Children may experience anxiety and trauma due to flooding events." },
    { question: "Flood-prone areas can benefit from community education programs.", answer: true, explanation: "Education programs can inform residents about risks and preparedness measures." },
    { question: "Floods can lead to increased property values.", answer: false, explanation: "Flooding often decreases property values due to perceived risks." },
    { question: "Flooding can overwhelm local healthcare systems.", answer: true, explanation: "During flooding, healthcare services may be stretched thin due to increased needs." },
    { question: "Flooding can affect access to clean water.", answer: true, explanation: "Flooding can contaminate water supplies, leading to health issues." },
    { question: "Flood recovery requires collaboration among agencies.", answer: true, explanation: "Effective recovery often involves collaboration between government and community organizations." },
    { question: "Flooding is a risk for large cities only.", answer: false, explanation: "Flooding can occur in both urban and rural areas, posing risks to all communities." },
    { question: "Flooding can lead to changes in land use practices.", answer: true, explanation: "After a flood, communities may re-evaluate land use to prevent future damage." },
    { question: "Floods can damage personal belongings.", answer: true, explanation: "Flooding can ruin furniture, electronics, and other personal items." },
    { question: "Flood recovery can impact local elections.", answer: true, explanation: "The response to flooding can influence voter opinions and election outcomes." },
    { question: "Flooding can lead to increased demand for emergency services.", answer: true, explanation: "Flood events often require significant emergency response and recovery efforts." },
    { question: "Flooding can create opportunities for innovation.", answer: true, explanation: "The challenges of flooding can lead to new solutions and innovations in flood management." },
    { question: "Flooding is only a seasonal issue.", answer: false, explanation: "Flooding can happen at any time of the year, depending on various factors." },
    { question: "Flood risks can be reduced through public policy.", answer: true, explanation: "Public policy can play a significant role in managing flood risks." },
    { question: "Flooding can lead to economic disparities.", answer: true, explanation: "Flooding can exacerbate existing inequalities within communities." },
    { question: "Floods can cause infrastructure failures.", answer: true, explanation: "Floods can overwhelm infrastructure, leading to failures in roads and utilities." },
    { question: "Floods can have short-term and long-term impacts.", answer: true, explanation: "The effects of flooding can be felt immediately and for years after an event." },
    { question: "Flooding can affect local wildlife migration patterns.", answer: true, explanation: "Flooding can disrupt migration routes for wildlife." },
    { question: "Floods are always predictable.", answer: false, explanation: "While certain patterns can be anticipated, many floods occur with little warning." },
    { question: "Flood recovery can involve mental health support.", answer: true, explanation: "Mental health services are often essential during flood recovery efforts." },
    { question: "Flooding can create barriers to education.", answer: true, explanation: "Floods can disrupt school operations, affecting students' education." },
    { question: "Flood risks are static and do not change over time.", answer: false, explanation: "Flood risks can change due to development, climate change, and other factors." },
    { question: "Floods can provide fresh water to ecosystems.", answer: true, explanation: "Flooding can replenish wetlands and aquifers, benefiting ecosystems." },
    { question: "Flood recovery can benefit from technology.", answer: true, explanation: "Technology can aid in recovery by providing data and improving communication." },
    { question: "Floods are a common occurrence worldwide.", answer: true, explanation: "Flooding is one of the most frequent natural disasters globally." },
    { question: "Flood recovery can take years.", answer: true, explanation: "Complete recovery from flooding can take a significant amount of time." },
    { question: "Flooding can affect historical sites.", answer: true, explanation: "Floods can damage or destroy historical sites and artifacts." },
    { question: "Floods can alter river courses.", answer: true, explanation: "Flooding can change the natural course of rivers, impacting ecosystems." },
    { question: "Floods can lead to increased regulation of land use.", answer: true, explanation: "After a flood, communities may implement stricter regulations to manage land use." },
    { question: "Flooding can have lasting emotional impacts.", answer: true, explanation: "The trauma of flooding can have long-term emotional effects on individuals." },
    { question: "Flooding is less severe in developed countries.", answer: false, explanation: "Flooding can be severe in both developed and developing countries, depending on various factors." },
    { question: "Flood recovery can lead to community engagement.", answer: true, explanation: "Recovery efforts often encourage community involvement and collaboration." },
    { question: "Flooding can reduce biodiversity.", answer: true, explanation: "Flooding can disrupt habitats, leading to a decline in biodiversity." },
    { question: "Floods can help rejuvenate ecosystems.", answer: true, explanation: "In some cases, flooding can benefit ecosystems by renewing nutrients." },
    { question: "Flooding is a simple problem with a straightforward solution.", answer: false, explanation: "Flooding is a complex issue that requires multifaceted solutions." },
    { question: "Floods can exacerbate existing health issues.", answer: true, explanation: "Individuals with pre-existing health conditions may face greater risks during floods." },
    { question: "Flood recovery can benefit from volunteer efforts.", answer: true, explanation: "Community volunteers can play a significant role in recovery after flooding." },
    { question: "Floods can negatively impact mental health.", answer: true, explanation: "Experiencing a flood can lead to anxiety, depression, and other mental health issues." },
    { question: "Flooding can cause food shortages.", answer: true, explanation: "Floods can damage crops and disrupt food supply chains, leading to shortages." },
    { question: "Flood recovery is the sole responsibility of the government.", answer: false, explanation: "Recovery requires collaboration between government, community, and non-profit organizations." },
    { question: "Flooding can lead to community resilience.", answer: true, explanation: "Experiencing and recovering from floods can strengthen community bonds and resilience." },
    { question: "Floods can affect transportation systems.", answer: true, explanation: "Flooding can disrupt transportation networks, affecting travel and logistics." },
    { question: "Flood recovery efforts can lead to improved infrastructure.", answer: true, explanation: "Communities often use recovery as an opportunity to upgrade infrastructure." },
    { question: "Flooding is a problem only during heavy rain.", answer: false, explanation: "Flooding can occur due to various factors, including snowmelt and poor drainage." },
    { question: "Flood risks can be managed through education.", answer: true, explanation: "Education about flood risks can help communities prepare and respond effectively." },
    { question: "Flooding can lead to economic recovery opportunities.", answer: true, explanation: "Post-flood recovery can create opportunities for economic growth and innovation." },
    { question: "Flooding impacts only rural populations.", answer: false, explanation: "Flooding affects both urban and rural communities, posing risks to all." },
    { question: "Floods can impact infrastructure planning.", answer: true, explanation: "Flood events can influence future infrastructure planning and development." },
    { question: "Flooding can lead to a decrease in local business activity.", answer: true, explanation: "Floods can disrupt businesses, leading to economic downturns in affected areas." },
    { question: "Floods can result in population displacement.", answer: true, explanation: "Flooding can force individuals and families to relocate, leading to displacement." },
    { question: "Flood recovery can strengthen community ties.", answer: true, explanation: "Working together during recovery can enhance community connections." },
    { question: "Flooding can exacerbate social inequalities.", answer: true, explanation: "Flooding often disproportionately impacts marginalized communities." },
    { question: "Floods can provide temporary relief from drought.", answer: true, explanation: "In some cases, floods can replenish water supplies and alleviate drought conditions." },
    { question: "Flood recovery can benefit from international aid.", answer: true, explanation: "In severe flooding situations, international assistance can aid recovery efforts." },
    { question: "Floods can improve soil fertility.", answer: true, explanation: "Flooding can deposit nutrient-rich sediment, enhancing soil fertility." },
    { question: "Flooding is primarily an environmental issue.", answer: false, explanation: "Flooding is also a social and economic issue, affecting communities and economies." },
    { question: "Flooding can alter land ownership dynamics.", answer: true, explanation: "Flooding can change land values and ownership, impacting community structures." },
    { question: "Floods can disrupt local food systems.", answer: true, explanation: "Flooding can damage agricultural areas, affecting local food supply." },
    { question: "Flood recovery can foster innovation in water management.", answer: true, explanation: "Flood recovery can lead to new solutions in water and flood management." },
    { question: "Floods are solely caused by natural phenomena.", answer: false, explanation: "Human activities can exacerbate flooding, such as poor urban planning." },
    { question: "Flooding can impact emergency response times.", answer: true, explanation: "Flooding can hinder emergency response efforts, delaying assistance." },
    { question: "Flooding can lead to changes in insurance policies.", answer: true, explanation: "After significant floods, insurance companies may revise policies and rates." },
    { question: "Floods can provide natural disaster training opportunities.", answer: true, explanation: "Flood events can highlight the need for better disaster preparedness and training." },
    { question: "Flooding is an issue only in coastal areas.", answer: false, explanation: "Flooding can occur inland due to heavy rains, river overflow, or other factors." },
    { question: "Floods can lead to habitat destruction.", answer: true, explanation: "Flooding can damage or destroy habitats, impacting local wildlife." },
    { question: "Flood recovery can enhance community engagement.", answer: true, explanation: "Communities often come together to support recovery efforts." },
    { question: "Flooding can lead to loss of cultural heritage.", answer: true, explanation: "Floods can damage historical sites and artifacts, threatening cultural heritage." },
    { question: "Flooding is an unavoidable natural disaster.", answer: true, explanation: "Flooding occurs due to natural processes and cannot be entirely prevented." },
    { question: "Flood recovery can take place without community involvement.", answer: false, explanation: "Community involvement is essential for effective recovery efforts." },
    { question: "Flooding can lead to loss of agricultural land.", answer: true, explanation: "Flooding can render agricultural land unusable, impacting food production." },
    { question: "Flooding can strain local governments.", answer: true, explanation: "Local governments often face significant challenges in managing flood responses." },
    { question: "Flooding can affect mental health in adults.", answer: true, explanation: "Adults can also experience anxiety and stress due to flooding events." },
    { question: "Flooding can reduce the quality of life.", answer: true, explanation: "Flooding can disrupt daily life and negatively impact community well-being." },
    { question: "Floods can improve ecosystem health.", answer: false, explanation: "While floods can provide nutrients, they can also cause significant damage to ecosystems." },
    { question: "Flood recovery can inspire policy changes.", answer: true, explanation: "Post-flood recovery can lead to improved policies and practices." },
    { question: "Flooding is an issue for all communities.", answer: true, explanation: "Flooding can impact any community, regardless of size or location." },
    { question: "Floods can increase pollution levels.", answer: true, explanation: "Flooding can spread pollutants, worsening environmental conditions." },
    { question: "Flooding is a problem only in developing nations.", answer: false, explanation: "Flooding can occur anywhere, affecting both developed and developing nations." },
    { question: "Flood recovery can promote social cohesion.", answer: true, explanation: "Working together in recovery efforts can strengthen social bonds." },
    { question: "Flooding can damage infrastructure.", answer: true, explanation: "Floods can cause significant damage to roads, bridges, and utilities." },
    { question: "Flooding can impact mental health in children.", answer: true, explanation: "Children are vulnerable to the emotional impacts of flooding." },
    { question: "Flooding can create new job opportunities.", answer: true, explanation: "Recovery efforts can lead to job creation in various sectors." },
    { question: "Flooding can disrupt access to healthcare.", answer: true, explanation: "Floods can make it difficult for individuals to access healthcare services." },
    { question: "Flood recovery is only necessary after major floods.", answer: false, explanation: "Recovery can be necessary after any significant flooding event." },
    { question: "Flooding can reduce property values.", answer: true, explanation: "Flooding can negatively affect property values in impacted areas." },
    { question: "Flooding can change community demographics.", answer: true, explanation: "Flooding can lead to changes in population dynamics within communities." },
    { question: "Flood recovery can foster a sense of community.", answer: true, explanation: "Collective recovery efforts can enhance community spirit and cooperation." },
    { question: "Flooding can impact financial stability.", answer: true, explanation: "Floods can lead to financial hardships for individuals and businesses." },
    { question: "Flooding is a natural event that cannot be predicted.", answer: false, explanation: "While some floods are unpredictable, many can be forecasted using weather data." },
    { question: "Flood recovery requires only government resources.", answer: false, explanation: "Successful recovery often requires collaboration between multiple stakeholders." },
    { question: "Floods can enhance groundwater recharge.", answer: true, explanation: "Floods can contribute to replenishing groundwater supplies." },
    { question: "Flood recovery can highlight community strengths.", answer: true, explanation: "The recovery process can reveal community resilience and strengths." },
    { question: "Flooding can lead to social activism.", answer: true, explanation: "Flooding can motivate communities to advocate for change and improved policies." },
    { question: "Flooding is a rare occurrence.", answer: false, explanation: "Flooding is a common natural disaster affecting many regions worldwide." },
    { question: "Flood recovery can improve local governance.", answer: true, explanation: "Post-flood evaluations can lead to better governance practices." },
    { question: "Flooding can create barriers to transportation.", answer: true, explanation: "Floods can disrupt transport routes, causing significant delays." },
    { question: "Flood recovery efforts can enhance disaster preparedness.", answer: true, explanation: "Experiences from recovery can improve future disaster preparedness." },
    { question: "Floods can impact wildlife habitats.", answer: true, explanation: "Flooding can alter or destroy habitats, affecting local wildlife populations." },
    { question: "Flooding is a problem only for the affected areas.", answer: false, explanation: "Flooding can have wider impacts, affecting neighboring areas and economies." },
    { question: "Flood recovery can promote environmental restoration.", answer: true, explanation: "Recovery efforts can include restoring natural habitats and ecosystems." },
    { question: "Floods can exacerbate poverty.", answer: true, explanation: "Flooding can push vulnerable populations further into poverty." },
    { question: "Flooding is only a problem for urban areas.", answer: false, explanation: "Flooding can impact both urban and rural communities." },
    { question: "Flooding can lead to innovative solutions for water management.", answer: true, explanation: "Flood events can drive innovation in managing water resources." },
    { question: "Flood recovery can provide lessons for future disaster management.", answer: true, explanation: "Recovering from floods can inform better disaster management strategies." },
    { question: "Flooding can lead to increased awareness of climate change.", answer: true, explanation: "Flood events can highlight the impacts of climate change on weather patterns." },
    { question: "Flooding is a straightforward issue with easy solutions.", answer: false, explanation: "Flooding is complex and requires comprehensive approaches for management." },
    { question: "Floods can create opportunities for community rebuilding.", answer: true, explanation: "After a flood, communities often have the chance to rebuild and improve." },
    { question: "Flood recovery can encourage economic development.", answer: true, explanation: "Post-flood recovery can stimulate local economies through reconstruction efforts." },
    { question: "Flooding can enhance cultural exchange.", answer: true, explanation: "Flood recovery efforts can bring diverse communities together, fostering cultural exchange." },
    { question: "Flood recovery is only about restoring physical infrastructure.", answer: false, explanation: "Recovery also involves emotional and community rebuilding." },
    { question: "Floods can impact property insurance costs.", answer: true, explanation: "Flooding can lead to increased property insurance rates." },
    { question: "Flood recovery can empower marginalized communities.", answer: true, explanation: "Recovery efforts can uplift marginalized voices and communities." },
    { question: "Floods can provide lessons in resilience.", answer: true, explanation: "Experiencing floods can teach communities about resilience and adaptation." },
    { question: "Flooding can lead to economic losses for businesses.", answer: true, explanation: "Floods can disrupt business operations, causing significant economic losses." },
    { question: "Flood recovery requires long-term planning.", answer: true, explanation: "Effective recovery necessitates comprehensive long-term planning." },
    { question: "Flooding is an environmental issue only.", answer: false, explanation: "Flooding also has significant social and economic implications." },
    { question: "Flooding can create opportunities for urban planning.", answer: true, explanation: "Flood recovery can lead to better urban planning practices." },
    { question: "Flood recovery can strengthen local governance.", answer: true, explanation: "Recovering from floods can enhance local governance structures and practices." },
    { question: "Flooding can disrupt supply chains.", answer: true, explanation: "Flooding can interrupt supply chains, affecting local and national economies." },
    { question: "Flood recovery can foster creativity and innovation.", answer: true, explanation: "Recovery can lead to new ideas and solutions for flood management." },
    { question: "Flooding can create health hazards.", answer: true, explanation: "Floods can introduce health risks, such as waterborne diseases." },
    { question: "Flooding can impact real estate development.", answer: true, explanation: "Flood risks can influence real estate development and planning decisions." },
    { question: "Flood recovery can lead to increased community involvement.", answer: true, explanation: "Community members often engage more in local issues after a flood." },
    { question: "Flooding is a problem that can be entirely avoided.", answer: false, explanation: "While risks can be managed, flooding cannot be entirely prevented." },
    { question: "Flood recovery can inspire new policies.", answer: true, explanation: "Flood recovery experiences can inform policy changes for better management." },
    { question: "Flooding can lead to economic disparities.", answer: true, explanation: "Flooding can exacerbate existing economic inequalities in communities." },
    { question: "Flood recovery can benefit from collaborative approaches.", answer: true, explanation: "Collaboration among stakeholders enhances recovery efforts." },
    { question: "Floods can create opportunities for community engagement.", answer: true, explanation: "Flood events can motivate community members to get involved in recovery efforts." },
    { question: "Flooding can have positive effects on some ecosystems.", answer: true, explanation: "Flooding can help rejuvenate certain ecosystems, providing benefits." },
    { question: "Flood recovery can improve infrastructure resilience.", answer: true, explanation: "Recovery processes can lead to infrastructure improvements and resilience." },
    { question: "Flooding is a localized issue only.", answer: false, explanation: "Flooding can have widespread impacts, affecting larger regions." },
    { question: "Flood recovery can lead to a greater understanding of flood risks.", answer: true, explanation: "Recovering from floods can enhance awareness and understanding of flood risks." },
    { question: "Flooding can increase community participation in local governance.", answer: true, explanation: "Communities often become more involved in governance after experiencing floods." },
    { question: "Flooding can provide new perspectives on urban planning.", answer: true, explanation: "Flood recovery can influence new approaches to urban planning and resilience." },
    { question: "Flood recovery is only about rebuilding physical structures.", answer: false, explanation: "Recovery also includes social and emotional rebuilding." },
    { question: "Flooding can disrupt global trade.", answer: true, explanation: "Floods can impact transportation routes, affecting global trade." },
    { question: "Flood recovery can involve youth engagement.", answer: true, explanation: "Youth often play a crucial role in recovery efforts." },
    { question: "Flooding can enhance environmental awareness.", answer: true, explanation: "Flood events can raise awareness about environmental issues." },
    { question: "Flood recovery can lead to community empowerment.", answer: true, explanation: "Recovery processes can empower communities to advocate for their needs." },
    { question: "Floods can have unpredictable impacts on ecosystems.", answer: true, explanation: "Flooding can lead to sudden changes in ecosystems, both positive and negative." },
    { question: "Flooding can improve water quality.", answer: false, explanation: "Flooding can often lead to water quality issues due to contamination." },
    { question: "Flood recovery can build social capital.", answer: true, explanation: "Recovery efforts can enhance social networks and community bonds." },
    ]

    let currentQuestion = 0;
    let shuffledQuizData = []; // Array to hold the shuffled questions

    function startQuiz() {
        shuffledQuizData = shuffleArray(quizData); // Shuffle the questions
        currentQuestion = 0;
        document.getElementById("quiz").classList.remove("hidden");
        showQuestion();
    }

    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1)); // Random index
            [array[i], array[j]] = [array[j], array[i]]; // Swap elements
        }
        return array;
    }

    function showQuestion() {
        document.getElementById("quiz-question").innerText = shuffledQuizData[currentQuestion].question;
        document.getElementById("quiz-feedback").classList.add("hidden"); // Hide feedback
    }

    function submitAnswer(isFact) {
        const isCorrect = (isFact === shuffledQuizData[currentQuestion].answer);
        showFeedback(isCorrect);
    }

    function showFeedback(isCorrect) {
        const feedbackTitle = document.getElementById("feedback-title");
        const feedbackMessage = document.getElementById("feedback-message");
        const feedbackQuestion = document.getElementById("feedback-question");

        const correctAnswer = shuffledQuizData[currentQuestion].answer ? "Fact" : "Myth"; // Change to Fact or Myth
        const explanation = shuffledQuizData[currentQuestion].explanation;

        // Show the question again in the feedback
        feedbackQuestion.innerText = `Question: ${shuffledQuizData[currentQuestion].question}`;

        if (isCorrect) {
            feedbackTitle.innerText = "Correct!";
            feedbackMessage.innerText = `Great job! That statement is a ${correctAnswer}. ${explanation}`;
        } else {
            feedbackTitle.innerText = "Incorrect!";
            feedbackMessage.innerText = `Oops! That statement is a ${correctAnswer}. ${explanation}`;
        }

        document.getElementById("quiz-feedback").classList.remove("hidden");
    }

    function closeQuiz() {
        document.getElementById("quiz-feedback").classList.add("hidden");
        currentQuestion = (currentQuestion + 1) % shuffledQuizData.length; // Loop back to the first question
        showQuestion(); // Show the next question
    }

    function openModel(modelId) {
        document.getElementById(modelId).classList.remove("hidden");
    }

    function closeModel(modelId) {
        document.getElementById(modelId).classList.add("hidden");
    }

    function toggleFAQ(element) {
    const answer = element.parentElement.querySelector("p");
    const arrow = element.querySelector(".faq-arrow");
    answer.classList.toggle('hidden'); // Toggle visibility of the answer

    // Change the arrow direction
    if (answer.classList.contains('hidden')) {
        arrow.innerHTML = "&#x25BC;"; // Down arrow
    } else {
        arrow.innerHTML = "&#x25B6;"; // Right arrow
    }
}

    startQuiz(); // Start the quiz on page load

    </script>
