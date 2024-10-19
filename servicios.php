<?php include $_SERVER['DOCUMENT_ROOT'].'/fut100/templates/header.php';?>

<main class="bg-white">
<section class="max-w-7xl px-4 pt-24 pb-12 mx-auto">
  <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
    <h1 class="block pb-2 mb-5 text-4xl font-extrabold leading-none tracking-normal text-transparent md:text-6xl md:tracking-tight bg-clip-text bg-gradient-to-r from-green-400 to-purple-500">
      Simple, transparent pricing.
    </h1>
    <p class="px-0 mb-10 text-lg text-gray-500 md:text-xl lg:px-24">Pricing that works for companies of any size.</p>
  </div>
  <div class="w-full mx-auto xl:w-4/5">
    <div class="grid grid-cols-1 gap-16 lg:grid-cols-3 sm:gap-8">
      <div class="border-0 rounded-none shadow-none card sm:rounded-lg md:border">
        <div class="flex flex-col justify-between p-6 border-b border-gray-200">
          <p class="mb-1 text-lg font-semibold text-yellow-600">Take Flight</p>
          <p class="pb-0 my-2 font-mono text-4xl font-extrabold text-gray-900">$25</p>
          <p class="text-sm text-gray-500">Organization / month</p>
          <a href="#" class="w-full mt-6 btn btn-warning btn-lg">Get started for free &rarr;</a>
        </div>
        <ul class="flex flex-col flex-grow p-6 space-y-3">
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            <span class="text-gray-700"> Unlimited feedback </span>
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>

            <span
              class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer"
              x-data="tooltip()"
              x-spread="tooltip"
              x-position="top"
              title="The person who manages the feedback for the product."
              >One manager</span
            >
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>

            <span
              class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer"
              x-data="tooltip()"
              x-spread="tooltip"
              x-position="top"
              title="User is the person who submits the feedback. We are not counting the people who are upvoting features."
              >1000 submitters</span
            >
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            <span class="text-gray-700">Unlimited Private Boards</span>
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>

            <span
              class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer"
              x-data="tooltip()"
              x-spread="tooltip"
              x-position="top"
              title="User is the person who submits the feedback. We are not counting the people who are upvoting features."
              >Custom domains support</span
            >
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>

            <span
              class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer"
              x-data="tooltip()"
              x-spread="tooltip"
              x-position="top"
              title="Support for German, French, Polish and more."
              >Multi-language Support</span
            >
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>

            <span
              class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer"
              x-data="tooltip()"
              x-spread="tooltip"
              x-position="top"
              title="Manage your customer feedback at the comfort of your phone. On iOS and Android."
              >Free iOS and Android apps</span
            >
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            <span class="text-gray-700">3 Integrations</span>
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-yellow-600">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            <span class="text-gray-700">New features every 14 days</span>
          </li>
        </ul>
      </div>
      <div class="border-0 rounded-none shadow-none card sm:rounded-lg md:border">
        <div class="flex flex-col justify-between p-6 border-b border-gray-200">
          <div>
            <div class="flex items-center justify-between">
              <p class="mb-1 text-lg font-semibold text-purple-700">Fly High</p>
              <span class="badge bg-primary-light text-primary">Most popular</span>
            </div>
            <p class="my-2 font-mono text-4xl font-extrabold text-gray-900">$50</p>
            <p class="text-sm text-gray-500">Organization / month</p>
          </div>
          <a href="#" class="w-full mt-6 btn btn-primary btn-lg">Get started for free &rarr;</a>
        </div>
        <ul class="flex flex-col flex-grow p-6 space-y-3">
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
              <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            <span class="font-medium text-purple-700">Everything in Take Flight</span>
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Unlimited feedback
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>

            <span
              class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer"
              x-data="tooltip()"
              x-spread="tooltip"
              x-position="top"
              title="The person who manages the feedback for the product."
              >10 manager</span
            >
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>

            <span
              class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer"
              x-data="tooltip()"
              x-spread="tooltip"
              x-position="top"
              title="User is the person who submits the feedback. We are not counting the people who are upvoting features."
              >7500 submitters</span
            >
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            <span>Unlimited Integrations</span>
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-purple-700">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Humane support
          </li>
        </ul>
      </div>
      <div class="border-0 rounded-none shadow-none card sm:rounded-lg md:border">
        <div class="flex flex-col justify-between p-6 border-b border-gray-200">
          <div>
            <p class="mb-1 text-lg font-semibold text-pink-600">Enterprise</p>
            <p class="my-2 text-4xl font-bold text-gray-900">Custom</p>
            <p class="text-sm text-gray-500">Organization / month</p>
          </div>
          <a href="#" class="w-full mt-6 btn btn-light btn-lg">Initiate a chat &rarr;</a>
        </div>
        <ul class="flex flex-col flex-grow p-6 space-y-3">
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-600">
              <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            <span class="font-medium text-pink-600">Everything in Fly High</span>
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>

            Unlimited feedback
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>

            <span
              class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer"
              x-data="tooltip()"
              x-spread="tooltip"
              x-position="top"
              title="The person who manages the feedback for the product."
              >Unlimited manager</span
            >
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>

            <span
              class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer"
              x-data="tooltip()"
              x-spread="tooltip"
              x-position="top"
              title="User is the person who submits the feedback. We are not counting the people who are upvoting features."
              >Unlimited submitters</span
            >
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>

            <span class="text-gray-700">Unlimited Integrations</span>
          </li>
          <li class="flex items-start">
            <svg viewBox="0 0 20 20" fill="currentColor" class="flex-none w-4 h-4 mt-1 mr-2 text-pink-700">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>

            <span
              class="text-gray-800 border-b-2 border-gray-500 border-dotted cursor-pointer"
              x-data="tooltip()"
              x-spread="tooltip"
              x-position="top"
              title="Access to developers to build custom features and changes for your enterprise."
              >Feature on-request</span
            >
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

</main>


<?php include $_SERVER['DOCUMENT_ROOT'].'/fut100/templates/footer.php';?>