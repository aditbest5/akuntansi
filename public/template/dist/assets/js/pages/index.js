document.addEventListener("DOMContentLoaded", function () {
    fetch("/api/general/modul")
        .then((response) => response.json())
        .then((data) => {
            let { msg } = data;
            let list_group = `<li>
            <button id="dropdown-menu-0" data-dropdown-toggle="multi-dropdown-0"
                class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                Developer Maintenance
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="multi-dropdown-0"
                class="absolute z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                    <ul class="space-y-4" aria-labelledby="dropdown-menu-0">
                        <li>
                            <a href="/list-modul-management"
                                class="flex items-center text-md block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Modul Management
                            </a>
                        </li>
                        <li>
                            <a href="/list-group-modul"
                                class="flex items-center text-md block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Group Modul Management
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>`;

            msg.forEach((value, index) => {
                console.log(value);
                list_group += `<li>
                <button id="dropdown-menu-${
                    index + 1
                }" data-dropdown-toggle="multi-dropdown-${index + 1}"
                    class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                    ${value["group"]["group_modul_name"]}
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="multi-dropdown-${index + 1}"
                    class="absolute z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                        <ul class="space-y-4" aria-labelledby="dropdown-menu-${
                            index + 1
                        }">`;

                value.modul.forEach((modul) => {
                    console.log(modul);
                    list_group += `
                        <li>
                            <a href="${
                                modul["modul_url"] ? modul["modul_url"] : "#"
                            }"
                                class="flex items-center text-md block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                ${modul["modul_name"]}
                            </a>
                        </li>
                    `;
                });
                list_group += `</ul></div>
                </div></li>`;
                // console.log(list_modul);
            });

            document.getElementById("nav").innerHTML = list_group;
            const dropdownButtons = document.querySelectorAll(
                '[data-dropdown-toggle^="multi-dropdown-"]'
            );
            dropdownButtons.forEach((button, index) => {
                button.addEventListener("click", () => {
                    dropdownButtons.forEach((otherButton, otherIndex) => {
                        if (otherIndex !== index) {
                            const otherDropdown = document.getElementById(
                                `multi-dropdown-${otherIndex}`
                            );
                            otherDropdown.classList.add("hidden");
                        }
                    });

                    const dropdown = document.getElementById(
                        `multi-dropdown-${index}`
                    );
                    dropdown.classList.toggle("hidden");
                });
            });

            // Add event listener to hide dropdowns when clicking outside
            document.body.addEventListener("click", (event) => {
                if (
                    !event.target.closest(
                        '[data-dropdown-toggle^="multi-dropdown-"]'
                    )
                ) {
                    dropdownButtons.forEach((button) => {
                        const dropdown = document.getElementById(
                            button.getAttribute("data-dropdown-toggle")
                        );
                        dropdown.classList.add("hidden");
                    });
                }
            });
        });
});
