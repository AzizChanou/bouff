<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import UserDashboard from "@/Layouts/UserDashboard.vue";
import Icon from "@/Components/Icon.vue";

const currentYear = new Date().getFullYear();
</script>

<template>
    <Head title="A propos" />
    <UserDashboard>
        <div class="space-y-20 divide-y-2 px-6 py-8">
            <div class="space-y-2">
                <h1 class="text-4xl font-bold text-center">
                    QUI SOMMES <span class="text-bouff-primaryone">NOUS</span> ?
                </h1>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Iste sequi quod laudantium modi corrupti quae, eum placeat
                    velit asperiores atque iusto eveniet tempore, qui inventore
                    voluptate quidem beatae officiis expedita. Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Iste sequi quod
                    laudantium modi corrupti quae, eum placeat velit asperiores
                    atque iusto eveniet tempore, qui inventore voluptate quidem
                    beatae officiis expedita. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Iste sequi quod laudantium
                    modi corrupti quae, eum placeat velit asperiores atque iusto
                    eveniet tempore, qui inventore voluptate quidem beatae
                    officiis expedita.
                </p>
                <img
                    src="/storage/assets/team_one.svg"
                    alt=""
                    class="mx-auto hover:scale-110 duration-500"
                />
            </div>
            <div class="space-y-2 pt-4">
                <h1 class="text-4xl font-bold text-center">
                    NOTRE <span class="text-bouff-primaryone">PHILOSOPHIE</span>
                </h1>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Iste sequi quod laudantium modi corrupti quae, eum placeat
                    velit asperiores atque iusto eveniet tempore, qui inventore
                    voluptate quidem beatae officiis expedita. Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Iste sequi quod
                    laudantium modi corrupti quae, eum placeat velit asperiores
                    atque iusto eveniet tempore, qui inventore voluptate quidem
                    beatae officiis expedita. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Iste sequi quod laudantium
                    modi corrupti quae, eum placeat velit asperiores atque iusto
                    eveniet tempore, qui inventore voluptate quidem beatae
                    officiis expedita.
                </p>
                <img
                    src="/storage/assets/team_two.svg"
                    alt=""
                    class="mx-aut mx-auto hover:scale-110 duration-500"
                />
            </div>
            <div class="space-y-4 pt-4">
                <h1 class="text-4xl font-bold text-center">
                    NOTRE <span class="text-bouff-primaryone">EQUIPE</span>
                </h1>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Iste sequi quod laudantium modi corrupti quae, eum placeat
                    velit asperiores atque iusto eveniet tempore, qui inventore
                    voluptate quidem beatae officiis expedita. Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Iste sequi quod
                    laudantium modi corrupti quae, eum placeat velit asperiores
                    atque iusto eveniet tempore, qui inventore voluptate quidem
                    beatae officiis expedita.
                </p>
                <!-- <div
                    class="flex flex-col md:flex-row space-y-4 items-center md:space-x-6"
                >
                    <div class="space-y-6">
                        <img
                            src="../../../img/aziz.jpg"
                            alt="Aziz Chanou"
                            class="rounded-full ring-4 ring-bouff-primaryone hover:scale-110 w-24 h-24 duration-500"
                        />
                        <ul
                            class="space-x-3 flex flex-row text-bouff-secondarytree"
                        >
                            <li
                                class="hover:text-bouff-primaryone duration-500"
                            >
                                <a
                                    href="http://twitter.com/azizchanou"
                                    target="blank"
                                    ><Icon name="twitter"
                                /></a>
                            </li>
                            <li
                                class="hover:text-bouff-primaryone duration-500"
                            >
                                <a
                                    href="http://www.instagram.com/azizchanoux/"
                                    target="blank"
                                    ><Icon name="instagram"
                                /></a>
                            </li>
                            <li
                                class="hover:text-bouff-primaryone duration-500"
                            >
                                <a
                                    href="http://www.linkedin.com/in/aziz-chanou-65ba24215/"
                                    target="blank"
                                    ><Icon name="linkedin"
                                /></a>
                            </li>
                            <li
                                class="hover:text-bouff-primaryone duration-500"
                            >
                                <a
                                    href="http://github.com/AzizChanou"
                                    target="blank"
                                    ><Icon name="github"
                                /></a>
                            </li>
                        </ul>
                    </div>
                    <p class="text-justify">
                        Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Illo ut veniam natus nisi hic molestiae porro
                        repudiandae, dolorum error eius accusantium aperiam, rem
                        quos odio incidunt dolore iusto dignissimos dicta?
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Architecto ut iste iure, explicabo impedit ipsam
                        quo necessitatibus reprehenderit molestias sapiente
                        placeat quibusdam laboriosam rem vitae fugiat
                        voluptatibus! Sed, doloremque adipisci.
                    </p>
                </div>
                <div
                    class="flex flex-col md:flex-row space-y-4 items-center md:space-x-6"
                >
                    <div class="space-y-6">
                        <img
                            src="../../../img/aziz.jpg"
                            alt="Aziz Chanou"
                            class="rounded-full ring-4 ring-bouff-primaryone hover:scale-110 w-24 h-24 duration-500"
                        />
                        <ul
                            class="space-x-3 flex flex-row text-bouff-secondarytree"
                        >
                            <li
                                class="hover:text-bouff-primaryone duration-500"
                            >
                                <a
                                    href="http://twitter.com/azizchanou"
                                    target="blank"
                                    ><Icon name="twitter"
                                /></a>
                            </li>
                            <li
                                class="hover:text-bouff-primaryone duration-500"
                            >
                                <a
                                    href="http://www.instagram.com/azizchanoux/"
                                    target="blank"
                                    ><Icon name="instagram"
                                /></a>
                            </li>
                            <li
                                class="hover:text-bouff-primaryone duration-500"
                            >
                                <a
                                    href="http://www.linkedin.com/in/aziz-chanou-65ba24215/"
                                    target="blank"
                                    ><Icon name="linkedin"
                                /></a>
                            </li>
                            <li
                                class="hover:text-bouff-primaryone duration-500"
                            >
                                <a
                                    href="http://github.com/AzizChanou"
                                    target="blank"
                                    ><Icon name="github"
                                /></a>
                            </li>
                        </ul>
                    </div>
                    <p class="text-justify">
                        Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Illo ut veniam natus nisi hic molestiae porro
                        repudiandae, dolorum error eius accusantium aperiam, rem
                        quos odio incidunt dolore iusto dignissimos dicta?
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Architecto ut iste iure, explicabo impedit ipsam
                        quo necessitatibus reprehenderit molestias sapiente
                        placeat quibusdam laboriosam rem vitae fugiat
                        voluptatibus! Sed, doloremque adipisci..
                    </p>
                </div> -->
            </div>
            <div class="flex flex-col space-y-1 text-sm pt-4">
                <ul class="flex flex-row mx-auto space-x-6">
                    <a href="" target="blank">
                        <li class="hover:text-bouff-primaryone duration-500">
                            <Icon name="facebook" />
                        </li>
                    </a>
                    <a href="" target="blank">
                        <li class="hover:text-bouff-primaryone duration-500">
                            <Icon name="instagram" />
                        </li>
                    </a>
                    <a href="" target="blank">
                        <li class="hover:text-bouff-primaryone duration-500">
                            <Icon name="twitter" />
                        </li>
                    </a>
                    <a href="" target="blank">
                        <li class="hover:text-bouff-primaryone duration-500">
                            <Icon name="linkedin" />
                        </li>
                    </a>
                    <a href="" target="blank">
                        <li class="hover:text-bouff-primaryone duration-500">
                            <Icon name="tiktok" />
                        </li>
                    </a>
                </ul>
                <span class="text-center">
                    &copy; {{ currentYear }} Bouff . Tous droits reservés.
                </span>
            </div>
        </div>
    </UserDashboard>
</template>
