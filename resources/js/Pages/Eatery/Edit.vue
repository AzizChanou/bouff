<script setup>
import { Head, useForm } from "@inertiajs/inertia-vue3";
import EateryDashboard from "@/Layouts/EateryDashboard.vue";

const props = defineProps({
    eatery: Object,
});

const form = useForm({
    id: props.eatery.id,
    label: props.eatery.label,
    ifu: props.eatery.ifu,
    rccm: props.eatery.rccm,
    picture: props.eatery.picture_path,
    description: props.eatery.description,
    cookingtime: props.eatery.cookingtime,
    open_hour: props.eatery.open_hour,
    closed_hour: props.eatery.closed_hour,
});

const submit = () => {
    form.put(route("eatery.update", form.id), {
        onSuccess: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="Editer profil" />
    <EateryDashboard>
        <div class="flex flex-col w-full h-full space-y-6 px-6 py-8">
            <h1 class="text-2xl font-bold font-sans">Restaurant</h1>
            <div class="w-full flex flex-col justify-between space-y-16">
                <form
                    @submit.prevent="submit"
                    class="flex flex-col space-y-3 justify-center"
                >
                    <div>
                        <label for="label" class="">Nom Restaurant</label>
                        <input
                            type="text"
                            id="label"
                            v-model="form.label"
                            required
                            autocomplete="label"
                            class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.label"
                        >
                            {{ form.errors.label }}
                        </div>
                    </div>
                    <div>
                        <label for="ifu" class="">IFU</label>
                        <input
                            type="text"
                            id="ifu"
                            v-model="form.ifu"
                            required
                            autocomplete="ifu"
                            class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.ifu"
                        >
                            {{ form.errors.ifu }}
                        </div>
                    </div>
                    <div>
                        <label for="rccm" class="">RCCM</label>
                        <input
                            type="text"
                            id="rccm"
                            v-model="form.rccm"
                            required
                            autocomplete="rccm"
                            class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.rccm"
                        >
                            {{ form.errors.rccm }}
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold" for="picture">Photo</label>
                        <input
                            class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                            type="file"
                            @input="form.picture = $event.target.files[0]"
                            id="picture"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.picture"
                        >
                            {{ form.errors.picture }}
                        </div>
                        <!--  <progress
                            v-if="form.progress"
                            class="w-full p-3 text-sm text-white font-bold rounded-md"
                            :value="form.progress.percentage"
                            max="100"
                        >
                            {{ form.progress.percentage }}%
                        </progress> -->
                    </div>
                    <div>
                        <label for="description" class="">Description</label>
                        <input
                            type="text"
                            id="description"
                            v-model="form.description"
                            required
                            autocomplete="description"
                            class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.description"
                        >
                            {{ form.errors.description }}
                        </div>
                    </div>
                    <div>
                        <label for="cookingtime" class="">Cookingtime</label>
                        <input
                            type="text"
                            id="cookingtime"
                            v-model="form.cookingtime"
                            required
                            autocomplete="cookingtime"
                            class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.cookingtime"
                        >
                            {{ form.errors.cookingtime }}
                        </div>
                    </div>
                    <div>
                        <label for="open_hour" class="">open_hour</label>
                        <input
                            type="text"
                            id="open_hour"
                            v-model="form.open_hour"
                            required
                            autocomplete="open_hour"
                            class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.open_hour"
                        >
                            {{ form.errors.open_hour }}
                        </div>
                    </div>
                    <div>
                        <label for="closed_hour" class="">closed_hour</label>
                        <input
                            type="text"
                            id="closed_hour"
                            v-model="form.closed_hour"
                            required
                            autocomplete="closed_hour"
                            class="rounded-md mt-1 p-2 bg-bouff-primarytree border-0 outline-bouff-primaryone w-full"
                        />
                        <div
                            class="text-sm text-red-600"
                            v-if="form.errors.closed_hour"
                        >
                            {{ form.errors.closed_hour }}
                        </div>
                    </div>
                    <button
                        type="submit"
                        :disabled="form.processing"
                        :class="{ 'opacity-25': form.processing }"
                        class="px-4 py-3 mt-4 bg-bouff-primaryone text-white font-bold rounded-md hover:bg-bouff-secondarytwo duration-500"
                    >
                        Modifier
                    </button>
                </form>
            </div>
        </div>
    </EateryDashboard>
</template>
